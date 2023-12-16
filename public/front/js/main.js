new WOW().init();
openImg("lotus");

function openImg(imgName) {
    var i, x;
    x = document.getElementsByClassName("picture");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(imgName).style.display = "block";
}

// send the input
$("#send").click(function(){
    $(this).prev().val("");
  });
// preview and hide password
$("#showPassword").click(function(){
    var foo = $(this).prev().attr("type");
    if(foo == "password"){
      $(this).prev().attr("type", "text");
    } else {
      $(this).prev().attr("type", "password");
    }
  });

  var logID = 'log',
  log = $('<div id="'+logID+'"></div>');
$('body').append(log);
  $('[type*="radio"]').change(function () {
    var me = $(this);
    log.html(me.attr('value'));
  });
  
