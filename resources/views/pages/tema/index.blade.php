@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Data Tema</h4>
                </div>
                <div class="card-body">
                    <form action="{{ URL::to('/create_tema') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_tema">Nama tema</label>
                            <input type="text" class="form-control" name="nama_tema" id="nama_tema">
                        </div>
                        <div class="form-group">
                            <label for="thumbnail_tema">Thumbnail tema</label>
                            <input type="file" class="form-control" name="thumbnail_tema" id="thumbnail_tema">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-main text-white">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
<script>

</script>

@endsection
