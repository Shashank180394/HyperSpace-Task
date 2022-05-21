@extends('layout')

@section('content')
<h6>Edit Audit Log / Audit Log Management</h6>
<br>
<div class="container"> 
<form action="/updateLog" method="POST" >
@csrf

<input type="hidden" name="id" value="{{$data->id}}" >

<div class="row">
	 
	<div class="col-md-6">
	    <div class="form-group">
          <label for="">Authentication Type </label>
          <input type="text" class="form-control" name="authentication_type" value="{{$data->authentication_type}}" required>
        </div>
	</div>
	
	<div class="col-md-6">
	    <div class="form-group">
          <label for="">Authentication ID</label>
          <input type="text" class="form-control" name="authentication_id" value="{{$data->authentication_id}}" required>
        </div>
	</div>
	
</div>								 

<div class="row">
         
          <div class="col-md-12">
	      <div class="form-group">
          <label for="">IP Address</label>
          <input type="text" class="form-control" name="ip_address" value="{{$data->ip_address}}" required>
          </div>
	      </div>

</div>

		
<div class="row">
	 
	<div class="col-md-12">
	    <div class="form-group">
          <label for="">User Agent </label>
          <textarea class="form-control" rows="4" name="user_agent" required>{{$data->user_agent}}</textarea>
        </div>
	</div>

</div>												 
											 
    <!--  row   -->
<br>
   <p style="text-align:center;"> <button type="submit" class="btn btn-primary">Submit</button> </p>
	  
	  
  </form>
</div>



@endsection
