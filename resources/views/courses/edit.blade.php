@extends('layouts.app')
@section('content')
<x-card title="Edit Course">
    <form action="{{ route('courses.update', $course->getId()) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{ $course->getTitle() }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Course Code</label>
            <input type="text" name="course_code" value="{{ $course->getCourseCode() }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Credit Hours</label>
            <input type="number" name="credit_hours" value="{{ $course->getCreditHours() }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
</x-card>
@endsection