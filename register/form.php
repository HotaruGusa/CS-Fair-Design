<!DOCTYPE html>
<html lang="en">
    <head>
        <title>2018 UVM CS Fair</title>
        <meta charset="utf-8">
        <meta name="author" content="Society of Women in Computer Science, Robert M. Erickson">
        <meta name="description" content="A Showcase of Student Projects held once a year in decemeber during the last week of classes. Students compete for prizes in several categories, best overall, best in class and my favorite random!">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body id="form"><div id="page-wrap"><nav class="navbar navbar-default" role="navigation">
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
    December 6, 2019 | 1:10 PM to 4:20 PM</span>
    <span class="fancy-text"><a href="../index.php">CS Fair</a></span>
    <h1 class="page-title">A Showcase of Student Projects</h1>
</header>

<section id="main">
    <div class="row">
        <div class="col-md-8">
<div id="errors"><h2>Please correct the following mistakes on your form</h2><ol><li>Please enter your Project Name</li>
<li>Please enter a project description.</li>
<li>Please enter at least one course this project is related to.</li>
<li>Please select a Time slot to present.</li>
</ol></div>
                    <form action="/register/form.php"
                          enctype="multipart/form-data"
                          method="post"
                          id="frmRegister" role="form">

                        <fieldset class="contact">
                            <legend>Contact Information</legend>
                            <div class="form-group">
                                <input type="hidden" name="txtProjectId" value="-1">

                                <label class="required" for="txtProjectName">Project Name </label>

                                <input id ="txtProjectName" 
                                       name="txtProjectName" 

                                       class="form-control element text medium mistake" 
                                       type="text" 
                                       maxlength="255" 
                                       value="" 
                                       placeholder="enter your project name" 
                                       autofocus 
                                       onfocus="this.select()" 
                                       tabindex="10"> 
                            </div>
                                                        <div class="form-group">
                                <label>Your UVM Net ID</label>
                                <input id ="txtNetID" name="txtNetID" class="form-control element text medium netid " type="text" maxlength="255" value= "rerickso"  
                                       onfocus="this.select()"  tabindex="11" disabled/>
                            </div>
                            <div class="form-group">
                                <label class="tshirt">T-shirt Size  </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="xs" tabindex="12"            
                                           > XS 
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="s" tabindex="13"            
                                           > S
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="m" tabindex="14"            
                                            checked > M
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="l" tabindex="15"            
                                           > L
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="xl" tabindex="16"            
                                           > XL
                                </label>
                                <label class="checkbox-inline">
                                    <input type="radio" name="radTShirt(0)" value="xxl" tabindex="17"            
                                           > XXL
                                </label>
                            </div>

                            <div id="group1" class="form-group group1"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(1)" type="text" id="netID1" class="form-control element text medium netid" maxlength="255" value="" tabindex="19" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(1);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="xs" tabindex="20"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="s" tabindex="21"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="m" tabindex="22" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="l" tabindex="23"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="xl" tabindex="24"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(1)" value="xxl" tabindex="24"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd1" value="+ Add Another Member" tabindex="25" onclick="javascript:showNextGroup(1);">
