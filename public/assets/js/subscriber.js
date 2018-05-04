// save subscriber from footer  ----------
$("#subs_btn").click(function () {

    // feedback id
    var $sub_res = $("#subs_res");
   
    //get value 
    var subs_email = $('#subs_email').val();

    // check is value exist
    if(subs_email != '' &&  subs_email != null){
        
        // check is validate email
        if (validateEmail(subs_email)) {
            
            $sub_res.empty();
            $sub_res.html("<label><strong>Sending request...</strong></label>");
            // $sub_res.css("color", "white");
            
            // ajax action
            $.ajax({
                type: "get",
                url: BASE_URL + "/subscriber",
                data: {
                    "subs_email": subs_email
                },
                // content type
                contentType: "application/json;charset=utf-8",
                dataType: 'json',

                // success response
                success: function (response_data) {
                    
                    $sub_res.empty();
                    $sub_res.html("<strong>ধন্যবাদ!</strong> আপনি নিউজলেটারের সদস্য হয়েছেন!");
                    $sub_res.css("color", "white");

                },
                // error response
                error: function () {

                    $sub_res.empty();
                    $sub_res.html("<strong>দুঃখিত!</strong> পরে চেষ্টা করুন!");
                    $sub_res.css("color", "red");
                   
                }
            });

        } else {

            $sub_res.empty();
            $sub_res.html("<strong>Sorry!</strong> Invalid email!");
            $sub_res.css("color", "red");

        }

    }else{

        // empty value report
        $sub_res.empty();
        $sub_res.html("<strong>Sorry!</strong> Empty field!");
        $sub_res.css("color", "red");
    
    }
    

});
// end

// check validation of email and return it
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}