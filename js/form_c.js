   $(document).ready(function(){
   
        $('#send_message').click(function(e){
            e.preventDefault();

            var error = false;
           
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var title = $('#title').val();
            var company = $('#company').val();
            var message = $('#message').val();
            var chainesuccess = 'Thank you, we will contact you soon.';
            var chaineerror = 'Sorry, an error occured. please try again.';
            
            if(firstname.length == 0){
                var error = true;
                $('#contact #firstname').addClass("erreurform");
            }else{
                $('#contact #firstname').removeClass("erreurform");
            }
            if(lastname.length == 0){
                var error = true;
                $('#contact #lastname').addClass("erreurform");
            }else{
                $('#contact #lastname').removeClass("erreurform");
            }
            if(phone.length == 0){
                var error = true;
                $('#contact #phone').addClass("erreurform");
            }else{
                $('#contact #phone').removeClass("erreurform");
            }
            
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#contact #email').addClass("erreurform");
            }else{
                $('#contact #email').removeClass("erreurform");
            }

            if(company.length == 0){
                var error = true;
                $('#contact #company').addClass("erreurform");
            }else{
                $('#contact #company').removeClass("erreurform");
            }

            if(title.length == 0){
                var error = true;
                $('#contact #title').addClass("erreurform");
            }else{
                $('#contact #title').removeClass("erreurform");
            }
			
            if(message.length == 0){
                var error = true;
                $('#contact #message').addClass("erreurform");
            }
            else{
                $('#contact #message').removeClass("erreurform");
            }
            
            
            if(error == false){
            
                $('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });

                $.post("https://formspree.io/xzbkpyrq", $('#contact_form').serialize(),function(result){
                    if(result === 'Your message has been sent successfully.'){
                      $('#contact #returnmessage').text(chainesuccess);
                      $('#send_message').remove();
                      //$("#contact_form")[0].reset();
                      $('#send_message').removeAttr('disabled').attr('value', 'Message sent successfully');
                      
                    }
                    else{
                      $('#contact #returnmessage').text(chaineerror);
                      $('#send_message').removeAttr('disabled').attr('value', 'Sending fail, please try again');
                      //$('#contact form').fadeOut();
                    }
                });
            }
        });    
    });
