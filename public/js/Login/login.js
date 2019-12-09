$(function(){

    $('.eye').click(function(){
        let eye = $(this).find('.input-group-text i');
        if(eye.attr('class') == 'fas fa-eye'){
            eye.attr('class', 'fas fa-eye-slash')
            // $('.password').get(0).type = "password";
            $('.password').attr('type', 'password')
        }
        else{
            eye.attr('class', 'fas fa-eye')
            $('.password').attr('type', 'text')
            // $('.password').get(0).type = "text";
        }
    })

    $('#registration').click(function(){
        $('#login').attr('class', 'hide');
        $('#register').attr('class','show');
        $('.password').attr('type', 'password')
    })

    $('#loginNow').click(function(){
        $('#login').attr('class', 'show');
        $('#register').attr('class','hide');
        $('.password').attr('type', 'password')
    })

})
