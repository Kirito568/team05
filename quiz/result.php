<?php

require_once('common.php');



// 引数（クエリー）を受け取る

$qed    = isset($_GET['qed'])? $_GET['qed']:-1; 

$answer = $_GET['answer'];



// idの最大値を取得（=問題数）

$data = getDB1('select max(id) as maxid from question');
// Validation

if($qed == -1 || !is_numeric($qed) || !((1<=$qed) && ($qed<=$data['maxid'])) ){

	echo 'error: $qed invalid';

	exit(1);

}



// 回答を取得

$data = getDB1('select answer from question where id=?', [$qed]);



// 正解か判定

if( $data['answer'] == $answer ){

	echo "正解！";

}

else{

	echo "残念！";

}