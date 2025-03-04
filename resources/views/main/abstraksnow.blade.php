@extends("main.layouts.main")
@section("content")
    <div class="container profil">
    <img src="\svg\profile.svg" class="rounded mx-auto d-block mt-5" alt="...">
    </div>
    <div class="container badan">
        <div class="Team-name">
            <p>Nama Tim</p>
        </div>
        <div class="Team-from">
            <p>Asal Tim</p>
        </div>
        <div class="Team-No">
            <p>Tim No</p>
        </div>
        <a class="d-grid btn btn-primary gap-3 col-3 mx-auto kartu" href="https://nekocalc.com/px-to-rem-converter" target="blank"  role="button">Lihat Kartu Peserta</a> 
        <div class="container abstrak-sub mx-auto">
            <div class="row">
              <div class="col abs-text">
                <p>ABSTRAK</p>
                
              </div>
              <div class="col order-1 formside">
                  <div class="bb">
                    <div class="form">
                  <input type="file" class="form-control custom-file-input" id="input file">
                </div>
                </div>
                <a href="http://www.google.com">Edit</a>
                <a href="http://www.google.com" class="kunci">Kunci Abstrak</a>
                <div class="mb-3 submit-btn">
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </div>
    </div>
 @endsection
