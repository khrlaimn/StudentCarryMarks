@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('subject.store')}}">
            @csrf
            <div class="card">
                <div class="card-header">Add New Subject</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Subject ID</td>
                            <td><input class="form-control" name="subjectId"></td>
                        </tr>
                        <tr>
                            <td>Student Name</td>
                            <td><input class="form-control" name="name"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('subject.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
