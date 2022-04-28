<?php


require_once './components/header.php';



?>
<!-- header end -->
    <div class="pogoSlider" id="js-main-slider">
        <div class="pogoSlider-slide" style="background-image:url(images/table.jpg);">
        <div class="container">
                <div class="slider-content-5 fadeinup-animated">
                    <h2 class="animated">We deliver Fruits And Groceries <br>
                        right to your Door Step.</h2>
                    <p class="animated">We are situated in Mombasa Mainland and delivering for free within the environs. Bulk Orders can be delivered Country-wide with specified days. Call 072831457 for inquiries </p>
                    <a class="handicraft-slider-btn btn-hover animated smoothscroll"  href="#shophere">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide" style="background-image:url(images/knife.jpg);">
        <div class="container">
                <div class="slider-content-5 fadeinup-animated">
                    <h2 class="animated">We deliver Fruits And Groceries <br>
                        right to your Door Step.</h2>
                    <p class="animated">We are situated in Mombasa Mainland and delivering for free within the environs. Bulk Orders can be delivered Country-wide with specified days. Call 072831457 for inquiries </p>
                    <a class="handicraft-slider-btn btn-hover animated smoothscroll"  href="#shophere">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
<!-- method start -->
<div class="method-area">
    <div class="method-wrapper">
        <div class="wrapper-item">
            <i class="icofont icofont-truck"></i>
            <div>
                <h6>Free Delivery</h6>
                <p>Available Between <br>
                    7am - to -6pm</p>
            </div>
        </div>
        <div class="wrapper-item">
            <i class="icofont icofont-ui-touch-phone"></i>
            <div>
                <h6>Give us a call</h6>
                <p>+254 728 618395</p>
            </div>
        </div>
        <div class="wrapper-item">
            <i class="icofont icofont-envelope"></i>
            <div>
                <h6>Write to us</h6>
                <p>j&mgreensupl@.co.ke</p>
            </div>
        </div>
        <div class="wrapper-item">
            <i class="icofont icofont-credit-card"></i>
            <div>
                <h6>Payment</h6>
                <p>Upon Delivery
                    Mpesa Till Number : <strong>889232</strong>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
<div class="product-style-area pt-130 pb-30 wow">
    <div class="container-fluid container-select">
        <div class="section-title-furits text-center mb-95">
            <img src="assets/img/icon-img/49.png" alt="">
            <h2 id="shophere">Fresh Farm Products</h2>
        </div>
        <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
            <a class="active" data-product-target='#fruits' aria-selected="true">
                Fruits
            </a>
            <a data-product-target='#vegetables' aria-selected="false">
                Vegetables
            </a>
            <a data-product-target='#cereals' aria-selected="false">
                Cereals
            </a>
            <a  data-product-target='#herbs' aria-selected="false">
                Herbs & Spices
            </a>
            <a data-product-target='#chicken' aria-selected="false">
                Chicken
            </a>
        </div>
    <span class="chooseselect">Choose Category</span>
  
      <div class="dropdownselect">
        <div class="select">
          <span>Select Fruits</span>
          <i class="fa fa-chevron-down"></i>
        </div>
        <input type="hidden" name="categories">
        <ul class="dropdown-menu">
          <li data-product-target='#vegetables' aria-selected="false">Select Vegetables</li>
          <li data-product-target='#fruits' aria-selected="false">Select Fruits</li>
          <li data-product-target='#herbs' aria-selected="false">Select Tubers</li>
          <li data-product-target='#cereals' aria-selected="false">Select Cereals</li>
          <li data-product-target='#chicken' aria-selected="false">Select Chicken</li>
        </ul>
      </div>
  
  <span class="spacer"></span>
</div>
        <div data-product-content class="active littlecart" id='fruits'>
            <?php
            $result = $database->fetchfruits();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>

        </div>
        <div data-product-content class="littlecart" id='vegetables'>
            <?php
            $result = $database->fetchvegetables();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>
        </div>
        <div data-product-content class="littlecart" id='cereals'>
            <?php
            $result = $database->fetchcereals();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>

        </div>
        <div data-product-content class="littlecart" id='herbs'>
            <?php
            $result = $database->fetchherbs();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>
        </div>
        <div data-product-content class="littlecart" id='chicken'>
            <?php
            $result = $database->fetchdairy();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>
        </div>
    </div>
