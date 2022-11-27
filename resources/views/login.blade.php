<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://cdn.tailwindcss.com" defer></script>
  <title>Suki Store</title>
</head>

<body>
  <section class="shadow-2xl">
    <div class="leftBox">
      <img class="logo" src="../assets/img/logo.png">
    </div>
    <div class="rightBox">
      <div class="formBox">
        <h2>Login</h2>
        <form action="../core/process/login.php" method="post">
          <div class="inputBox">
            <span>Username</span>
            <input type="text" name="username" required>
          </div>
          <div class="inputBox">
            <span>Password</span>
            <input type="password" name="password" required>
          </div>
          <div class="remember">
            <label for="remember">
              <input type="checkbox" name="remember" id="remember"> Remember me
            </label>
          </div>
          <div class="inputBox">
            <input type="submit" name="login" value="Sign In">
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>