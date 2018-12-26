<?php

namespace Modules\Enquiry\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use App\Option;
class AdminController extends Controller
{
    private $theme = "";
    public function __construct(){
		$this->middleware('isAdmin');
		$this->theme = Option::where('name','theme_current')->first()->value;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('enquiry::index');
    }

    public function all(){
        return view('enquiry::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('enquiry::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('enquiry::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
