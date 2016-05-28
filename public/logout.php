<?php
require_once '../utils/Auth.php';

    // clear $_SESSION array
    session_unset();

    // session_destroy();

    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);



    // Auth::logout();
    

    header("Location: /");
    exit;
    // var_dump(Auth::logout());

?>