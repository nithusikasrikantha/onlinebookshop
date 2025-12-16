<?php

require_once './connect.php';
require_once './comments.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit</title>
</head>
<body>
<?php  
$cid = $_POST['cid'];
$uid = $_POST['uid'];
$date = $_POST['date'];
$message = $_POST['message'];

echo  "<form method='POST'  action='".editComments($conn)."'>
        <input type='hidden' name='cid' value='". $cid."'>
        <input type='hidden' name='uid' value='". $uid."'>
        <input type='hidden' name='date' value='". $date."'>
        <textarea name='message'>". $message."</textarea><br>
        <button type='submit' name='commentSubmit'>Edit</button>
</form>";
?>
    </body>
 </html>