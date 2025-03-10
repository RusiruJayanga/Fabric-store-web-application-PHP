<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>viztoza co</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" />
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
        <a href="home.php">home</a>
        <a
          href="https://bot.dialogflow.com/c7a73d05-58f0-4d89-a291-3c8a99bdf809"
          target="_blank"
          >chatbot</a
        >
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="" class="fas fa-shopping-cart"></a>
        <div class="fas" id="login-btn"></div>
      </div>
    </header>
    <table
      class="table"
      style="
        width: 80%;
        text-align: center;
        margin-left: auto;
        margin-top: 100px;
        margin-right: auto;
      "
    >
      <thead>
        <tr></tr>
        <tr>
          <th style="font-size: 18px" scope="col"></th>
          <th style="font-size: 18px" scope="col">Description</th>
          <th style="font-size: 18px" scope="col">Quantity</th>
          <th style="font-size: 18px" scope="col">Price</th>
          <th style="font-size: 18px" scope="col">Edit</th>
        </tr>
      </thead>
      <?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=sapiru", "root", "");
    $stmt = $conn->query("SELECT * FROM order1");
    $total_purchase_price = 0; 

    while ($row = $stmt->fetch()) {
        $total_price = $row['qun'] * $row['price'];
        
        $total_purchase_price += $total_price;
?>

<tr>
    <th scope="col">
        <img src="../uploads/<?php echo $row['image']; ?>" style="width:50px; height:50px; margin-bottom: auto; margin-top: 15px;" />
    </th>
    <th>
        <p style="margin-bottom: auto; margin-top: 28px; font-size: 18px;"><?php echo $row['header']; ?></p>
    </th>
    <th>
        <p style="margin-bottom: auto; margin-top: 28px; font-size: 18px;">m :<?php echo $row['qun']; ?></p>
    </th>
    <th>
        <p style="margin-bottom: auto; margin-top: 28px; font-size: 18px;">Rs. <?php echo number_format($total_price, 2); ?></p>
    </th>
    <th>
        <form action="../back end/cart_item_delete_process.php" method="post">
            <input type="hidden" name="cart_id" value="<?php echo $row['iid']; ?>" />
            <button type="submit" class="btn1" style="margin-top: 20px;">
                Delete
            </button>
        </form>
    </th>
</tr>

<?php
    }

    echo '<tr><td><p style="font-size: 19px; margin-top: 28px;">Total : Rs. ' . number_format($total_purchase_price, 2) . '</p></td></tr>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
    </table>
    <a href="checkout1.php">
      <button type="submit" class="btn" style="width: 10%; margin-left: 76%">
        Check out
      </button></a
    >
    <script src="./js/behav.js"></script>
  </body>
</html>
