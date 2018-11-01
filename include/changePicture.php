
<?php 
	include('../server.php'); 
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
    $uploadedImage = $jsn[$i]->uploadedImage;



    }
?>

  <h1 style="margin-bottom: 30px;">Upload Picture</h1>
  <form action="ajax/changePicture.php" method="POST" enctype="multipart/form-data">
   <div class="form-horizontal form-label-left">
	     <input id="id" class="form-control col-md-7 col-xs-12" name="id" type="hidden" value="<?=$_SESSION['id']?>" >
	    
	    <div class="item form-group">
	        
	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <img width="200px" height="200px" align="center" src="uploadedimage/<?php echo $uploadedImage ?>" >
	        </div>
	    </div>
	    <div class="item form-group">
	        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="street">
	            Upload Picture <span class="required">*</span>
	        </label>
	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <input id="fileToUpload" class="form-control col-md-7 col-xs-12"  name="fileToUpload"  type="file">
	        </div>
	    </div>
		<div class="ln_solid"></div>
	    <div class="form-group">
	        <div class="col-md-6 col-md-offset-3">
	            <input type="Submit" id="uploadFile" name="uploadFile" class="btn btn-success" value="Upload File" />
	        </div>
	    </div>
	</div>
</form>

