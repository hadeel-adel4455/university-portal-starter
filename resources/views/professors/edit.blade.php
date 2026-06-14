@extends('layouts.app')

@section('title', 'Edit Professor')

@section('content')

<div class="page-head">
    <h1>Edit Professor</h1>
    <x-button href="{{ route('professors.index') }}" variant="secondary">← Back</x-button>
</div>

<x-card title="Edit Professor">
    <form action="{{ route('professors.update', $professor->getId()) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <x-form-input
            name="name"
            label="Full Name"
            :value="$professor->getName()"
            required
        />

        <x-form-input
            name="email"
            label="Email"
            type="email"
            :value="$professor->getEmail()"
            required
        />

        <div class="form-group">
            <label for="department_id">Department</label>
            <select name="department_id" id="department_id" class="form-control">
                <option value="">— Select Department —</option>
                @foreach ($departmentOptions as $id => $name)
                    <option value="{{ $id }}" {{ $professor->getDepartmentId() == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <x-button type="submit">Save Changes</x-button>
            <x-button href="{{ route('professors.index') }}" variant="secondary">Cancel</x-button>
        </div>
    </form>
</x-card>

@endsection