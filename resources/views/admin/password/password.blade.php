@extends('admin.layout.admin_master')
@section('content')
<div class="sl-pagebody">
    <div class="row row-sm">
        <div class="col-sm-8 col-xl-4">
            <div class="card pd-20">
                <h4 class="card-title text-center mt-5">Edit Profile</h4>
                <div class="card-body">
                    <form action="{{ route('admin.password.update')}}" method="POST">@csrf
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input type="password" name="old_password" id="current_password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
