<?php
/* @var $this SiteController */
yii::import('application.models.*');
$this->pageTitle=Yii::app()->name . ' - Sales Report';
$this->breadcrumbs=array(
	'Sales Report',
);
?>
<link rel="stylesheet" type="text/css" href="/css/salesSummary.css"/>
<h1>Daily Summary Sales Report</h1>
<div class="report">
<ul class='salesHeading'>
<li><b>Sales Date</b></li>
<li><b>Daily Total</b></li>
</ul><br / ><hr>

<?php 
$grandTotal = 0;
$numSalesDays = 0;
$salesSummaries = SummarySales::model()->findAll();
//loop through all sales summary objects
foreach ($salesSummaries as $ss) {
	$grandTotal += $ss->salesTotal;
	$numSalesDays++;
	echo "<ul class='salesLine'>";
	echo "<li>$ss->salesDate</li>";
	echo "<li>$".money_format('%i', $ss->salesTotal)."</li>";
	echo "</ul><hr>";
	}

//then loop through the invoices for today if there are any and combine them to look like a sales summary (but they aren't)
$todaysInvoices = Invoices::model()->findAllByAttributes(array('invoiceDate'=>date("Y-m-d")));
if (sizeOf($todaysInvoices) > 0) {
	$numSalesDays++;
	$dailyTotal = 0;
	foreach($todaysInvoices as $inv) {
		$dailyTotal += $inv->invoiceTotal;
	}
	$grandTotal += $dailyTotal;
	echo "<ul class='salesLine'>";
	echo "<li>".date('Y-m-d')."</li>";
	echo "<li>$".money_format('%i', $dailyTotal)."</li>";
	echo "</ul><hr>";
}





echo "<br/>";
echo "<div class ='Summary'";
echo "<p>Number of sales days: <b>$numSalesDays</b>.</p>";
echo "<p>Grand total: <b>$".money_format('%i', $grandTotal)."</b>.</p>";
echo "<p>Daily Average: <b>$".money_format('%i', $grandTotal/$numSalesDays)."</b>.</p>";

?>

</div>

