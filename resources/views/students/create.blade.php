@extends('master')

@section('content')
    <h1 class="text-center py-2">Add New Record</h1>
    <p>
        <a href="{{ url()->previous() }}" type="button" class="btn btn-dark">Go Back</a>
        <a href="{{ route('students.index') }}" type="button" class="btn btn-primary"><i class="bi bi-house-door"></i> Home</a>
    </p>
    @if (session()->has('message'))
        <div class="alert {{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
            {{-- to print html code within blade template following syntax is used --}}
            {!! session()->get('message') !!}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-md-12 col-lg-12">

        <form method="POST" action="{{ route('students.store') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="fullName" class="form-label">Full name</label>
                    <input type="text" name="name" class="form-control" id="fullName" placeholder="write your full name" value="" required="required">
                    <div class="invalid-feedback">
                    Your full name should match your birth certificate name.
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required="required">
                    <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="col-12">
                    <label for="phoneNumber" class="form-label">Pnone Number</label>
                    <input type="text" name="phone_number" class="form-control" id="phoneNumber" placeholder="+880 123465789" required="required">
                    <div class="invalid-feedback">
                    Please enter your shipping address.
                    </div>
                </div>
            </div>
            <hr>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit Form</button>
    </form>
</div>
@endsection
