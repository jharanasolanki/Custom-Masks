<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2016-2021 Dashboardbuilder.net
 * @version 4.6
 * @license: This code is under MIT license, you can find the complete information about the license here: https://dashboardbuilder.net/code-license
 */

include("inc/dashboard_dist.php");  // copy this file to inc folder 

?>
<style>
	.imagelayer {
		display:none;
	}
</style>
<?php

// for chart #1
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";

$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "remotemysql.com";
$data->username =  "HCT4UbGiki";
$data->password =  "WszXABOU7F";
$data->dbname =  "HCT4UbGiki";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->xaxisSQL[0]=  "SELECT * FROM orders";
$data->xaxisCol[0]=  "custid";
$data->xsort[0]=  "";
$data->xmodel[0]=  "";
$data->yaxisSQL[0]=  "SELECT * FROM orders";
$data->yaxisCol[0]=  "total";
$data->ysort[0]=  "";
$data->ymodel[0]=  "";

$data->name = "Customer ID";
$data->title = "Customer ID";
$data->orientation = "v";
$data->dropdown = "false";
$data->legposition = "";
$data->xaxistitle = "Sales";
$data->yaxistitle = "";
$data->datalabel = "false";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "380";
$data->width = "";
$data->col = "0";



$data->color[0]=  "#2874b4";

$result[0] = $data->result();

// for chart #2
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";

$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "remotemysql.com";
$data->username =  "HCT4UbGiki";
$data->password =  "WszXABOU7F";
$data->dbname =  "HCT4UbGiki";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->xaxisSQL[0]=  "SELECT * FROM customer";
$data->xaxisCol[0]=  "name";
$data->xsort[0]=  "";
$data->xmodel[0]=  "";
$data->yaxisSQL[0]=  "SELECT * FROM customer";
$data->yaxisCol[0]=  "priority";
$data->ysort[0]=  "";
$data->ymodel[0]=  "";

$data->name = "Customer Orders";
$data->title = "Customer Orders";
$data->orientation = "v";
$data->dropdown = "false";
$data->legposition = "";
$data->xaxistitle = "";
$data->yaxistitle = "";
$data->datalabel = "false";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "367";
$data->width = "";
$data->col = "1";



$data->tracename[0]=  "Customer Orders";
$data->color[0]=  "#33cad5";

$result[1] = $data->result();

// for chart #3
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";

$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "remotemysql.com";
$data->username =  "HCT4UbGiki";
$data->password =  "WszXABOU7F";
$data->dbname =  "HCT4UbGiki";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->xaxisSQL[0]=  "SELECT * FROM payments";
$data->xaxisCol[0]=  "orderfrom";
$data->xsort[0]=  "";
$data->xmodel[0]=  "";
$data->yaxisSQL[0]=  "SELECT * FROM payments";
$data->yaxisCol[0]=  "qty";
$data->ysort[0]=  "";
$data->ymodel[0]=  "";

$data->name = "Order placed from";
$data->title = "Order placed from";
$data->orientation = "v";
$data->dropdown = "false";
$data->legposition = "";
$data->xaxistitle = "";
$data->yaxistitle = "";
$data->datalabel = "false";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "350";
$data->width = "";
$data->col = "2";




$result[2] = $data->result();

// for chart #4
$data = new dashboardbuilder(); 
$data->type[0]=  "bar";

$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "remotemysql.com";
$data->username =  "HCT4UbGiki";
$data->password =  "WszXABOU7F";
$data->dbname =  "HCT4UbGiki";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->xaxisSQL[0]=  "SELECT * FROM maskscart";
$data->xaxisCol[0]=  "accountid";
$data->xsort[0]=  "";
$data->xmodel[0]=  "";
$data->yaxisSQL[0]=  "SELECT * FROM maskscart";
$data->yaxisCol[0]=  "qty";
$data->ysort[0]=  "";
$data->ymodel[0]=  "";

$data->name = "Mask Wishlist";
$data->title = "Mask Wishlist";
$data->orientation = "v";
$data->dropdown = "false";
$data->legposition = "";
$data->xaxistitle = "Customer Id";
$data->yaxistitle = "No of Products";
$data->datalabel = "false";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "353";
$data->width = "";
$data->col = "3";



$data->tracename[0]=  "Mask Wishlist";
$data->color[0]=  "#33cad5";

$result[3] = $data->result();?>

<!DOCTYPE html>
<html>
<head>
	<script src="assets/js/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> <!-- Bootstrap CSS file, change the path accordingly -->
	
<style>

.panel-heading {line-height:0.7em;}
#number {font-size:34px; font-weight:bold;text-align:center;}
#number_legand {font-size:11px; color:#999;text-align:center;}
.panel-body {  box-shadow: 5px 5px 35px  #e0e0e0;color:#787b80;}
.page-header {margin-top:-30px;}
</style>
</head>
<body> 
<div class="container-fluid main-container">
<div class="col-md-12 col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 id0">
	<div class="panel panel-default">
		<div class="panel-body">
		<span>Customer ID</span>
			<?php echo $result[0];?>
		</div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 id1">
	<div class="panel panel-default">
		<div class="panel-body">
		<span>Customer Orders</span>
			<?php echo $result[1];?>
		</div>
	</div>
	</div>
	</div>
	<div class="row">
	<div class="col-md-6 col-lg-6 col-xs-12 id2">
	<div class="panel panel-default">
		<div class="panel-body">
		<span>Order placed from</span>
			<?php echo $result[2];?>
		</div>
	</div>
	</div>
	<div class="col-md-6 col-lg-6 col-xs-12 id3">
	<div class="panel panel-default">
		<div class="panel-body">
		<span>Mask Wishlist</span>
			<?php echo $result[3];?>
		</div>
	</div>
	</div>
	</div>
</div>
</div>
</body>
