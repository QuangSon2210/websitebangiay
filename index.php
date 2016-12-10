<?php
session_start();
//<!---include---!>
include "include/function.php";
include "classes/db.class.php";
include "classes/shoes.class.php";	
include "classes/cart.class.php";
include "classes/donhang.class.php";
include "classes/thuonghieu.class.php";
include "classes/khachhang.class.php";
include "classes/binhluan.class.php";
include "classes/ad.class.php";


//-----------------
$mod= getValue("mod");
$ac=getValue("ac");
$proname=getValue("proname");
$id=getValue("id");
?>
<!DOCTYPE html>
<html lang="en">
<head>       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head><!--/head-->
<?php
	
	$db=new db();		
	$shoes=new shoes();	
	$cart=new cart();
	$dh=new Donhang();
	$th=new Thuonghieu();
	$kh=new Khachhang();
	$bl=new Binhluan();		
	$brands=$shoes->listBrand();
	$spm=$shoes->listProduct_Arrival(); 
	$spnam=$shoes->listProduct_Male();
	$spnu=$shoes->listProduct_Female();
	
?>
<body>

	<?php
	include("include/header.php"); 
	?><!--/header-->
	<?php
	include("include/slide.php");
	?><!--/slide-->
    <?php
	include("mod.php");
	?><!--/mod-->
	<?php
	include("include/footer.php");  
	?><!--/Footer-->
	

  <!--/Script-->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>