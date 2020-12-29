@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Product</h2>

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

<form action="{{ route('test.update',$test->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>StudName:</strong>

                <input type="text" name="full_name" value="{{ $test->full_name}}" class="form-control" placeholder="Enter Full Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="email_id" value="{{ $test->email_id}}" class="form-control" placeholder="Enter Email_id">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="gender" value="{{ $test->gender}}" class="form-control" placeholder="Gender">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="phone_number" value="{{ $test->phone_number}}" class="form-control" placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="department" value="{{ $test->department}}" class="form-control" placeholder="Enter Department">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Fee:</strong>
                <input type="text" name="joining_date" value="{{ $test->joining_date}}" class="form-control" placeholder="Enter Joining Date">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </div>
</form>

@endsection