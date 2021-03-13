<?php
    $henshu = 5;

    //変数の定義
    $correct_user_name = "funcys";
    $correct_password = "1234";

    //ここで、DBにユーザー名とパスワードが登録されているか、確認する処理を行う



    $input_user_name = $_POST['user_name'];
    $input_password = $_POST['password'];

    if(($input_user_name === $correct_user_name) and ($input_password === $correct_password)){
        //print("ログイン成功しました");
        header("Location:./loginSuccess.html");
    }else{
        //print("ログイン失敗しました");
        header("Location:./loginError.html");
    }
?>