
<!--/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 06/11/2018
 * Time: 17:58
 */-->

<div class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-heading">
                    <h3>Featured products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-curosel">
                <!-- single-features start -->
                <?php
                foreach ($ranData as $Key =>$value) {
                ?>
                <div class="col-md-3">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="http://localhost/perfumein/uploads/images/<?= $value["Image"] ?>" alt="" />
                                <img class="second-img" src="http://localhost/perfumein/uploads/images/<?= $value["Image"] ?>" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Ornare sed consequat</a></h5>
                            <span class="pro-price">£515.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- single-features end -->
            </div>
        </div>
    </div>
</div>