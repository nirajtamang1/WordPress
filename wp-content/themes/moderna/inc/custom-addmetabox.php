<?php

/*To add the meta box inside the post */
add_action('add_meta_boxes', 'create_theme_meta_box');

/*Creating the function to add the box */
function create_theme_meta_box()
{
	add_meta_box('meta_box_id', 'Add icon', 'create_theme_callback', 'cardpart', 'normal', 'high');

// checks for post/page ID


} //end of create_theme_meta_box

/*Creating the call back funciton*/

function create_theme_callback($post)
{
	$icon = get_post_meta($post->ID, 'moderna_logo', true);
	
    

?>
	<p>
		<label for="moderna_logo"></label>    
		<textarea name="moderna_logo" id="moderna_logo" cols="62" rows="5"><?php echo $icon; ?></textarea>
	</p>
	

	
<?php
} //end of create_theme_callback function

/*To save the data into the database*/
add_action('save_post', 'custom_theme_save');


/* creating function for the text area where the use can enter text*/
function custom_theme_save($post_id)
{

	if (array_key_exists('moderna_logo', $_POST)) {
		update_post_meta(
			$post_id,
			'moderna_logo',
			$_POST['moderna_logo']
		);
	}

	if (array_key_exists('moderna_image', $_POST)) {
		update_post_meta(
			$post_id,
			'moderna_image',
			$_POST['moderna_image']
		);
	}
} //end of text area function

?>

<?php

/*To add the meta box inside the post */
add_action('add_meta_boxes', 'create_theme_meta_box_image');

/*Creating the function to add the box */
function create_theme_meta_box_image()
{
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
// checks for post/page ID
if ($post_id == '22')
{
    add_meta_box('meta_box_contact', 'Add map image link', 'create_theme_callback_image', 'page', 'normal', 'high');
}

} //end of create_theme_meta_box

/*Creating the call back funciton*/
function create_theme_callback_image($post)
{

	$image = get_post_meta($post->ID, 'moderna_image', true);
    $heading = get_post_meta($post->ID, 'moderna_heading', true);

?>
<p>
<p>
		<label for="moderna_heading">Heading</label>    
		<textarea name="moderna_heading" id="moderna_heading" cols="60" rows="5"><?php echo $heading; ?></textarea>
	</p>

	<p>
		<label for="moderna_image">Images</label>    
		<textarea name="moderna_image" id="moderna_image" cols="60" rows="5"><?php echo $image; ?></textarea>
	</p>

	
<?php
	
} //end of create_theme_callback function

/*To save the data into the database*/
add_action('save_post', 'custom_theme_save_image');


/* creating function for the text area where the use can enter text*/
function custom_theme_save_image($post_id)
{


	if (array_key_exists('moderna_image', $_POST)) {
		update_post_meta(
			$post_id,
			'moderna_image',
			$_POST['moderna_image']
		);
	}

	if (array_key_exists('moderna_heading', $_POST)) {
		update_post_meta(
			$post_id,
			'moderna_heading',
			$_POST['moderna_heading']
		);
	}
} //end of text area function