<?php
/* @var $this TblCompanyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Companies',
);

$this->menu=array(
	array('label'=>'Create TblCompany', 'url'=>array('create')),
	array('label'=>'Manage TblCompany', 'url'=>array('admin')),
);
?>

<h1>Tbl Companies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
