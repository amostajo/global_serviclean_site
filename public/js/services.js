$(document).ready(function() {
 // Tab activation
  $('#service1-tab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })

  $('#service2-tab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })

  $('#service3-tab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })

  $('#service4-tab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  })
  /* BUTTON ANIM */
  $("#budget-request").hide();
  $("#budget-request").removeClass("hidden");
  //$(".service-top").hide();
  //$(".service-top").removeClass("hidden");
  //$(".service-detail").hide();
  //$(".service-detail").removeClass("hidden");

  setInterval(function() {
    $("#budget-request").show("bounce");
  }, 1000);

  $(".service").hover(function(e) {
    //$(this).find(".service-top").show("blind");
    //$(this).find(".service-detail").show("blind");
  })

  $(".service").mouseleave(function(e) {
    //$(this).find(".service-top").hide("blind");
    //$(this).find(".service-detail").hide("blind");
  })

  /* AUTOSELECT TYPE */
  $(".budget-request").click(function(e) {
    $("#type").val($(this).attr("data-value"));
  })

});