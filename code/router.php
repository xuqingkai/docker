<?php
// router.php
if (preg_match('/\.(?:html|css|js|png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"]))
    return false;    // 直接返回请求的文件
else { 
    echo "<p>Welcome to Docker.PHPCli</p>";
}
?>
