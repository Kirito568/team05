<?php
require_once('../common.php');
$answer =isset($_GET['answer'])? $_GET['answer']:null;
$qed = isset($_GET['qed'])? $_GET['qed']:null;

$data = getDB1('select answer from question where id=?',[$qed]);
$param = [
    'result'=>( $data['answer'] == $answer )
];

echo json_encode($param);