</div>
<div id="group2" class="form-group group2"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(2)" type="text" id="netID2" class="form-control element text medium netid" maxlength="255" value="" tabindex="26" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(2);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="xs" tabindex="27"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="s" tabindex="28"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="m" tabindex="29" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="l" tabindex="30"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="xl" tabindex="31"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(2)" value="xxl" tabindex="31"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd2" value="+ Add Another Member" tabindex="32" onclick="javascript:showNextGroup(2);">
</div>
<div id="group3" class="form-group group3"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(3)" type="text" id="netID3" class="form-control element text medium netid" maxlength="255" value="" tabindex="33" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(3);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="xs" tabindex="34"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="s" tabindex="35"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="m" tabindex="36" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="l" tabindex="37"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="xl" tabindex="38"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(3)" value="xxl" tabindex="38"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd3" value="+ Add Another Member" tabindex="39" onclick="javascript:showNextGroup(3);">
</div>
<div id="group4" class="form-group group4"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(4)" type="text" id="netID4" class="form-control element text medium netid" maxlength="255" value="" tabindex="40" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(4);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="xs" tabindex="41"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="s" tabindex="42"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="m" tabindex="43" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="l" tabindex="44"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="xl" tabindex="45"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(4)" value="xxl" tabindex="45"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd4" value="+ Add Another Member" tabindex="46" onclick="javascript:showNextGroup(4);">
</div>
<div id="group5" class="form-group group5"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(5)" type="text" id="netID5" class="form-control element text medium netid" maxlength="255" value="" tabindex="47" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(5);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="xs" tabindex="48"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="s" tabindex="49"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="m" tabindex="50" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="l" tabindex="51"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="xl" tabindex="52"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(5)" value="xxl" tabindex="52"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd5" value="+ Add Another Member" tabindex="53" onclick="javascript:showNextGroup(5);">
</div>
<div id="group6" class="form-group group6"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(6)" type="text" id="netID6" class="form-control element text medium netid" maxlength="255" value="" tabindex="54" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(6);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="xs" tabindex="55"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="s" tabindex="56"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="m" tabindex="57" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="l" tabindex="58"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="xl" tabindex="59"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(6)" value="xxl" tabindex="59"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd6" value="+ Add Another Member" tabindex="60" onclick="javascript:showNextGroup(6);">
</div>
<div id="group7" class="form-group group7"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(7)" type="text" id="netID7" class="form-control element text medium netid" maxlength="255" value="" tabindex="61" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(7);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="xs" tabindex="62"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="s" tabindex="63"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="m" tabindex="64" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="l" tabindex="65"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="xl" tabindex="66"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(7)" value="xxl" tabindex="66"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd7" value="+ Add Another Member" tabindex="67" onclick="javascript:showNextGroup(7);">
</div>
<div id="group8" class="form-group group8"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(8)" type="text" id="netID8" class="form-control element text medium netid" maxlength="255" value="" tabindex="68" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(8);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="xs" tabindex="69"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="s" tabindex="70"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="m" tabindex="71" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="l" tabindex="72"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="xl" tabindex="73"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(8)" value="xxl" tabindex="73"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd8" value="+ Add Another Member" tabindex="74" onclick="javascript:showNextGroup(8);">
</div>
<div id="group9" class="form-group group9"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(9)" type="text" id="netID9" class="form-control element text medium netid" maxlength="255" value="" tabindex="75" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(9);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="xs" tabindex="76"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="s" tabindex="77"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="m" tabindex="78" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="l" tabindex="79"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="xl" tabindex="80"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(9)" value="xxl" tabindex="80"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd9" value="+ Add Another Member" tabindex="81" onclick="javascript:showNextGroup(9);">
</div>
<div id="group10" class="form-group group10"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(10)" type="text" id="netID10" class="form-control element text medium netid" maxlength="255" value="" tabindex="82" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(10);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="xs" tabindex="83"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="s" tabindex="84"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="m" tabindex="85" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="l" tabindex="86"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="xl" tabindex="87"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(10)" value="xxl" tabindex="87"> XXL</label>
</div><input type="button" class="btn btn-default"  id="btnAdd10" value="+ Add Another Member" tabindex="88" onclick="javascript:showNextGroup(10);">
</div>
<div id="group11" class="form-group group11"><div class="form-group"><p>Your partner's detail (if needed)</p><input name="netID(11)" type="text" id="netID11" class="form-control element text medium netid" maxlength="255" value="" tabindex="89" placeholder="group member uvm net id if you have one"  onfocus="this.select()"  
            onchange="javascript:showNextGroup(11);"></div>
<div class="form-group"><label class="tshirt">T-shirt Size</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="xs" tabindex="90"> XS</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="s" tabindex="91"> S</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="m" tabindex="92" checked > M</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="l" tabindex="93"> L</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="xl" tabindex="94"> XL</label>
<label class="checkbox-inline"><input type="radio"  name="radTShirt(11)" value="xxl" tabindex="94"> XXL</label>
</div></div>

                        </fieldset> 

                        <fieldset class="details">

                            <legend>Project Details</legend>
                            <div class="form-group">

                                
<fieldset  class="listbox">
<label class="required" for="lstCategory">Judge in Category </label>
<select id="lstCategory" onChange="loadXMLDoc('../lib/is_timeslot_open.php', 1, this.value);"
name="lstCategory" tabindex="96" >

<option value="6">Research Projects  (independent research projects e.g. part of thesis or dissertation)</option>

<option  selected value="1">Advanced Projects (CS 2xx/3xx level)</option>

<option value="2">Intermediate Projects (CS 1xx level, other than web)</option>

<option value="3">Intermediate Web Design (CS 142 or 148 level)</option>

<option value="4">Beginner Programming (CS 21 level)</option>

<option value="5">Beginner Web Design  (CS 8 level)</option>

