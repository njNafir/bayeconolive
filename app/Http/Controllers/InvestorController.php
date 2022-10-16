<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvestorRequest;
use App\Http\Requests\UpdateInvestorRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Investor;
use Illuminate\Http\Request;
use Flash;
use Response;

class InvestorController extends AppBaseController
{
    /**
     * Display a listing of the Investor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Investor $investors */
        $investors = Investor::withSearch()->latest()->paginate(10);

        return view('admin.investors.index')
            ->with('investors', $investors);
    }

    /**
     * Show the form for creating a new Investor.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.investors.create');
    }

    /**
     * Store a newly created Investor in storage.
     *
     * @param CreateInvestorRequest $request
     *
     * @return Response
     */
    public function store(CreateInvestorRequest $request)
    {
        $input = $request->all();

        /** @var Investor $investor */
        $investor = Investor::create($input);

        Flash::success('Investor saved successfully.');

        return redirect(route('admin.investors.index'));
    }

    /**
     * Display the specified Investor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Investor $investor */
        $investor = Investor::find($id);

        if (empty($investor)) {
            Flash::error('Investor not found');

            return redirect(route('admin.investors.index'));
        }

        return view('admin.investors.show')->with('investor', $investor);
    }

    /**
     * Show the form for editing the specified Investor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Investor $investor */
        $investor = Investor::find($id);

        if (empty($investor)) {
            Flash::error('Investor not found');

            return redirect(route('admin.investors.index'));
        }

        return view('admin.investors.edit')->with('investor', $investor);
    }

    /**
     * Update the specified Investor in storage.
     *
     * @param int $id
     * @param UpdateInvestorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvestorRequest $request)
    {
        /** @var Investor $investor */
        $investor = Investor::find($id);

        if (empty($investor)) {
            Flash::error('Investor not found');

            return redirect(route('admin.investors.index'));
        }

        $investor->fill($request->all());
        $investor->save();

        Flash::success('Investor updated successfully.');

        return redirect(route('admin.investors.index'));
    }

    /**
     * Remove the specified Investor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Investor $investor */
        $investor = Investor::find($id);

        if (empty($investor)) {
            Flash::error('Investor not found');

            return redirect(route('admin.investors.index'));
        }

        $investor->delete();

        Flash::success('Investor deleted successfully.');

        return redirect(route('admin.investors.index'));
    }
}
