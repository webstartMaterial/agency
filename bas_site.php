<?php require_once("./cookies.php"); ?>

<!-- just before </body> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const accepted = localStorage.getItem("cookies_accepted");

    if (!accepted) {
      banner.classList.remove("hidden");
    }

    document.getElementById("accept-cookies").addEventListener("click", function () {
      localStorage.setItem("cookies_accepted", "true");
      banner.classList.add("hidden");
    });
  });
</script>


<!-- Ici tu colles ton bloc Tailblocks -->
</body>

</html>