@extends('master')

@section('content')
<h1 class="text-center py-2">View Students Records</h1>
<p>
    <a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Go Back</a>
    <a href="{{ route('students.create') }}" type="button" class="btn btn-secondary"> <b>+</b> Add New Record</a>
</p>
@if (session()->has('message'))
<div class="alert {{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
    {{-- to print html code within blade template following syntax is used --}}
    {!! session()->get('message') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Sl.</th>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $counter = 1;
        @endphp
        @foreach ($students as $student)
        <tr>
            <th>{{ $counter++ }}</th>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone_number }}</td>
            <td>
                <form scope="col" action="{{ route('students.destroy', $student->id) }}" method="POST">
                    <a href="{{ route('students.show', $student->id) }}" type="button" class="btn btn-success">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" type="button" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
