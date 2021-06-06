<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Village;
use App\Models\State;
use App\Models\Country;
use App\Models\Folder;
use Illuminate\Http\Request;

class HomeController extends Controller {

	// public function __construct() {
	// 	$this->middleware('auth');
	// }

	public function folderIndex() {
		$folders = Folder::all();
		return view('folder.index', compact('folders'));
	}
	public function folderCreate() {
		return view('folder.create');
	}

	public function folderStore(Request $request) {
		$this->validate($request,['cate_num'=>'required','branch_name'=>'required','serial'=>'required']);
		Folder::create($request->all());
		return redirect(route('folder.index'));
	}

	public function documentIndex(Folder $folder) {
		$documents = Document::where('folder_id', $folder->id)->get();
		return view('document.index', compact('documents', 'folder'));
	}
	public function documentShow(Document $document) {

		return view('document.show', compact('document'));
	}

	public function documentCreate(Folder $folder) {
		$countries = Country::all();
		$states = State::all();
		$villages = Village::all();
		return view('document.create', compact('folder', 'countries', 'states', 'villages'));
	}

	public function documentStore(Request $request) {
		// return $request->all();
		$this->validate($request,['document_number'=>'required','folder_id'=>'required']);
		$document = Document::create($request->all());
		$filePath = null;
		if ($request->hasFile('url')) {
			$extension = $request->url->getClientOriginalExtension();
			$filePath = $request->file('url')->storeAs($document->folder->id.'/'.$document->id, time() . '.' . $extension);
			$document->update(['url'=>$filePath]);
		}
		return redirect(route('folder.index'));
	}


	public function search(Request $request) {
		// return $request->all();
		$search = Document::where('subject', 'like', '%' . $request->subject . '%');
		if ($request->sender_name) {
			$search->where('sender_name', 'like', '%' . $request->sender_name . '%');
		}
		if ($request->receiver_name) {
			$search->where('receiver_name', 'like', '%' . $request->receiver_name . '%');
		}
		if ($request->receiver_country) {
			$search->where('receiver_country', 'like', '%' . $request->receiver_country . '%');
		}
		if ($request->sender_village) {
			$search->where('sender_village', 'like', '%' . $request->sender_village . '%');
		}
		if ($request->document_date) {
			$search->where('document_date', 'like', '%' . $request->document_date . '%');
		}
		$documents = $search->get();
		return view('search.result', compact('documents'));
	}


	public function documentPrint(Folder $folder) {
		$documents = Document::where('folder_id', $folder->id)->get();
		return view('document.print', compact('documents', 'folder'));
	}
}
