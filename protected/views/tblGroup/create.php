<?php
/* @var $this TblGroupController */
/* @var $model TblGroup */

$this->breadcrumbs=array(
	'Tbl Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblGroup', 'url'=>array('index')),
	array('label'=>'Manage TblGroup', 'url'=>array('admin')),
);
?>

<h1>Create TblGroup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>