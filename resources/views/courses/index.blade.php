@extends('layouts.app')
@section('title', 'Courses')

@section('content')
<div class="page-head">
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">New Course</a>
</div>

<x-card title="All Courses">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Course Code</th>
                <th>Credit Hours</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->getTitle() }}</td>
                    <td>{{ $course->getCourseCode() }}</td>
                    <td>{{ $course->getCreditHours() }}</td>
                    <td>{{ $course->getDepartmentName() }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->getId()) }}">Edit</a>
                        <form action="{{ route('courses.destroy', $course->getId()) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:red; cursor:pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-card>
@endsection