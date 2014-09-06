<?php
/* @var $this InvoicesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoices',
);

$this->menu=array(
	array('label'=>'Create Invoices', 'url'=>array('create')),
);

if (Yii::app()->user->userGroup == 1) {
	array_push($this->menu, array('label'=>'Manage Invoices', 'url'=>array('admin')));
}


?>

<h1>Invoices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
