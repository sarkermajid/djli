@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Daily Market</h4>
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
                                <td class="payment-title"><strong>Branch Name :</strong></td>
                                <td class="text-style">{{ $branch->branch_name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Director Name :</strong></td>
                                <td class="text-style">{{ $branch->director_name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Address :</strong></td>
                                <td class="text-style">{{ $branch->address }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Phone :</strong></td>
                                <td class="text-style">{{ $branch->phone }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Email :</strong></td>
                                <td class="text-style">{{ $branch->email }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Image :</strong></td>
                                <td class="text-style"><img src="{{ asset($branch->image) }}" alt="" style="height: 100px; width:100px;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
