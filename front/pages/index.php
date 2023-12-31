<!DOCTYPE html>
<html lang="en">
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email value from the form
    $email = $_POST["email"];
    // Database connection settings
    $db_host = "linktechdbserver.database.windows.net"; // Replace with your actual database host
    $db_user = "cisco"; // Replace with your actual database username
    $db_pass = "CompNet1234"; // Replace with your actual database password
    $db_name = "LinkTechDB"; // Replace with your actual database name
    // Create a database connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare and execute the SQL query to insert the email into the database
    $stmt = $conn->prepare("INSERT INTO LinkTechDB (email) VALUES (?)");
    $stmt->bind_param("s", $email); // "s" indicates a string parameter, adjust if needed
    $stmt->execute();
    // Close the statement and connection
    $stmt->close();
    $conn->close();

    // Redirect the user to a success page or show a success message
    header("Location: success_page.html");
    exit;
}
?>
<head> 
    <!-- Primary Meta Tags -->
<title>Jobsapply</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Impact - Landing Page">

<!-- Canonical SEO -->
<link rel="canonical" href="https://www.creative-tim.com/product/impact-design-system" />

<!--  Social tags      -->
<meta name="keywords" content="impact design system, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, impact, impact ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, impact dashboard">
<meta name="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Impact Design System by Themesberg">
<meta itemprop="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

<meta itemprop="image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/impact-design-system/impact-design-system-thumbnail.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@themesberg">
<meta name="twitter:title" content="Impact Design System by Themesberg">

<meta name="twitter:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">
<meta name="twitter:creator" content="@themesberg">
<meta name="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/impact-design-system/impact-design-system-thumbnail.jpg">


<!-- Open Graph data -->
<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Impact Design System by Themesberg" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demo.themesberg.com/impact-design-system/" />
<meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/impact-design-system/impact-design-system-thumbnail.jpg"/>
<meta property="og:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included." />
<meta property="og:site_name" content="Themesberg" />

<!-- Favicon -->
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="../../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Nucleo icons -->
<link rel="stylesheet" href="../../dashboard/assets/vendor/nucleo/css/nucleo.css" type="text/css">

<!-- Prism -->
<link type="text/css" href="../../vendor/prismjs/themes/prism.css" rel="stylesheet">

<!-- Front CSS -->
<link type="text/css" href="../css/front.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-1"></script>
<script>   window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-141734189-1'); </script> -->
</head>

<body>

    <!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary">
        <div class="container">
            <a class="navbar-brand @@logo_classes" href="../../index.html">
                <img class="navbar-brand-dark common" src="../assets/img/brand/light.svg" height="35" alt="Logo light">
                <img class="navbar-brand-light common" src="../assets/img/brand/dark.svg" height="35" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../../index.html">
                                <img src="../assets/img/brand/dark.svg" height="35" alt="Logo Impact">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link">Overview</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                            <span class="nav-link-inner-text">Front pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu" id="pages_submenu">
                            <li><a class="dropdown-item" href="../pages/index.html">Landing</a></li>
                            <li><a class="dropdown-item" href="../pages/about.html">About</a></li>
                            <li><a class="dropdown-item" href="../pages/pricing.html">Pricing</a></li>
                            <li><a class="dropdown-item" href="../pages/contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-controls="pages_submenu" aria-expanded="false" aria-label="Toggle pages menu item">
                            <span class="nav-link-inner-text">App pages</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                        </a>
                        <ul class="dropdown-menu" id="pages_submenu">
                            <li><a class="dropdown-item" href="../../dashboard/pages/dashboards/dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="../../dashboard/pages/examples/login.html">Login</a></li>
                            <li><a class="dropdown-item" href="../../dashboard/pages/examples/register.html">Register</a></li>
                            <li><a class="dropdown-item" href="../../dashboard/pages/examples/profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="../../dashboard/pages/tables/tables.html">Tables</a></li>
                            <li><a class="dropdown-item" href="../../dashboard/pages/maps/google.html">Maps</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block @@cta_button_classes">
                <a href="../../dashboard/pages/examples/login.html" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3"><i class="fas fa-th-large mr-2"></i> Login</a>
                <a href="../pages/pricing.html" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i class="fas fa-paper-plane mr-2"></i> Upgrade to Pro</a>
            </div>
            <div class="d-flex d-lg-none align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                    aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
            </div>
        </div>
    </nav>
