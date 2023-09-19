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

        <div class="form-section">
            <div class="form-wrapper">
                <div class="logo-container">
                    <a href="#" class="logo-container">
                        <img src="./image/Humic-logi.png  " alt="Logo">
                    </a>
                </div>

                <h2>Welcome Back! 👋🏻</h2>
                <p>Silahkan masukkan data anda.</p>

                <div class="input-container">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name=email[] type="email" id="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name=pass[] type="password" id="password">
                    </div>
                </div>
                

                <div class="remember-forgot"> 
                    {{-- <div class="remember-me">
                        <input type="checkbox" value="remember-me" id="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div> --}}
                </div>
                <button class="login-btn">Log In</button>

                {{-- <div class="or-divider">or</div>

                <button class="signup-btn">SignUp</button> --}}
            </div>
        </div>
    </section>
  </body>
</html>