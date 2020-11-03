<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Advertisement;


/**
 * Advertisement controller
 *
 * PHP version 7.0
 */
class AdvertisementController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $advertisements = Advertisement::getAll();
        View::renderTemplate('Advertisement/index.html' ,[
            'advertisements' => $advertisements
        ]);
    }

}