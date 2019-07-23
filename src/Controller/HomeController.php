<?php

namespace App\Controller;

class HomeController extends AppController {

    public $paginate = [
        'limit' => 2,
    ];

    public function index() {
        
    }

    public function contactUs() {
        
    }

    public function form() {
        
    }

    public function news($type = 'business') {
        if (!in_array($type, ['business', 'national', 'international'])) {
            $this->set('type', 'business news');
        } else {
            $this->set('type', $type . ' news');
        }
    }

    public function blog() {
        $this->loadModel('Blogs');
        $query = $this->Blogs->find('all');
        $this->set('blogs', $this->paginate($query));
    }

    public function blogView($encodedId) {
        $id = base64_decode(base64_decode($encodedId));
        $this->loadModel('Blogs');
        $data = $this->Blogs->findById($id)->first();
        if (empty($data)) {
            $this->redirect(['action' => 'blog']);
        } else {
            $this->set('blog', $data);
        }
    }

    public function documents() {
        $this->loadModel('Documents');
        $query = $this->Documents->find('all');
        $this->set('documents', $this->paginate($query));
    }

}
