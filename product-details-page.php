<?php
  $data = [
    'meta' => [
      'title' => 'PLP',
      'page_desc' => '',
      'page_image' => ''
    ]
  ]
?>
<?php include "includes/meta-info.php" ?>

<section class="product-details-section section-padding-y">
  <div class="col-md-11 mx-auto">
    <div class="row">
      <div class="col-lg-7">
        <div class="wrapper">
          <div class="owl-carousel owl-theme" id="productGallery">

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/1x.webp">
                <img class="bg-img" src="assets/images/1.webp" alt="01"></a>
            </div>

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/2x.webp">
                <img class="bg-img" src="assets/images/2.webp" alt="01"></a>
            </div>

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/3x.webp">
                <img class="bg-img" src="assets/images/3.webp" alt="01"></a>
            </div>

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/4x.webp">
                <img class="bg-img" src="assets/images/4.webp" alt="01"></a>
            </div>

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/5x.webp">
                <img class="bg-img" src="assets/images/5.webp" alt="01"></a>
            </div>

            <div class="item">
              <a data-fancybox="productDetailsGallery" href="assets/images/6x.webp">
                <img class="bg-img" src="assets/images/6.webp" alt="01"></a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="product-details-info">
          <h2>Cotton T-Shirt</h2>
          <p class="price">999<span>(Incl. of Tax)</span></p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex iste libero velit voluptates voluptatum. Vel?</p>

          <h3>Available Colors</h3>
          <ul class="color-options">
            <li style="background-color: yellow;">
              <a href="javascript:;"></a>
            </li>
            <li style="background-color: darkblue;">
              <a href="javascript:;"></a>
            </li>
          </ul>

          <h3>Size</h3>
          <ul class="size-options">
            <li>
              <span class="disabled">
                <span class="striked"></span>
              </span>
              <a href="javascript:;" >XS</a>
            </li>
            <li>
              <a href="javascript:;" class="active" >S</a>
            </li>
            <li>
              <a href="javascript:;" >M</a>
            </li>
            <li>
              <a href="javascript:;" >L</a>
              <span>1 Left</span>
            </li>
            <li>
              <a href="javascript:;" >XL</a>
            </li>
          </ul>

          <div class="action-icons">
            <ul>
              <li><a href=""><i class="icon-wishlist"></i></a></li>
              <li><a href=""><i class="icon-add-to-cart"></i></a></li>
            </ul>

            <button class="btn btn-box">BUY NOW</button>
          </div>

          <div class="product-description">
            <h3>Return Policy</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate delectus doloremque eaque fugiat fugit incidunt inventore itaque iusto laborum non officia placeat, praesentium quasi quisquam repellendus rerum, similique voluptatibus.</p>
          </div>
        </div>
      </div>
    </div>

    <?php
      $items = [
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Shirt Shirt shirt',
          'price' => '499',
          'strikePrice' => '999',
          'discount' => '50%',
          'tag' => 'New Arrival'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Shirt',
          'price' => '299',
          'strikePrice' => '599',
          'discount' => '50%',
          'tag' => 'Trending'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton T-Shirt',
          'price' => '299',
          'strikePrice' => '599',
          'discount' => '50%',
          'tag' => 'New Arrival'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Pant',
          'price' => '299',
          'discount' => '50%',
          'tag' => 'New Arrival'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Shirt Shirt shirt',
          'price' => '499',
          'strikePrice' => '999',
          'discount' => '50%',
          'tag' => 'Trending'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Shirt',
          'price' => '299',
          'strikePrice' => '599',
          'discount' => '50%',
          'tag' => 'Trending'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton T-Shirt',
          'price' => '299',
          'strikePrice' => '599',
          'discount' => '50%',
          'tag' => 'Trending'
        ],
        [
          'img' => 'https://place-hold.it/500x550',
          'title' => 'Cotton Pant',
          'price' => '299',
          'discount' => '50%'
        ]
      ]
    ?>

    <div class="similar-products section-padding-y">
      <h2 class="">Similar Products</h2>
      <div class="owl-carousel owl-theme">

        <?php foreach ($items as $item) { ?>
          <div class="item">
            <div class="plp-listing-img-wrapper">
              <?php if(array_key_exists('tag', $item)) { ?>
                <div class="tag-ribbon">
                  <span><?= $item['tag'] ?></span>
                </div>
              <?php } ?>
              <a href="product-details-page.php">
                <img src="<?= $item['img'] ?>" alt="" class="img-fluid d-block mx-auto">
              </a>
              <div class="row no-gutters text-wrapper align-items-end">
                <div class="col-sm-12">
                  <span class="title"><?= $item['title'] ?></span>
                  <span class="caption price"><?= $item['price'] ?></span>
                  <?php
                    if(array_key_exists('strikePrice', $item)) {
                      ?>

                      <span class="caption strike-price">
                    <?= $item['strikePrice'] ?></span>
                      <span class="caption discount">(<?= $item['discount'] ?> OFF)</span>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="customer-reviews">
      <div class="row no-gutters justify-content-start">
        <div class="col-lg-6">
          <h3>Customer Rating: 3.5 out of 5</h3>
          <div class="star-rating-wrapper">
            <div id="rateBox" data-readonly="true" data-value="3.5"></div>
          </div>
          <h3 class="mt-5 mb-4">Customer Reviews (53)</h3>
          <ul class="user-review">
            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi expedita labore molestiae, nihil sint vel?</p>
              <span>Kavin | 09 May 2021</span>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi expedita labore molestiae, nihil sint vel?</p>
              <span>Kavin | 09 May 2021</span>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi expedita labore molestiae, nihil sint vel?</p>
              <span>Kavin | 09 May 2021</span>
            </li>
            <li>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ea eaque earum maxime odit quasi quisquam repudiandae sint ut! Amet aspernatur commodi, consequuntur, corporis deserunt doloremque dolores et eum ex fuga ipsa minus nesciunt obcaecati odit officiis, possimus qui quia rem sequi similique ut voluptates voluptatum. Cum non perspiciatis veniam.</p>
              <span>Kavin | 09 May 2021</span>
            </li>
          </ul>

          <button class="btn btn-box--small">Show More</button>
        </div>
      </div>


    </div>

  </div>
</section>



<?php include "includes/footer-assets.php"; ?>
