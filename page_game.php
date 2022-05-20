<?php include_once "temppl/header.php"?>
<br><br><br><br>
<div align="center">
    <a>You must write the words that you remember. Words will appear if you click on the "Show words" button. Then the words will disappear after a few seconds. Write the words that you remember and click the "Show memorization percentage" button. Observe grammar and enter words with a space, without using extra characters. Example: "friends ball sun". If you want to try again, click on the "Try Again" button. Good luck!</a>
</div>
<br>
<div align="center">
    <div>
        <input class="button_for_game1" type="button" onclick="calculation_l5();" name="nubex" value="Show words" />
    </div>
    <div id="outresult_lab5"></div>
    <script>
        setTimeout(function(){
            document.getElementById('outresult_lab5').style.display = 'none';
        }, 10000);
    </script>
    <br>
    <a> Enter the words you remember in this field </a>
    <input type="text" id="mass_words">
    <br> <input class="button_for_game2" type="button" value="Show memorization percentage" onclick="user_percent();">
    <br>
    <div id="outresult_lab5_1"></div>
    <button class="button_for_game1" onclick="window.location.href = '/page_game.php';">Try again</button>
</div>
