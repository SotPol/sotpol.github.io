<?php
    $private_key = "6Lf1wf0qAAAAAF8wDo2TcmJeqRc1TSO2NZuDk_9A";
    $url = "https://www.google.com/recaptcha/api/siteverify";
    if(isset($_POST['g-recaptcha-response'])){
        $response_key = $_POST['g-recaptcha-response'];
        $response = file_get_contents($url.'?secret='.$private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
        $response = json_decode($response);
        if($response->success == 1)
        {
            echo "Your information was valid...";
        }else{
            echo "You are a robot and we don't like robots.";
        }
    }
?>