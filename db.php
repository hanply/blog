<?php
	include 'config.php';

	@mysql_connect(HOST , MYSQL_USER , MYSQL_PASSWORD) or die('数据库连接失败!错误码:'.mysql_errno().'错误信息:'.mysql_error());
	mysql_set_charset('utf8');
	mysql_select_db(DATABASE);

	function DB($sql = '')
	{
		$res = mysql_query($sql);
		$rows = array();
		if(strstr($sql , 'select') || strstr($sql , 'SELECT'))
		{
			if($res && mysql_num_rows($res) > 0)
			{
				while ($row = mysql_fetch_assoc($res))
				{
					$rows[] = $row;
				}
			}
		}else{
			return $res ? mysql_affected_rows() : false;
		}
		return $rows;
	}

	