@extends('frontend.index')

@section('frontend')
    <!-- ======= Notice Section ======= -->
    <section id="about-us" class="about-us" style="margin-top: 100px;">
        <div class="container" data-aos="fade-up">
            <div class="section-title" data-aos="fade-up">
                <h2>Notice Board</h2>
            </div>
            @if ($notices->count())
                <div class="row content">
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
                                        <td>
                                            <img src="{{ $item->image ? asset($item->image) : asset('frontend/assets/img/no-image.png') }}"
                                                alt="" style="height: 50px; width: 50px;">
                                        </td>

                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::substr($item->description, 0, 50) . '...' }}</td>
                                        <td>
                                            <a href="{{ route('webNoticeView', ['id' => $item->id]) }}"
                                                class="btn btn-outline-success btn-sm"> View </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="row content">
                    <h6 class="text-center">No Notice Available</h6>
                </div>
            @endif
        </div>
    </section><!-- End Notice Section -->
@endsection
