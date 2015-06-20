<?php
require_once(dirname(dirname(__FILE__)) . '/app.php');


$res = DB::Query("SELECT `id`,`dead_link`,`dead_way` FROM `dead_links`");
    while($row = mysql_fetch_assoc($res)){
        $arrLinks[]=$row;
    }
//print_r($arrLinks);
include template('manage_dead_links');