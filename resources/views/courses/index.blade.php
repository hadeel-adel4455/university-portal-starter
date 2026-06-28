@extends('layouts.app')
@section('title', 'Courses')

@section('content')
<div class="page-head">
    <h1>Courses</h1>
   <x-button href="{{ route('courses.create') }}">+ New Course</x-button>
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
                        <x-button href="{{ route('courses.edit', $course->getId()) }}" variant="secondary">Edit</x-button>
                        <form action="{{ route('courses.destroy', $course->getId()) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                           <x-button variant="danger" type="submit"
                                onclick="return confirm('Delete this course?')">
                                Delete
                            </x-button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-card>
@endsection