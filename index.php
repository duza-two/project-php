<?php /*require_once("includes/db_connection.php")*/ ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/layouts/header.php") ?>

<!-- main layout section -->
  <main>
    <section>
      <div class="main-layout">
        <div class="main-heading hidding">
          <ul class="fly-in hidding">
            <li class="animated slideInLeft">Excellence</li>
            <li class="animated slideInDown">Integrity</li>
            <li class="animated slideInRight">Punctuality</li>
          </ul>
        </div>
        <div class="main-text text-center">
          <p>Choose an affordable partner that will look after your bookkeeping and payroll</p>
        </div>
        <div class="text-center">
          <a href="services.php"><button class="btn pr-4 pl-4 rounded-0">Services we offer</button><a>
        </div>
      </div>
    </section>
    <!-- Service Info Page -->
    <section>
      <div class="main-service">
        <div class="Serv-info-heading">
            <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000">Services We Offer</h1>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12 info-book" data-aos="fade-up" data-aos-duration="1000">
                  <div class="info-book-image">
                    <img src="images/accounting-64.png" class="d-block mx-auto img-responsive" alt="clipart image of a chart and calculator" width="100px" height="100px">
                  </div>
                  <div class="info-book-heading">
                    <h2>Bookkeeping</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto">We provide Outsourced Bookkeeping Services on a monthly basis. Services are adapted to the specific needs of your business.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-12 info-payroll" data-aos="fade-up" data-aos-duration="1000">
                  <div class="info-payroll-image">
                    <img src="images/payroll-64.png" class="d-block mx-auto" alt="clipart image two people with a coin" width="100px" height="100px">
                  </div>
                  <div class="info-payroll-heading">
                    <h2>Payroll</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto"> Payroll and HR Services done for you, hence eliminating your worry or dread of payroll responsibilities and SARS submissions.</p>
                  </div>
                </div>
                <div class="col-lg-4 col-xs-12 info-admin" data-aos="fade-up" data-aos-duration="1000">
                  <div class="info-admin-image">
                    <img src="images/admin.png" class="d-block mx-auto" alt="clipart image document file" width="100px" height="100px">
                  </div>
                  <div class="info-admin-heading">
                    <h2>Administration</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto">We help ensure that your administrative activities within your business run professionally, by offering structure and templates to aid with general operations of the company.</p>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
    <section>
      <div class="call4action">
        <article  class="two">
          <div class="call-2">
            <div class="action-heading">
              <h3>Click on the button below</h3>
            </div>
            <div class="action-btn text-center">
              <a href="services.php"><button class="btn btn-light mt-2 pb-2">Lean More</button></a>
            </div>
          </div>
        </article>
      </div>
    </section>
    <section>
      <div class="container accredit">
          <div class="accred">
            <h3>Accreditation</h3>
            <img src="images/ICB-logo.jpg" class="mx-auto d-block" alt="The Institute of certified bookkeepers logo" width="100" height="100">
          </div>
      </div>
      </div>
    </section>
  </main>

<?php include("includes/layouts/footer.php") ?>
