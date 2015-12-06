<?php

namespace App\Http\Controllers;

/**
 * Welcome section.
 *
 * @author vincent.bouchard@ellipse-synergie.com
 */

class Welcome extends Controller
{
    /**
     * Homepage
     */
    public function index()
    {
        return $this->render('welcome.index');
    }
}
