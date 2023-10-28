<script>
    var slideIndex = 1;
    showDivs(slideIndex);
    var scrollByTime = setInterval(function() {
        plusDivs(1)
    }, 5000);

    function plusDivs(n) {
        slideIndex += n;
        showDivs();
    }

    function toDivs(n) {
        slideIndex = n;
        showDivs();
    }

    function showDivs() {
        var i;
        var myDiv = document.getElementById("<?php echo $slideID ?>");
        var imgs = myDiv.getElementsByTagName("img");
        var buttons = myDiv.getElementsByTagName("button");
        if (slideIndex > imgs.length) {
            slideIndex = 1;
        }
        if (slideIndex < 1) {
            slideIndex = imgs.length;
        }
        for (i = 0; i < imgs.length; i++) {
            imgs[i].style.display = "none";
            buttons[i].className = buttons[i].className.replace(" selected", "");
        }
        imgs[slideIndex - 1].style.display = "block";
        buttons[slideIndex - 1].className = buttons[slideIndex - 1].className += " selected";
    }
</script>