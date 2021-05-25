@extends('admin.layout.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="sl-pagebody">
    <div class="row row-sm">
        <div class="col-sm-6 col-xl-3">
            <div class="card pd-20">
                <h4 class="card-title text-center mt-5">Edit Profile</h4>
                <div class="card-body">
                    <form action="{{ route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">@csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" name="name" id="username" class="form-control" value="{{ $editData->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $editData->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Profile Photo</label>
                            <input type="file" id="image" class="form-control" value="{{ $editData->profile_photo_path }}" name="profile_photo_path">
                        </div>
                        <div class="mb-3">
                            <img id="showImage" src="{{ (!empty($editData->profile_photo_path)) ? url('upload/admin_images/'.$editData->profile_photo_path) : url('upload/no_image.jpg') }}" width="100px" height="100px">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    });
</script>
@endsection
