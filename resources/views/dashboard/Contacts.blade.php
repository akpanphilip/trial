@extends('layouts.admin')
@section('content')


<p class="case-text-title text-center"> CONTACT MESSAGES </p>
<div class="container">
    <div class="row report-row">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Contact Messages</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Phone Number</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>     
                                        @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $cnt;}}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td><a class="btn btn-success" href="tel:{{ $contact->phone }}">CALL NOW</a></td>
                                        </tr>
                                    <?php $cnt++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    </div>
</div>
@endsection