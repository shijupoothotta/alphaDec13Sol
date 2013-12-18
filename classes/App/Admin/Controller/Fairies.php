<?php
namespace App\Admin\Controller;
 
class Fairies extends \App\Page {

    public function action_index() {
 
        
		$this->view->subview = 'list';

        $this->view->fairies = $this->pixie->orm->get('fairy')->find_all();
    }
 
    public function action_view() {
 

    }
 
    public function action_add() {
 

    }
 
}