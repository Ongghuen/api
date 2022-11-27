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
        <form action="/login" method="post">
          @csrf
          <div class="inputBox">
            <span>Email</span>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }} "/>
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="inputBox">
            <span>Password</span>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{ old('password') }}"/>
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
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