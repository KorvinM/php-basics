<?php //datatypes.php  - contains the first article ?>

<article> 
  <header>
    <h1>Datatypes</h1>
    <hr>
  </header>
  <div class="article-content" style = "columns: 3 33em;column-rule: solid 1px #eee">
  <section>
    <h2> Strings</h2>
    <p>
    <?php
      echo '<span class="php-output">' . $name. '</span>'; ?>
  </section>
  <section>
    <h2>Integers and Floats</h2>
    <?php
      echo 'Account number: <span class="php-output">' . $bankAcc. '</span>';
      echo 'Balance: £<span class="php-output">' . $bankBal . '</span>';
    ?>
  </section>
<?php 
$sectionBool = false;
?>
  <section>
    <h2>Booleans</h2>
    <?php
    if ($sectionBool){ 
      echo $hP . 'This section should now show up, since <code>$sectionBoolean</code> is set to <span class="php-output">' . $sectionBool; 
      echo '</span>';

      if ($numBool){
        echo $hP . 'Additionally, this paragraph is output if <code>$numBool</code> is set to 1';
      }
      $funcReturn = is_int(1);
      if ($funcReturn){
        echo $hP . 'The function <code>is_int()</code> has retuned <code>true</code>'; 
      }
      echo $hP . 'On the other hand, we could <code>var_dump</code>:<span class="php-output">';
      var_dump(is_int($numBool));
      echo '</span>';

    ?>
  <?php }
      else if (!$sectionBool){
      echo $hP . 'This section should be fairly empty, since <code>$sectionBoolean</code> is set to:<span class="php-output">' ; 
      var_dump($sectionBool);
      echo '</span>';
      echo $hBR . 'Set it to <code>true</code> and this section will expand'; 	 
      }


  ?>
  </section>
  <section>
    <h2>Arrays</h2>
      <p>Let us echo and var_dump our array <code>$names[]</code>, currently empty:
    <?php
      echo '<span class="php-output">' . $names . '</span>' .$hBR;
      var_dump ($names);
      echo $hBR;
      $bitC = 1;
      if (!$bitC){
        $names[] = 'Iain';
      }
      echo '<code>echo $names[1]</code> returns: <span class="php-output">' . $names[1] . '</span>';
    ?>
      <p>We have a multi-dimensional array
      <?php
        echo '<pre class="">' , var_dump($users) , '</pre>';
      ?>
     <p>Let's see if we can access the second user's email.<br/>
     <?php
       echo '<span class="php-output">' . $users[1]['email'] . '</span>';
     ?>
     <p> Now let's use a <code>foreach</code> loop over the <code>$users</code> array. <br/>
     <span class="php-output">
     <?php
      foreach($users as $user){
        echo $user['username'] . ' '; 
      
      }
?>
    </span>
     <br/>We could use the same technique to output the list of email addresses:<br/>
     <span class="php-output">
     <?php
      foreach($users as $user){
        echo $user['email'] . ' '; 
      
      }
?>
    </span>
     <br/>and likes?<br/>
     <span class="php-output">
     <?php
      foreach($users as $user){
        echo $user['likes'][0] .',' . $user['likes'][1] . ' '; 
      
      }
?>
    </span>
    <p>Now lets add a new user
     <?php
       $users[] = [
    'username' => 'Jeremy',
    'email' => 'jem@jem.org',
    'likes' => ['reading', 'cooking']
  ];
     ?>
    and modify a record. <br/>
    
    <?php
      $users[1]['likes'][1] = 'PHP';
        //echo '<pre>' , var_dump($users) , '</pre>';
     ?>
     Users:  
     <span class="php-output">
     <?php
      foreach($users as $user){
        echo $user['username'] . ' '; 
      
      }
?>
    </span><br/>
     Likes: 
     <span class="php-output">
     <?php
      foreach($users as $user){
        echo $user['likes'][0] .',' . $user['likes'][1] . ' '; 
      
      }
?>
    </span>
  </section>
  <section>
    <h2>Null</h2>
      <p>Null represents a variable with no value; the variable has either been set to NULL, has been unset, or has never been set in the first place.
         Earlier we set <code>$noName</code> to null. Let's <code>var_dump($noName)</code>:
      <?php
        echo '<span class="php-output">';
        var_dump($noName);
        echo '</span>';
	echo $hP .'Now let\'s set and <code>echo</code> the variable: ';  
	$noName = 'Name';
        echo '<span class="php-output">';
	echo $noName;
        echo '</span>';
	echo $hP .'Now let\'s <code>unset</code> and <code>var_dump</code> the variable: ';  
        unset($noName);
        echo '<span class="php-output">';
        var_dump($noName);
        echo '</span>';
	echo $hP .'Now let\'s set  the variable back to NULL, since that\'s best practice: '; $noName = NULL;  
        echo '<span class="php-output">';
        var_dump($noName);
        echo '</span>';
      ?>
  </section>
  <section>
    <h2>Concatenation and Variable Parsing</h2>
    <p>
    <?php
      //concatenation	
      echo $status = 'The current weather is <span class="php-output">' . $weather . '</span> and it\'s <span class="php-output">' .  $temperature . ' degrees</span>' . $hBR;
      //variable parsing
        echo '<span class="php-output">';
      echo $status = "The current weather is $weather and it's $temperature degrees." . $hBR;
        echo '</span>';
        echo '<span class="php-output">';
      echo $status = "The current weather is {$weather} and it's {$temperature}°";
        echo '</span>';
    ?>
  </section>
</div>
</article>
