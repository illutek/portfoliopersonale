<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 20.07.17
 * Time: 11:59
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400" rel="stylesheet">
</head>
<body>
<div class="summits">
  <div class="introdution-page-wrap">

    <div class="header-top">
        <?php include_once "includes/header-top.inc.php"; ?>
    </div>

    <!--    Content-->
    <div class="page-title--wrap">
      <h1>SUMMITS</h1>
      <h2>{Limited selection}</h2>
    </div>

    <div class="scroll-down-wrap">
      <div class="scroll-down">
        <img src="../images/white-arrow-down.png" alt="arrow down">
      </div>
    </div>
  </div>
</div>
<div class="summits-overview-wrap">

  <div class="summits-odd">
    <div class="scroll-up-wrap">
      <img src="../images/summits-arrow-up.png" alt="arrow up">
    </div>

      <?php include_once "includes/summits/summit-one.inc.php"; ?>
    <!-- end summit-one -->

    <div class="scroll-down-wrap">
      <img src="../images/summits-arrow-down.png" alt="arrow up">
    </div>
  </div>

  <div class="summits-even">
    <div class="scroll-up-wrap">
      <!-- TODO arrows moeten aangepst aan even bcg -->
      <img src="../images/summits-arrow-up.png" alt="arrow up">
    </div>

      <?php include_once "includes/summits/summit-two.inc.php"; ?>
    <!-- end summit-one -->

    <div class="scroll-down-wrap">
      <!-- TODO arrows moeten aangepst aan even bcg -->
      <img src="../images/summits-arrow-down.png" alt="arrow up">
    </div>
  </div>

  <div class="summits-odd">
    <div class="scroll-up-wrap">
      <img src="../images/summits-arrow-up.png" alt="arrow up">
    </div>

      <?php include_once "includes/summits/summit-three.inc.php"; ?>
    <!-- end summit-one -->

    <div class="scroll-down-wrap">
      <img src="../images/summits-arrow-down.png" alt="arrow up">
    </div>
  </div>

</div>


<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/smooth-scroll.js"></script>
<script>
    if ($('.element')[0].scrollHeight > $('.element').innerHeight()) {
        $(".summits-description .summits-inner-container::-webkit-scrollbar").css("display", "block");
    } else {
        $(".summits-description .summits-inner-container::-webkit-scrollbar").css("display", "none");
    }
</script>
</body>
</html>
