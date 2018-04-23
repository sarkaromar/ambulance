// fetch area name by division id ----------
$("#division").change(function () {
    // when division is changed do empty right side gen name field
    $('#area').val('');
    
    // get division value
    var division = this.value;
    
    // empty area first then append loading
    $('#area').empty();
    $('#area').append("<option>Loading...</option>");
    // ajax
    $.ajax({
        // method define
        type: "get",
        // targeted URL
        url: BASE_URL + "/get-area",
        // trigger data 
        data: {
            "division": division
        },
        // content type
        contentType: "application/json;charset=utf-8",
        dataType: 'json',
        // success response
        success: function (response_data) {
            $('#area').empty();
            $('#area');
            $.each(response_data, function(key) {
                $('#area').append('<option value="' + response_data[key].id + '">' + response_data[key].area_name + '</option>');
            });
        },
        // error response
        error: function () {
           $('#error').html('<span style="color:red"s>Error! get area id!</span>');
        }
    });

});
// end

// fetch area name by division slug ----------
$("#division_slug").change(function () {
    // when division is changed do empty right side gen name field
    $('#area').val('');
    
    // get division value
    var DiviName = this.value;
    
    // empty area first then append loading
    $('#area').empty();
    $('#area').append("<option>Loading...</option>");
    // ajax
    $.ajax({
        // method define
        type: "get",
        // targeted URL
        url: BASE_URL + "/get-area-by-slug",
        // trigger data 
        data: {
            "DiviName": DiviName
        },
        // content type
        contentType: "application/json;charset=utf-8",
        dataType: 'json',
        // success response
        success: function (response_data) {
            $('#area').empty();
            $('#area');
            $.each(response_data, function(key) {
                $('#area').append('<option value="' + response_data[key].area_slug + '">' + response_data[key].area_name + '</option>');
            });
        },
        // error response
        error: function () {
           $('#error').html('<span style="color:red"s>Error! get area id!</span>');
        }
    });

});
// end