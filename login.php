<?php



require_once './components/header.php';


?>

<link rel="stylesheet" href="./assets/css/signup.css">

<link rel="stylesheet" href="./assets/css/newsletter.css">



<!--================login_part Area =================-->


<?php

login();

?>


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

    email: document.getElementById('emaillogin'),

    password: document.getElementById('passwordlogin'),

    loginbtn: document.getElementById('formloginbtn'),

    messages: document.getElementById('serverResponse')

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

        });

      }

    }

    request.open('POST', './php/loginhandler.php');

    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    request.send(requestData);

  });
</script>