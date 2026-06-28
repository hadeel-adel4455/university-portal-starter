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

    <div class="form-group">
        <label>Department</label>
        <select name="department_id" class="form-control" required>
            <option value="">-- Select Department --</option>

            @foreach($departmentOptions as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </div>
 <div class="form-actions">
            <x-button type="submit">Save Course</x-button>
            <x-button href="{{ route('courses.index') }}" variant="secondary">Cancel</x-button>
        </div>
</form>
</x-card>
@endsection