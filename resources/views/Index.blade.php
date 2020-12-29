@extends('layouts.app')

@section ('content')
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> Create New User</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form href="{{ route('test.store') }}" method="POST">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Gender :</label>
                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Phone No. :</label>
                        <input type="number" class="form-control" name="phone_number" placeholder="Enter Phone Number" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Department :</label>
                        <input type="text" class="form-control" name="department" placeholder="Enter Department" id="message-text">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Joining Date :</label>
                        <input type="text" class="form-control" id="datepicker" name="joining_date" placeholder="Enter Joining Date" id="message-text">
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    @foreach ($test as $u)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->gender }}</td>
                        <td>{{ $u->phone_no }}</td>
                        <td>{{ $u->department }}</td>
                        <td>{{ $u->joining_date }}</td>
                        <td>

                            <form action="{{ route('test.destroy',$u->id) }}" method="POST">
                                <a class="btn btn-primary" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleeditModal" href="{{ route('test.edit',$u->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <a type="submit" class="btn btn-danger">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="modal fade" id="exampleeditModal" tabindex="-1" aria-labelledby="exampleeditModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleeditModalLabel">Add User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form href="{{ route('test.store') }}" method="POST">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                        <input type="text" name="name" class="form-control" id="recipient-name" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Email :</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email" id="message-text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Gender :</label>
                                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender" id="message-text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Phone No. :</label>
                                        <input type="number" class="form-control" name="phone_no" placeholder="Enter Phone Number" id="message-text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Department :</label>
                                        <input type="text" class="form-control" name="department" placeholder="Enter Department" id="message-text">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Joining Date :</label>
                                        <input type="text" class="form-control" id="datepicker" name="joining_date" placeholder="Enter Joining Date" id="message-text">
                                    </div>
                                    <button type="submit" class="btn btn-secondary">Submit</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection