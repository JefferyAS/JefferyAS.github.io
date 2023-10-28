<article class="cover_article" onmouseover="hover_roll(this);" onmouseout="unhover_roll(this);">
    <div class="cover_left"><a href="Indie_game_contents\Rolling_Racers\Rolling_Racers_Content.php"><img class="cover_img" src="Indie_game_contents\Rolling_Racers\Images\Rolling_Racers_screenshot_1.jpg"></a></div>
    <div class="cover_right">
        <h2>Rolling Racers</h2>
        <p>Racing & Action Game</p>
        <p>July 2022</p>
        <p>Overall #8 at GMTK2022 Game Jam</p>
        <p>Position: System Designer, Programmer</p>
        <?php $path = "Indie_game_contents\Rolling_Racers\Rolling_Racers_Content.php";
        include("view_more.php"); ?>
        <?php $path = "https://stevopineapple.itch.io/rolling-racers";
        include("download_itch.php") ?>
    </div>
    <script>
        function hover_roll(element) {
            element = element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Rolling_Racers/Images/Rolling_Racers_Overall.gif');
        }

        function unhover_roll(element) {
            element = element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Rolling_Racers/Images/Rolling_Racers_screenshot_1.jpg');
        }
    </script>
</article>