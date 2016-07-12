	<?php
	include '../public/header.php';
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';

	

	// $data = DB('SELECT tid,tag_name,clicks,is_show FROM tags ORDER BY tid DESC LIMIT '.(($page - 1) * 2).',2');

	// limit 0,2
	// 
	$sql = 'SELECT tid,tag_name,clicks,is_show FROM tags ORDER BY tid DESC';


	$fields = array(
		'tid' => 'TID',
		'tag_name' => '标签名称',
		'clicks' => '点击量',
		'is_show' => array(
			'mc' => '是否显示',
			'type' => 'xz',
			'check' => array(
				'1' => '<font color="green">显示</font>',			
				'0' => '<font color="red">屏蔽</font>',	
			),
		),
	);
	$mod = array(
		array(
			'mc' => '修改',
			'url' => 'tagsMod.php',
			'field' => 'tid',
		),
	);
?>
<div class="content">
	<div class="title">
		标签列表
	</div>
	<div class="mess">
		<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '修改栏目需谨慎!' ?>
	</div>
	
	<div class="table-list">
	<?php echo getPageList($sql , $fields , $mod); ?>
		
		

	</div>

</div>

<?php include '../public/footer.php'; ?>