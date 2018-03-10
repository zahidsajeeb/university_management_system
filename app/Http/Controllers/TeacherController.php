<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Teacher;
use App\Department;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $users = DB::table('teachers')
            ->join('departments', 'teachers.department', '=', 'departments.dept_id')
            ->select('teachers.*', 'departments.dept_name')
            ->get();
        return view('admin.teacher.index',compact('users'))->with('i');
    }


    public function create()
    {
        $data= Department::all();
        return view('admin.teacher.create')->with('datas',$data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'department' => 'required',
        ]);

       Teacher::create($request->all());

        return redirect()->route('teacher.index')
            ->with('success','New Record Inserted successfully.');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
