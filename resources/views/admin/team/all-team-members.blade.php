@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('team.member.add') }}" class="btn btn-inverse-primary">Add Member</a>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Team Members</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teamMembers as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->designation }}</td>
                                            <td><img src="{{ asset($item->image) }}" alt=""
                                                    style="height: 50px; width:50px;"></td>
                                            <td>
                                                <a href="{{ route('team.member.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-primary"> Edit </a>
                                                <a href="{{ route('team.member.delete', ['id' => $item->id]) }}"
                                                    id="delete" class="btn btn-inverse-danger"> Delete </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
