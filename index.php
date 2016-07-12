<?php include 'public/header.php'; ?>
	<!-- banner -->
	<div class="banner shadow">
		
		<!-- player -->
		<div id="fsD1" class="focus" >  
		    <div id="D1pic1" class="fPic">  
		        <div class="fcon" style="display: none;">
		            <a target="_blank" href="#"><img src="images/01.jpg" style="opacity: 1; "></a>
		            <span class="shadow"><a target="_blank" href="#">红三代叶明子太庙办盛典 白色羽毛装高贵动人</a></span>
		        </div>
		        
		        <div class="fcon" style="display: none;">
		            <a target="_blank" href="#"><img src="images/02.jpg" style="opacity: 1; "></a>
		            <span class="shadow"><a target="_blank" href="#">佟大为登封面表情搞怪 成熟男人也是天真男孩</a></span>
		        </div>
		        
		        <div class="fcon" style="display: none;">
		            <a target="_blank" href="#"><img src="images/03.jpg" style="opacity: 1; "></a>
		            <span class="shadow"><a target="_blank" href="#">21岁出柜超模巴厘自曝搞笑全裸照</a></span>
		        </div>
		        
		        <div class="fcon" style="display: none;">
		            <a target="_blank" href="#"><img src="images/04.jpg" style="opacity: 1; "></a>
		            <span class="shadow"><a target="_blank" href="#">金喜善出道21年 皮肤白皙越长越“嫩”！</a></span>
		        </div>    
		    </div>
		    <div class="fbg">  
		    <div class="D1fBt" id="D1fBt">  
		        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>1</i></a>  
		        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>2</i></a>  
		        <a href="javascript:void(0)" hidefocus="true" target="_self" class="current"><i>3</i></a>  
		        <a href="javascript:void(0)" hidefocus="true" target="_self" class=""><i>4</i></a>  
		    </div>  
		    </div>  
		    <span class="prev"></span>   
		    <span class="next"></span>    
		</div>  
		<!-- player end -->

	</div>
	<!-- banner end -->

	<!-- floor -->
	<div class="banner shadow two-nav">
		<span class="floor">F1</span> - 前端的优雅
	</div>
	<!-- floor end -->

	<!-- content -->
	<div class="content clear">
		<!-- content left -->
		<div class="left shadow">
			<p class="title">
				<span>标签云/Tags</span>
			</p>
			<div class="cont-box">
				<?php include 'public/tags.php'; ?>
			</div>
			

		</div>
		<!-- content left end -->
		<!-- content center -->
		<div class="center shadow">
			<p class="title">
				<span>最新更新/News</span>
			</p>
			<div class="cont-box">
				<ul>
					<?php $new = DB('SELECT aid,title,update_time FROM article WHERE is_show = 1 ORDER BY update_time DESC,ord DESC,clicks DESC'); ?>
					<?php foreach($new as $n): ?>
						<li><a href="show.php?aid=<?php echo $n['aid'] ?>"><?php echo getSubTitle($n['title']); ?></a><span><?php echo date('Y-m-d' , $n['update_time']) ?></span></li>
					<?php endforeach; ?>
				</ul>

				<p class="more"><a href="list.php">More>>></a></p>
			</div>
		</div>
		<!-- content center end -->
		<!-- content right -->
		<div class="right shadow">
			<p class="title">
				<span>神技能/Get</span>
			</p>
			<div class="cont-box">
				<?php $get = DB('SELECT aid,title,top,good FROM article WHERE is_show = 1 && cid = 11'); ?>
				<ul>

					<?php foreach($get as $g): ?>
						<li>
							<?php if($g['top'] == 1): ?>
								<span class ="top">top</span>
							<?php endif; ?>
							<?php if($g['good'] == 1): ?>
								<span class ="hot">hot</span>
							<?php endif; ?>
							<a href="show.php?aid=<?php echo $g['aid'] ?>"><?php echo getSubTitle($g['title'] , 15); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>

				<p class="more"><a href="list.html">More>>></a></p>
			</div>
		</div>
		<!-- content right end -->
	</div>	
	<!-- content end -->

	<!-- floor -->
	<div class="banner shadow two-nav">
		<span class="floor">F2</span> - 编程语言的魅力
	</div>
	<!-- floor end -->

	<!-- content -->
	<div class="content clear">
		<!-- content left -->
		<div class="left shadow">
			<p class="title">
				<span>标签云/Tags</span>
			</p>
			<div class="cont-box">
				<a href="javascript:void(0)">PHP</a>
				<a href="javascript:void(0)">HTML</a>
				<a href="javascript:void(0)">CSS</a>
				<a href="javascript:void(0)">Linux</a>
				<a href="javascript:void(0)">MySQL</a>
				<a href="javascript:void(0)">Node.js</a>
				<a href="javascript:void(0)">Javascript</a>
				<a href="javascript:void(0)">JQuery</a>
				<a href="javascript:void(0)">图片轮播</a>
				<a href="javascript:void(0)">网页欣赏</a>
				<a href="javascript:void(0)">PhotoShop</a>
				<a href="javascript:void(0)">UI</a>
				<a href="javascript:void(0)">UE</a>
			</div>
			

		</div>
		<!-- content left end -->
		<!-- content center -->
		<div class="center shadow">
			<p class="title">
				<span>最新更新/News</span>
			</p>
			<div class="cont-box">
				<ul>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
					<li><a href="#">PHP是最火的语言吗?</a><span>2016-05-11</span></li>
				</ul>

				<p class="more"><a href="list.html">More>>></a></p>
			</div>
		</div>
		<!-- content center end -->
		<!-- content right -->
		<div class="right shadow">
			<p class="title">
				<span>神技能/Get</span>
			</p>
			<div class="cont-box">
				<ul>
					<li>
						<span class ="top">top</span
						<a href="#">DIV + CSS布局的技巧分享</a>
					</li>
					<li>
						<span class ="hot">hot</span>
						<a href="#">DIV + CSS布局的技巧分享</a>
					</li>
					<li>
						<span class ="new">new</span>
						<a href="#">DIV + CSS布局的技巧分享</a>
					</li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
					<li><a href="#">DIV + CSS布局的技巧分享</a></li>
				</ul>

				<p class="more"><a href="list.html">More>>></a></p>
			</div>
		</div>
		<!-- content right end -->
	</div>	
	<!-- content end -->
	
	<!-- floor -->
	<div class="banner shadow two-nav">
		<span class="floor">F3</span> - 网页欣赏
	</div>
	<!-- floor end -->
	<!-- content -->
	<div class="content clear">
		<!-- photo  -->
		<div class="photo">
			
			<div class="photo-list shadow">
				<img src="images/01.jpg">
			</div>
			<div class="photo-list shadow">
				<img src="images/01.jpg">
			</div>
			<div class="photo-list shadow">
				<img src="images/01.jpg">
			</div>
			<div class="photo-list shadow">
				<img src="images/01.jpg">
			</div>

		</div>
		<!-- photo  end -->
	</div>	
	<!-- content end -->
<?php include 'public/footer.php';?>