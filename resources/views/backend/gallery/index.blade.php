@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="card">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <table id="example"
                                        class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th data-ordering="false">SR No.</th>
                                                <th data-ordering="false">Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gallery as $list)
                                                <tr>
                                                    <td>{{ $loop->index + 1 }}</td>
                                                    <td>
                                                        @if ($list->image)
                                                            <img src="{{ asset($list->image) }}" alt="Participant Image"
                                                                style="max-width:200px; max-height: 80px;">
                                                        @else
                                                            No Image Available
                                                        @endif
                                                    </td>>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn"
                                                                        href="{{ route('gallery-delete', $list->uuid) }}">
                                                                        <i
                                                                            class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                        Delete
                                                                    </a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <form action="{{ route('gallery-store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-4">
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <img id="showImage" class="rounded avatar-lg"
                                                            src="{{ url('upload/no_image.jpg') }}" alt="IMAGE"
                                                            style="width:300px; border: 1px solid #000000;height:350px;">
                                                        <hr>
                                                        <input name="image" class="form-control" type="file"
                                                            id="image">
                                                        @error('image')
                                                            <span class="badge bg-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
                                </form>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- ene card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
