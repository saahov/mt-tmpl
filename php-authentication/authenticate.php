<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "<mt:AdminCGIPath/><mt:CommentScript/>?__mode=session_js&blog_id=<mt:BlogID/>&jsonp=mtSetUserOrLogin");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIE, $_SERVER["HTTP_COOKIE"]);
    $json = curl_exec($ch) or die("Cannot connect to MT!");
    curl_close($ch);
    $json = substr($json, 17, strlen($json)-20);
    $session = json_decode($json, true);
    
    if ($session['is_authenticated'] == 0) {
        header("Location: <mt:AdminCGIPath/><mt:CommentScript/>?__mode=login&blog_id=<mt:BlogID/>&return_url=".rawurlencode($_SERVER["REQUEST_URI"]));
    }
?>
