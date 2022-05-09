<?php include_once "temppl/header.php"?>
<div align="center" class="registr">
    <a><br><br></a>
        <?php
            if(isset($error) && !empty($error))
            {
                ?>
                <div class="error">
                    <div>
                        <?=$error?>
                    </div>
                </div>

        <?php }

            ?>
    <?php include_once "temppl/registr_form.php" ?>
</div>
