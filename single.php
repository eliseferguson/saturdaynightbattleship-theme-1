<?php get_header(); ?>

<!--single.php-->
  <div class="section content">
    <div class="container">
      <div class="row">
        <div class="seven columns">
       
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="post-header">
                 <div class="date">
                   <span class="post_month"><?php the_time( 'M' ); ?></span>
                   <span class="post_day"><?php the_time( 'j' ); ?></span>
                   <span class="post_year"><?php the_time( 'Y' ); ?></span>
                 </div>
                 <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                 <div class="author"><?php the_author(); ?></div>
              </div><!--end post header-->
              <div class="entry clear">
                 <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                 <?php the_content(); ?>
                 <?php edit_post_link(); ?>
                 <?php wp_link_pages(); ?> 
                 <a href="#" class="back-to-top">Back to Top</a></div>
              <!--end entry-->
              <div class="post-footer">
                 <div class="comments"><?php comments_template(); ?></div>
              </div><!--end post footer-->
              </div><!--end post-->
          <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
              <div class="navigation index">
                 <div class="alignleft"><?php next_posts_link( '< Older Entries' ); ?></div>
                 <div class="alignright"><?php previous_posts_link( 'Newer Entries >' ); ?></div>
              </div><!--end navigation-->
          <?php else : ?>
          <?php endif; ?>


        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
     
      