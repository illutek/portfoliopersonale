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

    <div class="summits-description-wrap">
      <div class="summits-description">

        <div class="summits-outer-container">
          <div class="summits-inner-container">
            <div class="element">
              <h2>Personal project</h2>
              <h1>illutek</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid
                eligendi modi nesciunt, nisi quaerat quis! Dignissimos dolores ex libero
                magni porro quae quo sequi sunt voluptatum? Assumenda, delectus, voluptatibus.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid
                architecto
                culpa ducimus ea error est, hic nesciunt, provident tenetur, veritatis vitae!
                Aliquam consequatur consequuntur enim fuga maxime minus natus obcaecati odio
                praesentium repudiandae? Atque consequatur consequuntur
                culpa error esse incidunt ipsam iste magnam, maiores necessitatibus porro
                quidem s
                aepe! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid
                eligendi modi nesciunt, nisi quaerat quis! Dignissimos dolores ex libero
                magni porro quae quo sequi sunt voluptatum? Assumenda, delectus, voluptatibus.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid
                architecto
                culpa ducimus ea error est, hic nesciunt, provident tenetur, veritatis vitae!
                Aliquam consequatur consequuntur enim fuga maxime minus natus obcaecati odio
                praesentium repudiandae? Atque consequatur consequuntur
                culpa error esse incidunt ipsam iste magnam, maiores necessitatibus porro
                quidem s
                aepe! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid
                eligendi modi nesciunt, nisi quaerat quis! Dignissimos dolores ex libero
                magni porro quae quo sequi sunt voluptatum? Assumenda, delectus, voluptatibus.
              </p>
            </div>
          </div>

        </div>

      </div>

      <div class="summits-images">
        <h2>Images</h2>
        <div class="images-grid">
          <img src="../images/summits-images/illutek.jpeg" alt="illutek">
          <img src="../images/summits-images/illutek.jpeg" alt="illutek">
          <img src="../images/summits-images/illutek.jpeg" alt="illutek">
        </div>

      </div>
    </div>

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
