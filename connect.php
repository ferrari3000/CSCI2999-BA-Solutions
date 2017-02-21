<!-- Connects to the database  -->

<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con = new mysqli('localhost', 'root', '', 'recordstore');

?>