@extends('layout')
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

<?php 

$data = session('newData');

?>
@section('content')
<h6>My Profile</h6>
<br>

<table style="padding:20px;width:100%">
 <tr>
 <td colspan="2" style="text-align:center;">
 
 <img src="avatar.png" width="300" height="220"> 
 </td>
</tr>
 <tr>
 <th> Name </th>
 <td> {{$data[0]->name}}  </td>
 </tr>

 <tr>
 <th>   D.O.B </th>
 <td>  {{$data[0]->dob}}  </td>
 </tr>

 <tr>
 <th> Phone Number </th>
 <td> {{$data[0]->phone}}   </td>
 </tr>

 <tr>
 <th> Address </th>
 <td> {{$data[0]->address}}   </td>
 </tr>

 <tr>
 <th> City </th>
 <td> {{$data[0]->city}}  </td>
 </tr>
 
 <tr>
 <th> State </th>
 <td> {{$data[0]->state}} </td>
 </tr>

  
</table>

@endsection