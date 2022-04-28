<?php



function shopcomponent($image, $productname, $price, $id, $available, $discount, $productcategory, $pp )
{
  $element ="<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12'>
  <div class='product-fruit-wrapper mr-4 mb-0'>
  <a class='fixcomponent' href='./productdetails.php?id=$id'>
<div class='discount'>$discount% OFF</div>
<div class='available'>$available </div>
      <div class='product-fruit-img'>
          <img class='apiiimage' data-image='$image' src='$image' alt=''>
          <div class='product-furit-action'>
              <button class='furit-animate-left' data-pid='$id' title='Add to Cart'><i class='pe-7s-cart'></i>
              </button>
              <button class='furit-animate-right' title='Wishlist'>
                  <i class='pe-7s-like'></i>
              </button>
          </div>
      </div>
      <div class='product-fruit-content text-center'>
          <h4 class='apiiname' data-name='$productname'>$productname</h4>
          <span> <p class='apiiprice' data-price='$price'>Ksh $price</p><p>$pp</p></span>
      </div>
      </a>
  </div>
</div>";
  echo  $element;
}



function newsletter(){
  $element= "<div class='shownewsletter' id='newsletter'>
  <div class=imgsection>
   <img src='images/sub.jpg'>
  </div>
 <div class=bodysection>
     <h1> Subscribe to Our Newsletter</h1>
     <p>Subscribe to our monthly newsletters and don’t miss new arrivals, the latest updates and our promotions.</p>
     <Input type='email' name='email' class='newslettermail' placeholder='Your Email Address'>
   <button class='subscribed' type='submit'>SUBSCRIBE </button>
   <button class='closebar' id='closebtn'> x </span></button>
 </div>
</div>";

echo $element;
}



function login(){
  $element = "<div class='whole-form'>
  <div class='login-form'>
      <div class='image-section'>
      </div>
    <div class='input-section'>
    <form action='./close.php' method='POST'>
    <button class='closebar' name='logclosebtn'> x </span></button>
    </form>
      <div class='input-fields'>
      <h1>Login</h1>
          <label for='email'>Email Address:
      <input class='inputemail' type='email' id='emaillogin' placeholder='Enter your Email'  required/>
  </label>
  <label for='password'>Password:
      <div class='holdtoggle'>
      <input  class='inputpassword' type='password'  id='passwordlogin' placeholder='Enter your password'  required/>
      <i id='togglepassword' class='fa fa-eye'></i>
    </div>
      </label>
      <div class='rememberdiv'><span><input class='rememberme' type='checkbox' id='rememberbtn'/><p>Remember me</p></span></div>
      </div>
      <div>
                <ul id='serverResponse'>
                    <li></li>
                </ul>
            </div>
      <button class='loginbbtn' id='formloginbtn'>LOGIN</button>
      <div class='last-section'>
          <div class='reset-password'>
          <a href=''><svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-arrow-left' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z'/>
          <path fill-rule='evenodd' d='M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z'/>
        </svg> Forgot Password? </a>
          </div>
          <div class='back-to-login'>
          <a href='./signup'  id='signupbtn'> Don't have an Account? <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-arrow-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z'/>
          <path fill-rule='evenodd' d='M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z'/>
        </svg></a>
        </div>
      </div>
    </div>
  </div>
</div>";

  echo $element;
}


function signup(){
  $element = "<div class='whole-form'>
  <div class='login-form'>
      <div class='image-section'>
      </div>
    <div class='input-section'>
    <form action='./close.php' method='POST'>
    <button class='closebar' name='logclosebtn'> x </span></button>
    </form>
      <div class='input-fields signupp'>
          <h1>Register</h1>
          <label for='email'>Email Address:
      <input class='inputemail' type='email' id='emailsignup' placeholder='Enter your Email'  required>
  </label>
  <label for='password'>Password:
    <input  class='inputpassword' type='password' id='passwordsignup' placeholder='Enter your password'  required>
      </label>
      <label for='Password'>Confirm Password:
          <input  class='inputrepeatpwd' type='password' id='pwdrepeat' placeholder='Confirm Password'  required>
      </label>
      <div class='rememberdiv'><span><input class='rememberme' type='checkbox' id='checkbox' name='rememberbtn'><p>By clicking Signup, you confirm that you have read and agreed to our <a href=''> Terms of Service </a> and Privacy Policy. </p></span></div>
      </div>
      <button class='signupbtn' id='formsignupbtn'>JOIN</button>
      <div>
      <ul id='serverResponse'>
          <li></li>
      </ul>
  </div>
      <div class='last-section'>
          <div class='reset-password'>
          </div>
          <div class='back-to-login'>
          <a href='./login.php'  id='signupbtn'> Already have an Account? <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-arrow-right' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
          <path fill-rule='evenodd' d='M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z'/>
          <path fill-rule='evenodd' d='M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z'/>
        </svg></a>
        </div>
      </div>
  </div>
</div>
</div>";

  echo $element;
}




