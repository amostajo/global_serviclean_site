$(document).ready(function(){

  $('.ajaxForm').submit(function (e) {
      e.preventDefault();
      var url = $(this).attr("action-url");
      if (url) {
        $(this).Post(this, url);
      }
  });

  $('.alert').hide();

  $.fn.Post = function (form, url) {
    var alert = $(form).find(".alert");
    var btn = $(form).find(".btn");
    if (form) {
      if (alert) {
        alert.hide("blind");
      }
      if (btn) {
        btn.button('loading');
      }
      $.ajax({
          type: "POST",
          url: url,
          data: $(form).serialize(),
          dataType: "json",
          success: function (result) {
              
              if (btn) {
                btn.button('reset');
              }

              if (result.error) {

                if (alert) {
                  alert.removeClass('alert-success');
                  alert.addClass('alert-danger');
                  alert.html(result.message);
                  alert.show("blind");
                }
                if (btn) {
                  btn.addClass('btn-danger');
                  setTimeout(function () {
                    btn.removeClass('btn-danger');
                  }, 1000);
                }

              } else {

                if (alert) {
                  alert.removeClass('alert-danger');
                  alert.addClass('alert-success');
                  alert.html(result.message);
                  alert.show("blind");
                }
                if (btn) {
                  btn.addClass('btn-success');
                  setTimeout(function () {
                    btn.removeClass('btn-success');
                  }, 1000);
                }
              }
          }
      });
    }
  }

});