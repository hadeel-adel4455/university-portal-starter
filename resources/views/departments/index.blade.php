@extends('layouts.app')

@section('title', 'Departments')

@section('content')

<div class="page-head">
    <h1>Departments</h1>
    <x-button href="{{ route('departments.create') }}">+ New Department</x-button>
</div>

<x-card title="All Departments">
    @if (count($departments) === 0)
        <p class="empty">No departments found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th class="col-id">ID</th>
                    <th>Name</th>
                    <th class="col-actions">Actions</th>
                </tr>
            </thead>
            <tbody>
              @foreach (collect($departments)->sortBy(fn($d) => $d->getId()) as $department)
                <tr>
                    <td class="col-id">{{ $department->getId() }}</td>
                    <td>{{ $department->getName() }}</td>
                    <td class="col-actions">
                        <x-button href="{{ route('departments.edit', $department->getId()) }}" variant="secondary">Edit</x-button>

                        <form action="{{ route('departments.destroy', $department->getId()) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <x-button variant="danger" type="submit"
                                onclick="return confirm('Delete this department?')">
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