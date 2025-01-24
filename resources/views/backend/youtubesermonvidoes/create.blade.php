@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Sermon Vidoe Links</h4>
                </div>
                <form action="{{ route('sermon-vidoe-link-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="sermon_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="sermon_title" name="sermon_title">
                                        @error('sermon_title')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="sermon_vidoe_link" class="form-label">Link</label>
                                        <input type="text" class="form-control" id="sermon_vidoe_link"
                                            name="sermon_vidoe_link">
                                        @error('sermon_vidoe_link')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="sermon_date" class="form-label">Sermon Date</label>
                                        <input type="date" class="form-control" id="sermon_date" name="sermon_date">
                                        @error('sermon_date')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Vidoe Link</button>
                </form>
            </div>
        </div>
    </div>
@endsection
