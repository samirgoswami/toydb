<?php
require_once __DIR__ . '/config.php';
$db->database->selectDB('blog');
$id=intval($_GET['id']);
$post=$db->database->select->byId('posts','*',$id);
?>
<ul>
	<li>
		<h1><?php echo $post->title;?></h1>
		<p><?php echo $post->content;?></p>
	</li>
</ul>
<a href="create.php">Create New POST</a> || 
<a href="index.php">View All Posts</a>