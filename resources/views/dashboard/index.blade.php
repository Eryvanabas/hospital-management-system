@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card card-box">
            <h6>Patients</h6>
            <h3>120</h3>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-box">
            <h6>Doctors</h6>
            <h3>15</h3>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">Recent Appointments</div>
    <table class="table mb-0">
        <tr>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Date</th>
        </tr>
    </table>
</div>
@endsection
