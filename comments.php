<?php 
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('please do not load this page directly, Thanks!');
if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments. </p>
    <?php
    return;
}
?>

