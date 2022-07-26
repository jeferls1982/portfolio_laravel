<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeferson Luis Silveira">

    <title>Album de Projetos</title>




    <link href="{{asset('../assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre</h4>
                        <p class="text-muted">Nessa página contém uma seleção de projetos pessoais publicados. A intenção é mostrar meu trabalho e a aplicação das ferramentas que trabalho.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contatos</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.linkedin.com/in/jeferson-luis-silveira" class="text-white" target="_blank">Linkedin</a></li>
                            <li><a href="https://github.com/jeferls1982" class="text-white" target="_blank">Github</a></li>
                            <li><a href="#" class="text-white">jeferls1982@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm fixed-top">
            <div class="container">
                <a href="" class="navbar-brand d-flex align-items-center">

                    <strong class="">JLS - Projetos</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Projetos Pessoais</h1>
                    <p class="lead text-muted">Projetos pessoais desenvolvido como metodo de aprendizado.</p>
                    <p>
                        <a href="/" class="btn btn-primary my-2">Voltar para Home</a>
                        <a href="/ferramentas" class="btn btn-secondary my-2">Ferramentas Dev</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="mb-4" src="{{ asset('/storage/img/irrigacao.png') }}" alt="" srcset=""></img>

                            <div class="card-body">
                                <p class="card-text">Sistema Irrigação de Hortas. Esse projeto foi um desafio de lógica onde setamos o tamanho da horta, posicionamos o robô e o colocamos para trabalhar. No fim ele gera a string com seus movimentos.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://irrigacaohortas.herokuapp.com/" target="_blank" type="button" class="btn btn-sm btn-outline-secondary">Visitar</a>
                                    </div>
                                    <small class="text-muted">Laravel-Tailwind</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('/storage/img/api_localidades.png') }}" alt="" srcset=""></img>

                            <div class="card-body">
                                <p class="card-text">Uma API simples desenvolvida com Lumen e documentada com Swagger.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="http://lumenapilocalidades.herokuapp.com/api/documentation" target="_blank" type="button" class="btn btn-sm btn-outline-secondary">Visitar</a>
                                    </div>
                                    <small class="text-muted">Lumen - Swagger</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="mb-2" src="{{ asset('/storage/img/api_emprestimo.png') }}" alt="" srcset=""></img>

                            <div class="card-body">
                                <p class="card-text">Api em Laravel onde os parâmetros de consulta são opcionais e passados na url. Ex:
                                    with[]=leitor ou livro, orderBy=desc default asc e paginate=valor.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://apiembrestimolivros.herokuapp.com/api/emprestimos?with[]=livros&with[]=leitor&orderBy=desc&paginate=2" target="_blank" type="button" class="btn btn-sm btn-outline-secondary">Visitar</a>
                                    </div>
                                    <small class="text-muted">Laravel - Repository</small>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Top</a>
            </p>
            <p class="mb-1">Jeferson Luis Silveira - Portfólio</p>
        </div>
    </footer>


    <script src="{{asset('../assets/dist/js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>