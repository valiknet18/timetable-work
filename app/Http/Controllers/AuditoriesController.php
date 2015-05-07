<?php namespace App\Http\Controllers;

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

        return view('auditories.index', ['auditories' => $auditories]);
	}
}
