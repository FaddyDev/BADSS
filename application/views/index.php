<?php require_once('includes/header.php');?>
<div class="wrapper">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
   <!-- <li data-target="#myCarousel" data-slide-to="3"></li>-->
  </ol>
   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <center> <img src="<?=base_url()?>images/gallery/01.jpg" alt="FRETTY" style="width:400px;height:400px;"/><center />
    </div>

    <div class="item">
      <center><img src="<?=base_url()?>images/gallery/03.jpg" alt="HAKI" style="width:400px;height:400px"></center>
    </div>

    <div class="item">
       <center><img src="<?=base_url()?>images/gallery/07.jpg" alt="HAKI" style="width:400px;height:400px"></center>
    </div>
	</div>
	<!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"</span style>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"</span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!--<div class="item">
      <img src="img_flower2.jpg" alt="Flower">
    </div>-->
  </div> 
<!--<div  class="row">
  <div  class="col-md-4">
    <a href="images/gallery/01.jpg" class="thumbnail">
      <p>images/gallery/01: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>
      <img src="<?=base_url()?>images/gallery/01.jpg" alt="FRETTY" style="width:150px;height:150px">
    </a>
  </div >
  <div class="col-md-4">
    <a href="images/gallery/03.jpg" class="thumbnail">
      <p>images/gallery/03: Considered as one of the "most beautiful villages of France".</p>
      <img src="<?=base_url()?>images/gallery/03.jpg" alt="HAKI" style="width:150px;height:150px">
    </a>
  </div>
  <div  class="col-md-4">
    <a href="images/gallery/07.jpg" class="thumbnail">
      <p>images/gallery/07: A rugged portion of coast in the Liguria region of Italy.</p>
      <img src="<?=base_url()?>images/gallery/07.jpg" alt="HAKI" style="width:150px;height:150px">
    </a>
  </div>
</div>-->
<?php require_once('includes/footer.php');?>

