<?php
/* @var $this TblCompanyController */
/* @var $model TblCompany */

$this->breadcrumbs=array(
	'Tbl Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblCompany', 'url'=>array('index')),
	array('label'=>'Create TblCompany', 'url'=>array('create')),
	array('label'=>'View TblCompany', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblCompany', 'url'=>array('admin')),
);
?>

<h1>Update TblCompany <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>