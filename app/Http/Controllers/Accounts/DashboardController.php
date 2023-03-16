<?php

namespace App\Http\Controllers\Accounts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Carbon\Carbon;
use Auth;
use Redirect;
use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\CarbonPeriod;
use PDF;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::check()) 
        {
            return Redirect::to('/login');
        }
      //  return view('Account.dashboard',compact('data'));
      return view('Account.dashboard');
    }

    
}
