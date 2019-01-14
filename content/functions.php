<?php
//functions.php

?>
<article>
  <header>
    <h1>Functions</h1>
  </header>
  <div style = "display:grid;grid-template-columns: 48% 48%;">
  <section>
    <h2>Function to return a name, with optional second name and seperator</h2>

     <p>
    <?php
      function fullName($firstName, $lastName = null, $seperator = ' '){
	      if (trim($firstName) === ''){
	              return;
	      }
	      if ($lastName === null){
		      return $firstName;
	      }
      return "{$firstName}{$seperator}{$lastName}";
      }
      echo "<code>echo fullName('Korvin', 'M', ' ');</code> returns ";
      echo '<span class="php-output">';
      echo fullName('Korvin', 'M', ' ');
      echo '</span>';
      echo $hBR . "<code>echo fullName('Korvin', 'M', '_');</code> returns ";
      echo '<span class="php-output">';
      echo fullName('Korvin', 'M', '_');
      echo '</span>';
      echo $hBR . "<code>echo fullName('        ');</code> returns ";
      $result = fullName('        ');
      echo '<span class="php-output">';
      var_dump($result);
      echo '</span>';
?>
  </section>
  <section>
    <h2>Type hinting, and built in functions <code>func_get_args</code> and <code>array_sum</code></h2></h2>
    <p>If we want to ensure our function only accepts a particular datatype, we can hint in the argument:
      
    <?php
      function add (array $numbers){
        $total = 0;
	foreach($numbers as $number){
	  $total += $number;
        }

	return $total;
      }
?>
We can use it like this:
    <pre><code>$numbers = [4,11,21];
echo add ($numbers);</code></pre>
<?php
      $numbers = [4,11,21];
      echo 'Returns: <span class="php-output">' .  add ($numbers) . '</span>';
?>
<br/>
or pass the array in directly: <code>echo add ([4,11,21]);</code>
<?php
      echo '<span class="php-output">' .  add ([4,11,21]). '</span>';
?>
<p>
<code>func_get_args</code> and <code>array_sum</code> allow us to sum multiple numbers with a function: <br/>
<?php
      function addToo(){
	$total = 0;
	foreach(func_get_args() as $number){
	  $total += $number;
        }
        return $total;
      }
      $add = addToo(4,11,21);
      function sum(){
              return array_sum(func_get_args());
      }
$sum =  sum(4,11,21);

?>
So the functions <code>addToo()</code> and <code>sum()</code> both perform this task, the latter without the neeed for a loop: <br/>
<?php
      echo '<code>addToo(4,11,21)</code> returns: <span class="php-output">' . $add;
      echo '</span> ';
      echo '<code>sum(4,11,21)</code> returns: <span class="php-output">' . $sum;
      echo '</span>';

?>
</section>

</div>

</article>
