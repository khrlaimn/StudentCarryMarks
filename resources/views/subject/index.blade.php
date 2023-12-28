@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('success'))
            <h6 class="alert alert-success">
                {{ session('success') }}
            </h6>
        @endif
        <div class="card-header">
            <h1>List of Subjects</h1>
        </div>
        <div class="card-body">
            <a class="btn btn-primary float-end" href="{{route('subject.create')}}">Add New</a>
            <table class="table">
            <thead>
                <tr><th>No.</th><th>Subject ID</th><th>Name</th></tr>
            </thead>
            <tbody>
            @php($i=1)
                @foreach($subjects as $s)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$s->subjectId}}</td>
                        <td>{{$s->name}}</td>
                        <td>
                            <form action="{{route('subject.destroy',$s)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-info" href="{{route('subject.show',$s->id)}}">Details</a>
                                <a class="btn btn-warning" href="{{route('subject.edit',$s->id)}}">Edit</a>
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
