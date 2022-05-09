<?php include_once "../temppl/header.php"?>
<h1 align="center"><br><br>List of users</h1>
<table class="list" align="center">
    <tr>
        <td>id</td>
        <td>Login</td>
        <td>Full name</td>
        <td>Type user</td>
        <td>Image</td>
        <td>File</td>
        <td>Editing</td>
    </tr>
    <?php
        $query = "SELECT * FROM `users`";
        $res = DB::query($query);
        while(($item = DB::fetch_array($res)) != false) {
            ?>
            <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['login']?></td>
                <td><?=$item['fio']?></td>
                <td><?=$item['user_type']?></td>
                <td> <img src = "<?=$item['avatar_name']?>" class="user_avatar" alt="avatar"></td>
                <td><?=$item['avatar_name']?></td>
                <td>
                    <a href="/admin/edit_user.php? id=<?=$item['id']?>">
                        <img class="icon" src="/images/edit.png" title="Edit">
                    </a>
                    <a href="/admin/delete_user.php? id=<?=$item['id']?>">
                        <img class="icon" src="/images/delete.png" title="Delete">
                    </a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>
