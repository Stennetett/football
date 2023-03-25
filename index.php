<?php

require 'start.php';


ini_set('display_errors', 0);

$id = $_GET['s'];
if($_GET['sida']==null){
	require 'start_reg/pagecontent_start.php';
}
if($_GET['sida']==1){
	require 'profile/profile.php';
}
elseif($_GET['sida']==2){
	require 'weight/weight.php';
}
elseif($_GET['sida']==3){
	require 'testim_stuff/getData.php';
}
elseif($_GET['sida']==4){
	require 'pagecontent_4.php';
}
elseif($_GET['sida']==5){
	require 'pagecontent_5.php';
}
//kollar om sidan har samma id som sidan. 
elseif($_GET['s']==$id){
	require 'pagecontent_6.php';
}


else{
	require 'start_reg/pagecontent_start.php';
}


require 'end.php';

?>
