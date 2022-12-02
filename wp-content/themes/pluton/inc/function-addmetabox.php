<?php

/*To add the meta box inside the post */
add_action('add_meta_boxes', 'create_theme_meta_box');

/*Creating the function to add the box */
function create_theme_meta_box()
{

	add_meta_box('meta_box_id', 'Add heading', 'create_theme_pluton_callback', 'slider', 'side', 'high');

} //end of create_theme_meta_box

/*Creating the call back funciton*/
function create_theme_pluton_callback($post)
{
	$heading = get_post_meta($post->ID, 'pluton-slider', true);

?>
	<p>
		<label for="pluton-slider"></label>
		<textarea name="pluton-slider" id="pluton-slider" cols="35" rows="3"><?php echo $heading; ?></textarea>
	</p>

<?php
} //end of create_theme_pluton_callback function

/*To save the data into the database*/
add_action('save_post', 'custom_theme_save');


/* creating function for the text area where the use can enter text*/
function custom_theme_save($post_id)
{

	if (array_key_exists('pluton-slider', $_POST)) {
		update_post_meta(
			$post_id,
			'pluton-slider',
			$_POST['pluton-slider']
		);
	}
} //end of text area function

?>