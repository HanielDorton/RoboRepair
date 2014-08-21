<?php
/* @var $this TblCompanyController */
/* @var $model TblCompany */

$this->breadcrumbs=array(
	'Tbl Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblCompany', 'url'=>array('index')),
	array('label'=>'Create TblCompany', 'url'=>array('create')),
	array('label'=>'Update TblCompany', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblCompany', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblCompany', 'url'=>array('admin')),
);
?>

<h1>View TblCompany #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'companyName',
	),
)); ?>
