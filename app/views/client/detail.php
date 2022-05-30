<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
<?php

?>
<?php  ?>
<!--Title Box-->
<?php require 'title_box.php' ?>
<!--//Title Box-->

<!-- Product Detail-->
<div class="site-section">
    <div class="container">
        <div class="row">
            <?php if (isset($data['product'])) : ?>
                <div class="col-md-5 mr-auto">
                    <div class="border text-center">
                        <img src="<?= ASSETS . "images/" . $data['product']->image; ?>" alt="Image" class="img-fluid p-5">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-black"><?= $data['product']->name ?></h2>
                    <p id="font-unicode">Nhà xuất bản : <?= $data['product_brand']->name ?> | Số lượng : <?= $data['product']->quantity ?></p>
                    <p id="font-unicode">Thể loại : <?= $data['product_cate']->name ?> </p>
                    <p>
                        <!--<del>$95.00</del>--> <strong class="product-price"><?= number_format($data['product']->price) ?> vnđ</strong>
                    </p>
                    <p id="font-unicode"><?= $data['product']->description ?></p>
                    <form method="POST">
                        <div class="mb-5">
                            <div class="input-group mb-3" style="max-width: 220px;">
                                <div class="input-group-prepend">
                                    <!-- <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button> -->
                                </div>
                                <input type="number" class="form-control text-center" min="1" max="<?= $data['product']->quantity ?>" name="quantity" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <!-- <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button> -->
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" name="addtocart">Add To Cart</button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>


</div>
<form method="post">

    <div class="binhluan">
        <?php echo checkError() ?>
        <div class="row">
            <div class="col-md-8">
                <p>
                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                        echo '<i class="fas fa-user-circle"></i>&nbsp;' . $_SESSION['user']->name;
                    } ?>
                </p>
                <div class="stars">

                    <input class="star star-5" id="star-5" type="radio" value="5" name="star" />
                    <label class="star star-5" for="star-5"></label>
                    <input class="star star-4" id="star-4" type="radio" value="4" name="star" />
                    <label class="star star-4" for="star-4"></label>
                    <input class="star star-3" id="star-3" type="radio" value="3" name="star" />
                    <label class="star star-3" for="star-3"></label>
                    <input class="star star-2" id="star-2" type="radio" value="2" name="star" />
                    <label class="star star-2" for="star-2"></label>
                    <input class="star star-1" id="star-1" type="radio" value="1" name="star" />
                    <label class="star star-1" for="star-1"></label>

                </div>
                <p><input style="width: 200px;" name="user_cmt" class="form-control" placeholder="name"></input></p>
                <p><textarea rows="5" style="resize: none;" name="content" class="form-control" placeholder="Comment..."></textarea></p>

                <p><button type="submit" name="sendcmt" class="btn btn-primary">Gui</button></p>

            </div>
        </div>
        
            <?php foreach ($data['cmt'] as $item) : ?>
                <section class="comment-display">
                    <div class="user-info">
                        <span class="user-name" style="font-weight: bold"><?=$item->user_cmt?></span></br>
                        <span class="user-date__comment"><?=$item->time?></span>
                    </div>
                    <div class="user-comment">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></br>
                        <p class="user-comment-content"><?=$item->content?></p>
                    </div>
                </section>
            <?php endforeach; ?>
        

    </div>
</form>

<!-- // Product Detail-->

<!-- Related Products-->
<?php if (isset($data['related_products']) && $data['related_products'] != false) { ?>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="title-section text-center col-12">
                    <h2 class="text-uppercase" style="font-family: 'Raleway', sans-serif;">Sản phẩm liên quan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 block-3 products-wrap">
                    <div class="nonloop-block-3 owl-carousel">

                        <?php foreach ($data['related_products'] as $item) : ?>
                            <div class="text-center item mb-4">
                                <a href="<?= ROOT ?>detail/<?= $item->id ?>"> <img style="height:250px;width:200px;" src="<?= ASSETS . "images/" . $item->image; ?>" alt="Related Product's Image" class="img-related"></a>
                                <p class="product-name"><a href="<?= ROOT ?>detail/<?= $item->id ?>" style="color: black;"><?= $item->name; ?></a></p>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
<?php }  ?>

<!-- //Related Products-->


<div class="site-section bg-secondary bg-image" style="background-image: url('<?= ASSETS ?>images/bg_2.jpg');">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('<?= ASSETS ?>images/blog-1.jpg');">
                    <div class="banner-1-inner align-self-center">
                        <h2>Pharma Products</h2>

                    </div>
                </a>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0">
                <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('<?= ASSETS ?>images/blog-5.jpg');">
                    <div class="banner-1-inner ml-auto  align-self-center">
                        <h2>Rated by Experts</h2>

                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- //Main Content -->
<style>
    .comment-display {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        flex-wrap: nowrap;
    }

    .user-date__comment {
        line-height: 40px;
    }

    .user-comment {
        width: 1170px;
    }

    .checked {
        color: orange;
    }

    div.stars {
        width: 270px;
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    input.star:checked~label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    input.star-5:checked~label.star:before {
        color: #FE7;
        text-shadow: 0 0 20px #952;
    }

    input.star-1:checked~label.star:before {
        color: #F62;
    }

    label.star:hover {
        transform: rotate(-15deg) scale(1.3);
    }

    label.star:before {
        content: '\f006';
        font-family: FontAwesome;
    }

    .weight-unit {
        font-family: 'Raleway', sans-serif;
        color: black;
        font-size: 15px;
        font-weight: 600;
        border: 2px solid #51eaea;
        border-radius: 8px;
        padding: 5px;
        width: fit-content;
    }

    .product-price {
        color: black;
        font-size: 23px;
    }

    #font-unicode {
        font-family: 'Raleway', sans-serif;
    }

    .img-related {
        width: 80px;
        height: 350px;
    }

    .product-name {
        font-family: 'Raleway', sans-serif;
        color: black;
        font-weight: bold;
        font-size: 17px;

    }

    .binhluan {
        margin-left: 200px;
    }
</style>