<?php
/* @var $this TblPostController */
/* @var $data TblPost */
?>

<div class="view">

	<b><?php //echo CHtml::encode($data->getAttributeLabel('Title ')); ?></b>
	<h2><?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	</h2><br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>-->
	<?php echo CHtml::encode($data->content); ?>
	<br /><br /><br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('Author Name')); ?>:</b>
  <i><?php echo CHtml::encode($data->author->username); ?>      </i>
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

  <i><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</i>
	<?php echo CHtml::encode($data->create_time); ?>

  <i><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</i>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php //echo CHtml::encode($data->getAttributeLabel('author_id')); ?></b>
	<?php //echo CHtml::encode($data->author_id); ?>
	<br />


</div>