</header>
    <main>
<!-- 
        <div class="preloader bg-soft flex-column justify-content-center align-items-center">
    <div class="loader-element">
        <span class="loader-animated-dot"></span>
        <img src="../assets/img/brand/dark-loader.svg" height="40" alt="Impact logo">
    </div>
</div>
-->
        <!-- Hero -->
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 order-2 order-lg-1">
                    <img src="../assets/img/illustrations/feature-illustration.svg" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2">
                          <h1 class="display-2 mb-3">Tools to advance in your career</h1>
                          <p class="lead">LinkTech helps you prepare and apply for jobs easily and get ahead of your competition.</p>
                          <div class="mt-4">
                            <form action="store_email.php" class="d-flex flex-column mb-5 mb-lg-0" method="POST">
                                <input class="form-control my-3" type="email" name="email" placeholder="Your email" required>
                                <button class="btn btn-primary" type="submit">Create your account</button>
                                <div class="form-group form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label form-check-sign-white" for="exampleCheck1">I agree to the <a href="#">Terms & Conditions</a></label>
                                </div>
                            </form>
                          </div>
                      </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>
        <section class="section section-lg pt-6">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4">Meet our intuitive platform</h2>
                        <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5">
                        <h2 class="font-weight-bolder mb-4">Site Audit</h2>
                        <p class="lead">Site Audit crawls all the pages it finds on your website – then provides an overall SEO health score, visualises key data in charts, flags all possible SEO issues and provides recommendations on how to fix them.</p>
                        <p class="lead">Have a huge website? Not an issue.</p>
                        <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <img src="../assets/img/illustrations/hero-illustration.svg" alt="">
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5 order-md-2">
                        <h2 class="font-weight-bolder mb-4">Rank Tracker</h2>
                        <p>We track your desktop and mobile keyword rankings from any location and plot your full ranking history on a handy graph.</p>
                        <p>You can set up automated ranking reports to be sent to your email address, so you’ll never forget to check your ranking progress.</p>
                        <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                            Rank Tracker Tool
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 mr-lg-auto">
                        <img src="../assets/img/illustrations/feature-illustration-2.svg" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">98%</h2>
                                <span>Average satisfaction rating received in the past year</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">24/7</h2>
                                <span> Our support team is a quick chat or email away — 24 hours a day</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">220k+</h2>
                                <span>Extension installs from the two major mobile app stores</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-soft">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4">SEO solutions for every need</h2>
                        <p class="lead">We build best-in-class SEO software for every situation, from our all-in-one SEO platform to tools for local SEO, enterprise SERP analytics, and a powerful API.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="../assets/img/saas-platform-3.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-3">Impact Local</h3>
                                <p class="card-text">Moz Local distributes your business information across the web for maximum search engine visibility.</p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Real-time distribution</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Duplicate closure</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Review management</div> 
                                    </li>
                                </ul>
                                <a href="./about.html" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="../assets/img/saas-platform-4.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-3">Impact Pro</h3>
                                <p class="card-text">Our SEO solution to help you rank higher, drive qualified traffic to your website, and run high-impact SEO campaigns.</p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Keyword & link research</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Technical site audits</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>SEO insights & reporting</div> 
                                    </li>
                                </ul>
                                <a href="./about.html" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-5">
                        <div class="card shadow-soft border-light">
                            <div class="card-header p-0">
                                <img src="../assets/img/saas-platform-5.jpg" class="card-img-top rounded-top" alt="image">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mt-3">Impact STAT</h3>
                                <p class="card-text">STAT offers serious SERP tracking for experts. Track thousands to millions of keywords across any location.</p>
                                <ul class="list-group d-flex justify-content-center mb-4">
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Daily tracking</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Local and mobile SERPs</div>    
                                    </li>
                                    <li class="list-group-item d-flex pl-0 pb-1">
                                        <span class="mr-2"><i class="fas fa-check-circle text-success"></i></span>
                                        <div>Competitor intelligence</div> 
                                    </li>
                                </ul>
                                <a href="./about.html" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg bg-primary text-center text-white">
            <div class="container">
                <div class="row justify-content-center mb-4 mb-lg-6">
                    <div class="col-12">
                        <h1 class="display-3 mb-4 mb-lg-5">The world's most accurate SEO data.</h1>
                        <div class="row text-white">
                            <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                                <div class="card-body text-center bg-primary border-right border-default py-4">
                                    <!-- Heading -->
                                    <h2 class="font-weight-bold">
                                        <span class="h1 mr-2">36.5 trillion</span>
                                    </h2>
                                    <!-- Text -->
                                    <span class="h5 font-weight-normal">links indexed by Link Explorer with our tools</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-md-0 mb-4 mb-lg-0">
                                <div class="card-body text-center bg-primary border-right border-default py-4">
                                    <!-- Heading -->
                                    <h2 class="font-weight-bold">
                                        <span class="h1 mr-2">500 million</span>
                                    </h2>
                                    <!-- Text -->
                                    <span class="h5 font-weight-normal">keyword suggestions in Keyword Explorer</span>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-md-0">
                                <div class="card-body text-center bg-primary py-4">
                                    <!-- Heading -->
                                    <h2 class="font-weight-bold">
                                        <span class="h1 mr-2">250,000</span>
                                    </h2>
                                    <!-- Text -->
                                    <span class="h5 font-weight-normal">local business listings optimized with Moz Local</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <form action="../../dashboard/pages/dashboards/dashboard.html" class="form-group mb-4">
                            <div class="d-flex flex-row justify-content-center">
                                <div class="input-group">
                                    <input class="form-control form-control-xl border-light" placeholder="Enter a domain" type="text">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-secondary rounded-right">Analyze domain</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <span class="small">Impact also offers access to our best-in-class proprietary metrics including Keyword Difficulty, Spam Score, Page Authority, and Domain Authority — the most highly correlated metric with actual Google rankings available today.</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-lg-7">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="h1 font-weight-bolder mb-4">Recommended by leading experts in marketing and SEO</h1>
                        <p class="lead">Our products are loved by users worldwide</p>
                    </div>
                </div>
                <div class="row mb-lg-5">
                    <div class="col-12 col-lg-6">
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="../assets/img/team/profile-picture-1.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                                <span class="h6">- James Curran <small class="ml-0 ml-md-2">General Manager Spotify</small></span>
                            </div>
                        </div>
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="../assets/img/team/profile-picture-2.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                                <span class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Front-end developer Oracle</small></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pt-lg-6">
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="../assets/img/team/profile-picture-4.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                                <span class="h6">- Jose Evans <small class="ml-0 ml-md-2">Chief Engineer Apple</small></span>
                            </div>
                        </div>
                        <div class="customer-testimonial d-flex mb-5">
                            <img src="../assets/img/team/profile-picture-6.jpg" class="image image-sm mr-3 rounded-circle shadow" alt="">
                            <div class="content bg-soft shadow-soft border border-light rounded position-relative p-4">
                                <div class="d-flex mb-4">
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                    <span class="text-warning mr-2"><i class="star fas fa-star"></i></span>
                                </div>
                                <p class="mt-2">"We use Impact mainly for its site explorer, and it’s immensely improved how we find link targets. We use it both for getting quick analysis of a site, as well as utilizing its extensive index when we want to dive deep."</p>
                                <span class="h6">- Richard Thomas <small class="ml-0 ml-md-2">Manager IBM</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="#" class="btn btn-primary animate-up-2"><span class="mr-2"><i class="fas fa-book-open"></i></span> See all stories</a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section section-lg pb-5 bg-soft">
    <div class="container">
        <div class="row"> 
            <div class="col-12 text-center mb-5">
                <h2 class="mb-4">Faster growth starts with Impact</h2>
                <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-mailchimp"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-cpanel"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-dhl"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3 ">
                    <i class="fab fa-github-alt"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray mr-3">
                    <i class="fab fa-aws"></i>
                </a>
                <a href="#" class="icon icon-lg text-gray">
                    <i class="fab fa-node"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <!-- Button Modal -->
                <a href="../../dashboard/pages/dashboards/dashboard.html" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Start 30-days trial</a>
            </div>
        </div> 
    </div>    
