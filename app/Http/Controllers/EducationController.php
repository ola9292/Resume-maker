<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
    public function index()
    {
        $education = Education::where('user_id', 1)->get();
        return Inertia::render('Education/Index',[
            'education'=> $education
        ]);
    }
    public function create()
    {
        return Inertia::render('Education/Create');
    }
    public function store(Request $request){

            // dd($request->all());
            $data = $request->validate([
                'degree' => 'required',
                'school' => 'required',
                'graduation_year' => 'required',

            ]);
            $data['user_id'] = 1;
            Education::create($data);

            return redirect('/education');
    }
    public function show(Request $request, $id)
    {
        $education = Education::findOrFail($id);
        return Inertia::render('Education/Show',[
            'education' => $education,
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'degree' => 'required',
            'school' => 'required',
            'graduation_year' => 'required',

        ]);
        $education = Education::findOrFail($id);
        $education->update($data);
        return redirect('/education');

    }
    public function destroy(Request $request, $id)
    {
         // Find the contact by ID
         $education = Education::findOrFail($id);

        // Delete the contact
        $education->delete();
        return redirect('/education');
    }
}
