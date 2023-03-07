<?php

namespace Phputils\Utils\Controllers;

use Phputils\Utils\Util;

class UtilController {
    public function __invoke(Util $util) {
        $quote = $util->test();
        return view('utils::index', compact('quote'));
    }
}