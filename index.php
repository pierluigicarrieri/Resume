<?php

// Starts session
session_start();

// Includes multilang text file
include 'content.php';

// Italian as the default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ita';
}

// Switches language when button is clicked
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Get the current content based on the language saved in session
$content = $_SESSION['lang'] == 'eng' ? $eng : $ita;

$eng_switch_class = '';
$ita_switch_class = '';

if($_SESSION['lang'] == 'eng') {
    $eng_switch_class = 'selected';
    $ita_switch_class = 'not-selected';
} else if($_SESSION['lang'] == 'ita') {
    $eng_switch_class = 'not-selected';
    $ita_switch_class = 'selected';
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Resume</title>
</head>
<body class="">
    
    <div id="content-wrapper" class="flex h-full p-5">
        
        <!-- Left sidebar: pic, contact info, skills, interests -->
        <section class="w-1/4">

            <!-- Pic -->
            <img src="./assets/Foto C.V..jpg" alt="profile_pic" id="pic" class="rounded-2xl">

            <!-- Contact Info -->
            <ul id="contact-info" class="my-3">

                <li class="py-1">
                    <i class="fa-regular fa-envelope"></i>
                    <div><?= $content['contact_info']['mail'] ?></div>
                </li>

                <li class="py-1">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <div><?= $content['contact_info']['phone'] ?></div>
                </li>

                <li class="py-1">
                    <i class="fa-solid fa-location-dot"></i>
                    <div><?= $content['contact_info']['address'] ?></div>
                </li>

                <li class="py-1">
                    <i class="fa-brands fa-linkedin"></i>
                    <div><?= $content['contact_info']['linkedin'] ?></div>
                </li>

                <li class="py-1">
                    <i class="fa-brands fa-github"></i>
                    <div><?= $content['contact_info']['github'] ?></div>
                </li>

            </ul>

            <!-- Skills -->
            <div id="skills">

                <h2 class="text-center title-2 coral">SKILLS</h2>

                <div class="hr-left"></div>

                <ul class="mt-2 mb-1">
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Html&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/html_logo.png" alt="html-logo" id="html-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Css&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/css_logo.svg" alt="css-logo" id="css-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">JavaScript&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/javascript_logo.webp" alt="javascript-logo" id="javascript-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Vue.js&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/vuejs_logo.png" alt="vuejs-logo" id="vuejs-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Php&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/php_logo.svg" alt="php-logo" id="php-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Laravel&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/laravel_logo.svg" alt="laravel-logo" id="laravel-logo">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">MySql&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/mysql_logo.svg" alt="MySqlLogo" id="mysql-logo">
                    </li>
                </ul>

            </div>

            <!-- Interessi -->
            <div id="interests">

                <h2 class="text-center title-2 coral"><?= $content['interests']['title'] ?></h2>

                <div class="hr-left"></div>

                <ul class="my-3">
                    <li class="flex items-center py-2">
                        <div class="title-3 coral"><?= $content['interests']['content']['0'] ?>&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/reading.png" alt="reading" id="reading-pic">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral"><?= $content['interests']['content']['1'] ?>&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/cinema.png" alt="cinema" id="cinema-pic">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral"><?= $content['interests']['content']['2'] ?>&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/sport.png" alt="sport" id="sport-pic">
                    </li>
                </ul>

            </div>

        </section>

        <!-- Right content: personal info, experience, education -->
        <section class="w-3/4 ps-4">

            <!-- Personal info -->
            <div id="personal-info" class="p-3">

                <h1 class="title-1 white">Pierluigi Carrieri</h1>

                <div class="title-3 white">Junior Web Developer</div>

                <hr class="w-5/12 white">

                <div class="py-5 text-2 white"><?= $content['personal_info'] ?></div>

                <!-- Buttons to select resume language -->
                <div id="lang-switch" class="p-2">
                    <span class="<?= $eng_switch_class ?>" onclick="window.location.href='?lang=eng'">ENG</span>
                    <span>/</span>
                    <span class="<?= $ita_switch_class ?>" class="selected" onclick="window.location.href='?lang=ita'">ITA</span>
                </div>

            </div>

            <!-- Experience -->
            <div>

                <h2 class="mt-2 title-2 coral"><?= $content['experience']['title'] ?></h2>

                <div class="hr-full"></div>

                <!-- Latest/Current Experience -->
                <div>

                    <div class="my-2 experience-header">

                        <div class="title-3 coral">Full Stack Web Developer</div>

                        <div class="title-4 black">Softweb Srl</div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>03/2024-10/2024</em>
                            <em>Casalecchio di Reno (BO)</em>
                        </div>

                    </div>

                    <ul class="experience-body">

                        <li>
                            <span class="title-4 coral"><?= $content['experience']['content'][0]['title'] ?></span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black"><?= $content['experience']['content'][0]['content'] ?></span>
                        </li>

                        <li>
                            <span class="title-4 coral"><?= $content['experience']['content'][1]['title'] ?></span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black"><?= $content['experience']['content'][1]['content'] ?></span>
                        </li>

                        <li>
                            <span class="title-4 coral"><?= $content['experience']['content'][2]['title'] ?></span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black"><?= $content['experience']['content'][2]['content'] ?></span>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- Training -->
            <div>

                <h2 class="mt-4 title-2 coral"><?= $content['courses_and_training']['title'] ?></h2>

                <div class="hr-full"></div>

                <!-- Training/Courses -->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral">Master Full Stack Web Developer</div>

                        <div class="title-4 black">Boolean Academy</div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>05/2023-12/2023</em>
                        </div>

                    </div>

                    <ul>

                        <li>
                            <span class="text-1 black"><?= $content['courses_and_training']['content'] ?></span>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- Education -->
            <div>

                <h2 class="mt-4 title-2 coral"><?= $content['education']['title'] ?></h2>

                <div class="hr-full"></div>

                <!-- English -->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral"><?= $content['education']['content'][0]['title'] ?></div>

                        <div class="title-4 black"><?= $content['education']['content'][0]['body'] ?></div>


                    </div>

                </div>

                <!-- University -->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral"><?= $content['education']['content'][1]['title'] ?></div>

                        <div class="title-4 black"><?= $content['education']['content'][1]['body'] ?></div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>09/2009-12/2017</em>
                            <em>Bologna (BO)</em>
                        </div>

                    </div>

                </div>

                <!-- High School-->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral"><?= $content['education']['content'][2]['title'] ?></div>

                        <div class="title-4 black"><?= $content['education']['content'][2]['body'] ?></div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>09/2003-07/2009</em>
                            <em>Bologna (BO)</em>
                        </div>

                    </div>

                </div>

            </div>

            <div class="hr-privacy"></div>

            <div id="privacy-policy"><?= $content['privacy_policy'] ?></div>
            
        </section>

    </div>

</body>

</html>

