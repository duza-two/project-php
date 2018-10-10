<?php /*require_once("includes/db_connection.php")*/ ?>
<?php require_once("includes/functions.php") ?>
<?php include("includes/layouts/header.php") ?>
<?php
if(isset($_POST["submit"])) {
    $recipient = "d_sm9@hotmail.com";
    $subject = "Form to email message";
    $sender = $_POST["name"];
    $senderEmail = $_POST["email"];
    $message = $_POST["comment"];

    $mailBody="Name: " . $sender. "\nEmail: " . $senderEmail ."\n\n" . $message;

    mail($recipient, $subject, $mailBody, "From: " . $sender . "<" . $senderEmail . ">");
    header("Location: contact.php?mailsend");
}
?>


<main>
  <section>
    <div class="">
      <div class="contact-page">
        <div class="cont-heading">
          <h1>Contact Form</h1>
        </div>
        <div class="cont-text">
          <p>This is some text inside of a div block</p>
        </div>
        <div class="row">
        <div class="col-6">
          <form action="contact.php" method="post" enctype="text/plain">
              <div class="form-group">
                <label for="cont-name">Name</label>
                <input type="text" name="name" class="form-control" id="cont-email" aria-describedby="nameHelp" placeholder="Enter name">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="cont-email">Email</label>
                <input type="email" name="email" class="form-control"
                id="cont-email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="textarea-info">Service Request</label>
                <textarea name="comment" class="form-control" id="textarea-info" rows="7" placeholder="Please tell us about the service you require."></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-6">
            <div class="contact-info">
              <h2>Contact us now</h2>
              <p>Your bookkeeping and payroll should not be neglected. Contact us now on: </p>
              <p>Contact: 083 380 7185</p>
              <p>email: info&#64;daglynconsulting.co.za</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include("includes/layouts/footer.php") ?>
