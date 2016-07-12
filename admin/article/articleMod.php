<?php
	include '../public/header.php'; 
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';

	if(!isset($_GET['aid']) && $_GET['aid'] != '')
		redirect('articleList.php');

	$data = DB('SELECT * FROM article WHERE aid = '.$_GET['aid']);
	$cate = tree(DB('SELECT * FROM cate'));
	$tags = DB('SELECT tid , tag_name FROM tags WHERE is_show = 1');

	$tids = DB('SELECT tid FROM tags_article WHERE aid = '.$_GET['aid']);
	$tid =  implode(',' ,array_column($tids , 'tid'));
	$haveTid = DB('SELECT tid,tag_name FROM tags WHERE tid IN('.$tid.')');

?>
<script type="text/javascript" src="/js/ue/ueditor.config.js"></script>
<script type="text/javascript" src="/js/ue/ueditor.all.min.js"></script>
<div class="content">
	<div class="title">
		修改文章
	</div>
	<div class="mess">
		　<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '请按照格式添加!' ?>
	</div>
	
	<form action="article.php" method="post">
		<input type="hidden" name="action" value="mod">
		<input type="hidden" name="aid" value="<?php echo $data[0]['aid'] ?>">
		<p>
			<label>栏目</label>
			<?php echo formselect($cate , $data[0]['cid']); ?>
		</p>
		<div id="tags">
			<label></label>
			
			<?php foreach($haveTid as $t): ?>
				<div class="tag-list">	
					<?php echo $t['tag_name'] ?>
					<input type="hidden" name="tids[]" value="<?php echo $t['tid'] ?>">
					<span>X</span>
				</div>
			<?php endforeach; ?>

			<div class="clear"></div>
		</div>
		<p>
			<label>添加标签</label><?php echo getTagsName($tags); ?>　<input type="button" name="but" value="选中">
		</p>
		<p>
			<label>名称</label>
			<input type="text" name="title" value="<?php echo $data[0]['title'] ?>">
		</p>
		<p>
			<label>内容</label>
			<div style="float:left; width:70%">
				<script id="container" name="content" type="text/plain"><?php echo $data[0]['content'] ?></script>
		    </div>
		    <div style="clear:both"></div>
		</p>
		<p>
			<label>作者</label>
			<input type="text" name="author" value="<?php echo $data[0]['author'] ?>">
		</p>
		<p>
			<label>点击量</label>
			<input type="text" name="clicks" value="<?php echo $data[0]['clicks'] ?>">
		</p>
		<p>
			<label>排序</label>
			<input type="text" name="ord" value="<?php echo $data[0]['ord'] ?>">
		</p>
		<p>
			<label>是否加精</label>
			<?php if($data[0]['good']== 1 ):?>
				<input type="radio" name="good" value="1" checked="checked">	是
				<input type="radio" name="good" value="0"> 否
			<?php else: ?>
				<input type="radio" name="good" value="1">	是
				<input type="radio" name="good" value="0"  checked="checked"> 否
			<?php endif; ?>
		</p>
		<p>
			<label>是否置顶</label>
			<?php if($data[0]['top']== 1 ):?>
				<input type="radio" name="top" value="1" checked="checked">	是
				<input type="radio" name="top" value="0"> 否
			<?php else: ?>
				<input type="radio" name="top" value="1">	是
				<input type="radio" name="top" value="0"  checked="checked"> 否
			<?php endif; ?>
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
 <script type="text/javascript">
    var ue = UE.getEditor('container');
</script>

<?php include '../public/footer.php'; ?>