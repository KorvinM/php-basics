<?php
//content-template.php

?>
<article>
  <header>
    <h1>Arithmetic</h1>
  </header>
  <div class="article-content" style = "display: grid; grid-template-columns: 48% 48%;">
  <section>
    <h2>Calculating percentages</h2>
    <p>This section covers addition, multiplication and division, using the <code>+</code> <code>-</code> and <code>*</code> operators. <br/>
    <?php
      echo 'Total lessons in course: <span class="php-output">';
      echo $totalLessons = 35;
      echo '</span>';
      $completedLessons = 0;
      $completedLessons = $completedLessons +18.2;
      echo ' You have now completed <span class="php-output">' . $completedLessons . '</span> lessons. That\'s ';

      $percentComplete = number_format(($completedLessons / $totalLessons) * 100, 1);
      echo '<span class="php-output">' .  $percentComplete. '</span>% of the course.';
?>
  </section>
  <section>
    <h2>Subtraction</h2>
    <p>Uses the <code>-</code> operator. <br/>
    <?php
      echo 'Current balance: <span class="php-output">' . $bankBal. '</span> ';
      $cost = 250.65; 
      echo 'Item cost: <span class="php-output">' . $cost . '</span>'; 
      $bankBal = $bankBal - $cost;
      echo ' Your balance after purchase will be: <span class="php-output">' . $bankBal . '</span>';
?>
  <section>
    <h2>Increments and decrements</h2>
    <p>
     <code>$completedLessons++</code> increments the variable by one, and <code>$completedLessons--</code> decrements:
<?php
      $completedLessons++;
      echo "You have now completed $completedLessons lessons.";
      echo 'And if we decrement by 1: ';
      $completedLessons--;
      echo "You have now completed $completedLessons lessons.";
?>
  </section>
  <section>
    <h2>Working with larger numbers</h2>
    <p>Addition and subtraction can be achieved cleanly and quickly with the <code>=+</code> and <code>=-</code> operators. <br/>
<?php
      echo '<span class="php-output">';
      echo $points = 0;
      echo ' points</span> ';
      $points += 10;
      echo '<span class="php-output">' . $points . ' points</span> ';
      $points -= 2;

      echo '<span class="php-output">' . $points . ' points</span> ';
?>
 <p>The modulus operator <code>%</code> returns the remainder, and can be used to determine odd and even numbers: <br/>

<?php

      $rows = 10;
      for ($row=1; $row <= $rows; $row++){
        echo '<span class="php-output">';
	      if ($row %2 === 0){
	        echo 'Even'; 
	      }else {
	      echo 'Odd';}
      echo '</span> ';
      }

?> 
  <p>The exponent operator raises to a specific power. 
  <?php

      echo 'Assign <code>$a</code> to: <span class="php-output">' . $a = 10;
      echo '</span> ';
      echo 'Raise to the power of 2: <span class="php-output">' . $a**2;//10 x 10
      echo '</span> ';
      echo  'Raise to the power of 9: <span class="php-output">' . $a**9;//1 billion
      echo '</span> ';
?>

  </section>
</div>
</article>

