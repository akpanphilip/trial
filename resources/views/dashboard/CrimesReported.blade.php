@extends('layouts.admin')
@section('content')

@if  (session('crimeDeleted'))
    <div class="alert alert-success" role="alert">
        {{ session('crimeDeleted') }}
    </div>
@endif
<p class="case-text-title text-center"> CASES REPORTED </p>
<div class="container">
    <div class="row report-row">
        @foreach ($reports as $report)
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Cases Reported</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Detail</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Detail</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      
                                    
                                        <tr>
                                            <td>{{ $report->name }}</td>
                                            <td><a href="tel:{{ $report->phone }}">{{ $report->phone }}</a></td>
                                            <td>{{ $report->address }}</td>
                                            <td>{{ $report->detail }}</td>
                                            <td class="cases-image"><img src="{{ asset('violenceImage') }}/{{ $report->image }}" alt=""></td>
                                            <td><a href="/delete-crimes/{{ $report->id }}" class="btn btn-danger">DELETE</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
               @endforeach
    </div>
</div>
@endsection