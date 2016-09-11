<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <h3>Add a Review</h3>
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="e.g. John Doe" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <style>.fotorama1473606830928 .fotorama__nav--thumbs .fotorama__nav__frame {
                            padding: 2px;
                            height: 150px
                        }

                        .fotorama1473606830928 .fotorama__thumb-border {
                            height: 146px;
                            border-width: 2px;
                            margin-top: 2px
                        }</style>
                    <div class="fotorama--hidden"></div>
                    <div class="fotorama fotorama1473606830928" data-nav="thumbs" data-allowfullscreen="1"
                         data-thumbheight="150" data-thumbwidth="150">
                        <div
                            class="fotorama__wrap fotorama__wrap--css3 fotorama__wrap--slide fotorama__wrap--toggle-arrows fotorama__wrap--no-controls"
                            style="width: 800px; min-width: 0px; max-width: 100%;">
                            <div class="fotorama__stage" style="width: 482px; height: 362px;">
                                <div class="fotorama__stage__shaft fotorama__grab"
                                     style="transition-duration: 0ms; transform: translate3d(0.001px, 0px, 0px); width: 482px; margin-left: 0px;">
                                    <div
                                        class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img fotorama__active"
                                        style="left: 0px;">
                                        <img src="/img/f/<?=$flayer['image']?>" class="fotorama__img"
                                                                style="width: 482px; height: 362px; margin-left: -241px; margin-top: -181px;">
                                    </div>
                                    <div class="fotorama__stage__frame fotorama__loaded fotorama__loaded--img"
                                         style="left: 484px;"><img src="/img/amaze_800x600.jpg" class="fotorama__img"
                                                                   style="width: 482px; height: 362px; margin-left: -241px; margin-top: -181px;">
                                    </div>
                                </div>
                                <div class="fotorama__arr fotorama__arr--prev fotorama__arr--disabled"></div>
                                <div class="fotorama__arr fotorama__arr--next"></div>
                                <div class="fotorama__video-close"></div>
                                <div class="fotorama__fullscreen-icon"></div>
                            </div>
                            <!--<div class="fotorama__nav-wrap">
                                <div class="fotorama__nav fotorama__nav--thumbs fotorama__shadows--right"
                                     style="width: 482px;">
                                    <div class="fotorama__nav__shaft fotorama__grab"
                                         style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                        <div class="fotorama__thumb-border"
                                             style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); width: 146px;"></div>
                                        <div class="fotorama__nav__frame fotorama__nav__frame--thumb fotorama__active"
                                             style="width: 150px;">
                                            <div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img
                                                    src="/img/gamer_chick_800x600.jpg" class="fotorama__img"
                                                    style="width: 200px; height: 150px; margin-left: -100px; margin-top: -75px;">
                                            </div>
                                        </div>
                                        <div class="fotorama__nav__frame fotorama__nav__frame--thumb"
                                             style="width: 150px;">
                                            <div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img
                                                    src="/img/amaze_800x600.jpg" class="fotorama__img"
                                                    style="width: 200px; height: 150px; margin-left: -100px; margin-top: -75px;">
                                            </div>
                                        </div>
                                        <div class="fotorama__nav__frame fotorama__nav__frame--thumb"
                                             style="width: 150px;">
                                            <div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img
                                                    src="/img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg"
                                                    class="fotorama__img"
                                                    style="width: 200px; height: 150px; margin-left: -100px; margin-top: -75px;">
                                            </div>
                                        </div>
                                        <div class="fotorama__nav__frame fotorama__nav__frame--thumb"
                                             style="width: 150px;">
                                            <div class="fotorama__thumb fotorama__loaded fotorama__loaded--img"><img
                                                    src="/img/food_is_pride_800x600.jpg" class="fotorama__img"
                                                    style="width: 200px; height: 150px; margin-left: -100px; margin-top: -75px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-info box">
                        <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <small><a href="#" class="text-muted">based on 8 reviews</a></small>
                        <h3><?= $flayer['name'] ?></h3>
                        <p class="product-info-price"><?= $flayer['discount'] ?> %</p>
                        <p class="text-smaller text-muted">
                            <?= $flayer['description'] ?>
                        </p>
                        <!--<ul class="icon-list list-space product-info-list">
                            <li><i class="fa fa-check"></i>Pulvinar nulla</li>
                            <li><i class="fa fa-check"></i>Vitae aliquet</li>
                            <li><i class="fa fa-check"></i>Metus praesent</li>
                            <li><i class="fa fa-check"></i>Nec himenaeos</li>
                            <li><i class="fa fa-check"></i>At aptent</li>
                        </ul>-->
                        <ul class="list-inline">
                            <li><a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Сохранить</a>
                            </li>
                            <!--<li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                    </li>
                    <li class=""><a href="#tab-2" data-toggle="tab"><i class="fa fa-info"></i>Additional Information</a>
                    </li>
                    <li class=""><a href="#tab-3" data-toggle="tab"><i class="fa fa-truck"></i>Shipping &amp;
                            Payment</a>
                    </li>
                    <li class=""><a href="#tab-4" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab-1">
                        <p><?=$flayer['description']?></p>
                    </div>
                    <div class="tab-pane fade" id="tab-2">
                        <table class="table table-striped mb0">
                            <tbody>
                            <tr>
                                <td>Weight</td>
                                <td>1.5kg</td>
                            </tr>
                            <tr>
                                <td>Dimentions</td>
                                <td>10 x 20 x 30 cm</td>
                            </tr>
                            <tr>
                                <td>Composition</td>
                                <td>100% Cotton</td>
                            </tr>
                            <tr>
                                <td>Size &amp; Fit</td>
                                <td>This style comes in a regular fit which fits true to size</td>
                            </tr>
                            <tr>
                                <td>Other Info</td>
                                <td>Machine wash according to instructions on care label</td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td>Small, Medium, Large</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>Brown</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tab-3">
                        <p>Nulla ac quam arcu netus pulvinar purus pulvinar laoreet maecenas egestas suspendisse quis
                            venenatis mollis tempus ornare in mi ridiculus porttitor magnis mollis accumsan accumsan
                            maecenas justo mus dapibus bibendum</p>
                        <p>Massa tempus et malesuada ornare velit turpis lorem dictumst elit dictum dolor velit pretium
                            pharetra ipsum fermentum suscipit magna fringilla congue non dui penatibus per libero varius
                            odio sodales hac</p>
                    </div>
                    <div class="tab-pane fade" id="tab-4">
                        <ul class="comments-list">
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/gamer_chick_50x50.jpg" alt="Image Alternative text"
                                             title="Gamer Chick">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Alison Mackenzie</span>
                                        <p class="comment-content">Potenti diam ridiculus enim per orci aliquet quam
                                            proin sit neque porta conubia nam iaculis phasellus nam dignissim tincidunt
                                            sapien eros nam bibendum nunc vehicula accumsan lacus</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Olivia Slater</span>
                                        <p class="comment-content">Nisl justo natoque pharetra adipiscing ultricies
                                            aliquam erat in condimentum hendrerit vulputate lacus fames aliquet volutpat
                                            habitasse himenaeos adipiscing sociosqu tincidunt</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/afro_50x50.jpg" alt="Image Alternative text" title="Afro">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Oliver Ross</span>
                                        <p class="comment-content">Vivamus lacinia accumsan facilisi feugiat lectus
                                            etiam nostra dis curabitur conubia pulvinar nascetur</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/bubbles_50x50.jpg" alt="Image Alternative text" title="Bubbles">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Frank Mills</span>
                                        <p class="comment-content">Montes venenatis maecenas aptent tellus tempus
                                            praesent pretium elit porttitor penatibus mi tempus erat facilisi ante massa
                                            tristique bibendum inceptos feugiat lobortis vulputate</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/me_with_the_uke_50x50.jpg" alt="Image Alternative text"
                                             title="Me with the Uke">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Alison Mackenzie</span>
                                        <p class="comment-content">Bibendum faucibus dictumst suspendisse imperdiet
                                            pharetra vel euismod hac at at vitae</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/amaze_50x50.jpg" alt="Image Alternative text" title="AMaze">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Dylan Taylor</span>
                                        <p class="comment-content">Erat sagittis scelerisque molestie dignissim massa
                                            tristique id purus euismod non netus enim nisi ac himenaeos nascetur
                                            interdum porta leo adipiscing dictumst quisque aliquet lobortis torquent</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/chiara_50x50.jpg" alt="Image Alternative text" title="Chiara">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Joseph Hudson</span>
                                        <p class="comment-content">Urna dui lectus erat massa velit mattis lobortis arcu
                                            sagittis proin malesuada senectus montes bibendum vehicula</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="/img/andrea_50x50.jpg" alt="Image Alternative text" title="Andrea">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                        <span class="comment-author-name">Frank Mills</span>
                                        <p class="comment-content">Porta fusce litora id enim montes neque facilisi sit
                                            class vel commodo est vel diam massa ultrices netus fusce</p>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i
                                class="fa fa-pencil"></i> Add a review</a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <h3>Related Porducts</h3>
            <div class="gap gap-mini"></div>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text"
                                 title="The Hidden Power of the Heart">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating icon-list-non-rated" title="not rated yet">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Beach Holidays</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$89</span>
                                    </li>
                                    <li><span class="product-old-price">$208</span>
                                    </li>
                                    <li><span class="product-save">Save 43%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/the_best_mode_of_transport_here_in_maldives_800x600.jpg"
                                 alt="Image Alternative text" title="the best mode of transport here in maldives">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.8/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Finshing in Maldives</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$258</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-thumb">
                        <header class="product-header">
                            <img src="/img/cup_on_red_800x600.jpg" alt="Image Alternative text" title="Cup on red">
                        </header>
                        <div class="product-inner">
                            <ul class="icon-group icon-list-rating" title="4.5/5 rating">
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star"></i>
                                </li>
                                <li><i class="fa fa-star-half-empty"></i>
                                </li>
                            </ul>
                            <h5 class="product-title">Fancy Coffe Cup</h5>
                            <p class="product-desciption">Himenaeos urna class vivamus sem sed senectus fringilla</p>
                            <div class="product-meta">
                                <ul class="product-price-list">
                                    <li><span class="product-price">$149</span>
                                    </li>
                                    <li><span class="product-old-price">$257</span>
                                    </li>
                                    <li><span class="product-save">Save 58%</span>
                                    </li>
                                </ul>
                                <ul class="product-actions-list">
                                    <li><a class="btn btn-sm" href="#"><i class="fa fa-shopping-cart"></i> To Cart</a>
                                    </li>
                                    <li><a class="btn btn-sm"><i class="fa fa-bars"></i> Details</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
        <div class="col-md-3">
            <aside class="sidebar-right">
                <div class="sidebar-box">
                    <h5>Recent Viewed</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg"
                                     alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                <p class="thumb-list-item-price">$336</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                <p class="thumb-list-item-price">$328</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/waipio_valley_70x70.jpg" alt="Image Alternative text"
                                     title="waipio valley">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                <p class="thumb-list-item-price">$477</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/waipio_valley_70x70.jpg" alt="Image Alternative text"
                                     title="waipio valley">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                <p class="thumb-list-item-price">$477</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/waipio_valley_70x70.jpg" alt="Image Alternative text"
                                     title="waipio valley">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                <p class="thumb-list-item-price">$477</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--<div class="sidebar-box">
                    <h5>Popular</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="/img/food_is_pride_70x70.jpg" alt="Image Alternative text" title="Food is Pride">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                <p class="thumb-list-item-price">$184</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/old_no7_70x70.jpg" alt="Image Alternative text" title="Old No7">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Fancy Coffe Cup</a></h5>
                                <p class="thumb-list-item-price">$343</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                                <p class="thumb-list-item-price">$448</p>
                            </div>
                        </li>
                    </ul>
                </div>-->
                <!--<div class="sidebar-box">
                    <h5>Recent Reviews</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="/img/hot_mixer_70x70.jpg" alt="Image Alternative text" title="Hot mixer">
                            </a>
                            <div class="thumb-list-item-caption">
                                <ul class="icon-group icon-list-rating" title="5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="thumb-list-item-title"><a href="#">Modern DJ Set</a></h5>
                                <p class="thumb-list-item-author">by Cyndy Naquin</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/our_coffee_miss_u_70x70.jpg" alt="Image Alternative text"
                                     title="Our Coffee miss u">
                            </a>
                            <div class="thumb-list-item-caption">
                                <ul class="icon-group icon-list-rating" title="3/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="thumb-list-item-title"><a href="#">Coffe Shop Discount</a></h5>
                                <p class="thumb-list-item-author">by John Mathis</p>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="/img/food_is_pride_70x70.jpg" alt="Image Alternative text"
                                     title="Food is Pride">
                            </a>
                            <div class="thumb-list-item-caption">
                                <ul class="icon-group icon-list-rating" title="4/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                <p class="thumb-list-item-author">by John Doe</p>
                            </div>
                        </li>
                    </ul>
                </div>-->
            </aside>
        </div>
    </div>

</div>