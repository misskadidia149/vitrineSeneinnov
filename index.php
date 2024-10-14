



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SeneInnov</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/seneinnovFinal.png" rel="icon" />
    <link href="img/seneinnovFinal.png" rel="apple-touch-icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
 
<style>
    /* Team Section */
/* .team-section {
    padding: 50px 0;
    background-color: #fafafa;
    text-align: center;
  }
  
  .team-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 0 auto;
  }
  
  .team-member {
    margin: 20px;
    text-align: center;
  }
  
  .team-member img {
    width: 200px;
    height: 230px;
    border-radius: 50%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }
  
  .team-member:hover img {
    transform: scale(1.05);
  }
  
  /* Responsiveness */
  /* @media screen and (max-width: 768px) {
    .team-container {
      flex-direction: column;
    }
  
    .team-member {
      margin-bottom: 40px;
    }
  }
    */ */

/*** Team ***/
.team-member img {
  width: 100%;
  height: 300px; 
  object-fit: cover; 
  border-radius: 10px; 
}


.team-item:hover img {
    top: -30px;
}

.team-item .team-text {
    position: relative;
    height: 100px;
    transition: .5s;
}

.team-item:hover .team-text {
    margin-top: -60px;
    height: 160px;
}

.team-item .team-text .team-social {
    opacity: 0;
    transition: .5s;
}

.team-item:hover .team-text .team-social {
    opacity: 1;
}

.team-item .team-social .btn {
    display: inline-flex;
    color: var(--primary);
    background: #FFFFFF;
    border-radius: 40px;
}

.team-item .team-social .btn:hover {
    color: #FFFFFF;
    background: var(--primary);
}
.carousel-item img {
    max-height: 300px;
    object-fit: cover;
}

.team-item {
    margin: 0 auto;
}



</style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0" style="color: #FFC000;">SeneInnov</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Accueil</a>
                        <a href="#about" class="nav-item nav-link">A Propos</a>
                        <a href="#feature" class="nav-item nav-link">Fonctionnalités </a>
                        <a href="#telecharger" class="nav-item nav-link">Télécharger</a>
                        <a href="#equipe" class="nav-item nav-link">Equipe </a>
                        <a href="#pricing" class="nav-item nav-link">Tarification </a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- <a href="" class="btn btn-primary-gradient rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start Free Trial</a> -->
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">Bienvenue chez SeneInnov
                                La Révolution de l'Agriculture est en Marche !</h1>
                            <p class="text-white pb-3 animated slideInDown">Chez SeneInnov, nous créons des solutions technologiques innovantes pour améliorer la productivité agricole. Notre robot, SeneBot, automatise le processus de plantation, de gestion des sols, et de suivi des cultures pour simplifier le quotidien des agriculteurs.</p>
                            <a href="info.html" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill me-3 animated slideInLeft">Savoir Plus</a>
                            <a href="#contact" class="btn btn-secondary-gradient py-sm-3 px-4 px-sm-5 rounded-pill animated slideInRight">Contacter</a>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel screenshot-carousel">
                                <img class="img-fluid" src="img/Splah Screen.png" alt="">
                                <img class="img-fluid" src="img/acceuilApp.jpg" alt="">
                                <img class="img-fluid" src="img/connexionApp.jpg" alt="">
                                <img class="img-fluid" src="img/dataApp.jpg" alt="">
                                <img class="img-fluid" src="img/controlApp.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- About Start -->
        <div class="container-xxl py-5" id="about">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">A Propos</h5>
                        <h1 class="mb-4">Technologie pour l'Agriculture au Mali</h1>
                        <p class="mb-4">
                            SeneInnov simplifie les tâches agricoles grâce à son robot intelligent, SeneBot. De la plantation à l'analyse des sols, notre technologie aide les agriculteurs à maximiser leur rendement tout en optimisant leurs ressources.</p>
                        <a href="info.html" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Savoir plus</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" src="img/Capture_d_écran_2024-09-25_180031-removebg-preview.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Features Start -->
        <div class="container-xxl py-5" id="feature">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">SeneBot</h5>
                    <h1 class="mb-5">Fonctionnalités Clés</h1>
                </div>
        <!-- Screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Application Mobile SeneInnov</h5>
                        <h1 class="mb-4">Interface Intuitive et Contrôle Facile des Robots Agricoles</h1>
                        <p class="mb-4">SeneInnov propose une interface mobile conviviale, permettant aux agriculteurs de contrôler facilement leurs outils robotiques, de surveiller le semis, l'analyse du sol et d'optimiser la productivité de leur exploitation en quelques taps seulement</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Plantation automatique</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Contrôle à distance</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Analyse des sols</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Recommandations Personnalisées </p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>Informations sur les données météorologique  </p>
                        <a href="info.html" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Savoir Plus</a>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <img class="img-fluid" src="img/acceuilApp.jpg" alt="">
                            <img class="img-fluid" src="img/tableauApp.jpg" alt="">
                            <img class="img-fluid" src="img/Android Large - 29.png" alt="">
                            <img class="img-fluid" src="img/Android Large - 24.png" alt="">
                            <img class="img-fluid" src="img/Android Large - 54.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Screenshot End -->


    


        <!-- Download Start -->
        <div class="container-xxl py-5" id="telecharger">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="img/Capture_d_écran_2024-09-25_180031-removebg-preview.png"  style="object-fit: cover; width: 100%; height: 100%;">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Téléchargez</h5>
                        <h1 class="mb-4">Téléchargez la Dernière Version de Notre Application</h1>
                        <p class="mb-4">Rendez-vous sur votre store d'applications pour télécharger la dernière version de SeneInnov. Profitez de toutes les nouvelles fonctionnalités et améliorations pour optimiser votre expérience agricole. Ne manquez pas les mises à jour régulières qui garantissent le meilleur service possible et une performance optimale.</p>
                        <div class="row g-2">
                            
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.7s">
    <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4 align-items-center justify-content-center">
        <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
        <div class="ms-3 text-center">
            <p class="text-white mb-0">Disponible Sur</p>
            <h5 class="text-white mb-0">Play Store</h5>
        </div>
    </a>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->

