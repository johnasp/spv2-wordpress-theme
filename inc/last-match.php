<section class="last-match">
<?php
   $rows = get_field('last_match_review');
    if($rows) {
      foreach($rows as $row)
      {
        echo '<h3>' . $row['result'] . '</h3>';
        echo '<h4>Team:</h4>' . $row['team'];
        echo '<h4>Match highlights:</h4>' . $row['highlights'];
        echo '<h4>Fans comments:</h4>' . $row['fans_comments'];
        echo '<h4>Manager audio:</h4>' . $row['manager_audio'];  
      }
    }  
?>
</section>
