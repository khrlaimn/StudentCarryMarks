@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h1>Student Details</h1></div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Student ID</td>
                        <td>{{$student->studID}}</td>
                    </tr>
                    <tr>
                        <td>Student Name</td>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <td>Student Mobile</td>
                        <td>{{$student->mobileNumber}}</td>
                    </tr>
                    <tr>
                        <td>Subjects Registered</td>
                        <td>
                            <table class="table table-bordered">
                                @php($i=1)
                                <tr><th>No.</th><th>Code</th><th>Name</th><th>Credit Hours</th></tr>
                                @foreach($student->subjects as $s)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$s->subjectId}}</td>
                                        <td>{{$s->name}}</td>
                                        <td>{{$s->credit}}</td>
                                    </tr>
                                @endforeach
                            </table>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a class="btn btn-warning " href="{{route('student.index')}}">Back</a>
            <a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">Edit Details</a>
        </div>

    </div>
@endsection