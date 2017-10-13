<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\companyrep;
use App\Apartmentunit;
use DB;
use Hash;
use Crypt;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\Auth\Guard;

class AdminController extends Controller {

	protected $user;

	protected $auth;

	public function __construct(Guard $auth, User $user){
		$this->user = $user;
		$this->auth = $auth;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected function validator(array $data){
		return Validator::make($data, [
				'fldUsername' => 'required|max:255',
				'email' => 'required|email|max:255|unique:users',
				'password' => 'required|confirmed|min:6',
			]);
	}

	protected function getLogin(){
		return view('admin.login');
	}

	protected function postLogin(LoginRequest $request){

		$username = $request->only('fldUsername');
		$password = $request->only('password');

		$users = User::where('fldUsername', '=', $username);

		if($users->count()>0){
			$person = $users->select("fldUsername", "fldFName", "fldPersonalInfoID")->first();
			// $apt = Companyrep::where('fldRepID', '=', $person->fldPersonalInfoID)->first();

			// $due = Apartmentunit::Cuslist()->select('tblpersonalinformation.fldFName', 'tblcustomer.fldDateEnrolled')
			// 							   ->where('tblcompany.fldCompanyID', '=', 'AC17-03726')
			// 							   ->where('tbladdress.fldAddressType', '=', '27')
			// 							   ->get();

			$data = ['duedate' => $person];
			return view("admin.dashboard", $data);

			// $data = ['users' => $person,
			// 		 'aptmnt' => $apt
			// 		];
			// return $data;
			// $data = ['authentication' => $users];
			// return redirect()->action('Auth\AdminController@getIndex', $data);
			
			// return view("admin.dashboard", $data);
		}

		return $username." - ".$password;

	}

	public function welcome(){
		return view('welcome');
	}

	// public function getIndex(){
	// 	$apt = Apartments::all();
	// 	$dt = ['aptmnt' => $apt];
	// 	return view('admin.dashboard', $dt);
	// }

	public function getLogout(){
		// User::logout();
		return redirect()->action('Auth\AdminController@getLogin');
	}

	public function getMake(){
		return view("user.create");
	}

	public function getList(){
		return view("user.addleads");
	}
}