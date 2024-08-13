<?php
include "header.php";
?>
<html>

<div class="w3-content w3-section" style="max-width:500px">
    <p>indian Heritage & Culture.</p>

    <img class="mySlides w3-animate-fading" src="img/l1.jpg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="img/c2.jpeg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="img/h2.jpeg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="img/c3.jpeg" style="width:100%">
    <img class="mySlides w3-animate-fading" src="img/h4.jpeg" style="width:100%">
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 9000);
    }
</script>

</body>

</html>