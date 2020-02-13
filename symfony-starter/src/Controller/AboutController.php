<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class AboutController{

    public function about()
    {
        return new Response(
            '<html><body>' . __CLASS__ . ' :: ' . __FUNCTION__. '</body></html>'
        );
    }
}