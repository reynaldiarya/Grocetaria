@extends('utama.partials.withoutphead')
@section('content')


            <!-- Shop Starts-->
            <section class="shop-wrap sec-space-bottom">
                <div class="pattern">
                    <img alt="" src="assets/img/icons/white-pattern.png">
                </div>

                <div class="container rel-div">
                    <div class="row sort-bar">
                        <div class="icon"> <img alt="" src="assets/img/logo/logo-2.png" /> </div>
                        <div class="col-lg-6">
                            <div class="sort-dropdown left">
                                <span>CATEGORY</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
                                        <option>All product</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                        <option> Low - High </option>
                                        <option> High - Low </option>
                                    </select>
                                </div>
                            </div>
                            <div class="sort-dropdown">
                                <span>SORT BY</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
                                        <option>Popular item</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                        <option> Low - High </option>
                                        <option> High - Low </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 right">
                            <div class="sort-dropdown">
                                <span>BY PRICE</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
                                        <option> Low to High </option>
                                        <option> High to Low </option>
                                    </select>
                                </div>
                            </div>
                            <div class="sort-range">
                                <span>PRICE</span> <div id="price-range"></div>
                            </div>
                        </div>
                    </div>

                    <div class="divider-full-1"></div>

                    <div class="result-bar block-inline">
                        <h4 class="result-txt">search result <b> 125 </b> </h4>
                        <ul class="view-tabs">
                            <li class="active">
                                <a href="#grid-view" data-toggle="tab">
                                    <i class="fa fa-th"></i>
                                </a>
                            </li>
                            <li class="">
                                <a href="#list-view" data-toggle="tab">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content shop-content">
                        <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/7.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>mushroom</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/6.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>onion</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/3.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/5.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/2.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/4.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/8.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pepper </strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/1.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>tomato</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/3.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>

                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cherry</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/5.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/2.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> organic </span>  <strong>cabbage</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-box">
                                        <div class="product-media">
                                            <img class="prod-img" alt="" src="assets/img/products/4.png" />
                                            <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                            <div class="prod-icons">
                                                <a href="#" class="fa fa-heart"></a>
                                                <a href="#" class="fa fa-shopping-basket"></a>
                                                <a  href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <h3 class="product-title">
                                                <a href="#"> <span class="light-font"> green </span>  <strong>salad</strong></a>
                                            </h3>
                                            <div class="price">
                                                <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a>
                                    <a href="#" class="fa fa-long-arrow-right right"></a>
                                </div>
                            </div>

                            <div class="pagination-wrap">
                                <ul class="pagintn">
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                </ul>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>rasberry </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/extra/deal-1.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>cherry </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/3.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>mushroom </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/7.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>pepper </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/8.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>cabbage </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/2.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>salad </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15">
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/4.png"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a>
                                    <a href="#" class="fa fa-long-arrow-right right"></a>
                                </div>
                            </div>

                            <div class="pagination-wrap">
                                <ul class="pagintn">
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Shop Ends -->

            <!-- / CONTENT AREA -->



        <!-- Product Preview Popup -->
        <section class="modal fade" id="product-preview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg product-modal">
                <div class="modal-content">
                    <a aria-hidden="true" data-dismiss="modal" class="sb-close-btn close" href="#"> <i class=" fa fa-close"></i> </a>

                    <div class="product-single pb-50 clearfix">
                        <!-- Single Products Slider Starts -->
                        <div class="col-lg-6 col-sm-8 col-sm-offset-2 col-lg-offset-0 pt-50">
                            <div class="prod-slider sync1">
                                <div class="item">
                                    <img src="assets/img/products/prod-single-1.png" alt="">
                                    <a href="assets/img/products/prod-big-1.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                                <div class="item">
                                    <img src="assets/img/products/prod-single-2.png" alt="">
                                    <a href="assets/img/products/prod-big-2.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                                <div class="item">
                                    <img src="assets/img/products/prod-single-3.png" alt="">
                                    <a href="assets/img/products/prod-big-3.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                                <div class="item">
                                    <img src="assets/img/products/prod-single-1.png" alt="">
                                    <a href="assets/img/products/prod-big-1.png" data-gal="prettyPhoto[prettyPhoto]" title="Product" class="caption-link"><i class="arrow_expand"></i></a>
                                </div>
                            </div>

                            <div  class="sync2">
                                <div class="item"> <a href="#"> <img src="assets/img/products/thumb-1.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="assets/img/products/thumb-2.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="assets/img/products/thumb-3.png" alt=""> </a> </div>
                                <div class="item"> <a href="#"> <img src="assets/img/products/thumb-1.png" alt=""> </a> </div>
                            </div>
                        </div>
                        <!-- Single Products Slider Ends -->

                        <div class="col-lg-6 pt-50">
                            <div class="product-content block-inline">

                                <div class="tag-rate">
                                    <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                    <div class="rating">
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="star active"></span>
                                        <span class="fsz-12"> Based on 25 reviews</span>
                                    </div>
                                </div>

                                <div class="single-caption">
                                    <h3 class="section-title">
                                        <a href="#"> <span class="light-font"> organic </span>  <strong>pinapple</strong></a>
                                    </h3>
                                    <span class="divider-2"></span>
                                    <p class="price">
                                        <strong class="clr-txt fsz-20">$50.00 </strong> <del class="light-font">$65.00 </del>
                                    </p>

                                    <div class="fsz-16">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adiping elit food sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                    </div>

                                    <div class="prod-btns">
                                        <div class="quantity">
                                            <button class="btn minus"><i class="fa fa-minus-circle"></i></button>
                                            <input title="Qty" placeholder="03" class="form-control qty" type="text">
                                            <button class="btn plus"><i class="fa fa-plus-circle"></i></button>
                                        </div>
                                        <div class="sort-dropdown">
                                            <div class="search-selectpicker selectpicker-wrapper">
                                                <select class="selectpicker input-price"  data-width="100%"
                                                        data-toggle="tooltip">
                                                    <option>Kilo</option>
                                                    <option>2 Kilo</option>
                                                    <option>3 Kilo</option>
                                                    <option>4 Kilo</option>
                                                    <option>5 Kilo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="checkbox-inline"><input value="" type="checkbox"> <span>Ready in stock</span></label> </div>
                                    </div>
                                    <ul class="meta">
                                        <li> <strong> SKU </strong> <span>:  AB2922-B</span> </li>
                                        <li> <strong> CATEGORY </strong> <span>:  Fruits</span> </li>
                                        <li class="tags-widget"> <strong> TAGS </strong> <span>:  <a href="#">fruits</a> <a href="#">vegetables</a> <a href="#">juices</a></span> </li>
                                    </ul>
                                    <div class="divider-full-1"></div>
                                    <div class="add-cart pt-15">
                                        <a href="#" class="theme-btn btn"> <strong> ADD TO CART </strong> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- / Product Preview Popup -->

@endsection