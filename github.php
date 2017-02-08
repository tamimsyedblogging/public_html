<?php
date_default_timezone_set('US/Eastern');
shell_exec('git pull');
echo date('l jS \of F Y h:i:s A');
echo '<p>Code updated at from Git repo.Try to refresh the site and clear your Browser cache.</p>';
?>