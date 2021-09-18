<div class="copyright pull-right" style="padding: 15px 34px;">
    <script>
        // document.write(new Date().getFullYear())
    </script>Powered by |
    <a href="https://rearboost.com/" target="_blank">Rearboost Innovations @ 2021</a>
</div>

<script>

  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("inv");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
        } else {
        dropdownContent.style.display = "block";
        }
        });
    }


</script>
