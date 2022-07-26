<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jeferson Luis Silveira - projetos">

    <title>Ferramentas JLS</title>






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


    <!-- Custom styles for this template -->
    <link href="{{asset('../assets/css_page/features.css')}}" rel="stylesheet">
</head>

<body>


    <main>
        <nav class="navbar fixed-top" style="background-color: #e3f2fd;">
            <div class="container d-flex">
                <a class="lead text-decoration-none text-dark fw-bold float-md-start mb-0" href="/">

                    JLS
                </a>




                <div class="text-secondary w-25 d-flex justify-content-around">
                    @include('parts.contacts')
                </div>
            </div>

        </nav>


        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Linguagens e Ferramentas</h2>
            <p class="text-center">
                <a href="/" class="btn btn-primary my-2">Voltar para Home</a>
                <a href="/projetos" class="btn btn-secondary my-2">Projetos</a>
            </p>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="feature col text-center">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                        </svg>
                    </div>
                    <h2>Linguagens</h2>
                    <p class="text-center">

                        PHP
                        <br>

                        Javascript
                        <br>

                        C#
                        <br>

                        SQL
                    </p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
                <div class="feature col text-center">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-braces-asterisk" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z" />
                        </svg>
                    </div>
                    <h2>Design</h2>
                    <p>

                        HTML5
                        <br>

                        CSS3
                        <br>

                        Bootstrap
                        <br>

                        Tailwind
                    </p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>

                <div class="feature col text-center">
                    <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                            <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />
                            <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />
                            <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
                        </svg>
                    </div>
                    <h2>Database</h2>
                    <p>

                        PostgreSQL
                        <br>

                        MySQL
                        <br>

                        SQLServer
                        <br>

                        SQLite3
                    </p>
                    <a href="#" class="icon-link d-inline-flex align-items-center">
                        Call to action
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#chevron-right" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom">Principais Frameworks backend desenvolvimento WEB e APIs Restfull</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>Laravel - Lumen</h2>
                        <p>Há mais de 7 anos desenvolvendo projetos em php com laravel. Habilidade de trabalhar na construção de banco de dados com migrations. Trabalhando com o padrão MVC ou Design Repository (Quickstart).</p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>NodeJS</h2>
                        <p>Desenvolvimento de APIs com NodeJS utilizando o framework Express.js e Sequelize para comunicação com banco de dados.</p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>AspNet Core</h2>
                        <p>Também tenho algumas APIs e projetos web desenvolvido em C# com AspNet Core utilizando Entity Framework e SQL Server.</p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container px-4 py-5" id="hanging-icons">
            <h2 class="pb-2 border-bottom">Principais Frameworks Frontend</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>Vue.js</h2>
                        <p>Desenvolvimento Frontend com Vue.js utilizando vue-router e vuex consumindo APIs com axios.</p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>React</h2>
                        <p>Desenvolvimento de SPA - (single page application) com react. Conhecimento dos hooks State, Redux e Effect.</p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z" />
                            <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z" />
                        </svg>
                    </div>
                    <div>
                        <h2>Next.js</h2>
                        <p>O framework React. Nele é integrado o frontend e backend e assim utilizamos todo conceito node.js no back e react no frontend. </p>
                        <a href="#" class="btn btn-primary">
                            Primary button
                        </a>
                    </div>
                </div>
            </div>
        </div>






        <div class="b-example-divider"></div>

        <div class="container px-4 py-5" id="icon-grid">
            <h2 class="pb-2 border-bottom">Outras ferramentas de desenvolvimento</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <div class="text-center">
                        <svg width="4rem" height="4rem" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 408">
                            <defs>
                                <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="76" y1="10" x2="523" y2="365">
                                    <stop offset="0" stop-color="#9013FE" />
                                    <stop offset="1" stop-color="#6610F2" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#a)" fill-rule="nonzero" d="M56.48 53.32C55.52 25.58 77.13 0 106.34 0H405.7c29.21 0 50.82 25.58 49.86 53.32-.93 26.65.27 61.16 8.96 89.31 8.72 28.23 23.41 46.08 47.48 48.37v26c-24.07 2.29-38.76 20.14-47.48 48.37-8.69 28.15-9.89 62.66-8.96 89.31.96 27.74-20.65 53.32-49.86 53.32H106.34c-29.21 0-50.82-25.58-49.86-53.32.93-26.65-.28-61.16-8.96-89.31C38.8 237.14 24.07 219.29 0 217v-26c24.07-2.29 38.8-20.14 47.52-48.37 8.68-28.15 9.89-62.66 8.96-89.31z" />
                            <path fill="#fff" d="M342.9 251.1c0 38.2-28.5 61.36-75.8 61.36h-89.2v-217h88.74c39.44 0 65.32 21.35 65.32 54.13 0 23.01-17.4 43.62-39.59 47.22v1.21c30.2 3.31 50.53 24.21 50.53 53.08zm-130.49 33.84v-71.43h45.6c32.66 0 49.61 12.03 49.61 35.49s-16.48 35.94-47.6 35.94h-47.61zm0-161.96h45.91c24.96 0 39.13 11.13 39.13 31.28 0 21.5-16.48 33.53-46.37 33.53h-38.67v-64.81z" />
                        </svg>
                        <h4 class="fw-bold mb-0">Bootstrap 5</h4>
                        <p>Alguns projetos utilizando essa ferramenta fantástica.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="text-center">
                        <svg width="4rem" height="4rem" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 73.29">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #06b6d4;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <title>tailwind-css</title>
                            <path class="cls-1" d="M61.44,0Q36.87,0,30.72,24.43q9.22-12.21,21.5-9.16c4.68,1.16,8,4.53,11.72,8.26,6,6.08,13,13.11,28.22,13.11q24.57,0,30.72-24.43-9.21,12.22-21.5,9.16c-4.68-1.16-8-4.53-11.72-8.26C83.64,7,76.67,0,61.44,0ZM30.72,36.64Q6.15,36.64,0,61.07q9.23-12.21,21.5-9.16c4.68,1.16,8,4.53,11.72,8.27,6,6.07,13,13.11,28.22,13.11q24.57,0,30.72-24.43Q82.95,61.07,70.66,58c-4.68-1.16-8-4.53-11.72-8.26-6-6.08-13-13.12-28.22-13.12Z" />
                        </svg>
                        <h4 class="fw-bold mb-0">Tailwind - css</h4>
                        <p>Alguns projetos sendo embelezado por esse framework muito simples de ser utilizado e que tem efeitos impressionantes.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="text-center">
                        <svg width="4rem" height="4rem" preserveAspectRatio="xMidYMid" viewBox="0 0 256 293" xmlns="http://www.w3.org/2000/svg">
                            <path d="m128 0h-60l60 141.816367" fill="#1697f6" />
                            <path d="m128 0h60l-60 141.816367" fill="#1867c0" />
                            <path d="m128 182.743732v109.715707l-128-249.9019196h67.0490402" fill="#7bc6ff" />
                            <path d="m128 182.746214v109.715707l128-249.9019196h-67.04904" fill="#aeddff" />
                        </svg>
                        <h4 class="fw-bold mb-0">Vuetify</h4>
                        <p>Biblioteca de componentes para uso em vue.js ou react.js.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="text-center">
                        <svg width="4rem" height="4rem" preserveAspectRatio="xMidYMid" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                            <path d="m127.059657 255.996921c-68.2090026-.470449-127.51673062-57.078479-127.05700194-128.998618.44199434-69.2024402 57.94900474-127.46727058 129.10736494-126.99545745 69.157108.45954053 127.503089 57.86392555 126.885116 128.19135345.572955 69.689254-58.060868 128.29499-128.935479 127.802722zm0 0c-68.2090026-.470449-127.51673062-57.078479-127.05700194-128.998618.44199434-69.2024402 57.94900474-127.46727058 129.10736494-126.99545745 69.157108.45954053 127.503089 57.86392555 126.885116 128.19135345.572955 69.689254-58.060868 128.29499-128.935479 127.802722z" fill="#fff" />
                            <path d="m127.184644 238.997327c-59.1522675-.408056-110.5810349-49.498583-110.1823412-111.865899.3837257-60.0128327 50.2530972-110.5397174 111.9608142-110.1289408 59.971427.3985349 110.568788 50.1800369 110.032661 111.1667638.496666 60.43313-50.348348 111.255175-111.811134 110.828076zm0 0c-59.1522675-.408056-110.5810349-49.498583-110.1823412-111.865899.3837257-60.0128327 50.2530972-110.5397174 111.9608142-110.1289408 59.971427.3985349 110.568788 50.1800369 110.032661 111.1667638.496666 60.43313-50.348348 111.255175-111.811134 110.828076z" fill="#49a32b" />
                            <path d="m169.327319 127.956161c-.284596 5.290212-4.906213 9.683063-9.461106 8.916425-.021787 0-.044936 0-.068085 0-5.045107.006809-9.139745-4.078298-9.145192-9.123404.171575-5.058724 4.366979-9.045787 9.427064-8.96 5.045106.02451 9.51966 4.288 9.247319 9.166979zm-81.1261275 51.264c1.9022979.055829 3.8059574.014978 5.9996596.014978v13.785873c-13.6347234 2.305361-24.8660426-1.565958-27.6221277-13.091405-.9436596-4.237617-1.5237447-8.548766-1.7361702-12.885787-.292766-4.591659.2137872-9.235064-.1361702-13.818553-.9695319-12.612085-2.6035745-16.917787-14.706383-17.514213v-15.69634c.8674043-.202894 1.7470638-.352681 2.6321702-.452085 6.6355745-.326809 9.4325107-2.361192 10.916766-8.897362.6754042-3.672511 1.0757447-7.389958 1.1942127-11.1223831.5256171-7.2170212.3390639-14.5511489 1.5414468-21.6510638 1.737532-10.267234 8.1116596-15.2551489 18.6403405-15.8134468 2.9957447-.1606808 6.0010212-.0245106 9.3957447-.0245106v14.0908936c-1.3971064.0994042-2.6771064.3022979-3.9489362.2641702-8.5800851-.2628085-9.024 2.6594043-9.650383 9.7620426-.3908085 4.4541276.1484255 8.9845106-.155234 13.453617-.3172766 4.4473189-.9123405 8.8714889-1.7811064 13.2452769-1.2377873 6.338723-5.1349787 11.052936-10.5354894 15.053617 10.4837447 6.822127 11.6765958 17.422978 12.3574468 28.187234.3662979 5.78451.1988085 11.609872.7857022 17.365787.4575319 4.467745 2.1950638 5.607489 6.8085106 5.74366zm8.8360851-60.430979h.1620425c5.0124259.083064 9.0103829 4.213106 8.9273189 9.226893 0 .164766-.005447.328171-.014978.491575-.281873 4.899404-4.481362 8.641362-9.3807664 8.359489-.1974468.004085-.3935319 0-.5909787-.009532-4.9892766-.247829-8.8333617-4.493617-8.5855319-9.482893.2478298-4.989277 4.493617-8.833362 9.4828936-8.585532zm31.2360854 0c5.482212-.042213 9.123404 3.510468 9.152 8.930042.029957 5.565277-3.421958 9.126128-8.868766 9.149277-5.539405.024511-9.186043-3.479149-9.216-8.866043-.016341-.275063-.020426-.550127-.012256-.825191.153873-4.786383 4.158639-8.541958 8.945022-8.388085zm65.399829-6.865702c1.458383 5.446808 4.297532 7.361361 10.03166 7.622808.939575.043575 1.875064.202894 3.163234.345873v15.692255c-.697191.228766-1.412085.40034-2.137872.512-7.684085.477957-11.186383 3.630298-11.962553 11.334808-.49566 4.918468-.454809 9.891405-.795234 14.827575-.142979 5.419574-.635915 10.82417-1.476086 16.179745-1.960851 9.703489-8.019063 14.54434-18.028936 15.135319-3.221787.190638-6.466723.029957-9.940425.029957v-14.025532c1.869617-.115744 3.52-.275064 5.174468-.314553 5.980596-.142979 8.095319-2.071149 8.388085-8.010894.324085-6.525276.465702-13.058723.757106-19.585361.42349-9.433873 3.006639-17.861447 11.795064-23.745362-5.028766-3.585362-9.066213-7.92783-10.112-13.783149-1.265021-7.097191-1.673532-14.3509787-2.354383-21.5475744-.33634-3.597617-.32-7.2265532-.671319-10.8214468-.378553-3.8808511-3.044766-5.2234894-6.577021-5.3106383-2.02349-.0490213-4.055149-.0095319-6.642383-.0095319v-13.696c16.509276-2.7411064 27.913532 2.752 28.972936 18.5477446.443915 6.6328511.378553 13.2970213.803404 19.9298728.186553 3.60851.725787 7.189787 1.612255 10.692085z" fill="#fff" />
                        </svg>
                        <h4 class="fw-bold mb-0">Documentação de APIs</h4>
                        <p>Desenvolvo também toda parte de documentação de apis com swagger, incluindo a parte de authenticate.</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="text-center">
                        <svg width="4rem" height="4rem" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m12 0c-6.583 0-12 5.417-12 12s5.417 12 12 12 12-5.417 12-12-5.417-12-12-12zm0 2.478c5.256 0 9.522 4.266 9.522 9.522s-4.266 9.522-9.522 9.522-9.522-4.266-9.522-9.522c0-.885.12-1.741.347-2.554a4.76 4.76 0 0 0 3.925 2.066 4.764 4.764 0 0 0 4.762-4.762 4.758 4.758 0 0 0 -2.067-3.925 9.526 9.526 0 0 1 2.555-.347z" />
                        </svg>
                        <svg width="4rem" height="4rem" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="m13.527.099c-6.572-.843-12.585 3.801-13.428 10.374-.843 6.572 3.8 12.584 10.373 13.428 6.573.843 12.587-3.801 13.428-10.374.844-6.572-3.799-12.584-10.373-13.428zm2.471 7.485a.855.855 0 0 0 -.593.25l-4.453 4.453-.307-.307-.643-.643c4.389-4.376 5.18-4.418 5.996-3.753zm-4.863 4.861 4.44-4.44a.62.62 0 1 1 .847.903l-4.699 4.125zm.33.694-1.1.238a.06.06 0 0 1 -.067-.032.06.06 0 0 1 .01-.073l.645-.645zm-2.803-.459 1.172-1.172.879.878-1.979.426a.074.074 0 0 1 -.085-.039.072.072 0 0 1 .013-.093zm-3.646 6.058a.076.076 0 0 1 -.069-.083.077.077 0 0 1 .022-.046h.002l.946-.946 1.222 1.222zm2.425-1.256a.228.228 0 0 0 -.117.256l.203.865a.125.125 0 0 1 -.211.117h-.003l-.934-.934-.294-.295 3.762-3.758 1.82-.393.874.874c-1.255 1.102-2.971 2.201-5.1 3.268zm5.279-3.428h-.002l-.839-.839 4.699-4.125a.952.952 0 0 0 .119-.127c-.148 1.345-2.029 3.245-3.977 5.091zm3.657-6.46-.003-.002a1.822 1.822 0 0 1 2.459-2.684l-1.61 1.613a.119.119 0 0 0 0 .169l1.247 1.247a1.817 1.817 0 0 1 -2.093-.343zm2.578 0a1.714 1.714 0 0 1 -.271.218h-.001l-1.207-1.207 1.533-1.533c.661.72.637 1.832-.054 2.522zm-.1-1.544a.143.143 0 0 0 -.053.157.416.416 0 0 1 -.053.45.14.14 0 0 0 .023.197.141.141 0 0 0 .084.03.14.14 0 0 0 .106-.05.691.691 0 0 0 .087-.751.138.138 0 0 0 -.194-.033z" />
                        </svg>
                        <h4 class="fw-bold mb-0">Testes de APIs</h4>
                        <p>Utilizo tanto Insomnia quanto Postman para requisições e testes nas APIs.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="{{asset('../assets/dist/js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>