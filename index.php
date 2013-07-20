<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>WebDev Club@DA-IICT</title>
    <meta name="description" content="The official wesite of WebDev club at DA-IICT">
    <meta name="author" content="Somsubhra">
    <!--[if lt IE 9]>
      <script src="js/cssfx.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/styles.css" class="cssfx">
    <link rel="stylesheet" type="text/css" href="css/jquery.modal.css" class="cssfx">
    <!-- end CSS-->
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->
    <script src="js/modernizr-2.0.6.min.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                <a href="#">
                    <span>WebDev Club</span>
                </a>
            </h1>
            <h2 id="event-info">
                <span class="location">DA-IICT, <span>Gandhinagar, India</span></span>
            </h2>
        </div>

        <div class="navcontainer">
            <nav class="primary">
                <a class="section about" href="#about">About</a>
                <a class="section join" href="#join">Join</a>
                <a class="section events" href="#events">Events</a>
                <a class="section planet" href="./planet/index.php">Planet</a>
                <a class="section projects" href="#projects">Projects</a>
                <a class="section members" href="#members">Community</a>
                <a class="section contact" href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <div id="container">
        <div id="foreground">
            <div id="wrapper">
                <div id="headline">
                    <h1>Welcome to <span>WebDev Club@DA-IICT</span></h1>
                    <p>The brief description of WebDev club goes here.</p>
                </div>

                <!--About section-->
                <section id="about">
                    <h2>About</h2>
                    <p>The About page of WebDev Club goes here...</p>
                </section>

                <!--Join section-->
                <section id="join">
                    <h2>Join</h2>
                    <p>The Join page of Webdev Club goes here...</p>
                </section>

                <!--Events section-->
                <section id="events">
                    <h2>Events</h2>
                    <p>The Events page of the WebDev Club goes here...</p>
                </section>

                <!--Projects section-->
                <section id="projects">
                    <h2>Projects</h2>
                    <p>The Projects page of the WebDev club goes here...</a>
                </section>

                <!--Members section-->
                <section id="members">
                    <h2>Community</h2>
                    <p>The community page of the WebDev club goes here...</p>
                </section>


                <!--Contact section-->
                <section id="contact">
                    <h2>Contact</h2>
                    <p>The Contact page of the WebDev club goes here...</p>
                </section>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.6.2.min.js"><\/script>')</script>

    <script defer src="js/jquery.modal.min.js"></script>
    <script>
        $(function(){
          $.fn.modal.defaults.zIndex= 10001;
        });
    </script>
      <!-- scripts concatenated and minified via ant build script-->
    <script defer src="js/plugins.min.js"></script>
    <script defer src="js/script.min.js"></script>
      <!-- end scripts-->


    <script> // Change UA-XXXXX-X to be your site's ID
        window._gaq = [['_setAccount','UA-26445173-2'],['_trackPageview'],['_trackPageLoadTime']];
        Modernizr.load({
          load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
        });
    </script>



    <!--[if lt IE 7 ]>
        <script src="js/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->

</body>
</html>
