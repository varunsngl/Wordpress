<?php /*
Plugin Name: My Plugin
Plugin URI: http://thekites.in
Description: A very basic test plugin
Version: 1.0
Author: Md. Varun Kumar
Author URI: http://thekites.in
License: GPL2
*/


function fb_like($post_ID)  {
?>
<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode('http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]); ?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
<?php
    return $post_ID;
}

add_action ( 'the_content', 'fb_like');