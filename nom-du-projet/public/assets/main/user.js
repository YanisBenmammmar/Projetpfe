/* La vérification de l'enregistriment */
console.log("working");
$('#register-user').click(function(){
    console.log("working");

    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var password_confirm = $("#password_confirm").val();
    var commune = $("#commune").val();
    var wilaya = $("#wilaya").val();
    var tel = $("#tel").val();
    var dateN = $("#dateN").val();
    var lieuN = $("#lieuN").val();
    var agreeTerms = $('#agreeTerms');
    var adresse = $("#adresse").val();

    var passwordLength = password.length;

    console.log("working");

    if(firstname!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(firstname)){
        $('#firstname').removeClass('is-invalid');
        $('#firstname').addClass('is-valid');
        $('#error-register-firstname').text('');

        if(lastname!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lastname)){
            $('#lastname').removeClass('is-invalid');
            $('#lastname').addClass('is-valid');
            $('#error-register-lastname').text('');

            if(email!= "" &&  /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text('');

                if (passwordLength>=8){
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text('');

                    if (password == password_confirm){
                        $('#password_confirm').removeClass('is-invalid');
                        $('#password_confirm').addClass('is-valid');
                        $('#error-register-password_confirm').text('');

                        if(commune!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(commune)){
                            $('#commune').removeClass('is-invalid');
                            $('#commune').addClass('is-valid');
                            $('#error-register-commune').text('');

                            if(wilaya!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(wilaya)){
                                $('#wilaya').removeClass('is-invalid');
                                $('#wilaya').addClass('is-valid');
                                $('#error-register-wilaya').text('');
                                if( tel!= "" && /^(\+?213|0)(5|6|7)\d{8}$/.test(tel)){
                                    $('#tel').removeClass('is-invalid');
                                    $('#tel').addClass('is-valid');
                                    $('#error-register-tel').text('');

                                    if(dateN!= "" ){
                                        $('#dateN').removeClass('is-invalid');
                                        $('#dateN').addClass('is-valid');
                                        $('#error-register-dateN').text('');

                                        if(lieuN!= "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(lieuN)){
                                            $('#lieuN').removeClass('is-invalid');
                                            $('#lieuN').addClass('is-valid');
                                            $('#error-register-lieuN').text('');

                                            if(adresse!= "" ){
                                                $('#adresse').removeClass('is-invalid');
                                                $('#adresse').addClass('is-valid');
                                                $('#error-register-adresse').text('');

                                                if(agreeTerms.is(':checked')){
                                                    $('#agreeTerms').removeClass('is-invalid');
                                                    $('#agreeTerms').addClass('is-valid');
                                                    $('#error-register-agreeTerms').text('');

                                                   $('#form-register').submit();

                                                  /*var res = emailExistjs(email);
                                                $('#form-register').submit();
                                                  console.log(res);

                                                  if (res == "not_exist"){
                                                    console.log("azuk");
                                                  } else{
                                                    $('#email').removeClass('is-valid');  $('#email').addClass('is-invalid');
                                                    $('#error-register-email').text('Email existe déja');

                                                  }*/










                                                }else{
                                                    $('#agreeTerms').addClass('is-invalid');
                                                    $('#error-register-agreeTerms').text('Les termes non acceptés ');
                                                }


                                        } else{
                                                $('#adresse').addClass('is-invalid');
                                                $('#error-register-adresse').text('Adresse non valide');
                                            }


                                     } else{
                                            $('#lieuN').addClass('is-invalid');
                                            $('#error-register-lieuN').text('Lieu de naissance non valide');
                                        }


                                } else{
                                        $('#dateN').addClass('is-invalid');
                                        $('#error-register-dateN').text('Date de naissance non valide');
                                    }

                            } else{
                                    $('#tel').addClass('is-invalid');
                                    $('#error-register-tel').text('Numéro de téléphone non valide');
                                }


                        } else{
                                $('#wilaya').addClass('is-invalid');
                                $('#error-register-wilaya').text('Wilaya non valide');
                            }

                        } else{
                            $('#commune').addClass('is-invalid');
                            $('#error-register-commune').text('Commune non valide');
                            }
                    }else{
                        $('#password_confirm').addClass('is-invalid');
                        $('#error-register-password_confirm').text('La confirmation du Mot de passe non valide');

                    }
                } else{
                    $('#password').addClass('is-invalid');
                     $('#error-register-password').text('Mot de passe non valide');

                }

        } else{
                $('#email').addClass('is-invalid');
                $('#error-register-email').text('Email non valide');
                }

    } else{
            $('#lastname').addClass('is-invalid');
            $('#error-register-lastname').text('Nom non valide');
        }

    } else{
        $('#firstname').addClass('is-invalid');
        $('#error-register-firstname').text('Prénom non valide');
        }
























});

// Evénement pour les termes et les conditions

$('#agreeTerms').change(function(){
    var agreeTerms = $('#agreeTerms');

    if(agreeTerms.is(':checked')){
        $('#agreeTerms').removeClass('is-invalid');
        $('#agreeTerms').addClass('is-valid');
        $('#error-register-agreeTerms').text('');

    }else{
        $('#agreeTerms').addClass('is-invalid');
        $('#error-register-agreeTerms').text('Les termes non acceptés ');
    }



});


function emailExistjs(email)
{
    var url = $('#email').attr('url-emailExist');
    console.log(url);
    var token = $('#email').attr('token');
    console.log(token);
    var res = "";

    $.ajax({
        method: 'GET',
        url: url,
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        data: {
            '_token': token,
             email: email
        },
        success :function(result){
            res = result.response;


        },
        async: false
    });
    console.log("test");
    console.log(email);


    return res;

}



