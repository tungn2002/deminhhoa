@extends('layout')

@section('content')

                        <a href="{{ url('create') }}" class="btn btn-primary">Add Student</a> 
             
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>fullname</th>
                                <th>birthday</th>
                                <th>address</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->fullname }}</td>
                                <td>{{ $item->birthday }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="{{ url('edit_student/id='.$item->id) }}" class="btn btn-primary ">Edit</a>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

@endsection