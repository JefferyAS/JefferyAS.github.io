<!DOCTYPE html>
<html lang="en">
<?php $mainPath = "../../" ?>
<head>
    <meta charset="utf-8">
    <title>Melon Smasher</title>
    <!-- Sets viewport to the device screen size -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--Link an external style sheet-->
    <link href="../../css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent Marker" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Balsamiq Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>

    </style>
</head>
<body>
    <div id="melon_smasher_page_background">
        <?php
        $project_title = "Melon Smasher";
        include($mainPath . "project_title_holder.php");
        ?>
    </div>
    <main class="project_page">
        <section class="content_overview">
            <article class="project_content_container">
                <div class="left_box">
                    <p class="overview_text">A one-button action game with the simplest action but deep and playful content. The player controls a smasher by pressing any buttons to smash the melons passing by on a belt and avoid square-shaped kitties. This game has a combo system to reward player for continuously smashing melons and hitting multiple melons in one smash. The game speed also goes faster when the player reaches higher combos.</p>
                    <iframe src="https://www.youtube.com/embed/9_ZKeMZg1X8" title="Melon Smasher Gameplay Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="right_box">
                    <div class="image_slide_box" id="image_slides_florescence_1">
                        <div class="image_slides">
                            <img src="Images/Melon_Smasher_Screenshot_1.jpg">
                            <img src="Images/Melon_Smasher_Screenshot_2.jpg">
                            <img src="Images/Melon_Smasher_Screenshot_3.jpg">
                            <img src="Images/Melon_Smasher_Screenshot_4.jpg">
                            <!-- <img src="Images\Florescence_Screenshot_5.png"> -->
                        </div>
                        <div class="slide_buttons">
                            <button class="slide_button" onclick="toDivs(1)"></button>
                            <button class="slide_button" onclick="toDivs(2)"></button>
                            <button class="slide_button" onclick="toDivs(3)"></button>
                            <button class="slide_button" onclick="toDivs(4)"></button>
                            <!-- <button class="slide_button" onclick="toDivs(5)"></button> -->
                        </div>
                        <?php $slideID = "image_slides_florescence_1";
                        include($mainPath . "image_slide_script.php"); ?>
                    </div>
                    <div class="description_container">
                        <p>One-button Action Game</p>
                        <p>Oct 2021 - June 2022</p>
                        <p>Individual Project</p>
                    </div>
                </div>
            </article>
        </section>
        <!-- <section>
            <h1>Game Feel</h1>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Sonar Interaction</h2>
                        <p>In the game, player can emit sound waves of different pitches. The sound waves bounce between obstacles, and player can use them to explore roads in the fog. Meanwhile, player can interact with creatures in the game using sound waves, and they will respond differently based on the pitch of the sound wave. The creatures in the game also emit sound waves, and all the environmental sounds are calculated based on the pitch and propagation time of the waves.</p>
                    </div>
                    <div class="right"><img src="Images\Florescence_sonar_wave_2.gif"></div>
                </div>
                <div class="content_container three">
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_sonar_wave_3.gif"></div>
                        <p>Player can shoot sound waves with different pitch by holding mouse button for different duration.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_sonar_wave_5.gif"></div>
                        <p>Sonar helps the player to navigate through pollen fog or find covered path.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_sonar_wave_4.gif"></div>
                        <p>Creatures react differently based on the pitch of the sound waves. The nepenthes-like plant inhales pollen when it hears a mid-pitch sound but exhale it when it detects high-pitch sound.</p>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <h1>System Design</h1>
        </section> -->
        <section class="text_article">
            <h1>Postmortem</h1>
            <p>This project begins as an individual one-week class project. I experimented with juice and particles to improve the game feel of the prototype. The result was really attractive, so I decided to keep developing it. During the development process, I practiced my skills on Unity, experimented with Unity features that I haven’t used such as 2d light in URP, and built this game from my rough thoughts to real ones. I designed and experimented with a lot of features that could deepen the possibility of this game. For example, I added a feature that the player can hit the area ahead of a melon to knock it up to make a multi-smash. I also spent a lot of time polishing the control and game feel. I also created most of the assets (except audio and BGM) in this game. Creating visual arts is not my strength, but I think that it’s important for a game to have coherent visuals, and game design, and creating assets by myself is the best way to achieve it. Moreover, I learned the importance of finding playtesters to play the game, because I played it too much and cannot judge the difficulty by myself. All in all, developing this game was a delightful process, so hope you enjoy it.</p>
        </section>
    </main>
</body>

</html>