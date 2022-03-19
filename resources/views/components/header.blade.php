<div class="sticky-top shadow-sm">
    <div class="bg-white">
        <div class="container border-bottom border-primary">
            <div class="row">
                <div class="col-md-4 col-xs-6 align-self-center d-none d-md-block">
                    <div class="text-center text-md-start py-2">
                        <small>
                            <a href="tel:08147203771" class="text-primary text-decoration-none fw-bold"><i class="fas fa-phone-volume"></i> +91 81472 03771</a>
                        </small>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 align-self-center">
                    <div class="text-center">
                        <a class="btn-sm btn-primary text-decoration-none text-white" href="https://designrr.site/?i=k64h&t=139f64&f=1" target="_blank">
                            <i class="fas fa-download"></i> Get live E-Book
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 align-self-center">
                    @if(Session::has('user'))
                    <div class="text-center text-md-end">
                        <a href="/logout" class="btn-sm btn-primary text-decoration-none mx-2">
                            Logout
                        </a>
                    </div>
                    @else
                    <div class="text-center text-md-end">
                        <a href="/register" class="mx-2 btn-sm btn-primary text-decoration-none">
                            Register
                        </a>
                        <a href="/login" class="btn-sm btn-primary text-decoration-none">
                            Login
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white" class="shadow-sm" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manifesto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="training" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Training
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="training">
                            <li class="nav-item dropdown dropend">
                                <a class="nav-link dropdown-toggle" href="#" id="cbp" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Capability Building Programs
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="cbp">
                                    <li><a class="dropdown-item" href="#">IC Agile</a></li>
                                    <li><a class="dropdown-item" href="#">SaFe</a></li>
                                    <li><a class="dropdown-item" href="#">DASA</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Experiential Learning Programs</a></li>
                            <li><a class="dropdown-item" href="#">E - Learning Programs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="services">
                            <li><a class="dropdown-item" href="#">Coaching</a></li>
                            <li><a class="dropdown-item" href="#">Mentoring</a></li>
                            <li><a class="dropdown-item" href="#">Community Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="resources" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="resources">
                            <li><a class="dropdown-item" href="#">Youtube Videos</a></li>
                            <li><a class="dropdown-item" href="#">Blogs</a></li>
                            <li><a class="dropdown-item" href="#">Reussable Templates</a></li>
                            <li><a class="dropdown-item" href="#">Assessments</a></li>
                            <li><a class="dropdown-item" href="#">Work Books</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="social text-center">
                        <a href="https://www.instagram.com/digitalagilityinstitute/" target="_blank" rel="noopener noreferrer" class="p-2 fs-4 text-decoration-none">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/digitalagilityinstitute" target="_blank" rel="noopener noreferrer" class="p-2 fs-4 text-decoration-none">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/digitalagilityinstitute/" target="_blank" rel="noopener noreferrer" class="p-2 fs-4 text-decoration-none">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.youtube.com/nivartijayaram" target="_blank" rel="noopener noreferrer" class="p-2 fs-4 text-decoration-none">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>