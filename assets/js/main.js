var $ = jQuery.noConflict();

(function($) {
    "use strict";

    $('#js-main-slider').pogoSlider({
        autoplay: true,
        autoplayTimeout: 5000,
        displayProgess: true,
        preserveTargetSize: true,
        targetWidth: 1000,
        targetHeight: 300,
        responsive: true
    }).data('plugin_pogoSlider');



    var transitionDemoOpts = {
        displayProgess: false,
        generateNav: false,
        generateButtons: false
    }

    
    /* jQuery MeanMenu */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });

    var clPreloader = function() {
        
        $("html").addClass('cl-preload');
    
        $(window).on('load', function() {
    
            //force page scroll position to top at page refresh
            // $('html, body').animate({ scrollTop: 0 }, 'normal');
    
            // will first fade out the loading animation 
            $("#loader").fadeOut("slow", function() {
                // will fade out the whole DIV that covers the website.
                $("#preloader").delay(300).fadeOut("slow");
            }); 
            
            // for hero content animations 
            $("html").removeClass('cl-preload');
            $("html").addClass('cl-loaded');
        
        });
    };
    clPreloader();
    
// ................................................................................................
// dropdown menu for mobile devices
// ................................................................................................

$('.dropdownselect').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdownselect').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdownselect .dropdown-menu li').click(function () {
    $(this).parents('.dropdownselect').find('span').text($(this).text());
    $(this).parents('.dropdownselect').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/


$('.dropdown-menu li').click(function () {
var input = '<strong>' + $(this).parents('.dropdownselect').find('input').val() + '</strong>',
  msg = '<span class="msg">Hidden input value: ';
$('.msg').html(msg + input + '</span>');
}); 

// ...........................
// Send mail in the contact-form
// ....................

        
// .........................
// ADD TO CART WITHOUT REFRESH HOMEPAGE
// ......................

        // var addbutton = $('.furit-animate-left');
           
        // addbutton.on('click', function(e){
        //     var itemid = event.currentTarget.id;
        //     e.preventDefault();
        //     $('.pe-7s-cart').remove();
        //     var loadergif = '<img id="loadergif" src="./assets/img/gear.svg" alt="Loading" />';
        //     $(this).append(loadergif);
        //     $.ajax({
        //         type: 'POST',
        //         url: './cart.php',
        //         data: {
        //             addbtn: itemid
        //           },
        //           success:  function (response) {
        //             $("#success-alert").fadeIn();
        //             setTimeout(function() { $("#success-alert").fadeOut(); }, 200);      
        //             setTimeout(function() { 
        //              $('#loadergif').remove();
                    
        //             }, 500);       
        //             setTimeout(function() { 
        //              $('#loadergif').remove();
        //             setTimeout(function() {
                        
        //                 $(addbutton).append('<i class="fa fa-check"></i>'); 
                    
        //             }, 100);     
        //             setTimeout(function() { 
        //                 $('.fa-check').remove();
        //                 $(addbutton).append('<i class="pe-7s-cart"></i>'); 
        //             }, 300);     

                    
        //             }, 500);      
                 
        //           }, 
        //     }); 


        // });
    
// ................................................................................................
// ADD TO CART WITHOUT REFRESH PRODUCTPAGE
// ................................................................................................

// var hoverbtn = $('.btn-hover-black');

// hoverbtn.on('click', function(e){
//     var pid= hoverbtn.data('id');
//     e.preventDefault();

//     $.ajax({
//         type: 'POST',
//         url: './cart.php',
//         data: {
//             addbtn: pid
//           },
//           success:  function (response) {
//             $("#success-alert").fadeIn();
//             setTimeout(function() { $("#success-alert").fadeOut(); }, 200);      
//             setTimeout(function() { 
//              $('#loadergif').remove();
            
//             }, 500);       
//             setTimeout(function() { 
//              $('#loadergif').remove();
//             setTimeout(function() {
                
//                 $(hoverbtn).append('<i class="fa fa-check"></i>'); 
            
//             }, 100);     
//             setTimeout(function() { 
//                 $('.fa-check').remove();
//             }, 800);     

            
//             }, 500);      
        
         
//           }, 
//     }); 


// });

// ................................................................................................
// REMOVE CART WITHOUT REFRESH
// ................................................................................................
// var remove = $('.removeitem');
// remove.on('click', function(e){
//     var removeid = remove.data('id');
//     var $this =  $(this);
//     e.preventDefault();
//     console.log('item removed');
    
//     $.ajax({
//         type: 'POST',
//         url: './cart.php',
//         data: {
//             removed: removeid
//           },
//           success:  function (response) {
//             $("#danger-alert").show();
//             setTimeout(function() { $("#danger-alert").hide(); }, 5000);     
//             $this.parent().parent().remove();
//             console.log('ajax made');
//           }, 
//     }); 
// });



// ................................................................................................
// PAGINATION WITHOUT REFRESH
// ................................................................................................



 const nextpage = $('.pagebutton');
nextpage.on('click', function(e){
var page = $(this).data('page');
    e.preventDefault();

    $.ajax({
        async: true, 
        type: 'POST',
        url: './pagination.php',
        data: {
            page: page
          },
          success:  function (result) {
            $('.xshopwrapper').html(result );
         
          }, 
    }); 
});





// ================================
// Shopping Cart API
// ================================

var shoppingCart = (function() {
    // =============================
    // Private methods and propeties
    // =============================
    var cart = [];
    
    // Constructor
    function Item(image, name, price, pid,  count) {
      this.name = name;
      this.image = image;
      this.price = price;
      this.pid = pid;
      this.count = count;
    }
    
    // Save cart
    function saveCart() {
      sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
    }
    
      // Load cart
    function loadCart() {
      cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }
    if (sessionStorage.getItem("shoppingCart") != null) {
      loadCart();
    }
    
  
    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};
    
    // Add to cart
    obj.addItemToCart = function(image, name, price, pid, count) {
      for(var item in cart) {
        if(cart[item].pid === pid) {
          cart[item].count ++;
          saveCart();
          return;
        }
      }
      var item = new Item(image, name, price, pid, count);
      cart.push(item);
      saveCart();
    }
    // Set count from item
    obj.setCountForItem = function(pid, count) {
      for(var i in cart) {
        if (cart[i].pid === pid) {
          cart[i].count = count;
          break;
        }
      }
    };
    // Remove item from cart
    obj.removeItemFromCart = function(pid) {
        for(var item in cart) {
          if(cart[item].pid === pid) {
            cart[item].count --;
            if(cart[item].count === 0) {
              cart.splice(item, 1);
            }
            break;
          }
      }
      saveCart();
    }
    
    // Increment item in cart
    obj.Increment = function(pid) {
        for(var item in cart) {
          if(cart[item].pid === pid) {
            cart[item].count ++;
            saveCart();
            return;
          }
    }
}
  
    // Remove all items from cart
    obj.removeItemFromCartAll = function(pid) {
      for(var item in cart) {
        if(cart[item].pid === pid) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }
  
    // Clear cart
    obj.clearCart = function() {
      cart = [];
      saveCart();
    }
  
    // Count cart 
    obj.totalCount = function() {
      var totalCount = 0;
      for(var item in cart) {
        totalCount += cart[item].count;
      }
      return totalCount;
    }
  
    // Total cart
    obj.totalCart = function() {
      var totalCart = 0;
      for(var item in cart) {
        totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }
  
    // List cart
    obj.listCart = function() {
      var cartCopy = [];
      for(var i in cart) {
       var item = cart[i];
        var itemCopy = {};
        for(var p in item) {
          itemCopy[p] = item[p];
  
        }
        itemCopy.total = Number(item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
  
    // cart : Array
    // Item : Object/Class
    // addItemToCart : Function
    // removeItemFromCart : Function
    // removeItemFromCartAll : Function
    // clearCart : Function
    // countCart : Function
    // totalCart : Function
    // listCart : Function
    // saveCart : Function
    // loadCart : Function
    return obj;
  })();
  
  
  // =====================================
  // Triggers / Events
  // =====================================
  // Add item
  $('.furit-animate-left').click(function(event) {
    var image = $(this).closest('.product-fruit-wrapper').find('.apiiimage').data('image');
    var price = Number($(this).closest('.product-fruit-wrapper').find('.apiiprice').data('price'));
    var name = $(this).closest('.product-fruit-wrapper').find('.apiiname').data('name');
    var pid = $(this).data('pid');
    shoppingCart.addItemToCart(image, name , price,  pid, 1);
    event.preventDefault();
    displayCart();
  });
    // Add item
    $('.btn-hover').click(function(event) {
        var image = $(this).closest('.product-wrapper').find('.apiiimage').data('image');
        var price = Number($(this).closest('.product-wrapper').find('.apiiprice').data('price'));
        var name = $(this).closest('.product-wrapper').find('.apiiname').data('name');
        var pid = $(this).data('pid');
        shoppingCart.addItemToCart(image, name , price,  pid, 1);
        event.preventDefault();
        displayCart();
      });
      
    // Add item
    $('.animate-top').click(function(event) {
        var image = $(this).closest('.product-wrapper').find('.apiiimage').data('image');
        var price = Number($(this).closest('.product-wrapper').find('.apiiprice').data('price'));
        var name = $(this).closest('.product-wrapper').find('.apiiname').data('name');
        var pid = $(this).data('pid');
        shoppingCart.addItemToCart(image, name , price,  pid, 1);
        event.preventDefault();
        displayCart();
      });
    // Delete item button
  $('.cart-dropdown').on('click', '.remove-item', function(event) {
        event.preventDefault();
        var pid = $(event.target).parent().data('pid');
        console.log(pid);
      shoppingCart.removeItemFromCartAll(pid);
      displayCart();
    });

    $('.table4-responsive').on('click', '.shoping__cart__item__remove', function(event) {
        event.preventDefault();
        var pid = $(event.target).parent().data('pid');
        console.log(pid);
      shoppingCart.removeItemFromCartAll(pid);
      displayCart();
    });

  // Clear items
  $('.clear-cart').click(function() {
    shoppingCart.clearCart();
    displayCart();
  });
  
  
  function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    var output2 = "";
    var output3 = "";
    for(var i in cartArray) {
      output += "<li class='single-product-cart'>"
      +"<div class='cart-img'>" + "<a>" + "<img src='"+ cartArray[i].image +"'>"+"</a>"+ "</div>" 
      +  "<div class='cart-title'>" 
      +  "<h5>"+"<a>"+ cartArray[i].name+"</a>"+"</h5>"
      + "<span>" +"<p>Price</p>" +"<p>"+ cartArray[i].price +"</p>"+"</span>"
      + "<div class='cart-controls'>"
      +"<button class='minus-item' data-pid=" + cartArray[i].pid + ">-</button>"
      + "<input type='text' class='item-count' data-pid='" + cartArray[i].pid + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item' data-pid=" + cartArray[i].pid + ">+</button>"
      +"</div>"
      +"</div>"
      +"<div>"
      + "<p class='cart__total'><strong>SubTotal</strong></p>"
      + "<td>" + cartArray[i].total + "</td>"
      +"</div>"
      + "<div class='cart-delete'>"
      +"<button class='remove-item' type='submit'  data-pid=" + cartArray[i].pid + "><i class='ti-trash'></i></button>"
      +"</div>"
     + "</li>"


     output2 += "<tr id='calctable'>"
     +"<td>"
       +"<div class='media'>"
         +"<div class='d-flex'>"
           +"<img src='"+ cartArray[i].image +"' >"
   +"</div>"
   +"<div class=' media-body'>"
         + " <p>"+ cartArray[i].name +"</p>"
      +  " </div>"
     +  "</div>"
   + " </td>"
   +  "<td>"
      + "<h5 id='itemprice'>"+ cartArray[i].price +" </h5>"
    + "</td>"
   +" <td>"
    +   "<div class='product_count'>"
      +"<button class='minus-item' data-pid=" + cartArray[i].pid + ">-</button>"
      + "<input type='text' class='item-count' data-pid='" + cartArray[i].pid + "' value='" + cartArray[i].count + "'>"
      + "<button class='plus-item' data-pid=" + cartArray[i].pid + ">+</button>"
      + "</div>"
    + "</td>"
   + " <td>"
    +  " <h5 id='subtotaldiv'>"+ cartArray[i].total +"</h5>"
   + " </td>"
   + " <td class='holdbtn'>"
     + " <button type='submit' class='shoping__cart__item__remove' data-pid=" + cartArray[i].pid + ">"+"<i class='pe-7s-close'>"+"</i>"+"</button>"
   + " </td>"
   + " </tr>";


   output3 +="<tr class='cart_item'>"
  +"<td class='product-name'>"+ cartArray[i].name 
+" x " +"<strong class='product-quantity'>"+ cartArray[i].count +"</strong>"
 + "</td>"
+" <td class='product-total'>"
+"<span class='amount'>"+ cartArray[i].total +"</span>"
   +"</td>"
+"</tr>";
    }

    if(cartArray.length === 0) {
        output += "<li class='dropdwnempty'>"
        +"<h5>Your Cart is Empty <i class='icofont icofont-cart-alt'></i></h5>"+
      "</li>";

      output2 += "<div>"
      +"<div class='empty__cart row'>"
          +"<div><i class='fa fa-calendar-o'></i></div>"
          +"<p>Your cart is empty</p>"
        +"</div>"
         + "<a class='float-left mb-3 btn_7' href='shopgrid.php'>GO TO SHOP</a>";
        +"</div>";


    $('.cart-pageheader').hide()
    $('.checkout_btn_inner').hide()
    $('.bottom_button').hide()
    $('.cartsdiv').hide()

    }
    if(cartArray.length > 0) {
        output += "<li class='cart-btn-wrapper' >"
        + "<div>"+"<strong>Total: Ksh </strong>"+ "<p class='handicraft__total'></p>" + "<strong>/=</strong>" +"</div>"
        + "<span>" + "<a class='cart-btn btn-hover' href='cart.php'>view cart</a>"
        + "<a class='cart-btn btn-hover' href='checkout.php'>checkout</a>" + "</span>"
        + "</li>"

    }


    $('.cart-dropdown').html(output);
    $('.table4-responsive').html(output2);
    $('.checkoutsec').html(output3);
    $('.handicraft__total').html(shoppingCart.totalCart());
    $('.cart__pagetotal').html(shoppingCart.totalCart());
    $('.checkoutot').html(shoppingCart.totalCart());
    $('.handicraft-count').html(shoppingCart.totalCount());
  }
  
  // -1
  $('.cart-dropdown').on('click', '.minus-item', function(event) {
    var pid = $(this).data('pid');
    shoppingCart.removeItemFromCart(pid);
    displayCart();
    event.preventDefault()
  })
  // +1
  $('.cart-dropdown').on('click', ".plus-item", function(event) {
    var pid = $(this).data('pid');
    shoppingCart.Increment(pid);
    displayCart();
    event.preventDefault()
  })

  
  // -1
  $('.table4-responsive').on('click', '.minus-item', function(event) {
    var pid = $(this).data('pid');
    shoppingCart.removeItemFromCart(pid);
    displayCart();
    event.preventDefault()
  })
  // +1
  $('.table4-responsive').on('click', ".plus-item", function(event) {
    var pid = $(this).data('pid')
    shoppingCart.Increment(pid);
    displayCart();
    event.preventDefault()
  })
  
  // Item count input
  $('.show-cart').on("change", ".item-count", function(event) {
     var pid = $(this).data('pid');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(pid, count);
    displayCart();
  });
  
  displayCart();
  

            
// ==============================================
// product_list_slider
// ==============================================
$('.product__discount__slider').slick({
    dots: true,
    arrows: false,
    speed: 1200,
    circle: true,
    autoplay: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
          dots: false,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
    
  });

// ...............................................................................
	//   Smooth Scrolling
// -----------------------------------------------------
        
$('.smoothscroll').on('click', function (e) {
	var cfg = {scrollDuration : 3000};
    var target = this.hash,
    $target    = $(target);
    
        e.preventDefault();
        e.stopPropagation();

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, cfg.scrollDuration, 'swing').promise().done(function () {

        // check if menu is open
        if ($('body').hasClass('menu-is-open')) {
            $('.header-menu-toggle').trigger('click');
        }

        window.location.hash = target;
    });
});

// ..............................................................................
// make header stick
// ...............................................................................

$(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
        $('.header-bottom').addClass('fixed-menu');
    } else {
        $('.header-bottom').removeClass('fixed-menu');
    }
});
$(window).on('scroll', function () {
    if ($(window).scrollTop() > 10) {
        $('.loginstrip').addClass( 'loginstripnone');
    }else {
        $('.loginstrip').removeClass('loginstripnone');
    }


});
    /*--
    One Page Nav
    -----------------------------------*/
    var top_offset = $('.header-area').height() - -60;
    $('.hamburger-menu nav ul').onePageNav({
        currentClass: 'active',
        scrollOffset: top_offset,
    });
    
    
    /*--- clickable menu active ----*/
    const slinky = $('#menu').slinky()
    /*====== sidebarmenu ======*/
    function sidebarMainmenu() {
        var menuTrigger = $('.clickable-mainmenu-active'),
            endTrigger = $('button.clickable-mainmenu-close'),
            container = $('.clickable-mainmenu');
        menuTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
        });
        endTrigger.on('click', function() {
            container.removeClass('inside');
        });
    };
    sidebarMainmenu();
    
    
    /* slider active */
    $('.slider-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    
    
    $('.slider-active-2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        navText: ['<img src="assets/img/icon-img/57.png"> next', 'prev <img src="assets/img/icon-img/58.png">'],
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    
    
    /* arrival active */
    $('.arrival-active').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 5000,
        nav: false,
        margin: 40,
        item: 5,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1367: {
                items: 5
            }
        }
    })
    
    
    /* brand logo active */
    $('.brand-logo-active').owlCarousel({
        loop: true,
        nav: false,
        item: 6,
        responsive: {
            0: {
                items: 2
            },
            480: {
                items: 2
            },
            768: {
                items: 3
            },
            1000: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    })
    
    
    /* brand logo active */
    $('.brand-logo-active2').owlCarousel({
        loop: true,
        nav: false,
        item: 7,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1000: {
                items: 4
            },
            1200: {
                items: 7
            }
        }
    })
    
    
    /* book list active */
    $('.book-list-active').owlCarousel({
        loop: true,
        nav: true,
        item: 2,
        margin: 40,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 2
            }
        }
    })
    
    
    /* testimonials active */
    $('.testimonials-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    })
    
    
    /* testimonials active */
    $('.brand-logo-active3').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 6,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1000: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    })
    /* testimonials active */
    $('.product-fruit-slider').owlCarousel({
        loop: true,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        margin: 30,
        item: 5,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            },
            1400: {
                items: 5
            }
        }
    })
    
    /* instafeed active */
    $('.instafeed-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 5,
        margin: 17,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            1000: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    })
    
    
    /* testimonials active */
    $('.special-food-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 4,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    
    
    /* testimonials active */
    $('.smart-watch-product-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 3,
        margin: 75,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })
    
    
    /* testimonials active */
    $('.related-product-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 3,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })
    
    
    /* popular-product-active active */
    $('.popular-product-active').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 4,
        margin: 57,
        navText: ['<img src="assets/img/icon-img/left.png">', '<img src="assets/img/icon-img/right.png">'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    
    
    /* popular-product-active-2 active */
    $('.popular-product-active-2').owlCarousel({
        loop: true,
        nav: true,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 4,
        margin: 22,
        navText: ['<img src="assets/img/icon-img/left.png">', '<img src="assets/img/icon-img/right.png">'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    
    
    /* trandy-product-active active */
    $('.trandy-product-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 4,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    
    
    /* feadback-silder-active active */
    $('.feadback-silder-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 5000,
        item: 3,
        margin: 50,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })
    
    
    /*category left menu*/
    $('.category-heading-2').on('click', function() {
        $('.category-menu-list').slideToggle(300);
    });
    
    
    /*--
    menu-toggle
    ------------------------*/
    $('.menu-toggle').on('click', function() {
        if ($('.menu-toggle').hasClass('is-active')) {
            $('.hamburger-menu nav').removeClass('menu-open');
        } else {
            $('.hamburger-menu nav').addClass('menu-open');
        }
    });
    
    
    /*--
    	Hamburger js
    -----------------------------------*/
    var forEach = function(t, o, r) {
        if ("[object Object]" === Object.prototype.toString.call(t))
            for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
        else
            for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
    };
    
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
            hamburger.addEventListener("click", function() {
                this.classList.toggle("is-active");
            }, false);
        });
    }
    
    
    /* magnificPopup video popup */
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });
    
    
    /*----------------------------
        text-animation
    ------------------------------ */
    $('.tlt1').textillate({
        loop: true,
        in: {
            effect: 'fadeInDown',
        },
        out: {
            effect: 'flip',
        },
    });
    
    /*--
    Menu Stick
    -----------------------------------*/
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
            $('.sticker').removeClass('stick');
        } else {
            $('.sticker').addClass('stick');
        }
    });
    
    /* hover 3d init for tilt */
    if ($('.tilter').length > 0) {
        $('.tilter').tilt({
            maxTilt: 40,
            perspective: 800,
            easing: "cubic-bezier(.03,.98,.52,.99)",
            scale: 1,
            speed: 800,
            transition: true,
        });
    }
    
    /* hover 3d init for tilt */
    if ($('.tilter-2').length > 0) {
        $('.tilter-2').tilt({
            maxTilt: 20,
            perspective: 700,
            easing: "cubic-bezier(.03,.98,.52,.99)",
            scale: 1,
            speed: 500,
            transition: true,
        });
    }
    
    /* hover 3d init for tilt */
    if ($('.tilter-3').length > 0) {
        $('.tilter-3').tilt({
            maxTilt: 20,
            perspective: 800,
            easing: "cubic-bezier(.03,.2,.5,.4)",
            scale: 1,
            speed: 500,
            transition: true,
        });
    }
    
    
    /*--- showlogin toggle function ----*/
    $('#showlogin').on('click', function() {
        $('#checkout-login').slideToggle(900);
    });
    
    /*--- showlogin toggle function ----*/
    $('#showcoupon').on('click', function() {
        $('#checkout_coupon').slideToggle(900);
    });
    
    /*--- showlogin toggle function ----*/
    $('#ship-box').on('click', function() {
        $('#ship-box-info').slideToggle(1000);
    });
    
    // Instantiate EasyZoom instances
    var $easyzoom = $('.easyzoom').easyZoom();
    
    
    /*---------------------
    sidebar sticky
    --------------------- */
    $('.sidebar-active').stickySidebar({
        topSpacing: 80,
        bottomSpacing: 30,
        minWidth: 991,
    });
    
    $('.sidebar-active1').stickySidebar({
        topSpacing: 80,
        bottomSpacing: 30,
        minWidth: 991,
    });
    
    $('.sidebar-active3').stickySidebar({
        topSpacing: 80,
        bottomSpacing: 30,
        minWidth: 991,
    });
    
    
    $('.notification-close button').on('click', function() {
        $('.notification-section').slideUp();
    });
    
    
    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    $(".cart-plus-minus").prepend('<div class="dec qtybutton">-</div>');
    $(".cart-plus-minus").append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });
    


    /*---------------------
    price slider
    --------------------- */
    var sliderrange = $('#slider-range');
    var amountprice = $('#amount');
    $(function() {
        sliderrange.slider({
            range: true,
            min: 30,
            max: 1000,
            values: [0, 100],
            slide: function(event, ui) {
                amountprice.val( ui.values[0] + " - " + ui.values[1]);
            }
        });
        amountprice.val( sliderrange.slider("values", 0) +
            " - " + sliderrange.slider("values", 1));
    });
    
    /*--------------------------
        09. ScrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="ti-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    
    
    
    
    /*------ Wow Active ----*/
    new WOW().init();
    
    /*--
	Header Search Toggle
    -----------------------------------*/
    var searchToggle = $('.search-toggle');
    searchToggle.on('click', function(){
        if($(this).hasClass('open')){
           $(this).removeClass('open');
           $(this).siblings('.handicraft-content').removeClass('open');
        }else{
           $(this).addClass('open');
           $(this).siblings('.handicraft-content').addClass('open');
        }
    })
    
 

     

    
    const overlayshare = $('#overlayshare');
    const sharemodal = $('#sharemodal');
    const sharebutton = $('.sharebtn');

    sharebutton.on('click', function(){
       overlayshare.addClass('overlayshareopen');
       sharemodal.addClass('sharemodalopen');
    });
