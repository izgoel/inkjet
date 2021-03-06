<?php
$this->breadcrumbs=array(
	'Jobs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Jobs','url'=>array('index')),
	array('label'=>'Create Jobs','url'=>array('create')),
	array('label'=>'Update Jobs','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Jobs','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jobs','url'=>array('admin')),
);
?>

<h1>View Jobs #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customerId',
		'type',
		'status',
		'createDate',
		'finished',
		'description',
		'tags',
		'person',
		'quotaId',
		'discount',
		'price',
		'invoiceId',
	),
)); ?>
