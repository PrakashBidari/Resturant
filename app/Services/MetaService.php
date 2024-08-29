<?php

namespace App\Services;

use App\Models\Meta;

class MetaService
{
    public function add($model, $allMetas)
    {

        $meta = new Meta();

        $meta->metable_type = $model;
        $meta->metable_id = $model->meta();
        $meta->title = $allMetas['title'];
        $meta->description = $allMetas['description'];

        $model->meta()->save($meta);
    }

    public function update($model, $allMetas)
    {

        try {

            $model->meta->update([
                'title' => $allMetas['title'],
                'description' => $allMetas['description']
            ]);
        } catch (\Exception $e) {
            toastify()->success($e->getMessage());
            throw $e;
        }
    }

    public function delete($blog){
        $blog->metas->delete();
    }
}
