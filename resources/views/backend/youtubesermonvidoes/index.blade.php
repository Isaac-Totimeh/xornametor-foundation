@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Sermon Youtube Links</h5>
                    <a href="{{ route('sermon-vidoe-link-add') }}" type="button"
                        class="btn btn-primary waves-effect waves-light" style="float: right;">Sermon Youtube Links</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Title</th>
                                <th data-ordering="false">Link</th>
                                <th data-ordering="false">Sermon Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sermonvidoes as $list)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $list->sermon_title ?? '' }}</td>
                                    <td>{{ $list->sermon_vidoe_link ?? '' }}</td>
                                    <td>
                                        {{ $list->sermon_date ? \Carbon\Carbon::parse($list->sermon_date)->format('jS F Y') : '' }}
                                    </td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('sermon-vidoe-link-delete', $list->uuid) }}">
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
        </div>
    </div>
@endsection
