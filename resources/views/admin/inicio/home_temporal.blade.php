
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="uhTOod2M2wYbrflH1LnGcmDW4PLFyOrlKXQvtzXn">

    
    
    
    <title>
                Inicio            </title>

    
    
    
            <link rel="stylesheet" href="https://floating-ridge-15530.herokuapp.com/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="https://floating-ridge-15530.herokuapp.com/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        
        
        <link rel="stylesheet" href="https://floating-ridge-15530.herokuapp.com/css/adminlte.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    
    
    
                <link rel="stylesheet" href="/css/admin_custom.css">


    
    
</head>

<body class="sidebar-mini" >

    
        <div class="wrapper">

        
                    <nav class="main-header navbar
    navbar-expand
    navbar-white navbar-light">

    
    <ul class="navbar-nav">
        
        <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#"
                        >
        <i class="fas fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </a>
</li>
        
        
        
            </ul>

    
    <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">
    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
    </a>
</li>


        
                                    <li class="nav-item dropdown user-menu">

    
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <span >
            
        </span>
    </a>

    
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        
                            
        
        
        
        
        
        <li class="user-footer">
                        <a class="btn btn-default btn-flat float-right  btn-block "
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off text-red"></i>
                Log Out
            </a>
            <form id="logout-form" action="https://floating-ridge-15530.herokuapp.com/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="uhTOod2M2wYbrflH1LnGcmDW4PLFyOrlKXQvtzXn">
            </form>
        </li>

    </ul>

</li>
                    
        
            </ul>

</nav>
        
        
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">

    
            <a href="https://floating-ridge-15530.herokuapp.com/home"
            class="brand-link "
    >

    
    <img src="https://floating-ridge-15530.herokuapp.com/images/minsa.png"
         alt="AdminLTE"
         class="brand-image img-fluid elevation-3"
         style="opacity:.8">

    
    <span class="brand-text font-weight-light ">
        <b>&nbsp</b>
    </span>

</a>
    
    
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column "
                data-widget="treeview" role="menu"
                                >
                
                <li  class="nav-item">

    <a class="nav-link active "
       href="https://floating-ridge-15530.herokuapp.com/admin"        >

        <i class="fas fa-fw fa-home "></i>

        <p>
            Inicio

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://floating-ridge-15530.herokuapp.com/admin/egresado"        >

        <i class="fas fa-fw fa-file "></i>

        <p>
            Lista de citas

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://floating-ridge-15530.herokuapp.com/admin/egresado"        >

        <i class="fas fa-fw fa-user-injured "></i>

        <p>
            Pacientes

                    </p>

    </a>

</li>

<li  class="nav-item">

    <a class="nav-link  "
       href="https://floating-ridge-15530.herokuapp.com/admin/egresado"        >

        <i class="fas fa-fw fa-user "></i>

        <p>
            Usuarios

                    </p>

    </a>

</li>

            </ul>
        </nav>
    </div>

</aside>
        
        
                    <div class="content-wrapper ">

    
            <div class="content-header">
            <div class="container-fluid">
                    <p align="center">Bienvenido. Aquí podrás gestionar las citas de tu posta respectiva</p>
            </div>
        </div>
    
    
    <div class="content">
        <div class="container-fluid">
            
    <div class="row justify-content-center">
        <div class="col-10">
        <div class="row" align="center">            
                <div class="col-md-6 col-6 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                        <div class="card-body" style="background-color: #17739B">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-calendar" ></i></div>
                                <div class="caja" style="color:#ffffff">LISTA DE CITAS</div>
                            </div>
                        </div>
    
                        <div class="card-body" id="blanco" style="background-color: #17739B"><div style="color:#ffffff">Revisa las citas pendientes</div></div>
                        <div class="card-body" style="background-color: #17739B">
                        <a href="" style="color:#ffffff" class="btn btn-block btn-success">VER</a>
                        </div>
                    </div>
                    </div>
    
                    <div class="col-md-6 col-6 justify-content-center mb-5" >
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="card-body" style="background-color: #6EADC8">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-user-injured" id="blanco"></i></div>
                                <div class="caja" style="color:#ffffff">PACIENTES</div>
                            </div>
                            </div>
                            <div class="card-body" id="blanco" style="background-color: #6EADC8"><div style="color:#ffffff">Revisa los datos del paciente</div></div>
                            <div class="card-body" style="background-color: #6EADC8">
                                <a href="" class="btn btn-block btn-success">VER</a>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 justify-content-center mb-5" align="">
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="card-body" style="background-color: #5AC3F0">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-user" id="blanco"></i></div>
                                <div class="caja" style="color:#ffffff">USUARIOS</div>
                            </div>
                            </div>
                            <div class="card-body" id="blanco" style="background-color: #5AC3F0"><div style="color:#ffffff">Revisa los usuarios del sistema<div></div>
                            <div class="card-body" style="background-color: #5AC3F0">
                                <a href="" class="btn btn-block btn-success">VER</a>
                                </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
        </div>
    </div>

</div>
        
        
        
        
        
    </div>

    
            <script src="https://floating-ridge-15530.herokuapp.com/vendor/jquery/jquery.min.js"></script>
        <script src="https://floating-ridge-15530.herokuapp.com/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://floating-ridge-15530.herokuapp.com/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        
        <script src="https://floating-ridge-15530.herokuapp.com/vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    
    
    
                <script> console.log('Hi!'); </script>

</body>

</html>
