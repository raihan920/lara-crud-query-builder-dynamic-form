<x-page-title title="View Detailed Students Record"></x-page-title>
@extends('master')

@section('content')
<h1 class="text-center py-2">View Individual Record</h1>
<p> <a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Go Back</a></p>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone_number }}</td>
        </tr>
    </tbody>
</table>
@endsection
