
<select name="artist">

<?php
include 'include/connect.php';
$selected = '';
$artist = $con->query('select * from artist');
                    foreach($artist as $artists) {
                        $id = $artists['ID'];
                        $text = $artists['name'];
                        
                        $selected == $id ?'selected' : '';
                        echo "<option value=\"$id\" $selected>  $text</option>";
                    }   

?>

</select>

