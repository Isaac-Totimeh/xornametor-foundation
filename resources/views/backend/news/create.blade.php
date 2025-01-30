@extends('backend.layouts.master')
@section('title')
   Foundation 
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                <form action="{{ route('project-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="col-md-4">
                                        <div>
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="description" name="description">
                                            @error('description')
                                                <span class="badge bg-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <label for="title" class="form-label">title</label>
                                            <input type="text" class="form-control" id="title" name="title">
                                            @error('title')
                                                <span class="badge bg-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <label for="date" class="form-label">Donated Date</label>
                                            <input type="date" class="form-control" id="date" name="date">
                                            @error('date')
                                                <span class="badge bg-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <p class="text-muted">Upload Content Here With Images Here</p>
                                    <textarea class="form-control" name="content" id="summernote"></textarea>

                
                                    <div class="col-md-6">
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
                            </div><!-- end card -->
                            
                        </div>
                       
                    </div>
                    <button type="submit" class="pl-4 pr-4 mt-4 btn btn-primary">Save</button>
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
