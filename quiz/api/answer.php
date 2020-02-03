<?php
require_once('../common.php');

$id = $_GET['id'];
$answer=$_GET['answer'];
$qed= $_GET['qed'];

if( $id == 'quiz01' ){
	$data = getDB1('select answer from Normal where id=?', [$qed]);
}
else if ( $id == 'quiz02' ){
	$data = getDB1('select answer from Math where id=?', [$qed]);
}
else if ( $id == 'quiz03' ){
$data = getDB1('select answer from Otaku where id=?',[$qed]);
}
else if ( $id == 'quiz04'){
$data = getDB1('select answer from Disney where id=?', [$qed]);
}

/*$answer =isset($_GET['answer'])? $_GET['answer']:null;
$qed = isset($_GET['qed'])? $_GET['qed']:null;*/
//$data = getDB1('select answer from Normal where id=?',[$qed]);
$param = [
    'result'=>( $data['answer'] == $answer )
];

echo json_encode($param);
