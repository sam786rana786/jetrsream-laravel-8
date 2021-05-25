@extends('admin.layout.admin_master')
@section('content')
<div class="sl-pagebody">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20">
                <img src="{{ (!empty($admin->profile_photo_path)) ? url('upload/admin_images/'.$admin->profile_photo_path) : url('upload/no_image.jpg') }}" class="card-img-top">
                <div class="card-body ml-5">
                    <h5 class="card-title">User Name: {{ $admin->name }}</h5>
                    <p class="card-text">User Email: {{ $admin->email }}</p>
                    <a href="{{ route('admin.profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
