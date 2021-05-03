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
                    <a class="dropdown-item" href="#">Low to High</a>
                    <a class="dropdown-item" href="#">High to Low</a>
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
                    <input type="checkbox" name="PopularFilter" id="PopularFilter">
                    <label for="PopularFilter">Popular</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="NewArrivalFilter" id="NewArrivalFilter">
                    <label for="NewArrivalFilter">New Arrival</label>
                  </div>
                </div>
              </div>

              <!-- Category Filter -->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Category</h3>
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

              <!-- Price Filter -->
              <div class="panel">
                <div class="panel-header">
                  <h3 data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Price</h3>
                </div>

                <div class="panel-body collapse" id="collapseThree" data-parent="#plpFilterParent">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="price500Filter" id="price500Filter">
                    <label for="price500Filter"><svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path></g></svg>300 - <svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path></g></svg>500</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="price1000Filter" id="price1000Filter">
                    <label for="price1000Filter"><svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path></g></svg>500 - <svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path></g></svg>1000</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="price1001Filter" id="price1001Filter">
                    <label for="price1001Filter"><svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path></g></svg>1000 &amp; above</label>
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
                    <input type="checkbox" name="disc10Filter" id="disc10Filter">
                    <label for="disc10Filter">10% Discount</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="disc25Filter" id="disc25Filter">
                    <label for="disc25Filter">25% Discount</label>
                  </div>

                  <div class="custom-checkbox">
                    <input type="checkbox" name="disc50Filter" id="disc50Filter">
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
                  <a class="dropdown-item" href="#">Low to High</a>
                  <a class="dropdown-item" href="#">High to Low</a>
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
                'discount' => '50%'
              ],
              [
                'img' => 'https://place-hold.it/500x550',
                'title' => 'Cotton Shirt',
                'price' => '299',
                'strikePrice' => '599',
                'discount' => '50%'
              ],
              [
                'img' => 'https://place-hold.it/500x550',
                'title' => 'Cotton T-Shirt',
                'price' => '299',
                'strikePrice' => '599',
                'discount' => '50%'
              ],
              [
                'img' => 'https://place-hold.it/500x550',
                'title' => 'Cotton Pant',
                'price' => '299',
                'strikePrice' => '599',
                'discount' => '50%'
              ]
            ]
          ?>

          <div class="row">
            <?php foreach ($items as $item) { ?>
              <div class="col-md-6 col-xl-4">
              <div class="img-wrapper">
                <img src="<?= $item['img'] ?>" alt="" class="img-fluid d-block mx-auto">
                <div class="row text-wrapper align-items-center">
                  <div class="col-8">
                    <span class="title"><?= $item['title'] ?></span>
                    <span class="caption price">
                      <svg width="20" height="20" viewBox="0 0 24 24" class="rupees" fill="#ffffff"><g fill="none" fill-rule="evenodd"><path d="M0 0h24v24H0z" opacity="0"></path>
                          <path fill="#ffffff" d="M7 6.215h4.962v2.43H7.505L7.13 9.858h4.764a3.05 3.05 0 01-.827 1.539 2.99 2.99 0 01-2.022.895l-1.361-.003a.304.304 0 00-.214.519l6.717 6.779 1.697-.004-6.107-6.16a4.193 4.193 0 002.14-1.167 4.256 4.256 0 001.198-2.398h2.474l.376-1.215h-2.799v-2.43h3.496V5H7v1.215z"></path>
                        </g></svg><?= $item['price'] ?></span>
                    <span class="caption strike-price">
                      <svg width="10" height="10" viewBox="0 0 9 10" class="strike-rupees"><g fill="#282C3F"><path d="M1.951 5.845l3.91 3.602-.902.376L.7 5.845l.452-.711c.186-.005.392-.02.615-.048a5.2 5.2 0 001.347-.356c.218-.09.42-.201.604-.331.185-.13.345-.281.479-.455.134-.173.231-.371.29-.594H.865v-.841h3.644a1.759 1.759 0 00-.284-.667 1.826 1.826 0 00-.567-.512 2.964 2.964 0 00-.865-.332A5.22 5.22 0 001.63.882H.864V0h6.2v.882H4.18c.173.077.33.174.468.29a2.09 2.09 0 01.612.848c.064.162.11.325.137.489h1.668v.84H5.383a2.38 2.38 0 01-.43 1.03 3.095 3.095 0 01-.8.748 4.076 4.076 0 01-1.043.482 6.15 6.15 0 01-1.159.236z"></path><path d="M0 6.104v-.792h8.14v.792z"></path></g></svg><?= $item['strikePrice'] ?></span>
                    <span class="caption discount">(<?= $item['discount'] ?> OFF)</span>
                  </div>
                  <div class="col-4 text-right">
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
