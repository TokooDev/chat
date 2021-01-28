$(document).ready(function(){
    $('.field-input').focus(function(){
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function(){
        $parent = $(this).parent();
        if($(this).val() == ''){
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function(){
        if($(this).val() != ''){
            $(this).parent().addClass('has-label');
        }
    });

    $('#regForm').submit(function(){
        var nom = $('#nom').val();
        var email = $('#email').val();
        var password = $('#password').val();

        var result = true;

        if(nom == ""){
            $('#nom').parent().addClass('is-focused error');
            result = false;
        }

        if(email == ""){
            $('#email').parent().addClass('is-focused error');
            result = false;
        }

        if(password == ""){
            $('#password').parent().addClass('is-focused error');
            result = false;
        }

        return result;

    });

    $('#nom').keyup(function(){
        if($('#nom').val() == ""){
            $('#nom').parent().addClass('is-focused error');
        }else{
            $('#nom').parent().removeClass('error');
        }
    });

    $('#email').keyup(function(){
        if($('#email').val() == ""){
            $('#email').parent().addClass('is-focused error');
        }else{
            $('#email').parent().removeClass('error');
        }
    });

    $('#password').keyup(function(){
        if($('#password').val() == ""){
            $('#password').parent().addClass('is-focused error');
        }else{
            $('#password').parent().removeClass('error');
        }
    });

});