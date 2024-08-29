<?php

namespace App\Http\Controllers\admin;

use App\Models\Training;
use Illuminate\Http\Request;
use App\Enum\TrainingCategory;
use App\Services\TrainingService;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddTrainingRequest;

class TrainingController extends Controller
{
    protected $trainingService;
    public function __construct()
    {
        $this->trainingService = new TrainingService();
    }

    public function index()
    {
        $trainings = Training::query()
            ->select('id','slug', 'title', 'category')->latest()
            ->with('image')
            ->get();
        return view('backend.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = TrainingCategory::cases();
        return view('backend.trainings.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddTrainingRequest $request)
    {
        try {
            $data = $request->validated();
            $this->trainingService->add($data);
            toastify()->success('Service Added successfully');
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
    public function edit(Training $training)
    {
        // dd($training);
        $categories = TrainingCategory::cases();
        return view('backend.trainings.edit', compact('training','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddTrainingRequest $request, Training $training)
    {
        try {
            $this->trainingService->update($request->validated(), $training);
            toastify()->success('Service successfully updated');
            return redirect()->route('trainings.index');
        } catch (\Throwable $th) {
            toastify()->error($th->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        try {
            $this->trainingService->delete($training);
            toastify()->success('Service deleated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            toastify()->error($th->getMessage());
        }
        return back();
    }
}
