<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($pageTitle ?? 'Home | Royal Mail Group Ltd') ?></title>
    <meta name="description" content="<?= esc($metaDescription ?? 'Send letters and parcels with Royal Mail. Track your delivery, find prices and book collections.') ?>">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
    <!-- Skip to main content -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Header -->
    <header class="header-section">
        <!-- Top Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href="<?= base_url('/') ?>">
                    <img src="<?= base_url('assets/images/logo/rmg_logo.svg') ?>" alt="Royal Mail Group" height="40">
                </a>

                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Main Navigation -->
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Personal Dropdown -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="personalDropdown" role="button" data-bs-toggle="dropdown">
                                Personal
                            </a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="dropdown-header">Sending</h6>
                                            <a class="dropdown-item" href="#">UK delivery prices</a>
                                            <a class="dropdown-item" href="#">International delivery prices</a>
                                            <a class="dropdown-item" href="#">Return to retailers</a>
                                            <a class="dropdown-item" href="#">Same day delivery</a>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="dropdown-header">Receiving</h6>
                                            <a class="dropdown-item" href="<?= base_url('track') ?>">Tracking</a>
                                            <a class="dropdown-item" href="#">Redelivery</a>
                                            <a class="dropdown-item" href="#">Paying fees</a>
                                            <a class="dropdown-item" href="#">Redirection</a>
                                            <a class="dropdown-item" href="#">Holding mail with KeepSafe</a>
                                            <a class="dropdown-item" href="#">PO Box</a>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="promo-card">
                                                <img src="<?= base_url('assets/images/promos/nav_personal_promo_health.jpg') ?>" alt="Royal Mail Health" class="img-fluid">
                                                <h6>Royal Mail Health</h6>
                                                <p>Delivering care to your doorstep</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="quick-links">
                                                <h6 class="dropdown-header">Quick Links</h6>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-paper-plane"></i> Send an item
                                                </a>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-search-location"></i> Find a postcode
                                                </a>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-calendar-alt"></i> Book a collection
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Business Dropdown -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="businessDropdown" role="button" data-bs-toggle="dropdown">
                                Business
                            </a>
                            <div class="dropdown-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="dropdown-header">Shipping</h6>
                                            <a class="dropdown-item" href="#">Parcel deliveries</a>
                                            <a class="dropdown-item" href="#">Mail delivery</a>
                                            <a class="dropdown-item" href="#">UK business delivery prices</a>
                                            <a class="dropdown-item" href="#">International business shipping</a>
                                            <a class="dropdown-item" href="#">Same day delivery</a>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="dropdown-header">Receiving</h6>
                                            <a class="dropdown-item" href="<?= base_url('track') ?>">Track</a>
                                            <a class="dropdown-item" href="#">Redeliver</a>
                                            <a class="dropdown-item" href="#">Returns</a>
                                            <a class="dropdown-item" href="#">Hold my mail</a>
                                            <a class="dropdown-item" href="#">Business PO Boxes</a>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="promo-card">
                                                <img src="<?= base_url('assets/images/promos/nav_business_promos_sme.jpg') ?>" alt="Small business hub" class="img-fluid">
                                                <h6>Small business hub</h6>
                                                <p>Helping you achieve your goals</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="quick-links">
                                                <h6 class="dropdown-header">Quick Links</h6>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-paper-plane"></i> Send an item
                                                </a>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-search-location"></i> Find a postcode
                                                </a>
                                                <a href="#" class="quick-link-item">
                                                    <i class="fas fa-truck"></i> Track a delivery
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Stamps & supplies -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold" href="#" id="stampsDropdown" role="button" data-bs-toggle="dropdown">
                                Stamps & supplies
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">1st and 2nd Class Stamps</a></li>
                                <li><a class="dropdown-item" href="#">International Postage</a></li>
                                <li><a class="dropdown-item" href="#">Special stamp issues</a></li>
                                <li><a class="dropdown-item" href="#">Subscriptions and gifts</a></li>
                            </ul>
                        </li>
                    </ul>

                    <!-- Right side navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('admin/login') ?>">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary ms-2" href="#">Send an item</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="hero-title">SEND IT<br>YOUR WAY</h1>
                        <ul class="hero-features">
                            <li><i class="fas fa-check"></i> Trusted to deliver your mail for 500 years</li>
                            <li><i class="fas fa-check"></i> Over 130,000 drop off points nationwide</li>
                            <li><i class="fas fa-check"></i> Lowest reported carbon footprint per parcel delivery in the UK</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <!-- Tabs for Send/Track -->
                        <div class="hero-tabs">
                            <ul class="nav nav-tabs" id="heroTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="send-tab" data-bs-toggle="tab" data-bs-target="#send" type="button" role="tab">
                                        Send
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="track-tab" data-bs-toggle="tab" data-bs-target="#track" type="button" role="tab">
                                        Track
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="heroTabsContent">
                                <div class="tab-pane fade show active" id="send" role="tabpanel">
                                    <div class="send-form">
                                        <h5>What are you looking to send?</h5>
                                        <p class="mb-3">Select an item from 87p</p>

                                        <!-- Item Selector Dropdown -->
                                        <div class="item-selector-dropdown mb-4">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-secondary dropdown-toggle w-100 text-start item-dropdown-btn" type="button" id="itemDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="selected-item">Choose your item type</span>
                                                    <span class="selected-price ms-auto"></span>
                                                </button>
                                                <ul class="dropdown-menu w-100 item-dropdown-menu" aria-labelledby="itemDropdown">
                                                    <li><a class="dropdown-item item-option" href="#" data-item="Letter - up to 100g" data-price="from £0.87">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <strong>Letter</strong><br>
                                                                    <small class="text-muted">up to 100g</small>
                                                                </div>
                                                                <span class="price-tag">from £0.87</span>
                                                            </div>
                                                        </a></li>
                                                    <li><a class="dropdown-item item-option" href="#" data-item="Large letter - up to 750g" data-price="from £1.55">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <strong>Large letter</strong><br>
                                                                    <small class="text-muted">up to 750g</small>
                                                                </div>
                                                                <span class="price-tag">from £1.55</span>
                                                            </div>
                                                        </a></li>
                                                    <li><a class="dropdown-item item-option" href="#" data-item="Small parcel - up to 2kg" data-price="from £3.35">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <strong>Small parcel</strong><br>
                                                                    <small class="text-muted">up to 2kg</small>
                                                                </div>
                                                                <span class="price-tag">from £3.35</span>
                                                            </div>
                                                        </a></li>
                                                    <li><a class="dropdown-item item-option" href="#" data-item="Medium parcel - up to 20kg" data-price="from £4.95">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <strong>Medium parcel</strong><br>
                                                                    <small class="text-muted">up to 20kg</small>
                                                                </div>
                                                                <span class="price-tag">from £4.95</span>
                                                            </div>
                                                        </a></li>
                                                    <li><a class="dropdown-item item-option" href="#" data-item="Tube - up to 20kg" data-price="from £4.95">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <strong>Tube</strong><br>
                                                                    <small class="text-muted">up to 20kg</small>
                                                                </div>
                                                                <span class="price-tag">from £4.95</span>
                                                            </div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-primary btn-lg w-100">
                                            <i class="fas fa-paper-plane me-2"></i> Send your item
                                        </a>

                                        <div class="additional-links mt-3">
                                            <p class="mb-2"><a href="#" class="text-decoration-none">Already have a label? Arrange a collection only</a></p>
                                            <div class="d-flex gap-3">
                                                <a href="#" class="text-decoration-none small">UK delivery prices</a>
                                                <a href="#" class="text-decoration-none small">International prices</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="track" role="tabpanel">
                                    <div class="track-form">
                                        <h5>Track an Item</h5>
                                        <form action="<?= base_url('track') ?>" method="post">
                                            <?= csrf_field() ?>
                                            <div class="mb-3">
                                                <label for="trackingNumber" class="form-label">Tracking reference number *</label>
                                                <input type="text" class="form-control form-control-lg" id="trackingNumber" name="tracking_number" placeholder="Enter tracking number" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                                <i class="fas fa-search me-2"></i> Track your delivery
                                            </button>
                                        </form>
                                        <p class="mt-3 text-center"><a href="#" class="text-decoration-none">Missed your delivery?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Links Section -->
        <section class="quick-links-section py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="quick-link-card">
                            <img src="<?= base_url('assets/images/icons/parcel_collect.svg') ?>" alt="Drop Off Points" class="quick-link-icon">
                            <h5>Drop Off Points</h5>
                            <p>Buy postage and choose to drop off at Parcel Lockers, Collect+ Parcelshops or Postboxes.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="quick-link-card">
                            <img src="<?= base_url('assets/images/icons/moving_home.svg') ?>" alt="Moving home?" class="quick-link-icon">
                            <h5>Moving home?</h5>
                            <p>Let's make sure all your mail reaches you.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="quick-link-card">
                            <img src="<?= base_url('assets/images/icons/return_item.svg') ?>" alt="Return an item" class="quick-link-icon">
                            <h5>Return an item</h5>
                            <p>Something not right? We'll collect and take it back for you.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="quick-link-card">
                            <img src="<?= base_url('assets/images/icons/missed_delivery.svg') ?>" alt="Missed a delivery?" class="quick-link-icon">
                            <h5>Missed a delivery?</h5>
                            <p>Arrange to have your item redelivered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Special Stamps Promo -->
        <section class="special-stamps-section py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="promo-content">
                            <h2>The Chronicles<br>of Narnia<br>Special Stamps</h2>
                            <p class="lead">New stamps celebrate 75 years since the release of <em>The Lion, the Witch and the Wardrobe</em></p>
                            <a href="#" class="btn btn-primary btn-lg">Buy now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?= base_url('assets/images/promos/narnia-special-stamps.png') ?>" alt="Chronicles of Narnia Stamps" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section py-5">
            <div class="container">
                <h2 class="text-center mb-5">Let's find the right service for you</h2>
                <div class="row g-4">
                    <!-- Sending mail or parcels -->
                    <div class="col-lg-6">
                        <div class="service-card h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/services/sending.png') ?>" alt="Sending mail" class="img-fluid h-100 object-cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5>Sending mail or parcels?</h5>
                                        <p>Quick, convenient, and available seven days a week. Start sending your letters from as little as 87p and parcels from £3.35.</p>
                                        <div class="service-links">
                                            <a href="#" class="service-link">UK delivery prices</a>
                                            <a href="#" class="service-link">International delivery prices</a>
                                            <a href="#" class="service-link">Find a postcode</a>
                                            <a href="#" class="service-link">View all sending services</a>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary mt-3">
                                            <i class="fas fa-paper-plane"></i> Send your item
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Receiving mail -->
                    <div class="col-lg-6">
                        <div class="service-card h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/services/receiving.png') ?>" alt="Receiving mail" class="img-fluid h-100 object-cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5>Receiving mail</h5>
                                        <p>Out and about? Not to worry. Track and manage how you receive mail and deliveries.</p>
                                        <div class="service-links">
                                            <a href="<?= base_url('track') ?>" class="service-link">Track</a>
                                            <a href="#" class="service-link">Redeliver</a>
                                            <a href="#" class="service-link">Redirect your mail</a>
                                            <a href="#" class="service-link">Pay a fee</a>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary mt-3">
                                            <i class="fas fa-shield-alt"></i> Hold your mail
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Selling online -->
                    <div class="col-lg-6">
                        <div class="service-card h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/services/selling_online.png') ?>" alt="Selling online" class="img-fluid h-100 object-cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5>Regularly selling online?</h5>
                                        <p>If you're a Marketplace seller, you can benefit from putting all your orders into a Click & Drop account.</p>
                                        <ul class="service-features">
                                            <li>Integrated with most popular stores including Amazon, eBay, Shopify and many more</li>
                                            <li>Supports multiple accounts</li>
                                            <li>Print postage from your desk</li>
                                            <li>Use our collection service, or drop off at a convenient location</li>
                                        </ul>
                                        <a href="#" class="btn btn-outline-primary">See how this can help you</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Create account -->
                    <div class="col-lg-6">
                        <div class="service-card h-100">
                            <div class="row g-0 h-100">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/services/register.jpg') ?>" alt="Create account" class="img-fluid h-100 object-cover">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5>Make things a bit easier for yourself</h5>
                                        <p>Track and manage your deliveries with a Personal Account.</p>
                                        <a href="#" class="btn btn-primary">Sign up now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Help Section -->
        <section class="help-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Help is on the way</h2>
                <p class="text-center mb-5">We have plenty of useful features to help make your day that little bit easier</p>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="help-card">
                            <img src="<?= base_url('assets/images/help/parcel_collect.jpg') ?>" alt="Parcel Collect" class="img-fluid">
                            <div class="help-card-body">
                                <h5>Parcel Collect</h5>
                                <p>If you can't get out to drop off your parcel we can collect it</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="help-card">
                            <img src="<?= base_url('assets/images/help/royal_mail_health.jpg') ?>" alt="Royal Mail Health" class="img-fluid">
                            <div class="help-card-body">
                                <h5>Royal Mail Health</h5>
                                <p>NHS prescriptions delivered to your doorstep</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="help-card">
                            <img src="<?= base_url('assets/images/help/help_support.jpg') ?>" alt="Help & Support" class="img-fluid">
                            <div class="help-card-body">
                                <h5>Help & Support</h5>
                                <p>Visit our help centre for everything Royal Mail</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sustainability Banner -->
        <section class="sustainability-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="<?= base_url('assets/images/sustainability/sustainability_mobile.jpg') ?>" alt="Sustainability at Royal Mail" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="sustainability-content">
                            <h2>The UK's greenest delivery option* for letters and parcels</h2>
                            <p><small>*Based on publicly available reported gCO2e per parcel from other UK parcel operators.</small></p>
                            <a href="#" class="btn btn-primary">Find out more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section bg-dark text-light py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Tools -->
                <div class="col-lg-3 col-md-6">
                    <h5>Tools</h5>
                    <ul class="footer-links">
                        <li><a href="<?= base_url('track') ?>">Track your item</a></li>
                        <li><a href="#">Postcode finder</a></li>
                        <li><a href="#">Price finder</a></li>
                        <li><a href="#">Online postage</a></li>
                        <li><a href="#">Book a Redelivery</a></li>
                        <li><a href="#">Get the Royal Mail App</a></li>
                    </ul>
                </div>

                <!-- Help and info -->
                <div class="col-lg-3 col-md-6">
                    <h5>Help and info</h5>
                    <ul class="footer-links">
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help and support</a></li>
                        <li><a href="#">Collect a missed delivery</a></li>
                        <li><a href="#">I think my mail is lost</a></li>
                        <li><a href="#">Service updates</a></li>
                        <li><a href="#">How to make a claim</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Dog Awareness</a></li>
                        <li><a href="#">The future of letter deliveries</a></li>
                        <li><a href="#">Scam guidance</a></li>
                    </ul>
                </div>

                <!-- Mail -->
                <div class="col-lg-3 col-md-6">
                    <h5>Mail</h5>
                    <ul class="footer-links">
                        <li><a href="#">UK services</a></li>
                        <li><a href="#">International services</a></li>
                        <li><a href="#">The Stamp Hub</a></li>
                        <li><a href="#">Our prices</a></li>
                        <li><a href="#">Redirect your mail</a></li>
                    </ul>
                </div>

                <!-- Our partners -->
                <div class="col-lg-3 col-md-6">
                    <h5>Our partners</h5>
                    <ul class="footer-links">
                        <li><a href="#">Parcelforce Worldwide</a></li>
                        <li><a href="#">Stamp retailers</a></li>
                        <li><a href="#">British Heart Foundation</a></li>
                        <li><a href="#">Keep Me Posted</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Links -->
            <div class="row mt-5">
                <div class="col-12">
                    <div class="social-links text-center">
                        <h5>Royal Mail social links</h5>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="row mt-5 pt-4 border-top">
                <div class="col-md-6">
                    <div class="safe-space">
                        <img src="<?= base_url('assets/images/footer/SafeSpace-logo.png') ?>" alt="Together we will end domestic abuse" height="30">
                        <p class="mt-2">Together we can end domestic abuse</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="footer-bottom-links">
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">International Distribution Services</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Cymraeg</a></li>
                    </ul>
                    <p class="copyright mt-3">© Royal Mail Group Limited 2025</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>