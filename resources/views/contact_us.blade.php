@extends('layouts.main')
@section('main')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
        @endif
    </div>
<div class="row report-row container-fluid">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="formBox">
                    <form action="/contact_us" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name" value="{{old('name')}}">
                            <label for="floatingInput">Full name</label>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" id="floatingMobile" placeholder="Phone" value="{{old('phone')}}" >
                            <label for="floatingMobile">Phone</label>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" value="{{old('email')}}" id="floatingAddress">
                            <label for="floatingAddress">Email  Address</label>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" placeholder="drop a message here" value="{{old('message')}}" id="floatingCrime" style="height: 100px"></textarea>
                            <label for="floatingCrime">Message Us</label>
                            @error('message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                              <input type="submit" value="SUBMIT" class="form-control bg-danger text-light font-weight-bold">
                          </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="formImg">
                    <img src="{{asset('images/contactUs.jpg')}}" alt="">
                </div>
            </div>
        </div>

@endsection