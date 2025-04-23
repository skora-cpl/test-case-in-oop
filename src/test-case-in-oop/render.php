<?php
/**
 * @see This is my render file in OOP; block created using create-block;
 */

// CALL THE CLASS FILE FROM THE root of the plugin folder.

// require_once('../../MySpecialClass.php');

?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'test case in OOP – hello from a dynamic block!', 'test-case-in-oop' ); ?>
	HERE'S another example of output and the text!
</p>

<section>
	reminder, if i refresh, the minute time should be no more than 1 minute away from
clock on ubuntu
	<?php
	// Prints something like: Monday 8th of August 2005 03:12:46 PM
	// echo date( 'l jS \of F Y h:i:s A' );

	// WILL BE USED LATER ON
	$list_id = isset( $attributes['listID'] ) ? $attributes['listID'] : '';

	$my_new_list_object = new \Cpl\TestCaseInOop\MySpecialClass();
	$my_new_list_object->display_time();

	?>
</section>

