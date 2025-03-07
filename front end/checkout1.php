<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viztoza co</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Main css -->
    <link rel="stylesheet" href="./css/style1.css" />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo"> <i class="fas fa-wallet"></i> viztoza </a>
      <nav class="navbar">
        <a href="home.html">home</a>
        <a
          href="https://bot.dialogflow.com/c7a73d05-58f0-4d89-a291-3c8a99bdf809"
          target="_blank"
          >chatbot</a
        >
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div class="fas" id="login-btn"></div>
      </div>
    </header>
    <section class="contact" id="contact" style="margin-top: 50px">
      <form method="post" action="checkout2.php">
        <input
          type="text"
          name="name"
          placeholder="Enter your user name"
          class="box"
        />
        <input style="width: 30%" type="submit" value="Search" class="btn" />
      </form>
    </section>
    <script src="./js/behav.js"></script>
  </body>
</html>
