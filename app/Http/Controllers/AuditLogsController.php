<?php

namespace App\Http\Controllers;
use App\Models\AuditLogs;
use Illuminate\Http\Request;

class AuditLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        

    }


    public function delete($id){

     $data = AuditLogs::Find($id);
     $data->delete();
    
     return view('dashboard');

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
    public function show()
    {
     

        $auditLogs = AuditLogs::all();

        return view('viewAllLogs', ['auditLogs' => $auditLogs] );
        
        //
    }


    function showLog(){

        $auditLogs = AuditLogs::select('*')->where('authentication_id','2')->get();
        return view('viewAllLogs', ['auditLogs' => $auditLogs] );
    
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = AuditLogs::Find($id);  
     
        return view('editLog', ['data' => $data]);

    }

    function updateLog(Request $req){

      $data = AuditLogs::Find($req->id);  
      
      $data->authentication_type     = $req->authentication_type;
      $data->authentication_id       = $req->authentication_id;
      $data->ip_address              = $req->ip_address;
      $data->user_agent              = $req->user_agent;
      
      $data->save();

      return redirect('viewAllLogs');

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
