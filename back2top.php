<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-image: linear-gradient(#5e0000, #380101);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  transition-duration: 0.3s;
}

#myBtn:hover {
  /* background-color: #555; */
  box-shadow: 0 0 5px black, 0 0 10px black, 0 0 20px black;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">
<i class="fa fa-arrow-up" style='font-size: xx-large;'></i>
</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
