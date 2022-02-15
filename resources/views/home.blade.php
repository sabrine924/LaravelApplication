@extends('welcome')
@section('content')
<table border="0" style="width:800px; margin:50px;">
    <tr>
        <td>
        <img src= "img/student.jpg" width="175" height="175">
        <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Student Management</button></a>
        </td>
        <td>
        <img src= "img/teacher.png" width="175" height="175">
        <a href="{{url('/teacher')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Teacher Management</button></a>
        </td>
        <td>
        <img src= "img/library.png" width="175" height="175">
        <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Library Management</button></a>
        </td>
        <td>
        <img src= "img/administrator.png" width="175" height="175">
        <a href="{{url('/student')}}"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Admin Management</button></a>
        </td>
    </tr>
</table>
@endsection

