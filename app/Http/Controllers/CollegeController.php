<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollegeRequest;
use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = College::all();
        $terms = Student::all();
        return view('admin.college.college',compact('data', 'terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('efront.collegeapply', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CollegeRequest $request,)
    {
        $college = new College();
        $college->student_id = $request->student_id;
        $college->name = $request->name;
        $college->college = $request->college;
        $college->block = $request->block;
        $college->room = $request->room;
        $college->address = $request->address;
        $college->save();

        return redirect()->route('college.create')->with('success', 'College Information updated successfully');

    }

    public function search(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('colleges')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('college', 'like', '%'.$query.'%')
         ->orWhere('block', 'like', '%'.$query.'%')
         ->orWhere('room', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();

      }
      else
      {
       $data = DB::table('colleges')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->college.'</td>
         <td>'.$row->block.'</td>
         <td>'.$row->room.'</td>
         <td>'.$row->address.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
        }
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
            'name' => 'required|string|max:255',
            'college' => 'required|string|max:255',
            'block' => 'required',
            'room' => 'required|string|max:255',
            'address' => 'required',

        ]);

        $user = Student::find($id);
        $user->name = $request->name;
        $user->save();

        $college = College::find($id);
        $college->name = $request->name;
        $college->college = $request->college;
        $college->block = $request->block;
        $college->room = $request->room;
        $college->address = $request->address;
        $college->save();

        return redirect()->route('')->with('success', 'College Information updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::find($id);
        $college->delete();

        return redirect()->route('efront.collegeapply')->with('success', 'College Information deleted successfully');

    }
}
