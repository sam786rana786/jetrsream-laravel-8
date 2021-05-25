@extends('user.layout.user_master')
@section('content')
<div class="middle_content_wrapper">
    <!-- counter_area -->
    <section class="counter_area">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <h4 class="card-title text-center mt-5">Edit Password</h4>
                    <div class="card-body">
                        <form action="{{ route('password.update')}}" method="POST">@csrf
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
    </section>
</div>
@endsection
