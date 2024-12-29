<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Absensi</title>
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="shortcut icon" href="../../images/logo.svg" />
  <style>
    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="remove.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form id="loginForm" class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username" name="email">
                  </div>
                  <div id="usernameError" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password">                        
                  </div>
                  <div id="passwordError" class="error"></div>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function (event) {
      let isValid = true;

      const username = document.getElementById('exampleInputEmail').value.trim();
      const password = document.getElementById('exampleInputPassword').value.trim();

      const usernameError = document.getElementById('usernameError');
      const passwordError = document.getElementById('passwordError');

      // Reset error messages
      usernameError.textContent = '';
      passwordError.textContent = '';

      // Validate username
      if (username === '') {
        usernameError.textContent = 'Username tidak boleh kosong.';
        isValid = false;
      }

      // Validate password
      if (password === '') {
        passwordError.textContent = 'Password tidak boleh kosong.';
        isValid = false;
      }

      // Prevent form submission if not valid
      if (!isValid) {
        event.preventDefault();
      }
    });
  </script>
</body>

</html>
