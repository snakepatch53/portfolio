<!doctype html>
<html lang="en">

<head>
    <?php include('./src/frontend/components/head.php') ?>
    <title><?= $_['PAGE1_HOME_TITLE'] . " - Portafolio " . $_ME['name'] ?></title>
</head>

<body>
    <header>
        <?php include('./src/frontend/components/header.php') ?>
    </header>

    <main>
        <!-- Home -->
        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="hero-text">
                            <div class="hero-title-wrap d-flex align-items-center mb-4">
                                <img style="object-position: top;" src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-6.jpg" class="avatar-image avatar-image-large img-fluid" alt="Mi foto">

                                <h1 class="hero-title ms-3 mb-0"><?= $_['PAGE1_HOME_CHAT_MSG_1'] ?></h1>
                            </div>

                            <h2 class="mb-4"><?= $_['PAGE1_HOME_CHAT_MSG_2'] ?></h2>
                            <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2"><?= $_['PAGE1_HOME_BTN_LETS_BEGIN'] ?></a></p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 position-relative">
                        <div class="hero-image-wrap"></div>
                        <img src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-12.png" class="hero-image img-fluid" alt="Mi foto">
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path>
            </svg>
        </section>

        <!-- About -->
        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="<?= $_ENV['STATIC_PATH'] ?>images//me/harold-10.jpg" class="about-image img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">
                            <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                                <h2 class="text-white me-4 mb-0"><?= $_['PAGE1_ABOUT_STORY'] ?></h2>
                                <img style="object-position: top;" src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-6.jpg" class="avatar-image img-fluid" alt="">
                            </div>
                            <h3 class="pt-2 mb-3"><?= $_['PAGE1_ABOUT_ABOUT'] . " " . $_ME['name'] ?></h3>
                            <p><?= $_ME['story'][$lang] ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="profile-thumb">
                            <div class="profile-title">
                                <h4 class="mb-0"><?= $_['PAGE1_ABOUT_INFORMATION'] ?></h4>
                            </div>
                            <div class="profile-body">
                                <p>
                                    <span class="profile-small-title"><?= $_['PAGE1_ABOUT_NAME'] ?></span>
                                    <span><?= $_ME['name'] . " " . $_ME['lastname'] ?></span>
                                </p>
                                <p>
                                    <span class="profile-small-title"><?= $_['PAGE1_ABOUT_BIRTHDAY'] ?></span>
                                    <span><?= $_ME['birthday'][$lang] ?></span>
                                </p>
                                <p>
                                    <span class="profile-small-title"><?= $_['PAGE1_ABOUT_PHONE'] ?></span>
                                    <span><a href="tel: <?= $_ME['phone'] ?>"><?= $_ME['phone'] ?></a></span>
                                </p>
                                <p>
                                    <span class="profile-small-title"><?= $_['PAGE1_ABOUT_EMAIL'] ?></span>
                                    <span><a href="<?= $_ME['email'] ?>"><?= $_ME['email'] ?></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="about-thumb">
                            <div class="row">
                                <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                    <strong class="featured-numbers"><?= $_ME['xp_years'] ?></strong>

                                    <p class="featured-text"><?= $_['PAGE1_ABOUT_XP_YEARS'] ?></p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                    <strong class="featured-numbers"><?= $_ME['happy_customers'] ?></strong>
                                    <p class="featured-text"><?= $_['PAGE1_ABOUT_HAPPY_CUSTOMERS'] ?></p>
                                </div>

                                <div class="col-lg-6 col-6 pt-4">
                                    <strong class="featured-numbers"><?= $_ME['finished_projects'] ?></strong>

                                    <p class="featured-text"><?= $_['PAGE1_ABOUT_PROJECTS'] ?></p>
                                </div>

                                <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                    <strong class="featured-numbers"><?= $_ME['academic_awards'] ?></strong>

                                    <p class="featured-text"><?= $_['PAGE1_ABOUT_ACADEMIC_AWARDS'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clients section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-12">
                        <h3 class="text-center mb-5"><?= $_['PAGE1_ABOUT_COMPANIES_WORKED'] ?></h3>
                    </div>
                    <div class="col-lg-2 col-4 ms-auto clients-item-height">
                        <img src="<?= get_img_path($_ME['client_logo1']) ?>" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="<?= get_img_path($_ME['client_logo2']) ?>" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="<?= get_img_path($_ME['client_logo3']) ?>" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 clients-item-height">
                        <img src="<?= get_img_path($_ME['client_logo4']) ?>" class="clients-image img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-4 me-auto clients-item-height">
                        <img src="<?= get_img_path($_ME['client_logo5']) ?>" class="clients-image img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="services section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-9.jpg" class="avatar-image img-fluid" alt="">
                            <h2 class="text-white ms-4 mb-0"><?= $_['PAGE1_SKILLS_TITLE'] ?></h2>
                        </div>
                        <div class="row pt-lg-5">
                            <?php foreach ($_ME['skills'] as $key => $value) { ?>
                                <div class="col-lg-6 col-12">
                                    <div class="services-thumb">
                                        <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                            <h3 class="mb-0"><?= $value['name'] ?></h3>

                                            <div class="services-price-wrap ms-auto">
                                                <p class="services-price-text mb-0"><?= $value['level'] ?></p>
                                                <div class="services-price-overlay"></div>
                                            </div>
                                        </div>
                                        <p><?= $value['description'][$lang] ?></p>
                                        <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                            <i class="services-icon <?= $value['fontawesome'] ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects -->
        <section class="projects section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12 ms-auto">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                            <img src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-13.jpg" class="avatar-image img-fluid" alt="">
                            <h2 class="text-white ms-4 mb-0"><?= $_['PAGE1_PROJECTS_TITLE'] ?></h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <?php foreach ($_ME['projects'] as $key => $value) { ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="projects-thumb">
                                <div class="projects-info">
                                    <small class="projects-tag"><?= $value['client'] ?></small>

                                    <h3 class="projects-title"><?= $value['name'][$lang] ?></h3>
                                </div>

                                <a href="<?= get_img_path($value['img']) ?>" class="popup-image">
                                    <img src="<?= get_img_path($value['img']) ?>" class="projects-image img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="contact section-padding" id="section_5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12">
                        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                            <img src="<?= $_ENV['STATIC_PATH'] ?>images/me/harold-8.jpg" class="avatar-image img-fluid" alt="">
                            <h2 class="text-white ms-4 mb-0"><?= $_['PAGE1_CONTACT_TITLE'] ?></h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                        <div class="contact-info contact-info-border-start d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3"><?= $_['PAGE1_CONTACT_SERVICES'] ?></strong>
                            <ul class="footer-menu">
                                <?php foreach ($_ME['contact_services'] as $key => $value) { ?>
                                    <li class="footer-menu-item"><a class="footer-menu-link"><?= $value[$lang] ?></a></li>
                                <?php } ?>
                            </ul>
                            <strong class="site-footer-title d-block mt-4 mb-3"><?= $_['PAGE1_CONTACT_SOCIAL'] ?></strong>
                            <ul class="social-icon">
                                <?php foreach ($_ME['social_media'] as $key => $value) { ?>
                                    <li class="social-icon-item">
                                        <a href="<?= $value['link'] ?>" class="social-icon-link <?= $value['fontawesome'] ?>" target="_blank"></a>
                                    </li>
                                <?php } ?>
                            </ul>
                            <strong class=" site-footer-title d-block mt-4 mb-3"><?= $_['PAGE1_CONTACT_START_PROJECT'] ?></strong>
                            <p class="mb-0"><?= $_['PAGE1_CONTACT_START_PROJECT_DESC'] ?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                        <div class="contact-info d-flex flex-column">
                            <strong class="site-footer-title d-block mb-3"><?= $_['PAGE1_CONTACT_ABOUT'] ?></strong>
                            <p class="mb-2"><?= $_ME['contact_about_me'][$lang] ?></p>
                            <strong class="site-footer-title d-block mt-4 mb-3"><?= $_['PAGE1_CONTACT_EMAIL'] ?></strong>
                            <p><a href="mailto:<?= $_ME['email'] ?>"><?= $_ME['email'] ?></a></p>
                            <strong class="site-footer-title d-block mt-4 mb-3"><?= $_['PAGE1_CONTACT_CALL'] ?></strong>
                            <p class="mb-0"><a href="tel:<?= $_ME['phone'] ?>"><?= $_ME['phone'] ?></a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <form action="#" method="get" class="custom-form contact-form" role="form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                        <label for="floatingInput"><?= $_['PAGE1_CONTACT_FORM_NAME'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                        <label for="floatingInput"><?= $_['PAGE1_CONTACT_FORM_EMAIL'] ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">
                                        <label class="form-check-label" for="inlineCheckbox1">
                                            <i class="bi-globe form-check-icon"></i>
                                            <span class="form-check-label-text"><?= $_['PAGE1_CONTACT_FORM_OP1'] ?></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">
                                        <label class="form-check-label" for="inlineCheckbox3">
                                            <i class="bi-phone form-check-icon"></i>
                                            <span class="form-check-label-text"><?= $_['PAGE1_CONTACT_FORM_OP2'] ?></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline">
                                        <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">
                                        <label class="form-check-label" for="inlineCheckbox2">
                                            <i class="bi-lightbulb form-check-icon"></i>
                                            <span class="form-check-label-text"><?= $_['PAGE1_CONTACT_FORM_OP3'] ?></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-check form-check-inline me-0">
                                        <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">
                                        <label class="form-check-label" for="inlineCheckbox4">
                                            <i class="bi-google form-check-icon"></i>
                                            <span class="form-check-label-text"><?= $_['PAGE1_CONTACT_FORM_OP4'] ?></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="<?= $_['PAGE1_CONTACT_FORM_SUBJECT'] ?>"></textarea>

                                        <label for=" floatingTextarea"><?= $_['PAGE1_CONTACT_FORM_SUBJECT'] ?></label>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-12 ms-auto">
                                    <button type="submit" class="form-control"><?= $_['PAGE1_CONTACT_FORM_SEND'] ?></button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <?php include('./src/frontend/components/footer.php') ?>
    </footer>

    <!-- JAVASCRIPT FILES -->


</body>
<foot>
    <?php include('./src/frontend/components/foot.php') ?>
</foot>

</html>