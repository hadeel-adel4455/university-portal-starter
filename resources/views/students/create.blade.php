```php
{{--
    YOUR TASK (W10):  form to create a new student.

    The controller passes in:
        $departmentOptions  — an array of  [id => name]  for a dropdown

    Submit with:
        method="POST"  action="{{ route('students.store') }}"  @csrf

    Validated fields (use these as input name=""):
        name            (required)
        email           (required, must be an email)
        student_number  (optional)
        department_id   (optional)

    For department_id, build a <select> by looping $departmentOptions:
        @foreach ($departmentOptions as $id => $name) ... @endforeach

    TODO: build the form here.
--}}

```
@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <x-card title="Add New Student">
        <form method="POST" action="{{ route('students.store') }}">
            @csrf

            <x-form-input
                name="name"
                label="Full Name"
                required
            />

            <x-form-input
                name="email"
                label="Email Address"
                type="email"
                required
            />

            <x-form-input
                name="student_number"
                label="Student Number"
            />

            <div class="form-group">
                <label for="department_id">Department</label>

                <select
                    id="department_id"
                    name="department_id"
                    class="form-control{{ $errors->has('department_id') ? ' is-invalid' : '' }}"
                >
                    <option value="">-- None --</option>
                    @foreach ($departmentOptions as $id => $name)
                        <option value="{{ $id }}" @selected(old('department_id') == $id)>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>

                @error('department_id')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-3">
                <x-button type="submit" variant="primary">Save Student</x-button>
                <x-button href="{{ route('students.index') }}" variant="secondary">Cancel</x-button>
            </div>
        </form>
    </x-card>
@endsection