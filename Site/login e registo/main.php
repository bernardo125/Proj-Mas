<?php
session_start();

function get_session_data(){
    if(array_key_exists('user', $_SESSION)){
        print $_SESSION["user"];
    }
    session_destroy();
}

get_session_data();
?>