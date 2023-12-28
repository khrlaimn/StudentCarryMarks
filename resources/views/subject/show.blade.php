@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>Subject Details</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Subject ID</td>
                        <td>{{$subject->subjectId}}</td>
                    </tr>
                    <tr>
                        <td>Subject Name</td>
                        <td>{{$subject->name}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('subject.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('subject.edit',$subject->id)}}">Edit Details</a>
        </div>

    </div>
@endsection