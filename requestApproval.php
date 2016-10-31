<?php
  $headerStringValue = $_REQUEST['key'];

  $nameOfFile = "data/". $headerStringValue . ".txt";
  $userFile = fopen($nameOfFile,"r") or die ("Error, file could not be opened or does not exist");
  $contents = fread($userFile, filesize($nameOfFile));
  $varData = explode(",",$contents);

  $name = $varData[0];
  $id = $varData[1];
  $advisor = $varData[2];
  $year = $varData[3];
  $quarter = $varData[4];
  $dept = $varData[5];
  $userType = $varData[6];
  $major = $varData[7];
  $percentFTE = $varData[8];
  $fundSrc = $varData[9];
  $fundDept = $varData[10];
  $pgmCode = $varData[11];
  $activity = $varData[12];
  $class = $varData[13];
  $projId = $varData[14];
  $courseId1 = $varData[15];
  $courseTitle1 = $varData[16];
  $numCredits1 = $varData[17];
  $courseId2 = $varData[18];
  $courseTitle2 = $varData[19];
  $numCredits2 = $varData[20];
  $courseId3 = $varData[21];
  $courseTitle3 = $varData[22];
  $numCredits3 = $varData[23];
  $courseId4 = $varData[24];
  $courseTitle4 = $varData[25];
  $numCredits4 = $varData[26];
  $courseId5 = $varData[27];
  $courseTitle5 = $varData[28];
  $numCredits5 = $varData[29];
  $courseId6 = $varData[30];
  $courseTitle6 = $varData[31];
  $numCredits6 = $varData[32];
  $email1 = $varData[33];
  $email2 = $varData[34];
  $email3 = $varData[35];
  $email4 = $varData[36];
  $email5 = $varData[37];

  fclose($userFile);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Tuition and Fees Payment Authorization for Graduate Students</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <meta name="key" content="<?php echo $headerStringValue ?>"/>

    <link href="css/request.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">
      <div class="col-xs-12">
        <h1>Tuition and Fees Payment Authorization for Graduate Students</h1>
        <p class="lead">Santa Clara University | School of Engineering</p>
      </div>

      <div class="col-xs-12">
        <p>Hello, <?php echo $name ?> requests approval for the information listed below. Please review the provided info, insert the name of the next recipient for the form, and either reject or accept the information.</p>
      </div>
      <form id="form" name="form">
        <div class="form-group col-xs-12 col-sm-4">
          <label for="nameInput">Name</label>
          <input type="text" class="form-control" id="nameInput" placeholder="" value="<?php echo $name ?>" disabled>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="idInput">SCU ID</label>
          <input type="text" class="form-control" id="idInput" placeholder="" value="<?php echo $id ?>" disabled>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="advisorInput">Advisor</label>
          <input type="text" class="form-control" id="advisorInput" placeholder="" value="<?php echo $advisor ?>" disabled>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="yearInput">Academic Year</label>
          <input type="text" class="form-control" id="yearInput" placeholder="" value="<?php echo $year ?>" disabled>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="quarterInput">Quarter</label>
          <input type="text" class="form-control" id="quarterInput" placeholder="" value="<?php echo $quarter ?>" disabled>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="deptProgInput">Hiring Department or Program</label>
          <input type="text" class="form-control" id="deptProgInput" placeholder="" value="<?php echo $dept ?>" disabled>
        </div>

        <div class="form-group col-xs-12 col-sm-4">
          <label for="radio-inline">Role:&nbsp;</label>
          <div class="radios">
            <?php
              if ($userType == "ta")
              {
                echo("<div class=\"radio-inline\">
                      <label><input type=\"radio\" name=\"roleRadio\" onclick=\"handleRadioClick(this);\" value=\"ta\" checked disabled>TA</label>
                    </div>
                    <div class=\"radio-inline\">
                      <label><input type=\"radio\" name=\"roleRadio\" onclick=\"handleRadioClick(this);\" value=\"ra\" disabled>RA</label>
                    </div>
                  ");
              }
              else
              {
                echo("<div class=\"radio-inline\">
                      <label><input type=\"radio\" name=\"roleRadio\" onclick=\"handleRadioClick(this);\" value=\"ta\" disabled>TA</label>
                    </div>
                    <div class=\"radio-inline\">
                      <label><input type=\"radio\" name=\"roleRadio\" onclick=\"handleRadioClick(this);\" value=\"ra\" checked disabled>RA</label>
                    </div>
                  ");
              }
            ?>
            
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="majorSelect">Major:</label>
          <select class="form-control" id="majorSelect" disabled>
            <option disabled selected><?php echo $major ?></option>
          </select>
        </div>
        <div class="form-group col-xs-12 col-sm-4">
          <label for="emailInput">Email</label>
          <input type="text" class="form-control" id="sEmailInput" placeholder="" value="<?php echo $email1?>" disabled>
        </div>
        <?php
          echo("<div id=\"taPercentFTE\">
          <div class=\"form-group col-xs-12 col-sm-4\">");
          if ($userType == "ta")
          {
            echo("<label for=\"radio-inline\">Percent FTE Appointment:&nbsp;</label>
            <div class=\"radios\">");
             
                if ($percentFTE == "33.3")
                {
                  echo("<div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"33.3\" checked disabled>33.3%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"66.6\" disabled>66.6%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"100\" disabled>100%</label>
                      </div>"
                  );
                }
                else if ($percentFTE == "66.6")
                {
                    echo("<div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"33.3\" disabled>33.3%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"66.6\" checked disabled>66.6%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"100\" disabled>100%</label>
                      </div>"
                  );
                }
                else
                {
                    echo("<div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"33.3\" disabled>33.3%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"66.6\" disabled>66.6%</label>
                      </div>
                      <div class=\"radio-inline\">
                        <label><input type=\"radio\" name=\"taFTERadio\" value=\"100\" checked disabled>100%</label>
                      </div>"
                  );
                }
              echo("</div>");
          }
          echo("</div></div>");
      if ($userType == "ra")
      {
          echo("<div id=\"raFundingSource\">
            <div class=\"col-xs-12\">
              <h3>Funding Source</h3>
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"fundInput\">Fund</label>
              <input type=\"text\" class=\"form-control\" id=\"fundInput\" placeholder=\"\" value=\"" . $fundSrc . "\" disabled>
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"deptInput\">Dept</label>
              <input type=\"text\" class=\"form-control\" id=\"deptInput\" placeholder=\"\" value=\"" . $fundDept . "\" disabled>
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"pgmCodeInput\">Pgm Code</label>
              <input type=\"text\" class=\"form-control\" id=\"pgmCodeInput\" placeholder=\"\" value=\"" . $pgmCode . "\"disabled>
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"activityInput\">Activity</label>
              <input type=\"text\" class=\"form-control\" id=\"activityInput\" placeholder=\"\" value=\"" . $activity . "\" disabled >
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"classInput\">Class</label>
              <input type=\"text\" class=\"form-control\" id=\"classInput\" placeholder=\"\" value=\"" . $class . "\" disabled >
            </div>
            <div class=\"form-group col-xs-12 col-sm-2\">
              <label for=\"pIdInput\">Project ID</label>
              <input type=\"text\" class=\"form-control\" id=\"pIdInput\" placeholder=\"\" value=\"" .  $projId . "\" disabled >
            </div>
          </div>");
      }
      ?>


          <div class="col-xs-12">
            <h3>Courses</h3>
          </div>
            <div id="courses">
              <?php
              if ($courseId1 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId0\" placeholder=\"\" value=\"" . $courseId1 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle0\" placeholder=\"\" value=\"" . $courseTitle1 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit0\" placeholder=\"\" value=\"" . $numCredits1 . "\" disabled>
              </div>");
              }
              if ($courseId2 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId1\" placeholder=\"\" value=\"" . $courseId2 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle1\" placeholder=\"\" value=\"" . $courseTitle2 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit1\" placeholder=\"\" value=\"" . $numCredits2 . "\" disabled>
              </div>");
              }
              if ($courseId3 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId2\" placeholder=\"\" value=\"" . $courseId3 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle2\" placeholder=\"\" value=\"" . $courseTitle3 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit2\" placeholder=\"\" value=\"" . $numCredits3 . "\" disabled>
              </div>");
              }
              if ($courseId4 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId3\" placeholder=\"\" value=\"" . $courseId4 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle3\" placeholder=\"\" value=\"" . $courseTitle4 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit3\" placeholder=\"\" value=\"" . $numCredits4 . "\" disabled>
              </div>");
              }
              if ($courseId5 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId4\" placeholder=\"\" value=\"" . $courseId5 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle4\" placeholder=\"\" value=\"" . $courseTitle5 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit4\" placeholder=\"\" value=\"" . $numCredits5 . "\" disabled>
              </div>");
              }
              if ($courseId6 != "")
              {
                echo("<div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"cIdInput\">Course ID</label>
                <input type=\"text\" class=\"form-control\" id=\"cId5\" placeholder=\"\" value=\"" . $courseId6 . "\" disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-6\">
                <label for=\"courseInput\">Course Title</label>
                <input type=\"text\" class=\"form-control\" id=\"cTitle5\" placeholder=\"\" value=\"" . $courseTitle6 . "\"disabled>
              </div>
              <div class=\"form-group col-xs-12 col-sm-3\">
                <label for=\"creditInput\"># of Credits</label>
                <input type=\"text\" class=\"form-control creditInput\" id=\"cCredit5\" placeholder=\"\" value=\"" . $numCredits6 . "\" disabled>
              </div>");
              }
              
              ?>
            </div>
        

        <div class="col-xs-12">
          <h4><span id="totalUnits"></span> Total units of tuition to pay ($928 per unit - FY1617)</h4>

          <h3>TOTAL: $<span id="totalCash"><span></h3>

        </div>

        <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
          <?php
              if ($email3 !== '')
              {
                echo("
                <p class=\"formLabel\">Previous Approvers:</label>
                <ol>");
            
                echo("<li>" . $email2 . "</li>");

                if ($email4 !== '')
                {
                  echo("<li>" . $email3 . "</li>");
                }
                if ($email5 !== '')
                {
                  echo("<li>" . $email4 . "</li>");
                }
                
                echo("</ol>");

              }
            ?>
          
        </div>
        
        <div class="form-group col-xs-12 col-sm-4 col-sm-offset-4 text-center">
          <label for="emailInput">Email of next person in the approval chain</label>
          <input type="text" class="form-control" id="emailInput" placeholder="Advisor/Project Director email">
        </div>
 

        <div class="col-xs-12 text-center">
          <div class="col-xs-12 col-sm-6">
            <input type="button" id="reject" class="btn btn-danger btn-lg" value="Reject">
          </div>
          <div class="col-xs-12 col-sm-6">
            <input type="button" id="approve" class="btn btn-success btn-lg" value="Accept">
          </div>
        </div>

      </form>

      <div class="col-xs-12 footer">
      </div>
      
    </div><!-- /.container -->

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/requestApproval.js"></script>
  </body>
</html>