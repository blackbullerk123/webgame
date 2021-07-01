@extends('layout_index.master')
@section('content')
<div class="container">
    <div class="row vertical-gap">
        <div class="col-lg-9">
            <div class="nk-gap"></div>
            <h3 class="text-main-1">Change password</h3>
            <div class="nk-gap"></div>
            @if (session('information'))
                <div class="alert alert-success">{{ session('information') }}</div>
            @endif
            <div class="card-body text-center">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <p class="col-md-5 col-form-label">New password:</p>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="Password . . . . ." name="new_password" maxlength="50">
                            @error('name')
                                <p style="color: red"> {{ $message }} </p>
                            @enderror 
                        </div>
                    </div>                             
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection