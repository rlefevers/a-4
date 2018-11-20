<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $rss_title;?></h1>
  </div>

	<h4><a href="<?php echo $link;?>"><?php echo $post_title;?></a><h4>
	<h4><b><?php echo date("F j, Y, g:i a", strtotime($post_date));?></b></h4>
	<p><?php echo $description;?></p>
	<br>
	<h4><a href="<?php echo $link;?>"><?php echo $post_title;?></a><h4>
	<h4><b><?php echo date("F j, Y, g:i a", strtotime($post_date));?></b></h4>
	<p><?php echo $description;?></p>
	<br>
	<h4><a href="<?php echo $link;?>"><?php echo $post_title;?></a><h4>
	<h4><b><?php echo date("F j, Y, g:i a", strtotime($post_date));?></b></h4>
	<p><?php echo $description;?></p>
	<br>



</div>
<?php include('views/elements/footer.php');?>
