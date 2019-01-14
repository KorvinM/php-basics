<?php //ifsandops.php - contains the second article
?>

<article>
  <header>
    <h1>Ifs and Ops</h1>
  </header>
  <div class="article-content" style = "columns: 2 33em;column-rule: solid 1px #eee">
  <section>
    <h2>If statements - days of the week</h2>
    <p>
    In the codecourse video, an integer is set, and an <code>if..if else</code> statement run on the integer as a condition.<br/> 
    We can grab the same integer from the php function <code>getdate()</code>, which returns an array of data about the current date. Running an identical <code>if..if else</code> statement outputs:
    <span class="php-output">
    <?php
      if ($dayOfWeek == 1) {
        echo 'It\'s Monday!';
      } elseif ($dayOfWeek == 2){ 
          echo 'Tuesday.';
      }
       elseif ($dayOfWeek == 3){ 
          echo 'Wednesday, the middle of the week!';
      
      } elseif ($dayOfWeek == 4){ 
          echo 'Thursday has arrived! Rejoice';
      } else{
          echo 'No day exists beyond Thor\'s Day!';
      }

    ?>
    </span><br/>
    In this case, the only advantage the <code>if</code> statement confers is the ability to echo a different message for each day. If we just want to output the name of the day, with <code>getdate()</code> we can do it in 2 lines of code.
    <?php
      $today = getdate();
      echo '<span class="php-output">'. $today['weekday']. '</span>';
?>
<p>As the video explains, if we do need condition checking, it's more efficient to use inbuilt array functions. We can illustrate the difference clearly in our code if we aim to output some more abstract information, such as a god associated with the day.  
<br/>
<?php
      $dayOfWeek = $today['weekday'];
        $godOfDay = [
	      'Monday' => 'mani',
	      'Tuesday' => 'tyr',
	      'Wednesday' => 'odin',
	      'Thursday' => 'thor',
	      'Friday' => 'frigg',
	      'Saturday' => 'saturn',
	      'Sunday' => 'sol'
      ]; 
      /*
 */
      if (in_array($dayOfWeek, array_keys($godOfDay))){
	      $god = $godOfDay[$dayOfWeek];
	 echo '<div style ="display:flex;align-items:center;justify-content:space-evenly">';
         echo 'Today\'s deity: <span class="php-output" style="text-transform:capitalize;">' . $god. '</span>';
	 echo '<img src="content/img/'. $god . '.jpg" height= "300px" align="bottom">';     
	 echo '</div>';
      }
?>


  </section>
  <section>
    <h2>To nest or not to nest</h2>
    <p>If we want to output a string, and then ouput something if the string exceeds a defined length, we can do it with nested <code>if</code> statements:
    <?php
      if($name){
	echo $hBR . '<span class="php-output">';
        echo 'Success! A name exists! It is <strong>' . $name . '</strong>.'; 

	if (strlen($name) > 10){
          echo 'The name is very long, I notice. Consider shortening it.';	
	}
	echo '</span>';
      }
?>
    <br/>
    If at all possible however, avoid nesting <code>if</code> statements. The same effect can be achieved more readably with an inversion operator:

    <?php
      if (!$name){
        return;
      }
      echo $hBR .  '<span class="php-output">';
      echo 'A name exists! It is <strong>' . $name . '</strong>.'; 
      if (strlen($name) > 10){
        echo 'The name is very long, I notice. Consider shortening it.';	
      }
      echo '</span>';
    ?>
  <section>
    <h2>Logical Operators</h2>
    <p>Be mindful of what variables actually return when checking them for truthiness and falsiness. Certain values will always return <code>true</code> or <code>false</code>. The following table illustrates:
    <div style = "display:flex; justify-content:space-between; flex-flow:flow wrap;">
    <table border = "1" style = "border-collapse:collapse;">
      <tbody>
	<tr>
	  <td><h3>Value</h3></td>
	  <td><h3>Returns</h3></td>
	    </tr>
	    <tr>
	    <td>true </td>
    
	    <td><span class="php-output"><?php if(true){echo 'true';} ?></span> </td>
	    </tr>
	    <tr>
	    <td>false </td>
	    <td><span class="php-output"><?php if(!false){echo 'false';} ?></span> </td>
	    </tr>
	    <tr>
	    <td>0</td>
	    <td><span class="php-output"><?php if(!0){echo 'false';} ?></span> </td>
	    </tr>
	    <tr>
	    <td>Positive or negative number </td>
	    <td><span class="php-output"><?php if(2 || -2 ){echo 'true';} ?></span> </td>
	    </tr>

	</tbody>
      </table>
      <h3>And</h3>
       <div style="flex: 0;">
      <?php
      if ($name == 'Korvin' && $dayOfWeek == 'Wednesday'){ //the and keyword can be used instead of &&
        echo '<span class="php-output">';
        echo 'It\'s Wednesday, Korvin '; 
        echo '</span>';
      } 
      
      //we need to reset $dayOfWeek for the next bit to work
      //
      $dayOfWeek = $today['wday'];

      ?>
