<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type'=>null, // null or 'inverse'
	'brand'=>Yii::app()->name,
	'brandUrl'=>'',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Dashboard', 'url'=>array('site/')),
				array('label'=>'Clienti', 'url'=>array('user/')),
				array('label'=>'Comenzi', 'url'=>array('order/')),
				array('label'=>'Cupoane', 'url'=>array('coupon/')),
				array('label'=>'Categorii', 'url'=>array('category/')),
				array('label'=>'Produse', 'url'=>array('product/')),
				array('label'=>'Tag-uri', 'url'=>array('tag/')),
				array('label'=>'Pagini statice', 'url'=>array('page/')),
				array('label'=>'Campanii', 'url'=>array('campaign/')),
				array('label'=>'Email Template', 'url'=>array('emailtemplate/')),
			),
		),

		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>ucfirst(Yii::app()->user->name), 'url'=>'#', 'items'=>array(
					array('label'=>'Logout', 'url'=>array('site/logout')),
					array('label'=>'Manage account', 'url'=>array('#')),
				)),
			),
		),
	),
)); ?>
