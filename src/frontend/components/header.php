<section class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</section>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="./<?= $lang ?>" class="navbar-brand mx-auto mx-lg-0"><?= $_ME['name'] ?></a>
        <div class="d-flex align-items-center d-lg-none">
            <i class="navbar-icon bi-telephone-plus me-3"></i>
            <a class="custom-btn btn" href="#section_5"><?= $_ME['phone'] ?></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1"><?= $_['HEADER_BTN_HOME'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2"><?= $_['HEADER_BTN_ABOUT'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3"><?= $_['HEADER_BTN_SKILLS'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_4"><?= $_['HEADER_BTN_PROJECTS'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5"><?= $_['HEADER_BTN_CONTACT'] ?></a>
                </li>
            </ul>
            <div class="d-lg-flex align-items-center d-none ms-auto">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5"><?= $_ME['phone'] ?></a>
            </div>
        </div>

    </div>
</nav>