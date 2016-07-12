<?php
	include '../public/header.php'; 
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	$cate = tree(DB('SELECT * FROM cate'));
	$tags = DB('SELECT tid , tag_name FROM tags WHERE is_show = 1');
?>
<script type="text/javascript" src="/js/ue/ueditor.config.js"></script>
<script type="text/javascript" src="/js/ue/ueditor.all.min.js"></script>

<div class="content">
	<div class="title">
		添加文章
	</div>
	<div class="mess">
		　<?php  echo isset($_GET['mess']) ? $_GET['mess'] : '请按照格式添加!' ?>
	</div>
	
	<form action="article.php" method="post">
		<input type="hidden" name="action" value="add">
		<p>
			<label>栏目</label>
			<?php echo formselect($cate); ?>
		</p>
		<div id="tags">
			<label>　　</label>
			
			<div class="clear"></div>
		</div>
		<p>
			<label>添加标签</label><?php echo getTagsName($tags); ?>　<input type="button" name="but" value="选中">
		</p>
		
		<p>
			<label>名称</label>
			<input type="text" name="title" >
		</p>
		<p>
			<label>内容</label>
			<!-- <textarea name="content"></textarea> -->
			<div style="float:left; width:70%">
				<script id="container" name="content" type="text/plain"></script>
		    </div>
		    <div style="clear:both"></div>
		</p>
		<p>
			<label>作者</label>
			<input type="text" name="author">
		</p>
		<p>
			<label>点击量</label>
			<input type="text" name="clicks" value="0">
		</p>
		<p>
			<label>排序</label>
			<input type="text" name="ord" value="0">
		</p>
		<p>
			<label>加精</label>
			<input type="radio" name="good" value="1" >	是
			<input type="radio" name="good" value="0" checked="checked"> 否
		</p>
		<p>
			<label>置顶</label>
			<input type="radio" name="top" value="1">	是
			<input type="radio" name="top" value="0" checked="checked"> 否
		</p>
		<p>
			<label>是否显示</label>
			<input type="radio" name="is_show" value="1" checked="checked">	显示
			<input type="radio" name="is_show" value="0"> 屏蔽
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