<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="./app.js"></script>
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
                    <div>pierluigi.carrieri.90@gmail.com</div>
                </li>

                <li class="py-1">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <div>348 06 35 960</div>
                </li>

                <li class="py-1">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>Bologna (BO), Italia</div>
                </li>

                <li class="py-1">
                    <i class="fa-brands fa-linkedin"></i>
                    <div>www.linkedin.com/in/pierluigi-carrieri-2489a424a</div>
                </li>

                <li class="py-1">
                    <i class="fa-brands fa-github"></i>
                    <div>https://github.com/pierluigicarrieri</div>
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

                <h2 class="text-center title-2 coral">INTERESSI</h2>

                <div class="hr-left"></div>

                <ul class="my-3">
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Lettura&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/reading.png" alt="reading" id="reading-pic">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Cinema&nbsp;</div>
                        <div class="array-arrow">&nbsp;&rArr;</div>
                        <img src="./assets/cinema.png" alt="cinema" id="cinema-pic">
                    </li>
                    <li class="flex items-center py-2">
                        <div class="title-3 coral">Sport&nbsp;</div>
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

                <div class="py-5 text-2 white">
                    Sono uno sviluppatore junior sempre alla ricerca di sfide e desideroso di fare nuove esperienze.
                    La programmazione e la comunicazione con persone provenienti da tutto il mondo mi entusiasmano: 
                    sono sempre pronto a mettere alla prova le mie capacità e ad acquisirne di nuove.
                </div>

                <div id="lang-switch" class="p-2">
                    <span>ENG</span>
                    <span>/</span>
                    <span>ITA</span>
                </div>

            </div>

            <!-- Experience -->
            <div>

                <h2 class="mt-2 title-2 coral">ESPERIENZA</h2>

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
                            <span class="title-4 coral">Sviluppo e personalizzazione di ERP</span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black">
                                Gestito lo sviluppo di un ERP modulare, utilizzato come template per diversi progetti aziendali, 
                                personalizzato per settori come pulizia industriale e istruzione. 
                                Contributo sia al template principale sia alle sue iterazioni specifiche.
                            </span>
                        </li>

                        <li>
                            <span class="title-4 coral">Creazione del modulo di gestione magazzino</span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black">
                                Ideato, sviluppato e portato a termine in completa autonomia il modulo di gestione del magazzino 
                                all'interno dell'ERP, con particolare attenzione alla gestione delle scorte, inventario e ordini.
                            </span>
                        </li>

                        <li>
                            <span class="title-4 coral">Manutenzione e miglioramenti su e-commerce</span>
                            <span class="object-arrow">&nbsp;&rarr;</span>
                            <span class="text-1 black">
                                Gestito la manutenzione di un sito e-commerce B2B per la vendita all’ingrosso di parti di auto 
                                e camper, con implementazioni su gestione clienti, agenti di vendita e ordini. Esperienza anche 
                                nella creazione e design di siti web in WordPress.
                            </span>
                        </li>


                    </ul>


                </div>

            </div>


            <!-- Training -->
            <div>

                <h2 class="mt-4 title-2 coral">CORSI E MASTER</h2>

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
                            <span class="text-1 black">
                                Bootcamp di 700 ore teoriche e pratiche durante il quale ho avuto modo di studiare 
                                e padroneggiare tecnologie frontend e backend.
                            </span>
                        </li>

                    </ul>

                </div>

            </div>


            <!-- Education -->
            <div>

                <h2 class="mt-4 title-2 coral">FORMAZIONE</h2>

                <div class="hr-full"></div>

                <!-- English -->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral">C2 Proficiency</div>

                        <div class="title-4 black">British Council</div>


                    </div>

                </div>

                <!-- University -->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral">Laurea in Giurisprudenza</div>

                        <div class="title-4 black">Università di Bologna</div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>09/2009-12/2017</em>
                            <em>Bologna (BO)</em>
                        </div>

                    </div>

                </div>

                <!-- High School-->
                <div>

                    <div class="my-2 main-section-header">

                        <div class="title-3 coral">Diploma di Maturità Scientifica</div>

                        <div class="title-4 black">Liceo Scientifico San Vincenzo de Paoli</div>
        
                        <div class="flex justify-between text-2 coral">
                            <em>09/2003-07/2009</em>
                            <em>Bologna (BO)</em>
                        </div>

                    </div>

                </div>

            </div>

            <div class="hr-privacy"></div>

            <div id="privacy-policy">Autorizzo il trattamento dei miei dati personali ex.art 13 GDPR 679/2016</div>
            
        </section>

    </div>

</body>
</html>