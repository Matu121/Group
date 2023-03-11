<?php

include 'top.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ota yhteyttä</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section id="contact">
      <h2>Ota yhteyttä</h2>
      <?php if (isset($_GET['message'])): ?>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
      <?php endif; ?>
      <p>Lähetä tarjouspyyntö <a href="mailto:matias.lindvall@gmail.com">matias.lindvall@gmail.com</a>.</p>
      <form action="contact.php" method="post">
        <label for="name">Nimi:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">S-posti:</label>
        <input type="email" id="email" name="email" required>
        <label for="interest">Kiinnostuksen kohde:</label>
        
        <input type="text" id="interest" name="interest" required>
        <label for="message">Viesti:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Lähetä</button>
      </form>
    </section>
  </body>
</html>
<?php include 'footer.php'; ?>





