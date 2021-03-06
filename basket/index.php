<?php session_start(); ?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Fitness First</title>
    <meta name="description" content="Online Store for Gym Equipment" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/png"
      href="./../assets/common/small-logo.png"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
      integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="../styles/style.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-0 pr-0">
          <a class="navbar-brand" href="#"
            ><img
              src="../assets/common/logo.png"
              alt="Fitness First"
              height="23"
              width="170"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-end w-100">
              <li class="nav-item">
                <a class="nav-link" href="../"
                  ><i class="fas fa-fw fa-home"></i> Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../shop/fitness-equipment/"
                  ><i class="fas fa-fw fa-shopping-bag"></i> Shop</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../account/login.html"
                  ><i class="fas fa-fw fa-user"></i> Account</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active pr-0" href="#"
                  ><i class="fas fa-fw fa-shopping-cart"></i> Basket</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row" style="text-align: center; display: inline;">
          <h2 style="color: white; background-color: #fa4251; padding: 1rem;">
            Basket
          </h2>
        </div>
        <div class="row pb-3 justify-content-center align-items-center">
          <div class="col-1 pr-0">
            <img
              src="../../assets/shop/fitness-equipment/FE001/2.jpg"
              class="w-100"
            />
          </div>
          <div class="col-9" style="font-size: 20px;">
          <?php 
          $db = mysqli_connect('localhost', 'root', '', 'fitness-first-users');
          $total = 0;
          if (isset($_SESSION['cart_items'])) {
            foreach ($_SESSION['cart_items'] as $itemcode) {
              $result = mysqli_query($db, "SELECT * FROM products WHERE code='$itemcode'");
              while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $price = $row['price'];
                $image = $row['image'];
                $total += $price

                ?> 

                  <tr>
                  <td> <?php echo $name ?> </td>
                  <div class="col-2" style="font-size: 20px;"><b> <td> £<?php echo $price ?></td></b></div>
                  </br>
                  </tr>
                <?php
              }
            }
          }

          ?>
          </div>
          
        </div>
        <div class="row pb-3 justify-content-center align-items-center">
          <div class="col-1 pr-0">
            <img
              src="../../assets/shop/fitness-equipment/FE001/2.jpg"
              class="w-100"
            />
          </div>
          
          
        </div>
        <div class="row p-0 pt-2">
          <div class="col-10" style="font-size: 20px;">
            Total Amount: 
          </div>
          <div class="col-2" style="font-size: 20px;"><b>£<?php echo "$price" ?></b></div>
        </div>
        <div class="row pt-4">
          <div class="col-6" style="height: 6vh;">
            <form action="../shop/fitness-equipment/" class="w-100 h-100">
              <button
                type="submit"
                class="w-100 h-100"
                style="
                  color: white;
                  background-color: #fa4251;
                  border: 0px;
                  font-size: 20px;
                  font-weight: bold;
                "
              >
                Continue Shopping
              </button>
            </form>
          </div>
          <div class="col-6">
            <button
              type="submit"
              class="w-100 h-100"
              style="
                color: white;
                background-color: #fa4251;
                border: 0px;
                font-size: 20px;
                font-weight: bold;
              "
            >
              Checkout
            </button>
          </div>
        </div>
      </div>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
