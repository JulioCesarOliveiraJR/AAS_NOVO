jQuery(document).ready(function ($) {
    if ($("#contactForm")[0]) {

        $('#contactForm').submit(function () {
            $('#contactForm .error').remove();
            $('.requiredField').removeClass('fielderror');
            $('.requiredField').addClass('fieldtrue');
            $('#contactForm span strong').remove();
            var hasError = false;
            
            var msg   = $('#g-recaptcha-response').val();
            //alert(jQuery.trim($(this).val())); 
            
            $('#contactForm .requiredField').each(function () {
                
                if (jQuery.trim($(this).val()) === '') {
                    var labelText = $(this).prev('label').text();
                    $(this).addClass('fielderror');
                    $('.alertMessage').html('<div class="notification-box notification-box-error"><p><i class="icon-remove-sign"></i>Erro: <strong>*Por Favor, Preencha todos os Campos.</strong></p><a href="#" class="notification-close notification-close-error"><i class="icon-remove"></i></a></div>');
                    hasError = true;
                } else if ($(this).hasClass('email')) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if (!emailReg.test(jQuery.trim($(this).val()))) {
                        var labelText = $(this).prev('label').text();
                        $(this).addClass('fielderror');
                        $('.alertMessage').html('<div class="notification-box notification-box-error"><p><i class="icon-remove-sign"></i>Erro: <strong>Email incorreto</strong></p><a href="#" class="notification-close notification-close-error"><i class="icon-remove"></i></a></div>');
                        hasError = true;
                    }
                } else if(jQuery.trim(msg) == ''){
                    $('.alertMessage').html('<div class="notification-box notification-box-error"><p><i class="icon-remove-sign"></i>Erro: <strong>*Por Favor, Preencha o campo robô.</strong></p><a href="#" class="notification-close notification-close-error"><i class="icon-remove"></i></a></div>');
                    hasError = true;
                }
            });
            if (!hasError) {
                $('#contactForm').slideDown('normal', function () {
                    $("#contactForm #send").addClass('load-color');
                    $("#contactForm #send").attr("disabled", "disabled").html('Formulário sendo enviado. Aguarde...');
					$('.alertMessage').html('');
                });
                var formInput = $(this).serialize();
                $.post($(this).attr('action'), formInput, function (data) {
                    $('#contactForm').slideUp("normal", function () {
                        $(this).before('<div class="notification-box notification-box-success"><p><i class="icon-ok"></i>Obrigado!</strong> Seu Formulário foi enviado com sucesso.</p></div>');
                    });
                });
            }
            return false;
        });
    }
});
