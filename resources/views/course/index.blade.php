@extends('main')

@section('content')

<!-- Content -->
<div class="page-content">
    <div class="container">
        <!-- Destaque Principal -->
        <div style="border: 1px solid black; padding: 10px;">
            <div style="width: 100%; height: 300px; background-color: lightgray; text-align: center;">
                <img src="assets/images/course/im.png" alt="Imagem de Destaque" style="max-width: 100%; max-height: 100%;">
            </div>
        </div>

        <br><br>

        <!-- Título da Página -->
        <h1>Cursos Disponíveis</h1>

        <!-- Navegação -->
        <nav class="responsive-tab style-2">
            <ul>
                <li><a href="#">Novidades</a></li>
                <li><a href="#">Vantagens</a></li>
            </ul>
        </nav>

        <!-- Lista de Cursos -->
        <div class="section-small">
            <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid" uk-grid>
                @foreach ($courses as $course)
                <div>
                    <a href="{{ route('course.details', $course->id) }}">
                        <div class="course-card">
                            <!-- Imagem do Curso -->
                            <div class="course-card-thumbnail">
                                <img src="{{ $course->image }}" alt="Imagem do Curso">
                                <span class="play-button-trigger"></span>
                            </div>

                            <!-- Informações do Curso -->
                            <div class="course-card-body">
                                <div class="course-card-info">
                                    <div>
                                        <span class="catagroy">{{ $course->category }}</span>
                                    </div>
                                    <div>
                                        <i class="icon-feather-bookmark icon-small"></i>
                                    </div>
                                </div>
                                <h4>{{ $course->name }}</h4>
                                <p>{{ $course->description }}</p>
                                <div class="course-card-footer">
                                    <h5><i class="icon-feather-film"></i> Validade: {{ $course->validate }}</h5>
                                    <h5><i class="icon-feather-clock"></i> {{ $course->duration }} Horas</h5>
                                </div>
                                <br>
                                <!-- Botão Inscrever-se -->
                                <button class="btn btn-custon-four btn-primary" style="width:100%;">Inscrever-se</button>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Mensagem caso não haja cursos -->
        @if($courses->isEmpty())
        <div style="text-align: center; margin-top: 20px;">
            <h3>Desculpe, no momento não há cursos disponíveis.</h3>
        </div>
        @endif
    </div>
</div>

@endsection
