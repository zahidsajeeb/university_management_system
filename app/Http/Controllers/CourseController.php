<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Course;
use App\Department;

class CourseController extends Controller
{

    public function index()
    {
        $data= Department::all();
        return view('admin.course.index')->with('datas',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new course();
        $course->course_name     = $request->input('course_name');
        $course->course_code     = $request->input('course_code');
        $course->dept_id         = $request->input('dept_id');
        $course->teacher_id      = $request->input('teacher_id');
        Course::create($request->all());

//        $input = $request->all();
//        Course::create($input);
        return response()->json([
            'success' => true,
            'message' => 'Contact Created'
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
