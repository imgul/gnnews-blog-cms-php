<?php
// User Privileges
$user_id = $_SESSION['user_id'];
$query_user_privileges = "SELECT `users`.`role` FROM `users` WHERE `users`.`id` = '$user_id'";
$result_user_privileges = mysqli_query($conn, $query_user_privileges);

if (mysqli_num_rows($result_user_privileges) > 0) {
    $row_user_privileges = mysqli_fetch_assoc($result_user_privileges);
    $user_role = $row_user_privileges['role'];
} else {
    $user_role = 'subscriber';
}
