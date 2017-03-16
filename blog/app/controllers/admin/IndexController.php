<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class IndexController extends BaseController {

    public function getIndex() {
        return $this->render('admin/index.twig');
    }
}