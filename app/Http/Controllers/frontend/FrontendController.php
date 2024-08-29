<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Enum\TrainingCategory;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\ComposerScripts;

class FrontendController extends Controller
{
    public function home()
    {
        // $blogs = $blogs = Blog::latest()->paginate(3);
        // $categories = TrainingCategory::cases();
        $categories = Category::whereNull('parent_id')->get();
        $galleries = Gallery::latest()->paginate(4);
        $seoData = seoData('home');
        return view('frontend.home', compact('categories','galleries', 'seoData'));
    }

    public function about(){
        $seoData = seoData('about');
        return view('frontend.about', compact('seoData'));
    }

    public function blog()
    {
        $blogs = $blogs = Blog::latest()->paginate(6);
        $seoData = seoData('blog');
        return view('frontend.blog', compact('blogs', 'seoData'));
    }

    public function menu(){
        $categories = Category::whereNull('parent_id')->get();
        return view('frontend.menu', compact('categories'));
    }

    public function contact(){
        $seoData = seoData('contact');
        return view('frontend.contact', compact('seoData'));
    }


    public function blogDetail(Blog $blog)
    {
        $recentBlogs = Blog::latest()->where('id', '!=', $blog->id)->paginate(3);
        $seoData = $blog->meta->toArray();
        return view('frontend.blogdetail', compact('blog', 'recentBlogs', 'seoData'));
    }

    public function trainingClass(Request $request, $id)
    {
        // dd("hello");
        $trainings = Training::with('image')->where('category', $id)->latest()->paginate(3);
        // dd($trainings);
        if ($request->ajax()) {
            return response()->json($trainings);
        }
    }


    public function trainings(){
        $trainings = Training::latest()->paginate(6);
        $seoData = seoData('training');
        return view('frontend.training', compact('trainings','seoData'));
    }


    public function trainingDetail($slug){
        $training = Training::where('slug',$slug)->first();

        $seoData = $training->meta->toArray();
        return view('frontend.trainingdetail',compact('training', 'seoData'));
    }

    public function gallery(){
        $galleries = Gallery::latest()->get();
        $seoData = seoData('gallery');
        return view('frontend.gallery', compact('galleries','seoData'));
    }

    public function gallerydetail($id){
        //dd($id);
        $gallery = Gallery::where('slug',$id)->first();
        return view('frontend.gallerydetail', compact('gallery'));
    }


}
