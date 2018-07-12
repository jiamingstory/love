<?php 
header('content-type:text/html;charset=utf-8');
function alertMsg($msg,$url){
	exit("<script type='text/javascript'>
		alert('{$msg}');
		location.href='{$url}';
		</script>");
}

$username=trim($_POST['username']);
$password=trim($_POST['password']);
if($username==='吉海燕' && $password==='1218'){
	header('location:love.php?username='.$username);
}elseif($username==='谭雪莲' && $password==='0327'){
	header('location:love.php?username='.$username);
}elseif($username==='黄莉' && $password==='1007'){
	header('location:love.php?username='.$username);
}elseif($username==='张兰' && $password==='0718'){
	header('location:love.php?username='.$username);
}else{	
	alertMsg('输入信息错误，请重新输入','index.html');
}

 ?>