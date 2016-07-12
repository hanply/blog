<script type="text/javascript">
	$(function(){
		$('.cate-list li:even').css({background:'#fff'});
		$('.cate-list li:odd').css({background:'#ddd'});


		//标签选择
		$('input[name=but]').on('click' , function(){
			var sval = $('select[name=tags] option:selected').val();
			var stext = $('select[name=tags] option:selected').text();
				
			var html = '<div class="tag-list">'+stext+' <input type="hidden" name="tids[]" value='+sval+'><span>X</span></div>';
			var i = 0;

			$('#tags input').each(function(){
				if($(this).val() == sval)
				{
					i++;
					return false;
				}
			});

			if(i == 0)
			{
				$('.clear').before(html);
			}else{
				alert('当前标签已经被选中!');
			}
		});

		$('#tags').on( 'click' , 'span' ,function(){
			$(this).parent().remove();
		});

	});




</script>
</body>
</html>