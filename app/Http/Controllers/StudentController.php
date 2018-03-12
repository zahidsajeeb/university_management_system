<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Validator;
use Image;
use App\Department;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $users = DB::table('students')
            ->join('departments', 'students.uni_dept', '=', 'departments.dept_id')
            ->select('students.*', 'departments.dept_name')
            ->get();
        return view('admin.student.index',compact('users'))->with('i');
    }

    public function create()
    {
        $data= Department::all();
       return view('admin.student.create')->with('datas',$data);
    }

    public function store(Request $request)
    {
        request()->validate([
            'student_name'   => 'required|max:100',
            'father_name'    => 'required|max:100',
            'mother_name'    => 'required|max:100',
            'nationality'     => 'required|max:15',
            'mobile'         => 'required|max:11',
            'email'          => 'required|max:50',
            'dob'            => 'required',
            'student_photo'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'school_name'    => 'required|max:100',
            'ssc_dept'       => 'required',
            'ssc_role'       => 'required',
            'ssc_gpa'        => 'required',
            'college_name'   => 'required|max:100',
            'hsc_dept'       => 'required',
            'hsc_role'       => 'required',
            'hsc_gpa'        => 'required',
            'uni_id'         => 'required|max:7',
            'uni_dept'       => 'required',
            'advisor'        => 'required',
        ]);

        $student=new student();
        $student->student_name   = $request->input('student_name');
        $student->father_name    = $request->input('father_name');
        $student->mother_name    = $request->input('mother_name');
        $student->nationality    = $request->input('nationality');
        $student->mobile         = $request->input('mobile');
        $student->email          = $request->input('email');
        $student->dob            = $request->input('dob');
        $student->school_name    = $request->input('school_name');
        $student->ssc_dept       = $request->input('ssc_dept');
        $student->ssc_role       = $request->input('ssc_role');
        $student->ssc_gpa        = $request->input('ssc_gpa');
        $student->college_name   = $request->input('college_name');
        $student->hsc_dept       = $request->input('hsc_dept');
        $student->hsc_role       = $request->input('hsc_role');
        $student->hsc_gpa        = $request->input('hsc_gpa');
        $student->uni_id         = $request->input('uni_id');
        $student->uni_dept       = $request->input('uni_dept');
        $student->advisor        = $request->input('advisor');

        $file = $request->file('student_photo');
        if($file != ""){
            $ext = $file->getClientOriginalExtension();
            $fileName = rand(10000, 50000) . '.' .$ext;
            $image = Image::make($request->file('student_photo'));
            $image->resize(120, 120);
            $student->student_photo = '/uploads/' . $fileName;
            $image->save(base_path().'/public/uploads/'. $fileName);
        }
        $student->save();
//      Student::create($request->all());
        return redirect()->route('student.index')->with('success','New Student Record Inserted successfully.');
    }

    public function show($id)
    {
        $data = DB::table('students')
            ->where('students.id',$id)
            ->join('departments', 'students.uni_dept', '=', 'departments.dept_id')
            ->join('teachers', 'teachers.id', '=', 'students.advisor')
            ->select('students.*', 'departments.dept_name','teachers.name')
            ->get();
//       $data = Student::find($id);
       return view('admin.student.show')->with('datas',$data);
    }


    public function edit($id)
    {
        $data = Student::find($id);
        return view('admin.student.edit')->with('data', $data);
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
