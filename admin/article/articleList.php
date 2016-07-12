	<?php
	include '../public/header.php';
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';

	$sql = 'SELECT aid,cate_name,title,author,a.ord,a.clicks,top,good,a.is_show,update_time FROM article a,cate c WHERE a.cid = c.cid ORDER BY ord DESC,aid DESC';

	$fields = array(
		'aid' => 'AID',
		'cate_name' => '栏目名称',
		'title' => array(
			'mc' => '标题',
			'type' => 'title',
			'nums' => 20,
		),

		'author' => '作者',
		'ord' => '排序',
		'clicks' => '点击量',
		'top' => array(
			'mc' => '是否置顶',
			'type' => 'xz',
			'check' => array(
				'1' => '<font color="green">是</font>',			
				'0' => '<font color="red">否</font>',	
			),
		),
		'good' => array(
			'mc' => '是否加精',
			'type' => 'xz',
			'check' => array(
				'1' => '<font color="green">是</font>',			
				'0' => '<font color="red">否</font>',	
			),
		),
		'is_show' => array(
			'mc' => '是否显示',
			'type' => 'xz',
			'check' => array(
				'1' => '<font color="green">显示</font>',			
				'0' => '<font color="red">屏蔽</font>',	
			),
		),
		'update_time' => array(
			'mc' => '更新时间',
			'type' => 'time',
			'format' => 'Y-m-d H:i:s',
		),
	);
	$mod = array(
		array(
			'mc' => '修改',
			'url' => 'articleMod.php',
			'field' => 'aid',
		),
	);
?>
<div class="content">
	<div class="title">
		文章列表
	</div>
	<div class="mess">
		<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '修改栏目需谨慎!' ?>
	</div>
	
	<div class="table-list">
	<?php echo getPageList($sql , $fields , $mod); ?>
	</div>
</div>

<?php include '../public/footer.php'; ?>