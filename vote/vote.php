<!DOCTYPE html>
<html lang="en">
    <head>
        <title>2019 UVM CS Fair</title>
        <meta charset="utf-8">
        <meta name="author" content="Society of Women in Computer Science, Robert M. Erickson">
        <meta name="description" content="A Showcase of Student Projects held once a year in decemeber during the last week of classes. Students compete for prizes in several categories, best overall, best in class and my favorite random!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body id="vote"><div id="page-wrap"><nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

        <!-- mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ol class="nav navbar-nav">
                <li><a href="../index.php#home">Home</a></li><li><a href="../about.php">About</a></li><li><a href="../judges.php">Judges</a></li><li><a href="../sponsors.php">Sponsors</a></li><li><a href="../projects.php">Projects</a></li><li><a href="../schedule.php">Schedule</a></li><li><a href="../photos.php">Gallery</a></li>            </ol>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<header>
<div class="rotDate">2019</div>
    <span id="uvm-text">UVM | 
    February 12, 2019 | 1:10 PM to 4:20 PM</span>
    <span class="fancy-text"><a href="../index.php">CS Fair</a></span>
    <h1 class="page-title">A Showcase of Student Projects</h1>
</header>

<section id="main">

    <div id=voteForMe>
        <form action="/vote/vote.php" 
              method="post"
              id="frmRegister">

            <fieldset class="vote">

                <label>Voter: 
                    <input id ="txtNetID" name="txtNetID" class="element text medium netid " type="text" maxlength="255" value= "rerickso"  
                           onfocus="this.select()"  tabindex="20" 
                           >
                </label>


                <label>Project #: 
                    <input id ="pid" name="pid" class="element text medium netid 
                    " type="text" maxlength="3" value= "1"  
                           onfocus="this.select()"  tabindex="25" /></label>

                <label><span id="tv" class=" greenText"> Your Votes: 0</span><input type="hidden" id="vid" name="vid" value="0"></label><input type="submit" id="btnVote" name="btnSubmit" 
               value="Vote For Me" tabindex="991" class="button">
                             </fieldset>
                             </form>

                             <p class='smallText redText'>rerickso vote was invalid.<p class='smallText redText'>Sorry you cannot vote for your own project.</p><br>Project cannot receive your vote.</p></p><p><a href='../schedule.php#p1'>Return to Schedule</a></p></div> <!-- ends vote for me -->                         </section>


                         <aside id="votingStatus"><div class="row intro-row"><h3>Current Voting Stats</h3><p>0 Total votes.</p><p>The real question is how many of these votes are for your project?</p></div> <!-- row intro-row --></aside><footer class="col-md-12">
    <p>Event coordination provided by the Society of UVM Women in Computer Science</p>
    <p>CSS designed by students in CS 142 Jessica Lakritz, Brody Childs and John Mills</p>
    <p>University of Vermont, Computer Science Department, 351 Votey, (802) 656 - 3330</p>
    <p style="text-align: center;">Previous CS Fairs: 

 </p>
    <p style="float:right; font-size:50%;">[<a href="admin/admin.php">Admin</a>]</p>
</footer>
</div> <!-- page-wrap -->
</body>
</html>
                         </section>
                         </body>
                         </html>
