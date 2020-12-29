@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Add New Students</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('test.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('test.store') }}" method="POST">

    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Full Name:</strong>

                <input type="text" name="full_name" class="form-control" placeholder="studname">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email :</strong>

                <input type="text" name="email_id" class="form-control" placeholder="course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Gender</strong>

                <input type="text" name="gender" class="form-control" placeholder="course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Phone No.</strong>

                <input type="text" name="phone_number" class="form-control" placeholder="course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Department</strong>

                <input type="text" name="department" class="form-control" placeholder="course">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Joining Date</strong>

                <input type="text" name="joining_date" id="datepicker" class="form-control" placeholder="fee">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
</form>
@endsection