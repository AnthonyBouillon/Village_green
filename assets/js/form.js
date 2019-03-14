$(document).ready(function () {
    function delete_by_product(e) {
        var form_delete_cart = $(this);
        // Destination des données, les données, fonction =>
        $.post('http://localhost/village_green/carts/delete_cart', form_delete_cart.serialize(), function () {
            // Actualise le panier
            $('.card-body').load('http://localhost/village_green/carts/cart .card-body', function(){
                  $('.delete_cart').submit(delete_by_product);
            });
        });
        e.preventDefault();
    }
    $('.delete_cart').submit(delete_by_product);
    
  /*  function sign_in(e) {
        var form_delete_cart = $(this);
        // Destination des données, les données, fonction =>
        $.post('http://localhost/village_green/users/login', form_delete_cart.serialize(), function (data) {
           
          console.log(data.);
        });
        e.preventDefault();
    }
    $('.form_login').submit(sign_in);*/
    /**
     * Vérification du formulaire d'inscription
     * taille
     * format
     * null
     * message + border
     */
    $('#form_register').submit(function (event) {
        // Détermine si le formulaire peut être soumis
        var fail = false;
        // Valeurs des champs du formulaire
        var name = $('#name').val();
        var firstname = $('#firstname').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var address = $('#address').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();


        // Teste la longueur => bordure + message en rouge
        if (name !== null) {

            if (name.length < 2) {
                $('#error_name').html("Le nom doit comporter minimum 2 caractères<br/>");
                $('#name').css('border-color', 'red');
                fail = true;
            } else if (name.length >= 151) {
                $('#error_name').html("Le nom doit comporter maximum 150 caractères<br/>");
                $('#name').css('border-color', 'red');
                fail = true;
            } else {
                $('#error_name').html("");
                $('#name').css('border-color', 'green');
            }
        }

        // Teste la longueur => bordure + message en rouge
        if (firstname !== null) {

            if (firstname.length < 2) {
                $('#error_firstname').html("Le prénom doit comporter minimum 2 caractères<br/>");
                $('#firstname').css('border-color', 'red');
                fail = true;
            } else if (firstname.length >= 151) {
                $('#error_firstname').html("Le prénom doit comporter maximum 150 caractères<br/>");
                $('#firstname').css('border-color', 'red');
                fail = true;
            } else {
                $('#error_firstname').html("");
                $('#firstname').css('border-color', 'green');
            }
        }

        // Teste le format
        // Teste la longueur => bordure + message en rouge
        if (phone !== null) {

            var format_phone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
            var regex = new RegExp(format_phone);

            if (!regex.test(phone)) {
                $('#format_phone').html("Le format du numéro est incorrect<br/>");
                $('#phone').css('border-color', 'red');
                fail = true;
            } else if (phone.length < 2) {
                $('#error_phone').html("Le numéro du téléphone doit comporter minimum 2 caractère<br/>");
                $('#phone').css('border-color', 'red');
                fail = true;
            } else if (phone.length >= 16) {
                $('#error_phone').html("Le numéro du téléphone doit comporter maximum 15 caractères<br/>");
                $('#phone').css('border-color', 'red');
                fail = true;
            } else {
                $('#error_phone').html("");
                $('#format_phone').html("");
                $('#phone').css('border-color', 'green');
            }
        }

        // Teste le format
        // Teste la longueur => bordure + message en rouge
        if (email !== null) {

            var format_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var regex = new RegExp(format_email);

            if (!regex.test(email)) {
                $('#format_email').html("Le format de l\'email est incorrect<br/>");
                $('#email').css('border-color', 'red');
                fail = true;
            } else if (email.length <= 4) {
                $('#error_email').html("L\'email doit comporter minimum 4 caractères<br/>");
                $('#email').css('border-color', 'red');
                fail = true;
            } else if (email.length >= 151) {
                $('#error_email').html("L\'email doit comporter maximum 150 caractères<br/>");
                $('#email').css('border-color', 'red');
                fail = true;
            } else {
                $('#error_email').html("");
                $('#format_email').html("");
                $('#email').css('border-color', 'green');
            }
        }

        // Teste la longueur => bordure + message en rouge
        if (address !== null) {

            if (address.length < 8) {
                $('#error_address').html("L'adresse doit comporter minimum 8 caractères<br/>");
                $('#address').css('border-color', 'red');
                fail = true;
            } else if (address.length >= 151) {
                $('#error_address').html("L'adresse doit comporter maximum 150 caractères<br/>");
                $('#address').css('border-color', 'red');
                fail = true;
            } else {
                $('#error_address').html("");
                $('#address').css('border-color', 'green');
            }
        }

        // Teste si les deux mots de passe coincident
        if (password !== null && confirm_password !== null) {
            if (password !== confirm_password) {
                $('#similar_password').html("Les deux mots de passe ne correspondent pas<br/>");
                $('#password').css('border-color', 'red');
                $('#confirm_password').css('border-color', 'red');
                fail = true;
            } else {
                $('#similar_password').html("");
                $('#password').css('border-color', 'green');
                $('#confirm_password').css('border-color', 'green');
            }
        }
        // Si erreur => soumission du formulaire bloqué
        if (fail) {
            event.preventDefault();
        }
    });


    $(function () {
        // run the currently selected effect
        function runEffect() {
            // get effect type from
            var selectedEffect = "slide";

            // Most effect types need no options passed by default
            var options = {};
            // some effects have required parameters
            if (selectedEffect === "scale") {
                options = {percent: 50};
            } else if (selectedEffect === "size") {
                options = {to: {width: 280, height: 185}};
            }

            // Run the effect
            $("#effect").show(selectedEffect, options, 500, callback);
        }
        ;

        //callback function to bring a hidden box back
        function callback() {
            setTimeout(function () {
                $("#effect:visible").removeAttr("style").fadeOut();
            }, 1000);
        }
        ;

        // Set effect from select menu value
        $(".btn_delete_cart").on("click", function () {
            runEffect();
        });

        $("#effect").hide();
    });

    if ($(window).width() < '750') {
        $("nav").addClass("fixed-top");
    }
    $('#form_paypal').hide();
    $('#btn_command').click(function () {
        $('#form_paypal').show();
        $('#form_command').hide();
    });

});

