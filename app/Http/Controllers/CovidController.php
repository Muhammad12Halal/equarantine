<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\UserCovidRepository;
use App\Models\Covid;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CovidController extends Controller
{
    public $covid;

    public function __construct(UserCovidRepository $covid)
    {
        $this->covid = $covid;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covid = Covid::all();
        $terms = Student::all();
        return view('admin.covid.covid', compact('covid','terms'));
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
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'student_id' => 'required|string|max:255',
    //         'name' => 'required',
    //         'address' => 'required',
    //         'level' => 'required',
    //         'vaccine' => 'required',
    //         'type' => 'required',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    //     ]);

    //     $covid = new Covid();
    //     $covid->student_id = $request->student_id;
    //     $covid->name = $request->name;
    //     $covid->address = $request->address;
    //     $covid->level = $request->level;
    //     $covid->vaccine = $request->vaccine;
    //     $covid->type = $request->type;
    //     if ($request->hasFile('image')) {
    //         $imageName = time().'.'.$request->image->getClientOriginalExtension();
    //         $request->image->move(public_path('images'), $imageName);
    //         $covid->image = $imageName;
    //     }
    //     $covid->save();


    //     return redirect()->route('efront.covid')->with('success', 'Covid Information created successfully');
    // }

    public function saveCovid(Request $request, $id)
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

        $collection = $request->except(['_token','_method']);

        if( ! is_null( $id ) ){
            $this->covid->createorUpdate($id, $collection);
        }
        else{
            $this->covid->createorUpdate($id = null, $collection);
        }
        return redirect()->route('college.create')->with('success', 'Covid Information updated successfully');;
    }

    public function search(Request $request)
        {
            if($request->ajax())
            {
             $output = '';
             $query = $request->get('query');
             if($query != '')
             {
              $data = DB::table('covids')
                ->where('name', 'like', '%'.$query.'%')
                ->orWhere('address', 'like', '%'.$query.'%')
                ->orWhere('level', 'like', '%'.$query.'%')
                ->orWhere('vaccine', 'like', '%'.$query.'%')
                ->orWhere('type', 'like', '%'.$query.'%')
                ->orderBy('id', 'desc')
                ->get();

             }
             else
             {
              $data = DB::table('covids')
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
                <td>'.$row->address.'</td>
                <td>'.$row->level.'</td>
                <td>'.$row->vaccine.'</td>
                <td>'.$row->type.'</td>
                <td> <a target="_blank" href="images/'.$row->image.'">
                       <img src="images/'.$row->image.'" class="img-thumbnail" style="width: 80px; height: 80px;"></a>
                </td>
               </tr>
               ';
              }
             }
             else
             {
              $output = '
              <tr>
               <td align="center" colspan="6">No Data Found</td>
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
    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'address' => 'required',
    //         'level' => 'required',
    //         'vaccine' => 'required',
    //         'type' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    //     ]);
    //     $user = Student::find($id);
    //     $user->name = $request->name;
    //     $user->save();

    //     $covid = Covid::find($id);
    //     $covid->name = $request->name;
    //     $covid->address = $request->address;
    //     $covid->level = $request->level;
    //     $covid->vaccine = $request->vaccine;
    //     $covid->type = $request->type;
    //     if ($request->hasFile('image')) {
    //         $imageName = time().'.'.$request->image->getClientOriginalExtension();
    //         $request->image->move(public_path('covid'), $imageName);
    //         $covid->image = $imageName;
    //     }
    //     $covid->save();

    //     return redirect()->route('')->with('success', 'Covid Information updated successfully');
    // }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $covid = Covid::find($id);
        // $covid->delete();

        $this->user->deleteUser($id);
        return redirect()->route('covid.index')->with('success', 'Covid Information deleted successfully');

    }
}
