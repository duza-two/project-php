<?php /*require_once("includes/db_connection.php")*/ ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/layouts/header.php") ?>

<main>
  <section>
    <div class="service-page">
      <div class="service-heading">
        <h1>Services We Offer</h1>
      </div>
      <div class="serv-btn">
        <button class="btn btn-1" onclick="layout_one()">Bookkeeping</button>
        <button class="btn btn-2" onclick="layout_two()">Payroll</button>
        <button class="btn btn-3" onclick="layout_three()">Administration</button>
      </div>
      <div class="container">
        <div class="row serv_tog">
          <div class="col-lg-6 col-xs-12 info_one" id="block_1">
            <img src="images/bridge.jpg" atl="image of a bridge" width="300px" height="200px">
          </div>
          <div class="col-lg-6 col-xs-12 info_two" id="block_2">
            <h1 id="head_one">Head</h1>
            <p id="serviceText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. </p>
          </div>
       </div>
     </div>
    </div>
  </section>
</main>

<?php include("includes/layouts/footer.php") ?>
