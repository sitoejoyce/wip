@extends('main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Adicione links para seus estilos CSS aqui -->
    <style>
        .container {
            position: relative;
            text-align: center;
            max-width: 100%;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 80%;
        }

        .top-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .button {
            padding: 8px 15px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }

        .newsletter-form {
            margin-top: 50px;
        }

        .newsletter-input {
            padding: 10px;
            width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .newsletter-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div style="border: 2px solid #ccc; padding: 20px; margin-bottom: 20px; position: relative;">
            <img src="assets/images/course/curso.jpg" alt="Imagem Grande" style="max-width: 100%; height: auto;">
            <div class="text-overlay">
                <h2> Plataforma  de cursos online</h2>
                <div style="border: 2px solid #ccc; padding: 10px; margin: 0 auto; max-width: 600px;">
                    <p style="margin-bottom: 10px;">O sistema oferece cursos em diversas áreas, ministrados por especialistas no assunto. Você pode explorar os cursos disponíveis e escolher aqueles que mais se adequam aos seus interesses e objetivos.</p>
                </div>
                <a href="{{ route('course.index') }}" style="text-decoration: none; display: inline-block; margin-top: 20px; padding: 8px 15px; background-color: #007bff; color: #fff; border-radius: 5px;">Ver os Cursos Disponíveis</a>
                
                <!-- Seção da Newsletter -->
                <div class="newsletter-form">
                    <h3>Receber Notificações</h3>
                    <form action="#" method="POST">
                        @csrf
                        <input type="email" name="email" class="newsletter-input" placeholder="Digite seu e-mail" value="{{ $user->email ?? '' }}" required>
                        <button type="submit" class="newsletter-button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
