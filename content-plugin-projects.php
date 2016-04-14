<?php
/**
* Template for displaying plugin projects custom post type entries
*/
?>
<div class="container-plugin-projects">
<p><a target="_blank" href="<?php the_field('link');?>"><img src="<?php the_field('screenshot'); ?>" alt="Screenshot for <?php the_title(); ?>" class="plugin-projects-screenshot"/></a></p>
<h5><?php the_title(); ?></h5>
<p><?php the_field('description');?></p>
</div>