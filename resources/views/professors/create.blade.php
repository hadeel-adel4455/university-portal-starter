@extends('layouts.app')

@section('title', 'New Professor')

@section('content')

<div class="page-head">
    <h1>New Professor</h1>
    <x-button href="{{ route('professors.index') }}" variant="secondary">← Back</x-button>
</div>

<x-card title="Add Professor">
    <form action="{{ route('professors.store') }}" method="POST" class="form">
        @csrf

        <x-form-input
            name="name"
            label="Full Name"
            required
        />

        <x-form-input
            name="email"
            label="Email"
            type="email"
            required
        />

        <div class="form-group">
            <label for="department_id">Department</label>
            <select name="department_id" id="department_id" class="form-control">
                <option value="">— Select Department —</option>
                @foreach ($departmentOptions as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <x-button type="submit">Save</x-button>
            <x-button href="{{ route('professors.index') }}" variant="secondary">Cancel</x-button>
        </div>
    </form>
</x-card>

@endsection