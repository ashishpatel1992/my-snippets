function custom_field_img_to_rss($content) {  
    if(is_feed()) {  
        $post_id = get_the_ID();  
        
        $rssimage = get_field('rss_image');

            if( !empty($rssimage) ): 
                $imgurl = $rssimage['url'];
                $imgalt = $rssimage['alt'];
                $imgtitle = $rssimage['title'];
                $output .= '<p class="rss-image"><img src="';
                $output .=  $imgurl;
                $output .= '" alt="';
                $output .= $imgalt;
                $output .= '" title="';
                $output .= $imgtitle;
                $output .= '" /></p>'; 
            endif; 
  
        $content = $output.$content;  
    }  
    return $content;  
}  
add_filter('the_content','custom_field_img_to_rss');
