<?php

namespace App\Http\Controllers\Educ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Educ;

class EducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Educ::all()->sortByDesc('created_at');
		return view('education', compact('data', 'data'));
    }

	/**
	 * Show articles which have develop category
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showDevelopArticles()
    {
        $data = Educ::all()->sortByDesc('created_at')->where('category_id', 1);
		return view('develop', compact('data', 'data'));
    }

	/**
	 * Show articles which have develop category
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showAdministrationArticles()
    {
        $data = Educ::all()->sortByDesc('created_at')->where('category_id', 2);
		return view('develop', compact('data', 'data'));
    }

	/**
	 * Show articles which have develop category
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showMarketingArticles()
    {
        $data = Educ::all()->sortByDesc('created_at')->where('category_id', 3);
		return view('develop', compact('data', 'data'));
    }

	/**
	 * Show articles which have develop category
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showDesignArticles()
    {
        $data = Educ::all()->sortByDesc('created_at')->where('category_id', 4);
		return view('develop', compact('data', 'data'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $educModel = Educ::find($id);
		return view('one-educ', ['data' => $educModel]);
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
