<?php // index.php
require_once('data/data.php');
include ('includes/header.php');?>

<header class="main-header">
  <div class = "main-heading-wrap">
  <h1 class = "main-heading"><a href="#">PHP Basics</a></h1>
  </div>
</header>
<main class = "slides">

<?php
include ('content/intro.php');
include ('content/datatypes.php');
include ('content/ifs-ops.php');
include ('content/arithmetic.php');
include ('content/loops.php');
include ('content/functions.php');?>
</main>
<?php
include ('includes/footer.php');
