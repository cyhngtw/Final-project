<?php
$title = "Shop";
$addCSS = "../CSS/codefactory.css";
$addCSS2 = "../CSS/landing_page.css";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
// include_once "../Components/header.php";
?>

<!--   shopping cart modal -->
<!-- Modal: modalAbandonedCart-->
<div class="modal fade right " id="modalAbandonedCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content slogen-bg ">
            <!--Header-->
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="row">
                    <div id="cartt">
                    </div>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer d-flex flex-column align-items-center border-0">
                <!-- cart total -->
                <div class="cart-total-container mt-3">
                    <h5 class="text-white text-center">Total<strong id="cart-total-price" class="font-weight-bold text-white">0</strong></h5>
                </div>
                <!--end cart total -->
                <div class="p-3 justify-content-center" width="200px">
                    <a href="checkout.php">
                    <!-- <a href="#"> -->
                        <button type="button" id="btnCheckout"class="btn btn-secondary text-white p-2" >
                            <h4 class="text-center font-weight-bold p-2">Pay now</h4>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal: modalAbandonedCart-->
<!--end of  shopping cart -->

<!-- filter start -->
<div class="container my-5 py-4 d-flex justify-content-around rounded bg-light">
    <!-- flexitem1-->
    <div class="row">
        <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Level</button>
        <div class="dropdown-menu">
            <a class="dropdown-item">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="1">
                    <label class="custom-control-label" for="1">Beginner</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="2" checked>
                    <label class="custom-control-label" for="2">Advanced</label>
                </div>
            </a>
        </div>
    </div>
    <!-- flexitem1 -->
    <!-- flexitem2-->
    <div class="row">
        <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Duration</button>
        <div class="dropdown-menu">
            <a class="dropdown-item">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="3">
                    <label class="custom-control-label" for="3">Full-time</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="4" checked>
                    <label class="custom-control-label" for="4">Part-time</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="5" checked>
                    <label class="custom-control-label" for="5">Weekend</label>
                </div>
            </a>
        </div>
    </div>
    <!-- flexitem2 -->
    <!-- flexitem3-->
    <div class="row">
        <button class="btn btn-secondary dropdown-toggle mr-4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Content</button>
        <div class="dropdown-menu">
            <a class="dropdown-item">
                <!-- Default unchecked -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="6">
                    <label class="custom-control-label" for="6">GitHub</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="7" checked>
                    <label class="custom-control-label" for="7">HTML5</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="8" checked>
                    <label class="custom-control-label" for="8">CSS3</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="9" checked>
                    <label class="custom-control-label" for="9">JavaScript</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="10" checked>
                    <label class="custom-control-label" for="10">jQuery</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="11" checked>
                    <label class="custom-control-label" for="11">Bootstrap</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="12" checked>
                    <label class="custom-control-label" for="12">TypeScript</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="13" checked>
                    <label class="custom-control-label" for="13">Angular 6.0</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="14" checked>
                    <label class="custom-control-label" for="14">MySQL</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="15" checked>
                    <label class="custom-control-label" for="15">PHP</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="16" checked>
                    <label class="custom-control-label" for="16">AJAX</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="17" checked>
                    <label class="custom-control-label" for="17">Symfony</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="18" checked>
                    <label class="custom-control-label" for="18">WordPress</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="19" checked>
                    <label class="custom-control-label" for="19">Software Testing</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="21" checked>
                    <label class="custom-control-label" for="21">Python</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="22" checked>
                    <label class="custom-control-label" for="22">Java</label>
                </div>
            </a>
            <a class="dropdown-item" href="#">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="23" checked>
                    <label class="custom-control-label" for="23">UX</label>
                </div>
            </a>
        </div>
    </div> <!-- flexitem3 -->
</div>
<!-- filter end -->

<!-- course container start -->
<div class="container  my-5 py-5 store-items">
    <div class="row" id="items">

    </div>
</div>
<!-- course container end -->



<?php include_once "../Components/footer.php"; ?>