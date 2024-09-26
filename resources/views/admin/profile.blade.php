@extends('admin/admin_master');
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-6 mx-auto">

                <!-- Simple card -->
                <div class="card">
                    <center>
                        <img class="rounded-circle avatar-xl mt-3"
                            src="{{asset('backend/assets/images/small/img-1.jpg')}}" alt="Card image cap">
                    </center>
                    <div class="card-body">
                        <h4 class="card-title">Name : {{$userData->name}}</h4>
                        <hr>
                        <h4 class="card-title">UserName : {{$userData->username}}</h4>
                        <hr>
                        <h4 class="card-title">Email : {{$userData->email}}</h4>
                        <hr>
                        <a href="{{'admin.profile_edit'}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>

            </div><!-- end col -->
        </div>
    </div>
</div>
@endsection