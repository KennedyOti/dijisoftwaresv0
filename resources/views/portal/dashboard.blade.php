@extends('layouts.portal')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="alert alert-primary">
        You are logged in as {{ Auth::user()->role }}
    </div>

    <div class="row">
        <!-- Bootcamp Registrations Card -->
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Bootcamp Registrations</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $bootcampCount }} Candidates</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
