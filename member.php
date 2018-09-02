
<body style="background-color:#e6ffff;">
	<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


    echo "Welcome to the member's area, " . $_SESSION['username'] . "! <a href='index.php'> Click </a> here to return to main page<br><a href='logout.php'>logout</a><br>";
} else {
    echo "Please log in first to see this page . <a href='index.php'> Click </a> here to return to main page";
}
?>




<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.php" >Edit Profile</A>

       <br>

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php $_SESSION['username'] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <!--<div class="col-md-3 col-lg-3 "> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>-->
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Datum registracije:</td>
                        <td>baza še ne beleži</td>
                      </tr>
                      <tr>
                        <td>datum zadnje prijave</td>
                        <td>baza še ne beleži</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Male</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Metro Manila,Philippines</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
                </div>
              </div>
            
        </div>
      </div>
    </div>


   </div>
   </div>
</body>