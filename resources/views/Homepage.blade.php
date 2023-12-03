<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Humic</title>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">

    <link href="/Homepage.css" rel="stylesheet">
</head>

<body>
    <nav class="main-nav" id="main-nav">
        <div class="Hamburg">
            <img src="/image/Humic-Logi.png" alt="">
            <div id="menu-button">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                @guest
                <li><a href="/UserLogin">Login</a></li>
                @endguest
                @auth
                <li><a href="/UserLogout">Logout</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    <header>
        <img class="img-absolute" src="/image/banner.jpeg">
        <div class="wrapper astonish animated fadeInDown">
            <h1><strong>Humic Engineering</strong></h1>
            <h2>To become an excellent research center in the field of engineering to improve the human health and prosperity</h2>
        </div>
    </header>


    <main>
        <div class="news">
            <h2>News & Activity</h2>
            @auth
            <a href="/formMaker">
                <button>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path></svg> Create
                    </span>
                </button>
            </a>
            @endauth
        </div>
        @foreach ($forms as $form)
        <div class="container-fluid">
            <a href="/userForm/{{$form->id}}">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" src="storage/{{$form->gambar}}" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <div class="card-loop">
                                        <h4 class="card-title" style="color: black">{{$form->judul}}</h4>
                                        @auth
                                        <div class="card-buttons">
                                            <a href="/editingForm/{{$form->id}}" class="edit-button">Edit</a>
                                            <a href="/deleteForm/{{$form->id}}" class="edit-button">Delete</a>
                                            <a href="/viewForm/{{$form->id}}" class="view-button">View</a>
                                        </div>
                                        @endauth
                                    </div>
                                    
                                    <p class="card-text">{{$form->deskripsi}}</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created {{ \Carbon\Carbon::parse($form->created_at)->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="/menu.js" charset="utf-8"></script>
    <script src="/scroll.js" charset="utf-8"></script>
</body>

</html>