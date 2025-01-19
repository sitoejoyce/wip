<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Grupo IV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="assets\images\favicon.png" rel="icon" type="image/png">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\night-mode.css">
    <link rel="stylesheet" href="assets\css\framework.css">
    <link rel="stylesheet" href="assets\css\bootstrap.css"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets\css\icons.css">

 
</head>

<body>
     

    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0"> Plataforma de Cursos Online</h3>
                    <p class="my-2">Não Estás Inscrito? Faz a Pré-Inscrição</p>
                </div>
                <form action="{{ route('postLogin') }}" method="post">
                    @csrf

                    <div class="uk-form-group">
                        <label class="uk-form-label"> Email</label>
                       
                        @if (session('error'))
                        <div class="text-danger">{{ session('error') }}</div>
                    @endif

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-mail"></i>
                            </span>
                            <input name="email" type="email" class="form-control"  >
                        </div>
                       
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    </div>

                    <div class="uk-form-group">
                        <label class="uk-form-label">Senha</label>
                        
                        @if (session('error'))
                                  <div class="text-danger">{{ session('error') }}</div>
                              @endif

                        <div class="uk-position-relative w-100">
                            <span class="uk-form-icon">
                                <i class="icon-feather-lock"></i>
                            </span>
                            <input name="password" type="password" class="form-control" >
                            @error('password')
                                  <div class="text-danger">{{ $message }}</div>
                              @enderror
                        </div>

                    </div>

                

                    <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid="">
                        <div class="uk-width-expand@s">
                           

                        </div>
                        <div class="uk-width-auto@s">
                            <button class="btn btn-custon-four btn-primary">Autenticar</button>
                        </div>
                        
                    </div>
                    {{-- <div>
                        <a href="{{ route('users.create') }}" class="btn btn-custon-four btn-secondary btn-register">Pré-Inscrição</a>
                    </div> --}}
                    
                    <div><a href="#">Esqueci-me da Senha</a></div>
                    <div><a href="{{ route('github.login') }}" class="btn btn-dark">
                        <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="GitHub Logo" style="width: 20px; margin-right: 10px;">
                        Login com GitHub
                    </a>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);


        (function (window, document, undefined) {

            'use strict';

            // Feature test
            if (!('localStorage' in window)) return;

            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;

            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('night-mode');
                if (document.documentElement.classList.contains('night-mode')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);

        })(window, document);
    </script>


    <!-- javaScripts
    ================================================== -->
    <script src="assets\js\framework.js"></script>
    <script src="assets\js\jquery-3.3.1.min.js"></script>
    <script src="assets\js\simplebar.js"></script>
    <script src="assets\js\main.js"></script>
    <script src="assets\js\bootstrap-select.min.js"></script>

</body>

</html>