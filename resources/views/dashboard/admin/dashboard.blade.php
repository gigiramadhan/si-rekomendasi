@extends('dashboard.admin.layouts.main')

    @section('breadcrumb')
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    @endsection

    @section('content')
    <div class="row">

        <!-- Left side columns -->
        <div class="col">
          <div class="row">

            <!-- Rumah Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Rumah</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-house-fill"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Rumah Card -->

           <!-- Administrator Card -->
           <div class="col-xxl-4 col-md-3">
            <div class="card info-card sales-card">

              <div class="card-body">
                <h5 class="card-title">Administrator</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-plus-fill"></i>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Administrator Card -->

            <!-- Pengelola Rumah Card -->
            <div class="col-xxl-4 col-md-3">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Pengelola Rumah</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-plus-fill"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Pengelola Rumah Card -->


              <!-- Pengunjung Card -->
            <div class="col-xxl-4 col-md-3">
                <div class="card info-card sales-card">

                  <div class="card-body">
                    <h5 class="card-title">Pengunjung</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-plus-fill"></i>
                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Pengunjung Card -->

        </div><!-- End Left side columns -->
      </div>
    @endsection

