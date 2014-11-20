<?php
    /* ------------------------------------------------------------------------
   # default.php - Module - mod_cbscoopit
   # ------------------------------------------------------------------------
   # author    Codeboxr Team
   # copyright Copyright (C) 2010-2014 codeboxr.com. All Rights Reserved.
   # @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
   # Websites: http://codeboxr.com
   # Technical Support:  https://github.com/manchumahara/mod_cbscoopit/issues
   ------------------------------------------------------------------------- */
    // No direct access
    defined ('_JEXEC') or die;
    //var_dump($scopitid);
?>
<div class="cbscoopit <?php echo $moduleclass_sfx; ?>">
  <?php if($scopitid == ''):
    echo 'Please put scoop.it id';
  else: ?>
  <iframe
      src='//www.scoop.it/embed-topic/<?php echo $scopitid; ?>.html?maxwidth=<?php echo $maxwidth ?>'
      width='<?php echo $maxwidth ?>'
      height='<?php echo $height ?>'
      scrolling='no'>

  </iframe>
  <?php endif; ?>
</div>

