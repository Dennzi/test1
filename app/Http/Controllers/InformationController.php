<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use config\pref;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $items = Information::all();
        return view('information.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('information.add');
    }

    public function create(Request $request)
    {
        /*$param = [
            'store_name' => $request->store_name,
            'rural_code' => $request->rural_code,
            'area' => $request->area,
            'photo_pass' => $request->photo_pass,
            'store_information' => $request->store_information,
            'street_address' => $request->street_adress,
            'url' => $request->url,
            'religion' => $request->religion,
            'allergies' => $request->allergies,
            'store_introduction' => $request->store_introduction,
        ];*/
        $information = new Information;
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        $items = Information::all();
        return view('information.index', ['items' => $items]);
    }

    public function edit(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('information.edit', ['form' => $item]);
    }

    public function update(Request $request)
    {
        $information = Information::find($request->serial_number);
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        return redirect('information');
    }

    public function delete(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('information.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        Information::find($request->serial_number)->delete();
        return redirect('/information');
    }

    /*public function find(Request $request)
    {
        return view('information.find', ['search' => '']);
    }

    public function search(Request $request)
    {
        $items = Information::find($request->store_name);
        $param = ['store_name' => $request->store_name, 'items' => $items];
        return view('information.find', $param);
    }*/
}