function productpage($image, $productname, $price, $id, $available, $discount, $productcategory, $pp){
$element= "<div class='product-details ptb-100 pb-90'>
<div class='container'>
    <div class='row'>
        <div class='col-md-12 col-lg-7 col-12'>
            <div class='product-details-5 pr-70'>
                <img src='$image' alt=''>
            </div>
        </div>
        <div class='col-md-12 col-lg-5 col-12'>
            <div class='sidebar-active product-details-content'>
                <h3>$productname</h3>
                <div class='rating-number'>
                    <div class='quick-view-rating'>
                        <i class='pe-7s-star red-star'></i>
                        <i class='pe-7s-star red-star'></i>
                        <i class='pe-7s-star'></i>
                        <i class='pe-7s-star'></i>
                        <i class='pe-7s-star'></i>
                    </div>
                    <div class='quick-view-number'>
                        <span>2 Rating (S)</span>
                    </div>
                </div>
                <div class='details-price'>
                    <span>Ksh $price.00</span>
                </div>
                <p></p>
                <div class='product-overview'>
                <h5>Quick Overview</h5>
                <ul class='product-features ml-5'>
                    <li class='feature'>Great source of <strong>Vitamins C and K</strong></li>
                    <li  class='feature'>Good source of <strong>Folate (folic acid) </strong></li>
                    <li  class='feature'>Also provides <strong>Potassium and Fiber</strong></li>
                    <li  class='feature'>Vitamin <strong>C</strong> – builds <strong>collagen</strong>, which forms body tissue and bone, and <br>helps in cuts and wound healing.</li>
                 </ul>
               </div>
                <div class='product-size-2'>
                    <h4 class='details-title'>PRICE (Per Item/ Per Bunch)*</h4>
                    <div class='product-size-style2'>
                        <ul>
                            <li><a href='#'>Ksh $price $pp</a></li>
                        </ul>
                    </div>
                </div>
                <div class='quickview-plus-minus'>
                    <div class='cart-plus-minus'>
                        <input type='text' value='02' name='qtybutton' class='cart-plus-minus-box'>
                    </div>
                    <div class='quickview-btn-cart'>
                        <button  type='submit' class='btn-hover-black'  type='submit' data-id='$id'>add to cart</button>
                    </div>
                    <div class='quickview-btn-wishlist'>
                        <button type='submit' class='btn-hover' href='#'><i class='pe-7s-like'></i></button>
                    </div>
                </div>
                <div class='product-details-cati-tag mt-35'>
                    <ul>
                        <li class='categories-title'>Categories :</li>
                        <li><a href='#'>$productcategory</a></li>
                        <li><a href='#'>food</a></li>
                    </ul>
                </div>
                <div class='product-details-cati-tag mtb-10'>
                    <ul>
                        <li class='categories-title'>Tags :</li>
                        <li><a href='#'>food</a></li>
                        <li><a href='#'>$productcategory</a></li>
                    </ul>
                </div>
                <div class='product-share'>
                    <ul>
                        <li class='categories-title'>Share :</li>
                        <li>
                            <a href='#'>
                                <i class='icofont icofont-social-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='icofont icofont-social-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='icofont icofont-social-flikr'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class='product-description-review-area pb-90'>
<div class='container'>
    <div class='product-description-review text-center'>
        <div class='description-review-title nav' role=tablist>
            <a class='active' href='#pro-dec' data-toggle='tab' role='tab' aria-selected='true'>
                Description
            </a>
            <a href='#pro-review' data-toggle='tab' role='tab' aria-selected='false'>
                Reviews (0)
            </a>
        </div>
        <div class='description-review-text tab-content'>
            <div class='tab-pane active show fade' id='pro-dec' role='tabpanel'>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
            </div>
            <div class='tab-pane fade' id='pro-review' role='tabpanel'>
                <a href='#'>Be the first to write your review!</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- product area start -->
<div class='product-area pb-95'>
<div class='container'>
    <div class='section-title-3 text-center mb-50'>
        <h2>Related products</h2>
    </div>
    <div class='product-style'>
        <div class='related-product-active owl-carousel'>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='images/fruits/pineapple.png' alt=''>
                    </a>
                    <span>hot</span>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Pineapple</a></h4>
                    <span>Ksh 117.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/banana.png' alt=''>
                    </a>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Banana</a></h4>
                    <span>$85.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/watermelon.png' alt=''>
                    </a>
                    <span>hot</span>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Watermelon</a></h4>
                    <span>$95.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/orange.png' alt=''>
                    </a>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Orange</a></h4>
                    <span>Ksh 45.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/banana.png' alt=''>
                    </a>
                    <span>hot</span>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Banana</a></h4>
                    <span>Ksh 65.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/watermelon.png' alt=''>
                    </a>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Watermelon</a></h4>
                    <span>Ksh 77.00</span>
                </div>
            </div>
            <div class='product-wrapper'>
                <div class='product-img'>
                    <a href='#'>
                        <img src='/images/fruits/pineapple.png' alt=''>
                    </a>
                    <span>hot</span>
                    <div class='product-action'>
                        <a class='animate-left' title='Wishlist' href='#'>
                            <i class='pe-7s-like'></i>
                        </a>
                        <a class='animate-top' title='Add To Cart' href='#'>
                            <i class='pe-7s-cart'></i>
                        </a>
                        <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                            <i class='pe-7s-look'></i>
                        </a>
                    </div>
                </div>
                <div class='product-content'>
                    <h4><a href='#'>Pineapple</a></h4>
                    <span>Ksh 115.00</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>";


echo $element;

}

