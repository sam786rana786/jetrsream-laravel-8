@extends('user.layout.user_master')
@section('content')
<div class="middle_content_wrapper">
    <!-- counter_area -->
    <section class="counter_area">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg') }}" class="card-img-top">
                    <div class="card-body ml-5">
                        <h5 class="card-title">User Name: {{ $user->name }}</h5>
                        <p class="card-text">User Email: {{ $user->email }}</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
