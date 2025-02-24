<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $lesson = htmlspecialchars($_POST['lesson']);
  $duration = htmlspecialchars($_POST['duration']);
  $frequency = htmlspecialchars($_POST['frequency']);

  $to = "your-email@example.com";
  $subject = "New Registration - Apollo Performing Arts";
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nLesson: $lesson\nDuration: $duration\nFrequency: $frequency";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "<p>Thank you for registering! We will contact you shortly.</p>";
  } else {
    echo "<p>Sorry, something went wrong. Please try again.</p>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Apollo Performing Arts</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php include 'includes/header.php'; ?>

  <section class="register-section">
    <div class="container">
      <h1>Register for Lessons</h1>
      <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <select name="lesson" required>
          <option value="guitar">Guitar</option>
          <option value="piano">Piano</option>
          <option value="violin">Violin</option>
          <option value="vocal">Vocal</option>
        </select>
        <select name="duration" required>
          <option value="30min">30 Minutes</option>
          <option value="45min">45 Minutes</option>
          <option value="60min">60 Minutes</option>
        </select>
        <select name="frequency" required>
          <option value="once">Once a Week</option>
          <option value="twice">Twice a Week</option>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <script src="assets/js/scripts.js"></script>
</body>
</html>