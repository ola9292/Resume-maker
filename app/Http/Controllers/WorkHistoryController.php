<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\WorkHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkHistoryController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $workHistory = WorkHistory::where('user_id', $id)->get();
        return Inertia::render('Work/Index',[
            'workHistory'=> $workHistory
        ]);
    }
    public function create()
    {
        return Inertia::render('Work/Create');
    }
    public function store(Request $request){

            // dd($request->all());
            $data = $request->validate([
                'company' => 'required',
                'position' => 'required',
                'start_year' => 'required',
                'end_year' => 'required',
                'duties' => 'required'

            ]);
            $data['user_id'] = Auth::user()->id;
            WorkHistory::create($data);

            return redirect('/work-history');
    }
    public function show(Request $request, $id)
    {
        $workHistory = WorkHistory::findOrFail($id);
        return Inertia::render('Work/Show',[
            'workHistory' => $workHistory,
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'company' => 'required',
            'position' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'duties' => 'required'

        ]);
        $workHistory = WorkHistory::findOrFail($id);
        $workHistory->update($data);
        return redirect('/work-history');

    }
    public function destroy(Request $request, $id)
    {
         // Find the contact by ID
         $workHistory = WorkHistory::findOrFail($id);

        // Delete the contact
        $workHistory->delete();
        return redirect('/education');
    }
}
