<?php
/* @var $this SiteController */
/* @var $todaysDate */
/* @var */
/* @var */
/* @var */
/* @var */
yii::import('application.models.*');
$this->pageTitle=Yii::app()->name . ' - Invoice Entry';
$this->breadcrumbs=array(
	'Invoice Entry',
);
?>

<link rel="stylesheet" type="text/css" href="/css/invoiceEntry.css"/>
<h1>Employee Invoice Entry Form</h1>
<div class="invoice">
<form method="post">
<ul>
<div class="InvoiceNumber">Invoice Number: <?php echo $nextInvoiceNumber ?></div> <div class="InvoiceDate">Invoice Date: <?php echo $todaysDate ?> </div><br />
<div class="InvoiceDetails">
<?php
	for ($x=1; $x<=5; $x++) {
  		echo "$x) Product Name: <input type='text' name='productName$x'> Cost: <input type='text' class='input' name='productCost$x'><br/>";
} 
?>
</div>
<div class="totalandsubmit">
Running Total: <div class="total">0.00</div><br />
<input type="submit" value="Enter Invoice">
</div>
</div>
</ul>
</form>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="https://jquery-formatcurrency.googlecode.com/files/jquery.formatCurrency-1.4.0.min.js"></script>
<script type="text/javascript">

	$(".input").keyup(function() {
	//alert($(this).val());
		$total = 0;
		$(".input").each( function( index ) {
			var number = parseFloat($(this).val(), 10);
			if ($.isNumeric(number)) {
				$total += number;
			}
		});
		$('.total').text($total);
		$('.total').formatCurrency();
	});

</script>
