<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use stdClass;

/**
 * Parent Controller.
 *
 * @author vincent.bouchard@ellipse-synergie.com
 */

class Controller extends BaseController
{
    public $layout = 'layouts.app';

    /**
     * constructor which setup the layout data
     */
    public function __construct() {
        $this->setupLayout();
    }

    /**
     * Render a view (section) based on a layout
     *
     * @param string $section
     */
    public function render($view, $data = [])
    {
        if (!is_null($this->layout)) {
            return $this->layout->nest('content', $view, $data);
        }
        return view($view, $data);
    }

    /**
     * Setup layout informations
     */
    public function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = view($this->layout);

            $method = \Request::getMethod();
            $pathInfo = \Request::getPathInfo();
            $route = app()->getRoutes()[$method.$pathInfo];

            $this->layout->head = new stdClass;

            $this->layout->body = new stdClass;
            $this->layout->body->class = $route['action']['as'];
        }
    }
}
