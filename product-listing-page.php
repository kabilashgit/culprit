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

<section class="page-banner">
  <div class="bg-banner" style="background-image:url('https://place-hold.it/1920x800');">
    <h1>Find your rite match</h1>
  </div>
</section>

<section class="product-listing-section section-padding-y">
  <div class="col-md-11 mx-auto">
    <div class="row">
      <div class="col-xl-3">
        <div class="left-section">
          <div class="filter-box">

            <div class="filter-box--header">
              <div class="small-header" id="filterToggle">Filter <i class="icon-locker"></i></div>
              <span class="text--red d-none d-xl-inline-block clear-all-btn">Clear All</span>
              <div class="small-header d-xl-none sort-by">
                <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Price - Low to High</a>
                    <a class="dropdown-item" href="#">Price - High to Low</a>
                    <a class="dropdown-item" href="#">Best Sellers</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter-box--filters" id="plpFilterParent">

              <div class="filterToggle-close">
                <span class="text--red clear-all-btn">Clear All</span>
                <span id="filterToggleClose">&times;</span>
              </div>

              <!-- Collection Filter -->
              <div class="panel first-item">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collections
                  </h3>
                </div>

                <div class="panel-body collapse show" id="collapseOne" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="winterCollectionFilter" id="winterCollectionFilter">
                    <label for="winterCollectionFilter">Winter Collection</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="summerCollectionFilter" id="summerCollectionFilter">
                    <label for="summerCollectionFilter">Summer Collection</label>
                  </div>
                </div>
              </div>

              <!-- Gender Filter -->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Gender</h3>
                </div>

                <div class="panel-body collapse" id="collapseTwo" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="MenFilter" id="MenFilter">
                    <label for="MenFilter">Men</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="WomenFilter" id="WomenFilter">
                    <label for="WomenFilter">Women</label>
                  </div>
                </div>
              </div>

              <!-- Category Filter-->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Category</h3>
                </div>

                <div class="panel-body collapse" id="collapseSix" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="catTshirt" id="catTshirt">
                    <label for="catTshirt">T-Shirt</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="catShirt" id="catShirt">
                    <label for="catShirt">Shirt</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="catTrousers" id="catTrousers">
                    <label for="catTrousers">Trousers</label>
                  </div>

                </div>
              </div>

              <!-- Price Filter -->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Price</h3>
                </div>

                <div class="panel-body collapse" id="collapseThree" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="radio" name="priceFilter" id="price500Filter">
                    <label for="price500Filter"><i class="icon-ruppee"></i>300 - <i class="icon-ruppee"></i>500</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="radio" name="priceFilter" id="price1000Filter">
                    <label for="price1000Filter"><i class="icon-ruppee"></i>500 - <i class="icon-ruppee"></i>000</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="radio" name="priceFilter" id="price1001Filter">
                    <label for="price1001Filter"><i class="icon-ruppee"></i>1000 &amp; above</label>
                  </div>

                </div>
              </div>

              <!-- Color Filter-->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Colors</h3>
                </div>

                <div class="panel-body collapse" id="collapseFour" data-parent="#plpFilterParent">

                  <div class="custom-checkbox">
                    <input type="checkbox" name="BlueFilter" id="BlueFilter">
                    <label for="BlueFilter">Blue</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="RedFilter" id="RedFilter">
                    <label for="RedFilter">Red</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="BlackFilter" id="BlackFilter">
                    <label for="BlackFilter">Black</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="WhiteFilter" id="WhiteFilter">
                    <label for="WhiteFilter">White</label>
                  </div>

                </div>
              </div>

              <!-- Discount Filter-->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Discounts</h3>
                </div>

                <div class="panel-body collapse" id="collapseFive" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="radio" name="discountFilter" id="disc10Filter">
                    <label for="disc10Filter">10% Discount</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="radio" name="discountFilter" id="disc25Filter">
                    <label for="disc25Filter">25% Discount</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="radio" name="discountFilter" id="disc50Filter">
                    <label for="disc50Filter">50% Discount</label>
                  </div>

                </div>
              </div>

              <button class="btn btn-box--small">Apply</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9">
        <div class="right-section">
          <div class="small-header d-none d-lg-block text-right">
            <div class="dropdown sort-by"><div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Price - Low to High</a>
                  <a class="dropdown-item" href="#">Price - High to Low</a>
                  <a class="dropdown-item" href="#">Best Sellers</a>
                </div>
              </div></div>

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

          <div class="row no-gutters">
            <?php foreach ($items as $item) { ?>
              <div class="col-6 col-md-4 col-xl-3">

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
                      <div class="col-sm-8">
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
                      <div class="col-sm-4 text-left text-sm-right">
                        <a class="icon-wrapper" href="javascript:void(0);">
                          <span class="icon-wishlist"></span>
                        </a>
                        <a class="icon-wrapper" href="javascript:void(0);">
                          <span class="icon-add-to-cart"></span>
                        </a>
                      </div>
                    </div>
                  </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer-assets.php"; ?>
