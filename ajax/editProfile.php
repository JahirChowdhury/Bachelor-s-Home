
<?php 	include('../server.php'); ?>	
<?php 
    include '../include/mysql-to-json.php';
    $sql = "select * from users where name = '".$_SESSION['name'] ."' ";
    $jsonData = getJSONFromDB($sql);

    $jsn = json_decode($jsonData);

    $name; $email; $password ;$rented_month; $phone;
    for($i= 0 ;$i<sizeof($jsn);$i++){

    $id = $jsn[$i]->id;
    $name = $jsn[$i]->name;
    $email = $jsn[$i]->email;
    $password = $jsn[$i]->password;
    $rented_month = $jsn[$i]->rented_month;
    $phone = $jsn[$i]->phone;



    }
?>
	<script type="text/javascript" src="jquery-3.3.1.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <h1 style="margin-bottom: 30px;">Update Profile</h1>
  <form action="ajax/updateProfile.php" method="POST" enctype="multipart/form-data">
   <div class="form-horizontal form-label-left">
    <span class="section">Personal Info</span>
     <input id="id" class="form-control col-md-7 col-xs-12" name="id" value="<?php echo $id ?>" required="required" type="hidden" >
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">
           Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="name" class="form-control col-md-7 col-xs-12" name="name" value="<?php echo $name ?>" required="required" type="text" >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">
         Email <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="email" class="form-control col-md-7 col-xs-12"  name="email" value="<?php echo $email ?>" required="required" type="text" >
           
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
             Phone <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="phone" name="phone" required="required" value="<?php echo $phone ?>" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>


    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">
            Rented Month <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="rented_month" name="rented_month" value="<?php echo $rented_month ?>"  class="form-control col-md-7 col-xs-12"  >
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street">
            Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="password" class="form-control col-md-7 col-xs-12" value="<?php echo $password ?>" name="password" required="required" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street">
            Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="fileUpload" class="form-control col-md-7 col-xs-12"  name="fileUpload"  type="file">
        </div>
    </div>




    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <input type="Submit" id="updateProfile" name="updateProfile" class="btn btn-success" value="Update info" />
        </div>
    </div>
</div>
</form>

