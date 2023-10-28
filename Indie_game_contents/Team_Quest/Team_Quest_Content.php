<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Team Quest</title>
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
<?php $mainPath = "../../" ?>

<body>
    <div id="team_quest_page_background">
        <?php
        $project_title = "Team Quest";
        include($mainPath . "project_title_holder.php");
        ?>
    </div>
    <main class="project_page">
        <section class="content_overview">
            <article class="project_content_container">
                <div class="left_box">
                    <p class="overview_text">A metroidvania platformer that you can collect characters with different abilities and control them as a team. Each character in this game has a unique ability, including shielding, shooting, or inverting gravity. After finding a character, the player can use its ability to explore more areas of the map.</p>
                    <iframe src="https://www.youtube.com/embed/XBwA3pxAo2g" title="Team Quest Gameplay Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="right_box">
                    <div class="image_slide_box" id="image_slides_florescence_1">
                        <div class="image_slides">
                            <img src="Images\Team_Quest_Screenshot_1.png">
                            <img src="Images\Team_Quest_Screenshot_2.jpg">
                            <!-- <img src="Images\Florescence_Screenshot_3.jpg"> -->
                            <!-- <img src="Images\Florescence_Screenshot_4.jpg"> -->
                            <!-- <img src="Images\Florescence_Screenshot_5.png"> -->
                        </div>
                        <div class="slide_buttons">
                            <button class="slide_button" onclick="toDivs(1)"></button>
                            <button class="slide_button" onclick="toDivs(2)"></button>
                            <!-- <button class="slide_button" onclick="toDivs(3)"></button> -->
                            <!-- <button class="slide_button" onclick="toDivs(4)"></button> -->
                            <!-- <button class="slide_button" onclick="toDivs(5)"></button> -->
                        </div>
                        <?php $slideID = "image_slides_florescence_1";
                        include("../../image_slide_script.php"); ?>
                    </div>
                    <div class="description_container">
                        <p>Metroidvania Platformer</p>
                        <p>Sep 2021 - Jan 2022</p>
                        <p>Individual Project</p>
                    </div>
                </div>
            </article>
        </section>
        <!-- <section class="text_article">
            <h1>Postmortem</h1>
        </section> -->
    </main>
</body>

</html>