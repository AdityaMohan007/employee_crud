<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function create()
    {
            // $a = Detail::all();
        return view('Employee.create');
    }
    public function create_post(Request $request)
    {
        $row = new Detail();
        $row->name = $request->name;
        $row->mobile = $request->mobile;
        $row->email = $request->email;
        $row->save();
        return redirect(route('list'));
    }

    public function read($id)
    {
        $row = Detail::find($id);
        return view('Employee.read', compact('row'));
    }

    public function update($id)
    {
        $row = Detail::find($id);
        return view('Employee.update', compact('row'));
    }
    public function update_post(Request $request, $id)
    {
        $row = Detail::find($id);
        $row->name = $request->name;
        $row->mobile = $request->mobile;
        $row->email = $request->email;
        $row->update();
        return redirect(route('list'));
    }


    public function delete($id)
    {
        $row = Detail::find($id);
        $row->delete();
        return redirect(route('list'));
    }


    // list employees
    public function list() {
        $list = Detail::all();
        return view('Employee.list', compact('list'));
    }





}
