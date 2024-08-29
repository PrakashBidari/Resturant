<?php

namespace App\Services;

use App\Models\Blog;

class BlogService
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

        $blogData = [
            'title' => $data['title'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'author' => $data['author'],
        ];

        $blog = Blog::create($blogData);

        if (!empty($data['meta_title']) && !empty($data['meta_description'])) {
            $categoryMeta = [
                'title' => $data['meta_title'],
                'description' => $data['meta_description'],
            ];

            if (count($categoryMeta) !== 0) {
                $this->metaService->add($blog, $categoryMeta);
            }
        }

        if (isset($data['image'])) {
            $images[0]['image'] =  $data['image'];
            $this->imageService->addImages($blog, $images, 'blog');

            if ($data['alt_text']) {
                $blog->image->alt_text = $data['alt_text'];
                $blog->image->save();
            }
        }

        return $blog;
    }

    public function update($validated_data, $blog)
    {
        try {
            $blogData = [
                'title' => $validated_data['title'],
                'slug' => $validated_data['slug'],
                'description' => $validated_data['description'],
                'author' => $validated_data['author'],
            ];

            $blog->update($blogData);

            if (!empty($validated_data['meta_title']) && !empty($validated_data['meta_description'])) {
                $categoryMeta = [
                    'title' => $validated_data['meta_title'],
                    'description' => $validated_data['meta_description'],
                ];

                if (count($categoryMeta) !== 0) {
                    $this->metaService->update($blog, $categoryMeta);
                }
            }

            if (isset($validated_data['image'])) {
                $images[0]['image'] =  $validated_data['image'];
                $this->imageService->updateImages($blog, $images, 'blog', true);

                if ($validated_data['alt_text']) {
                    $blog->image->alt_text = $validated_data['alt_text'];
                    $blog->image->save();
                }
            }
        } catch (\Exception $e) {
            toastify()->error($e->getMessage());
            throw $e;
        }
    }



    public function delete($blog)
    {
        $this->imageService->deleteAllImages($blog);
        $this->metaService->delete($blog);
        $blog->delete();
        return;
    }
}
