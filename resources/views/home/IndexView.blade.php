<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Job Vacancy</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('home/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('home/css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <div class="container px-5">
            <a class="navbar-brand" href="#page-top">
                <img src="{{ asset('img/logo.png') }}" alt="Job Vacancy" width="150">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5" style="background-image: url('{{ asset('home/assets/img/background.jpg') }}')">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-black mb-2">Job vacancy</h1>
                        <p class="lead text-black-50 mb-4">
                        <h5>Donde comienza el futuro</h5>
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Ofertas de empleo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="container mt-3">
                    <div class="row justify-content-center align-items-center g-4">
                        <form action="{{ route('VacancyByCharge') }}" method="post">
                            <!--
                                crsf  Cross-Site Request Forgery
                            -->
                            @csrf
                            <div class="mb-3">
                                <div class="row">
                                    <div class="offset-4 col-4">

                                        <label for="number" class="form-label">Cargo</label>
                                        <input type="text"class="form-control" name="charge" id="charge"
                                            aria-describedby="helpId" placeholder="ingrese el cargo">


                                        </small>
                                        @error('number')
                                            <div class="text-small text-danger">{{ $message }}</div>



                                        </div>
                                    @enderror
                                    <br>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Buscar</button>


                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive-lg">
                        <table
                            class="table table-striped
                        table-hover
                        table-borderless
                        table-primary
                        align-middle">
                            <thead class="table-light">
                                <br>

                                <caption>Lista de ofertas</caption>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Cargo</th>
                                    <th>Ciudad</th>
                                    <th>Empresa</th>
                                    <th>Salario</th>
                                    <th>Contrato</th>
                                    <th>Titulo</th>
                                    <th>Requisitos</th>


                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <tr>
                                    @isset($vacancies)
                                        @foreach ($vacancies as $vacancy)
                                    <tr>
                                        <td>{{ $vacancy->id }}</td>
                                        <td>{{ $vacancy->charge }}</td>
                                        <td>{{ $vacancy->city }}</td>
                                        <td></td>
                                        <td>{{ $vacancy->salary }}</td>
                                        <td>{{ $vacancy->typeContract }}</td>
                                        <td>{{ $vacancy->title }}</td>
                                        <td>{{ $vacancy->requeriments }}</td>


                                    </tr>
                                    @endforeach
                                @endisset
                                </tr>

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>

            </div>

        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!--
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        Name input-->
                <div class="form-floating mb-3">

                </div>
                <!-- Email address input-->
                <div class="form-floating mb-3">

                </div>

                <!-- Phone number input-->
                <div class="form-floating mb-3">

                </div>
                <!-- Message input-->
                <div class="form-floating mb-3">

                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">

                    </form>
                </div>
            </div>
        </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5">
                <p class="m-0 text-center text-white">Copyright &copy; Job Vacancy 2023</p>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src=" {{ asset('home/js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
