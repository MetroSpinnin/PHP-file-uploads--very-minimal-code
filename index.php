<?php

/*
* Require the class created in the
* metro_upload_class.php
*/

require_once("metro_upload_class.php");

/*
* This code serves the html form which
* would be triggered to certainly use 
* the function created in the metro_
* upload_class.php to aid uploads
*/

echo "<form name = 'frm_add_picture' method = 'post'>";
echo "<input type = 'file' name = 'myPicture'>";
echo "</form>";

?>
