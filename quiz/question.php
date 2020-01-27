<?php
require_once('common.php');
$data = getDB1('select max(id) as maxid from question');

$i = rand(1,$data['maxid']);
//問題の取得
$data = getDB1('select question from question where id=?',[$i]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>QuizGame Question</title>
</head>
<body>
    <h1>Question</h1>
    <?= $data['question'] ?>

    <form action="result.php">
        <input type="hidden" name="qed" value="<?= $i ?>">
        <input type="text" id="text-answer" name="answer">
        <button id="btn-answer">answer</button>
    </form>

<script>
document.querySelector("#btn-answer").addEventListener("click",(e)=>{
    /*alert("Button has pushed!");*/   
    let answer = document.querySelector("#text-answer");
    
    if(answer.value == ""){
        alert("please input here.");
        answer.focus();
        answer.style.backgroundColor="Pink";
        e.preventDefault(); 
    }else{
    document.querySelector("#btn-answer").innerHTML="sending...";
    }
});
</script>
</body>
</html>