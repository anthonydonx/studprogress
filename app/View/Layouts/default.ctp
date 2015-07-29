<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title><?php echo $this->fetch('title'); ?></title>
</head>
<body>
	
	<?php
        echo $this->Html->css(array('bootstrap', 'font-awesome', 'zabuto_calendar', 'lineicons/style', 'gritter/jquery.gritter', 'style', 'style-responsive'));
        ?> 
<?php
           echo $this->Html->script(array('jquery','jquery-1.11.2.min','bootstrap.min.js','jquery-ui-1.9.2.custom.min','jquery.dcjqaccordion.2.7','jquery.nicescroll','jquery.sparkline'));
        echo $this->fetch('content'); 
                     
        ?>

</body>
</html>