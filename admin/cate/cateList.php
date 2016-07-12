<?php
	include '../public/header.php';
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	$data = DB('SELECT * FROM cate');
	$tree = tree($data);	
?>

<div class="content">
	<div class="title">
		栏目列表
	</div>
	<div class="mess">
		<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '修改栏目需谨慎!' ?>
	</div>
	<div class="cate-list">
		<?php echo getTree($tree); ?>
	</div>
</div>

<?php include '../public/footer.php'; ?>