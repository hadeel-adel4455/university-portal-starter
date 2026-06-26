@extends('layouts.app')
@section('content')
<x-card title="Add New Course">
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Course Code</label>
            <input type="text" name="course_code" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Credit Hours</label>
            <input type="number" name="credit_hours" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save Course</button>
    </form>
</x-card>
@endsection