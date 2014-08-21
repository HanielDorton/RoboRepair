<?php
/* @var $this TblCompanyController */
/* @var $model TblCompany */

$this->breadcrumbs=array(
	'Tbl Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblCompany', 'url'=>array('index')),
	array('label'=>'Manage TblCompany', 'url'=>array('admin')),
);
?>

<h1>Create TblCompany</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>