</div>
<!-- product area end -->
<!-- banner area start -->
<div class="banner-area pt-90 pb-160 fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="furits-banner-wrapper mb-30 wow fadeInLeft bg-light">
                    <img src="images/fruits/avocado.png" alt="">
                    <div class="furits-banner-content">
                        <h4>Super Natural</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        <a class="furits-banner-btn btn-hover" href='./productdetails.php?id=12'>get offer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="furits-banner-wrapper mb-30 wow fadeInUp bg-light">
                    <img src="images/fruits/pineapple.png" alt="">
                    <div class="furits-banner-content">
                        <h4>KIWI Fresh</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        <a class="furits-banner-btn btn-hover" href='./productdetails.php?id=8'>get offer</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="furits-banner-wrapper mb-30 wow fadeInRight bg-light">
                    <img src="images/fruits/Pomegranate.png" alt="">
                    <div class="furits-banner-content">
                        <h4>Pomegranate</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                        <a class="furits-banner-btn btn-hover" href='./productdetails.php?id=11'>get offer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view-all-product text-center">
        <a href="shopgrid.php">View All Products</a>
    </div>
</div>
<!-- banner area end -->

<!-- product area start -->
<div class="product-style-area gray-bg-4 pb-105">
    <div class="container-fluid">
        <div class="section-title-furits bg-shape text-center mb-80">
            <img src="assets/img/icon-img/49.png" alt="">
            <h2>Shop for Cereals</h2>
        </div>
        <div class="product-fruit-slider owl-carousel">
        <?php
            $result = $database->fetchcereals();
            while ($row = mysqli_fetch_assoc($result)) {
                shopcomponent($row['image'], $row['productname'], $row['price'], $row['id'], $row['available'], $row['discount'], $row['productcategory'], $row['pp']);
            }
            ?>
        </div>
    </div>
</div>
<!-- product area end -->
<!-- section -->
<div class="emptysection">
</div>
<!-- end section -->
<!-- contact_form -->
<div class="preorder">
    <div class="empty col"></div>
    <div class='orderfeedback'>
        <h4>Your order has been received successfully. </h4>
        <p> Kindly Call 0728 128128 incase of any issue. Thank you for your patience as we fast track your order</p>

    </div>
    <div class="contactform">
        <h4  class='tobehidden'>We are Opening Soon</h4>
        <h6 class='tobehidden'>Make a Pre-Order</h6>
        <p class='tobehidden'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda qui eius praesentium, saepe modi officia hic totam consectetur aut, nihil ipsa non enim explicabo fuga. Earum dolorum unde impedit similique?</p>
        

        <span class=' contactformwrap '>
            <div class='col-md-12 ' >
            <input type="text" name="name" id='ordername' placeholder="Your name">
            <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
            </div>
         
         <div class='col-md-12 ' >
            <input type="email" id='orderemail' name="email" placeholder="Your Email">
            <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
            </div>
         
        </span>
        <span class=' contactformwrap '>
            <div class='col-md-12 ' >
            <input type="number" name="phone" id='orderphone' placeholder="Phone Number">
            <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
            </div>
         <div class='col-md-12 ' >
            <input type="text" name="location" id='dropoffpoint' placeholder="Drop Location">
            <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
            </div>
         
        </span>
        <span class='nth-last-child'>
        <div class='col-md-12' >
        <input  type="date" name="date" id='orderdate' value="" placeholder="dd/mm/yyyy">
        <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
            </div>

        </span>
         
        <button class="ordernow" id='ordernowbtn'>PRE-ORDER</button>

    </div>
</div>
<!-- end contact_form -->
<div class="brandsection">
    <div class="section-title-furits text-center mb-20">
        <img src="assets/img/icon-img/49.png" alt="">
        <h2>How it works</h2>
    </div>
    <div class="service-list">
        <div class="col how-to">
            <div class="card-top"><img src="./assets/img/how1.svg"></div>
            <h4>We Source</h4>
            <p>We source from our farms and registered outgrowers across East Africa.
            </p>

        </div>
        <div class="col how-to">
            <div class="card-top"><img src="./assets/img/how2.svg"></div>
            <h4>We Pack</h4>
            <p>We package the best quality of your selection</p>
        </div>
        <div class="col how-to">
            <div class="card-top"><img src="./assets/img/how3.svg"></div>
            <h4>We Deliver</h4>
            <p>We deliver to various collection points across Nairobi on different days</p>
        </div>
        <div class="col how-to">
            <div class="card-top"><img src="./assets/img/how4.svg"></div>
            <h4>You Enjoy</h4>
            <p>Sit back, relax and enjoy the best</p>
        </div>
    </div>
</div>
<!-- Footer Start-->
<?php


require_once './components/footer.php'



?>