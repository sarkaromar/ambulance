
// this function used for select and de-select all table row -------------------
// this function use in every jquery data table 
$(document).ready(function () {
    $('#selectall').click(function (event) {  //on click 
        if (this.checked) { // check select status
            $('.checkbox1').each(function () { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        } else {
            $('.checkbox1').each(function () { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });
        }
    });
});

//this function use for delete specific row with table name and id -------------
//this function can delecte multiple table value with fixed id
//@author jahid al mamun
function dodelete(table, field, id, image){
  // check confirm
  if (confirm("Are you sure to delete? Click OK to confirme")){
    // looping for multi table 
    for (i = 0; i < table.length; i++){
      $.ajax({
        url: BASE_URL + "/admin/cmn-delete",
        // fired data type
        data: {
            "table": table[i],
            "field": field,
            "id": id
        },
        // content type
        contentType: "application/json;charset=utf-8",
        dataType: 'json',

        success: function (data)
        {
            $('#row_' + id).remove();
        },
        error: function (data)
        {
          $('#error').html('<span>dodelete problem from ajax!</span>');
        }
      });
    } // end loop

    // if image value exist
    // if (image != ''){
    //     $.ajax({
    //         url: BASE_URL + "common/image_delete/" + image,
    //         success: function (data)
    //         {

    //         }
    //     });
    // } // if end
  }// end confirm 
} // function end

//this function use for select all delete with multiple table and id with ajax loop system 
//and if have image there but have need to rename when it add in system
function deleteall(table, field, image){
  // confirm
  if (confirm("Are you sure to delete? Click OK to confirme")) {

    // looping depend on number of table
    for (i = 0; i < table.length; i++) {
      
      $('input[type=checkbox]').each(function () {
        
        if (this.checked) {
          var value = $(this).val();
          var temp = value.split("-");
          var id = temp[0]; //alert(id);
          var image = temp[1]; //image(id);

          //delete multiple table data with id and table name
          $.ajax({
            url: BASE_URL + "/admin/cmn-delete",
            // fired data type
            data: {
                "table": table[i],
                "field": field,
                "id": id
            },
            // content type
            contentType: "application/json;charset=utf-8",
            dataType: 'json',

            success: function (data)
            {
                $('#row_' + id).remove();
            },
            error: function (data)
            {
              $('#error').html('<span>deleta all problem from ajax!</span>');
            }
          });

          // if image exist
          // if (image != '') {
          //   $.ajax({
          //       url: BASE_URL + "/admin/cmn-img-delete/" + image,
          //       success: function (data)
          //       {

          //       }
          //   });
          //} // if image 

        } // end if checked chekcbox

      }); // end checkbox jekhane jekhane ase

    } // end for loop

  } // end if confirm

}// end function


// this function used for lost report status changed   
function status_change(table,field,id,status,status_field){

  // confirm
  if (confirm("Are you sure? Click OK to confirme")) {

    // ajax action
    $.ajax({
      url: BASE_URL + "/admin/cmn-report-status",
      // fired data type
      data: {
          "table": table,
          "field": field,
          "id": id,
          "status": status,
          "status_field": status_field
      },

      // content type
      contentType: "application/json;charset=utf-8",
      dataType: 'json',

      // success feedback
      success:function(data){
        $('#row_' + id).remove();
      },
      // error feedback
      error:function(data){
        $('#error').html('<span>status changed error!</span>');
      }
    });

  } // confirm

}

// next time use
// function set_primary(product_id,clipart_id) {

//   $('.primary_set').attr('checked', false);

//   $.ajax({
//     url:BASE_URL+'common/set_default_product/'+product_id+'/'+clipart_id,
//       success: function (data){
                      
//       $('#default_'+product_id).prop('checked', true);
//       // location.reload();
//       }
//   });

// }