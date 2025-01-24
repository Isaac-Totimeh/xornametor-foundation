@extends('backend.layouts.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Events </h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->
                <form action="{{ route('events-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-xxl-12 col-md-6">
                                    <div>
                                        <label for="body" class="form-label">News</label>
                                        <textarea class="form-control" id="body" name="body" rows="8"></textarea>
                                        @error('body')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="venue" class="form-label">Venue</label>
                                        <input type="text" class="form-control" id="venue" name="venue">
                                        @error('venue')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="event_date" class="form-label">Event Date</label>
                                        <input type="date" class="form-control" id="event_date" name="event_date">
                                        @error('event_date')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div>
                                        <label for="event_date" class="form-label">Event Time</label>
                                        <input type="time" class="form-control" id="event_time" name="event_time">
                                        @error('event_date')
                                            <span class="badge bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div>
                                        <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                            alt="IMAGE" style="width: 200px; border: 1px solid #000000;height:250px;">
                                        <hr>
                                        <input name="image" class="form-control" type="file" id="image">
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
        <!--end col-->
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
