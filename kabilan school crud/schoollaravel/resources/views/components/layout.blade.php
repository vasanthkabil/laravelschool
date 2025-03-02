<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />         
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/"><img src="{{ Vite::asset('resources/images/Hartley_College_logo.gif') }}" alt="logo" style="width: 35px; height:35px">&nbsp;&nbsp;<p style="display: inline; font-size:17px"> Hartley College</p></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group"> 
                    <input  class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button style="background-color: #f7ba2b; border: #f7ba2b" class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>            
        </nav>
        <div id="layoutSidenav" style="background-color:rgb(45,48,59)">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="/students">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle"></i></i></div>
                                Students
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="/grades">
                                <div class="sb-nav-link-icon"><i class="bi bi-star"></i></div>
                                Grades
                            </a>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="/subjects">
                                <div class="sb-nav-link-icon"><i class="bi bi-book"></i></i></div>
                                Subjects
                            </a>
                        </div>

                    </div>                           
                </nav>
            </div>
            <div id="layoutSidenav_content">
            {{$slot}}
            <footer class="py-4 custom-footer-bg mt-auto" >
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted" >Copyright &copy; jaffna Hartelly College</div>
                        <div><a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>      


    </body>
</html>