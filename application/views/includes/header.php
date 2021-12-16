<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>DeKUT BURSARY ALLOCATION DSS</title>

<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css"/>
<link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=base_url()?>css/bootstrap-theme.css" />
<link rel="stylesheet" href="<?=base_url()?>css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?=base_url()?>css/sticky-footer.css"/>
<link rel="stylesheet" href="<?=base_url()?>css/custom.css"/>

<script src="<?=base_url()?>js/bootstrap.js"></script>
<script src="<?=base_url()?>js/bootstrap.min.js"></script>
<script src="<?=base_url()?>js/jquery.min.js"></script>
<script src="<?=base_url()?>js/jquery.scrollTo-min.js"></script>
<script src="<?=base_url()?>js/jquery-1.6.1.min.js"></script>
<script src="<?=base_url()?>js/slimbox2.js"></script>
<script src="<?=base_url()?>js/moment-with-locales.js"></script>

<script language="javascript" type="text/javascript">
$(document).ready(function(){
$('.carousel').carousel({
interval:500
})
});
</script>

<script language="javascript" type="text/javascript">
$(".right").click(function(){
$('#myCarousel').carousel("prev");
});
</script>
</head>

<body style="background-color:#00CC00;">
<div style="background-color:#CC9900;" class="container">
<nav class="navbar navbar-default">
<a style="color:#0000FF" class="color:mediumblue navbar-brand" href="color:mediumblue""#"="color:mediumblue">DeKUT BURSARY ALLOCATION DSS</a style="color:mediumblue">
<ul style="color:#0000FF" class="nav nav-tabs">
      <li active="color:mediumblue"><a  href="#">Home</a></li>
	  <?php 
	if(!isset($this->session->userdata['loggedin'])){?>
	<li style="float:right"><a href="<?=site_url('login');?>">Login</a></li>
    <?php } else { ?>
    <li style="float:right"><a href="<?=site_url('login/logout');?>">Logout</a></li>
	 <?php } ?>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      
    </ul>
</nav>
<div class="panel panel-default">
<h1 align="center">DeKUT BURSARY ALLOCATION DSS</h1>
</div>
