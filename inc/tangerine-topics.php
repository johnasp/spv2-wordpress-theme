<section class="tangerine-topics">
  <h3>Tangerine Topics</h3>

<?php
   $rows = get_field('tangerine_topics');
    if($rows) {
      foreach($rows as $row)
      {
        echo '<h4>' . $row['tt_title'] . '</h4>';
        echo $row['tt_content'];
 
      }
    }  
?>
</section>
