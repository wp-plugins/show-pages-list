<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://www.lije-creative.com
 * @since      1.0.0
 *
 * @package    Show_Pages_List
 * @subpackage Show_Pages_List/admin/partials
 */
?>
<h2>Show Pages List</h2>
<p><?php _e('All Pages'); ?> :</p>
<textarea id="pages_list">
<?php
	$pages = array_map( 'get_permalink', get_posts( array( 'post_type'=>'page','post_status' => 'publish' ) ));
    $i = 0;
	$len = count($pages);
	foreach($pages as $page) {
		echo $page;
		if($i < $len-1) { echo "\n"; }
		$i++;
	}
?>
</textarea>
<p class="submit"><input type="button" name="submit" id="download" class="button button-primary" value="Export (.txt)"></p>