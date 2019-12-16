<?php

require_once('../common.php');
// idの最大値を取得（=問題数）
$data = getDB1('select max(id) as maxid from question');



// 出題する問題を決定

$i = rand(1, $data['maxid']);



// 問題文を取得

$data = getDB1('select question from question where id=?', [$i]);
// 最終的に返却する値

$param = [

	'text' => $data['question'],

	'qed'  => $i

];
echo json_encode($param);