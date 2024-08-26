@extends('layouts.portal')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Courses Applied </h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Course Application Listing</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Location</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $key => $value)
                                    <tr>
                                        <td>{{ $value->fullName }}</td>
                                        <td>{{ $value->phoneNumber }}</td>
                                        <td>{{ $value->location }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->course }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
