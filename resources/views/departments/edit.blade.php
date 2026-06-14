@extends('layouts.app')

@section('title', 'Edit Department')

@section('content')

<div class="page-head">
    <h1>Edit Department</h1>
    <x-button href="{{ route('departments.index') }}" variant="secondary">← Back</x-button>
</div>

<x-card title="Edit Department">
    <form action="{{ route('departments.update', $department->getId()) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <x-form-input
            name="name"
            label="Department Name"
            :value="$department->getName()"
            required
        />

        <div class="form-actions">
            <x-button type="submit">Save Changes</x-button>
            <x-button href="{{ route('departments.index') }}" variant="secondary">Cancel</x-button>
        </div>
    </form>
</x-card>

@endsection