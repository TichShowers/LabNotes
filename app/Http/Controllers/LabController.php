<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LabRequest;
use Illuminate\Http\Request;

class LabController extends Controller {

    public function redirect() {
        return redirect()->route('Index');
    }

	public function index(){
        $labs = Lab::all()->orderBy('number', 'ASC')->get();

        return view('index', compact('labs'));
    }

    public function admin(){
        $labs = Lab::all();

        return view('admin', compact('labs'));
    }

    public function show($id){
        $lab = Lab::findOrFail($id);

        return view('show', compact('lab'));
    }

    public function create(){
        return view('create');
    }

    public function store(LabRequest $request) {
        Lab::create($request->all());

        return redirect()->route('Admin');
    }

    public function edit($id) {
        $lab = Lab::findOrFail($id);

        return view('edit', compact('lab'));
    }

    public function update($id, LabRequest $request){
        $lab = Lab::findOrFail($id);

        $lab->update($request->all());

        return redirect()->route('Admin');
    }

    public function delete($id)
    {
        $lab = Lab::findOrFail($id);

        $lab->delete();

        return redirect()->route('Admin');
    }

}
