<?php

namespace App\Controllers\Admin;

class IndexController {

    public function getIndex() {
        return render('../views/admin/index.php');
    }
}