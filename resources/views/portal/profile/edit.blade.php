@extends('layouts.portal')

@section('breadcrumb')
    <div class="col-sm-6">
        <h1 class="m-0">Profile</h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </div>
@endsection

@section('content')
    @if (session('status') === 'profile-updated')
        <div class="alert alert-success">
            Profile updated successfully.
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <!-- Profile Update Form -->
            <div class="card border-0 rounded-4 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Update Profile</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}"
                                required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $user->email) }}" required>
                        </div>

                        @if (Auth::user()->role == 'admin')
                            <div class="form-group mb-3">
                                <label for="role">Role</label>
                                <select name="role" class="form-control">
                                    <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : '' }}>
                                        Customer</option>
                                    <option value="student" {{ old('role', $user->role) == 'student' ? 'selected' : '' }}>
                                        Student</option>
                                    <option value="tutor" {{ old('role', $user->role) == 'tutor' ? 'selected' : '' }}>Tutor
                                    </option>
                                    <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        @else
                            <input type="hidden" name="role" value="{{ old('role', $user->role) }}">
                        @endif

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Password Update Form -->
            <div class="card border-0 rounded-4 shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Update Password</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.updatePassword', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input type="password" name="current_password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="new_password">New Password</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="new_password_confirmation">Confirm New Password</label>
                            <input type="password" name="new_password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
