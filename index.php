<?php
$name = "O'Neil";
// 错误！没有ENT_QUOTES，单引号不会转义
$bad = htmlspecialchars($name, ENT_COMPAT, 'UTF-8');
 echo $bad;
