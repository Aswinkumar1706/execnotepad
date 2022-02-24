<?php
function php_func(){
    //shell_exec('start Notepad');
	$WshShell = new COM("WScript.Shell");
$oExec = $WshShell->Run("notepad.exe", 7, false);
}
php_func();
?>


