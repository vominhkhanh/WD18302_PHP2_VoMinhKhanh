<?php
if(isset($user) && $user !== null) {
    echo $user['firstname']." ".$user['lastname'];
} else {
    echo "Người dùng không tồn tại";
}
?>
<form method="POST">

<input type="email" name="email" />
<input type="submit">
</form>