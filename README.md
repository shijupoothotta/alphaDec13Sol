[PHPixie](http://phpixie.com)
=======

Separating Backend and Frontend
Separating your backend from frontend can be easily achieved using namespaces. Put all your admin controllers into the App\Admin\Controller namespace, and define a route like this:
	
'admin' => array('/admin(/<controller>(/<action>(/<id>)))', array(
        'namespace ' => 'App\Admin',
        'controller' => 'Fairies',
        'action' => 'index'
        )
    ),

Now accessing /admin/ will call App\Admin\Controller\Fairies controller while calling /admin/pixies will route to App\Admin\Controller\Pixies. Having a separate Admin namespace also allows you to use it for backend specific business logic. Your frontend controllers will continue working normally, so /fairies eould still route to App\Controller\Fairies.


Adding Helper Functions
