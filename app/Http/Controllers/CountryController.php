<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Country;
use Illuminate\Http\Request;
use Flash;
use Response;

class CountryController extends AppBaseController
{

    // function __construct()
    // {
    //      $this->middleware('permission:country-list|country-create|country-edit|country-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:country-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:country-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:country-delete', ['only' => ['destroy']]);
    // }


    /**
     * Display a listing of the Country.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Country $countries */
        $countries = Country::all();

        return view('admin.countries.index')
            ->with('countries', $countries);
    }

    /**
     * Show the form for creating a new Country.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param CreateCountryRequest $request
     *
     * @return Response
     */
    public function store(CreateCountryRequest $request)
    {
        $input = $request->all();

        /** @var Country $country */
        $country = Country::create($input);

        Flash::success('Country saved successfully.');

        return redirect(route('admin.countries.index'));
    }

    /**
     * Display the specified Country.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('admin.countries.index'));
        }

        return view('admin.countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified Country.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('admin.countries.index'));
        }

        return view('admin.countries.edit')->with('country', $country);
    }

    /**
     * Update the specified Country in storage.
     *
     * @param int $id
     * @param UpdateCountryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountryRequest $request)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('admin.countries.index'));
        }

        $country->fill($request->all());
        $country->save();

        Flash::success('Country updated successfully.');

        return redirect(route('admin.countries.index'));
    }

    /**
     * Remove the specified Country from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('admin.countries.index'));
        }

        $country->delete();

        Flash::success('Country deleted successfully.');

        return redirect(route('admin.countries.index'));
    }
}
