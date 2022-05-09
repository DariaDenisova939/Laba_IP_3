<?php include_once "../temppl/header.php"?>
<h1 align="center"><br><br>Editing Users</h1>
    <?php
    $query = "SELECT * FROM `users` WHERE id=".$_GET['id'];
    $res = DB::query($query);
    if(($item = DB::fetch_array($res)) != false) {
        ?>
        <div class="block_page_one" align="center">
            <div>
                <form action="/admin/update_user.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$item['id']?>">
                    <table>
                        <tr>
                            <td>Your login</td>
                            <td>
                                <input type="text" name="user_name" value="<?=$item['login']?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Your full name</td>
                            <td>
                                <input type="text" name="user_fio" value="<?= $item['fio'] ?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" name="user_pass1"/>
                            </td>
                        </tr>
                        <tr>
                            <td>Password again</td>
                            <td>
                                <input type="password" name="user_pass2"/>
                            </td>
                        </tr>
                        <tr>
                            <td>User's avatar</td>
                            <td>
                                <input value="file" type="file" name="user_avatar"/>
                            </td>
                        </tr>
                    </table>
                    <input id="sign_up" type="submit" value="Change">
                </form>
            </div>
        </div>
        <?php
    }
    ?>
