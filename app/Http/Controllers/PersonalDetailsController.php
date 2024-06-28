<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\PersonalDetail;
use Illuminate\Support\Facades\Auth;



class PersonalDetailsController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $user_profile = PersonalDetail::where('user_id', $id)->first();
    //   dd(Auth::user()->id);
        return Inertia::render('Basic/Index',[
            'user_profile' => $user_profile
        ]);
    }
    public function create()
    {
        return Inertia::render('Basic/Create');
    }
    public function store(Request $request){


            $data = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'profession' => 'required',
                'website' => 'nullable',
                'email' => 'required|email',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required',
                'summary' => 'required'
            ]);
            $data['user_id'] = Auth::user()->id;

            PersonalDetail::create($data);

            return redirect('/personal-details');
    }
    public function show(Request $request, $id)
    {
        $user_profile = PersonalDetail::findOrFail($id);
        return Inertia::render('Basic/Show',[
            'user_profile' => $user_profile,
        ]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'profession' => 'required',
            'website' => 'nullable',
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'summary' => 'required'
        ]);
        $user_profile = PersonalDetail::findOrFail($id);
        $user_profile->update($data);
        return redirect('/personal-details');

    }
    public function destroy(Request $request, $id)
    {
         // Find the contact by ID
         $user_profile = PersonalDetail::findOrFail($id);

        // Delete the contact
        $user_profile->delete();
        return redirect('/education');
    }
}
