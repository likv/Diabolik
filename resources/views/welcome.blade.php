<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOOTSTRAP WEBSITE</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="img/ayato.jpeg" alt="Ayato logo" style="width:20%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HEADER -->
<header class="main-header">
    <div class="background-overlay text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <h1>This is the title or a phrase related to the product</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At aut autem dignissimos, excepturi id illo illum itaque iure necessitatibus neque omnis praesentium, quasi qui quibusdam quo reiciendis, sapiente veniam voluptatem.</p>
                    <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                        Read More
                    </a>
                </div>
                <div class="col-md-6">
                    <img src="img/product.jpeg" alt="Imagen del producto" class="img-fluid d-none d-sm-block">
                </div>
            </div>
        </div>
    </div>
</header>

<!--NEWSLETTER -->
<section class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control form-control-lg" placeholder="Enter your name">
            </div>
            <div class="col-md-4">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email">
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary btn-lg btn-block">
                    Subscribe
                </button>
            </div>
        </div>
    </div>
</section>

<!--FEATURES -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h3>Temporada Uno</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-primary text-white">
                    <div class="card-body">
                        <h3>Temporada Dos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border-primary">
                    <div class="card-body">
                        <h3>Temporada Tres</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center bg-primary text-white">
                    <div class="card-body">
                        <h3>Temporada Cuatro</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--ABOUT -->
<section class="bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="m-5">
                <h3>Why this Page??</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla numquam, quam? Atque consequatur fugiat iste molestias nam nostrum quaerat quas rem repellat reprehenderit tempore, veritatis!</p>
            </div>
        </div>
    </div>
</section>

<!--ACCORDION -->
<section class="container text-center p-5">
    <div class="row">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Opción 1
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Opción 2
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Opción 3
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!--TEAM -->
<section class="team text-center">
    <div class="container p-5">
        <h1 class="text-white">Team</h1>
        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, voluptates.</p>
        <div class="row">
            <!--MEMBER-->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="img/kanato.jpeg" class="img-fluid rounded-circle w-60" alt="Kanato">
                        <h3>Kanato</h3>
                        <p>Kanato Sakamaki (逆巻 カナト, Sakamaki Kanato) es el cuarto hijo de la familia Sakamaki. Él junto con Ayato  y Laito, los trillizos, son hijos de Cordelia; hija del Señor de los Demonios y la primera esposa de Karlheinz, el Rey Vampiro.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com/jelly.hash" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://youtu.be/VekmWLus-oA" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="img/subaru.jpeg" class="img-fluid rounded-circle w-60" alt="Subaru">
                        <h3>Subaru</h3>
                        <p>Subaru Sakamaki (逆巻 スバル, Sakamaki Subaru), es el sexto y último hijo de la familia Sakamaki. Subaru es el único hijo de Christa, la tercera esposa de Karlheinz.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com/jelly.hash" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://youtu.be/pSiYmN709DI" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="img/reiji.jpeg" class="img-fluid rounded-circle w-60" alt="Reiji">
                        <h3>Reiji</h3>
                        <p>Reiji Sakamaki (逆巻 レイジ, Sakamaki Reiji) es el segundo hijo de la familia Sakamaki después de Shu. También, Reiji junto con Shu son hijos de Beatrix, la segunda esposa de Karlheinz.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com/jelly.hash" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://youtu.be/YmC5LysZdBQ" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <img src="img/shu.jpeg" class="img-fluid rounded-circle w-60" alt="Shu">
                        <h3>Shu</h3>
                        <p>Shu Sakamaki (逆巻 シュウ, Sakamaki Shū) es el primer hijo y por lo tanto el mayor de los hermanos Sakamaki. Él y su hermano Reiji son hijos de Beatrix, la segunda esposa de Karlheinz. </p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="http://facebook.com/jelly.hash" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://youtu.be/yKi40yjl108" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--CONTACT-->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h3>Contacto</h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <i class="fas fa-smile input-group-text"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <i class="fas fa-envelope input-group-text"></i>
                        </div>
                        <input type="email" class="form-control" placeholder="Correo">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <i class="fas fa-pencil-alt input-group-text"></i>
                        </div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Escribe tu mensaje" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block">
                        Enviar tu mensaje
                    </button>
                </form>
            </div>
            <div class="col-lg-3 align-self-center">
                <img src="img/ayato.jpeg" alt="">
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container p-3 text-white text-center">
        <p>Copyright &copy; 2018</p>
    </div>
</footer>
<!-- BOOTSTRAP JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
