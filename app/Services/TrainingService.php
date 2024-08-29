<?php

namespace App\Services;

use App\Models\Blog;
use App\Models\Training;

class TrainingService
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
        $trainingData = [
            'title' => $data['title'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'category' => $data['category'],
        ];

        // dd($trainingData);

        $training = Training::create($trainingData);

        if (!empty($data['meta_title']) && !empty($data['meta_description'])) {
            $categoryMeta = [
                'title' => $data['meta_title'],
                'description' => $data['meta_description'],
            ];

            if (count($categoryMeta) !== 0) {
                $this->metaService->add($training, $categoryMeta);
            }
        }

        if (isset($data['image'])) {
            $images[0]['image'] =  $data['image'];
            $this->imageService->addImages($training, $images, 'training');

            if ($data['alt_text']) {
                $training->image->alt_text = $data['alt_text'];
                $training->image->save();
            }
        }

        return $training;
    }

    public function update($validated_data, $training)
    {
        try {
            $trainingData = [
                'title' => $validated_data['title'],
                'slug' => $validated_data['slug'],
                'description' => $validated_data['description'],
                'category' => $validated_data['category'],
            ];

            $training->update($trainingData);

            if (!empty($validated_data['meta_title']) && !empty($validated_data['meta_description'])) {
                $categoryMeta = [
                    'title' => $validated_data['meta_title'],
                    'description' => $validated_data['meta_description'],
                ];

                if (count($categoryMeta) !== 0) {
                    $this->metaService->update($training, $categoryMeta);
                }
            }

            if (isset($validated_data['image'])) {
                $images[0]['image'] =  $validated_data['image'];
                $this->imageService->updateImages($training, $images, 'training', true);

                if ($validated_data['alt_text']) {
                    $training->image->alt_text = $validated_data['alt_text'];
                    $training->image->save();
                }
            }
        } catch (\Exception $e) {
            toastify()->error($e->getMessage());
            throw $e;
        }
    }


    public function delete($training)
    {
        $this->imageService->deleteAllImages($training);
        $training->delete();
        return;
    }
}
