<?php namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $teachers = Teacher::all();

        return view('admin.teachers.index', ['teachers' => $teachers]);
	}

    public function show($teacher_code)
    {
        $teacher = Teacher::where(['teacher_code' => $teacher_code])->get()->first();

        return view('admin.teachers.show', ['teacher' => $teacher]);
    }
}
