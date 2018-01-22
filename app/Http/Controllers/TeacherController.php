<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index');
    }

    public function teacher()
    {
        $teacher = Teacher::paginate(6);
        return view('pages.teachers' , compact([
            'teacher',
        ]));    	
    }

    public function teacher_detail($id)
    {
        $id = Teacher::find($id);
        $img = $id->avatar_url;
        return view('pages.teacher_detail' , compact([
            'id',
            'img',
        ]));
    }
}
