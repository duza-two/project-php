<footer>
    <div class="row main-foot">
      <div class="col-lg-4 col-xs-12 foot-text-1 pt-2 text-center">
        <p>Daglyn Consulting Copyright © 2018</p>
      </div>
      <div class="col-lg-4 col-xs-12 foot-text-2 pt-2 text-center">
        <p>Services Captured on Sage Paste</p>
      </div>
      <div class="col-lg-4 col-xs-12 foot-text-4 text-center">
        <a href=" https://www.facebook.com/Daglynconsulting" target="_blank"><i class="fab fa-facebook-square fa-lg pt-2 pr-2"></i></a>
        <a href="#"><i class="fab fa-twitter fa-lg pt-2 pr-2"></i></a>
        <a href="#"><i class="fab fa-linkedin-in fa-lg pt-2 pr-2"></i></a>
      </div>
    </div>
  </footer>

  <script src="javascripts/jquery-3.3.1.min.js"></script>
  <script src="javascripts/bootstrap.min.js"></script>
  <script src="javascripts/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>AOS.init();</script>
  <script src="javascripts/main.js"></script>
</body>
</html>

<?php
  //5. Close database connection
  if(isset($connection)) {
    mysqli_close($connection);
  }
?>
