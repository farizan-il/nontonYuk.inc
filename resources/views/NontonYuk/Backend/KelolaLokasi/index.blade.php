@extends('nontonyuk.layouts.backend.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>Tabel Kelola Lokasi</h4>
                                <div class="card-header-form">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Task Name</th>
                                            <th>Progress</th>
                                            <th>Members</th>
                                            <th>Due Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Create a mobile app</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="100%">
                                                    <div class="progress-bar bg-success" data-width="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="assets/img/avatar/avatar-5.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Wildan Ahdian">
                                            </td>
                                            <td>2018-01-20</td>
                                            <td>
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-2">
                                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Redesign homepage</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="0%">
                                                    <div class="progress-bar" data-width="0"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="assets/img/avatar/avatar-1.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Nur Alpiana">
                                                <img alt="image" src="assets/img/avatar/avatar-3.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Hariono Yusup">
                                                <img alt="image" src="assets/img/avatar/avatar-4.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Bagus Dwi Cahya">
                                            </td>
                                            <td>2018-04-10</td>
                                            <td>
                                                <div class="badge badge-info">Todo</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-3">
                                                    <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Backup database</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="70%">
                                                    <div class="progress-bar bg-warning" data-width="70"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="assets/img/avatar/avatar-1.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Rizal Fakhri">
                                                <img alt="image" src="assets/img/avatar/avatar-2.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Hasan Basri">
                                            </td>
                                            <td>2018-01-29</td>
                                            <td>
                                                <div class="badge badge-warning">In Progress</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-4">
                                                    <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Input data</td>
                                            <td class="align-middle">
                                                <div class="progress" data-height="4" data-toggle="tooltip"
                                                    title="100%">
                                                    <div class="progress-bar bg-success" data-width="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <img alt="image" src="assets/img/avatar/avatar-2.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Rizal Fakhri">
                                                <img alt="image" src="assets/img/avatar/avatar-5.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Isnap Kiswandi">
                                                <img alt="image" src="assets/img/avatar/avatar-4.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Yudi Nawawi">
                                                <img alt="image" src="assets/img/avatar/avatar-1.png"
                                                    class="rounded-circle" width="35" data-toggle="tooltip"
                                                    title="Khaerul Anwar">
                                            </td>
                                            <td>2018-01-16</td>
                                            <td>
                                                <div class="badge badge-success">Completed</div>
                                            </td>
                                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
