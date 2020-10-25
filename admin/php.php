<?php

global $xoopsDB, $xoopsConfig, $xoopsModule;
include 'admin_header.php';
xoops_cp_header();
OpenTable();
echo('<a href="index.php" target="_self">' . _AM_MODULE_ADMENU1 . '</a> | <b>' . _AM_MODULE_ADMENU2 . '</b> | <a href="help.php" target="_self">' . _AM_MODULE_ADMENU3 . '</a>');
CloseTable();
echo('<h3>' . _AM_MODULE_ADMENU2 . '</h3>');
echo('<iframe src="phpinfo.php" scrolling="auto" frameborder="1" width="100%" height="400"></iframe>');
CloseTable();
xoops_cp_footer();
