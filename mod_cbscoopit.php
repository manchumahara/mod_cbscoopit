<?php
    /* ------------------------------------------------------------------------
    # mod_cbscoopit.php - Module - mod_cbscoopit
    # ------------------------------------------------------------------------
    # author    Codeboxr Team
    # copyright Copyright (C) 2010-2014 codeboxr.com. All Rights Reserved.
    # @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
    # Websites: http://codeboxr.com
    # Technical Support:  https://github.com/manchumahara/mod_cbscoopit/issues
    ------------------------------------------------------------------------- */

    // no direct access
    defined ('_JEXEC') or die;
    // Include the syndicate functions only once

    $scoopwidthtype = $params->get ('widthtype');
    $scopitid       = $params->get ('scopitid','');
    $maxwidth       = $params->get ('scopmaxwidth');
    $height         = $params->get ('scopheight');

    require (JModuleHelper::getLayoutPath ('mod_cbscoopit'));
?>