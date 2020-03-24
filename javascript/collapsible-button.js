$(document).ready(function() {
    var collapBtns = $(".collapBtn");

    for (i = 0; i < collapBtns.length; i++) {
        collapBtns[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
});