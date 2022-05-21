@section('css')

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

@endsection


@extends('layout')
@section('content')

<h6>View All Logs / Audit Log Management</h6>
<br>

<table id="dataTable">
<thead>
<tr>
<th>Auth Type</th>
<th>Auth ID</th>
<th>IP Address</th>
<th>User Agent</th>
<th>Login At</th>
<th>Logout At</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($auditLogs as $a)

<tr>
<td>{{$a->authentication_type}}</td>
<td>{{$a->authentication_id}}</td>
<td>{{$a->ip_address}}</td>
<td>{{$a->user_agent}}</td>
<td>{{$a->login_at}}</td>
<td>{{$a->logout_at}}</td>
<td>

<a href="/editLog/{{$a->id}}" class="btn btn-warning"> Edit </a>      

</td>
<td>

<a href='/deleteLog/{{$a->id}}' class="btn btn-danger"> X </a>  

</td>
</tr>
@endforeach
</tbody>


</table>

@endsection


@push('scripts')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>	
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	  <script>
	
     $(document).ready(function() {
     $('#dataTable').DataTable({
     "lengthMenu": [ [500,1000, 2500, 5000, -1], [500,1000, 2500, 5000, "All"] ]
     });

     } );	
    
    </script>

@endpush