<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/neumorphism.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">


<body>
    <!---- 
        NAVBAR
    ---->
    <nav class="position-fixed border border-light rounded h-100 ml-2 p-2" style="z-index: 1;">
        <p class="text-muted text-center">
            Menu
        </p>
        <div class="w-100 mb-3">
            <a class="btn btn-primary rounded-circle">
                <i class="fas fa-user"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-folder-open"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-cloud-download-alt"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-calendar-alt"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-comments"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100">
                <i class="fas fa-tasks"></i>
            </a>
        </div>
        <div class="w-100 mb-3">
            <a class="btn btn-primary w-100 text-info">
                <i class="fas fa-question-circle"></i>
            </a>
        </div>
    </nav>
    <div class="container-fluid window position-relative" style="height: 200vh">
            <!---- 
                HEADER
            ---->
            <header class=" border border-light rounded w-100 p-2 d-flex justify-content-end align-items-center mt-2">
                <div class="w-100 d-flex align-items-center">
                        <h4 class="float-left m-0">Dashborad</h4>
                </div>
                    <div class="form-group mb-0 mr-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><span class="fas fa-search"></span></span>
                            </div>
                            <input class="form-control" id="exampleInputIcon1" placeholder="Search" type="text" aria-label="Search">
                        </div>
                    </div>
                <div class="dropleft">
                    <button type="button" class="btn btn-primary  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell"></i> <span class="badge badge-pill badge-success">5</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action <span class="badge badge-danger">Danger</span></a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <button class="btn btn-icon-only btn-primary ml-3" type="button">
                    <i class="fas fa-cog"></i>
                </button>
            </header>


            <!-- CONTEUDO -->
            <main class="w-100 pt-5">
                <div class="row">
                    <div class="col-3">
                        <div class="card bg-primary border border-light mb-6">
                            <div class="card-body text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center border border-light" style="width: 70px; height: 70px;">
                                            <i class="fas fa-file-archive  fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="mb-1">Arquivos</h2>
                                        <small>Arquivos adicionados</small>
                                        <h4 class="mb-0">
                                            200
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="col-3">
                        <div class="card bg-primary border border-light mb-6">
                            <div class="card-body text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center border border-light" style="width: 70px; height: 70px;">
                                            <i class="fas fa-calendar-alt fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="mb-1">Agenda</h2>
                                        <small>Pacientes agendados</small>
                                        <h4 class="mb-0">
                                            50
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-3">
                        <div class="card bg-primary border border-light mb-6">
                            <div class="card-body text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center border border-light" style="width: 70px; height: 70px;">
                                            <i class="far fa-calendar-times fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="mb-1">Cancelados</h2>
                                        <small>Agendamento cancelado</small>
                                        <h4 class="mb-0">
                                            0
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-3">
                        <div class="card bg-primary border border-light mb-6">
                            <div class="card-body text-center text-md-left">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="rounded-circle p-3 d-flex align-items-center justify-content-center border border-light" style="width: 70px; height: 70px;">
                                            <i class="fas fa-user-friends fa-2x"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="mb-1">Atendidos</h2>
                                        <small>Pacientes atendidos</small>
                                        <h4 class="mb-0">
                                            306
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
    </div>

<!-- Core -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="vendor/jarallax/dist/jarallax.min.js"></script>
<script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="vendor/prismjs/prism.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>
</body>
</html>