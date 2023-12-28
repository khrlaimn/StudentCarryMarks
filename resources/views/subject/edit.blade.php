@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('subject.update',$subject)}}">
            @method('PATCH')
            @csrf
            <div class="card">
                <div class="card-header">Update Subject Information</div>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="subjectId" class="col-sm-2 col-form-label">Subject ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="subjectId" class="form-control" id="code" value="{{ $subject->subjectId }}">
                            @error('subjectId')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" value="{{ $subject->name }}">
                            @error('name')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="text-center mt-3">
                <a class="btn btn-warning " href="{{route('subject.index')}}">Back</a>&nbsp;
                <input class="btn btn-secondary" type="reset" value="Reset"> &nbsp;
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
