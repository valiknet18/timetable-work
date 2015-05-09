<?php namespace App\Http\Controllers\Admin;

use App\Group;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class SubjectsController
 * @package App\Http\Controllers\Admin
 */
class SubjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjects = Subject::all();

        return view('admin.subjects.index', ['subjects' => $subjects]);
	}

    /**
     * @param $subject_code
     * @return \Illuminate\View\View
     */
    public function show($subject_code)
    {
        $subject = Subject::where(['subject_code' => $subject_code])->get()->first();

        return view('admin.subjects.show', ['subject' => $subject]);
    }
}
