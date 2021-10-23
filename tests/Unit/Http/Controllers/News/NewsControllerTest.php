<?php

namespace Http\Controllers\News;

use App\Http\Controllers\News\NewsController;
use PHPUnit\Framework\TestCase;

class NewsControllerTest extends TestCase
{

    public function testIndex()
    {
        $data = new NewsController();
        var_dump($data->index());
        die();
    }
}
