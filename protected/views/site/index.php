<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?>'s</i> Company Portal</i></h1>

<p>You are currently logged in as a <?php if (Yii::app()->user->userGroup == 2) { echo "employee";} else {echo "manager";}?>.</P>

<?php if (Yii::app()->user->userGroup == 2) { echo '
<p>Employee Options:</p>

<ul>
	<li><a href = "'.Yii::app()->baseUrl.'?r=invoices/create">Enter Invoices</a></li>
	<li><a href = "'.Yii::app()->baseUrl.'?r=invoiceDetails/create">Enter Invoices Details</a></li>
</ul>'; } else { echo '

</p>Manager Options:</p>

<ul>
	<li><a href = "'.Yii::app()->baseUrl.'?r=summarySales">Manage Daily Sales Summaries</a></li>
	<li><a href = "'.Yii::app()->baseUrl.'?r=invoices">Manage Invoices</a></li>
	<li><a href = "'.Yii::app()->baseUrl.'?r=invoiceDetails">Manage Invoice Details</a></li>

</ul>'; }
?>


