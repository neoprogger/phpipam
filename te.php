<?php
 if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
                        echo("true");
                }
                if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
                        echo("true");
                }
                if (!empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
                        echo("true");
                }

echo("end");

?>
