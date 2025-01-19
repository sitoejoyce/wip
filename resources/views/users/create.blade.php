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
    <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\night-mode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\framework.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\bootstrap.css') }}"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets\css\icons.css') }}">

 
</head>

<body>



    <!-- Content
    ================================================== -->
    <div uk-height-viewport="expand: true" class="uk-flex uk-flex-middle">
        <div class="uk-width-1-3@m uk-width-1-2@s m-auto">
            <div class="uk-card-default p-5 rounded">
                <div class="mb-4 uk-text-center">
                    <h3 class="mb-0"> Pré-Inscrição</h3>
                    <p class="my-2">Faça a sua pré-inscrição</p>
                </div>
                <form id="form-wizard" class="form-horizontal" method="post" action="{{route('users.store')}}">
                    @csrf

                    <div>
                        <div id="form-wizard-1" class="step">
                            <div class="control-group">
                                <label class="control-label">Nome Completo</label>
                                <div class="controls">
                                    <input  id="name" type="text" name="name" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input id="email" type="email" name="email" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Senha</label>
                                <div class="controls">
                                    <input id="password" type="password" name="password" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Confirmar a Senha</label>
                                <div class="controls">
                                    <input id="password2" type="password" name="password2" />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Tipo de Usuário</label>
                                <div class="controls">
                                    <select id="role" name="role" name="role">
                                       
                                        <option value="estudante">Estudante</option>
                                        
                                    </select>
                                </div>
                            </div>
                    <div>
                        <div class="mt-4 uk-flex-middle uk-grid-small" uk-grid="">

                            {{-- <div class="uk-width-expand@s">
                                <a href="#" class="btn btn-secondary" role="button">Voltar ao LogIn</a>
                            </div> --}}
                            
                            <div class="uk-width-auto@s">
                                <button type="submit" class="btn btn-default">Guardar</button>
                              
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

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
    <script src="{{ asset('assets\js\framework.js') }}"></script>
    <script src="{{ asset('assets\js\jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets\js\simplebar.js') }}"></script>
    <script src="{{ asset('assets\js\main.js') }}"></script>
    <script src="{{ asset('assets\js\bootstrap-select.min.js') }}"></script>

</body>

</html>