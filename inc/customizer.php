<?php
function battleship_theme_customizer( $wp_customize ) {
    //add logo to customize screen
    $wp_customize->add_section( 'battleship_logo_section' , array(
	    'title'       => __( 'Logo', 'battleship' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	$wp_customize->add_setting( 'battleship_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'battleship_logo', array(
	    'label'    => __( 'Logo', 'battleship' ),
	    'section'  => 'battleship_logo_section',
	    'settings' => 'battleship_logo',
	) ) );
}
add_action( 'customize_register', 'battleship_theme_customizer' );

function battleship_customize_register( $wp_customize ) {
	/*******************************************
	Color scheme
	********************************************/
	 
	// add the section to contain the settings
	$wp_customize->add_section( 'textcolors' , array(
	    'title' =>  'Color Scheme',
	) );
	// main color ( site title, h1, h2, h4. h6, widget headings, nav links, footer headings )
	$txtcolors[] = array(
	    'slug'=>'color_scheme_1', 
	    'default' => '#222',
	    'label' => 'Main Text Color'
	);
	 
	// secondary color ( site description, sidebar headings, h3, h5, nav links on hover )
	$txtcolors[] = array(
	    'slug'=>'color_scheme_2', 
	    'default' => '#C85E35',
	    'label' => 'Secondary Text Color'
	);
	 
	// link color
	$txtcolors[] = array(
	    'slug'=>'link_color', 
	    'default' => '#060',
	    'label' => 'Link Color'
	);
	 
	// link color ( hover, active )
	$txtcolors[] = array(
	    'slug'=>'hover_link_color', 
	    'default' => '#C85E35',
	    'label' => 'Link Color (on hover)'
	);

	$txtcolors[] = array(
	    'slug'=>'header_color', 
	    'default' => '#fff',
	    'label' => 'Header Background Color'
	);

	$txtcolors[] = array(
	    'slug'=>'footer_color', 
	    'default' => '#e0dfdd',
	    'label' => 'Footer Background Color'
	);
	$txtcolors[] = array(
	    'slug'=>'wordmark_color', 
	    'default' => '#000',
	    'label' => 'Word Mark Color'
	);
	$txtcolors[] = array(
	    'slug'=>'callout_color', 
	    'default' => '#C85E35',
	    'label' => 'Callout Box Background Color'
	);
	$txtcolors[] = array(
	    'slug'=>'button_color', 
	    'default' => '#060',
	    'label' => 'Button Color'
	);
	$txtcolors[] = array(
	    'slug'=>'hover_button_color', 
	    'default' => '#C85E35',
	    'label' => 'Button Color (on hover)'
	);
	// add the settings and controls for each color
	foreach( $txtcolors as $txtcolor ) {
	 
	    // SETTINGS
	    $wp_customize->add_setting(
	        $txtcolor['slug'], array(
	            'default' => $txtcolor['default'],
	            'type' => 'option', 
	            'capability' => 
	            'edit_theme_options'
	        )
	    );
	    // CONTROLS
	    $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            $txtcolor['slug'], 
	            array('label' => $txtcolor['label'], 
	            'section' => 'textcolors',
	            'settings' => $txtcolor['slug'])
	        )
	    );
	}
	
	 
	 
	
	 
	 
	
}
add_action( 'customize_register', 'battleship_customize_register' );

function battleship_customize_colors() {    
 
	/**********************
	text colors
	**********************/
	// main color
	$color_scheme_1 = get_option( 'color_scheme_1' );
	 
	// secondary color
	$color_scheme_2 = get_option( 'color_scheme_2' );
	 
	// link color
	$link_color = get_option( 'link_color' );
	 
	// hover or active link color
	$hover_link_color = get_option( 'hover_link_color' );
	 
	$header_background_color = get_option('header_color');
	$logo_color = get_option('wordmark_color');
	$button_color = get_option('button_color');
	$hover_button_color = get_option('hover_button_color');
	$callout_background_color = get_option('callout_color');
	$footer_background_color = get_option('footer_color');
	
	 
	/****************************************
	styling
	****************************************/
	?>
	<style>
	 
	     
	    /* color scheme */
	     
	    /* main color */

	    body {
	    	color: <?php echo $color_scheme_1; ?>;
	    }
	    /* links color */
	    a:link, a:visited { 
	        color:  <?php echo $link_color; ?>; 
	    }
	     
	    /* hover links color */
	    a:hover, a:active {
	        color:  <?php echo $hover_link_color; ?>; 
	    }
	     
	    .brand a { 
	    	color: <?php echo $logo_color; ?>; 
	    }   
	    
	     
	     
	    /* background colors */
	     
	    /* header */
	    .header, .hero {
	    	background: <?php echo $header_background_color; ?>;
	    }
	   
	    
	    /* footer */
	    .footer { 
	        background: <?php echo $footer_background_color; ?>;
	    }
	    .attorneys .column {
	    	background: <?php echo $callout_background_color; ?>;
	    }
	    .cta strong {
	    	color: <?php echo $color_scheme_2; ?>;
	    }
	    .button.button-primary {
	    	background-color: <?php echo $button_color; ?>;
	    	border-color: <?php echo $button_color; ?>;
	    }
	    .button.button-primary:hover {
	    	background-color: <?php echo $hover_button_color; ?>;
	    	border-color: <?php echo $hover_button_color; ?>;
	    }
	     
	</style>
	    
	    
	    
	    
     
<?php }
add_action( 'wp_head', 'battleship_customize_colors' );


?>