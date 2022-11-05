@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Daftar tamu</h4>
                        <button id="btn-tambah" data-toggle="modal" data-target="#tamu" class="btn bg-main text-white"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-user table-action-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>Kode undangan</th>
                                    <th>Nama tamu</th>
                                    <th>No hp (wa)</th>
                                    <th>Aksi</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tamu as $row)
                                <?php
                                $message = "*Assalamualaikum Warahmatullah Wabarakatuh* %0a";
                                $message .= "Bismillahirahmanirrahim.%0a%0a";
                                $message .= "Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah. (*Q.S. Adz-Dzariyat: 49*)%0a%0a";
                                $message .= "Undangan ini merupakan undangan resmi dari kami,Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i *" . $row->nama_tamu . "* untuk menghadiri acara kami.%0a";
                                $message .= "Berikut link untuk info lengkap dari acara kami :%0a%0a";
                                $message .= URL::to($domain->domain . '/' . $row->kode_undangan) ." %0a%0a";
                                $message .= "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.Jangan lupa isi Ucapan dan Konfirmasi kehadiran di Wedding Wish dan RSVP ya, Terima Kasih.. %0a%0a ";
                                $message .= "*Wassalamualaikum Warahmatullah Wabarakatuh*%0a%0a";
                                $message .= "Hormat kami,%0a Kedua Mempelai%0a%0a";
                                $message .= "(Salin link dan buka di browser bila link tidak dapat dibuka, usahakan mematikan fitur dark mode dalam browser untuk hasil yang maksimal)";
                                ?>
                                    <tr>
                                        <td>{{ $row->kode_undangan }}</td>
                                        <td>{{ $row->nama_tamu }}</td>
                                        <td> +{{ convertNoHp($row->no_hp) }}</td>
                                        <td>
                                            <a target="_blank" href="https://web.whatsapp.com/send?phone={{ convertNoHp($row->no_hp) }}&text={{ $message }}" class="btn btn-success text-white">
                                                <i class="fab fa-whatsapp"></i>
                                                     Kirim undangan
                                            </a>
                                        </td>
                                        <td class="option">
                                            <div class="btn-group dropleft btn-option">
                                                <i type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </i>
                                                <div class="dropdown-menu">
                                                    <a data-edit='@json($row)' data-toggle="modal" data-target="#tamu" class="dropdown-item edit" href="#"><i class="fas fa-pen"> Edit</i></a>
                                                    <a data-id="{{ $row->id_tamu }}" class="dropdown-item hapus" href="#"><i class="fas fa-trash"> Hapus</i></a>
                                                </div>
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
    </section>


  <!-- Modal -->
  <div class="modal fade" id="tamu" tabindex="-1" aria-labelledby="tamuLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tamuLabel">Tamu udangan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="formTamu" action="{{ URL::to('/pelanggan/create_daftar_tamu') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode_undangan">kode undangan</label>
                    <input type="hidden" name="id" id="id">
                    <input readonly type="text" class="form-control" name="kode_undangan" id="kode_undangan" value="{{ 'UND-'.strtoupper(substr(uniqid(), 0, 8)); }}">
                </div>
                <div class="form-group">
                    <label for="nama_tamu">Nama tamu</label>
                    <input required type="text" class="form-control" name="nama_tamu" id="nama_tamu" >
                </div>
                <div class="form-group">
                    <label for="no_hp">Nomor hp ( wa )</label>
                    <input required type="text" class="form-control" name="no_hp" id="no_hp" >
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
          <button type="submit" class="btn bg-main text-white">Simpan</button>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    <script>

        $(document).on('click','table tr td a.edit',function(){
            let edit = $(this).data('edit');
            $('#id').val(edit.id_tamu);
            $('#kode_undangan').val(edit.kode_undangan);
            $('#nama_tamu').val(edit.nama_tamu);
            $('#no_hp').val(edit.no_hp);
            $('#formTamu').attr('action','/pelanggan/update_daftar_tamu');
        })

        $('#btn-tambah').on('click',function(){
            $('#formTamu').attr('action','/pelanggan/create_daftar_tamu');
        })

        // TOMBOL HAPUS USER
        $(document).on('click', 'tr td a.hapus', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: 'Apakah yakin?'
                , text: "Data tidak bisa kembali lagi!"
                , type: 'warning'
                , showCancelButton: true
                , confirmButtonColor: '#3085d6'
                , cancelButtonColor: '#d33'
                , confirmButtonText: 'Ya, Konfirmasi'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                        , url: '/pelanggan/delete_daftar_tamu'
                        , method: 'post'
                        , dataType: 'json'
                        , data: {
                            id: id
                        }
                        , success: function(data) {
                            if (data == 1) {
                                Swal.fire('Berhasil', 'Data telah terhapus', 'success').then((result) => {
                                    location.reload();
                                });
                            }
                        }
                    })
                }
            })
        });

        $('#liDaftarTamu').addClass('active');
    </script>
@endsection
