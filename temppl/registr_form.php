
            <div align="center" class="block_page_one">
                <a>     <br> <br></a>
                <h1> Registration </h1>
                    <form action="/core/user.php" method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Your login</td>
                                <td>
                                    <input type="text" name="user_name" value="<?= $login ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Your full name</td>
                                <td>
                                    <input type="text" name="user_fio" value="<?= $fio ?>"/>
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
                                    <input id="getFile" type="file" name="user_avatar"/>
                                </td>
                            </tr>
                        </table>
                        <input id="sign_up" type="submit" value="Sign up">
                    </form>
            </div>
            <?php
