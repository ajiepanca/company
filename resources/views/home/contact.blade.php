<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/asset/img/apple.svg" type="image/x-icon" />
    <!-- untuk menampilkan logo diatas website -->

    <title>Apple (Indonesia)</title>

    <link rel="stylesheet" href="/asset/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- frontawoseme temlate dari web untuk font -->
    <link rel="stylesheet" href="/asset/vendor/fontawesome/css/all.min.css" />
    <!-- aos animate -->
    <link rel="stylesheet" href="/asset/vendor/aos/dist/aos.css" />
    <!-- custom css memakai style.css -->
    <link rel="stylesheet" href="/asset/css/style.css" />
  </head>
  <body>
     <!-- navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top py-2">
      <!-- navbar-light bg-white untuk menghilangkan navbar bagian atas menjadi warna putih  -->
      <div class="container">
        <a class="navbar-brand fw-bold" href="#"><i class="fa-brands fa-apple"></i></a>
        <!-- <span class="primary">APP</span>LE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <!-- ms auto untuk membuat about kenanan -->
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="/">Home</a>
              <!-- ditambahkan active untuk dipanggil di css style biar bisa ganti warna -->
            </li>
            <!-- ini untuk dropdown item template dari bootstrap -->
            <li class="nav-item dropdown">
              <a class="nav-link fw-bolder dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about">About Us</a></li>
                <li><a class="dropdown-item" href="team">Our Team</a></li>
                <li><a class="dropdown-item" href="testimoni">Testimoni</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link fw-bolder" href="service">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bolder" href="contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    <!-- breadcumbs -->
    <div class="breadcumbs py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center text-white">
          <h2>Contact</h2>
          <ol class="d-flex list-unstyled">
            <li>Home</li>
            <li>Contact</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- endbreadcumbs -->

    <!-- Contact -->
    <div class="contact mb-5">
      <div class="maps">
        <iframe
          src="https://www.google.com/maps/embed?pb={{$contact->maps_embed}}"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card border shadow shadow-sm">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <i class="fa fa-map-marker-alt fa-2x primary float-start me-3"></i>
                      <h4 class="fw-bolder">Location</h4>
                      <p class="ms-5">{{$contact->alamat}}</p>
                    </div>
                    <div class="col-md-4">
                      <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                      <h4 class="fw-bolder">Email</h4>
                      <p class="ms-5">{{$contact->email}}</p>
                    </div>
                    <div class="col-md-4">
                      <i class="fa-solid fa-phone fa-2x primary float-start me-3"></i>
                      <h4 class="fw-bolder">Phone</h4>
                      <p class="ms-5">{{$contact->telepon}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card border-0 shadow">
              <div class="card-body p-4">
                <div class="row mt-4">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="yourname" />
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="youremail" />
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Subject" />
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="yourmessage"></textarea>
                  </div>
                </div>
                <div class="row mt-4">
                  <button type="submit" class="btn btn-submit">Send Message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- endContact -->

    <!-- <div class="vh-50"></div> -->

    <!-- footer -->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h2 class="fw-bold">{{$contact->name}}</h2>
              <p>{{$contact->description}}</p>
              <strong>Phone</strong> : <span>{{$contact->telepon}}</span>
              <br />
              <strong>Email</strong> : <span>{{$contact->email}}</span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">

                @foreach ($services as $service)
                    
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    {{$service->title}}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Product</h4>
              <ul class="list-group list-unstyled">
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Mac
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPad
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    iPhone
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    Watch
                  </a>
                </li>
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right"></i>
                    AirPods
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h4>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint, eaque.</p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="yourmail@example.com" />
                <button class="btn btn-subscribe text-white" type="button" id="inputGroupFileAddon04">Subscribe</button>
              </div>
            </div>
            <!-- untuk ngelik kembali kehome -->
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <!-- untuk mengatur warna begraoud hitamnya melalui css juga -->
              <div class="copyright">&copy; Copyright <strong>Apple</strong>. All Right Reserved</div>
              <div class="credits">Designed By Me</div>
            </div>
            <div class="col-md-5">
              <div class="sosial-link float-end">
                <!-- float end untuk menaro logo diakhir kanan -->
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer> 
    <!-- endfooter -->

    <!-- to top -->
    <a href="#" class="btn-to-top p-2">
      <i class="fa fa-chevron-up"></i>
    </a>
    <!-- end to top -->

    <!-- <div class="vh-50"></div>
      untuk baris putih kosong dipaling bawah  -->

    <script src="/asset/vendor/jquery/jquery-3.6.4.min.js"></script>
    <script src="/asset/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/vendor/fontawesome/js/all.min.js"></script>
    <script src="/asset/vendor/mansory/masonry.pkgd.min.js"></script>
    <script src="/asset/vendor/aos/dist/aos.js"></script>
    <script src="/asset/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/asset/js/app.js"></script>
    <!-- script untuk asset bootsrtap dan font awasome -->
  </body>
</html>
