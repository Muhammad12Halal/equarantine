<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('admin.student.student',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view('efront.apply', compact('student'));
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
            'name' => 'required',
            'email' => 'required',
            'matric' => 'required',
            'phone' => 'required',
            'ic' => 'required',
            'quarantine' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->matric = $request->matric;
        $student->phone = $request->phone;
        $student->ic = $request->ic;
        $student->quarantine = $request->quarantine;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }
        $student->save();

        return redirect()->route('efront.apply')->with('success', 'User created successfully');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
       $posts = DB::table('students')->where('name', 'like', '%'.$search.'%')->paginate(2);
       return view('admin.student.search', ['posts' =>$posts]);
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
        $item = Student::where('id', $id)->first();
        return view('admin.student.edit', compact('item'));
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
            'email' => 'required',
            'matric' => 'required',
            'phone' => 'required',
            'ic' => 'required',
            'quarantine' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->matric = $request->matric;
        $student->phone = $request->phone;
        $student->ic = $request->ic;
        $student->quarantine = $request->quarantine;
        $student->status = $request->status;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $student->image = $imageName;
        }
        $student->save();

        return redirect()->route('student.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student Information deleted successfully');
    }
}
