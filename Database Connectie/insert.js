$(document).ready(function(){
  var form = $("form");

  form.submit(function(event) {
    event.preventDefault();

    var naam = $("input[name=naam]");
    var email = $("input[name=email]");
    var bericht = $("textarea[name=bericht]");

    var formData = {
      "naam": naam.val(),
      "email": email.val(),
      "bericht": bericht.val()
    };

    if ((formData.naam != "") && (formData.email != "") && (formData.bericht != "")) {
      $.ajax({
        "type": "POST",
        "url": "lookup.php",
        "data": formData,
        "dataType": "json",
        "encode": true
      })
      .done(function(response){
        alert(response.email);
      })
    } else {
      if(formData.naam == "") {
        var naamGroep = $("#naam-groep");
        naamGroep.addClass("has-error");
        naamGroep.find(".help-block").html('Uw naam is niet ingevuld.');
      }
    }

  })
})
