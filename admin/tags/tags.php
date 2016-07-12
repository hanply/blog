<?php
	
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	if(isset($_POST['action']) && $_POST['action'] == 'add'){
		$post = check($_POST);
		$sql = 'INSERT INTO tags(clicks , tag_name , is_show , ord) VALUES ('.$post['clicks'].' , "'.$post['tag_name'].'" , '.$post['is_show'].' , '.$post['ord'].')';
		$query = DB($sql);

		if($query)
		{
			$mess='添加成功可以继续添加!';
		}else{
			$mess='添加失败!请重新添加!';
		}
		redirect('tagsAdd.php?mess='.$mess);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'mod')
	{
		$post = check($_POST);

		$sql = 'UPDATE tags SET pid = '.$post['pid'].' , tags_name = "'.$post['tags_name'].'" , ord = '.$post['ord'] . ', is_show = '.$post['is_show'] . ' WHERE cid = '.$post['cid'];

		$query = DB($sql);

		if($query)
		{
			redirect('tagsList.php?mess=修改成功!');
		}else{
			redirect('tagsMod.php?cid='.$post['cid'].'mess=修改失败!请重新修改!');
		}
		
	}
?>