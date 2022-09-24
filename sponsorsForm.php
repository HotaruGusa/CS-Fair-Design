<!DOCTYPE html>
<html lang="en">
    <head>
        <title>2019 UVM CS Fair</title>
        <meta charset="utf-8">
        <meta name="author" content="Society of Women in Computer Science, Robert M. Erickson">
        <meta name="description" content="A Showcase of Student Projects held once a year in decemeber during the last week of classes. Students compete for prizes in several categories, best overall, best in class and my favorite random!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/custom.css">

    </head>
    <body id="sponsorsForm"><div id="page-wrap"><nav class="navbar navbar-default" role="navigation">
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
                            <li><a href="index.php#home">Home</a></li><li><a href="about.php">About</a></li><li><a href="judges.php">Judges</a></li><li><a href="sponsors.php">Sponsors</a></li><li><a href="projects.php">Projects</a></li><li><a href="schedule.php">Schedule</a></li><li><a href="photos.php">Gallery</a></li>            </ol>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <header>
                <div class="rotDate">2019</div>
                <span id="uvm-text">UVM | 
                    February 12, 2019 | 1:10 PM to 4:20 PM</span>
                <span class="fancy-text"><a href="index.php">CS Fair</a></span>
                <h1 class="page-title">A Showcase of Student Projects</h1>
            </header>

            <section id="main">
                <div class="row">
                    <h1 class="page-title">Sponsorship Form</h1>
                    <hr/>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <h3>Information</h3>
                        <p>
                            Sponsors will have their company logos posted on the 
                            CS Fair website and will be given table space (if requested) at the Fair to 
                            display their company information and paraphernalia. Sponsors 
                            are encouraged to send at two or more representatives to act as 
                            a judges. Many sponsors send a person to just walk around. 
                            Sponsorship is free, but we do welcome donations of any amount. We cannot have the fair without help.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Process</h3>
                        <ol>
                            <li>Fill out required fields.</li>
                            <li>Submit form</li>
                            <li>Check mail and confirm sponsorship</li>
                            <li>We will contact you and approve your submission. At this point your data will be made  live on the web site.</li>
                            <li>We will send a link to update your information.</li>
                            <li>You can then update your judges and other information.</li>
                            <li>Join us at the Fair!</li>
                        </ol>   
                    </div>
                </div>
                <section id="errors" class="row"><h1>Please fix these mistakes:</h1><ol>
                        <li>Please enter your Company's Name</li>
                        <li>I'm sorry, I could not find your website. Please check the URL.</li>
                        <li>Please enter your representative's name</li>
                        <li>Please enter your contact Email Address</li>
                        <li>Please enter a phone number</li>
                    </ol>
                </section>
                <div class="row">
                    <div class="col-md-12">

                        <form action="/sponsorsForm.php"
                              enctype="multipart/form-data"
                              method="post"
                              id="frmRegister"
                              role="form">


                            <fieldset class="contact">
                                <legend>Company Information <span class="right gray font-size-small"><span class="red font-size-medium-large">*</span>required</span></legend>
                                <div id="contactWrapper">

                                    <div class="form-group  has-error mistake">
                                        <label class="required" for="txtCompanyName">Company Name <span class="red">*</span></label>
                                        <input id ="txtCompanyName"
                                               name="txtCompanyName"
                                               class="form-control mistake"
                                               type="text"
                                               maxlength="255"
                                               value=""
                                               placeholder="Enter your company name"
                                               autofocus
                                               onfocus="this.select()"
                                               tabindex="10">
                                    </div>

                                    <div class="form-group  has-error mistake">
                                        <label class="required" for="txtCompanySite">Company Website (http://www.example.com) <span class="red">*</span></label>
                                        <input id ="txtCompanySite"
                                               name="txtCompanySite"
                                               class="form-control mistake"
                                               type="text"
                                               maxlength="255"
                                               value="http://"
                                               placeholder="Enter your company's website URL"
                                               onfocus="this.select()"
                                               tabindex="20">

                                    </div>

                                    <div class="form-group ">
                                        <label for="imgCompanyLogo">Company Logo 
                                        </label>
                                        <input type='file' onchange="readCompURL(this);" tabindex="30" 
                                               class="element text large" 
                                               id="imgCompanyLogo"
                                               name="imgCompanyLogo">
                                        <img id="compLogo" src="#" alt="" style="width: 150px;">


                                        <input type='hidden' name='MAX_FILE_SIZE' value='90000000' >
                                    </div>

                                    <div class="form-group  has-error mistake">
                                        <label class="required" for="txtContactName">Contact Name (full name please) <span class="red">*</span></label>
                                        <input id ="txtContactName"
                                               name="txtContactName"
                                               class="form-control mistake"
                                               type="text"
                                               maxlength="255"
                                               value=""
                                               placeholder="Enter your contact's full name"
                                               onfocus="this.select()"
                                               tabindex="40">
                                    </div>

                                    <div class="form-group ">
                                        <label class="required" for="txtContactEmail">Contact Email <span class="red">*</span></label>
                                        <input id ="txtContactEmail"
                                               name="txtContactEmail"
                                               class="form-control mistake"
                                               type="email"
                                               maxlength="255"
                                               value=""
                                               placeholder="Enter your email address"
                                               onfocus="this.select()"
                                               tabindex="50">
                                    </div>

                                    <div class="form-group  has-error mistake">
                                        <label class="required" for="txtContactPhone">Contact Phone Number (xxx-xxx-xxxx) <span class="red">*</span></label>
                                        <input id ="txtContactPhone"
                                               name="txtContactPhone"
                                               class="form-control mistake"
                                               type="text"
                                               maxlength="255"
                                               value=""
                                               placeholder="Enter your phone number"
                                               onfocus="this.select()"
                                               tabindex="60">
                                    </div>

                                    <div class="form-group ">
                                        <label class="required" for="chkRequestTable">
                                            <input id ="chkRequestTable"
                                                   name="chkRequestTable"
                                                   class="form-control"
                                                   type="checkbox"                          
                                                   value="table" 
                                                   tabindex="65"> Request Table</label>
                                    </div>


                                    <fieldset class="sponsorship well">
                                        <legend>Donations Welcome</legend>

                                        <div class="form-group">
                                            <label for="lstSponshipLevel">Sponsorship Level <span class="red">*</span></label>
                                            <div class="sponshipLevels">
                                                <p>Catamount (1500 +)</p>
                                                <p>Gold (750 to 1499)</p>
                                                <p>Silver (250 to 749)</p>
                                                <p>Bronze (0 to 249)</p>
                                            </div> 
                                            <input id ="txtSponsorAmount"
                                                   class="form-control" 
                                                   name="txtSponserAmount" 
                                                   type="text" 
                                                   maxlength="255" 
                                                   value="0"
                                                   placeholder="Enter cash donation amount here"
                                                   onfocus="this.select()"
                                                   tabindex="75">

                                        </div>


                                        <!-- TODO make it clear and simplify this donation stuff -->

                                        <div class="form-group">
                                            <label><span class="me lead">Directions for a Tax-deductible Donation:</span><br>
                                                Make to check payable<br> 
                                                to: UVM<br> 
                                                memo: CS Fair<br>
                                                Mail to:<br>
                                                UVM Computer Science Department<br>
                                                CS Fair<br>
                                                33 Colchester Avenue<br>
                                                Burlington, VT 05405<br>
                                                <br>For questions call Penni at 802-656-3330.<br>
                                                <br>Credit Card Dontations are processed by UVM Foundation<br>
                                                specify “Computer Science Department” (Other option).<br>

                                                To: UVM Computer Science Department Gift Account <a href="http://uvmfoundation.org/">http://uvmfoundation.org/</a><br>
                                            </label>
                                        </div>

                                        <div class="form-group">


                                            <textarea id="txtItemDonations" 
                                                      name="txtItemDonations" 
                                                      class="form-control" 
                                                      placeholder="Enter any non-cash donations here ex: T-shirts, Begalbone."
                                                      tabindex="80"
                                                      onfocus="this.select()"></textarea>
                                        </div>

                                    </fieldset>

                                    <input type="hidden" name="key1" value="-1">
                                    <input type="hidden" name="key2" value="-1">

                                    <!-- </fieldset> extra? -->

                                    <fieldset class="contact judgesWrapper">
                                        <legend>Judges Information</legend>
                                        <p>Sponsors should send one or more (better :) representatives to be a judge for the CS Fair. They will be assigned to advanced or intermediate level judging unless someone requests to judge the beginner level.</p>
                                        <div id="judgesContactWrapper">
                                            <fieldset id="judge0" class="contact judges">
                                                <legend>First Judges Information</legend>

                                                <div id="judgesContactWrapper0">

                                                    <div class="form-group ">
                                                        <label for="txtJudgesFirstName0">First Name </label>
                                                        <input id ="txtJudgesFirstName0"
                                                               name="txtJudgesFirstName(0)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="257"
                                                               value=""
                                                               placeholder="Judges first name"
                                                               onfocus="this.select()"
                                                               tabindex="400">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesLastName0">Last Name </label>
                                                        <input id ="txtJudgesLastName0"
                                                               name="txtJudgesLastName(0)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Judges last name"
                                                               onfocus="this.select()"
                                                               tabindex="410">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesTitle0">Job Title </label>
                                                        <input id ="txtJudgesTitle0"
                                                               name="txtJudgesTitle(0)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Job title"
                                                               onfocus="this.select()"
                                                               tabindex="415">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgesPhoto0">Judge's Photo</label>
                                                        <input type='file' onchange='readJudge0URL(this);'                                                    name="txtJudgesPhoto0"
                                                               id ="txtJudgesPhoto0"
                                                               class="element text large"
                                                               tabindex="420">
                                                        <img id="j0Logo" src="#" alt=""  style="width: 150px;">   
                                                    </div>                           

                                                    <div class="form-group ">
                                                        <label for="txtJudgesEmail0">Judges Email (will not be posted)</label>
                                                        <input id ="txtJudgesEmail0"
                                                               name="txtJudgesEmail(0)"
                                                               class="form-control"
                                                               type="email"
                                                               maxlength="265"
                                                               value=""
                                                               placeholder="Email address"
                                                               onfocus="this.select()"
                                                               tabindex="430">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgeBio0" class="judgesbio">Bio</label>
                                                        <textarea class="form-control judgesbio" id="txtJudgeBio0" name="txtJudgeBio(0)" tabindex="450"
                                                                  onfocus="this.select()"></textarea>
                                                    </div>
                                                    <input type="button" class="btn btn-default" id="btnAdd0" value="+ Add Another Judge" tabindex="460" onclick="javascript:showNextJudge(0);">
                                                </div></fieldset>                                        <fieldset id="judge1" class="contact judges">
                                                <legend>Second Judges Information</legend>

                                                <div id="judgesContactWrapper1">

                                                    <div class="form-group ">
                                                        <label for="txtJudgesFirstName1">First Name </label>
                                                        <input id ="txtJudgesFirstName1"
                                                               name="txtJudgesFirstName(1)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="257"
                                                               value=""
                                                               placeholder="Judges first name"
                                                               onfocus="this.select()"
                                                               tabindex="500">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesLastName1">Last Name </label>
                                                        <input id ="txtJudgesLastName1"
                                                               name="txtJudgesLastName(1)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Judges last name"
                                                               onfocus="this.select()"
                                                               tabindex="510">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesTitle1">Job Title </label>
                                                        <input id ="txtJudgesTitle1"
                                                               name="txtJudgesTitle(1)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Job title"
                                                               onfocus="this.select()"
                                                               tabindex="515">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgesPhoto1">Judge's Photo</label>
                                                        <input type='file' onchange='readJudge1URL(this);'                                                    name="txtJudgesPhoto1"
                                                               id ="txtJudgesPhoto1"
                                                               class="element text large"
                                                               tabindex="520">
                                                        <img id="j1Logo" src="#" alt=""  style="width: 150px;">   
                                                    </div>                           

                                                    <div class="form-group ">
                                                        <label for="txtJudgesEmail1">Judges Email (will not be posted)</label>
                                                        <input id ="txtJudgesEmail1"
                                                               name="txtJudgesEmail(1)"
                                                               class="form-control"
                                                               type="email"
                                                               maxlength="265"
                                                               value=""
                                                               placeholder="Email address"
                                                               onfocus="this.select()"
                                                               tabindex="530">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgeBio1" class="judgesbio">Bio</label>
                                                        <textarea class="form-control judgesbio" id="txtJudgeBio1" name="txtJudgeBio(1)" tabindex="550"
                                                                  onfocus="this.select()"></textarea>
                                                    </div>
                                                    <input type="button" class="btn btn-default" id="btnAdd1" value="+ Add Another Judge" tabindex="560" onclick="javascript:showNextJudge(1);">
                                                </div></fieldset>                                        <fieldset id="judge2" class="contact judges">
                                                <legend>Third Judges Information</legend>

                                                <div id="judgesContactWrapper2">

                                                    <div class="form-group ">
                                                        <label for="txtJudgesFirstName2">First Name </label>
                                                        <input id ="txtJudgesFirstName2"
                                                               name="txtJudgesFirstName(2)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="257"
                                                               value=""
                                                               placeholder="Judges first name"
                                                               onfocus="this.select()"
                                                               tabindex="600">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesLastName2">Last Name </label>
                                                        <input id ="txtJudgesLastName2"
                                                               name="txtJudgesLastName(2)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Judges last name"
                                                               onfocus="this.select()"
                                                               tabindex="610">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesTitle2">Job Title </label>
                                                        <input id ="txtJudgesTitle2"
                                                               name="txtJudgesTitle(2)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Job title"
                                                               onfocus="this.select()"
                                                               tabindex="615">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgesPhoto2">Judge's Photo</label>
                                                        <input type='file' onchange='readJudge2URL(this);'                                                    name="txtJudgesPhoto2"
                                                               id ="txtJudgesPhoto2"
                                                               class="element text large"
                                                               tabindex="620">
                                                        <img id="j2Logo" src="#" alt=""  style="width: 150px;">   
                                                    </div>                           

                                                    <div class="form-group ">
                                                        <label for="txtJudgesEmail2">Judges Email (will not be posted)</label>
                                                        <input id ="txtJudgesEmail2"
                                                               name="txtJudgesEmail(2)"
                                                               class="form-control"
                                                               type="email"
                                                               maxlength="265"
                                                               value=""
                                                               placeholder="Email address"
                                                               onfocus="this.select()"
                                                               tabindex="630">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgeBio2" class="judgesbio">Bio</label>
                                                        <textarea class="form-control judgesbio" id="txtJudgeBio2" name="txtJudgeBio(2)" tabindex="650"
                                                                  onfocus="this.select()"></textarea>
                                                    </div>
                                                    <input type="button" class="btn btn-default" id="btnAdd2" value="+ Add Another Judge" tabindex="660" onclick="javascript:showNextJudge(2);">
                                                </div></fieldset>                                        <fieldset id="judge3" class="contact judges">
                                                <legend>Fourth Judges Information</legend>

                                                <div id="judgesContactWrapper3">

                                                    <div class="form-group ">
                                                        <label for="txtJudgesFirstName3">First Name </label>
                                                        <input id ="txtJudgesFirstName3"
                                                               name="txtJudgesFirstName(3)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="257"
                                                               value=""
                                                               placeholder="Judges first name"
                                                               onfocus="this.select()"
                                                               tabindex="700">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesLastName3">Last Name </label>
                                                        <input id ="txtJudgesLastName3"
                                                               name="txtJudgesLastName(3)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Judges last name"
                                                               onfocus="this.select()"
                                                               tabindex="710">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesTitle3">Job Title </label>
                                                        <input id ="txtJudgesTitle3"
                                                               name="txtJudgesTitle(3)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Job title"
                                                               onfocus="this.select()"
                                                               tabindex="715">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgesPhoto3">Judge's Photo</label>
                                                        <input type='file' onchange='readJudge3URL(this);'                                                    name="txtJudgesPhoto3"
                                                               id ="txtJudgesPhoto3"
                                                               class="element text large"
                                                               tabindex="720">
                                                        <img id="j3Logo" src="#" alt=""  style="width: 150px;">   
                                                    </div>                           

                                                    <div class="form-group ">
                                                        <label for="txtJudgesEmail3">Judges Email (will not be posted)</label>
                                                        <input id ="txtJudgesEmail3"
                                                               name="txtJudgesEmail(3)"
                                                               class="form-control"
                                                               type="email"
                                                               maxlength="265"
                                                               value=""
                                                               placeholder="Email address"
                                                               onfocus="this.select()"
                                                               tabindex="730">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgeBio3" class="judgesbio">Bio</label>
                                                        <textarea class="form-control judgesbio" id="txtJudgeBio3" name="txtJudgeBio(3)" tabindex="750"
                                                                  onfocus="this.select()"></textarea>
                                                    </div>
                                                    <input type="button" class="btn btn-default" id="btnAdd3" value="+ Add Another Judge" tabindex="760" onclick="javascript:showNextJudge(3);">
                                                </div></fieldset>                                        <fieldset id="judge4" class="contact judges">
                                                <legend>Fifth Judges Information</legend>

                                                <div id="judgesContactWrapper4">

                                                    <div class="form-group ">
                                                        <label for="txtJudgesFirstName4">First Name </label>
                                                        <input id ="txtJudgesFirstName4"
                                                               name="txtJudgesFirstName(4)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="257"
                                                               value=""
                                                               placeholder="Judges first name"
                                                               onfocus="this.select()"
                                                               tabindex="800">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesLastName4">Last Name </label>
                                                        <input id ="txtJudgesLastName4"
                                                               name="txtJudgesLastName(4)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Judges last name"
                                                               onfocus="this.select()"
                                                               tabindex="810">
                                                    </div>


                                                    <div class="form-group ">
                                                        <label for="txtJudgesTitle4">Job Title </label>
                                                        <input id ="txtJudgesTitle4"
                                                               name="txtJudgesTitle(4)"
                                                               class="form-control"
                                                               type="text"
                                                               maxlength="258"
                                                               value=""
                                                               placeholder="Job title"
                                                               onfocus="this.select()"
                                                               tabindex="815">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgesPhoto4">Judge's Photo</label>
                                                        <input type='file' onchange='readJudge4URL(this);'                                                    name="txtJudgesPhoto4"
                                                               id ="txtJudgesPhoto4"
                                                               class="element text large"
                                                               tabindex="820">
                                                        <img id="j4Logo" src="#" alt=""  style="width: 150px;">   
                                                    </div>                           

                                                    <div class="form-group ">
                                                        <label for="txtJudgesEmail4">Judges Email (will not be posted)</label>
                                                        <input id ="txtJudgesEmail4"
                                                               name="txtJudgesEmail(4)"
                                                               class="form-control"
                                                               type="email"
                                                               maxlength="265"
                                                               value=""
                                                               placeholder="Email address"
                                                               onfocus="this.select()"
                                                               tabindex="830">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="txtJudgeBio4" class="judgesbio">Bio</label>
                                                        <textarea class="form-control judgesbio" id="txtJudgeBio4" name="txtJudgeBio(4)" tabindex="850"
                                                                  onfocus="this.select()"></textarea>
                                                    </div>
                                                </div></fieldset>                                        </div>
                                    </fieldset>



                                    <fieldset class="buttons">
                                        <legend>After receiving your submission the Computer
                                            Science Department will be in contact with you.</legend>

                                        <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" tabindex="991" class="button btn btn-primary btn-block btn-lg">
                                    </fieldset>

                                </div>
                            </fieldset> <!-- contact wrapper -->
                        </form>
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

                <script type="text/javascript">

                    /* should be seperate file see register/register.php  where we use it again */
                    function readCompURL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#compLogo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge0URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j0Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge1URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j1Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge2URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j2Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge3URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j3Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge4URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j4Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    function readJudge5URL(input) {
                        if (input.files && input.files[0])
                        {
                            var reader = new FileReader();
                            reader.onload = function(e)
                            {
                                $('#j5Logo')
                                        .attr('src', e.target.result)
                                        .width(150);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                </script>
                <footer class="col-md-12">
                    <p>Event coordination provided by the Society of UVM Women in Computer Science</p>
                    <p>CSS designed by students in CS 142 Jessica Lakritz, Brody Childs and John Mills</p>
                    <p>University of Vermont, Computer Science Department, 351 Votey, (802) 656 - 3330</p>
                    <p style="text-align: center;">Previous CS Fairs: 

                        <a href="//csfair.w3.uvm.edu/2013">2013</a>  | <a href="//csfair.w3.uvm.edu/2014">2014</a>  | <a href="//csfair.w3.uvm.edu/2015">2015</a>  | <a href="//csfair.w3.uvm.edu/2016">2016</a>  | <a href="//csfair.w3.uvm.edu/2017">2017</a>  | <a href="//csfair.w3.uvm.edu/2018">2018</a> </p>
                    <p style="float:right; font-size:50%;">[<a href="admin/admin.php">Admin</a>]</p>
                </footer>
        </div> <!-- page-wrap -->
    </body>
</html>
