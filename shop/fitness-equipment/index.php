<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Fitness First</title>
  <meta name="description" content="Online Store for Gym Equipment" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" href="./../../assets/common/small-logo.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="../../styles/style.css" />
</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-0 pr-0">
        <a class="navbar-brand" href="../../"><img src="../../assets/common/logo.png" alt="Fitness First" height="23" width="170" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-end w-100">
            <li class="nav-item">
              <a class="nav-link" href="../../"><i class="fas fa-fw fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-fw fa-shopping-bag"></i> Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../account/account.php"><i class="fas fa-fw fa-user"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pr-0" href="../../basket/"><i class="fas fa-fw fa-shopping-cart"></i> Basket</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="col-12 p-0">
        <div class="row p-0 m-0 pt-2">
          <div class="col-3 p-1">
            <form>
              <button class="w-100 shop-cat-btn" style="
                    height: 3rem;
                    background-color: #fa4251;
                    border: 0px;
                    color: white;
                    font-weight: bold;
                    text-decoration: underline;
                  " type="submit">
                Fitness Equipment
              </button>
            </form>
          </div>
          <div class="col-3 p-1">
            <form action="../gym-equipment/">
              <button class="w-100 shop-cat-btn" style="
                    height: 3rem;
                    background-color: #fa4251;
                    border: 0px;
                    color: white;
                    font-weight: bold;
                  " type="submit">
                Gym Equipment
              </button>
            </form>
          </div>
          <div class="col-3 p-1">
            <form action="../weights-bars/">
              <button class="w-100 shop-cat-btn" style="
                    height: 3rem;
                    background-color: #fa4251;
                    border: 0px;
                    color: white;
                    font-weight: bold;
                  " type="submit">
                Weights & Bars
              </button>
            </form>
          </div>
          <div class="col-3 p-1">
            <form action="../supplements/">
              <button class="w-100 shop-cat-btn" style="
                    height: 3rem;
                    background-color: #fa4251;
                    border: 0px;
                    color: white;
                    font-weight: bold;
                  " type="submit">
                Supplements
              </button>
            </form>
          </div>
        </div>
        <div class="row p-0 m-0 pt-3">
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE001">
              <img src="../../assets/shop/fitness-equipment/FE001/2.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>Life Fitness F3 Treadmill</i>
                  <br />
                  <b>£2,795</b>
                </div>
              </div>
            </form>
          </div>
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE002">
              <img src="../../assets/shop/fitness-equipment/FE003/1.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>Life Fitness Platinum Treadmill</i>
                  <br />
                  <b>£10,395</b>
                </div>
              </div>
            </form>
          </div>
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE003">
              <img src="../../assets/shop/fitness-equipment/FE002/1.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>Taurus 10.5 Treadmill Pro</i>
                  <br />
                  <b>£3,999</b>
                </div>
              </div>
            </form>
          </div>
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE004">
              <img src="../../assets/shop/fitness-equipment/FE004/1.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>Taurus Ergo-X Classic Air Bike</i>
                  <br />
                  <b>£799</b>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row p-0 m-0 pt-3">
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE005">
              <img src="../../assets/shop/fitness-equipment/FE005/1.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>BodyMax B15 Indoor Cycle</i>
                  <br />
                  <b>£399</b>
                </div>
              </div>
            </form>
          </div>
          <div class="col-3 p-1">
            <form class="card" action="./products/FE001/" method="GET" style="border: 0px;">
              <input type="hidden" name="code" value="FE006">
              <img src="../../assets/shop/fitness-equipment/FE006/1.jpg" class="card-img-top" alt="..." />
              <button type="submit" class="h-100 w-100" style="position:absolute; background-color:transparent; border:0px">Product</button>
              <div class="card-body p-0" style="border: 0px;">
                <div class="btn w-100" style="border: 0px; color: white;">
                  <i>Life Fitness Elliptical Cross Trainer</i>
                  <br />
                  <b>£2,995</b>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>