</section>
    
        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
    <div class="pattern pattern-soft top"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a class="footer-brand mr-lg-5 d-flex" href="../../index.html">
                    <img src="../assets/img/brand/light.svg" height="35" class="mr-3" alt="Footer logo">
                </a>
                <p class="my-4">Create, prototype, collaborate and turn your ideas into incredible products with the definitive platform for digital design.</p>
                <div class="dropdown mb-4 mb-lg-0">
                    <a id="langsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle footer-language-link">
                        <img src="../assets/img/flags/united-states-of-america.svg" alt="USA Flag" class="language-flag"> English
                        <i class="fas fa-chevron-down ml-1"></i>
                    </a>
                    <div aria-labelledby="langsDropdown" class="dropdown-menu dropdown-menu-center">
                        <a href="#" class="dropdown-item text-gray text-sm"><img src="../assets/img/flags/germany.svg" alt="Germany Flag" class="language-flag"> German</a>
                        <a href="#" class="dropdown-item text-gray text-sm"><img src="../assets/img/flags/spain.svg" alt="Spain Flag" class="language-flag"> Spanish</a>
                        <a href="#" class="dropdown-item text-gray text-sm"><img src="../assets/img/flags/france.svg" alt="France Flag" class="language-flag"> French</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6>Themesberg</h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="https://themesberg.com/blog?ref=creativetim">Blog</a></li>
                    <li><a target="_blank" href="https://themesberg.com/themes?ref=creativetim">Themes</a></li>
                    <li><a target="_blank" href="https://themesberg.com/contact?ref=creativetim">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                <h6>Creative Tim</h6>
                <ul class="links-vertical">
                    <li><a target="_blank" href="https://www.creative-tim.com/blog">Blog</a></li>
                    <li><a target="_blank" href="https://www.creative-tim.com/templates">Products</a></li>
                    <li><a target="_blank" href="https://www.creative-tim.com/support-terms">Support</a></li>
                    <li><a target="_blank" href="https://www.creative-tim.com/license">License</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h6>Subscribe</h6>
                <p class="font-small">The latest Impact news, articles, and resources, sent straight to your inbox every month.</p>
                <form action="#">
                    <div class="form-row">
                        <div class="col-8">
                            <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary btn-block"><span>Subscribe</span></button>
                        </div>
                    </div>
                </form>
                <small class="mt-2 form-text">We’ll never share your details. See our <a href="#" class="font-weight-bold text-underline">Privacy Policy</a></small>
            </div>
        </div>
        <hr class="my-4 my-lg-5">
        <div class="row">
            <div class="col pb-4 mb-md-0">
                <div class="d-flex text-center justify-content-center align-items-center">
                    <p class="font-weight-normal mb-0">© <a href="https://themesberg.com?ref=creativetim*" target="_blank">Themesberg</a> & <a href="https://creative-tim.com">Creative Tim</a> <span class="current-year"></span>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    </main>

    <!-- Core -->
<script src="../../vendor/jquery/dist/jquery.min.js"></script>
<script src="../../vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="../../vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../../vendor/jarallax/dist/jarallax.min.js"></script>
<script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Impact JS -->
<script src="../assets/js/front.js"></script>

    
</body>

</html>
