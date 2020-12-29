@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <!-- Vertically centered modal -->
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <a class="btn btn-success" href="{{ route('test.create') }}"> Create New Student</a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <table class="table table-striped">
                    <tr>
                        <th>Sr No.</th>
                        <th>User Name</th>
                        <th>Email.</th>
                        <th>Gender</th>
                        <th>Phonen No.</th>
                        <th>Department</th>
                        <th>Joining Date</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($home as $u)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $u->full_name }}</td>
                        <td>{{ $u->email_id }}</td>
                        <td>{{ $u->gender }}</td>
                        <td>{{ $u->phone_number }}</td>
                        <td>{{ $u->department }}</td>
                        <td>{{ $u->joining_date }}</td>
                        <td>
                            <form action="{{ route('home.destroy',$u->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('home.edit',$u->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection