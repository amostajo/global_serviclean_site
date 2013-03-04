/**
 * Mailer functionality
 *
 * JQuery cdn
 * @author Alejandro Mostajo
 * @version 1.0
 */
$(document).ready(function() {
  // MAILER setup
  $("#mailer-btn").click(function() {
      //show the rotating gif animation
      $('#mailer-loader').css('visibility','visible'); 
      var url = "include/php/ajax/send_email.php";

      $.ajax({
          type: "POST",
          url: url,
          data: $("#mailer").serialize(),
          success: function(innerHtml)
          {
            //if no errors
            if(parseInt(innerHtml)!=0)    
            {
              //load the returned html into results
              $('#mailer-results').html(innerHtml);    
              //and hide the rotating gif
              $('#mailer-loader').css('visibility','hidden');   
            }
          }
      });
      // avoid to execute the actual submit of the form.
      return false; 
  });
  // Validators
  $(function () { $("input,textarea,select").not("[type=submit]").jqBootstrapValidation(); } );
});