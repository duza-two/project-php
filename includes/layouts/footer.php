<footer>
    <div class="row main-foot pt-4">
      <div class="col-lg-4 col-xs-12 foot-text-1 text-center">
        <p>Daglyn Consulting Copy © 2018</p>
      </div>
      <div class="col-lg-4 col-xs-12 foot-text-2 text-center">
        <p>Daglyn Consulting is a bookkeeping firm whose focusing is on excellence.</p>
      </div>
      <div class="col-lg-4 col-xs-12 foot-text-3 text-center">
        <a href="#"><i class="fab fa-facebook-square fa-lg pt-3 pr-2"></i></a>
        <a href="#"><i class="fab fa-twitter fa-lg pr-2"></i></a>
        <a href="#"><i class="fab fa-linkedin-in fa-lg pt-3 pr-2"></i></a>
      </div>
    </div>
  </footer>

  <script src="javascripts/jquery-3.3.1.min.js"></script>
  <script src="javascripts/bootstrap.min.js"></script>
  <script src="javascripts/bootstrap.bundle.min.js"></script>
  <script src="javascripts/main.js"></script>
</body>
</html>

<?php
  //5. Close database connection
  if(isset($connection)) {
    mysqli_close($connection);
  }
?>
