<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;
    public function __construct()
    {
        $this->blogService = new BlogService();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()
            ->select('id','slug', 'title', 'created_at')->latest()
            ->with('image')
            ->get();
        return view('backend.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddBlogRequest $request)
    {
        try {
            $data = $request->validated();
            $this->blogService->add($data);
            toastify()->success('Blog Added successfully');
            return back();
        } catch (\Throwable $th) {
            toastify()->success($th->getMessage());
            return back();
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('backend.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddBlogRequest $request, Blog $blog)
    {
        try {
            $this->blogService->update($request->validated(), $blog);
            toastify()->success('Blog successfully updated');
            return redirect()->route('blogs.index');
        } catch (\Throwable $th) {
            toastify()->error($th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        try {
            $this->blogService->delete($blog);
            toastify()->success('Blog deleated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            toastify()->error($th->getMessage());
        }
        return back();
    }
}
