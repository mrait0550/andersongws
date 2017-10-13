<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
class UserController extends Controller{

	public function addleads(Request $request){
		$name = $request->input('aptname');
		$cn = $request->input('contact');
		$unit = $request->input('unit');
		$city = $request->input('city');
		$state = $request->input('state');
		$zip = $request->input('zip');
		$cntry = $request->input('country');
		$time = date('Y-m-d');
		// DB::table('tblleads')->insert([
		// 		'fldaptname' 	=> $name,
		// 		'fldtype' 		=> 'Apartments',
		// 		'fldaptnumber' 	=> $cn,
		// 		'fldunit'		=> $unit,
		// 		'fldcity'		=> $city,
		// 		'fldstate'		=> $state,
		// 		'fldzipcode'	=> $zip,
		// 		'fldcountry' 	=> $cntry,
		// 		'fldAccountTypeID' => '1',
		// 		'fldStatus'		=> '119',
		// 		'fldStartDate'	=> $time
		// ]);
		return redirect()->action('Auth\AdminController@getMake');
	}

	public function showleads(){
		$leads = DB::table('tblleads')
						->where('fldStatus', '=', '119')
						->paginate(30);
		$data = ['lead' => $leads];
		return view('user.showleads', $data);
	}

	public function showCustomer(){
		$customer = DB::table('tblcustomer')
					->select('tblcustomer.fldCustomerID',
											'tbltype.fldTypeName',
											'tblpersonalinformation.fldFName',
											'tblpersonalinformation.fldLName',
											'tblcompany.fldCompanyName',
											'tbladdress.fldStreet',
											'tbladdress.fldUnitNumber',
											'tbladdress.fldCity',
											'tbladdress.fldState',
											'tbladdress.fldZipCode',
											'tblmonthlyKWH.fldEndDate',
											'REPName.fldCompanyName as REPNames')
					->join('tblpersonalinformation', 'tblcustomer.fldCustomerID', '=', 'tblpersonalinformation.fldPersonalInfoID')
					->leftJoin('tbladdress', 'tblcustomer.fldCustomerID', '=', 'tbladdress.fldAccountID')
					->leftJoin('tblcompany', 'tblcompany.fldCompanyID', '=', 'tbladdress.fldCompanyID')
					->leftJoin('tblpersonalinformation AS AgentInfo', 'tblcustomer.fldAgentID', '=', 'AgentInfo.fldPersonalInfoID')
					->leftJoin('tbltype', 'tblcustomer.fldEnrollmentTypeID', '=', 'tbltype.fldTypeID')
					->leftJoin('tblmonthlyKWH', 'tblmonthlyKWH.fldCustomerID', '=', 'tblcustomer.fldCustomerID')
					->leftJoin('tblcompany AS REPname', 'REPname.fldCompanyID', '=', 'tblmonthlyKWH.fldREPID')
					->whereIn('tblcustomer.fldEnrollmentTypeID', [66, 67, 68, 69, 98, 103])
					->whereIn('tblcustomer.fldStatus', [1, 4])
					->where('tbladdress.fldAddressType', '=', 27)
					->orderBy('tblpersonalinformation.fldCreatedDate', 'desc')
					->groupBy('tblcustomer.fldCUstomerID')
					->paginate(30);
		$data = ['customer' => $customer];
		return view('user.cusView', $data);
	}

	public function showCompany(){
		$company = DB::table('tblcompany')
						->select('tblcompany.fldCompanyID',
							'tblcompany.fldCompanyName', 
							'tblcompany.fldType', 
							'tblcompany.fldWebsite', 
							'tblcompany.fldStatus',
							'tblstatus.fldStatusType',
							'agentinfo.fldFName AS agentFirst','agentinfo.fldLName AS agentLast',
							'oriagentinfo.fldFName as oriFirst', 'oriagentinfo.fldLName AS oriLast',
							'repinfo.fldFName as repFirst', 'repinfo.fldLName as repLast')
						->join('tblpersonalinformation AS agentinfo', 'tblcompany.fldAgentID', '=', 'agentinfo.fldPersonalInfoID')
						->join('tblpersonalinformation AS oriagentinfo', 'tblcompany.fldOriginalAgentTemp', '=', 'oriagentinfo.fldPersonalInfoID')
						->join('tblcompanyrepresentative', 'tblcompany.fldCompanyID', '=', 'tblcompanyrepresentative.fldCompanyID')
						->join('tblpersonalinformation AS repinfo', 'tblcompanyrepresentative.fldRepID', '=', 'repinfo.fldPersonalInfoID')
						->leftJoin('tblstatus', 'tblcompany.fldStatus', '=', 'tblstatus.fldStatusID')
						->where('tblcompany.fldStatus', '=', 4)
						->orWhere('tblcompany.fldStatus', '=', 5)
						->orWhere('tblcompany.fldStatus', '=', 6)
						->groupBy('tblcompany.fldCompanyID')
						->orderBy('fldDateCreated', 'desc')
						->paginate(30);
		$data = ['company' => $company];
		return view('user.comview', $data);
	}

	public function showStatistics(){
		$query = DB::table('tblstorequery')
						->groupBy('queryName')
						->paginate(50);
		$data = ['query' => $query];
		return view('user.selectquery', $data);

	}

	public function showQuery(Request $request){
		$select = $request->input('invisible'); //tablename
		$query = DB::table('tblstorequery') //query to get the data row
					->where('queryName', '=', $select)
					->paginate(20);
		$dt = ['query' => $query, 'select' => $select];
		return view('user.showstats', $dt);
	}

	public function addQuery(){
		$show = DB::select('SHOW TABLES');
		$data = ['select' => $show];
		return view('user.add', compact('show'));
	}

	public function addColumn(Request $request){
		$request = $request->input('invisible');
		$column = DB::select('SHOW COLUMNS FROM '.$request);
		$data = ['column' => $column, 'request' => $request];
		return view('user.column', $data);
	}

	public function getChecked(Request $request){
		$checked = $request->input('columncheck');
		$tablename = $request->input('tablename');
		$query = DB::table($tablename)
						->select($checked)
						->paginate(40);
		$dt = ['query' => $query, 'select'=> $checked, 'tablename' => $tablename];
		return view('user.query', $dt);
	}

	public function saveQuery(Request $request){
		$content = $request->input('column');
		$tablename = $request->input('tablename');
		$title = $request->input('fldTitle');
		$arraycontent = json_encode($content);

		$query = DB::table('tblstorequery')->get();
		
			foreach($query as $q){
				$qa = $q->queryName;
			}
			
			if($qa == $title){
				return redirect()->action('UserController@addQuery')->withErrors(['This Title name has already been taken']);
			} elseif($qa != $title) {
				foreach($content as $c){
					
					DB::table('tblstorequery')
						->insert([
							'tablename' => $tablename,
							'columname' => $c,
							'queryName' => $title
						]);
				}
				return redirect()->action('UserController@showStatistics');
			}
	}


}