<?php get_header(); ?>


  <div class="section content">
    <div class="container">
      <div class="row">
        <div class="seven columns">
        <h3 class="section-heading">
          
          <?php
          if (post_custom('page-title-display')) {
           // if the custom field exists, do this 
           echo post_custom('page-title-display');
           } else {
           // otherwise, do this (output the post title)
           the_title();
           }
          ?>
        </h3>
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
              <div class="entry clear">
                 <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                 <?php the_content(); ?>
                 <a href="#" class="back-to-top">Back to Top</a>
              </div>
              <!--end entry-->
              
              </div><!--end post-->
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
              <div class="navigation index">
                 <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
                 <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
              </div><!--end navigation-->
          <?php else : ?>
          <?php endif; ?>
          <!-- recent posts egf-make this optional, add featured image thumbnail -->
          <h3>Recent Blog Posts</h3>
          <div class="homepage-recent-posts">
            <?php
             $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
             foreach ($postslist as $post) :
                setup_postdata($post);
             ?>
             <div class="homepage-entry">
             <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
             <?php the_time(get_option('date_format')) ?>
             <?php the_excerpt(); ?>
             </div>
             <?php endforeach; ?>
           </div>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
     
      