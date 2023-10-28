<article class="cover_article" onmouseover="hover_melon(this);" onmouseout="unhover_melon(this);">
    <div class="cover_left"><a href="Indie_game_contents\Melon_Smasher\Melon_Smasher_Content.php"><img class="cover_img" src="Indie_game_contents\Melon_Smasher\Images\Melon_Smasher_Screenshot_1.jpg"></a></div>
    <div class="cover_right">
        <h2>Melon Smasher</h2>
        <p>One-button Action Game</p>
        <p>Oct 2021 - June 2022</p>
        <p>Individual Project</p>
        <?php $path = "Indie_game_contents\Melon_Smasher\Melon_Smasher_Content.php";
        include("view_more.php"); ?>
        <?php $path = "https://jefferyxue.itch.io/melon-smasher-v130-beta";
        include("download_itch.php") ?>
    </div>
    <script>
        function hover_melon(element) {
            element = element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Melon_Smasher/Images/Melon_Smasher_Overall.gif');
        }

        function unhover_melon(element) {
            element = element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Melon_Smasher/Images/Melon_Smasher_Screenshot_1.jpg');
        }
    </script>
</article>