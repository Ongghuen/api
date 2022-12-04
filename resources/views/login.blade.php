<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <script src="https://cdn.tailwindcss.com" defer></script>
  <title>Suki | Login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('css/nucleo-svg.css')}}" rel="stylesheet" />
  <link id="pagestyle" href="{{asset('css/argon-dashboard.css')}}" rel="stylesheet" />
</head>

<body>
  <section class="shadow-2xl">
    <div class="leftBox">
      <img class="logo" src="{{asset('/images/logo.png')}}">
    </div>
    <div class="rightBox">
      <div class="formBox">
        <h2>Sign In</h2>
        @if(Session::has('status'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{Session::get('message')}}
          </div>
        @endif
        <form action="/login" method="post">
          @csrf
          <div class="inputBox">
            <span>Email</span>
            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" autofocus required/>
          </div>
          <div class="inputBox">
            <span>Password</span>
            <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" required />
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="inputBox">
            <input class="border border-gray-200 rounded p-2 w-full mt-3" type="submit" name="login" value="Login">
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>