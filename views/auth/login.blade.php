@extends('auth.layout')
@section('title', 'Login')

@section('content')

<!-- Section -->
 <section class="vh-100">

    <!-- Container -->
    <div class="container h-100">

      <!-- Row -->
      <div class="row d-flex justify-content-center align-items-center h-100">

        <!-- Col -->
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

          <!-- Card -->
          <div class="card" style="border-radius: 1rem;">

            <!-- Card body -->
            <div class="card-body p-5">

              <!-- Login -->
              <h3 class="mb-5 text-center">Login</h3>
              <!-- </Akhir login -->

              <!-- Form -->
              <form method="post" action="">

                <!-- Username -->
                <div class="mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" class="form-control" autocomplete="off" required />
                </div>
                <!-- </Akhir username -->

                <!-- Password -->
                <div class="mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control" required />
                </div>
                <!-- </Akhir password -->

                <!-- Lupa password -->
                <div class="mb-3">
                  <a href="{{url('lupa_password')}}">Lupa Password?</a>
                </div>
                <!-- </Akhir lupa password -->

                <!-- Tombol login -->
                <div class="text-center">
                  <button class="btn btn-primary w-75 text-center rounded-pill" type="submit">Login</button>
                </div>
                <!-- </Akhir tombol login -->

              </form>
              <!-- </Akhir form -->

              <!-- Garis -->
              <hr class="my-4">
              <!-- </Akhir garis -->

              <!-- Belum registrasi -->
              <div class="text-center">
                <a href="{{url('registrasi')}}">Belum Registrasi?</a>
              </div>
              <!-- </Akhir belum registrasi -->

            </div>
            <!-- </Akhir card body -->

          </div>
          <!-- </Akhir card -->

        </div>
        <!-- </Akhir col -->

      </div>
      <!-- </Akhir row -->

    </div>
    <!-- </Akhir container -->

  </section>
  <!-- </Akhir section -->

  @endsection