<?php
echo substr(sprintf('%o',fileperms('/etc/passwd')),-4);
?>
