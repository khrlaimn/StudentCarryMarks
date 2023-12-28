@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Students</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('student.create')}}">Add New</a>
            <table class="table">
            <thead>
                <tr><th>No.</th><th>Student ID</th><th>Name</th><th>Mobile</th><th>Action</th></tr>
            </thead>
            <tbody>
            @php($i=1)
                @foreach($students as $s)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$s->studID}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->mobileNumber}}</td>
                        <td>
                            <form action="{{route('student.destroy',$s)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('student.show',$s->id)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('student.edit',$s->id)}}">Edit</a>
                                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
