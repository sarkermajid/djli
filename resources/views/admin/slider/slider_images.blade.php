
@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('slider.image.add') }}" class="btn btn-inverse-primary">Add Slider Image</a>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Slider Images</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Sort By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ asset($item->image) }}" alt="" style="height: 50px; width:50px;"></td>
                                        <td>{{ $item->sort_by }}</td>
                                        <td>
                                            <a href="{{ route('slider.image.edit', ['id'=>$item->id]) }}" class="btn btn-inverse-primary"> Edit </a>
                                            <a href="{{ route('slider.image.delete',['id'=>$item->id]) }}" id="delete" class="btn btn-inverse-danger"> Delete </a>
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
