<?php
define('ROOT_PATH',dirname(__DIR__));
	include ROOT_PATH.'/func.php';
	$nav = tree(DB('SELECT * FROM cate WHERE is_show = 1 ORDER BY ord DESC,cid ASC'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>博客首页</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<script type="text/javascript" src="js/Jquery.min.js"></script>
	<script type="text/javascript" src="js/koala.min.1.5.js"></script>
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="head-content">
			<div class="logo">Alan Shang Blog</div>
			<div class="search">
				<form action="" method="post">
					<input type="text" name="search" placeholder="PHP"><input type="button" value="搜 索">
				</form>
			</div>
		</div>
	</div>
	<!-- header end -->
	<!-- nav -->
	<div class="nav">
		<div class="nav-content">
			<ul class="menu">
				<li><a href="index.php">首　页</a></li>
				<?php foreach($nav as $n): ?>
				<li>
					<a href="list.php?cid=<?php echo $n['cid'] ?>"><?php echo $n['cate_name'] ?></a>
					<?php if(isset($n['son'])): ?>
					<ul class="nav-menu">
						<?php foreach($n['son'] as $son): ?>
							<li><a href="list.php?cid=<?php echo $son['cid'] ?>"><?php echo $son['cate_name'] ?></a></li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<!-- nav end -->