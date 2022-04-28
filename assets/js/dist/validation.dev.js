"use strict";

var $ = jQuery.noConflict();

(function ($) {
  "use strict";

  var contactbutton = document.getElementById('contactformbtn');
  var contactform = document.getElementById('contactformx');
  var message = document.getElementById('contactmessage');
  var email = document.getElementById('contactemail');
  var subject = document.getElementById('contactsubject');
  var name = document.getElementById('contactname');
  var phone = document.getElementById('contactphone');
  var serverfeedback = document.getElementById('serverfeedback');
  contactbutton.addEventListener('click', function (e) {
    e.preventDefault();
    checkinputs();
  });

  function checkinputs() {
    var messagevalue = message.value;
    var emailvalue = email.value.trim();
    var subjectvalue = subject.value;
    var namevalue = name.value;
    var phonevalue = phone.value.trim();

    if (messagevalue === '') {
      setErrorFor(message, 'This field cannot be blank');
    } else {
      setSuccessFor(message, '');
    }

    if (emailvalue === '') {
      setErrorFor(email, 'This field cannot be blank');
    } else if (!isEmail(emailvalue)) {
      setErrorFor(email, 'Not a valid email');
    } else {
      setSuccessFor(email, '');
    }

    if (subjectvalue === '') {
      setErrorFor(subject, 'This field cannot be blank');
    } else {
      setSuccessFor(subject, '');
    }

    if (phonevalue === '') {
      setErrorFor(phone, 'Phone number is required');
    } else {
      setSuccessFor(phone, '');
    }

    if (namevalue === '') {
      setErrorFor(name, 'You can use the name XYZ if you dont want to use your real name');
    } else {
      setSuccessFor(name, '');
    }

    function setErrorFor(input, message) {
      var formControl = input.parentElement;
      var small = formControl.querySelector('small');
      small.innerText = message;
      formControl.classList.add('error');
      input.classList.add('errorborder');
    }

    function setSuccessFor(input, message) {
      var formControl = input.parentElement;
      var small = formControl.querySelector('small');
      small.innerText = message;
      formControl.classList.remove('error');
      formControl.classList.add('success');
      input.classList.add('successborder');
    }

    function isEmail(email) {
      return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
  }

  var contactbbtn = $('#contactformbtn');
  var ajaxmessage = $('#contactmessage');
  var ajaxemail = $('#contactemail');
  var ajaxsubject = $('#contactsubject');
  var ajaxname = $('#contactname');
  var ajaxphone = $('#contactphone');
  contactbbtn.on('click', function (e) {
    var messageval = ajaxmessage.val();
    var emailval = ajaxemail.val();
    var subjectval = ajaxsubject.val();
    var nameval = ajaxname.val();
    var phoneval = ajaxphone.val();
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: './mail.php',
      data: {
        email: emailval,
        message: messageval,
        phone: phoneval,
        name: nameval,
        subject: subjectval
      },
      success: function success(response) {}
    });
  }); //order page validation

  var orderbutton = $('#ordernowbtn');
  var date = $('#orderdate');
  var emailorder = $('#orderemail');
  var dropoffpoint = $('#dropoffpoint');
  var nameorder = $('#ordername');
  var phoneorder = $('#orderphone');
  var orderfeedback = $('#orderfeedback');
  orderbutton.on('click', function (e) {
    e.preventDefault();
    checkInputs();

    function checkInputs() {
      var dateval = date.val();
      var emailval = emailorder.val();
      var dropoffval = dropoffpoint.val();
      var nameval = nameorder.val();
      var phoneraw = phoneorder.val();
      var phoneval = $.trim(phoneraw);
      $.ajax({
        type: 'POST',
        url: './mail.php',
        data: {
          email: emailval,
          date: dateval,
          phone: phoneval,
          name: nameval,
          dropoffpoint: dropoffval
        },
        success: function success(response) {}
      });

      if (dropoffval === '') {
        seterrorFor(dropoffpoint, 'Your dropoff location needed');
      } else {
        setsuccessFor(dropoffpoint, '');
      }

      if (emailval === '') {
        seterrorFor(emailorder, 'This field cannot be blank');
      } else if (!isEmail(emailval)) {
        seterrorFor(emailorder, 'Not a valid email');
      } else {
        setsuccessFor(emailorder, '');
      }

      if (dateval === '') {
        seterrorFor(date, 'Select today\'s date');
      } else {
        setsuccessFor(date, '');
      }

      if (phoneval === '') {
        seterrorFor(phoneorder, 'Phone number is required');
      } else {
        setsuccessFor(phoneorder, '');
      }

      if (nameval === '') {
        seterrorFor(nameorder, 'Your name is required');
      } else {
        setsuccessFor(nameorder, '');
      }

      function seterrorFor(input, message) {
        var formControl = input.parent();
        var small = formControl.find('small');
        small.text(message);
        formControl.addClass('error');
        input.addClass('errorborder');
      }

      function setsuccessFor(input, message) {
        var formControl = input.parent();
        var small = formControl.find('small');
        small.text(message);
        formControl.removeClass('error');
        formControl.addClass('success');
        input.addClass('successborder');
      }

      function isEmail(emailval) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(emailval);
      }
    }
  });
})(jQuery);