<!DOCTYPE html>
<html lang="en">
<?php $mainPath = "../../" ?>

<head>
    <meta charset="utf-8">
    <title>Florescence</title>
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
    <div id="florescence_page_background">
        <?php
        $project_title = "Florescence";
        include($mainPath . "project_title_holder.php");
        ?>
    </div>
    <main class="project_page">
        <section class="content_overview">
            <article class="project_content_container">
                <div class="left_box">
                    <p class="overview_text">Florescence is a game about exploring a beautiful yet dangerous alien planet overflowing with pollen-like substances. Player command a planetary rover to navigate through the hazards, use sound waves to scan and record data, and create a map of the terrain of this planet.</p>
                    <iframe src="https://www.youtube.com/embed/xrJPFW28PF8" title="Florescence Trailer (Parsons DT 2023 Thesis Project)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="right_box">
                    <div class="image_slide_box" id="image_slides_florescence_1">
                        <div class="image_slides">
                            <img src="Images/Florescence_Screenshot_1.png">
                            <img src="Images/Florescence_Screenshot_2.png">
                            <img src="Images\Florescence_Screenshot_3.jpg">
                            <img src="Images\Florescence_Screenshot_4.jpg">
                            <img src="Images\Florescence_Screenshot_5.png">
                        </div>
                        <div class="slide_buttons">
                            <button class="slide_button" onclick="toDivs(1)"></button>
                            <button class="slide_button" onclick="toDivs(2)"></button>
                            <button class="slide_button" onclick="toDivs(3)"></button>
                            <button class="slide_button" onclick="toDivs(4)"></button>
                            <button class="slide_button" onclick="toDivs(5)"></button>
                        </div>
                        <?php $slideID = "image_slides_florescence_1";
                        include($mainPath . "image_slide_script.php"); ?>
                    </div>
                    <div class="description_container">
                        <p>Adventure & Strategic Game</p>
                        <p>January 2023 - May 2023</p>
                        <p>Thesis Project at Parsons School of Design</p>
                        <p>Position: System Designer, Programmer, UI Designer, Tech Artist</p>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <h1>System Design</h1>
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
                        <p>Player can shoot sound waves with different pitches by holding the mouse button for a different duration.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_sonar_wave_5.gif"></div>
                        <p>Sonar helps the player to navigate through pollen fog or find covered paths.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_sonar_wave_4.gif"></div>
                        <p>Creatures react differently based on the pitch of the sound waves. The nepenthes-like plant inhales pollen when it hears a mid-pitch sound but exhales it when it detects a high-pitch sound.</p>
                    </div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Mapping System</h2>
                        <p>Another major gameplay is manually documenting the surroundings in a mapping system. When the sound wave emitted by player hits an obstacle, it leaves a pin on the map, marking the location of obstacles and terrain features. By connecting those pins, the player will gradually uncover the full outline of the planet’s topography. The planetary rover auto-dodge obstacles based on the map made by player. To avoid dangers or tracking unknown objects, player can also put various marks on the map.</p>
                    </div>
                    <div class="right"><img src="Images\Florescence_mapping_3.gif"></div>
                </div>
                <div class="content_container three">
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_mapping_1.gif"></div>
                        <p>Sound wave places a pin when they hit obstacles. Player can connect those pins and help the rover dodge obstacles based on those lines.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_mapping_2.gif"></div>
                        <p>Player can also put down various marks to document their discovery.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_Screenshot_5.png"></div>
                        <p>During exploring the environment and navigating through the pollen fog, player made their own customized map.</p>
                    </div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Planet Rover: Move & Damage</h2>
                        <p>In the game, player commands a planet rover. Instead of directly controlling the movement, player can only set up targets and the rover will calculate a route to the target position based on the map.</p>
                        <p>The planet rover takes damage when it crashes into obstacles, so player need to carefully scout and plan the route before making the command. When the planet rover takes a certain amount of damage, pollen starts leaking into its shell. Player can still control the rover until the pollen substance covers the screen.</p>
                    </div>
                    <div class="right"><img src="Images\Florescence_move_1.gif"></div>
                </div>
            </article>
            <article>
                <div class="content_container">
                    <div class="left">
                        <h2>Goal</h2>
                        <p>The goal of this game is to find signal stations hidden on this planet. There are 8 signal stations distributed in different environments and player need to find at least 4 of them to finish the game. The purpose of this goal is to encourage the player to explore the environment and enjoy the experience of exploration and discovery.</p>
                        <p>When player activates a signal station, it disperses the pollen around and creates a "safe" area for the player.</p>
                    </div>
                    <div class="right"><img src="Images\Florescence_goal_1.gif"></div>
                </div>
            </article>
        </section>
        <section>
            <h1>World Building & Content Design</h1>
            <article>
                <div class="content_container square_img">
                    <div class="left">
                        <p>Based on these systems, we designed various types of environments with their unique gameplay styles. Those areas are connected by obvious paths and secret passages. Players start at the center of the level and can go to any of those areas based on the direction they choose. By level design(level structure and targets that emit sound waves), we guide the player to explore the east or west part of the map first because those environments are relatively more friendly.</p>
                        <p>We have 4 different interactive creatures in this game:</p>
                    </div>
                    <div class="right"><img class="smaller" src="Images\Florescence_level_overall.png"></div>
                </div>
                <div class="content_container four">
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_spike.png"></div>
                        <p>Spiky plant that damages the planet rover when the player move through it. It emits a sound wave when detects sound waves from other objects.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_inhale.gif"></div>
                        <p>Nepenthes-like plant that inhales surrounding pollen fog when detects sound with suitable pitch and exhales it when detects high-pitched sound.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_tomato.gif"></div>
                        <p>Tomato-like plant that becomes unstable when detects high-pitch sound and eventually explodes.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_cow.gif"></div>
                        <p>Cow-like creatures that moo (emit sound waves) and are scared of high-pitched sounds.</p>
                    </div>
                </div>
            </article>
            <article>
                <p>With these objects, we made following environments:</p>
                <div class="content_container three">
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_4.png"></div>
                        <p>Regular forest with some Spiky plants and Nepenthes-like plants. The most common environment in the game.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_1.png"></div>
                        <p>A plain with cows and Nepenthes. Because of Nepenthes, player have clear sight in this environment. However, cows are often wandering so the player has to manually dodge them.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_5.png"></div>
                        <p>Tomato Valley. Player has to be careful when emitting sound waves. Sometimes tomatoes block the way and player have to trigger them to explode.</p>
                    </div>
                </div>
                <div class="content_container three">
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_2.png"></div>
                        <p>Spiky Marsh. The whole area is filled with spiky plants. Since the waves don't bounce on them, player has to carefully move or use marks to mark out the danger.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_3.png"></div>
                        <p>Mysterious forest. Trees with deeper color are passable. Mapping is very helpful to avoid getting lost in this forest.</p>
                    </div>
                    <div class="image_with_text">
                        <div class="right"><img src="Images\Florescence_level_6.gif"></div>
                        <p>There are also landmarks in these environments. Player can see them beyond the fog, picturing the environment in which they are going to engage. </p>
                    </div>
                </div>
            </article>
        </section>
        <section>
            <h1>UI/UX Design</h1>
            <div class="content_container">
                <div class="left">
                    <p> The User interface in this game is designed to look scientific with a minimalist style, like a remote control panel for planetary rover.</p>
                    <p>Initially, the controls are mapped on both keyboard and mouse, which makes it very confusing for playtesters. I simplify the control and put all input on mouse click and drag, which feels much more natural for players. To make sure the player doesn't accidentally move the rover, the right button is bound to move and all of the other tasks(shoot sonar wave, draw map) can be done by the left button.</p>
                </div>
                <iframe src="https://www.youtube.com/embed/KOqYtQMpSl4" title="Florescence UI Present Clip" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="img_container">
                <img src="Images\Florescence_operation_manual_2.png">
                <p>An operation manual made for exhibitions explains the interaction logic of this game.</p>
            </div>
        </section>
        <section class="text_article">
            <h1>Postmortem</h1>
            <p>Florescence is my thesis project for Design & Technology B.F.A. at Parsons School of Design. It’s a 2D experimental adventure game about exploring and mapping an alien planet with a planetary rover. This project went through 4 months of conceptualizing and early prototyping, and 4 months of developing. During the developing process, I formed a team with a level designer, a visual artist, and a sound designer. My roles in the team were system designer, programmer, UI designer, and tech artist. With many turns of prototyping, playtesting, and effective collaboration, we successfully created a complete game experience with an interesting and creative system design.</p>
            <p>In the game, the environment is overflowed with pollen-like substances and the player has limited sight. Player is able to shoot sound waves that uncover pollen substances and bounce between obstacles. There are other plants and animals on this planet that emit and react with sound waves. Player can interact with those creatures by emitting sound waves of different pitches. A fully editable map is the other major system in the game. By putting pins and marks on the map, the player can trace the outline of the surrounding topography and mark down obstacles or discoveries. The planetary rover has a path-finding system based on the marks on the map, so mapping the environment helps the rover navigate through it. Those two systems work together to create a playful exploring experience: navigating through the mist, finding unique creatures, narrative clues, and secret paths, and documenting them on the map. The experiential goal is to make players feel satisfied and recall the process when they go through the journey and look at the map drawn by themselves.</p>
            <p>In the conceptual stage, my goal was to experiment with interesting game mechanics and design a unique strategic game that brings the joy of exploration. I researched different precedents, including Dungeon Master(early dungeon crawler), Miasmata(a game with a unique system of mapping and triangulation), Duskers(about exploring unknown space with drowns)… Meanwhile, I build up early prototypes and playtest them to see how my concept works. One of those prototypes is a turn-based game in which the player moves in a dark space, emits sound waves to detect surroundings, and leaves marks to mark the outline of the space. The mechanics of the sonar and map stand out. I shared the concept with my friend and collaborator Stevo Yang (Level designer and project manager in the team), and we conceptualized a real-time adventure game based on those two mechanics.</p>
            <img src="Images\Florescence_prototype_1.png">
            <p>During the development stage, we followed sprint & backlog workflow and I created an assets list for visuals and sound effects to communicate more effectively with visual and sound artists. This was my first long-term collaborative project and with those efforts, we were able to get it done on time and meet our design goals. Through the process, I learned important teamwork skills: communicating ideas with teammates, tracking progress, and making necessary decisions to cut content. We used sprint & backlogs for project management and made asset lists to track resources and communicate better with visual and sound artists in the team. In the beginning, the system was unique but weird to play. I observed the difficulties that random players meet during playtesting and simplified controls to make it more user-friendly. Meanwhile, I experimented with shaders in Unity and tried to optimize the performance of the pollen mist effect. The result was not as successful as the other parts, but it piqued my interest in shaders and tech art. Moreover, the game was presented at Parsons Design + Technology Thesis Show and NYU Game Center Showcase, and I gained precious experience in how to exhibit a game project.</p>
        </section>
    </main>
</body>

</html>