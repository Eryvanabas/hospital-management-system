@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="profile-page text-center">
    <img src="{{ asset('assets/avatar.png') }}" class="profile-img">
    <h3 class="mt-3">Admin User</h3>
    <p>Hospital Administrator</p>
    <button class="btn btn-primary">Edit Profile</button>
</div>
@endsection
