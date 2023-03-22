<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Report App</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">

        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              @if (session()->has('success'))
                  {{session()->get('success')}}
              @endif
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              @if ($errors->any())
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{$item}}</li>
                  @endforeach
                </ul>
              @endif

              <form class="pt-3" action="/register" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="nom" placeholder="Nom">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="prenom" placeholder="Prenom">
                </div>
                <div class="form-group">
                  <input type="tel" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" class="form-control form-control-lg" name="contact" placeholder="contact">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control form-control-lg" name="datenaiss" placeholder="Date de Naissance">
                </div>

                <div class="form-group">
                  <select class="form-control form-control-lg" name="origine">
                    <option>Departement d'origine</option>
                    <option>Maritimes</option>
                    <option>Plateau</option>
                    <option>Central</option>
                    <option>Kara</option>
                    <option>Savane</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                </div>
              <!--  <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="verifypassword" name="verifyPassword" placeholder="Password">
                </div> -->
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP" />
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
