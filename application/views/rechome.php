<?php require_once('includes/header.php');?>
<div class="wrapper">
 <div class="col-md-4">
<?php echo form_open('login/getLoginValues');?>
Select category:<select class="form-control" name="category">
<option value=""> Select category</option>
<option value="STUDENT"> STUDENT</option>
<option value="BURSARY COMMITTEE"> BURSARY COMMITTEE</option>
<option value="RECOMENDERS"> RECOMENDERS</option>
</select><br/>

Username:<input name="username" class="form-control" type="text" placeholder="Username" />

Password:<input name="password" class="form-control" type="password" placeholder="Password" />

<input name="submit" class="btn btn-primary" type="submit" value="Login" />

<?php echo form_close();?>
</div>
</div>
<?php require_once('includes/footer.php');?>

