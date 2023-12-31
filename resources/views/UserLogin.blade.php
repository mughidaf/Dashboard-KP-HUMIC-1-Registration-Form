<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/UserLogin.css">
  </head>
  <body>
    <section class="container">

        <div class="image-section">
            <div class="image-wrapper">
                <img src="./image/banner.jpeg" alt="">
            </div>

            <div class="content-container">
                <h1 class="section-heading">Humic engineering</span></h1>
                <p class="section-paragraph">To become an excellent research center in the field of engineering to improve the human health and prosperity.</p>
            </div>
        </div>

        @if(session()->has('loginError'))
                    <div class="error" style="margin-left: 0%">
                        {{session('loginError')}}
                    </div>
                    @endif
        <div class="form-section">
            <form action="/" method="post">
                @csrf
                <div class="form-wrapper">
                    <div class="logo-container">
                        <a href="#" class="logo-container">
                            <img src="./image/Humic-logi.png  " alt="Logo">
                        </a>
                    </div>
                    
                    <h2>Welcome Back! 👋🏻</h2>
                    <p>Silahkan masukkan data anda untuk akses admin.</p>
                    
                    <div class="input-container">
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input name=name type="text" id="name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name=password type="password" id="password">
                        </div>
                </div>
                
                
                <div class="remember-forgot"> 
                    {{-- <div class="remember-me">
                        <input type="checkbox" value="remember-me" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div> --}}
                </div>
                <button class="login-btn" type="submit">Log In</button>
                
                {{-- <div class="or-divider">or</div>
                
                <button class="signup-btn">SignUp</button> --}}
            </div>
        </form>
        </div>
    </section>
  </body>
</html>