<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fruits - eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/icofont.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/bundle.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/pogo-slider.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="./assets/css/signup.css">
    <link rel="stylesheet" href="./assets/css/newsletter.css">
    <link rel="stylesheet" href="./assets/css/admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>





<!--================login_part Area =================-->

<div class="col-md-12 adminloginhold">
    <div class="adminlogin">
        <div class="coupon-info">
        <div class='input-fields'>
          <h1>Administrator</h1>
            <form action="#" id='adminform'>
                <p class="form-row-first">
                    <label>Username<span class="required">*</span></label>
                    <input id='adminusername' type="text" />
                </p>
                <p class="form-row-last">
                    <label>Password <span class="required">*</span></label>
                    <input  id='adminpassword' type="text" />
                </p>
                <p class="form-row">
                    <input  id='adminloginbtn' type="submit" value="Login" />

                </p>
                <div id='adminresponse'>

                </div>
            </form>
        </div>


    </div>


</div>



<!--================login_part end =================-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>

<script src="assets/js/popper.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<script src="assets/js/jquery.counterup.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>

<script src="assets/js/ajax-mail.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/plugins.js"></script>

<script src="assets/js/slick.min.js"></script>

<script src="assets/js/jquery.pogo-slider.min.js"></script>

<script src="assets/js/main.js"></script>

<script>
    const form = {

        email: document.getElementById('adminusername'),

        password: document.getElementById('adminpassword'),

        loginbtn: document.getElementById('adminloginbtn'),

        messages: document.getElementById('adminresponse')

    }



    form.loginbtn.addEventListener('click', function(e) {  

        e.preventDefault();
        const request = new XMLHttpRequest();

        const requestData = `email=${form.email.value}&password=${form.password.value}`;





        request.onload = () => {

            let responseObject = null;



            try {

                responseObject = JSON.parse(request.responseText);

            } catch (e) {

                console.error('Could not parse the JSON');



            }

            if (responseObject) {

                handleResponse(responseObject);

            }

        }

        function handleResponse(responseObject) {

            if (responseObject.ok) {

                location.href = 'index.php';

            } else {

                while (form.messages.firstChild) {

                    form.messages.removeChild(form.messages.firstChild);
                  
                }

                responseObject.messages.forEach((message) => {

                    const li = document.createElement('li');

                    li.textContent = message;

                    form.messages.appendChild(li);
                    form.password.value('');

                });

            }

        }

        request.open('POST', './php/adminhandler.php');

        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        request.send(requestData);

    });
</script>