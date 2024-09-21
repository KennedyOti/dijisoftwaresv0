@extends('layouts.portal')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Bootcamp Applications</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Bootcamp Applications</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h2 class="mb-4">Submitted Applications</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Highest Level of Education</th>
                                    <th>Career Path</th>
                                    <th>Level of Computer Literacy</th>
                                    <th>Reason For Joining</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                    <tr>
                                        <td>{{ $application->fullname }}</td>
                                        <td>{{ $application->phone }}</td>
                                        <td>{{ $application->email }}</td>
                                        <td>{{ $application->education }}</td>
                                        <td>{{ $application->career_path }}</td>
                                        <td>{{ $application->computer_literacy }}</td>
                                        <td>{{ $application->reason_for_joining }}</td>
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