<!-- equipe -->
    <div class="container-xxl py-5" id="equipe" >
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1>Equipe SeneInnov</h1>
        </div>

        <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="row">
                        <div class="col-lg-4 col-md-8">
                            <div  class="team-item position-relative rounded overflow-hidden">
                                <div class=" overflow-hidden" >
                                    <img class="img-fluid" src="img/mass-removebg-preview.png" alt=""  style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                                <div class="team-text bg-light text-center p-4" >
                                    <h5>Massila KONE</h5>
                                    <p class="text-primary">Ingénieur Systèmes Embarqués</p>                             
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href="https://www.facebook.com/massila.kone.1"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="https://x.com/mass_boua?t=pfSefrDPZOCYW6-b3YQymg&s=08 "><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href="https://www.linkedin.com/in/massila-kone-160b38203/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="img/maary3.jpg" alt=""  style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Mary TRAORE</h5>
                                    <p class="text-primary">Developpeur & Big Data/IA</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href="https://www.facebook.com/mary.traore.3998263?mibextid=qi2Omg&rdid=2K6HDk7I2GPKxK3x&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2FKWEMds89a1bomzoC%2F%3Fmibextid%3Dqi2Omg"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="https://x.com/MaryTRAORE11?t=KqzzjObVQIvp5LO6cVJRWA&s=09"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href="https://www.linkedin.com/in/mary-traore?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app "><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden" >
                                    <img class="img-fluid" src="img/didia.jpg" alt=""  style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Kadidiatou DIALLO</h5>
                                    <p class="text-primary">Developpeur Web & Designer</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href="https://www.facebook.com/profile.php?id=100070956996509&mibextid=LQQJ4d"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="https://x.com/misskadidia149"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href="https://www.linkedin.com/in/kadidiatou-diallo-b60742294/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="img/van3.jpg" alt=""  style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Modibo CISSE</h5>
                                    <p class="text-primary">Electronicien & Developpeur</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href="https://www.facebook.com/modibo.cisse.1272"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="https://x.com/ModiboCisse99?t=kdSCwFMcuOypQBXCG8QAjw&s=08 "><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href="https://www.linkedin.com/in/modibo-cisse-3b898b27b?trk=contact-info "><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="team-item position-relative rounded overflow-hidden">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="img/Mariam-removebg-preview.png" alt=""  style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                                <div class="team-text bg-light text-center p-4">
                                    <h5>Maraim CISSE</h5>
                                    <p class="text-primary">Developpeur & Designer</p>
                                    <div class="team-social text-center">
                                        <a class="btn btn-square" href="https://www.facebook.com/CisseMariam223/"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square" href="https://x.com/cissmaria223"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square" href="https://www.linkedin.com/in/mariam-ciss%C3%A9-0a6504327/"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

             
            </div>

            <!-- Control buttons for the carousel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- fin equipe  -->
        <!-- Pricing Start -->
        <div class="container-xxl py-5" id="pricing">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Plan Tarification</h5>
                    <h1 class="mb-5">Choisissez Votre Plan</h1>
                </div>
                <div class="tab-class text-center pricing wow fadeInUp" data-wow-delay="0.1s">
    <div class="tab-content text-start">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="bg-light rounded">
                        <div class="border-bottom p-4 mb-4">
                            <h4 class="text-primary-gradient mb-1" id="plan-title">Location de Base</h4>
                            <span>Pour un Usage Occasional</span>
                        </div>
                        
                        <div class="p-4 pt-0">
                            <h1 class="mb-3">30 000 <small class="align-top" style="font-size: 22px; line-height: 45px;">F CFA</small></h1>
                            <div class="d-flex justify-content-between mb-3"><span>Accès à un robot agricole pour 24 heures</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Fonctionnalités complètes incluant analyse du sol</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Assistance technique par téléphone</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <a href="#contact" type="button" class="btn btn-primary-gradient rounded-pill py-3 px-5" onclick="selectPlan('Location de Base')">Commencer</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded">
                        <div class="border-bottom p-4 mb-4">
                            <h4 class="text-primary-gradient mb-1" id="locationavance">Location Avancée</h4>
                            <span>Pour un Usage Fréquent</span>
                        </div>
                        <div class="p-4 pt-0">
                            <h1 class="mb-3">85 000 <small class="align-top" style="font-size: 22px; line-height: 45px;">F CFA</small></h1>
                            <div class="d-flex justify-content-between mb-3"><span>Accès au robot agricol pour 3 jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Toutes les fonctionnalités, y compris recommandations personnalisées analyse du sol</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Support technique prioritaire</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <a type="button" class="btn btn-primary-gradient rounded-pill py-3 px-5" onclick="selectPlan('Location Avancée')">Commencer</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light rounded">
                        <div class="border-bottom p-4 mb-4">
                            <h4 class="text-primary-gradient mb-1" id="locationpremium">Location Premium</h4>
                            <span>Pour un Usage Intensif</span>
                        </div>
                        <div class="p-4 pt-0">
                            <h1 class="mb-3">205 000 <small class="align-top" style="font-size: 18px; line-height: 45px;">F CFA</small></h1>
                            <div class="d-flex justify-content-between mb-3"><span>Accès illimité au robot pendant 7 jours</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Toutes les fonctionnalités, y compris recommandations personnalisées</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>
                            <!-- <div class="d-flex justify-content-between mb-2"><span>Analyses détaillées et conseils d'experts</span><i class="fa fa-check text-primary-gradient pt-1"></i></div> -->
                            <div class="d-flex justify-content-between mb-3"><span>Support technique prioritaire</span><i class="fa fa-check text-primary-gradient pt-1"></i></div>

                            <button type="button" class="btn btn-primary-gradient rounded-pill py-3 px-5" onclick="selectPlan('Location Premium')">Commencer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <!-- <div class="container-xxl py-5" id="review">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Testimonial</h5>
                    <h1 class="mb-5">What Say Our Clients!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div class="ms-4">
                                <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/dija.jpg" style="width: 85px; height: 85px;">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                              
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-2.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-3.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="d-flex align-items-center mb-4">
                            <img class="img-fluid bg-white rounded flex-shrink-0 p-1" src="img/testimonial-4.jpg" style="width: 85px; height: 85px;">
                            <div class="ms-4">
                                <h5 class="mb-1">Client Name</h5>
                                <p class="mb-1">Profession</p>
                                <div>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                    <small class="fa fa-star text-warning"></small>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact-form-section">
            <div class="container py-5 px-lg-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Entrons en Contact !</h1>
                </div>
               <!-- Formulaire -->
