<?php
return array(
	'admin' => array('/admin(/<controller>(/<action>(/<id>)))', array(
					'namespace' => 'App\Admin\\',
					'controller' => 'Fairies',
					'action' => 'index'
					)
				),
	'default' => array('(/<controller>(/<action>(/<id>)))', array(
					'controller' => 'Home',
					'action' => 'index'
					)
				),
	
);
