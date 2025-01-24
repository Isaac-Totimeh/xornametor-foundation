@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Appointment</h4>

                </div><!-- end card header -->
                <div class="card-body">
                    <form action="{{ route('appointment-store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">Appointment Name</label>
                                <input type="text" class="form-control" id="name" name="appointment_name"
                                    placeholder="Enter Appointment">
                                @error('appointment_name')
                                    <span
                                        class="badge bg-danger
                                        ">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Appointment</button>
                    </form>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection
