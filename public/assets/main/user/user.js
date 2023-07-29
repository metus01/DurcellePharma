/**
 * script pour la vérification de l'enregitrement des utilisateurs
 */

$('#register-user').click(function(){
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var password_confirm = $('#password-confirm').val();
    var passwordLength = password.length;
    var agreeTerms = $('#agreeTerms');
    var number = $('#number').val();
    var address = $('#address').val();
    var ages = $('#ages').val();

  if(firstname != "" && /^[a-zA-Z ÄÃÂÁÀÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){
     $('#firstname').removeClass('is-invalid');
     $('#firstname').addClass('is-valid');
     $('#error-register-firstname').text("");

        if(lastname != "" && /^[a-zA-Z ÄÃÂÁÀÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error-register-lastname').text("");

            if(email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text("");

                if(passwordLength >= 8){
                     $('#password').removeClass('is-invalid');
                     $('#password').addClass('is-valid');
                     $('#error-register-password').text("");

                     if(password == password_confirm){
                         $('#password-confirm').removeClass('is-invalid');
                         $('#password-confirm').addClass('is-valid');
                         $('#error-register-password-confirm').text("");

                         
                        if(number != "" && /^[0-9]+$/.test(number)){
                            $('#number').removeClass('is-invalid');
                            $('#number').addClass('is-valid');
                            $('#error-register-number').text("");

                            if(address != ""){
                                $('#address').removeClass('is-invalid');
                                $('#address').addClass('is-valid');
                                $('#error-register-address').text("");

                                if(ages != "" && /^[0-9]+$/.test(ages)){
                                    $('#ages').removeClass('is-invalid');
                                    $('#ages').addClass('is-valid');
                                    $('#error-register-ages').text("");
                        

                         if(agreeTerms.is(':checked')){
                             $('#agreeTerms').removeClass('is-invalid');
                             $('#error-register-agreeTerms').text("");

                             //envoie du formulaire
                             //alert('data-ok');

                             $('#form-register').submit();

                               /**  var res =  emailExistjs(email);

                                    (res != "exist") ? $('#form-register').submit()
                                         :    ($('#email').addClass('is-invalid'),
                                              $('#email').removeClass('is-valid'),
                                              $('#error-register-email').text("This email address is already used!"));*/


                               /**
                                * condition ternaire
                                * (condition) ? vraie : fausse;
                                * condition avec plusieurs instructions
                                * (condition) ? vraie (inst1, inst1) : fausse (inst1, inst1);
                                */

                         }else{
                             $('#agreeTerms').addClass('is-invalid');
                             $('#error-register-agreeTerms').text("You should agree to our terms and condition!")
                         } 

                        }else{
                            $('#ages').addClass('is-invalid');
                            $('#ages').removeClass('is-valid');
                            $('#error-register-ages').text("Please enter the correct ages!");
                        }

                                        
                        }else{
                            $('#address').addClass('is-invalid');
                            $('#address').removeClass('is-valid');
                            $('#error-register-address').text("Please enter your address!");
                        }
                    
                        }else{
                            $('#number').addClass('is-invalid');
                            $('#number').removeClass('is-valid');
                            $('#error-register-number').text("Your phone number must be contain between 0 to 9!");
                        }

                     }else{
                         $('#password-confirm').addClass('is-invalid');
                         $('#password-confirm').removeClass('is-valid');
                         $('#error-register-password-confirm').text("Your passwords must be identical!");
                     }
                }else{
                     $('#password').addClass('is-invalid');
                     $('#password').removeClass('is-valid');
                     $('#error-register-password').text("Your password must be 8 characteres!");
                }
            }else{
                $('#email').addClass('is-invalid');
                $('#email').removeClass('is-valid');
                $('#error-register-email').text("Your email address is not valid!");
            }

        }else{
            $('#lastname').addClass('is-invalid');
            $('#lastname').removeClass('is-valid');
            $('#error-register-lastname').text("Last Name is not valid!");
        }
 }else{
     $('#firstname').addClass('is-invalid');
     $('#firstname').removeClass('is-valid');
     $('#error-register-firstname').text("First Name is not valid!");
    }
});

//Evenement pour l'input de condition
$('#agreeTerms').change(function(){
 var agreeTerms = $('#agreeTerms');

 if(agreeTerms.is(':checked')){
     $('#agreeTerms').removeClass('is-invalid');
     $('#error-register-agreeTerms').text("");

 }else{
     $('#agreeTerms').addClass('is-invalid');
     $('#error-register-agreeTerms').text("You should agree to our terms and condition!");
 }

});


function emailExistjs(email)
{
 var url = $('#email').attr('url-emailExist');
 var token = $('#email').attr('token');
 var res = "";

 $.ajax({
     type: 'POST',
     url: url,
     data: {
         '_token': token,
         email: email,
     },
     success:function(result){
         res = result.response;
     },
     async: false
 });

 return res;

}
