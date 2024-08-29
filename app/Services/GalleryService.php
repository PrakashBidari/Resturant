<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Image;

class GalleryService
{

    protected $imageService;
    protected $metaService;

    public function __construct()
    {
        $this->imageService = new ImageService();
        $this->metaService = new MetaService();
    }

    public function add($data)
    {
        // dd($data);
        $galleryData = [
            'title' => $data['title'],
            'slug' => $data['slug'],
        ];

        $gallery = Gallery::create($galleryData);

        if (!empty($data['meta_title']) && !empty($data['meta_description'])) {
            $categoryMeta = [
                'title' => $data['meta_title'],
                'description' => $data['meta_description'],
            ];

            if (count($categoryMeta) !== 0) {
                $this->metaService->add($gallery, $categoryMeta);
            }
        }

        if (isset($data['images'])) {
            $this->imageService->addImages($gallery, $data['images'], 'gallery');
        }

        return $gallery;
    }

    public function update($validated_data, $gallery)
    {
        try {
            $galleryData = [
                'title' => $validated_data['title'],
                'slug' => $validated_data['slug'],
            ];

            $gallery->update($galleryData);

            if (!empty($validated_data['meta_title']) && !empty($validated_data['meta_description'])) {
                $categoryMeta = [
                    'title' => $validated_data['meta_title'],
                    'description' => $validated_data['meta_description'],
                ];

                if (count($categoryMeta) !== 0) {
                    $this->metaService->update($gallery, $categoryMeta);
                }
            }

            if (isset($validated_data['images'])) {
                // $images[0]['image'] =  $validated_data['image'];
                $this->imageService->updateImages($gallery, $validated_data['images'], 'blog', false);
            }

        } catch (\Exception $e) {
            toastify()->error($e->getMessage());
            throw $e;
        }
    }


    public function singleDlt($id){
        $image = Image::findOrFail($id);
        $this->imageService->delete($image);
        return;
    }

    public function delete($blog)
    {
        $this->imageService->deleteAllImages($blog);
        $blog->delete();
        return;
    }
}
