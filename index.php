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
    <link rel="stylesheet" type="text/css" href="./styles/style.css" />
  </head>

  <body>
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark pl-0 pr-0">
          <a class="navbar-brand" href="#"
            ><img
              src="./assets/common/logo.png"
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
                <a class="nav-link active" href="#"
                  ><i class="fas fa-fw fa-home"></i> Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./shop/fitness-equipment/"
                  ><i class="fas fa-fw fa-shopping-bag"></i> Shop</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./account/account.php"
                  ><i class="fas fa-fw fa-user"></i> Account</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link pr-0" href="./basket/index.html"
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
        <div class="col-12 w-100 p-0 pt-2">
          <div
            id="carouselExampleIndicators"
            class="carousel slide"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="1"
              ></li>
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="2"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="./assets/home/carousel/carousel-1.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./assets/home/carousel/carousel-2.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="./assets/home/carousel/carousel-3.jpg"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleIndicators"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-12 p-0 mt-3">
          <div class="row container m-0 p-0">
            <div class="col-3 pl-0 pr-1 pt-0 pb-0">
              <a class="card" href="./shop/fitness-equipment/">
                <img
                  src="./assets/home/categories/category-1.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body p-0">
                  <div class="btn w-100 crd-btn">Fitness Equipment</div>
                </div>
              </a>
            </div>
            <div class="col-3 pl-1 pr-0 pt-0 pb-0">
              <a class="card" href="./shop/gym-equipment/">
                <img
                  src="./assets/home/categories/category-2.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body p-0">
                  <div class="btn w-100 crd-btn">Gym Equipment</div>
                </div>
              </a>
            </div>
            <div class="col-3 pl-1 pr-0 pt-0 pb-0">
              <a class="card" href="./shop/weights-bars/">
                <img
                  src="./assets/home/categories/category-3.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body p-0">
                  <div class="btn w-100 crd-btn">Weights & Bars</div>
                </div>
              </a>
            </div>
            <div class="col-3 pl-1 pr-0 pt-0 pb-0">
              <a class="card" href="./shop/supplements/">
                <img
                  src="./assets/home/categories/category-4.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body p-0">
                  <div class="btn w-100 crd-btn">Supplements</div>
                </div>
              </a>
            </div>
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
