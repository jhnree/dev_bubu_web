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

    $('#registerForm').submit(function(){
        let formData = $(this).serialize();
        $.ajax({
            url:'/register',
            type:'post',
            data: formData
        }).done((result)=>{
            // console.log(result);
            switch(result){
                case 0:
                    toastr.error(result)
                    $('#password').val('');
                    break
                case 1:
                    toastr.success(result)
                    $('#regUsername').val('');
                    $('#regPassword').val('');
                    $('#loginNow').click();
                    break
                case 2:
                    toastr.error('Email or mobile number already exist.')
                    $('#password').val('');
                    break
                case 3:
                    toastr.error('Invalid email address.')
                    $('#password').val('');
                    break
                default: toastr.warning('All fields are required.');
            }
        }).fail({

        })

        return false;
    })

    $('#loginForm').submit(function(){
        let formData = $(this).serialize();

        $.ajax({
            url:'/login-me',
            type:'get',
            data: formData
        }).done(function(result){
            // switch(result){
            //     case '':
            //         break;
            //     case '':
            //         break;
            //     case '':
            //         break;
            // }
            console.log(result);
        }).fail({

        })

        return false;
    })
})
