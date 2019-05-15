<?php
//最初に変数を定義する
$err_msg1="";
$err_msg2="";
$message ="";
$name    =(isset($_POST["name"]) === true)?$_POST["name"]: "";
$comment =(isset($_POST["comment"]) === true)? trim($_POST["comment"]) : "";

//投稿がある場合、下記の処理を行う
if(isset($_POST["send"]) === true){
    if($name === "") $err_msg1="名前を入力して下さい";
    if($comment === "") $err_msg2="コメントを入力して下さい";

    if($err_msg1 === "" && $err_msg2 === ""){
        $fp=fopen("data.txt" , "a");
        fwrite($fp,$name."\t".$comment."\n");
        $message="書き込みに成功しました";
    }
}