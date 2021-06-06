<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlaceController;

Route::get('/', function () {
	$folders = App\Models\Folder::all();
	$countries = App\Models\Country::all();
	$states = App\Models\State::all();
	return view('welcome', compact('folders', 'countries', 'states'));
});

Route::get('folder/index',[HomeController::class,'folderIndex'])->name('folder.index');
Route::get('folder/create',[HomeController::class,'folderCreate'])->name('folder.create');
Route::post('folder/store',[HomeController::class,'folderStore'])->name('folder.store');

Route::get('document/show/{document}',[HomeController::class,'documentShow'])->name('document.show');
Route::get('document/index/{folder}',[HomeController::class,'documentIndex'])->name('document.index');
Route::get('document/create/{folder}',[HomeController::class,'documentCreate'])->name('document.create');
Route::post('document/store',[HomeController::class,'documentStore'])->name('document.store');
Route::post('file/store/{document}',[HomeController::class,'fileStore'])->name('file.store');

Route::get('document/{folder}/print',[HomeController::class,'documentPrint'])->name('document.print');

Route::post('search',[HomeController::class,'search'])->name('search');

Route::get('admin/index',[PlaceController::class,'adminIndex'])->name('admin.index');

Route::get('admin/places/country_create',[PlaceController::class,'countryCreate'])->name('admin.places.country_create');
Route::post('admin.places.country_store',[PlaceController::class,'countryStore'])->name('admin.places.country_store');

Route::get('admin/places/state_create/{country}',[PlaceController::class,'stateCreate'])->name('admin.places.state_create');
Route::post('admin/places/state_store',[PlaceController::class,'stateStore'])->name('admin.places.state_store');

Route::get('admin/places/village_create/{state}',[PlaceController::class,'villageCreate'])->name('admin.places.village_create');
Route::post('admin/places/village_store',[PlaceController::class,'villageStore'])->name('admin.places.village_store');