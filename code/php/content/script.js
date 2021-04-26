


//Getting value from "ajax.php".
function fill(Value) {
  //Assigning value to "search" div in "search.php" file.
  $('#search').val(Value);
  //Hiding "display" div in "search.php" file.
  $('#display').hide();
}
$(document).ready(function() {
  //On pressing a key on "Search box" in "search.php" file. This function will be called.
  $("#search").keyup(function() {
    //Assigning search box value to javascript variable named as "name".
    var title = $('#search').val();
    //Validating, if "name" is empty.
    if (title == "") {
      //Assigning empty value to "display" div in "search.php" file.
      $("#display").html("");
    }
    //If name is not empty.
    else {
      //AJAX is called.
      $.ajax({
        //AJAX type is "Post".
        type: "POST",
        //Data will be sent to "ajax.php".
        url: "../content/ajax.php",
        //Data, that will be sent to "ajax.php".
        data: {
          //Assigning value of "name" into "search" variable.
          search: title
        },
        //If result found, this funtion will be called.
        success: function(html) {
          //Assigning result to "display" div in "search.php" file.
          $("#display").html(html).show();
        }
      });
    }
  });
});
