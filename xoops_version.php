<?php

$modversion['name'] = 'Mediashow';
$modversion['version'] = '1.0';
$modversion['description'] = _MI_mediashow_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Winsion';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/mediashow_slogo.png';
$modversion['dirname'] = 'mediashow';

$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

$modversion['hasMain'] = 0;

// Templates

// Blocks
$modversion['blocks'][1]['file'] = 'mediashow_bloc.php';
$modversion['blocks'][1]['name'] = _MI_mediashow_BNAME_01;
$modversion['blocks'][1]['description'] = _MI_mediashow_BDESC_01;
$modversion['blocks'][1]['show_func'] = 'b_mediashow_show';
$modversion['blocks'][1]['options'] = '150|140|-1|-1|-1|-1|5|-1|-20|-1|-1';
$modversion['blocks'][1]['edit_func'] = 'b_mediashow_edit';
$modversion['blocks'][1]['template'] = 'mediashow_block.html';

$modversion['blocks'][2]['file'] = 'mediashow_bloc.php';
$modversion['blocks'][2]['name'] = _MI_mediashow_BNAME_02;
$modversion['blocks'][2]['description'] = _MI_mediashow_BDESC_02;
$modversion['blocks'][2]['show_func'] = 'b_mediashow2_show';
$modversion['blocks'][2]['options'] = '150|140|0|0|-1|-1|5|-1|-20|-1|-1|-1';
$modversion['blocks'][2]['edit_func'] = 'b_mediashow2_edit';
$modversion['blocks'][2]['template'] = 'mediashow_block.html';

// Search
$modversion['hasSearch'] = 0;

// Smarty
$modversion['use_smarty'] = 1;

// Options

