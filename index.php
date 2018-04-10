<?php require 'inc/head.php';
if (!isset($_SESSION["loginname"])) {
    header("Location:login.php");
    die;
}

if ($_GET["unsign"] == 1) {
    header("Location:login.php");
    session_destroy();
    die;
}

if (!empty($_GET)) {
    if ($_GET["add_to_cart"] == 46) {
        if (!empty($_SESSION["pecanNuts"])) {
            $_SESSION["pecanNuts"]++;
        } else {
            $_SESSION["pecanNuts"] = 1;
        }
    }

    if ($_GET["add_to_cart"] == 36) {
        if (!empty($_SESSION["chocolateChips"])) {
            $_SESSION["chocolateChips"]++;
        } else {
            $_SESSION["chocolateChips"] = 1;
        }
    }

    if ($_GET["add_to_cart"] == 58) {
        if (!empty($_SESSION["chocolateCookie"])) {
            $_SESSION["chocolateCookie"]++;
        } else {
            $_SESSION["chocolateCookie"] = 1;
        }
    }

    if ($_GET["add_to_cart"] == 32) {
        if (!empty($_SESSION["M&MCookies"])) {
            $_SESSION["M&MCookies"]++;
        } else {
            $_SESSION["M&MCookies"] = 1;
        }
    }
}

if ($_GET["unsign"] == 1) {
        header("Location:login.php");
        session_destroy();
        die;
    }


?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
      <a  href="?unsign=1" class="btn btn-danger">
          Unsign
      </a>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
