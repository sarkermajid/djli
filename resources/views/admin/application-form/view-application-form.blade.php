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
                    <a href="{{ route('export.application.form') }}" class="btn btn-inverse-success mt-3 mb-3">Export to Excel</a>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Picture :</strong></td>
                                <td>
                                    <img src="{{ asset($applicationForm->image) }}" alt="User Image" style="height: 100px; width:100px;">
                                    <br>
                                    <a href="{{ asset($applicationForm->image) }}" download class="btn btn-inverse-warning" style="display: inline-block; margin-top: 10px;">
                                        Download Image
                                    </a>
                                </td>
                            </tr>
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
                            <tr>
                                <td class="payment-title"><strong>Primary Information :</strong></td>
                                <td class="text-style"><strong>School Name:</strong> {{ $applicationForm->p_sch_name ?? ''}}</td>
                                <td class="text-style"><strong>Date of Graduation:</strong> {{ $applicationForm->p_sch_graduation ?? '' }}</td>
                                <td class="text-style"><strong>Location:</strong> {{ $applicationForm->p_location ?? ''}}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>SSC Information :</strong></td>
                                <td class="text-style"><strong>School Name:</strong> {{ $applicationForm->ssc_name ?? ''}}</td>
                                <td class="text-style"><strong>Date of Graduation:</strong> {{ $applicationForm->ssc_date_exp ?? ''}}</td>
                                <td class="text-style"><strong>Location:</strong> {{ $applicationForm->ssc_location ?? ''}}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>HSC Information :</strong></td>
                                <td class="text-style"><strong>School Name:</strong> {{ $applicationForm->hsc_name ?? ''}}</td>
                                <td class="text-style"><strong>Date of Graduation:</strong> {{ $applicationForm->hsc_date_exp ?? ''}}</td>
                                <td class="text-style"><strong>Location:</strong> {{ $applicationForm->hsc_location ?? ''}}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Bachelor Information :</strong></td>
                                <td class="text-style"><strong>University Name:</strong> {{ $applicationForm->bsc_name ?? '' }}</td>
                                <td class="text-style"><strong>Date of Graduation:</strong> {{ $applicationForm->bsc_date_exp ?? ''}}</td>
                                <td class="text-style"><strong>Location:</strong> {{ $applicationForm->bsc_location ?? '' }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Masters Information :</strong></td>
                                <td class="text-style"><strong>University Name:</strong> {{ $applicationForm->msc_name ?? ''}}</td>
                                <td class="text-style"><strong>Date of Graduation:</strong> {{ $applicationForm->msc_date_exp ?? '' }}</td>
                                <td class="text-style"><strong>Location:</strong> {{ $applicationForm->msc_location ?? '' }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Apply Before :</strong></td>
                                <td class="text-style">{{ $applicationForm->apply_before ?? ''}}</td>
                            </tr>
                            <!-- Japanese Language Ability -->
                            <tr>
                                <td colspan="3"><h3 style="font-weight: bold; text-align: left; margin-top: 10px;">Japanese Language Ability</h3></td>
                            </tr>
                            @foreach ($japaneseExams as $japaneseExam)
                            <tr>
                                <td class="text-style"><strong>Exam Name:</strong> {{ $japaneseExam->exam_name ?? '' }}</td>
                                <td class="text-style"><strong>Exam Year:</strong> {{ $japaneseExam->exam_year ?? '' }}</td>
                                <td class="text-style"><strong>Result:</strong> {{ $japaneseExam->result ?? '' }}</td>
                            </tr>
                            @endforeach
                            <!-- Family Informations -->
                            <tr>
                                <td colspan="3"><h3 style="font-weight: bold; text-align: left; margin-top: 10px;">Family Informations</h3></td>
                            </tr>
                            @foreach ($familyMembers as $familyMember)
                            <tr>
                                <td class="text-style"><strong>Name:</strong> {{ $familyMember->name ?? '' }}</td>
                                <td class="text-style"><strong>Relationship:</strong> {{ $familyMember->relationship ?? '' }}</td>
                                <td class="text-style"><strong>Date of Birth:</strong> {{ $familyMember->dob ?? '' }}</td>
                                <td class="text-style"><strong>Occumation:</strong> {{ $familyMember->occupation ?? '' }}</td>
                            </tr>
                            @endforeach
                            <!-- Family Informations -->
                            <tr>
                                <td colspan="3"><h3 style="font-weight: bold; text-align: left; margin-top: 10px;">Financial Supporter</h3></td>
                            </tr>
                            <tr>
                                <td class="text-style"><strong>Name:</strong> {{ $applicationForm->s_name ?? '' }}</td>
                                <td class="text-style"><strong>Phone:</strong> {{ $applicationForm->s_phone ?? '' }}</td>
                                <td class="text-style"><strong>Address:</strong> {{ $applicationForm->s_address ?? '' }}</td>
                                <td class="text-style"><strong>Company Name:</strong> {{ $applicationForm->company_name ?? '' }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Document:</strong></td>
                                <td colspan="2">
                                    <object data="{{ asset($applicationForm->document) }}" type="application/pdf" width="100%" height="500px">
                                        <p>Your browser does not support PDFs. <a href="{{ asset($applicationForm->document) }}" target="_blank">Download it here</a>.</p>
                                    </object>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
