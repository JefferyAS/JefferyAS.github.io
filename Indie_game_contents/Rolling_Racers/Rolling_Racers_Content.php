<!DOCTYPE html>
<html lang="en">
<?php $mainPath = "../../" ?>
<head>
    <meta charset="utf-8">
    <title>Rolling Racers</title>
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
    <div id="rolling_racers_page_background">
        <?php
        $project_title = "Rolling Racers";
        include($mainPath . "project_title_holder.php");
        ?>
    </div>
    <main class="project_page">
        <section class="content_overview">
            <article class="project_content_container">
                <div class="left_box">
                    <p class="overview_text">Rolling Racers is a creative racing game about dice rolling and competing on the raceway. The original version is made in 48 hours for GMTK 2022. Rewarded #8 Overall & #6 Creative Rating.</p>
                    <iframe src="https://www.youtube.com/embed/Oxy5NqU0xvY" title="Rolling Racers Gameplay Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="right_box">
                    <div class="image_slide_box" id="image_slides_rolling_racers_1">
                        <div class="image_slides">
                            <img src="Images\Rolling_Racers_screenshot_1.jpg">
                            <img src="Images/Rolling_Racers_screenshot_2.jpg">
                            <img src="Images/Rolling_Racers_screenshot_3.jpg">
                            <!-- <img src="Images\Florescence_Screenshot_4.jpg"> -->
                            <!-- <img src="Images\Florescence_Screenshot_5.png"> -->
                        </div>
                        <div class="slide_buttons">
                            <button class="slide_button" onclick="toDivs(1)"></button>
                            <button class="slide_button" onclick="toDivs(2)"></button>
                            <button class="slide_button" onclick="toDivs(3)"></button>
                            <!-- <button class="slide_button" onclick="toDivs(4)"></button> -->
                            <!-- <button class="slide_button" onclick="toDivs(5)"></button> -->
                        </div>
                        <?php $slideID = "image_slides_rolling_racers_1";
                        include($mainPath . "image_slide_script.php"); ?>
                    </div>
                    <div class="description_container">
                        <p>"Strategic" Racing Game</p>
                        <p>July 2022</p>
                        <p>#8 Overall at GMTK2022</p>
                        <p>Position: Game Designer, System Designer, Programmer</p>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <h1>System Design</h1>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Rolling! (Dice movement)</h2>
                        <p>Unlike other racing games, in rolling racers player controls a cubic dice rolls on a square-shaped grid. Every move the player rolls from one grid to another, and player can only move inside of the raceway. To simulate a car racing game, the dice get acceleration when the player constantly rolls in one direction, and it will lose its speed when hit by an obstacle or other dice.</p>
                    </div>
                    <div class="right"><img src="Images/Rolling_Racers_Move.gif"></div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Acceleration Pad & Knock Down</h2>
                        <p>The numbers on the dice matter a lot in this game. There are various acceleration pads on the raceway with different requirements(odd/even, higher than 3...), and they accelerate player when the dice land the correct number on them.</p>
                        <p>Players can also knock down other dice(or been knocked off) by crashing into them. The dice with the lower number will lose its speed and get knocked down for a while.</p>
                    </div>
                    <div class="right"><img src="Images/Rolling_Racers_AccPad.gif"></div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Dicer Time</h2>
                        <p>Since the player rolls very fast most of the time, it's hard to react and land with the right number on the pads. Therefore, we add this Dicer Time (slow motion) system. Holding "space" to enter Dicer Time and player can plan an efficient route and adjust the number to fulfill the requirements of acceleration pads.</p>
                        <p>Stays in slow motion cost "Dicer Time Bar". It allows player to stay in slow motion for 10 seconds for maximum. Player can also spend this resource to dash forward.</p>
                    </div>
                    <div class="right"><img src="Images/Rolling_Racers_DicerTime.gif"></div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Enemy AI</h2>
                        <p>AI player is a very important part of racing game. In this game, player is competing with the other 9 AI players. AI players utilize A* pathfinding to find out the route toward the destination. To make the game challenging, some of the AIs have better capability than the player's dice. The yellow dice is the greatest rival and we give it the best performance to make sure it leads the game every time.</p>
                        <p>After the game jam, I spent a week improving the AI system. The updated AIs are able to detect the surrounding acceleration pads and try to land on them with the right number. Some of them will also try to attack other dice nearby.</p>
                    </div>
                    <div class="right"><img src="Images/Rolling_Racers_AI.gif"></div>
                </div>
            </article>
        </section>
        <section class="text_article">
            <h1>Postmortem</h1>
            <article>
                <p>Rolling Racers is a game jam project made in 48 hours during the GTMK Jam 2022. “Dice” is the theme of this game jam. In this game, the player plays a dice racer, rolling on a grid raceway and competing with other ai dice racers. Player can speed up by landing on an acceleration pad with the correct number and using bullet time to manage the path and win the race. This game is designed and developed by 3 people. My roles in the team are game designer, system designer, and programmer. This game is rated #8 overall in the GTMK jam. It’s a great accomplishment that we were able to complete the design and development process in a very short amount of time. The outcome turns great with our creative thoughts and proficiency in Unity Engine.</p>
                <p>At the planning stage, our first thought was to create a dice game without the randomness of the dice. A puzzle game of dice rolling on the ground and landing on the grid with a certain number is an easy solution, but we thought that it was a cheap idea, and this type of game would be flooded in the jam. We wanted to make something more exciting, like a dungeon RPG or… a racing game! After we decided on the basic functions for this game, I started to develop the system. I spent the first 8 hours making the moving system, which is the core of the system. The dice racer is a cube rotating along its bottom edge. For each move, the dice rotate 90 degrees and move from one block to another. Most of the time, the dice has a kinematic rigid body and use ray-casting to check if it can move to a direction. The human and ai players use the same moving class and different input classes, so it’s a fair game for every player. I also spent time improving the feeling of control by making detailed things like input buffers. In the next 30 hours, I finished up other systems like the condition checker for acceleration pad, jump pads, collide system for dice crashing, bullet time, checkpoints, and ranking system… I cooperate with another teammate on AI. He implemented an A* pathfinding package for AI. I never use A* before, but after spending some time on the documentation of the package, I was able to connect it with the moving system. In the beginning, the ai had tons of bugs, but after 4 hours of adjusting most bugs are fixed and the game is playable.</p>
                <p>This project is a great challenge to my skill and creativity. We designed this project with a very large scale for a 48-hour game, but I’m very satisfied that we were finally able to finish it. The jam version is not the perfect solution for this game, but it is playable as a completed piece. Some players were confused by the mechanics of this game, and many parts of this game can be improved and expanded. I cleaned up a lot of codes and added more functions for the player and ai. Hope you enjoy it.</p>
            </article>
        </section>
    </main>
</body>

</html>