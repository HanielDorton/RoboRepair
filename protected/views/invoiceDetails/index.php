<?php
/* @var $this InvoiceDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoice Details',
);

$this->menu=array(
	array('label'=>'Create InvoiceDetails', 'url'=>array('create')),
);

if (Yii::app()->user->userGroup == 1) {
	array_push($this->menu, array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')));
}

?>

<h1>Invoice Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
