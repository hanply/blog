<?php 
	$tags = DB('SELECT tid,tag_name FROM tags WHERE is_show = 1 ORDER BY ord DESC,clicks DESC');
	$nums = DB('SELECT tid,count(*) as count FROM tags_article GROUP BY tid');
?>
<?php foreach($tags as $t): ?>
	<a href="list.php?tid=<?php echo $t['tid'] ?>">
	<?php echo $t['tag_name'] ?>
		<?php foreach($nums as $n): ?>
			<?php if($t['tid'] == $n['tid']): ?>
				&nbsp;&nbsp;<small>&nbsp;<?php echo $n['count'] ?></small>
			<?php endif; ?>
		<?php endforeach; ?>
	</a>
<?php endforeach; ?>
