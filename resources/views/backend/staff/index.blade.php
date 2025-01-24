@extends('backend.layouts.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Staffs Datatables</h5>
                    <a href="{{ route('staff-add') }}" type="button" class="btn btn-primary waves-effect waves-light"
                        style="float: right;">Add Participant</a>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Rank</th>
                                <th data-ordering="false">Name</th>
                                <th data-ordering="false">About</th>
                                <th data-ordering="false">Appointment</th>
                                <th data-ordering="false">Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staff as $list)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $list->rank_name ?? '' }}</td>
                                    <td>{{ $list->staff_name ?? '' }}</td>
                                    <td>{{ $list->about ?? '' }}</td>
                                    <td>{{ $list->appointment_name ?? '' }}</td>
                                    <td>
                                        @if ($list->image)
                                            <img src="{{ asset($list->image ?? '') }}" alt="Participant Image"
                                                style="max-width:200px; max-height: 80px;">
                                        @else
                                            No Image Available
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('staff-edit', $list->uuid) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('staff-delete', $list->uuid) }}">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
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
        </div><!--end col-->
    </div><!--end row-->
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
