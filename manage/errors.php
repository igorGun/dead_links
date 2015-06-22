<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');
need_manager();
$condition = array();
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
include template('manage_dead_links');