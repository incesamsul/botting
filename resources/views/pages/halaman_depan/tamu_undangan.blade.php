@extends('layouts.front.frontend')

@section('content')
<!-- slider section -->
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6 ">
                <div class="detail-box d-flex align-items-center justify-content-center  flex-column">
                    <h5>Scan qrcode di undanganmu</h5>
                    <div style="width: 80%" id="reader"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="{{ asset('images/wedding.svg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section id="faq" class="d-flex align-items-start pb-5 hidden">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Tamu</h4>
            <p class="text-center text-secondary">Daftar tamu yang hadir</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 p-5">
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <table class="table table-striped" id="table-data">
                            <thead>
                                <tr>
                                    <th>Kode undangan</th>
                                    <th>nama tamu</th>
                                    <th>No hp</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($tamu as $row)
                                  <tr>
                                      <td>{{ $row->kode_undangan }}</td>
                                      <td>{{ $row->nama_tamu }}</td>
                                      <td>{{ $row->no_hp }}</td>
                                  </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

  <!-- end slider section -->
</div>



@endsection

@section('script')
    <script>


        function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
            // console.log(`Scan result: ${decodedText}`, decodedResult);
            console.log(`Scan result: ${decodedText}`, decodedResult);
            document.location.href = '/terima_tamu/' + decodedResult.decodedText;
        }

        function onScanError(errorMessage) {
            // handle on error condition, with error message
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>
@endsection

