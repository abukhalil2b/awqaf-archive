<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\Village;
use Illuminate\Http\Request;

class PlaceController extends Controller {

	public function adminIndex() {
		return view('admin.index');
	}
	public function countryCreate() {
		$countries = Country::all();
		return view('admin.places.country_create', compact('countries'));
	}
	public function stateCreate(Country $country) {
		$states = State::whereCountryId($country->id)->get();
		return view('admin.places.state_create', compact('states', 'country'));
	}
	public function villageCreate(State $state) {
		$villages = Village::whereStateId($state->id)->get();
		return view('admin.places.village_create', compact('villages', 'state'));
	}

	public function countryStore(Request $request) {
		$this->validate($request, ['ar_name' => 'required']);
		Country::create($request->all());
		return redirect(route('admin.places.country_create'))->with(['state' => 'done']);
	}
	public function stateStore(Request $request) {
		$this->validate($request, ['ar_name' => 'required']);
		State::create($request->all());
		return redirect(route('admin.places.country_create'))->with(['state' => 'done']);
	}
	public function villageStore(Request $request) {
		$this->validate($request, ['ar_name' => 'required']);
		Village::create($request->all());
		return redirect(route('admin.places.country_create'))->with(['state' => 'done']);
	}
}
