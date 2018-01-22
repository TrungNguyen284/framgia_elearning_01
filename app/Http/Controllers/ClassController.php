<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LopHoc;

class ClassController extends Controller
{
    public function index()
    {
        return view('admin.class.index');
    }

    public function classes()
    {
        $classes = LopHoc::paginate(6);
        return view('pages.classes' , compact([
            'classes',
        ]));    	
    }

    public function class_detail($id)
    {
        $id = LopHoc::find($id);
        return view('pages.class_detail' , compact([
            'id',
        ]));
    }    

    public function show_class_register()
    {
        return view('pages.class_register');
    }    

    public function showSubjectInClass(Request $request)
    {


        if ($request->ajax()) {
            $class_id = $request->class_id;
            $subject = LopHoc::select('subject')->where('id' , '=' ,$class_id)->get();
            return response()->json($subject);
        }       
    }
}
