<?php

namespace App\Http\Controllers;

use App\Dynamic;
use Auth;
use Illuminate\Http\Request;

class DynamicsController extends Controller {
	// public function __construct() {
	// 		$this->middleware('auth');
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//echo '111';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$tucaos = $request->only('dynamic');
		$tucaos['user_id'] = Auth::id();

		$dynamic = new Dynamic();
		$dynamic->dynamic = $tucaos['dynamic'];
		$dynamic->user_id = $tucaos['user_id'];
		$dynamic->save();

		return back()->with('success', '提交成功，您的吐槽使我们前进的最大动力!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
