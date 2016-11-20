<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {

public function index()
{
$this->paginate = array(
    'limit' => 5,
    'order' => 'Post.id Desc'//aqui los datos 
);
$post = $this->paginate();
$this-set('posts',$posts);
}

public function getposts()
    {
    $this->set('posts',$this->Post->find('all'));
    //$this->set('_serialize', array('posts'));
    }

}

