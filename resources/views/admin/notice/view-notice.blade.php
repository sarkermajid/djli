@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Notice View</h4>
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
                                <td class="payment-title"><strong>Image :</strong></td>
                                <td>
                                    <img src="{{ asset($notice->image) }}" alt="User Image"
                                        style="height: 100px; width:100px;">
                                </td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Title</strong></td>
                                <td class="text-style">{{ $notice->title }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Description :</strong></td>
                                <td class="text-style">
                                    <textarea readonly class="form-control" cols="100" rows="10">{{ $notice->description }}</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