</div>
       <div style="flex:0">

      <h3>Or</h3>
      <?php
      //var_dump($dayOfWeek);
      $workingWeekend = 1;//1 = true
      //if $workingWeekend = 0, both the buggy and non buggy code run.

      if ($dayOfWeek == 6 || $dayOfWeek == 7 && !$workingWeekend){ //
        echo '<span class="php-output">';
        echo 'You have the weekend off! Actually though, you <em>don\'t</em>, since this code is buggy.'; 
        echo '</span>';
      } 
      if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingWeekend){ //
        echo '<span class="php-output">';
        echo 'You have the weekend off! No, honestly, you <em>do</em>.'; 
        echo '</span>';
      } 
      
      ?>
</div> 
</div> <!-- end flex container -->
</section>
<section>

    <h2>Comparison Operators</h2>
      <p>In the previous example, we set <code>$workingWeekend</code>$ to 1, then used <code>!$workingWeekend</code> as a condition.
         This works because we're not strictly typechecking. Even the <code>==</code> operator would work. The following examples demonstrate a bug that can arise from non-strict checking, and then fixes this with strict typechecking, using the <code>===</code> operator<br/> 

    <?php
      $uploadReturn = -5;
      $uploaded = true;
      if ($uploadReturn == true){
        echo '<span class="php-output">';
        echo 'Seems legit, but the value was' . $uploadReturn; 
        echo '</span>';
        echo $hBR;
      }
      if ($uploadReturn === true){
        echo 'This will not be output';      
      }
      if ($uploaded === true){
        echo '<span class="php-output">';
        echo 'The variable is a boolean and <code>true</code>';
        echo '</span>';
      }



    ?>
    <p>
       Strict typechecking also avoids bugs arising from php automatic typecasting, whereby, for example, strings beginning with an arabic integer number will be cast to integers, thus evaluating as true when checked in non-strict mode. 

    <?php
      $shipsDocked = '1hundred';
      echo $hBR;
      echo 'The <code>$shipsDocked</code> variable is: <span class="php-output">' . $shipsDocked .'</span>';
      if ($shipsDocked == 1){
        echo ' and <span class="php-output">';
     	echo 'There is one ship docked'; 
        echo '</span>';
      }
      echo $hBR. 'More correctly:';
      //
      $docked = true;
      if ($docked === true){
        echo $hBR;
        echo '<span class="php-output">';
     	echo "There are $shipsDocked ships docked"; 
        echo '</span>';
      }
    ?>
<p>Running checks with the NOT operator using strict typechecking	      
    <?php
      if ($docked !== true){
        echo '<span class="php-output">';
     	echo 'There are no ships docked'; 
        echo '</span>';
      } else{
        echo '<span class="php-output">';
     	echo "There are $shipsDocked ships docked"; 
        echo '</span>';
      
      }

    ?>
    <p>Greater than, less than and equals operators can be used<br/>
    <?php
      $roomsRequested = 4;
      $roomsEmpty = 3;

      if ($roomsEmpty < $roomsRequested){
        echo '<span class="php-output">';
        echo 'Not enough rooms available to meet your request.'; 
        echo '</span>';
      }
      echo $hBR;
      if ($roomsRequested>$roomsEmpty  ){
        echo '<span class="php-output">';
        echo 'Not enough rooms available to meet your request.'; 
        echo '</span>';
      }
      ?>
      <p>If we want to keep a room empty regardless of bookings, we could use the equals operator:<br/>
      <?php
      if ($roomsRequested>=$roomsEmpty  ){
        echo '<span class="php-output">';
        echo 'Not enough rooms available to meet your request.'; 
        echo '</span>';
      }
      ?>

      <p> Finally, we can combine comparison and logical operators:
      


      <?php



      $roomsRequested = 1;

      $maxRoomsAllowed = 5;
      $roomsEmpty = 2;


      if(($roomsRequested >= $roomsEmpty) || ($roomsRequested > $maxRoomsAllowed)){
        echo '<span class="php-output">';
        echo 'Not enough rooms available to meet your request.'; 
        echo '</span>';
      
      }else{
        echo '<span class="php-output">';
        echo 'Rooms available to meet your request.'; 
        echo '</span>';
      
      }
      ?>
      <h2>Switch statements</h2>
      <p>Used when <code>if</code> statements would be messy.

<?php
      switch(2){
        case 1:
          echo '<span class="php-output">';
	  echo 'Value: 1';
          echo '</span>';
          break;	  
	
	case 2:
          echo '<span class="php-output">';
	  echo 'Value: 2';
          echo '</span>';
          break;	  
	
	default:
          echo '<span class="php-output">';
	  echo 'Value unknown';
          echo '</span>';
	  break;
      }



      echo $hP;
      $weather = 'rainy';
      $color = NULL;

      switch(true){
        case $weather == 'hot' :
          $color = 'goldenrod';
          break;	  
	
	case $weather =='cold' :
          $color ='darkblue'; 
          break;	  
	
	default:
          $color ='#444'; 
	
      }
      echo '<span class="php-output" style ="background-color:' .$color .'">Weather Mood</span>';
    ?>

  </section>
</div>
</article>


