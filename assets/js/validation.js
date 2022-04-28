var $ = jQuery.noConflict();

(function($) {
    "use strict";

const contactbutton = document.getElementById('contactformbtn');
const contactform = document.getElementById('contactformx');
const message = document.getElementById('contactmessage');
const email = document.getElementById('contactemail');
const subject = document.getElementById('contactsubject');
const name = document.getElementById('contactname');
const phone = document.getElementById('contactphone');
const serverfeedback = document.getElementById('serverfeedback');


 contactbutton.addEventListener('click', function(e){
     e.preventDefault();
     checkinputs();

 })


function checkinputs(){
    const messagevalue = message.value;
    const emailvalue = email.value.trim();
    const subjectvalue = subject.value;
    const namevalue = name.value;
    const phonevalue = phone.value.trim();
    
    if(messagevalue === ''){
        setErrorFor(message, 'This field cannot be blank');

    }else{
        setSuccessFor(message, '');
     
    }
    if(emailvalue === ''){
        setErrorFor(email, 'This field cannot be blank');
    } else if (!isEmail(emailvalue)) {
		setErrorFor(email, 'Not a valid email');
    }else{
        setSuccessFor(email, '');

    }
    if(subjectvalue === ''){
        setErrorFor(subject, 'This field cannot be blank');

    }else{
        setSuccessFor(subject, '');
     
    }
    if(phonevalue === ''){
        setErrorFor(phone, 'Phone number is required');
    
    }else{
        setSuccessFor(phone, '');
    }
    if(namevalue === ''){
        setErrorFor(name, 'You can use the name XYZ if you dont want to use your real name');
 

    } else{
        setSuccessFor(name, '');
    
    }

        function setErrorFor(input, message){
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            small.innerText =   message; 
            formControl.classList.add('error');
            input.classList.add('errorborder');
         
         }
    
        function setSuccessFor(input, message){
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            small.innerText =   message; 
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

 contactbbtn.on('click', function(e){
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
              success:  function (response) {
              }, 
        }); 


 });



    //order page validation


    const orderbutton = $('#ordernowbtn');
    const date = $('#orderdate');
    const emailorder = $('#orderemail');
    const dropoffpoint = $('#dropoffpoint');
    const nameorder = $('#ordername');
    const phoneorder = $('#orderphone');
    const orderfeedback = $('#orderfeedback');
    
    
     orderbutton.on('click', function(e){
         e.preventDefault();
         checkInputs();

     
    function checkInputs(){
        const dateval = date.val();
        const emailval = emailorder.val();
        const dropoffval = dropoffpoint.val();
        const nameval = nameorder.val();
        const phoneraw = phoneorder.val();
        const phoneval = $.trim(phoneraw);
    
    
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
              success:  function (response) {
              }, 
        }); 
    
        
        if(dropoffval === ''){
            seterrorFor(dropoffpoint, 'Your dropoff location needed');
    
        }else{
            setsuccessFor(dropoffpoint, '');
         
        }
        if(emailval === ''){
            seterrorFor(emailorder, 'This field cannot be blank');
        } else if (!isEmail(emailval)) {
            seterrorFor(emailorder, 'Not a valid email');
        }else{
            setsuccessFor(emailorder, '');
    
        }
        if(dateval === ''){
            seterrorFor(date, 'Select today\'s date');
    
        }else{
            setsuccessFor(date, '');
         
        }
        if(phoneval === ''){
            seterrorFor(phoneorder, 'Phone number is required');
        
        }else{
            setsuccessFor(phoneorder, '');
        }
        if(nameval === ''){
            seterrorFor(nameorder, 'Your name is required');
     
    
        } else{
            setsuccessFor(nameorder, '');
        
        }
    
            function seterrorFor(input, message){
                const formControl = input.parent();
                const small = formControl.find('small');
                small.text(message) 
                formControl.addClass('error');
                input.addClass('errorborder');
             
             }
        
            function setsuccessFor(input, message){
                const formControl = input.parent();
                const small = formControl.find('small');
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


    
    