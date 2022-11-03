@extends('layouts.main')
@section('main')
<div class="banner">
    <p class="banner-text">
        Returning violence for violence multiplies violence, 
        adding deeper darkness to a night already devoid of stars
    </p>
    
</div>

<p class="case-text-title text-center"> CASES REPORTED </p>
<div class="container">
    <div class="row report-row">
        @foreach ($reports as $report)
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="cases">
                <div class="cases-image">
                    <img src="{{ asset('violenceImage') }}/{{ $report->image }}" alt="">
                </div>
                <div class="case-title">
                    {{ $report->detail }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection