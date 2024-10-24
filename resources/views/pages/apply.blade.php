@extends('layouts.app')

@section('content')
    <div class="container">
        <header class="text-center my-5">
            <h1 class="display-4">Apply for Our Online Courses</h1>
            <p class="lead">Fill out the form below to get started with our courses in Python programming, Javascript
                Programming, Web Development, Digital Literacy, Use of Artificial Intelligence, and more.</p>
            <p>Each Course Costs Only KSH: 5000</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Flash Message -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="applicationForm" action="{{ route('course-applications.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Course Being Applied For</label>
                        <select class="form-control" id="course" name="course" required>
                            <option value="">Select a course</option>
                            <option value="Digital Literacy">Digital Literacy</option>
                            <option value="Python Programming">Python Programming</option>
                            <option value="Javascript Programming">Javascript Programming</option>
                            <option value="PHP Programming">PHP Programming</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Ai Technology $ Its Applications">Ai Technology $ Its Applications</option>
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-primary btn-lg">Apply Now</button>
                </form>
            </div>
        </div>
    </div>

    <br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
@endsection
