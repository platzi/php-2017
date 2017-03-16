<?php

namespace App\Controllers;

class IndexController extends BaseController {

    public function getIndex() {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
        $query->execute();

        $blogPosts = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $this->render('index.twig', ['blogPosts' => $blogPosts]);
    }
}