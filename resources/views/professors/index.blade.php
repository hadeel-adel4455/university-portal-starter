@extends('layouts.app')

@section('title', 'Professors')

@section('content')

<div class="page-head">
    <h1>Professors</h1>
    <x-button href="{{ route('professors.create') }}">+ New Professor</x-button>
</div>

<x-card title="All Professors">
    @if (count($professors) === 0)
        <p class="empty">No professors found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th class="col-id">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th class="col-actions">Actions</th>
                </tr>
            </thead>
            <tbody>
               @foreach (collect($professors)->sortBy(fn($p) => $p->getId())->take(10) as $professor)
                <tr>
                    <td class="col-id">{{ $professor->getId() }}</td>
                    <td>{{ $professor->getName() }}</td>
                    <td>{{ $professor->getEmail() }}</td>
                    <td>{{ $professor->getDepartmentName() ?? '—' }}</td>
                    <td class="col-actions">
                        <x-button href="{{ route('professors.edit', $professor->getId()) }}" variant="secondary">Edit</x-button>
                        <form action="{{ route('professors.destroy', $professor->getId()) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <x-button variant="danger" type="submit" onclick="return confirm('Delete this professor?')">Delete</x-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-card>

@endsection