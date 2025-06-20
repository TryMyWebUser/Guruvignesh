<style>
/* Form CSS */
.form-label {
    font-weight: 500;
    color: #333;
}
.modal-content {
    border-radius: 12px;
    border: none;
}
.form-step {
    display: none;
}
.form-step.active {
    display: block;
}
.form-header {
    border-bottom: 1px solid #eee;
    padding-bottom: 15px;
    margin-bottom: 20px;
}
.form-footer {
    border-top: 1px solid #eee;
    padding-top: 15px;
    margin-top: 20px;
}
.progress {
    height: 8px;
    margin-bottom: 20px;
}
.progress-bar {
    background-color: #009688;
}
.btn-primary {
    background-color: #009688;
    border-color: #009688;
}
.btn-primary:hover {
    background-color: #00796b;
    border-color: #00796b;
}
.btn-outline-primary {
    color: #009688;
    border-color: #009688;
}
.btn-outline-primary:hover {
    background-color: #009688;
    color: white;
}
.yes-no-btns .btn {
    min-width: 100px;
    margin: 0 5px;
}
.conditional-field {
    margin-top: 15px;
    display: none;
}
.form-control:focus {
    border-color: #009688;
    box-shadow: 0 0 0 0.25rem rgba(0, 150, 136, 0.25);
}
.home-remove {
    display: none;
}
@media only screen and (max-width: 700px) {
    p.home-remove2.mbl b {
        display: none !important;
    }
    #search, #menu-btn {
        background: #607d8b !important;
    }
    .home-remove {
        display: block !important;
    }
}
</style>
<!-- header trasnparent area start -->
<header class="header-transparent header-seven py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-transparent-main-wrapper">
                    <a href="index.php" class="logo d-flex align-item-center">
                        <img src="assets/images/logo.png" class="block d-none" width="120" alt="transparent" /> 
                        <p class="home-remove" style="align-content: end; color: #fff; font-size: 11px;">AI Powered Business Partner</p>
                        <p class="home-remove2 mbl" style="align-content: end; color: #000; font-size: 23px;"><b>Build Sustainable & Scalable Business with a Perfectly Crafted Strategy</b></p>
                    </a>

                    <div class="loader-wrapper">
                        <div class="loader"></div>
                        <div class="loader-section section-left"></div>
                        <div class="loader-section section-right"></div>
                    </div>
                    <div class="action-area">
                        <!-- <a href="#" class="rts-btn btn-primary btn-white">Get a Discover Section</a> -->
                        <button id="menu-btn" class="menu menu-btn ml--20 ml_sm--5" style="display: block !important;">
                            <img class="menu-light" src="assets/images/icons/01.svg" alt="Menu-icon" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header trasnparent area end -->