<?php
// Create Shortcode to Display Post Types

function create_shortcode_without_paramenter($attr){
  
    $number=shortcode_atts(array(    
        'pages' => '10',
),$attr);
  
    $args = array(
        'post_type' => 'post',     
        'orderby'   => 'rand', 
        'posts_per_page' => $number['pages'],
    );
   
    $the_query = new WP_Query($args);
    if($the_query->have_posts()) :
        $result="<ul class='recent'>";
        while($the_query->have_posts()) :
            $the_query->the_post() ;
            $result .= '<li style="margin-bottom:30px;clear:both;">';
            $result .= get_the_post_thumbnail( get_the_id(), array('70','70'), array( 'class' => 'pull-left' )); 
            $result .= '<span style="float:right;width:70%;">';    
            $result .= '<h6>';
            $result .= '<a href="'. get_permalink() .'">'. get_the_title().'</a>'; 
            $result .= '</h6>';
            $result .= '<p>';
            $result .= wp_trim_words(get_the_excerpt(),10);
            $result .= '</p>';
            $result .= '</span>';

            $result .= '</li>';
       
            //$result .= '<li>'. get_the_post_thumbnail( $post = null,array( 70, 40)) .'<h6><a href="'. get_permalink() .'">'. get_the_title() .'</h6></a>';  
         
           // $result .= '<p>'. wp_trim_words(get_the_excerpt(),10).'</p>'.'</li>';
            // $result .= '<div>' . get_the_content() . '</div>';

        endwhile;
        wp_reset_postdata();
        $result .= '</ul>';
    endif;   
    return $result;            
}

add_shortcode( 'creating_shorcodes', 'create_shortcode_without_paramenter' );


// creating sortcode for tags
function wpb_tag_cloud() { 
    $tags = get_tags();
    
    $args = array(
     
        'smallest'                  => 15, 
        'largest'                   => 15,
        'unit'                      => 'px', 
        'number'                    => 10,  
        'format'                    => 'flat',
        'separator'                 => " ",
        'orderby'                   => 'count', 
        'order'                     => 'DESC',
        'show_count'                => 1,
        'echo'                      => false,
        
    ); 
     
    $tag_string = wp_generate_tag_cloud( $tags, $args );
     
    return $tag_string; 
     
    } 
    // Add a shortcode so that we can use it in widgets, posts, and pages
    add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
     
    // Enable shortcode execution in text widget
    add_filter ('widget_text', 'do_shortcode'); 
?>
 