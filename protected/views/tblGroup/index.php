<?php
/* @var $this TblGroupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Groups',
);

$this->menu=array(
	array('label'=>'Create TblGroup', 'url'=>array('create')),
	array('label'=>'Manage TblGroup', 'url'=>array('admin')),
);
?>

<h1>Tbl Groups</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
