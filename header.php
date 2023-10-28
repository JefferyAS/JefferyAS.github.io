<?php $linkPath = "";
if (!(empty($mainPath) || $mainPath == "")) {
    $linkPath = $mainPath . "index.php";
} ?>
<header class=" <?php echo $header_color ?>">
    <div class="header_left">
        <a href="<?php echo($mainPath)?>index.php">
            X.Y.C
        </a>
    </div>
    <div class="header_right">
        <nav>
            <ul>
                <li class="selected">
                    <a href=<?php echo ($linkPath) ?>#section_indie_games>
                        Indie Games
                    </a>
                </li>
                <li>
                    <a href=<?php echo ($linkPath) ?>#section_practices>
                        Practices
                    </a>
                </li>
                <li>
                    <a href=<?php echo ($linkPath) ?>#other_projects>
                        Other Works
                    </a>
                </li>
                <li>
                    <a href=<?php echo ($linkPath) ?>#Resume>
                        Resume
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</header>