<form action="index.php" method="post" id="contactForm">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Entrez votre nom ici">
                            <label for="name">Votre Nom</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse e-mail ici">
                            <label for="email">Votre Email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="subject" placeholder="Indiquez l'objet de votre message">
                            <label for="subject">Objet</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Écrivez votre message ici" id="message" style="height: 150px"></textarea>
                            <label for="message">Laissez un message ici</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button id="submitBtn" class="btn btn-primary-gradient rounded-pill py-3 px-5" type="button">Envoyer</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Addresse</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Mali, Bamako ACI 2000</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+223 94 89 37 96</p>
                        <p><i class="fa fa-envelope me-3"></i>SeneInnov@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/search/top/?q=seneinnov"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/seneinnov223/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/sen%C3%A8innov-mali-b470b6325/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Liens Rapides</h4>
                        <a class="btn btn-link" href="">A propos de nous</a>
                        <a class="btn btn-link" href="">Contacter</a>
                        <a class="btn btn-link" href="">Politique de Confidentialité</a>
                        <a class="btn btn-link" href="">Termes & Conditions</a>
                    </div>
                    <!-- <div class="col-md-6 col-lg-3">
                        <h4 class="text-white mb-4">Newsletter</h4>
                        <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                      
                    </div> -->
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">SeneInnov</a>,Tous Droits reservés. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

    <script>
        // Définir la fonction selectPlan ici si elle n'est pas dans main.js
        function selectPlan(plan) {
            // Mettre à jour le champ "Objet"
            document.getElementById('subject').value = 'Plan choisi: ' + plan;

            // Afficher le formulaire de contact
            document.getElementById('contact-form-section').style.display = 'block';

            // Défilement fluide vers le formulaire
            $('html, body').animate({
                scrollTop: $('#contact-form-section').offset().top - 45
            }, 1500, 'easeInOutExpo');
        }
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>