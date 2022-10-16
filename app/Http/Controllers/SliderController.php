<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Slider;
use Illuminate\Http\Request;
use Flash;
use Response;

class SliderController extends AppBaseController
{
    // function __construct()
    // {
    //      $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:slider-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    // }
    
    /**
     * Display a listing of the Slider.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Slider $sliders */
        $sliders = Slider::withSearch()->latest()->paginate(10);

        return view('admin.sliders.index')
            ->with('sliders', $sliders);
    }

    /**
     * Show the form for creating a new Slider.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created Slider in storage.
     *
     * @param CreateSliderRequest $request
     *
     * @return Response
     */
    public function store(CreateSliderRequest $request, Slider $slider)
    {
        $input = $request->all();

        $input['image'] = $slider->uploadFile($field = 'image', $save_title=$request->name, $path=null);

        /** @var Slider $slider */
        $slider = Slider::create($input);

        Flash::success('Slider saved successfully.');

        return redirect(route('admin.sliders.index'));
    }

    /**
     * Display the specified Slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Slider $slider */
        $slider = Slider::find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('admin.sliders.index'));
        }

        return view('admin.sliders.show')->with('slider', $slider);
    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Slider $slider */
        $slider = Slider::find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('admin.sliders.index'));
        }

        return view('admin.sliders.edit')->with('slider', $slider);
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param int $id
     * @param UpdateSliderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSliderRequest $request)
    {
        /** @var Slider $slider */
        $slider = Slider::find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('admin.sliders.index'));
        }


        $slider->fill($request->all());

        $slider->image = $slider->delete_existing_and_upload_file($field = 'image', $save_title=$request->name, $path=null);
        $slider->save();

        Flash::success('Slider updated successfully.');

        return redirect(route('admin.sliders.index'));
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Slider $slider */
        $slider = Slider::find($id);

        if (empty($slider)) {
            Flash::error('Slider not found');

            return redirect(route('admin.sliders.index'));
        }

        $slider->delete();

        Flash::success('Slider deleted successfully.');

        return redirect(route('admin.sliders.index'));
    }
}
