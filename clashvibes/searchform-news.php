<?php
/**
 * *PHP version 5
 * 
 * Template part for displaying results in search pages
 *
 * Search news | core/searchform-news.php.
 *
 * @category   Search_Form
 * @package    Clashvibes
 * @subpackage Search_Form
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/clashvibes .git
 * @link       http:www.raythompsonwebdev.co.uk custom template
 */
 ?>

<form method="get" action="<?php bloginfo('url'); ?>">
<div class="form_row"><label>Name&nbsp;</label><input class="inputfield" name="email_address" type="text" id="full_name"/></div>
<div class="form_row"><label>E-mail</label><input class="inputfield" name="password" type="text" id="email_address"/></div>
<input class="button2" type="submit" name="Submit" value="Login" />
</form>