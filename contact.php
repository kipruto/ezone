<?php


require_once './components/header.php';


?>

<main>
    <!--? Hero Area Start-->
    <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(./images/cart-banner.jpg)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Contact us</h2>
                <ul>
                    <li><a href="#">home</a></li>
                    <li> cart page</li>
                </ul>
            </div>
        </div>
    </div>
    <!--? Hero Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><img src="./assets//fonts/phone.svg"></span>
                        <h4>Phone</h4>
                        <p>+254-728-54697</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><img src="./assets//fonts/tack.svg"></span>
                        <h4>Address</h4>
                        <p>Bandari House <br> Mombasa - Kenya </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><img src="./assets//fonts/open.svg"></span>
                        <h4>Open time</h4>
                        <p> Mon -to- Sat</p>
                        <p>07:00 am - 06:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span><img src="./assets/fonts/mail.svg"></span>
                        <h4>Email</h4>
                        <p>j&mgreensupl@info.co.ke</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="container">
            <div class="map">
                <iframe src="https://maps.google.com/maps?q=mombasa&t=&z=13&ie=UTF8&iwloc=&output=embed" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                <div class="map-inside">
                    <img src="./assets/fonts/map.svg">
                    <div class="inside-widget">
                        <h4>Mombasa, Kenya</h4>
                        <ul>
                            <li>+254-728-543697</li>
                            <li>Bandari Housse, KE</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Don't Hesitate, Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <form id='contactformx' class="form-contact contact_form" action="" method="POST"  novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="contactmessage" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                                    <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="contactsubject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                    <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="phone" id="contactphone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" placeholder="Enter phone number" required>
                                    <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="contactname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                    <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="contactemail" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                    <i class='fa fa-exclamation-circle'></i>
                                    <i class='fa fa-check-circle'></i>
                                    <small></small>

                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn" name='contactbutton' id='contactformbtn'>Send</button>
                        </div>
                    </form>
                    <div id="serverfeedback" style="width:100%; height:100%; display:none; ">
                                    <h4>
                                        Error
                                    </h4>
                                    Sorry there was an error sending your form. 
                                </div>
                                <div id="success_message" style="width:100%; height:100%; display:none; ">
<h2>Success! Your Message was Sent Successfully.</h2>
</div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="icofont icofont-home"></i></span>
                        <div class="media-body">
                            <h3>Mombasa, Kenya.</h3>
                            <p>Bandari Hse, Rm. 7</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="icofont icofont-ui-touch-phone"></i></span>
                        <div class="media-body">
                            <h3>+254-728-54697</h3>
                            <p>Mon to Sat 7:00am to 6:00pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="icofont icofont-envelope"></i></span>
                        <div class="media-body">
                            <h3>jmgreensupl@info.co.ke</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
</main>
<?php


require_once './components/footer.php';
?>

</body>


</html>