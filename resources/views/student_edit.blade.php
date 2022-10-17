@extends('layout')

@section('content')
<form action="{{ url('update-student/id='.$students->id) }}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
    <label >id</label>
    <input type="text" class="form-control" name="fullname" value="{{$students->id}}" readonly>
  </div>
<div class="form-group">
    <label >fullname</label>
    <input type="text" class="form-control" name="fullname" value="{{$students->fullname}}">
  </div>
  <div class="form-group">
    <label >birthday</label>
    <input type="date" class="form-control" name="birthday" value="{{$students->birthday}}">
  </div>
  <div class="form-group">
    <label >address</label>
    <input type="text" class="form-control" name="address" value="{{$students->address}}">
  </div>
  <button type="submit"  class="btn btn-primary">Update student</button>

</form>

@endsection