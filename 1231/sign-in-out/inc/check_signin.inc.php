<?php 
if(empty($_POST['sno'])){
	skip('../sign-in.php', 'error', 'ѧ�Ų���Ϊ�գ�');
}
if(mb_strlen($_POST['sno'])>10){
	skip('../sign-in.php', 'error', 'ѧ�ų��Ȳ�Ҫ����10�����֣�');
}
if(empty($_POST['pw'])){
	skip('../sign-in.php', 'error', '���벻��Ϊ�գ�');
}
// if(strtolower($_POST['vcode'])!=strtolower($_SESSION['vcode'])){
// 	skip('login.php', 'error','��֤���������');
// }
if(empty($_POST['time']) || is_numeric($_POST['time']) || $_POST['time']>2592000){
	$_POST['time']=2592000;
}
?>