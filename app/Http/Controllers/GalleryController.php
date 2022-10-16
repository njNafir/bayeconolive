<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Flash;
use Response;

class GalleryController extends AppBaseController
{
    /**
     * Display a listing of the Gallery.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Gallery $galleries */
        $galleries = Gallery::withSearch()->latest()->paginate(10);

        return view('admin.galleries.index')
            ->with('galleries', $galleries);
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request, Gallery $gallery)
    {
        $input = $request->all();
        $input['image'] = $gallery->uploadFile($field = 'image', $save_title=$request->name, $path=null);

        /** @var Gallery $gallery */
        $gallery = Gallery::create($input);

        Flash::success('Gallery saved successfully.');

        return redirect(route('admin.galleries.index'));
    }

    /**
     * Display the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Gallery $gallery */
        $gallery = Gallery::find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        return view('admin.galleries.show')->with('gallery', $gallery);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Gallery $gallery */
        $gallery = Gallery::find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        return view('admin.galleries.edit')->with('gallery', $gallery);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param int $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        /** @var Gallery $gallery */
        $gallery = Gallery::find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }
        $input = $request->all();
        $input['image'] = $gallery->delete_existing_and_upload_file($field = 'image', $save_title=$request->name, $path=null);
        $gallery->fill($input);
        $gallery->save();

        Flash::success('Gallery updated successfully.');

        return redirect(route('admin.galleries.index'));
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Gallery $gallery */
        $gallery = Gallery::find($id);

        if (empty($gallery)) {
            Flash::error('Gallery not found');

            return redirect(route('admin.galleries.index'));
        }

        $gallery->delete();

        Flash::success('Gallery deleted successfully.');

        return redirect(route('admin.galleries.index'));
    }
}
