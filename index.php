<?php /*require_once("includes/db_connection.php")*/ ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/layouts/header.php") ?>

<!-- main layout section -->
  <main>
    <section>
      <div class="main-layout">
        <div class="main-heading text-center">
          <h1>SPECIALISTS IN BOOKKEEPING SERVICES</h1>
        </div>
        <div class="main-text text-center">
          <p>Don't compromise on your financial needs. Choose a partner that would look after your bookkeeping.</p>
        </div>
        <div class="text-center">
          <a href="services.php"><button class="btn pr-4 pl-4 rounded-0">Learn More</button><a>
        </div>
      </div>
    </section>
    <!-- Service Info Page -->
    <section>
      <div class="main-service">
        <div class="Serv-info-heading">
          <h1 class="text-center">Services We Offer<h1>
        </div>
        <div class="serv-info-text">
          <p class="text-center">We offer more than just bookkeeping services</p>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-4 info-book">
                  <div class="info-book-image">
                    <img src="images/accounting-64.png" class="d-block mx-auto" alt="clipart image of a chart and calculator" width="100px" height="100px">
                  </div>
                  <div class="info-book-heading">
                    <h2>Bookkeeping</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto">The benefit of having a full-time bookkeeper means that you have access to your management account with delay.</p>
                  </div>
                </div>
                <div class="col-4 info-payroll">
                  <div class="info-payroll-image">
                    <img src="images/payroll-64.png" class="d-block mx-auto" alt="clipart image two people with a coin" width="100px" height="100px">
                  </div>
                  <div class="info-payroll-heading">
                    <h2>Payroll</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto">Do not let deadline of payroll submissions creep up on you. We will ensure that your SARS submissions are completed and submitted timeously.</p>
                  </div>
                </div>
                <div class="col-4 info-admin">
                  <div class="info-admin-image">
                    <img src="images/admin.png" class="d-block mx-auto" alt="clipart image document file" width="100px" height="100px">
                  </div>
                  <div class="info-admin-heading">
                    <h2>Administration</h2>
                  </div>
                  <div class="info-text">
                    <p class="d-block mx-auto">We know that running a business involve a lot of paper work. Let us take some of the load and assist with your administration.</p>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
    <section>
      <div class="call4action">
        <article class="one">
          <div class="call-heading">
            <h1>Not Convinced yet?</h1>
          </div>
          <div class="call-text">
            <p>Would you like to see what exactly we have to offer?</p>
          </div>
        </article>
        <article  class="two">
          <div class="call-2">
            <div class="action-heading">
              <h3>Click on the button below to see our full service offering!</h3>
            </div>
            <div class="action-btn text-center">
              <a href="services.php"><button class="btn mt-2 pb-2">Lean More</button></a>
            </div>
          </div>
        </article>
      </div>
    </section>
    <section>
      <div class="container accredit">
        <div class="row">
          <div class="col-6 pt-5">
            <img src="images/SARS-Logo.jpg" class="mx-auto d-block" alt="South African Revenue Services logo" width="200" height="100">
          </div>
          <div class="col-6 pt-5">
            <img src="images/ICB-logo.jpg" class="mx-auto d-block" alt="The Institute of certified bookkeepers logo" width="250" height="100">
          </div>
      </div>
      </div>
    </section>
  </main>

<?php include("includes/layouts/footer.php") ?>
