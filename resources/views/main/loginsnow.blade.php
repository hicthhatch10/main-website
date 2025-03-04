@extends("main.layouts.main")
@section("content")
    <section id="loginForm">
        <div class="container d-flex justify-content-center flex-column py-5">
          <div class="row align-items-center">
            <div class="col-md-4 px-6">
              <img src="/img/logosnow.png" class="login-logo d-block mx-auto" alt="">
              <img src="/svg/logosnow.svg" class="login-epw-2022 d-block mx-auto" alt="">
            </div>
            <div class="col-md-7 px-6"> 
              <form action="/login" method="POST" class="login-form mx-auto me-2 px-4 mt-5 mt-md-0">
                <div class="mb-4">
                  <label for="username" class="form-label">Username</label>
                  <input class="form-control" type="text" id="username" name="username" placeholder="Username" autofocus tabindex="1" autocomplete="on">
                </div>
                <div class="mb-4">
                  <label for="password" class="form-label">Password</label>
                  <input class="form-control" type="password" id="password" name="password" placeholder="Password" tabindex="2">
                </div>
                <button type="submit" class="btn login-button w-100" tabindex="3">Log In</button>
                <p class="login-register text-center mt-3" tabindex="4">Belum mendaftar? <a href="/daftar">Daftar sekarang!</a></p>
              </form>
            </div>
          </div>
        </div>
      </section>
      @endsection