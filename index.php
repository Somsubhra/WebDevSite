<?php
    require_once("./php/contents.php");
?>
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
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_floating_style addthis_32x32_style" style="left:0px;top:300px;background-color:#555555;">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_pinterest_share"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_compact"></a>
</div>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
<!-- AddThis Button END -->
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
                <a href="https://github.com/ClubWebDev">
                <img src="img/git.png" style="width:30px; height: 30px;">
                </a>
                <a href="https://groups.google.com/forum/#!forum/clubwebdev">
                <img src="img/forum.png" style="width:30px; height: 30px;">
                </a>
            </nav>
        </div>
    </header>

    <div id="container">
        <div id="foreground">
            <div id="wrapper">
                <div id="headline">
                    <h1>Welcome to <span>WebDev Club@DA-IICT</span></h1>
                    <p><?php
                        if($tag_content){
                            echo($tag_content['content']);
                        }
                     ?></p>
                </div>

                <!--About section-->
                <section id="about">
                    <h2>About</h2>
                    <div>
                        <h3><?php 
                        if($about_content){
                            echo($about_content['content']);
                        }
                        ?></h3>
                    </div>
                </section>

                <!--Join section-->
                <section id="join">
                    <h2>Join</h2>
                    <h3>To join us at WebDev club fill in the details below</h3>
                    <form id="joinform" method="post" action="php/join.php">
                        <br/><br/>

                        <input type="text" id="name" name="name" placeholder="Enter you name here"></input>
                        <br/>
                        <br/>
                        <input type="email" id="email" name="email" placeholder="Enter your non-DA-IICT email ID here">
                        <br/><br/>
                        <input type="text" id="daiictid" name="daiictid" placeholder="Enter your DA-IICT ID here">
                        <br/><br/>
                        <input type="submit" value="Join!">
                    </form>
                </section>

                <!--Events section-->
                <section id="events">
                    <h2>Events</h2>
                    <?php
                    if($event_content){
                        while($result = mysql_fetch_assoc($event_content)){
                            echo("<div class='schedule speaker'>");
                            echo("<h4>".$result['date']." ".$result['time']."</h4>");
                            echo("<h3>".$result['topic']." <span>");
                            echo($result['speaker']."</span></h3></div>");
                        }}
                    ?>
                </section>

                <!--Projects section-->
                <section id="projects">
                    <h2>Projects</h2>
                    <?php
                        if($project_content){
                            while($result = mysql_fetch_assoc($project_content)){
                                echo("<div class='project'>");
                                echo("<h4>".$result['name']."</h4>");
                                echo("<h3><span>".$result['description']."</span></h3></div>");
                            }
                        }
                    ?>
                </section>

                <!--Members section-->
                <section id="members">
                    <h2>Community</h2>
                    <?php
                        if($member_content){
                            while($result = mysql_fetch_assoc($member_content)){
                                echo("<div class='member'>");
                                echo("<h4>".$result['position']."</h4>");
                                echo("<h3><span>".$result['name']."</span></h3></div>");
                            }
                        }
                    ?>
                </section>


                <!--Contact section-->
                <section id="contact">
                    <h2>Contact</h2>
                    <h3>The official IRC Channel is #webdev@daiict on irc.freenode.net.</h3>
		    <br/>
		    <h3>The public mailing list is <a href="mailto:clubwebdex@googlegroups.com">clubwebdev@googlegroups.com</a></h3>
                    <br/>
                    <h3>You could also drop a mail at <a href="mailto:clubwebdev@gmail.com">clubwebdev@gmail.com</a></h3>
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
