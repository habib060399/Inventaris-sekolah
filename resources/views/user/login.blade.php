<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="/images/logosekolah.png" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <style>
      .gradient-custom {
        /* fallback for old browsers */
        background: #f9ae0b;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgb(243, 117, 27));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgb(245, 106, 13))
      }
    </style>
  </head>

  <body>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <img class="border-radius" src="/images/logosekolah.png" alt="Logo Sekolah" height="150" width="150">
                <h5> INVENTARIS SEKOLAH </h5>
                  <p>SMK NEGERI 1 LENAGGUAR</p>
                <div class="mb-md-2 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  @if (session('error'))
                  <div class="alert alert-errors">
                    {{ session('error') }}
                  </div>
                  @endif
                  <form action="/auth" method="POST">
                    @csrf
                    <div class="form-outline form-white mb-4">
                      <input name="uname" type="uname" id="uname"
                        class="form-control form-control-lg @error('uname') is-invalid @enderror" placeholder="Username"
                        required value="{{old('uname')}}" />
                      <label class="form-label" for="uname">Username</label>
                      @error ('uname')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="form-outline form-white mb-4">
                      <input name="upass" type="password" id="upass" class="form-control form-control-lg"
                        placeholder="Password" required />
                      <label class="form-label" for="upass">Password</label>
                    </div>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                  </form>

                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

  </html>