<?php

use Illuminate\Support\Facades\View;
use Log;
class UsersController extends \BaseController {

	
	public function __construct() {

	}

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		
		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::except(array('_token', "_method")), User::$rules);
		Log::debug(json_encode($data));
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// $user = new User();
		// $user->name = $data["name"];
		// $user->email = $data["email"];
		// $user->password = $data["password"];


		// $user->save();
		User::create($data);
		return Redirect::route('users.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		Log::debug(json_encode($user));
		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$validator = Validator::make($data = Input::except(array('_token', "_method")), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user = User::findOrFail($id);
		$user->update($data);

		return View::make('users.show', compact('user'));
		// return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	private function validate () {
			$validator = Validator::make($data = Input::except('_token'), User::$rules);
	}
}