overlayshare.on('click', function(){
    overlayshare.removeClass('overlayshareopen');


})
    
const togglepwd = $('#togglepassword');
const proQty = $('#passwordlogin');
if(togglepwd){
  togglepwd.on('click', function () {
    // toggle the type attribute
    const type = proQty.attr('type') === 'password' ? 'text' : 'password';
    proQty.attr('type', type);
    // toggle the eye slash icon
    $(this).toggleClass('fa-eye-slash');
  });
}


// ......................................................................................................
// index page
// ...........................................................................................................
const prdbtns = document.querySelectorAll('[data-product-target]');
const prdivs = document.querySelectorAll('[data-product-content]');

prdbtns.forEach((prdbtn) =>{
prdbtn.addEventListener('click', () =>{
  const target =document.querySelector(prdbtn.dataset.productTarget,);
  prdbtns.forEach((prdbtn) =>{
    prdbtn.classList.remove('active');
});
  prdivs.forEach((prdiv) =>{
    prdiv.classList.remove('active');
});
target.classList.add('active');
prdbtn.classList.add('active');
});
});
// ......................................................................................................
// shopgrid page
// ...........................................................................................................
const categorybtns = document.querySelectorAll('[data-tab-target]');
const shopdivs = document.querySelectorAll('[data-shop-content]');

categorybtns.forEach((categorybtn) =>{
categorybtn.addEventListener('click', () =>{
  const target =document.querySelector(categorybtn.dataset.tabTarget,);
  categorybtns.forEach((categorybtn) =>{
    categorybtn.classList.remove('active');
});
  shopdivs.forEach((shopdiv) =>{
    shopdiv.classList.remove('active');
});
target.classList.add('active');
categorybtn.classList.add('active');
});
});

    

})(jQuery);


    
    
    

