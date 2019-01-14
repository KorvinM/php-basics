<?php
//loops.php

?>
<article>
  <header>
    <h1>Loops</h1>
  </header>
  <div class="article-content" style = "columns: 2 33em;column-rule: solid 1px #eee">
  <section>
    <h2>Structure of a <code>FOR</code> loop</h2>
    <p><code>For</code> loops iterate according to initiator, condition and increment. Given two variables - <code>$totalItems</code> and<code>$itemsPerPage</code>, we can use the <code>for</code> loop to output the number of pages needed.</br/>
    <?php
      $totalItems = 66;
      $itemsPerPage = 25;
      $pageCount = ceil($totalItems/$itemsPerPage);
        echo '<span class="php-output">';
      echo $itemsPerPage . '</span> items per page / ';
        echo '<span class="php-output">';
      echo $totalItems . '</span> items.';
      echo "So we need $pageCount pages. Voila: ";
      if($pageCount > 1){

        for ($x = 1; $x <= $pageCount; $x++){
          echo '<a href="?page=' . $x . '">' . $x . '</a> '; 

        }
      }	
    ?>
    <p>We can also use a <code>for</code> loop to loop through an array; although a <code>foreach</code> loop is preferable, this can have some use-cases <br/>
    
    <?php
      for ($i=0;$i < count($names); $i++){
        echo '<span class="php-output">', $names[$i], '</span> ';      
      }
?>
  </section>
  <section>
  <h2><code>WHILE</code> and <code>DO...WHILE</code> loops</h2>
  <p> We can iterate over an incremented variable using a <code>while</code> loop 
  
  <?php
    $currentNo = 1;
    $endNo = 10;
    $incrementBy = 1;

    while ($currentNo <= $endNo){
      echo '<span class="php-output">', $currentNo, '</span> ';	    
      $currentNo += $incrementBy;
    }

  ?>  
  <p>But a more practical use would be a dice game<br/>
  <?php
  
  $targetNumber = 3;
      echo "Target: $targetNumber $hBR"; 

    while (($diceRoll = rand(1,6)) !== $targetNumber){
      echo ' You rolled: <span class="php-output"> ' . $diceRoll . '</span>'; 
    }
      echo $hBR . 'You rolled the target: <span class="php-output">'. $diceRoll . '</span>'; 
?>
  <p>Be careful. The following would cause an infinite loop:
  <pre><code>  while (true){
    //do something forever
  }</code></pre> 
Always ensure the condition will evaluate to <code>false</code> at some point.
<p>
<?php
    do {
     echo '<code>do..while</code> loops will run at least once, before condition checking occurs';
    }while (false);
?>

  </section>
  <section>
    <h2><code>FOR...EACH loops</code></h2>
      <p>There's an example of this in the Datatypes section. It's expanded below to make use of the index values to give us an ordered list.
     <?php
      foreach($users as $index => $user){
	echo $hBR;
        echo '<span class="php-output">' . $index . ': ' . $user['email'] . '</span>'; 
      
      }
?>
  <p>Now let's use a similar technique to loop through a complex array that's 3 levels deep<br/> 
  <?php
      echo '<h3><span class="php-output">Topics</span></h3>';
      echo '<div style="display:flex;justify-content:flex-start;">';
      foreach($topics as $topic){
	echo '<div style="margin-right: 1em;">';      
        echo '<h4><span class="php-output">' . $topic['title'] . '</span></h4>'; 
        foreach($topic['posts'] as $post){
          echo '<p>' . $post['body']; 
	  
	}
	echo '</div>';      
      
      }
      echo '</div>';

?>
  </section>
  <section>
    <h2>Breaking and continuing</h2>
    <p>Sometimes a loops needs to be broken out of, or skipped. We can easily do this using two keywords: <code>break</code> and <code>continue</code>. The following examples use <code>break</code> for speed, to stop the loop once the desired result has been found, and <code>continue</code> to skip a particular member of the same array.<br/>

  <?php
          $users[] = [
    'username' => 'Xen',
    'email' => 't1@jem.org',
    'likes' => ['philosophers', 'cooking']
  ]; 
      /* something more like the original
       *
         $users = [
	      ['username' => 'alex'],
	      ['username' => 'mary'],
	      ['username' => 'uncle'],
	      ['username' => 'emacs_user'],
	      ['username' => 'jamie'],
	      
      
      
      ];
       */
      $toFind = 'Jeremy';
      $result = NULL;    
      foreach($users as $user){
        if ($user['username'] === $toFind){
          $result = $user; 
	  break;
        }
      }
      echo var_dump($result).$hBR;
      $toSkip = 'Mary';
      foreach($users as $user){
        if ($user['username'] === $toSkip){
	  continue;
        }
	echo $user['username'], '<br/>';

      }

?>
	<p>Using nested <code>foreach</code> loops, we can find the first user who likes

      <?php
      $toFind = 'philosophers';
      echo ' <span class="php-output">' . $toFind .'</span> to be: ';
      $found = NULL;

      foreach($users as $user){
	      foreach ($user['likes'] as $like){
		if($like === $toFind){
	          $found = $user;
	          break 2; // we've hit our target and break out of both nested loops	
		}
	      }
      }
      echo '<span class="php-output">' . $found['username'] . '</span>';
?>
  </section>
</div>
</article>

