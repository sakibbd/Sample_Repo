<?php
/* @var $this TblPostController */
/* @var $model TblPost */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TblPost', 'url'=>array('index')),
	array('label'=>'Create TblPost', 'url'=>array('create')),
	array('label'=>'Update TblPost', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblPost', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPost', 'url'=>array('admin')),
);
?>

<h1>View Post :<?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content',
		'status',
		'create_time',
		'update_time',
    array('name'=>'id',
      'value' => CHtml::encode($model->author->username)),
		//'author_id',
	),
)); ?>
