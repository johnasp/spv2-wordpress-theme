<section class="match">
        
    <h3><?php the_field('fixture_result'); ?><span aria-hidden="true" data-icon="&lt;"></h3> 

    <h4>Team:</h4>
    <?php the_field('team'); ?>

    <h4>Subs:</h4>
    <?php the_field('subs'); ?>

    <h4>Match highlights:</h4>
    <?php the_field('match_highlights'); ?>

    <h4>Fans' match comments:</h4>
    <?php the_field('fans_comments'); ?>

    <h4>Manager's post match interview:</h4>
    <?php the_field('manager_audio'); ?>

</section>

<section class="tangerine-topics">
    <h3>Tangerine Topics<span aria-hidden="true" data-icon="5"></span></h3>
    <?php the_field('tangerine_topics'); ?>
</section>

<section class="soapbox">
    <h3>Listeners Soapbox <span aria-hidden="true" data-icon="C"></span></h3>
    <blockquote><span class="arrow"></span><span aria-hidden="true" data-icon="B"></span>
       <?php the_field('soapbox_question'); ?>
    </blockquote>
       <?php the_field('soapbox_comments'); ?>
</section>
