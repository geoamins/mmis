<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Madrasa Systems</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    body.login {
      background-color: #F4F7F6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login_wrapper {
      max-width: 400px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login_content {
      margin-top: 20px;
    }

    .login_content h1 {
      font-size: 24px;
      margin-bottom: 30px;
      color: #333;
      text-align: center;
    }

    .form-label {
      font-weight: 500;
      margin-bottom: 10px;
      color: #333;
    }

    .form-control {
      border-radius: 3px;
      padding: 12px;
      border: 1px solid #ccc;
      width: 100%;
      color: #555;
    }

    .btn-login {
      background-color: #1ABC9C;
      color: #fff;
      border-radius: 3px;
      padding: 10px 20px;
      font-weight: 500;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .btn-login:hover {
      background-color: #148F77;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group .invalid-feedback {
      display: block;
      color: #C0392B;
      font-size: 12px;
      margin-top: 5px;
    }
  </style>
</head>

<body class="login">
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h1>اسلامی مدرسہ کا نظام<br>Islamic Madrasa System</h1>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-login">Log in</button>
          </div>
        </form>
        <center><a href="https://bsoft.pk">Bridge Soft Technologies</a></center>
      </section>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
