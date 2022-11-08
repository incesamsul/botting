@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Undangan</h4>
                    <div class="table-tools d-flex justify-content-around ">
                        <input type="text" class="form-control card-form-header mr-3" placeholder="Cari Data Pengguna ..." id="searchbox">
                        <select class="custom-select form-control mr-3" id="filter-data-pengguna">
                            <option value="" selected>Filter</option>
                            <option value=""></option>
                        </select>
                        <button type="button" class="btn btn-dark float-right" data-toggle="modal" id="addUserBtn" data-target="#modalPengguna"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                        <thead>
                            <tr>
                                <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID <span id="id_icon"></span></th>
                                <td>Pengguna</td>
                                <td>Domain</td>
                                <td>aksi</td>
                                {{-- <td></td> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($undangan as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->user->name }}</td>
                                    <td>{{ $row->domain }}</td>
                                    <td>
                                        <a class="btn bg-main text-white" href="{{ URL::to($row->domain) }}">Lihat</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
{{-- MODAL TAMBAH PENGGUNA --}}
<div class="modal fade" id="modalPengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- MODAL BODY UNTUK MEMBATALKAN PENGAITAN DATA --}}
            <div class="modal-body" id="batal-kaitkan-body">
                <div id="response-linked-data" data-asset_url="{{ asset('img/svg_animated/loading.svg') }}">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="{{ asset('img/svg_animated/loading.svg') }}" alt="" width="100" class="loading">
                        </div>
                    </div>
                </div>
            </div>
            {{--MODAL BODY UNTUK MENCARI DATA YANG INGIN DI KAITKAN DENGAN USER --}}
            <div class="modal-body" id="kaitkan-body">
                <input type="hidden" id="id_user">
                <input type="text" autocomplete="off" class="form-control" placeholder="Cari Data ..." id="cari-data">
                <div id="response-data" data-asset_url="{{ asset('img/svg_animated/loading.svg') }}">
                </div>
            </div>
            {{-- MODAL BODY UNTUK TAMBAH USER DAN EDIT USER --}}
            <div class="modal-body" id="main-body">
                {{-- @if (session('message'))
                {{ sweetAlert(session('message'), 'success') }}
                @endif --}}
                <form id="formPengguna" action="{{ URL::to('/admin/create_pengguna') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" class="form-control" name="id" id="id">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="tipe_pengguna" id="tipe-pengguna">
                            <option>user</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark" id="modalBtn">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {

    });

    $('#liUndangan').addClass('active');

</script>
@endsection
