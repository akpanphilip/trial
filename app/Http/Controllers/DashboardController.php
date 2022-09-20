<?php

namespace App\Http\Controllers;
use App\Models\Report;
use App\Models\contact_message;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contact_count = contact_message::all()->count();
        $caseCount = Report::all()->count();
        return view('dashboard.index', compact('caseCount', 'contact_count'));
    }
    public function store()
    {
        $contact_count = contact_message::all()->count();
        $caseCount = Report::all()->count();
        $reports = Report::all();
        return view('dashboard.CrimesReported', compact('reports', 'caseCount', 'contact_count' ));
    }
    public function destroy($id)
    {
        $crimes = Report::find($id);
        $crimes->delete();

        return back()->with('crimeDeleted', 'Crime Successfully Deleted!');
    }

    public function messages()
    {
        $contact_count = contact_message::all()->count();
        $caseCount = Report::all()->count();
        $cnt = 1;
        $contacts = contact_message::all();
        return view('dashboard.Contacts', compact('contacts', 'cnt', 'caseCount', 'contact_count' ));
    }
    // public function truncate($id)
    // {
    //     $messages = Report::find($id);
    //     $messages->delete();

    //     return back()->with('messageDeleted', 'Message Successfully Deleted!');
    // }
    

}
