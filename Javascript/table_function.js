$(document).ready(function() {
	$('[data-toggle="toggle"]').change(function(){
		$(this).parents().next('.hide').toggle();
	});
});

function myFunction() {
  var x = document.getElementById("dc");
  if (x.innerHTML === "[+]") {
    x.innerHTML = "[-]";
  } else {
    x.innerHTML = "[+]";
  }
}
function myFunction2() {
  var x = document.getElementById("mc");
  if (x.innerHTML === "[+]") {
    x.innerHTML = "[-]";
  } else {
    x.innerHTML = "[+]";
  }
}
function myFunction3() {
  var x = document.getElementById("ge");
  if (x.innerHTML === "[+]") {
    x.innerHTML = "[-]";
  } else {
    x.innerHTML = "[+]";
  }
}
function myFunction4() {
  var x = document.getElementById("el");
  if (x.innerHTML === "[+]") {
    x.innerHTML = "[-]";
  } else {
    x.innerHTML = "[+]";
  }
}
function myFunction5() {
  var x = document.getElementById("exel");
  if (x.innerHTML === "[+]") {
    x.innerHTML = "[-]";
  } else {
    x.innerHTML = "[+]";
  }
}