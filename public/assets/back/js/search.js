// get gen type name by gen id (add medicine controller) ----------
$("#gen_id").change(function () {

    // when gen_type_name is changed do empty right side gen name field
    $('#gen_type_name').val('');

    // get gen_id form selection
    var gen_id = this.value;
   
   // gen_type_name empty first then append loading
    $('#gen_type_name').empty();
    $('#gen_type_name').append("<option>Loading...</option>");

    $.ajax({
        // http post method
        type: "get",
        // targeted URL
        url: BASE_URL + "medicine/get_gen_type_name_by_gen_id",
        // fired data type
        data: {
            "gen_id": gen_id
        },
        // content type
        contentType: "application/json;charset=utf-8",
        dataType: 'json',
        // if controller successfully response with expected data 
        success: function (response_data) {
            //$('#response').html(response_data);
            $('#gen_type_name').empty();
           $('#gen_type_name');
            $.each(response_data, function(key) {
                $('#gen_type_name').append('<option value="' + response_data[key].id + '">' + response_data[key].gen_type_name + '</option>');
            });
        },
        // if controller unsuccessfully respons
        error: function () {
           $('#error').html('<span style="color:red"s>get_auth_by_cat_id_error!</span>');
        }
    });

});
// end



// medicine search ----------
$("#medi_name").change(function () {

    // when medicine name is changed do empty right side gen name field
    $('#gen_name').val('');

    // get med_name form selection
    var medi_name = this.value;
   
    // gen name empty first then append loading
    $('#gen_name').empty();
    $('#gen_name').append("<option>Loading...</option>");

    $.ajax({
        // http post method
        type: "get",
        // targeted URL
        url: BASE_URL + "search/get_gen_name_by_medi_name",
        // fired data type
        data: {
            "medi_name": medi_name
        },
        // content type
        contentType: "application/json;charset=utf-8",
        dataType: 'json',
        // if controller successfully response with expected data 
        success: function (response_data) {
            //$('#response').html(response_data);
            $('#gen_name').empty();
           $('#gen_name');
            $.each(response_data, function(key) {
                $('#gen_name').append('<option value="' + response_data[key].id + '">' + response_data[key].gen_name + '</option>');
            });
        },
        // if controller unsuccessfully respons
        error: function () {
           $('#error').html('<span style="color:red"s>get_auth_by_cat_id_error!</span>');
        }
    });

});
// end medicine search