<?php
	include '../public/header.php'; 
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	$cate = tree(DB('SELECT * FROM cate'));

	if(!isset($_GET['cid']) && $_GET['cid'] != '')
		redirect('cateList.php');

	$data = DB('SELECT * FROM cate WHERE cid = '.$_GET['cid']);

?>

<div class="content">
	<div class="title">
		修改栏目
	</div>
	<div class="mess">
		　<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '请按照格式修改!' ?>
	</div>
	
	<form action="cate.php" method="post">
		<input type="hidden" name="cid" value="<?php echo $data[0]['cid'] ?>">
		<input type="hidden" name="action" value="mod">
		<p>
			<label>父ID</label>
			<?php echo formselect($cate , $data[0]['pid']); ?>
		</p>
		<p>
			<label>栏目名称</label>
			<input type="text" name="cate_name" value="<?php echo $data[0]['cate_name'] ?>">
		</p>
		<p>
			<label>排序</label>
			<input type="text" name="ord"  value="<?php echo $data[0]['ord'] ?>">
		</p>

		<p>
			<label>是否显示</label>
			<?php if($data[0]['is_show']== 1 ):?>
				<input type="radio" name="is_show" value="1" checked="checked">	显示
				<input type="radio" name="is_show" value="0"> 屏蔽
			<?php else: ?>
				<input type="radio" name="is_show" value="1">	显示
				<input type="radio" name="is_show" value="0"  checked="checked"> 屏蔽
			<?php endif; ?>
		</p>
		<p>
			<input type="submit" name="sub" value="提 交">
		</p>
	</form>

</div>


<?php include '../public/footer.php'; ?>