<?php

namespace App\Http\Controllers\Accounts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use Redirect;
use DB;
use Illuminate\Support\Facades\Hash;
use Carbon\CarbonPeriod;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      $users= User::orderBy('id','desc')->get();
      //  return view('Account.dashboard',compact('data'));
      return view('Account.users',compact('users'));
    } /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $validated = $request->validate([
           'name' => 'required',
           'password' => 'required',
       ]);
      
  
       $user = new User;
       $user->email = $request->email;
       $user->username =  $request->name;
       if($request->password){
        $user->password = Hash::make(trim($request->password));
       }
     
       $user->role = ($request->is_admin)?1:0;
       $user->phone = $request->phone;
      // $user->mail_id= $request->email;
    //    $user->hashroot=($request->hashroot)?1:0;

       
    //    $user->hashroot_s=($request->hashroot_s)?1:0;

  
    //    $user->hashroot_p=($request->hashroot_p)?1:0;

    //    $user->hashroot_ss=($request->hashroot_ss)?1:0;
      

       $res = $user->save();
       return redirect()->back()
               ->with('success', 'Created successfully!');
       
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show(Request $request)
   {
    $users= User::find($request->id);
    return response()->json([
      'data' => $users
    ]);     
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $category = Category::find($id);
       return response()->json([
           'data' => $category,
           'success'    => '200'
       ]);
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
       $validated = $request->validate([
           'name' => 'required',
       ]);
       try {
       $user = User::where('id',$request->listid)->first();
       $user->email = $request->email;
       $user->username =  $request->name;
       if($request->password){
        $user->password = Hash::make(trim($request->password));
       }
     
    //    if($request->is_admin==1){
    //     $user->hashroot=1;

       
    //     $user->hashroot_s=1;
 
   
    //     $user->hashroot_p=1;
 
    //     $user->hashroot_ss=1;
    //    }
       $user->role = ($request->is_admin)?1:0;
       $user->phone = $request->phone;
      // $user->mail_id= $request->email;
    //    $user->hashroot=($request->hashroot)?1:0;

       
    //    $user->hashroot_s=($request->hashroot_s)?1:0;

  
    //    $user->hashroot_p=($request->hashroot_p)?1:0;

    //    $user->hashroot_ss=($request->hashroot_ss)?1:0;
       $res = $user->save();
    
       return response()->json('success', 200);
           } catch (\Exception $e){
            \Log::info($e->getMessage());
               return response()->json('error', 200);
           }
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       try{
        User::find($id)->delete();
        return redirect()->back()
        ->with('success', 'Deleted successfully!');
       } catch (\Exception $e){
           return response()->json('error', 200);
       }
       
   }
   public function delete_category(Request $request)
   {
       try{
           Category::find($request->id)->delete();
           return response()->json('success', 200);
       } catch (\Exception $e){
           return response()->json('error', 200);
       }
       
   }
   public function massdelete(Request $request)
   {
       $ids = $request->ids;
       try{
        User::whereIn('id',$ids)->delete();
        return redirect()->back()
        ->with('success', 'Deleted successfully!');
       } catch (\Exception $e){
           return response()->json('error', 200);
       }
   }

   public function permissionUpdate(Request $request)
   {
    $user = User::where('id',$request->user_id)->first();
       try{
        
            $user->hashroot=($request->hashroot)?1:0;

       
            $user->hashroot_s=($request->hashroot_s)?1:0;

       
            $user->hashroot_p=($request->hashroot_p)?1:0;

            $user->hashroot_ss=($request->hashroot_ss)?1:0;

        
        $user->save();
        return redirect()->back()
        ->with('success', 'updated successfully!');
       } catch (\Exception $e){
           return response()->json('error', 200);
       }
   }


   public function profileDisplay()
   {
       
   
     return view('Account.profile');
   } 
   public function profileUpdate(Request $request)
   {
    $user = User::where('id',Auth::user()->id)->first();
    try{
     
        if($request->password){
            $user->password = Hash::make(trim($request->password));
        }
       
        if($request->name){
            $user->username = $request->name;
        }
       

     
    
     $user->save();
     return redirect()->back()
     ->with('success', 'updated successfully!');
    } catch (\Exception $e){
        return response()->json('error', 200);
    }

   } 
   
}