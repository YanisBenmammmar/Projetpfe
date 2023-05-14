$('#register-project').click(function(){



    var titre = $("#titre").val();
    var prop = $("#prop").val();
    var lieu = $("#lieu").val();
    var commune = $("#commune").val();
    var wilaya = $("#wilaya").val();
    var desc = $("#desc").val();
    var datedeb = $("#datedeb").val();
    var datefin = $("#datefin").val();
    var valide = $('#valide');

    var photo = document.getElementById("photo");
    var fichier = photo.files[0];

    if(titre !=""){
        $('#titre').removeClass('is-invalid');
        $('#titre').addClass('is-valid');
        $('#error-register-titre').text('');

        if(prop!=""){
            $('#prop').removeClass('is-invalid');
            $('#prop').addClass('is-valid');
            $('#error-register-prop').text('');

            if(lieu!=""){
                $('#lieu').removeClass('is-invalid');
                $('#lieu').addClass('is-valid');
                $('#error-register-lieu').text('');
                if(commune!=""){
                    $('#commune').removeClass('is-invalid');
                    $('#commune').addClass('is-valid');
                    $('#error-register-commune').text('');

                    if(wilaya!=""){
                        $('#wilaya').removeClass('is-invalid');
                        $('#wilaya').addClass('is-valid');
                        $('#error-register-wilaya').text('');

                        if(desc!=""){
                            $('#desc').removeClass('is-invalid');
                            $('#desc').addClass('is-valid');
                            $('#error-register-desc').text('');
                            if(datedeb!=""){
                                $('#datedeb').removeClass('is-invalid');
                                $('#datedeb').addClass('is-valid');
                                $('#error-register-datedeb').text('');

                                if (datefin!= "" && datefin>datedeb){
                                    $('#datefin').removeClass('is-invalid');
                                    $('#datefin').addClass('is-valid');
                                    $('#error-register-datefin').text('');
                                    if(fichier){
                                        $('#photo').removeClass('is-invalid');
                                        $('#photo').addClass('is-valid');
                                        $('#error-register-photo').text('');

                                        if(valide.is(':checked')){
                                            $('#valide').removeClass('is-invalid');
                                            $('#valide').addClass('is-valid');
                                            $('#error-register-valide').text('');

                                            $("#form-project").submit();

                                        } else{
                                            $('#valide').addClass('is-invalid');
                                            $('#error-register-valide').text('Non validé');
                                        }
                                    } else{
                                        $('#photo').addClass('is-invalid');
                                        $('#error-register-photo').text('La photo  est non valide');
                                    }
                                } else{
                                    $('#datefin').addClass('is-invalid');
                                    $('#error-register-datefin').text('La date de la fin  est non valide');
                                }
                            } else{
                                $('#datedeb').addClass('is-invalid');
                                 $('#error-register-datedeb').text('La date de début  est non valide');
                            }

                        } else{
                            $('#desc').addClass('is-invalid');
                            $('#error-register-desc').text('La description  du projet est non valide');
                        }
                    } else{
                        $('#wilaya').addClass('is-invalid');
                        $('#error-register-wilaya').text('La wilaya du projet est non valide');
                    }

                } else{
                    $('#commune').addClass('is-invalid');
                    $('#error-register-commune').text('La commune du projet est non valide');
                }
            } else{
                $('#lieu').addClass('is-invalid');
                $('#error-register-lieu').text('Le lieu du projet est non valide');
            }
        } else{
            $('#prop').addClass('is-invalid');
            $('#error-register-prop').text('Le proprétaire de projet est non valide');
        }
    } else {
        $('#titre').addClass('is-invalid');
        $('#error-register-titre').text('Le titre est non valide');

    }


 });

 $('#valide').change(function(){
    var valide = $('#valide');

    if(valide.is(':checked')){
        $('#valide').removeClass('is-invalid');
        $('#valide').addClass('is-valid');
        $('#error-register-valide').text('');

    }else{
        $('#valide').addClass('is-invalid');
        $('#error-register-valide').text('Non validé');
    }






});


