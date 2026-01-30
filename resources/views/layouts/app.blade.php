<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center mb-4">Hospital</h4>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('profile') }}">Patients</a>
        <a href="#">Doctors</a>
        <a href="#">Appointments</a>
        <a href="{{ route('profile') }}">Profile</a>
    </div>

    <!-- Main Content -->
    <div class="content w-100">
        <!-- Topbar -->
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5>@yield('title')</h5>
            <div class="profile">
                <img src="{{ asset('assets/avatar.png') }}">
                <span>Admin</span>
            </div>
        </div>

        <div class="p-4">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
