<x-page-title title="Edit Students Record"></x-page-title>
@extends('master')

@section('content')
<h1 class="text-center py-2">Add New Record</h1>
<p>
    <a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Go Back</a>
    <a href="{{ route('students.index') }}" type="button" class="btn btn-primary"><i class="bi bi-house-door"></i>
        Home</a>
</p>
@if (session()->has('message'))
<div class="alert {{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
    {{-- to print html code within blade template following syntax is used --}}
    {!! session()->get('message') !!}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="col-md-12 col-lg-12">
    <form method="POST" action="{{ route('students.update', $student->id) }}" class="needs-validation" novalidate="">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="fullName" class="form-label">Full name</label>
                <input type="text" name="name" class="form-control" id="fullName" placeholder="write your full name"
                    value="{{ $student->name }}" required="required">
                <div class="invalid-feedback">
                    Your full name should match your birth certificate name.
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com"
                    required="required" value="{{ $student->email }}">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="phoneNumber" class="form-label">Pnone Number</label>
                <input type="text" name="phone_number" class="form-control" id="phoneNumber"
                    placeholder="+880 123465789" value="{{ $student->phone_number }}" required="required">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" value="male" id="male" @checked(old('sex', $student->sex))>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="female" value="female" @checked(old('sex', $student->sex))>
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="comment"></textarea>
                <label for="comment">Comments</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="testify" id="testify" @checked(old('testify', $student->testify))>
                <label class="form-check-label" for="testify">
                    I hereby testify that all the given information is true to the best of my knowledge.
                </label>
            </div>

        </div>
        <hr>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Update Data</button>
    </form>
</div>
@endsection
