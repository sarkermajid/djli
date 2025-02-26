@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Application Form</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-5">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>As Per :</strong></td>
                                <td class="text-style">{{ $applicationForm->as_per }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Name :</strong></td>
                                <td class="text-style">{{ $applicationForm->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Email :</strong></td>
                                <td class="text-style">{{ $applicationForm->email }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Phone :</strong></td>
                                <td class="text-style">{{ $applicationForm->phone }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Date of Birth :</strong></td>
                                <td class="text-style">{{ $applicationForm->dob }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Present Address :</strong></td>
                                <td class="text-style">{{ $applicationForm->present_address }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Permanent Address :</strong></td>
                                <td class="text-style">{{ $applicationForm->permanent_address }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Union Porishad Name :</strong></td>
                                <td class="text-style">{{ $applicationForm->upn }}</td>
                            </tr>
                            @if(empty($applicationForm->date_issue) && empty($applicationForm->date_expiration))
                            <tr>
                                <td class="payment-title"><strong>Passport :</strong></td>
                                <td class="text-style">No</td>
                            </tr>
                            @else
                            <tr>
                                <td class="payment-title"><strong>Passport :</strong></td>
                                <td class="text-style">Yes</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Date of Issue :</strong></td>
                                <td class="text-style">{{ $applicationForm->date_issue }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Date of Expiration :</strong></td>
                                <td class="text-style">{{ $applicationForm->date_expiration }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
