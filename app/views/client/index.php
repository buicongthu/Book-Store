<div>


  <!-- Main Content -->
  <div class="site-blocks-cover" style="background-image: url('<?= ASSETS ?>images/banner.jpg'); width:100%;object-fit:cover">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
          <div class="site-block-cover-content text-center">
            <!-- <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2> -->


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row align-items-stretch section-overlap">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="banner-wrap bg-primary h-100">
            <a href="#" class="h-100">
              <h5>Free <br> Shipping</h5>
              <p>
                Amet sit amet dolor
                <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
              </p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="banner-wrap h-100">
            <a href="#" class="h-100">
              <h5>Season <br> Sale 50% Off</h5>
              <p>
                Amet sit amet dolor
                <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
              </p>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="banner-wrap bg-warning h-100">
            <a href="#" class="h-100">
              <h5>Buy <br> A Gift Card</h5>
              <p>
                Amet sit amet dolor
                <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
              </p>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container">
    <!-- New Products-->
    <?php if (isset($data['new_products'])) { ?>
      <div class="jumbotron">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div style="margin-top: -40px;" class="title-section text-center col-12">
              <h2  class="text-uppercase mb-5">New Products</h2>
            </div>
          </div>

          <div class="row">
            <?php foreach ($data['new_products'] as $item) : ?>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">New</span>
                <a href="<?= ROOT ?>detail/<?= $item->id ?>"> <img src="<?= ASSETS . "images/" . $item->image; ?>" alt="Image" height="250" width="200"></a>
                

                <p style="font-family: 'Raleway', sans-serif;" class="text-dark"><a style="color: black;" href="<?= ROOT ?>detail"><?= $item->name ?></a></p>
                <p class="price"> <?= number_format($item->price); ?> vnđ</p>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="row mt-5">
            <div class="col-12 text-center">
              <a href="<?= ROOT ?>shop" class="btn btn-primary px-4 py-3">View All Products</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    <?php } ?>
    <!--endif-->
    <!-- New Products-->
       <!-- New Products-->



  </div>
  <div class="container">
    <!-- New Products-->
    <?php if (isset($data['new_products'])) { ?>
      <div class="jumbotron">
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div style="margin-top: -40px;" class="title-section text-center col-12">
              <h2  class="text-uppercase mb-5">High Rating Products</h2>
            </div>
          </div>

          <div class="row">
            <?php foreach ($data['star_products'] as $item) : ?>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                
                <a href="<?= ROOT ?>detail/<?= $item->id ?>"> <img src="<?= ASSETS . "images/" . $item->image; ?>" alt="Image" height="250" width="200"></a>
                

                <p style="font-family: 'Raleway', sans-serif;" class="text-dark"><a style="color: black;" href="<?= ROOT ?>detail"><?= $item->name ?></a></p>
                <p class="price"> <?= number_format($item->price); ?> vnđ</p>
              </div>
            <?php endforeach; ?>

          </div>
          <div class="row mt-5">
            <div class="col-12 text-center">
              <a href="<?= ROOT ?>shop" class="btn btn-primary px-4 py-3">View All Products</a>
            </div>
          </div>
        </div>
      </div>
      </div>
    <?php } ?>
    <!--endif-->
    <!-- New Products-->
       <!-- New Products-->




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
  </style>


</div>