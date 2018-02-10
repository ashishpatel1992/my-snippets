// To add custom field to REST API
function rest_custom_field($response, $post) {
    $response->data['my_custom_field'] = '';
    $field_name = get_post_meta( $post->ID, '{field_name}',true );
    $response->data['my_custom_field'] = $field_name;
    return $response;
}
 
add_filter('rest_prepare_post', 'rest_custom_field', 10, 3)
