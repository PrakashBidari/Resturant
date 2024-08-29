<?php

namespace App\Services;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImageService
{

    public function addImages($model, $images = [], $directory)
    {
        $directory = preg_replace('/[^A-Za-z0-9\-]/', '', $directory);


        $this->saveImages($model, $images, '/images/' . $directory);
        return;
    }

    private function saveImages($model, $images, $directory)
    {
        // dd($images);
        if (!empty($images)) {
            $imageArr = [];
            $this->makeDirectory($directory);
            foreach ($images as $image) {
                // dd($image);
                // $imageNames = $this->makeName($image['image']);
                // $this->moveImage($image['image'], $directory, $imageNames['saveName']);

                if (is_array($image)) {
                    $imageNames = $this->makeName($image['image']);
                    $this->moveImage($image['image'], $directory, $imageNames['saveName']);
                } else {
                    $imageNames = $this->makeName($image);
                    $this->moveImage($image, $directory, $imageNames['saveName']);
                }

                // store image details as array
                $image_instance = new Image();

                $image_instance->image_type = $model;
                $image_instance->image_id = $model->image();
                $image_instance->saved_name = $imageNames['saveName'];
                $image_instance->original_name = $imageNames['originalName'];

                if (is_array($image)) {
                    $image_instance->alt_text = isset($image['alt_text']) ? $image['alt_text'] : null;
                }

                $image_instance->url = $directory;
                $imageArr[] = $image_instance;
            }



            $model->image()->saveMany($imageArr);
        }
        return;
    }


    private function makeDirectory($path)
    {
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path);
        }

        return;
    }

    public function moveImage($image, $directory, $saveName)
    {
        Storage::disk('local')->put($directory . '/' . $saveName, file_get_contents($image), [
            'visibility' => 'public'
        ]);
    }

    public function makeName($image)
    {
        $originalName = Str::slug(trim($image->getClientOriginalName()));
        $NameWithoutExtension = Str::limit(pathinfo($originalName, PATHINFO_FILENAME), 200);
        $saveName = time() . '-' . $NameWithoutExtension . '.' . $image->getClientOriginalExtension();

        return [
            'saveName' => $saveName,
            'originalName' => $originalName,
        ];
    }

    public function updateImages($model, $images = [], $directory, $deleteImage = false)
    {
        if ($deleteImage) {
            $this->deleteAllImages($model);
        }

        $this->saveImages($model, $images, '/images/' . $directory);
        return;
    }

    public function deleteAllImages($service)
    {
        $images = $service
            ->image()
            ->selectRaw("*, CONCAT(url,'/',saved_name) AS original_url, CONCAT(url,'/thumbnail/',saved_name) AS thumbnail_url")
            ->get();


        $originalUrls = $images->pluck('original_url')->toArray();
        $thumbnailUrls = $images->pluck('thumbnail_url')->toArray();

        foreach ($images as $image) {
            $image->delete();
        }

        Storage::delete(array_merge($originalUrls, $thumbnailUrls));

        // Storage::delete($images->pluck('url')->toArray());

        return;
    }

    public  function delete($image)
    {
        // dd($image);
        $imagePaths = [
            $image->url . '/' . $image->saved_name,
        ];

        // Delete images
        Storage::delete($imagePaths);

        try {
            $image->delete();
        } catch (\Exception $e) {
            toastify()->error($e->getMessage());
            throw $e;
        }

        return;
    }
}
