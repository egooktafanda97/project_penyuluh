// menu

$('.act').click(function() {
    $('.act').removeClass('active');
    $(this).addClass('active');
});


function alertSuccess() {
    swal("success", "Data Tersimpan", "success", {
      button: "Ok",
    }).then((value) => {
      window.location.assign(location)
    });
  }
  function  alertGagal() {
    swal("Ma'af!", "Seperti nya ada kesalahan", "error", {
      // button: "Ok",
    }).then((value) => {
      window.location.assign(location)
    });
  }

// 



function numeric(cls) {
	$('.'+cls).keyup(function () {
	    if (this.value != this.value.replace(/[^0-9\.]/g, '')) {
	       this.value = this.value.replace(/[^0-9\.]/g, '');
	    }
	});
}

 function empty(e) {
      switch (e) {
        case "":
        case 0:
        case "0":
        case null:
        case false:
        case typeof(e) == "undefined":
          return true;
        default:
          return false;
      }
    }
    function show_xpanel(class_){
      $('.'+class_).show();
    }
    function hide_xpanel(class_){
      $('.'+class_).hide();
    }