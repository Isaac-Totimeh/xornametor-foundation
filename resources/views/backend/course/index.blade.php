@extends('backend.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Roles Datatables</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th data-ordering="false">SR No.</th>
                                <th data-ordering="false">Courses Number</th>
                                <th data-ordering="false">Year</th>
                                <th data-ordering="false">Instructions</th>
                                <th data-ordering="false">Status</th>
                                <th data-ordering="false">Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->code }}</td>
                                    <td>
                                        @if ($user->status == 0)
                                            <a href="{{ route('user.inactive', $user->id) }}" class="badge bg-danger sm"
                                                title="Inactive" id="InactiveBtn">-Inactive</a>
                                        @elseif ($user->status == 1)
                                            <a href="{{ route('user.active', $user->id) }}" class="badge bg-info sm"
                                                title="Active" id="ActiveBtn">
                                                - Active</a>
                                        @endif
                                    </td>
                                    <td>
                                        @isset($user->roles)
                                            @foreach ($user->roles as $role)
                                                <span class="badge bg-info">
                                                    {{ $role->name }}
                                                </span>
                                            @endforeach
                                        @endisset
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
                                                        href="{{ route('users.create') }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Create</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item edit-item-btn"
                                                        href="{{ route('users.edit', $user->id) }}"><i
                                                            class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                        Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item remove-item-btn"
                                                        href="{{ route('users.destroy', $user->id) }}"
                                                        onclick="event.preventDefault(); confirmDelete('{{ $user->id }}');">
                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                        Delete
                                                    </a>
                                                    <form id="delete-form-{{ $user->id }}"
                                                        action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                    <script>
                                                        function confirmDelete(userId) {
                                                            if (confirm("Are you sure you want to delete this user?")) {
                                                                document.getElementById('delete-form-' + userId).submit();
                                                            }
                                                        }
                                                    </script>
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
@endsection
