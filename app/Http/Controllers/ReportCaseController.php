<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportCaseController extends Controller
{
    public function index(){
        return view('report');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:15',
            'phone' => 'required',
            'address' => 'required',
            'detail' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:2048',
        ]);
        $imageName = rand(100000, 9999999) .'.'. $request->image->extension();
        $request->image->move(public_path('violenceImage'), $imageName);

        $listings = new Report();
        $listings->name = $request->name;
        $listings->phone = $request->phone;
        $listings->address = $request->address;
        $listings->detail = $request->detail;
        $listings->image = $imageName;
        $listings->save();


        return back()->with('status', 'Crime report Sent!');
    }
}
