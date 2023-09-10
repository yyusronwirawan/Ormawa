@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="card-title d-md-flex flex-row justify-content-between">
                        <div>
                            <h6 class="mt-2 text-uppercase">Form {{ $page_attr['title'] }}</h6>
                        </div>
                        <div id="status_form">
                            Status: <span class="badge bg-{{ $data->status_bg }}">{{ $data->status_str }}</span>
                        </div>
                    </div>
                    <hr class="mt-1 mb-0" />
                    <form action="javascript:void(0)" id="MainForm" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="sebagai">Sebagai
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="sebagai" name="sebagai"
                                        placeholder="Contoh: Pendiri Karmapack" required=""
                                        value="{{ $data->sebagai }}" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="profesi">Profesi
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="profesi" name="profesi"
                                        placeholder="Contoh: Bupati Cianjur 2019-2024" required=""
                                        value="{{ $data->profesi }}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="deskripsi">Deskripsi
                                <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Deskripsi"
                                required>{{ $data->deskripsi }}</textarea>
                        </div>
                    </form>
                    <div class="flex-row justify-content-between mt-3">
                        <button type="submit" class="btn btn-primary" id="btn-save" form="MainForm">
                            <li class="fas fa-save mr-1"></li> Simpan
                        </button>
                        <button class="btn btn-danger" id="btn-reset"
                            style="{{ is_null($data->status) ? 'display:none' : '' }}">
                            <i class="fas fa-trash"></i>
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="{{ asset_admin('plugins/loading/loadingoverlay.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>
    @php
        $resource = resource_loader(
            blade_path: $view,
            params: [
                'page_title' => $page_attr['title'],
            ],
        );
    @endphp
    <script src="{{ $resource }}"></script>
@endsection
