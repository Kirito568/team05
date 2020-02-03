<?php

require_once('../common.php');

$id = $_GET['id'];

if( $id == 'quiz01' ){
	$data = getDB1('select max(id) as maxid from Normal');
	$i = rand(1, $data['maxid']);
	$data = getDB1('select question from Normal where id=?', [$i]);
}
else if ( $id == 'quiz02' ){
$data = getDB1('select max(id) as maxid from Math');
$i = rand(1, $data['maxid']);
$data = getDB1('select question from Math where id=?', [$i]);
}
else if ( $id == 'quiz03' ){
$data = getDB1('select max(id) as maxid from Otaku');
$i = rand(1, $data['maxid']);
$data = getDB1('select question from Otaku where id=?', [$i]);
}
else if ( $id == 'quiz04'){
$data = getDB1('select max(id) as maxid from Disney');
$i = rand(1, $data['maxid']);
$data = getDB1('select question from Disney where id=?', [$i]);
}


// idの最大値を取得（=問題数）
/*
$data = getDB1('select max(id) as maxid from Normal');
$data = getDB2('select max(id) as maxid from Math');
$data = getDB3('select max(id) as maxid from Otaku');
$data = getDB4('select max(id) as maxid from Disney');


// 出題する問題を決定

$i = rand(1, $data['maxid']);



// 問題文を取得

$data = getDB1('select question from Normal where id=?', [$i]);
$data = getDB2('select question from Math where id=?', [$i]);
$data = getDB3('select question from Otaku where id=?', [$i]);
$data = getDB4('select question from Disney where id=?', [$i]);
// 最終的に返却する値
*/

$param = [

	'text' => $data['question'],

	'qed'  => $i

];
echo json_encode($param);
