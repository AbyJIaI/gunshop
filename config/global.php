<?php

use App\Http\Controllers\CategoryController;

$all = CategoryController::getCategories()->jsonSerialize();
return [
    'categories' => $all,
];

?>
