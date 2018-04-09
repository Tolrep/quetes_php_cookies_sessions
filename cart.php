<?php require 'inc/head.php';

if (!isset($_SESSION["loginname"])) {
    header("Location:login.php");
    die;
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (!empty($_SESSION["pecanNuts"])) {?>
        <h3>Pecan nuts x<?=$_SESSION["pecanNuts"]?></h3>
        <?php } ?>
        <?php if (!empty($_SESSION["chocolateChips"])) {?>
            <h3>Chocolate Chips x<?=$_SESSION["chocolateChips"]?></h3>
        <?php } ?>
        <?php if (!empty($_SESSION["chocolateCookie"])) {?>
            <h3>Chocolate cookie x<?=$_SESSION["chocolateCookie"]?></h3>
        <?php } ?>
        <?php if (!empty($_SESSION["M&MCookies"])) {?>
            <h3>M&M's cookies x<?=$_SESSION["M&MCookies"]?></h3>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
