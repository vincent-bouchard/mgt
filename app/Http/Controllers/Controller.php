<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Parent Controller.
 *
 * @author vincent.bouchard@ellipse-synergie.com
 */

class Controller extends BaseController
{
    public $layout = 'layouts.app';

    /**
     * Render a view (section) based on a layout ($layout)
     *
     * @param string $section
     */
    public function render($section)
    {
        return view($this->layout, [
            'content' => view($section)
        ]);
    }
}
