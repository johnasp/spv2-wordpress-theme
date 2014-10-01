<section class="last-match">
<?php
   $rows = get_field('last_match_review');
    if($rows) {
      foreach($rows as $row)
      {
        if (empty($row['result'])) {
          
        } 
        else {
          echo '<h3>' . $row['result'] . '</h3>';
        }
        if (empty($row['team'])) {      
        } 
        else {
         echo '<h4>Team:</h4>' . $row['team'];
        }
        if (empty($row['highlights'])) {
          
        } 
        else {
          echo '<h4>Match highlights:</h4>' . $row['highlights'];
        }
        if (empty($row['fans_comments'])) {
          
        } 
        else {
          echo '<h4>Fans comments:</h4>' . $row['fans_comments'];
        }
        if (empty($row['manager_audio'])) {
          
        } 
        else {
        echo '<h4>Manager audio:</h4>' . $row['manager_audio'];  
        }
      }
    }  
?>
</section>
