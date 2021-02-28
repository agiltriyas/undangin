@extends('layout.web',['title' => 'Members'])

@section('breadcrumb')
<li class="breadcrumb-item"><a href="">members</a></li>
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
                                        <button class="btn btn-sm btn-secondary"><i class="fas fa-plus"></i></button>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($admin as $adm)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $adm->name }}</td>
                                            <td>{{ $adm->email }}</td>
                                            <td>Active</td>
                                            <td>Admin Transaction</td>
                                            <td>Suspend</td>
                                        </tr>
                                        @empty
                                            
                                        @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Transaction</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>28/03/1991</td>
                                            <td>Supri</td>
                                            <td>supri@gmail.com</td>
                                            <td>Active</td>
                                            <td>V</td>
                                            <td>Suspend</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
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
