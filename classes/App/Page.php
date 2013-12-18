<?php
namespace App;
 
class Page extends \PHPixie\Controller {
 
    //This is where we store our view
    protected $view;
 
    //This function will execute before each action
    //We will use it to initialize a common layout
    public function before() {
 
        //Here we reference the /assets/view/main.php view
        $this->view = $this->pixie->view('main');
    }
 
    //This function will execute after each action
    public function after() {
        //It will render the view template and output
        //the response to the user
        $this->response->body = $this->view->render();
    }
 
}