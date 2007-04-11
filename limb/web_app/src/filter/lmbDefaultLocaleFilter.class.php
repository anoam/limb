<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbDefaultLocaleFilter.class.php 5636 2007-04-11 13:28:12Z pachanga $
 * @package    web_app
 */

lmb_require('limb/filter_chain/src/lmbInterceptingFilter.interface.php');

class lmbDefaultLocaleFilter implements lmbInterceptingFilter
{
  protected $default_locale;
  protected $toolkit;

  function __construct($default_locale)
  {
    $this->default_locale = $default_locale;
    $this->toolkit = lmbToolkit :: instance();
  }

  function run($filter_chain)
  {
    $this->toolkit->setLocale($this->default_locale);
    $filter_chain->next();
  }
}

?>