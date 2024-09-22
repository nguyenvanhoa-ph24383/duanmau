var allowed_file_size = "10048576";
var allowed_files = ['application/rtf','application/mspowerpoint','application/msword','application/excel','application/pdf','text/plain', 'image/png', 'image/gif', 'image/jpeg', 'image/pjpeg'];
var border_color = "#C2C2C2"; 

$("#contact_body").submit(function(e){
    e.preventDefault(); 
    proceed = true;

   
    $($(this).find("input[data-required=true], textarea[data-required=true]")).each(function(){
            if(!$.trim($(this).val())){ 
                $(this).css('border-color','red'); 
                proceed = false; 
            }
           
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); 
                proceed = false; 
            }
    }).on("input", function(){ 
         $(this).css('border-color', border_color);
    });

    
    if(proceed){
        var post_url = $(this).attr("action"); 
        var request_method = $(this).attr("method"); 
        var form_data = new FormData(this); 

        $.ajax({ 
            url : post_url,
            type: request_method,
            data : form_data,
            dataType : "json",
            contentType: false,
            cache: false,
            processData:false
        }).done(function(res){ 
            if(res.type == "error"){
                $("#contact_results").html('<div class="error">'+ res.text +"</div>");
            }

            if(res.type == "done"){
    			$("#contact_results").html('<div class="success alert alert-success">'+ res.text +"</div>");
			}
		});
	}
});
