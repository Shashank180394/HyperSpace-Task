<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AuditLogs;
use Illuminate\Http\Request;

class UserController extends Controller
{
  
   
    function logout(){

        $a = AuditLogs::select('*')->orderBy('id','desc')->take(1)->get();
        $a[0]->logout_at = date("Y-m-d h:i:sa");
        $a[0]->save();
        
        session()->forget('data');
        session()->forget('newData');
        return redirect('/');
        

    }



    function loginsubmit(Request $req){
   
        $data = User::select('*')->where(
           [
              ['email','=', $req->email ],
              ['password','=', $req->password],
           ]
        )->get();
        
   
     
         if($data->isEmpty())
         {
     
         return redirect('/');
           
         }
         else if(!$data->isEmpty())  
         {

            
            $al = new AuditLogs;
            $al->authentication_type = "User/App";
            $al->authentication_id = $data[0]->id;
            $al->name = $data[0]->name;
            $al->ip_address = $_SERVER['REMOTE_ADDR'];
            $al->user_agent = $_SERVER['HTTP_USER_AGENT'];
            $al->login_at = date("Y-m-d h:i:sa");
            $al->logout_at = "N/A";
   
            $al->save(); 

         
           session(['newData' => $data]);
     
           $req->session()->put('data', $req->input());
     
           if(session()->has('data')){
     
           return redirect('dashboard');
     
           }
           else{
     
           return redirect('/');
         
           }
     
        }
     
     
     }  


}
