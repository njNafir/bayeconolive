<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Faq;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaqController extends AppBaseController
{
    /**
     * Display a listing of the Faq.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Faq $faqs */
        $faqs = Faq::withSearch()->latest()->paginate(10);

        return view('admin.faqs.index')
            ->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new Faq.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param CreateFaqRequest $request
     *
     * @return Response
     */
    public function store(CreateFaqRequest $request)
    {
        $input = $request->all();

        /** @var Faq $faq */
        $faq = Faq::create($input);

        Flash::success('Faq saved successfully.');

        return redirect(route('admin.faqs.index'));
    }

    /**
     * Display the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('admin.faqs.index'));
        }

        return view('admin.faqs.show')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified Faq.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('admin.faqs.index'));
        }

        return view('admin.faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified Faq in storage.
     *
     * @param int $id
     * @param UpdateFaqRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaqRequest $request)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('admin.faqs.index'));
        }

        $faq->fill($request->all());
        $faq->save();

        Flash::success('Faq updated successfully.');

        return redirect(route('admin.faqs.index'));
    }

    /**
     * Remove the specified Faq from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Faq $faq */
        $faq = Faq::find($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('admin.faqs.index'));
        }

        $faq->delete();

        Flash::success('Faq deleted successfully.');

        return redirect(route('admin.faqs.index'));
    }
}
