@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('notice.add') }}" class="btn btn-inverse-primary">Add Notice</a>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">All Notices</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notices as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img src="{{ asset($item->image) }}" alt=""
                                                    style="height: 50px; width:50px;"></td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ Str::substr($item->description, 0, 30) . '...' }}</td>
                                            <td>
                                                <a href="{{ route('notice.view', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-info"> View </a>
                                                <a href="{{ route('notice.edit', ['id' => $item->id]) }}"
                                                    class="btn btn-inverse-primary"> Edit </a>
                                                <a href="{{ route('notice.delete', ['id' => $item->id]) }}" id="delete"
                                                    class="btn btn-inverse-danger"> Delete </a>
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
