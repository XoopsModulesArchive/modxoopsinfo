<?php

global $xoopsDB, $xoopsConfig, $xoopsModule;
include 'admin_header.php';
xoops_cp_header();
OpenTable();
echo('<a href="index.php" target="_self">' . _AM_MODULE_ADMENU1 . '</a> | <a href="php.php" target="_self">' . _AM_MODULE_ADMENU2 . '</a> | <b>' . _AM_MODULE_ADMENU3 . '</b>');
CloseTable();
?>
<h2>Please read before posting a support request at <a href="http://xoops.org/" target="_blank">xoops.org</a></h2>
<p>Before posting please do a search on Xoops.org using the site's <a href="http://xoops.org/search.php" target="_blank">Search feature</a> with appropriate "keywords" and find out if the subject has been dealt with before. Also look through the <a href="http://xoops.org/modules/smartfaq/" target="_blank">FAQ’s</a>, especially if you're unsure what search words to use.</p>
<p><b>Q:</b> I couldn’t find any related issues by searching what next? <br>
  <br>
  <b>A:</b> Please use an effective title for the post; this assists other users to answer you who have had a similar problem. Many users will not be attracted to a "please help me I have a problem" title. A relevant title also helps other users find solutions to their problems. <br>
  <br>
  Posts like "I have a blank page" will generally be ignored. Not because we don’t want to help, but because we can’t with such a small amount of information. <br>
  <br>
  The best way to start your request for support is to use a clear, descriptive title and to explain the problems you are having in as much detail as possible. If you are having problems with a module and/or theme, be sure to list the name and version of the module and/or theme.</p>
<p><b><i>The following information will be useful for people who are trying to assist you. Please make sure to include it in your post.</i></b></p>
<?php
OpenTable();
echo('<br>');
echo('<b><u>Website URL:</u></b><br>');
echo XOOPS_URL;
echo('<br><br><b><u>XOOPS Version:</u></b><br>');
echo XOOPS_VERSION;
echo('<br><br><b><u>XOOPS Theme:</u></b><br>');
echo $xoopsConfig['theme_set'];
echo('<br><br><b><u>XOOPS Template Set:</u></b><br>');
echo $xoopsConfig['template_set'];
echo('<br><br><b><u>PHP Version:</u></b><br>');
echo phpversion();
echo('<br><br><b><u>MySQL Version:</u></b><br>');
    $result = $GLOBALS['xoopsDB']->queryF('SELECT VERSION()');
    [$mysql_version] = $GLOBALS['xoopsDB']->fetchRow($result);
    echo $mysql_version;
    $GLOBALS['xoopsDB']->freeRecordSet($result);
echo('<br><br><b><u>Server Software:</u></b><br>');
echo $_SERVER['SERVER_SOFTWARE'];
echo('<br><br><b><u>User\'s Browser:</u></b><br>');
echo $_SERVER['HTTP_USER_AGENT'];
echo('<br><br>');
CloseTable();
?>
<p><b>Turn on debug:</b><br>
  To switch on debug, go to system admin-->preferences and then general settings. You will see a "Debug mode" field. Choose "PHP Debug". Then go to the page that has problems and copy and paste any error messages under php-debug messages in the template below. Do this for each debug type (PHP, MySQL, Smarty). <br>
  <br>
  PHP Debug Messages:<br>
  MySQL Debug Messages:<br>
  Smarty Debug Messages:<br>
</p>
<p><b><i>The following template should serve as a solid guideline for how to request support.</i></b></p>
<?php
OpenTable();
?>
  <p>Title: Clear and descriptive title <br>
    <br>
    Description: A detailed description of the problem you are having. Please include as much information as possible regarding what you were doing right before the problem happened and any steps you have taken to resolve the problem. <br>
    <br>
    Make sure you include as much of the following technical information as possible in your post. Without this information it will be very difficult to provide support for you. <br>
    <br>
    Website URL:<br>
    XOOPS Version:<br>
    Theme you are using:<br>
    Template Set you are using:<br>
    Module Name and Version:<br>
    PHP Version:<br>
    MySQL Version:<br>
    Server Software:<br>
    Operating System:<br>
	Browser Information<br>
    PHP Debug Messages:<br>
    MySQL Debug Messages:<br>
    Smarty Debug Messages:<br>
  </p>
<?php
CloseTable();
?>
<p><b><i>XOOPS Info File version 1.0</i></b><br>
Last Updated: Saturday, October 15th, 2005<br>
By: XOOPS Support Team</p>
<?php
xoops_cp_footer();
?>
