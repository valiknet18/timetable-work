<?php namespace App\Http\Controllers\Admin;

use App\Auditory;
use App\Group;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditoriesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $auditories = Auditory::all();

        return view('admin.auditories.index', ['auditories' => $auditories]);
	}

    public function show($auditory_number)
    {
        $auditory = Auditory::where(['auditory_number' => $auditory_number])->get()->first();

        return view('admin.auditories.show', ['auditory' => $auditory]);
    }

    public function create()
    {
        return view('admin.auditories.create');
    }
}