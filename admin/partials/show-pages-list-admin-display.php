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

<p><?php _e('All Posts'); ?> :</p>
<textarea id="posts_list">
<?php
	$posts = array_map( 'get_permalink', get_posts( array( 'post_type'=>'post','post_status' => 'publish' ) ));
    $i = 0;
	$len = count($posts);
	foreach($posts as $post) {
		echo $post;
		if($i < $len-1) { echo "\n"; }
		$i++;
	}
?>
</textarea>
<p class="submit"><input type="button" name="submit" id="download2" class="button button-primary" value="Export (.txt)"></p>

<p><?php _e('All'); ?> :</p>
<textarea id="all_list">
<?php
	$post_types = get_post_types();
	foreach ( $post_types as $post_type ) {
		$allpages = array_map( 'get_permalink', get_posts( array( 'post_type'=>$post_type,'post_status' => 'publish' ) ));
		foreach($allpages as $singlepage) {
			echo $singlepage;
			echo "\n";
		}
	}
?>
</textarea>
<p class="submit"><input type="button" name="submit" id="download3" class="button button-primary" value="Export (.txt)"></p>

<script src="<?php echo plugin_dir_url( __FILE__ ) . '../js/jquery.generateFile.js' ?>"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) . '../js/script.js' ?>"></script>
<script type="text/javascript">
	var pathPHP = "<?php echo plugin_dir_url( __FILE__ ) ?>../js/download.php";
</script>