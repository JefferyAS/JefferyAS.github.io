<article class="cover_article" onmouseover="hover_flo(this);" onmouseout="unhover_flo(this);">
    <div class="cover_left"><a href="Indie_game_contents\Florescence\Florescence_Content.php"><img class="cover_img" src="Indie_game_contents\Florescence\Images\Florescence_Screenshot_1.png"></a></div>
    <div class="cover_right">
        <h2>Florescence</h2>
        <p>Experimental Adventure & Strategic Game</p>
        <p>January 2023 - May 2023</p>
        <p>Thesis Project at Parsons School of Design</p>
        <p>Position: System Designer, Programmer, UI Designer, Tech Artist</p>
        <?php $path = "Indie_game_contents\Florescence\Florescence_Content.php";
        include("view_more.php"); ?>
        <?php $path = "https://jefferyxue.itch.io/florescence";
        include("download_itch.php") ?>
    </div>
    <script>
        function hover_flo(element) {
            element=element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Florescence/Images/Florescence_mapping_1.gif');
        }

        function unhover_flo(element) {
            element=element.getElementsByClassName('cover_img')[0];
            element.setAttribute('src', 'Indie_game_contents/Florescence/Images/Florescence_Screenshot_1.png');
        }
    </script>
</article>