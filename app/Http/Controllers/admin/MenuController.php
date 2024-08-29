<?php

namespace App\Http\Controllers\admin;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ImageService;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    protected $imageService;

    public function __construct()
    {
        $this->imageService = new ImageService();
    }

    public function create()
    {
        try {
            $menus = Menu::with('image', 'category', 'subcategory')->get();
            $parentCategories = Category::whereNull('parent_id')->get();
            return view('backend.menus.create', compact('menus', 'parentCategories'));
        } catch (\Throwable $th) {
            toastify()->success($th);
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        try {
            // dd($request);
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'price' => 'required|numeric|min:0',
                'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                'category_id' => 'required|exists:categories,id',
                'subcategory_id' => 'nullable|exists:categories,id',
            ]);

            // dd($validated);

            $menu = Menu::create($validated);

            if (isset($validated['image'])) {
                $images[0]['image'] =  $validated['image'];
                $this->imageService->addImages($menu, $images, 'menu');
            }

            toastify()->success('Menu added successfully');

            return redirect()->route('menus.create')->with('success', 'Menu item added successfully.');
        } catch (\Throwable $th) {
            toastify()->success($th);
            return redirect()->back();
        }
    }

    public function index()
    {
        $menus = Menu::with('category')->get();
        return view('backend.menus.index', compact('menus'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validate =  $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                'price' => 'required|numeric',
            ]);

            $menu = Menu::findOrFail($id);
            $menu->update($request->only('title', 'price'));

            if (isset($validate['image'])) {
                $images[0]['image'] =  $validate['image'];
                $this->imageService->updateImages($menu, $images, 'menu', true);
            }

            toastify()->success('Menu updated successfully');

            return redirect()->route('menus.create')->with('success', 'Menu item updated successfully.');
        } catch (\Throwable $th) {
            toastify()->success($th);
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $this->imageService->deleteAllImages($menu);
            $menu->delete();

            toastify()->success('Menu deleated successfully');

            return redirect()->route('menus.create')->with('success', 'Menu item deleted successfully.');
        } catch (\Throwable $th) {
            toastify()->success($th);
            return redirect()->back();
        }
    }


    public function getMenusByCategory($parentId)
    {
        $menus = Menu::with('image')->where('category_id', $parentId)->get();
        return response()->json($menus);
    }
}
