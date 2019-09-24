<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserManagementController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | User Management Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the user creation for the admin user.
    |
    */
	
	/**
     * Get all the users from the users table.
     *
     * @return view
     */
	public function userlist(){
	
		$users = User::all();
		
        return view('usermanagement.userlist',compact('users'));
    }
	
	/**
     * Redirect to the user creation view.
     *
     * @return view
     */
	public function create(){
        return view('usermanagement.create');
    }
	
	/**
     * Redirect to the user update view.
     *
	 * @param $id unique id of user to be updated
     * @return view
     */
	public function update($id){
		$user = User::findOrFail($id);
        return view('usermanagement.update')->withUser($user);
    }
	
	/**
     * Validate all the fields on the form, then submit the form if all fields are valid.
     *
	 * @param Request $request
     * @return redirect
     */
	public function storeUser(Request $request){
	
		// Validate all fields - all fields required
		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:8',
        ]);

		// If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return redirect('createuser')
                        ->withErrors($validator)
                        ->withInput();
        }
	
		// Create new User model, add required fields from form, hash password, and save to the database
		$request->merge(['password' => Hash::make(request('password'))]);
        $user = User::create(request(['name', 'email', 'password']));
 
		// If successful, redirect back to the page with a success message
		return redirect('/usermanagement')->with('message', 'The user was created successfully!');
 
    }
	
	/**
     * Validate all the fields on the form, then submit the form if all fields are valid.
     *
	 * @param Request $request
     * @return redirect
     */
	public function storeUserUpdate(Request $request){
	
		// Validate all fields - all fields required
		$validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'id' => 'required',
        ]);

		// If validation fails, redirect back with error messages
        if ($validator->fails()) {
            return redirect('updateuser')
						->with('id', request('id'))
                        ->withErrors($validator)
                        ->withInput();
        }
		
		// Find current User Model for this user, then update fields
		$user = User::findOrFail(request('id'));
		$user->email = request('email'); 
		$user->name = request('name');

		$user->save();
 
		// If successful, redirect back to the page with a success message
		return redirect('/usermanagement')->with('message', 'The user was updated successfully!');
 
    }
	
	/**
     * Delete the specified user.
     *
	 * @param $id unique id of user to be deleted
     * @return redirect
     */
	public function destroyUser($id){
	
		$user = User::findOrFail($id);
		$user -> delete();
		
		// If successful, redirect back to the page with a success message
		return redirect()->back()->with('message', 'The user was deleted successfully!');
    }
}
