@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            @endif
        </div>
        <div class="row report-row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="formBox">
                    <form action="/report" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Full name</label>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone"id="floatingMobile" placeholder="Password">
                            <label for="floatingMobile">Phone</label>
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="address"placeholder="Leave a comment here" id="floatingAddress" style="height: 100px"></textarea>
                            <label for="floatingAddress">Address</label>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-floating mb-3">
                            <textarea class="form-control" name="detail" placeholder="Leave a comment here" id="floatingCrime" style="height: 100px"></textarea>
                            <label for="floatingCrime">Detail of case</label>
                            @error('detail')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group mb-3">
                              <input type="file" name="image" class="form-control" id="">
                              @error('image')
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
                    <img src="{{asset('images/domestic violence awareness.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection