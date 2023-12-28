@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('student.store')}}">
            @csrf
            <div class="card">
                <div class="card-header">Add New Student</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Student ID</td>
                            <td><input class="form-control" name="studID"></td>
                        </tr>
                        <tr>
                            <td>Student Name</td>
                            <td><input class="form-control" name="name"></td>
                        </tr>
                        <tr>
                            <td>Student Mobile</td>
                            <td><input class="form-control" name="mobileNumber"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-warning " href="{{route('student.index')}}">Back</a>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
