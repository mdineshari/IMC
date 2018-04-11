$(document).ready(function(){
      var input = document.getElementById('city');
      var autocomplete = new google.maps.places.Autocomplete(input);

      $.ajax({
            type: "GET",
            url: "api/getStartupCount.php",
            data: "",
            type: 'text',
            success: function(data){
                  $('#startup_count').html(data);
                  $('#see_more a').html(parseInt(parseInt(data)-4) + '<br/> More');
            },
            error: function(e){
                  alert(e)
            }
      });

      $.ajax({
            type: "GET",
            url: 'api/getStartUpLogo.php',
            data:"",
            dataType: 'html',
            success: function(data) {
                  $('#rectenly-registered .four_cells').html(data);
            }
      });
      
      $.ajax({
            type: "GET",
            url: 'api/getThemes.php',
            data:"",
            dataType: 'html',
            success: function(data) {
                  console.log(data);
                  $('select#theme').html('<option>Select Themes</option>' + data);
            }
      });
      
});