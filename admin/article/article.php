<?php
	
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	if(isset($_POST['action']) && $_POST['action'] == 'add'){
		$post = check($_POST);

		$update_time = $pass_time = time();

		$sql = "INSERT INTO article(cid , title , content , author  ,clicks , is_show , ord , update_time , pass_time,top ,good) VALUES (".$post['pid']." ,'".$post['title']."' ,'".$post['content']."' ,'".$post['author']."' ,".$post['clicks']."  , ".$post['is_show']." , ".$post['ord']." , ".$update_time." ,".$pass_time." , ".$post['top'].", ".$post['good'].")";

		$query = DB($sql);
		if($query)
		{
			$insert_id = mysql_insert_id();

			if(isset($post['tids']))
			{
				foreach($post['tids'] as $tid)
				{
					DB('INSERT INTO tags_article(tid , aid) VALUES('.$tid.' , '.$insert_id.')');
				}
			}

			$mess='添加成功可以继续添加!';
		}else{
			$mess='添加失败!请重新添加!';
		}
		redirect('articleAdd.php?mess='.$mess);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'mod')
	{
		$post = check($_POST);

		$sql = "UPDATE article SET cid = ".$post['pid']." , title = '".$post['title']."' , content = '".$post['content'] . "', author = '".$post['author'] . "', clicks = ".$post['clicks'] . ", is_show = ".$post['is_show'] . ", ord = ".$post['ord'] . ", top = ".$post['top'].", good = ".$post['good']." , update_time = ".time(). " WHERE aid = ".$post['aid'];

		$query = DB($sql);
		if($query)
		{
			$del = DB('DELETE FROM tags_article WHERE aid = '.$post['aid']);
			if($del)
			{
				if(isset($post['tids']))
				{
					foreach($post['tids'] as $tid)
					{
						DB('INSERT INTO tags_article(tid , aid) VALUES('.$tid.' , '.$post['aid'].')');
					}
				}
			}
			redirect('articleList.php?mess=修改成功!');
		}else{
			redirect('articleMod.php?aid='.$post['aid'].'&mess=修改失败!请重新修改!');
		}
		
	}
?>