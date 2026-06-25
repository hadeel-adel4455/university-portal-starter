```php
{{--
    YOUR TASK (W10 + W13):  list every student.

    The controller passes in:
        $students  — an array of App\DTOs\StudentDTO

    Each StudentDTO gives you:
        getId(), getName(), getEmail(), getStudentNumber(),
        getDepartmentId(), getDepartmentName()

    Build a table (loop with @foreach), with for each row:
        - an "Edit" link    -> route('students.edit', $student->getId())
        - a "Delete" <form> (POST + @csrf + @method('DELETE'))
              action -> route('students.destroy', $student->getId())
    Plus a "New Student" link -> route('students.create').

    Tip: getDepartmentName() may be null if the student has no department.

    TODO: build the view here.
--}}

```
@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="page-head d-flex justify-content-between align-items-center mb-3">
        <h1>Students</h1>
        <x-button href="{{ route('students.create') }}" variant="primary">
            + New Student
        </x-button>
    </div>

    <x-card title="All Students">
        @if (count($students) === 0)
            <p class="empty">No students found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Student Number</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->getName() }}</td>
                            <td>{{ $student->getEmail() }}</td>
                            <td>{{ $student->getStudentNumber() ?? '—' }}</td>
                            <td>{{ $student->getDepartmentName() ?? '—' }}</td>
                            <td>
                                <x-button href="{{ route('students.edit', $student->getId()) }}" variant="secondary">
                                    Edit
                                </x-button>

                                <form
                                    method="POST"
                                    action="{{ route('students.destroy', $student->getId()) }}"
                                    style="display:inline"
                                    onsubmit="return confirm('Delete {{ $student->getName() }}? This cannot be undone.');"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <x-button type="submit" variant="danger">
                                        Delete
                                    </x-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </x-card>
@endsection