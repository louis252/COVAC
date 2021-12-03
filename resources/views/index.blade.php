<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon -->
    <link rel="icon" href="/img/covac.webp">
    
    <!-- Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />

    <!-- JS Script -->
    <script>
        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <title>COVAC | {{ $title }}</title>

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top" onclick="backToTop()">
            <a href="#" style="color:#f2f5f8"> ^ </a>
        </button>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/COVAC Logo TL.png" alt="" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="#about">About</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a  class="nav-link" href="/#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Register </a>
                    </li>
                    <li>
                        <a  class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"> Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Header -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="view">
                    <img src="img/headline-cut.jpg" width="100%" height="100%" alt="">
                    <div class="mask rgba-black-strong"></div>
                </div>
            </div>
        </div>
    </div>
    <hr class="featurette-divider mt-0">
    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <h2>About Us</h2><br><br><br>
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Lorem</title><rect width="100%" height="100%" fill="#f7606f"/></svg>
            
                    <h2>Lorem.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iusto tempore? Dolor incidunt officia distinctio quo unde in? Asperiores, quod?</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Ipsum</title><rect width="100%" height="100%" fill="#dc3545"/></svg>
            
                    <h2>Ipsum.</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut eligendi, nobis facere fuga deleniti quae sapiente labore maxime odit quasi.</p>
                </div><!-- /.col-lg-4 -->

                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Dolor</title><rect width="100%" height="100%" fill="#a81927"/></svg>
            
                    <h2>Dolor.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque veniam sit quibusdam reprehenderit deserunt praesentium doloremque delectus blanditiis! Neque, repellat?</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <br><br>
            <p style="font-size: 20px; text-align:justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora, est blanditiis aut similique tempore quaerat atque. Magnam, odit beatae. Aut eius ipsum, animi dolores, ea tempore aperiam alias suscipit, necessitatibus quasi repellendus. Odio, fuga eius culpa aliquam nesciunt laborum dolorem autem sit, dignissimos dolorum repudiandae corrupti. Veritatis itaque enim repudiandae dolorem cum laboriosam saepe iusto, quis temporibus adipisci iure exercitationem iste corrupti officiis error. Iusto perferendis vero aperiam, assumenda aut animi, atque deserunt itaque molestias fuga laboriosam? Esse consequatur adipisci autem enim assumenda facere at voluptatem culpa laudantium, tempore sapiente. Consectetur debitis quibusdam ipsa quis, fugit perspiciatis at obcaecati nam quos placeat omnis ducimus dolorum eius ex modi cumque minima! Cum tempora sint voluptatem dolorem. Sit esse iure beatae, aut accusamus maiores numquam alias tempore enim, exercitationem veniam impedit modi eius temporibus fuga quam, dolores laborum odit! Illum modi delectus a doloribus quasi provident, cupiditate eum, magni ex sunt quam.
            </p>
            <br><br><br><br>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Lorem ipsum dolor sit amet.</h2> <br>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, voluptatibus suscipit, quis vel culpa ea impedit consectetur harum adipisci tempore corporis sequi odit aliquam, qui numquam voluptates. Nisi eveniet recusandae odit distinctio rem, ab amet accusantium autem nihil minima beatae rerum vero officia eos quo delectus debitis quam nulla aspernatur.</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f7606f"/></svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Lorem ipsum dolor sit amet.</span></h2> <br>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam inventore enim sint atque praesentium debitis nesciunt tenetur, magni, quas placeat ex pariatur veritatis eum. Quidem corporis dolorem eum odio nobis minima at ut. Rerum provident perferendis cupiditate vero cumque a officia rem, id esse, laudantium deserunt dicta nulla, saepe expedita?</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#dc3545"/></svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Lorem ipsum dolor sit amet.</h2> <br>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis unde fugiat illo suscipit dicta, eum iste at quidem natus debitis aliquam voluptas dolorum nihil sit consectetur. Esse reiciendis eaque quaerat pariatur ea tempora maiores cum ut. Unde aliquid praesentium cum, similique asperiores nobis autem, dolor voluptate iste voluptatibus incidunt ea!</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#a81927"/></svg>
                </div>
            </div>
        </section>
        <hr class="featurette-divider mb-0">
        <!-- Line -->
        <div class="line">
            <h2>COVAC Website Application</h2>
        </div>
        <!-- Footer -->
        <footer style="background-color: #f2f5f8;">
            <div class="container">
                <div class="row py-4">  
                    <div class="col"> </div>
                    <div class="col-lg-3">
                        <h6 class="text-uppercase font-weight-bold mb-4; text-center">Created By:</h6>
                        <ul class="list-unstyled mb-0"> 
                            <li class="mb-2; text-center">Louis Perez Napitupulu (E1800185)</li>
                            <li class="mb-2; text-center">I Putu Surya Aditya (E1800180)</li>
                        </ul>
                    </div>
                    <div class="col"> </div>
                </div>
            </div>
        </footer>
        
        
        <div class="copyright text-center pt-2 pb-2">
            &copy; 2021 Copyright <strong>COVAC.com</strong>. All Rights Reserved
        </div>
        
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Which one are you?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="https://img.icons8.com/color/52/ffffff/pharmacistmen.png" />
                        <a href="{{ route('register') }}" data-toggle="tooltip" title="For patients who wants to get vaccinated.">
                            <p id="regist" > <b> I'm a patient</b>. Take me to the registration form.</p>
                        </a>
                        <hr>
                        <img src="https://img.icons8.com/color/52/ffffff/manager.png" />
                        <a href="/registerAdmin" data-toggle="tooltip" title="For healthcare administrator who manages a health centre.">
                            <p id="regist"> <b> I'm an healthcare administrator</b>. Take me to the registration form.</p>
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel Registration</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

