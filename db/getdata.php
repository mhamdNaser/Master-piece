<?php
require_once("./config.php");

    $getUsers = $connect_db->prepare('SELECT * FROM users ORDER BY id ASC');
    $getUsers->execute();
    $users = $getUsers->fetchAll();

    // Then in your presentation logic you can use the following code to display the data:
    if ($users) {
        foreach ($users as $user) {
            echo $user['username']."<br/>";
        }
    } else {
        // Whatever your requirement is to handle the no user case, do it here.
        echo 'Error: No users.';
    }
