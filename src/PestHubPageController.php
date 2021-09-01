<?php 

namespace gdmedia\pw; 

use SilverStripe\View\Requirements;

class PestHubPageController extends \PageController 
{
    public function getPestContent() {
        Requirements::javascript(
            'gdmedia/pestsandweeds: client/pwscript.js'
        );
        return PestHub::getPestContent();
    }

}

?>