<?php require 'nav.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design Mask</title><link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/formoid-flat-green.css" type="text/css" />
    <link rel="stylesheet" href="css/profile.css" type="text/css" />

    <link rel="stylesheet" type="text/css" href="css/tool-style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/selectric.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

<body>
    <div class="tool-wrapper">
        <div class="tool-container">
            <div class="edit-options">
                <div class="options" id="add-edit" data-src="add-edit-opt">
                    <div class="options-icon"></div>
                    <div class="options-value">Add text</div>
                </div>

                <div class="options" id="upload" data-src="upload-opt">
                    <div class="options-icon"></div>
                    <div class="options-value">Upload</div>
                </div>
                <!-- <div class="options" id="add-notes" data-src="add-notes-opt">
                    <div class="options-icon"></div>
                    <div class="options-value">Add notes</div>
                </div> -->
                <div class="options" id="change-product" data-src="change-product-opt" onclick="window.location.replace('makemasks.php')">
                    <div class="options-icon"></div>
                    <div class="options-value">Start Over</div>
                </div>
                
            </div>

            <div class="edit-area">
                <div class="product-images">
                    <div id="front-product-view" class="front-view">
                        <canvas id="front-product"></canvas>
                    </div>
                    <!--front-product-view-->
                    <div id="back-product-view" class="back-view">
                        <canvas id="back-product"></canvas>
                    </div>
                    <!--back-product-view-->
                </div>
                <div class="img-wrapper" id="img-wrapper">
                    <div id="front-view">
                        <canvas id="front"></canvas>
                    </div>
                    <!--front-view-->
                    <div id="back-view">
                        <canvas id="back"></canvas>
                    </div>
                    <!--back-view-
                </div>

                <div class="front-back-option">
                    <ul>
                        <li class="active"><a href="javascript: void(0)" data-src="front-view">Front</a></li>
                        <li><a href="javascript: void(0)" data-src="back-view">Back</a></li>
                    </ul>
                </div>
            </div>
            <!--edit-area -->

            <div class="">
                <p class="current-text">Base cost, with current pricing discounts</p>
                <p class="current-price">$20.25</p>
                <a href="#" class="buy-this">Buy this</a>
            </div>

            <div class="editing-tools">
                <div class="editing-tool-con" id="add-edit-opt">
                    <div class="option-heading">
                        <span class="option-heading-text">Enter your text</span>
                        <a href="javascript: void(0)" class="close-option">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="main-options">
                        <textarea class="textarea" id="txtArea">TEXT</textarea>
                        <div class="main-options-half">
                            <div class="font-family-col">
                                <label>Change Font</label>
                                <select id="fontFamily"></select>
                            </div>
                            <div class="align">
                                <a href="javascript: void(0)" class="centerAlign" data-value="canterCanvas">Center</a>
                                <ul class="text-align">
                                    <li class="active"><a href="javascript: void(0)" data-value="alignLeft"><i class="fa fa-align-left"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="javascript: void(0)" data-value="alignCenter"><i class="fa fa-align-center"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="javascript: void(0)" data-value="alignRight"><i class="fa fa-align-right"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="rotation">
                                <label for="">Rotation</label>
                                <input type="range" min="-180" max="180" value="0" id="rotationInput">
                                <input type="text" id="rotationValue" value="0">
                            </div>
                            <div class="font-size">
                                <label for="">Font Height</label>
                                <input type="text" class="fontSize" value="30">
                            </div>
                            <div class="font-size forward-index">
                                <label for="">Bring Forward</label>
                                <a href="javascript:void(0)" class="bring-forward">Forward</a>
                            </div>
                            <div class="arcText rotation">
                                <label for="">Arch</label>
                                <span class="arch-x">
                                    Curve X <input type="range" min="-100" max="100" value="0" id="arcInputX" class="radiusX">
                                </span>
                                <span class="arch-x">
                                    Curve Y <input type="range" min="-100" max="100" value="0" id="arcInputY" class="radiusY">
                                </span>
                            </div>
                        </div>
                        <div class="main-options-half">
                            <div class="color-planet">
                                <label for="">Thread color</label>
                                <div id="color-lab-scroll">
                                    <ul>
                                        <li class="White active" data-color="rgb(254, 254, 254)">White</li>
                                        <li data-color="rgb(0,0,0)">Black</li>
                                        <li data-color="rgb(100, 106, 105)">Charcoal</li>
                                        <li data-color="rgb(153, 153, 154)">Gray</li>
                                        <li data-color="rgb(189, 187, 187)">Ice Gray</li>
                                        <li data-color="rgb(255, 0, 145)">Hot Pink</li>
                                        <li data-color="rgb(255, 175, 190)">Pink</li>
                                        <li data-color="rgb(255, 140, 190)">Charity Pink</li>
                                        <li data-color="rgb(180, 70, 140)">Magenta</li>
                                        <li data-color="rgb(125, 45, 60)">Maroon</li>
                                        <li data-color="rgb(150, 0, 50)">Cardinal</li>
                                        <li data-color="rgb(200, 15, 40)">Red</li>
                                        <li data-color="rgb(250, 75, 15)">Orange</li>
                                        <li data-color="rgb(255, 130, 0)">Team Orange</li>
                                        <li data-color="rgb(255, 180, 25)">Athletic Gold</li>
                                        <li data-color="rgb(255, 200, 40)">Gold</li>
                                        <li data-color="rgb(255, 220, 0)">Yellow</li>
                                        <li class="Yello" data-color="rgb(250, 235, 95)">Lemon</li>
                                        <li data-color="rgb(140, 105, 35)">Old Gold</li>
                                        <li data-color="rgb(165, 225, 0)">Vibrant Lime</li>
                                        <li data-color="rgb(60, 165, 30)">Green</li>
                                        <li data-color="rgb(0, 105, 55)">Kelly</li>
                                        <li data-color="rgb(45, 80, 50)">Forest</li>
                                        <li data-color="rgb(0, 115, 120)">Teal</li>
                                        <li data-color="rgb(0, 155, 180)">Turquoise</li>
                                        <li data-color="rgb(35, 175, 240)">Sky Blue</li>
                                        <li data-color="rgb(145, 190, 235)">Baby Blue</li>
                                        <li data-color="rgb(0, 95, 160)">Blue</li>
                                        <li data-color="rgb(0, 60, 130)">Royal</li>
                                        <li data-color="rgb(0, 50, 90)">Navy</li>
                                        <li data-color="rgb(170, 125, 200)">Lavender</li>
                                        <li data-color="rgb(90, 50, 135)">Purple</li>
                                        <li data-color="rgb(100, 30, 100)">Plum</li>
                                        <li data-color="rgb(130, 80, 45)">Brown</li>
                                        <li data-color="rgb(205, 160, 115)">Sand</li>
                                        <li data-color="rgb(255, 190, 120)">Apricot</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doneBtn-con">
                        <a href="javascript: void(0)" class="doneBtn" id="textDone">Done</a>
                    </div>
                </div>
                <!--add-edit-opt-->
                <div class="editing-tool-con" id="add-art-opt">
                    <div class="option-heading">
                        <span class="option-heading-text">Choose Your Art</span>
                        <a href="javascript: void(0)" class="close-option">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>

                    <div id="icons-container-scroll">

                        <div class="icons-container">
                            <ul class="all-icons-list">
                                <li class="first-category Animals">
                                    <a href="javascript:void(0)">Animals</a>
                                    <ul style="display: none;">
                                        <li class="second-category alligators">
                                            <a href="javascript:void(0)" data-value="alligators">alligators</a>
                                        </li>
                                        <li class="second-category apes">
                                            <a href="javascript:void(0)" data-value="apes">apes</a>
                                        </li>
                                        <li class="second-category bears">
                                            <a href="javascript:void(0)" data-value="bears">bears</a>
                                        </li>
                                        <li class="second-category beavers">
                                            <a href="javascript:void(0)" data-value="beavers">beavers</a>
                                        </li>
                                        <li class="second-category bees">
                                            <a href="javascript:void(0)" data-value="bees">bees</a>
                                        </li>
                                        <li class="second-category birds">
                                            <a href="javascript:void(0)" data-value="birds">birds</a>
                                        </li>
                                        <li class="second-category bulls">
                                            <a href="javascript:void(0)" data-value="bulls">bulls</a>
                                        </li>
                                        <li class="second-category butterflies">
                                            <a href="javascript:void(0)" data-value="butterflies">butterflies</a>
                                        </li>
                                        <li class="second-category cardinals">
                                            <a href="javascript:void(0)" data-value="cardinals">cardinals</a>
                                        </li>
                                        <li class="second-category cats">
                                            <a href="javascript:void(0)" data-value="cats">cats</a>
                                        </li>
                                        <li class="second-category chickens">
                                            <a href="javascript:void(0)" data-value="chickens">chickens</a>
                                        </li>
                                        <li class="second-category crab">
                                            <a href="javascript:void(0)" data-value="crab">crab</a>
                                        </li>
                                        <li class="second-category dogs">
                                            <a href="javascript:void(0)" data-value="dogs">dogs</a>
                                        </li>
                                        <li class="second-category dolphins">
                                            <a href="javascript:void(0)" data-value="dolphins">dolphins</a>
                                        </li>
                                        <li class="second-category eagles">
                                            <a href="javascript:void(0)" data-value="eagles">eagles</a>
                                        </li>
                                        <li class="second-category elephants">
                                            <a href="javascript:void(0)" data-value="elephants">elephants</a>
                                        </li>
                                        <li class="second-category flamingos">
                                            <a href="javascript:void(0)" data-value="flamingos">flamingos</a>
                                        </li>
                                        <li class="second-category giraffes">
                                            <a href="javascript:void(0)" data-value="giraffes">giraffes</a>
                                        </li>
                                        <li class="second-category horses">
                                            <a href="javascript:void(0)" data-value="horses">horses</a>
                                        </li>
                                        <li class="second-category jaguars">
                                            <a href="javascript:void(0)" data-value="jaguars">jaguars</a>
                                        </li>
                                        <li class="second-category lions">
                                            <a href="javascript:void(0)" data-value="lions">lions</a>
                                        </li>
                                        <li class="second-category owls">
                                            <a href="javascript:void(0)" data-value="owls">owls</a>
                                        </li>
                                        <li class="second-category panthers">
                                            <a href="javascript:void(0)" data-value="panthers">panthers</a>
                                        </li>
                                        <li class="second-category penguins">
                                            <a href="javascript:void(0)" data-value="penguins">penguins</a>
                                        </li>
                                        <li class="second-category rams">
                                            <a href="javascript:void(0)" data-value="rams">rams</a>
                                        </li>
                                        <li class="second-category sharks">
                                            <a href="javascript:void(0)" data-value="sharks">sharks</a>
                                        </li>
                                        <li class="second-category sheep">
                                            <a href="javascript:void(0)" data-value="sheep">sheep</a>
                                        </li>
                                        <li class="second-category snakes">
                                            <a href="javascript:void(0)" data-value="snakes">snakes</a>
                                        </li>
                                        <li class="second-category tigers">
                                            <a href="javascript:void(0)" data-value="tigers">tigers</a>
                                        </li>
                                        <li class="second-category unicorns">
                                            <a href="javascript:void(0)" data-value="unicorns">unicorns</a>
                                        </li>
                                        <li class="second-category wolves">
                                            <a href="javascript:void(0)" data-value="wolves">wolves</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category charity">
                                    <a href="javascript:void(0)" data-value="charity">charity</a>
                                </li>
                                <li class="first-category emojis">
                                    <a href="javascript:void(0)" data-value="emojis">emojis</a>
                                </li>
                                <li class="first-category food-drink">
                                    <a href="javascript:void(0)">food & drink</a>
                                    <ul style="display: none;">
                                        <li class="second-category alcohol">
                                            <a href="javascript:void(0)" data-value="alcohol">alcohol</a>
                                        </li>
                                        <li class="second-category apples">
                                            <a href="javascript:void(0)" data-value="apples">apples</a>
                                        </li>
                                        <li class="second-category bbq">
                                            <a href="javascript:void(0)" data-value="bbq">bbq</a>
                                        </li>
                                        <li class="second-category beer">
                                            <a href="javascript:void(0)" data-value="beer">beer</a>
                                        </li>
                                        <li class="second-category chef">
                                            <a href="javascript:void(0)" data-value="chef">chef</a>
                                        </li>
                                        <li class="second-category coffee">
                                            <a href="javascript:void(0)" data-value="coffee">coffee</a>
                                        </li>
                                        <li class="second-category desserts">
                                            <a href="javascript:void(0)" data-value="desserts">desserts</a>
                                        </li>
                                        <li class="second-category pizza">
                                            <a href="javascript:void(0)" data-value="pizza">pizza</a>
                                        </li>
                                        <li class="second-category restaurant">
                                            <a href="javascript:void(0)" data-value="restaurant">restaurant</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category military">
                                    <a href="javascript:void(0)" data-value="military">military</a>
                                </li>
                                <li class="first-category music">
                                    <a href="javascript:void(0)" data-value="music">music</a>
                                </li>
                                <li class="first-category occupations">
                                    <a href="javascript:void(0)">occupations</a>
                                    <ul style="display: none;">
                                        <li class="second-category banking">
                                            <a href="javascript:void(0)" data-value="banking">banking</a>
                                        </li>
                                        <li class="second-category business">
                                            <a href="javascript:void(0)" data-value="business">business</a>
                                        </li>
                                        <li class="second-category construction">
                                            <a href="javascript:void(0)" data-value="construction">construction</a>
                                        </li>
                                        <li class="second-category electrician">
                                            <a href="javascript:void(0)" data-value="electrician">electrician</a>
                                        </li>
                                        <li class="second-category emergency">
                                            <a href="javascript:void(0)" data-value="emergency">emergency</a>
                                        </li>
                                        <li class="second-category entertainment">
                                            <a href="javascript:void(0)" data-value="entertainment">entertainment</a>
                                        </li>
                                        <li class="second-category farming">
                                            <a href="javascript:void(0)" data-value="farming">farming</a>
                                        </li>
                                        <li class="second-category firefighter">
                                            <a href="javascript:void(0)" data-value="firefighter">firefighter</a>
                                        </li>
                                        <li class="second-category fitness">
                                            <a href="javascript:void(0)" data-value="fitness">fitness</a>
                                        </li>
                                        <li class="second-category government">
                                            <a href="javascript:void(0)" data-value="government">government</a>
                                        </li>
                                        <li class="second-category law-enforcement">
                                            <a href="javascript:void(0)" data-value="law-enforcement">law enforcement</a>
                                        </li>
                                        <li class="second-category medical">
                                            <a href="javascript:void(0)" data-value="medical">medical</a>
                                        </li>
                                        <li class="second-category real-estate">
                                            <a href="javascript:void(0)" data-value="real-estate">real estate</a>
                                        </li>
                                        <li class="second-category teacher">
                                            <a href="javascript:void(0)" data-value="teacher">teacher</a>
                                        </li>
                                        <li class="second-category teaching">
                                            <a href="javascript:void(0)" data-value="teaching">teaching</a>
                                        </li>
                                        <li class="second-category trucking">
                                            <a href="javascript:void(0)" data-value="trucking">trucking</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category parties-events">
                                    <a href="javascript:void(0)">parties events</a>
                                    <ul style="display: none;">
                                        <li class="second-category date-21">
                                            <a href="javascript:void(0)" data-value="date-21">21</a>
                                        </li>
                                        <li class="second-category babyshower">
                                            <a href="javascript:void(0)" data-value="babyshower">babyshower</a>
                                        </li>
                                        <li class="second-category bachelorette-party">
                                            <a href="javascript:void(0)" data-value="bachelorette-party">bachelorette
                                                party</a>
                                        </li>
                                        <li class="second-category bacheor-party">
                                            <a href="javascript:void(0)" data-value="bacheor-party">bacheor-party</a>
                                        </li>
                                        <li class="second-category birthday">
                                            <a href="javascript:void(0)" data-value="birthday">graduation</a>
                                        </li>
                                        <li class="second-category graduation">
                                            <a href="javascript:void(0)" data-value="graduation">graduation</a>
                                        </li>
                                        <li class="second-category holiday-party">
                                            <a href="javascript:void(0)" data-value="holiday-party">holiday party</a>
                                        </li>
                                        <li class="second-category wedding">
                                            <a href="javascript:void(0)" data-value="wedding">wedding</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category people">
                                    <a href="javascript:void(0)" data-value="people">people</a>
                                </li>
                                <li class="first-category seasons">
                                    <a href="javascript:void(0)">seasons</a>
                                    <ul style="display: none;">
                                        <li class="second-category July-4th-of">
                                            <a href="javascript:void(0)" data-value="July-4th-of">4th of July</a>
                                        </li>
                                        <li class="second-category christmas">
                                            <a href="javascript:void(0)" data-value="christmas">christmas</a>
                                        </li>
                                        <li class="second-category easter">
                                            <a href="javascript:void(0)" data-value="easter">easter</a>
                                        </li>
                                        <li class="second-category fathers-day">
                                            <a href="javascript:void(0)" data-value="fathers-day">fathers day</a>
                                        </li>
                                        <li class="second-category halloween">
                                            <a href="javascript:void(0)" data-value="halloween">hanukkah</a>
                                        </li>
                                        <li class="second-category hanukkah">
                                            <a href="javascript:void(0)" data-value="hanukkah">hanukkah</a>
                                        </li>
                                        <li class="second-category mothers-day">
                                            <a href="javascript:void(0)" data-value="mothers-day">mothers day</a>
                                        </li>
                                        <li class="second-category new-years">
                                            <a href="javascript:void(0)" data-value="new-years">new years</a>
                                        </li>
                                        <li class="second-category st-patricks-day">
                                            <a href="javascript:void(0)" data-value="st-patricks-day">st patricks day</a>
                                        </li>
                                        <li class="second-category thanksgiving">
                                            <a href="javascript:void(0)" data-value="thanksgiving">thanksgiving</a>
                                        </li>
                                        <li class="second-category valentines-day">
                                            <a href="javascript:void(0)" data-value="valentines-day">valentines day</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category shapes-symbols">
                                    <a href="javascript:void(0)">shapes symbols</a>
                                    <ul style="display: none;">
                                        <li class="second-category anchor">
                                            <a href="javascript:void(0)" data-value="anchor">anchor</a>
                                        </li>
                                        <li class="second-category arrow">
                                            <a href="javascript:void(0)" data-value="arrow">arrow</a>
                                        </li>
                                        <li class="second-category banner">
                                            <a href="javascript:void(0)" data-value="banner">banner</a>
                                        </li>
                                        <li class="second-category border">
                                            <a href="javascript:void(0)" data-value="border">border</a>
                                        </li>
                                        <li class="second-category circle">
                                            <a href="javascript:void(0)" data-value="circle">circle</a>
                                        </li>
                                        <li class="second-category cross">
                                            <a href="javascript:void(0)" data-value="cross">cross</a>
                                        </li>
                                        <li class="second-category crown">
                                            <a href="javascript:void(0)" data-value="crown">crown</a>
                                        </li>
                                        <li class="second-category decorative">
                                            <a href="javascript:void(0)" data-value="decorative">decorative</a>
                                        </li>
                                        <li class="second-category flags">
                                            <a href="javascript:void(0)" data-value="flags">flags</a>
                                        </li>
                                        <li class="second-category flowers">
                                            <a href="javascript:void(0)" data-value="flowers">flowers</a>
                                        </li>
                                        <li class="second-category hearts">
                                            <a href="javascript:void(0)" data-value="hearts">hearts</a>
                                        </li>
                                        <li class="second-category lightening">
                                            <a href="javascript:void(0)" data-value="lightening">lightening</a>
                                        </li>
                                        <li class="second-category music">
                                            <a href="javascript:void(0)" data-value="music">music</a>
                                        </li>
                                        <li class="second-category peace">
                                            <a href="javascript:void(0)" data-value="peace">peace</a>
                                        </li>
                                        <li class="second-category star">
                                            <a href="javascript:void(0)" data-value="star">star</a>
                                        </li>
                                        <li class="second-category sun">
                                            <a href="javascript:void(0)" data-value="sun">sun</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category sports-games">
                                    <a href="javascript:void(0)">sports games</a>
                                    <ul style="display: none;">
                                        <li class="second-category baseball">
                                            <a href="javascript:void(0)" data-value="baseball">baseball</a>
                                        </li>
                                        <li class="second-category basketball">
                                            <a href="javascript:void(0)" data-value="basketball">basketball</a>
                                        </li>
                                        <li class="second-category bowling">
                                            <a href="javascript:void(0)" data-value="bowling">bowling</a>
                                        </li>
                                        <li class="second-category boxing">
                                            <a href="javascript:void(0)" data-value="boxing">boxing</a>
                                        </li>
                                        <li class="second-category cheering">
                                            <a href="javascript:void(0)" data-value="cheering">cheering</a>
                                        </li>
                                        <li class="second-category cross-country">
                                            <a href="javascript:void(0)" data-value="cross-country">cross country</a>
                                        </li>
                                        <li class="second-category football">
                                            <a href="javascript:void(0)" data-value="football">football</a>
                                        </li>
                                        <li class="second-category golf">
                                            <a href="javascript:void(0)" data-value="golf">golf</a>
                                        </li>
                                        <li class="second-category hockey">
                                            <a href="javascript:void(0)" data-value="hockey">hockey</a>
                                        </li>
                                        <li class="second-category lacrosse">
                                            <a href="javascript:void(0)" data-value="lacrosse">lacrosse</a>
                                        </li>
                                        <li class="second-category soccer">
                                            <a href="javascript:void(0)" data-value="soccer">soccer</a>
                                        </li>
                                        <li class="second-category softball">
                                            <a href="javascript:void(0)" data-value="softball">softball</a>
                                        </li>
                                        <li class="second-category tennis">
                                            <a href="javascript:void(0)" data-value="tennis">tennis</a>
                                        </li>
                                        <li class="second-category volleyball">
                                            <a href="javascript:void(0)" data-value="volleyball">volleyball</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="first-category travel">
                                    <a href="javascript:void(0)" data-value="travel">travel</a>
                                </li>
                                <li class="first-category Trendy">
                                    <a href="javascript:void(0)" data-value="Trendy">Trendy</a>
                                </li>
                                <li class="first-category usa">
                                    <a href="javascript:void(0)" data-value="usa">usa</a>
                                </li>
                            </ul>
                        </div>

                        <div class="icon-list-con" id="selectImg">
                            <div class="seprate-icons alligators">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="assests/clip-arts/animals/alligators/gator8.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seprate-icons apes">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="assests/clip-arts/animals/apes/ape2.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="icon-list-con" id="selectImgBack">
                            <div class="seprate-icons alligators">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="assests/clip-arts/animals/alligators/gator8.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="seprate-icons apes">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="assests/clip-arts/animals/apes/ape2.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="editing-tool-con" id="upload-opt">
                    <div class="option-heading">
                        <span class="option-heading-text">Upload Image</span>
                        <a href="javascript: void(0)" class="close-option">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                    <form name="imgForm">
                    </form>
                    <div class="drag-drop-wrapper">
                        <div class="dgarImage dgarImageFront">
                            <input type="file" id="uploadImg" class="front" name="selectImg" />
                            <div id="filedrag"><img src="assests/images/upload-new.png" /><br>Drag & Drop or<br>Browse
                                Your Computer</div>
                        </div>
                        <div class="dgarImage dgarImageBack" style="display: none;">
                            <input type="file" id="uploadImgBack" class="back" name="selectImg" />
                            <div id="filedragBack"><img src="assests/images/upload-new.png" /><br>Drag & Drop or<br>Browse
                                Your Computer</div>
                        </div>
                    </div>
                </div>
                <div class="editing-tool-con" id="upload-opt-next">
                    <div class="option-heading">
                        <span class="option-heading-text">Edit Your Image</span>
                        <a href="javascript: void(0)" class="close-option">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="front-imgEdit">
                        <div class="top-edit-section">
                            <div class="center-text">
                                <input type="button" id="uploadCenter" value="Move To Center">Center
                            </div>
                            <div class="flipText">
                                <ul>
                                    <li class="flipHoriz"><a href="javascript: void(0)">
                                            <img src="assests/images/flip-hori.png" />
                                        </a></li>
                                    <li class="flipVert"><a href="javascript: void(0)">
                                            <img src="assests/images/flip-vert.png" />
                                        </a></li>
                                </ul>Flip
                            </div>
                            <div class="bring-forward-img">
                                <div class="font-size forward-index">
                                    <label for="">Bring Forward</label>
                                    <a href="javascript:void(0)" class="bring-forward">Forward</a>
                                </div>
                            </div>
                            <div class="text-rotation">
                                <label for="rotation"><span class="rotationNameText">Rotation</span>
                                    <input type="range" value="0" min="-180" max="180" id="image-rotate">
                                    <span id="uploadRotationValue">
                                        <input type="text" value="0" id="rotateValImage">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="makeOneColor">
                            <div class="input-wrapper hide-colorActive">
                                <div class="border-row">
                                    <label>Make One Color<small>Budget Friendly</small></label>
                                    <label class="switch">
                                        <input type="checkbox" id="makeOneColor">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-wrapper hide-colorActive">
                                <div class="border-row">
                                    <label>Remove Background Color</label>
                                    <label class="switch">
                                        <input type="checkbox" id="removeBackground">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <div class="border-row last-row">
                                    <label>Change Colors <small class="ChangeColorFound">
                                            <span class="colorFoundCount">1</span> Colors Found
                                        </small></label>
                                    <ul class="change-color-list"></ul>
                                    <div class="popupLike">
                                        <ul id="change-color" class="colorPalet">
                                            <li data-value="rgb(0,0,0)">Black</li>
                                            <li class="White" data-value="rgb(254, 254, 254)">White</li>
                                            <li data-value="rgb(100, 106, 105)">Charcoal</li>
                                            <li data-value="rgb(153, 153, 154)">Gray</li>
                                            <li data-value="rgb(189, 187, 187)">Ice Gray</li>
                                            <li data-value="rgb(255, 0, 145)">Hot Pink</li>
                                            <li data-value="rgb(255, 175, 190)">Pink</li>
                                            <li data-value="rgb(255, 140, 190)">Charity Pink</li>
                                            <li data-value="rgb(180, 70, 140)">Magenta</li>
                                            <li data-value="rgb(125, 45, 60)">Maroon</li>
                                            <li data-value="rgb(150, 0, 50)">Cardinal</li>
                                            <li data-value="rgb(200, 15, 40)">Red</li>
                                            <li data-value="rgb(250, 75, 15)">Orange</li>
                                            <li data-value="rgb(255, 130, 0)">Team Orange</li>
                                            <li data-value="rgb(255, 180, 25)">Athletic Gold</li>
                                            <li data-value="rgb(255, 200, 40)">Gold</li>
                                            <li data-value="rgb(255, 220, 0)">Yellow</li>
                                            <li class="Yello" data-value="rgb(250, 235, 95)">Lemon</li>
                                            <li data-value="rgb(140, 105, 35)">Old Gold</li>
                                            <li data-value="rgb(165, 225, 0)">Vibrant Lime</li>
                                            <li data-value="rgb(60, 165, 30)">Green</li>
                                            <li data-value="rgb(0, 105, 55)">Kelly</li>
                                            <li data-value="rgb(45, 80, 50)">Forest</li>
                                            <li data-value="rgb(0, 115, 120)">Teal</li>
                                            <li data-value="rgb(0, 155, 180)">Turquoise</li>
                                            <li data-value="rgb(35, 175, 240)">Sky Blue</li>
                                            <li data-value="rgb(145, 190, 235)">Baby Blue</li>
                                            <li data-value="rgb(0, 95, 160)">Blue</li>
                                            <li data-value="rgb(0, 60, 130)">Royal</li>
                                            <li data-value="rgb(0, 50, 90)">Navy</li>
                                            <li data-value="rgb(170, 125, 200)">Lavender</li>
                                            <li data-value="rgb(90, 50, 135)">Purple</li>
                                            <li data-value="rgb(100, 30, 100)">Plum</li>
                                            <li data-value="rgb(130, 80, 45)">Brown</li>
                                            <li data-value="rgb(205, 160, 115)">Sand</li>
                                            <li data-value="rgb(255, 190, 120)">Apricot</li>
                                            <div class="btn-grp">
                                                <a href="javascript: void(0)" id="imgReset" class="submit-btnResetColor">Reset</a>
                                                <a href="javascript: void(0)" class="submit-btnFontColor">Done</a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="input-wrapper">
                                <div class="border-row">
                                    <label>Upload Size<br> <small>Width x Height</small></label>
                                    <div class="scale-wid-height">
                                        <input type="text" id="imgWidthScale" value="1.0">in <b>X</b>
                                        <input type="text" id="imgHeightScale" value="1.0">in
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="back-imgEdit" style="display: none;">
                        <div class="top-edit-section">
                            <div class="center-text">
                                <input type="button" id="uploadCenterback" value="Move To Center">Center
                            </div>
                            <div class="flipText">
                                <ul>
                                    <li class="flipHoriz"><a href="javascript: void(0)">
                                            <img src="assests/images/flip-hori.png">
                                        </a></li>
                                    <li class="flipVert"><a href="javascript: void(0)">
                                            <img src="assests/images/flip-vert.png">
                                        </a></li>
                                </ul>Flip
                            </div>
                            <div class="text-rotation">
                                <label for="rotation"><span class="rotationNameText">Rotation</span>
                                    <input type="range" value="0" min="-180" max="180" id="image-rotate-back"><span id="rotationValue-back"><input
                                            type="text" value="0" id="rotateValImageBack"></span>
                                </label>
                            </div>
                        </div>
                        <div class="makeOneColor">
                            <div class="input-wrapper">
                                <div class="border-row">
                                    <label>Make One Color<small>Budget Friendly</small></label>
                                    <label class="switch">
                                        <input type="checkbox" id="makeOneColorBack">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-wrapper hide-colorActive">
                                <div class="border-row">
                                    <label>Remove Background Color</label>
                                    <label class="switch">
                                        <input type="checkbox" id="removeBackgroundBack">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="input-wrapper hide-colorActive">
                                <div class="border-row last-row">
                                    <label>Change Colors <small class="ChangeColorFound">
                                            <span class="colorFoundCount">1</span> Colors Found
                                        </small></label>
                                    <ul class="change-color-list"></ul>
                                    <div class="popupLike">
                                        <ul id="change-color-back" class="colorPalet">
                                            <li data-value="rgb(0,0,0)">Black</li>
                                            <li class="White" data-value="rgb(254, 254, 254)">White</li>
                                            <li data-value="rgb(100, 106, 105)">Charcoal</li>
                                            <li data-value="rgb(153, 153, 154)">Gray</li>
                                            <li data-value="rgb(189, 187, 187)">Ice Gray</li>
                                            <li data-value="rgb(255, 0, 145)">Hot Pink</li>
                                            <li data-value="rgb(255, 175, 190)">Pink</li>
                                            <li data-value="rgb(255, 140, 190)">Charity Pink</li>
                                            <li data-value="rgb(180, 70, 140)">Magenta</li>
                                            <li data-value="rgb(125, 45, 60)">Maroon</li>
                                            <li data-value="rgb(150, 0, 50)">Cardinal</li>
                                            <li data-value="rgb(200, 15, 40)">Red</li>
                                            <li data-value="rgb(250, 75, 15)">Orange</li>
                                            <li data-value="rgb(255, 130, 0)">Team Orange</li>
                                            <li data-value="rgb(255, 180, 25)">Athletic Gold</li>
                                            <li data-value="rgb(255, 200, 40)">Gold</li>
                                            <li data-value="rgb(255, 220, 0)">Yellow</li>
                                            <li class="Yello" data-value="rgb(250, 235, 95)">Lemon</li>
                                            <li data-value="rgb(140, 105, 35)">Old Gold</li>
                                            <li data-value="rgb(165, 225, 0)">Vibrant Lime</li>
                                            <li data-value="rgb(60, 165, 30)">Green</li>
                                            <li data-value="rgb(0, 105, 55)">Kelly</li>
                                            <li data-value="rgb(45, 80, 50)">Forest</li>
                                            <li data-value="rgb(0, 115, 120)">Teal</li>
                                            <li data-value="rgb(0, 155, 180)">Turquoise</li>
                                            <li data-value="rgb(35, 175, 240)">Sky Blue</li>
                                            <li data-value="rgb(145, 190, 235)">Baby Blue</li>
                                            <li data-value="rgb(0, 95, 160)">Blue</li>
                                            <li data-value="rgb(0, 60, 130)">Royal</li>
                                            <li data-value="rgb(0, 50, 90)">Navy</li>
                                            <li data-value="rgb(170, 125, 200)">Lavender</li>
                                            <li data-value="rgb(90, 50, 135)">Purple</li>
                                            <li data-value="rgb(100, 30, 100)">Plum</li>
                                            <li data-value="rgb(130, 80, 45)">Brown</li>
                                            <li data-value="rgb(205, 160, 115)">Sand</li>
                                            <li data-value="rgb(255, 190, 120)">Apricot</li>
                                            <div class="btn-grp">
                                                <a href="javascript: void(0)" id="imgResetBack" class="submit-btnResetColor">Reset</a>
                                                <a href="javascript: void(0)" class="submit-btnFontColor">Done</a>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="editing-tool-con" id="add-notes-opt">
                <div class="option-heading">
                    <span class="option-heading-text">Add Notes</span>
                    <a href="javascript: void(0)" class="close-option">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="add-notes-opt-inner">
                    <form action="">
                        <textarea name="" id=""></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <form id="form1">
            <input type="hidden" id="selectFile" name="selectFile" />
        </form>
    </div>
    <div class="bottom-control">
        <div class="bottom-control-left">
            <div class="save-design" onClick="download()">
                <a id="download" download="customid.png">Save</a>
            </div>
            <div class="change-product">
                <div class="acctual-product-image"></div>
                <div class="bottom-product-details">
                    <ul>


                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-control-right" onclick="buymask()">
            <a class="see-pricing" onclick="buymask()">$ See Pricing</a>
        </div>
    </div>
    <div class="canvas-output">
        <a href="javascript:void(0)" class="canvas-output-close">X</a>
        <div class="canvas-output-front">
            <canvas id="myCanvasExport" width="500" height="600"></canvas>
        </div>
       <!-- <div class="canvas-output-back">
            <canvas id="myCanvasExportBack" width="615" height="615"></canvas>
        </div>-->
        <div hidden>
            <img id="myImage" src="images/masks/plainmask.jpg" width="auto" height="auto">
        </div>
        <canvas id="downloadable"></canvas>
    </div>
    <form name="imgForm" id="imgForm" method="post" action="buycustommask.php">
    <input type="hidden" name="imgValue" id="imgValue">
    <input type="hidden" name="qty" value="1">
    <input type="hidden" name="id" value="4">
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="http://fabricjs.com/lib/fabric.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.20/fabric.min.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.selectric.js"></script>
    <script src="http://rawgit.com/bramstein/fontfaceobserver/master/fontfaceobserver.js"></script>
    <script>
        var canvas, curve, cImg, canvasBack, cTemp, canvasProduct, canvasBack, frontOutput, backOutput;
        var sWidth, sHeight;
        var out_frame;
        var imgCanvas;
        var mxHeight = 400;
        var mxWidth = 400;
        var mxHeightBack = 400;
        var mxWidthBack = 400;

        var filter = ['grayscale', 'invert', 'remove-color', 'sepia', 'brownie',
            'brightness', 'contrast', 'saturation', 'noise', 'vintage',
            'pixelate', 'blur', 'sharpen', 'emboss', 'technicolor',
            'polaroid', 'blend-color', 'gamma', 'kodachrome',
            'blackwhite', 'blend-image', 'hue', 'resize'
        ];

        function convertCanvasToImg() {
            imgCanvas = canvas.toDataURL("image/png"); // converting canvas to image
        }
        function getCanvasCat() {
            convertCanvasToImg();
            var divImg = '<div class="divImgCanvas"><img class="imgCanvasTemp"/></div>';
            $('.imgCat').empty();
            $('.imgCat').append(divImg);
            $(".imgCanvasTemp").attr("src", imgCanvas);
        }
        function addDeleteBtn(x, y) {
            $(".deleteBtn").remove();
            let btnLeft = x - 10;
            let btnTop = y - 10;
            let deleteBtn = '<a href="javascript: void(0)" class="deleteBtn" style="position:absolute;top:' + btnTop + 'px;left:' + btnLeft + 'px;cursor:pointer; "><i class="fa fa-times" aria-hidden="true"></i></a>';
            $("#front-view .canvas-container").append(deleteBtn);
        }
        function addDeleteBtnBack(x, y) {
            $(".deleteBtn").remove();
            let btnLeft = x - 10;
            let btnTop = y - 10;
            let deleteBtn = '<a href="javascript: void(0)" class="deleteBtn" style="position:absolute;top:' + btnTop + 'px;left:' + btnLeft + 'px;cursor:pointer; "><i class="fa fa-times" aria-hidden="true"></i></a>';
            $("#back-view .canvas-container").append(deleteBtn);
        }
        function download() {
            

            var download = document.getElementById("download");
            var image = document.getElementById("front").toDataURL("image/png")
                .replace("image/png", "image/octet-stream");
            download.setAttribute("href", image);
            //download.setAttribute("download","archive.png");
            }
        let front = $('#front-view').css('display');

        function buymask()
        {

            var img=document.getElementById("front").toDataURL("image/png")
                .replace("image/png", "image/octet-stream");

            document.getElementById("imgValue").value=img;
            document.getElementById("imgForm").submit();
        }
    </script>
    <script type="text/javascript" src="js/product-canvas.js"></script>
    <script type="text/javascript" src="js/tool-main.js"></script>
    <script type="text/javascript" src="js/tool-main-back.js"></script>
    <script type="text/javascript" src="js/addText.js"></script>
    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/font.js"></script>
    <script type="text/javascript" src="js/save-design.js"></script>
    <script type="text/javascript" src="js/canvasImgUpload.js"></script>
    <script type="text/javascript" src="js/canvasImg.js"></script>
    <script type="text/javascript" src="js/filedrag.js"></script>
    <script type="text/javascript" src="js/imageManipulation.js"></script>
    <script type="text/javascript" src="js/curvedText.js"></script>
</body>

</html>