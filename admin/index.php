<?php

// $Id: xoops_version.php,v 1.2 2003/04/17 10:11:38 okazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <https://www.xoops.org>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
include '../../../mainfile.php';
include '../../../include/cp_header.php';

xoops_cp_header();
OpenTable();

echo 'Copier les fichiers selon leurs catégories dans les répertoires audio ou vidéo (répertoire principal : media)';
echo '<br>';
echo 'Une liste déroulante se créera automatiquement dans le block concerné';
echo '<br>';
echo '<br>';
echo 'Copy the files according to their categories in the audio or video repertories (in principal repertorie : media)';
echo '<br>';
echo 'a drop-down list will be created automatically in the block concerned';

CloseTable();
xoops_cp_footer();