</select>
</fieldset>

                                <label class="required" for="txtDescription">Project Description</label>

                                <br> <!-- not enough time to fix css -->
                                <textarea id="txtDescription" name="txtDescription" class="form-control element textarea large mistake"  onfocus="this.select()" tabindex="97" placeholder="Enter a description for your project."></textarea> 
                            </div>
                            <div class="form-group">

                                <label class="required" for="txtCourses">Course(s) this project is for:</label>
                                <br> <!-- not enough time to fix css -->
                                <textarea id="txtCourses" name="txtCourses" class="form-control element textarea large mistake"  placeholder="Enter the course the project is for or list the courses that have had a direct impact on this project (ex: CS 008 and CS 142 helped me expand this project)" onfocus="this.select()" tabindex="98"></textarea> 
                            </div>
                        </fieldset>
                        <fieldset id="timeSlots" class="timeconflict"></fieldset>                        <fieldset id='optional'>
                            <div class="form-group">
                                <legend>Optional information</legend>

                                <label for="txtWebsite">Project Website (http://www.uvm.edu/~rerickso/)</label>
                                <br> <!-- not enough time to fix css -->

                                <input id ="txtWebsite" name="txtWebsite" class="form-control element text large" type="text" maxlength="255" value="" placeholder="enter the url to your project" onfocus="this.select()"  tabindex="99"/>
                            </div>

                            <!-- 
                            not working on upload unknown error cannot access folder most likley need to move to database
                            <div class="form-group">
                                   <label for="imgScreenShot">Image or Screen Shot of Project:</label>
                                   <input type='file' onchange="readCompURL(this);" tabindex="" 
                                          class="element text large" 
                                          id="imgScreenShot"
                                          name="imgScreenShot">
                                   <img id="screenShot" src="#" alt="">
                                   <input type='hidden' name='MAX_FILE_SIZE' value='90000000' >
                                                           </div>-->
                        </fieldset> 


                        <fieldset class="buttons">

                            <input type="submit" id="btnSubmit" name="btnSubmit" value="Register" tabindex="100" class="button btn btn-primary btn-block btn-lg">

                                                                                                                                                                                                                                                             <!--   <input type="reset" id="butReset" name="butReset" value="Reset Form" tabindex="265" class="button" onclick="reSetForm()" >
                            -->
                        </fieldset>                    

                    </form>

                    
        </div> <!-- ends col-md-8 -->
        <div class="col-md-4 sidebar">
            <h2>Rules</h2>
<ol>
    <li>All Participants must have been enrolled in a Computer Science 
        course at UVM or be an active CS or Data Science, Major or Minor during the 2019 calendar year (Jan to Dec).</li>
    <li>All Participants must be currently enrolled as a student in the semester the CS Fair is being held</li>
    <li>Projects
        <ul>
            <li>Group or individual projects are allowed.</li>
            <!--<li>You may enter more than one project.</li>-->
          <li>Course projects are allowed (the more unique they are from your classmates' the higher your chances of getting in and winning).</li>
            <li>Non course projects are highly encouraged  (i.e., something you did on your own).</li>
            <li>You may enter more than one project but you cannot present more than one project in a time slot. It is your responsibility to confirm you have not been assigned to present more than one project at a time.</li>
            <li>Registration does not guarantee project will be accepted.</li>
        </ul>
    </li>
    <li>Code should be original or clearly documented if code is not yours.</li>
    <li>All entries must be present at their booth. We will provide space on a table, but you need to provide a laptop (with a good battery power should be available) and/or other display (e.g., poster).</li>
    <li>You are eligible to win only one competitive prize, you may forfeit a lower prize.</li>
    <li>Prize amounts may be reduced when there are less than 15 projects in a category.</li>
    <li>Unclaimed prizes will be forfeited after one week after the fair.</li>
    <li>Monetary prizes will be in the form of UVM gift card. Gift cards will be ready for pick up the week after the fair from the CS deptartment office.</li>
    <li>UVM monetary <a target="_blank" href="http://www.uvm.edu/policies/acct/prizes.pdf">prize policy</a> and <a target="_blank" href="http://www.uvm.edu/policies/acct/scholarships.pdf">scholarship policy</a>.
    </li>
    <li>All entries allow us to use photos for promotional material.</li>
    <li>All entries must be received by November 8, 2019 in 
        order to receive a t-shirt. T-Shirts not picked up by December 3, 2019 are forfeited to a first come first serve.</li>
    
    <li>Violation of the rules will result in disqualification.</li>
</ol>
        </div>
    </div> <!-- ends row -->
</section> <!-- ide main -->
</section> <!-- page wrap in top .php -->

<footer class="col-md-12">
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
<script type="text/javascript">
    /* should be seperate file see sponsorForm.php  where we use it again */
    function readCompURL(input) {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#screenShot')
                        .attr('src', e.target.result)
                        .width(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

loadXMLDoc('../lib/is_timeslot_open.php', 1, document.getElementById("lstCategory").value);</script>

</body>
</html>
