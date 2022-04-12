<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Covid;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Covid::all();
        $terms = Student::all();
        return view('admin.covid.covid',compact('data','terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('efront.covidapply', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'student_id' => 'required|string|max:255',
            'name' => 'required',
            'address' => 'required',
            'level' => 'required',
            'vaccine' => 'required',
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $covid = new Covid();
        $covid->student_id = $request->student_id;
        $covid->name = $request->name;
        $covid->address = $request->address;
        $covid->level = $request->level;
        $covid->vaccine = $request->vaccine;
        $covid->type = $request->type;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $covid->image = $imageName;
        }
        $covid->save();


        return redirect()->route('efront.covid')->with('success', 'Covid Information created successfully');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $search = DB::table('covids')->where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.covid.covid',['search' => $search]);

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'level' => 'required',
            'vaccine' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $user = Student::find($id);
        $user->name = $request->name;
        $user->save();

        $covid = Covid::find($id);
        $covid->name = $request->name;
        $covid->address = $request->address;
        $covid->level = $request->level;
        $covid->vaccine = $request->vaccine;
        $covid->type = $request->type;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('covid'), $imageName);
            $covid->image = $imageName;
        }
        $covid->save();

        return redirect()->route('')->with('success', 'Covid Information updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $covid = Covid::find($id);
        $covid->delete();

        return redirect()->route('')->with('success', 'Covid Information deleted successfully');

    }
}
