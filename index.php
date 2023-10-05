<html>
    <head>
        <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
        <link rel="manifest" href="#">
        <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grinder Coffee Shop</title>
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark px-5">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="icons/logo.svg" alt="Logo" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item px-md-4">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item px-md-4">
                            <a class="nav-link" href="#">MENU</a>
                        </li>
                        <li class="nav-item px-md-4">
                            <a class="nav-link" href="#">MOODS</a>
                        </li>
                        <li class="nav-item px-md-4">
                            <a class="nav-link" href="#">BLOG</a>
                        </li>
                        <li class="nav-item px-md-4">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                        <li class="nav-item px-md-4 my-auto">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-image" style="background-image: url('images/Header Image.jpg');">
            <div class="text-center">
                <div class="header-title" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">Life begins after Coffee.</div>
                <div class="header-button" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    <button type="button" class="btn btn-warning px-5 text-white rounded-0" onClick="document.getElementById('section-offer').scrollIntoView();">VIEW MENU</button>
                </div>
            </div>
        </header>

        <div class="container mt-5 pt-md-5 mb-5" id="section-offer" data-sal="fade">
            <div class="text-center mb-5">
                <div class="section-title mb-5 fs-1" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">What would you like to have?</div>
                <div class="section-description mx-auto w-50" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in half and half. Spoon lungo variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder.
                </div>
            </div>
            <div class="row mt-3" id="card-menu">
                <?php 
                    // Read the JSON file 
                    $json = file_get_contents('data.json'); 

                    // Decode the JSON file 
                    $json_data = json_decode($json,true); 
                    foreach ($json_data as $data) {
                ?>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card bg-dark text-white rounded-0 border-0">
                        <img src="<?= $data['image'] ?>" class="card-img" height="430">
                        <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                            <h5 class="card-title text-center" style="padding-top: 15vw;"><?= $data['name'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="container mt-5 pt-md-5">
            <div class="text-center mb-5">
                <div class="section-title mb-3 fs-2 mx-auto w-50" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    Extraction instant that variety white robusta strong
                </div>
                <div class="section-description mx-auto w-50" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    Coffee plunger pot sweet barista, grounds acerbic coffee instant crema cream in half and half. Spoon lungo variety, as, siphon, ristretto, iced brewed and acerbic affogato grinder. Mazagran cafe au lait wings spoon, percolator milk latte dark strong. Whipped, filter latte, filter aromatic grounds doppio caramelization half and half.
                </div>
                <div class="mt-5" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    <button type="button" class="btn btn-warning px-5 text-white rounded-0">CONTACT US</button>
                </div>
            </div>
        </div>

        <div class="bg-light my-5 py-5">
            <div class="container py-md-5">
                <div class="text-center mb-5">
                    <div class="section-title mb-5 fs-2" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">Health Benefits of Coffee</div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4 text-center mb-3" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                        <img src="icons/battery-full.svg" class="mb-3" height="40">                        
                        <div class="barlow text-center fs-4">
                            BOOST ENERGY LEVEL
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-3" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                        <img src="icons/sun.svg" class="mb-3" height="40">
                        <div class="barlow text-center fs-4">
                            REDUCE DEPRESSION
                        </div>
                    </div>
                    <div class="col-md-4 text-center mb-3" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                        <img src="icons/weight.svg" class="mb-3" height="40">                
                        <div class="barlow text-center fs-4">
                            AID IN WEIGHT LOSS
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 py-md-5">
            <div class="row">
                <div class="col-md-6 my-auto text-center" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    <img src="images/blog 1.jpg" width="300">
                </div>
                <div class="col-md-6 my-auto" data-sal-duration="1200" data-sal="slide-up" data-sal-delay="300" data-sal-easing="ease-out-bounce">
                    <div class="barlow">BLOG</div>
                    <div class="section-title fs-1">Qui espresso, grounds to go</div>
                    <small class="barlow fs-6">December 12, 2019 | espresso</small>
                    <div class="barlow fs-5 py-3">
                        Skinny cafferine aged variety filter saucer, redeye, sugar sit steamed eu extraction organic. Beans, crema half and half fair trade carajillo in a variety dripper doppio pumpkin spice cup lungo, doppio, est trifecta breve and, rich, extraction, robusta a eu instant. Body sugar steamed, aftertaste, decaffeinated coffee fair trade sit, white shop fair trade galao, dark crema breve frappuccino iced strong siphon trifecta in a at viennese.
                    </div>
                    <div>
                        <a class="text-decoration-none text-dark fw-bold barlow" href="#">READ MORE <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="py-5 bg-dark">
            <div class="container">
                <div class="row justify-content-center text-white">
                    <div class="col-auto col-md-auto pe-4 mb-3">
                        <img src="icons/logo.svg" alt="Logo" class="text-white">
                    </div>
                
                    <div class="col-auto col-md-auto px-4 mb-3">
                        <div class="barlow">
                            2800 S White Mountain Rd | Show Low AZ 85901
                        </div>
                        <div class="barlow">
                            (928) 537-1425 | info@grinder-coffee.com
                        </div>
                        <div class="d-flex flex-row bd-highlight">
                            <div class="p-2 bd-highlight"><i class="fa-brands fa-instagram"></i></div>
                            <div class="p-2 bd-highlight"><i class="fa-brands fa-square-facebook"></i></div>
                        </div>
                    </div>
            
                    <div class="col-12 col-md-auto ps-4 mb-3">
                        <form>
                            <h5 class="barlow">Newsletter</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0 bg-transparent text-white" placeholder="YOUR EMAIL ADDRESS" aria-label="YOUR EMAIL ADDRESS" aria-describedby="button-addon2">
                                <button class="btn btn-warning text-white px-3 rounded-0" type="button" id="button-addon2">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="css/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./node_modules/sal.js/dist/sal.js"></script>
    </body>

    <script>
        const navEl = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 56) {
                navEl.classList.add('navbar-scrolled');
            } else {
                navEl.classList.remove('navbar-scrolled');
            }
        });

        sal();
    </script>
</html>