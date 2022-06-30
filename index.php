<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Php Login Oop</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- styles -->
    <link rel="stylesheet" href="./Ui/asset/main-ui/styles.css" />
    <style>

    </style>
</head>

<body>
    <!--Nav Section Start -->
    <nav>
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="Ui/image/nike-logo.png" class="logo" alt="logo" />
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- links -->
            <ul class="links">
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="#">about</a>
                </li>
                <li>
                    <a href="Ui/asset/login-ui/login.php">Login</a>
                </li>
                <li>
                    <a href="Ui/asset/signUp-ui/signUp.php">Sign-Up</a>
                </li>
            </ul>
            <!-- social media -->
            <ul class=" social-icons">
                <li class="">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
                <li class="">
                    <div class="theme-toggler">
                        <span>light</span>
                        <span class="toggler"></span>
                        <span>dark</span>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <!--Nav Section End -->


    <!-- Show Case Section Start -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <img class="img-fluid w-50 d-none d-sm-block" src="./Ui/image/showcase.svg" alt="" />
                <div>
                    <h1>Become a <span class="text-warning"> Web Developer </span></h1>
                    <p class="lead my-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, neque. Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Facere, maiores.
                    </p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">
                        Start The Enrollment
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Show Case Section End -->

    <!-- Sign Up Section Start -->
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0">Sign Up For Our Newsletter</h3>

                <div class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter Email" />
                    <button class="btn btn-dark btn-lg" type="button">Submit</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign Up Section End -->


    <!-- Box Section Start -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">Virtual</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas
                                quidem possimus dolorum esse eligendi?
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Hybrid</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas
                                quidem possimus dolorum esse eligendi?
                            </p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title mb-3">In Person</h3>
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quas
                                quidem possimus dolorum esse eligendi?
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Box Section End -->

    <!-- Learn Base Section Start -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="./Ui/image/fundamentals.svg" class="img-fluid" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique deleniti
                        possimus magnam corporis ratione facere!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque reiciendis
                        eius autem eveniet mollitia, at asperiores suscipit quae similique laboriosam
                        iste minus placeat odit velit quos, nulla architecto amet voluptates?
                    </p>
                    <div class="accordion accordion-flush">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#readMore-One">
                                    Read More
                                </button>
                            </h2>
                            <div id="readMore-One" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam beatae
                                    fuga animi distinctio perspiciatis adipisci velit maiores totam tempora
                                    accusamus modi explicabo accusantium consequatur, praesentium rem
                                    quisquam molestias at quos vero. Officiis ad velit doloremque at.
                                    Dignissimos praesentium necessitatibus natus corrupti cum consequatur
                                    aliquam! Minima molestias iure quam distinctio velit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Learn Base Section End -->

    <!-- javascript -->
    <script src="UI/asset/main-ui/app.js"></script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>

</html>