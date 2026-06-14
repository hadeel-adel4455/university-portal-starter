@extends('layouts.app')

@section('title', 'New Department')

@section('content')

<div class="page-head">
    <h1>New Department</h1>
    <x-button href="{{ route('departments.index') }}" variant="secondary">← Back</x-button>
</div>

<x-card title="Add Department">
    <form action="{{ route('departments.store') }}" method="POST" class="form">
        @csrf

        <x-form-input
            name="name"
            label="Department Name"
            required
        />

        <div class="form-actions">
            <x-button type="submit">Save</x-button>
            <x-button href="{{ route('departments.index') }}" variant="secondary">Cancel</x-button>
        </div>
    </form>
</x-card>

@endsection
