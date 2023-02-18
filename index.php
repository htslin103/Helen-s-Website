<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!--Title-->
        <title>Helen Lin's Portfolio</title>

        <!--Stylesheets -->
        <link rel="stylesheet" href="css/reboot.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/styles.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/bootstrap.js"></script>
    </head>

    <!--Navbar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Helen Lin</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href=#aboutMe>About Me</a></li>
            <li><a href=#proj0>DnD Creatures</a></li>
            <li><a href=#proj1>PHP project</a></li>
            <li><a href=#proj2>Android App with API</a></li>          
		  </ul>
        </div>
    </nav>
 
    <body>
        <!--Header-->
        <section class="hero-image">
        <div class="hero-text">
            <h1>Welcome to Helen's Website</h1>   
            <h4> A Junior Software Developer based in Calgary, Alberta </h2>	
        </div>
        </section>

        <div class="container body-content">
            <!--About me-->        
            <section id="aboutMe" class="section-id">
            <h1 class="headerText">About Me</h1>
            <p> I'm a Junior Software Developer currently working at C4i Training and Technology. Prior to that I was a software dev at a local startup called RONEsoft. 

            </br>
            I'm a graduate from SAIT's Object Oriented Software Development program. 
            </br>
            My passion from coding comes from being able to create applications that enhance the lives of the users.</br> </br>

            For my side projects I'm currently learning more about how to work with modern APIs while also working on React for the front end to continue to improve as a full stack developer.

            <div class="row">
                <div class="column">
                    <h2>Technical Skills</h2>
                        <ul style="list-style-type:disc;">
                            <li>HTML, CSS, C#, PHP, SQL, jQuery, JavaScript</li>
                            <li>Some Java and Python</li>
                        </ul>
                </div>

                <div class="column">            
                    <h2>Software</h2>
                        <ul style="list-style-type:disc;">
                            <li>Visual Studio, Entity Framework, SQL Server Management Studio, Oracle, ASP.Net, Windows Service</li>
                            <li>Git and Github</li>
                        </ul>
                </div>
            </div>
 
            </p>
            </section>

            <!--Project Sections-->

            <!--Proj 0 React/NodeJs/MongoDB atlas-->       
            <section id="proj0" class="section-id">    
            <h1 class="headerText">Current Side Project - DnD Creatures - React/NodeJs/MongoDB atlas</h1>              
                        <p>
                        My current passion project is a React/NodeJs/MongoDB atlas web app where users can look up DnD creatures
                        </p>
                        
                        <div>
                            <img src="img/DndCreatures.JPG" class="img-responsive" style="margin-top:30px">
                        </div>       
            </section>
            <!-- Proj 1 html/css php-->
            <section id="proj1" class="section-id">
            <h1 class="headerText">Project 1 - HTML/CSS and Php</h1>   
                        <p>
                        In a team of four, I created a HTML/CSS website with PHP backend.
                        The website allowed customers to view and book available packages, register as a customer and get in contact with a travel agent.
                        There was also an administrator log-in to look at customer information and edit their information.
                        </p>
                        
                        <div>
                            <img src="img/FrontPage1.png" class="img-responsive" style="margin-top:30px">
                        </div>       
                
                        <div>
                            <img src="img/CustomerRegistration.png" class="img-responsive" style="margin-top:30px">
                        </div>   
            </section>
            
            <!--Project 2-->
            <section id="proj2" class="section-id">
                <h1 class="headerText">Project-Java Desktop App, Android App connected using an API</h1>
                    
                        <p>
                        In a team of three, I created a Java Desktop app that allowed travel agents to edit customers information, products and suppliers.
                        The android application was connected to an API. The API was connected to a database using JSP. The app allowed customers to sign in and look at available packages.
                        </p>

                        <div>
                            <img src="img/AndroidDemo.png" class="img-responsive" style="margin-top:30px">
                        </div>

                        <div>
                            <img src="img/AndroidPart2.png" class="img-responsive" style="margin-top:30px">
                        </div>     
            </section>
            </div>
        </div>
    </body>