function alloffers($image, $productname, $price, $id, $available, $discount){
    $element = "<div class='col-lg-4 col-md-6'>
 
    <div class='product-wrapper product-box-style mb-30'>
  <a class='fixcomponent' href='./productdetails.php?id=$id'>
  <div class='available'>$available </div>
        <div class='product-img'>
            <a href='#'>
                <img class='apiiimage' data-image='$image' src='$image' alt=''>
            </a>
            <span>$discount%</span>
            <div class='product-action'>
                <button type='submit' class='animate-left' title='Wishlist'>
                    <i class='pe-7s-like'></i>
                </button> 
                <button class='animate-top' title='Add To Cart'  type='submit'  data-pid='$id'>
                    <i class='pe-7s-cart'></i>
                </button>
                <button  class='animate-right sharebtn' title='Share'>
                    <i class='pe-7s-share'></i>
                </button>
            </div>
        </div>
        <div class='product-content'>
            <h4><a href='#' class='apiiname' data-name='$productname'>$productname </a></h4>
            <span  class='apiiprice' data-price='$price'>Ksh $price</span>
        </div>
    </div>
</div>";

echo $element;
}

function allofffersingle($image, $productname, $price, $id, $available, $discount){
    $element = "<div class='col-lg-12'>
    <div class='product-wrapper mb-30 single-product-list product-list-right-pr mb-60'>
  <a class='fixcomponent' href='./productdetails.php?id=$id'>
  <div class='available'>$available </div>
        <div class='product-img list-img-width'>
            <a href='#'>
                <img class='apiiimage' data-image='$image' src='$image' alt=''>
            </a>
            <span>$discount %</span>
            <div class='product-action-list-style'>
                <a class='animate-right' title='Quick View' data-toggle='modal' data-target='#exampleModal' href='#'>
                    <i class='pe-7s-look'></i>
                </a>
            </div>
        </div>
        <div class='product-content-list'>
            <div class='product-list-info'>
                <h4><a href='#' class='apiiname' data-name='$productname'>$productname </a></h4>
                <span class='apiiprice' data-price='$price'>Ksh $price</span>
                <p>Lorem ipsum dolor sit amet, mana consectetur adipisicing elit, sed do eiusmod tempor labore. </p>
            </div>
            <div class='product-list-cart-wishlist'>
                <div class='product-list-cart'>
                    <a class='btn-hover list-btn-style'  data-pid='$id'>add to cart</a>
                </div>
                <div class='product-list-wishlist'>
                    <a class='btn-hover list-btn-wishlist' href='#'>
                        <i class='pe-7s-like'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>";

echo $element;
}