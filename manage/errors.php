<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');
need_manager();
$condition = array(
	'check'=>'0');


$count = Table::Count('dead_links', $condition);
list($pagesize, $offset, $pagestring) = pagestring($count, 20);
$arrLinks = DB::LimitQuery('dead_links', array(
	'condition' => $condition,
	'order' => 'ORDER BY id ASC',
	'size' => $pagesize,
	'offset' => $offset,
));

/*$res = DB::Query("SELECT `id`,`dead_link`,`dead_way` FROM `dead_links`");
    while($row = mysql_fetch_assoc($res)){
        $arrLinks[]=$row;
    }*/
//print_r($arrLinks);
    if (isset($_GET["check"])) {
    	foreach ($_GET["check"] as $id => $val) {
    		DB::Query("UPDATE `dead_links` SET `check`='".intval($val)."' WHERE `id`='".$id."'");
    	}
    	Utility::Redirect( WEB_ROOT . '/manage/errors.php');
    }
    
include template('manage_dead_links');
