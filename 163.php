<?php
/*
网易加密函数
140901 完成python到php的代码
*/
function encrypted_id($id)
{
    $byte1 = '3go8&$8*3*3h0k(2)2';
	for($i=0;$i<strlen($id);$i++)
	{
		$byte2[$i] = $id[$i];
	}
	$byte1_len = strlen($byte1);
	for($i=0;$i<strlen($id);$i++)
	{
		$byte2[$i] = $byte2[$i] ^ $byte1[$i % $byte1_len];
	}
$id_ = implode('',$byte2);
$id_ = md5($id_,1);
$m = base64_encode($id_);
$m = str_replace(array('/','+'),array('_','-'),$m);
return $m;
}
?>