<?php
ob_start();


require_once './components/header.php';


?>
<!--================Cart Area =================-->
<section class="cart_area section_padding">
  <div class='container'>
    <div class='cart_inner'>
      <div class='table-responsive'>
        <table class='table'>
          <thead class='cart-pageheader'>
            <tr>
              <th scope='col'>Product</th>
              <th scope='col'>Price</th>
              <th scope='col'>Quantity</th>
              <th scope='col'>Total</th>
              <th scope='col'>Remove</th>
            </tr>
          </thead>
          <tbody class='table4-responsive'>

          </tbody>

          <tr class='bottom_button'>
            <td  class='couponentry'>
              <label>
                   Do you have a Coupon?
              </label>
            <span><input type='text' placeholder="Enter the coupon code"> <a class='btn_7' href='#'>APPLY COUPON</a></span>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <div class='cupon_text float-right'>
                <a class='btn_7' href='#'>Update Cart</a>
              </div>
            </td>
          </tr>
          <tr class='cartsdiv'>
            <td></td>
            <td></td>
            <td class='text-success'>Delivery FREE</td>
            <td>
              <h5><strong>Total: Ksh</strong></h5>
            </td>
            <td><strong>
                <h5 class='cart__pagetotal'></h5>
              </strong>
            </td>
          </tr>
        </table>
        <div class='checkout_btn_inner float-right'>
          <a class='btn_7' href='shopgrid.php'>Continue Shopping</a>
          <a class='btn_8 checkout_btn_8' href='checkout.php'>Proceed to checkout</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<!--================End Cart Area =================-->
</main>
<?php
require_once './components/footer.php';

?>