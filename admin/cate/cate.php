<?php
	
	include $_SERVER['DOCUMENT_ROOT'].'/func.php';
	

	if(isset($_POST['action']) && $_POST['action'] == 'add'){
		$post = check($_POST);

		$sql = 'INSERT INTO cate(pid , cate_name , is_show , ord) VALUES ('.$post['pid'].' , "'.$post['cate_name'].'" , '.$post['is_show'].' , '.$post['ord'].')';

		$query = DB($sql);

		if($query)
		{
			$mess='添加成功可以继续添加!';
		}else{
			$mess='添加失败!请重新添加!';
		}
		redirect('cateAdd.php?mess='.$mess);
	}
	elseif(isset($_POST['action']) && $_POST['action'] == 'mod')
	{
		$post = check($_POST);

		//查询出当前所修改栏目的所有子栏目的cid
		
		$ids = getChildIds($post['cid']);
		// 校验传过来的父ID,是否在自己子栏目ID中,如果在直接跳转并提示错误信息
		if(in_array($post['pid'] , $ids))
		{
			redirect('cateMod.php?cid='.$post['cid'].'&mess=父栏目不能移动到子栏目当中去');
		}
		
		$sql = 'UPDATE cate SET pid = '.$post['pid'].' , cate_name = "'.$post['cate_name'].'" , ord = '.$post['ord'] . ', is_show = '.$post['is_show'] . ' WHERE cid = '.$post['cid'];

		$query = DB($sql);

		if($query)
		{
			redirect('cateList.php?mess=修改成功!');
		}else{
			redirect('cateMod.php?cid='.$post['cid'].'&mess=修改失败!请重新修改!');
		}
		
	}
?>