<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddGalleryRequest;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $galleryService;
    public function __construct()
    {
        $this->galleryService = new GalleryService();
    }
    public function index()
    {
        $galleries = Gallery::query()
            ->select('id','slug', 'title', 'created_at')->latest()
            ->with('image')
            ->get();
        return view('backend.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddGalleryRequest $request)
    {
        try {
            $data = $request->validated();
            $this->galleryService->add($data);
            toastify()->success('Gallery Added successfully');
            return back();
        } catch (\Throwable $th) {
            toastify()->success($th->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddGalleryRequest $request, Gallery $gallery)
    {
        try {
            $this->galleryService->update($request->validated(), $gallery);
            toastify()->success('Gallery successfully updated');
            return redirect()->route('galleries.index');
        } catch (\Throwable $th) {
            toastify()->error($th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        try {
            $this->galleryService->delete($gallery);
            toastify()->success('Gallery deleated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            toastify()->error($th->getMessage());
        }
        return back();
    }


    public function singleDlt($id){
        $this->galleryService->singleDlt($id);
        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);;
    }
}
