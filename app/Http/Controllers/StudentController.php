<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Department;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return view('admin.student.index');
    }


    public function create()
    {
        $data= Department::all();
       return view('admin.student.create')->with('datas',$data);
    }


    public function store(Request $request)
    {
        //
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
