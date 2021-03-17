@extends('layout.web',['title' => 'Members'])

@section('breadcrumb')
<li class="breadcrumb-item"><a >Members</a></li>
@endsection

@section('content-web')
<div class="row">
    <div class="col-12 col-sm-12">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                            href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                            aria-selected="true">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                            href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                            aria-selected="false">Users</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    {{-- admin --}}
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                        aria-labelledby="custom-tabs-four-home-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Admin</h3>

                                <div class="card-tools">
                                    <ul class="pagination pagination-sm float-right">
                                        <a href="{{ route('member.create') }}" class="btn btn-sm btn-secondary"><i class="fas fa-plus"></i></a>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($admin as $adm)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $adm->name }}</td>
                                            <td>{{ $adm->email }}</td>
                                            @if($adm->is_active==1)
                                            <td><a href="{{ route('active',['user',$adm->id]) }}" class="btn badge bg-info">Active</a></td>
                                            @else
                                            <td><a href="{{ route('active',['user',$adm->id]) }}" class="btn badge bg-warning">inActive</a></td>
                                            @endif
                                            <td>Admin</td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">Data not found</td>
                                            </tr>
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  {{ $admin->links('pagination::simple-bootstrap-4') }}
                                </ul>
                              </div>
                        </div>
                    </div>
                    {{-- user --}}
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                        aria-labelledby="custom-tabs-four-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">List Users</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Date Created</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Transaction</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            @if($user->email_verified_at)
                                            <td>Active</td>
                                            @else
                                            <td>InActive</td>
                                            @endif
                                            <td><span class="badge bg-success">Done</span></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data not found</td>
                                        </tr>                                             
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  {{ $users->links('pagination::simple-bootstrap-4') }}
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    @endsection

