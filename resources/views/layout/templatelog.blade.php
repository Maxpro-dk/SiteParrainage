<!doctype html>
<html lang="fr">
  <head>
  	<title>connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{asset("assets/css/login.css")}}">

	</head>
	<body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="wrap col-md-7 col-lg-5">	
                        <div class="login-wrap p-2 p-md-3">
                           @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

	</body>
</html>