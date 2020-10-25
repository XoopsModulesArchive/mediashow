<?php

function b_mediashow_show($options)
{
    $block = [];

    $coord = $GLOBALS['xoopsDB']->fetchBoth($file);

    require_once XOOPS_ROOT_PATH . '/modules/mediashow/include/func_mediashow.php';

    $gDirectory = '' . XOOPS_ROOT_PATH . '/modules/mediashow/media/audio/';

    $gExtension = 'mp3 wav mid wmp';

    $ExpExt = explode(' ', $gExtension);

    sort($ExpExt);

    $countFile = count($getFile);

    $fp = fopen(XOOPS_ROOT_PATH . '/modules/mediashow/sql/audio.txt', 'rb');

    $file = fgets($fp, 255);

    fclose($fp);

    $mediashow = XOOPS_URL . '/modules/mediashow/media/audio/' . $file;

    $block['mediashow'] = "<object id='MediaPlayer1' classid='clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95' width='$options[0]' height='$options[1]'>
            <param name='AudioStream' value='-1'>
            <param name='AutoSize' value='$options[3]'>
            <param name='AutoStart' value='$options[2]'>
            <param name='AnimationAtStart' value='0'>
            <param name='AllowScan' value='-1'>
            <param name='AllowChangeDisplaySize' value='-1'>
            <param name='AutoRewind' value='$options[4]'>
            <param name='Balance' value='$options[5]'>
            <param name='BaseURL' value>
            <param name='BufferingTime' value='$options[6]'>
            <param name='CaptioningID' value>
            <param name='ClickToPlay' value='0'>
            <param name='CursorType' value='0'>
            <param name='CurrentPosition' value='0'>
            <param name='CurrentMarker' value='0'>
            <param name='DefaultFrame' value>
            <param name='DisplayBackColor' value='-1'>
            <param name='DisplayForeColor' value='16777215'>
            <param name='DisplayMode' value='-1'>
            <param name='DisplaySize' value='-1'>
            <param name='Enabled' value='-1'>
            <param name='EnableContextMenu' value='-1'>
            <param name='EnablePositionControls' value='-1'>
            <param name='EnableFullScreenControls' value='-1'>
            <param name='EnableTracker' value='-1'>
            <param name='Filename' value=" . $mediashow . ">
			<param name='InvokeURLs' value='-1'>
            <param name='Language' value='-1'>
            <param name='Mute' value='0'>
            <param name='PlayCount' value='1'>
            <param name='PreviewMode' value='1'>
            <param name='Rate' value='1'>
            <param name='SAMILang' value>
            <param name='SAMIStyle' value>
            <param name='SAMIFileName' value>
            <param name='SelectionStart' value='-1'>
            <param name='SelectionEnd' value='-1'>
           <param name='SendOpenStateChangeEvents' Avalue='-1'>
            <param name='SendWarningEvents' value='-1'>
            <param name='SendErrorEvents' value='-1'>
            <param name='SendKeyboardEvents' value='0'>
            <param name='SendMouseClickEvents' value='0'>
            <param name='SendMouseMoveEvents' value='0'>
            <param name='SendPlayStateChangeEvents' value='-1'>
            <param name='ShowCaptioning' value='0'>
            <param name='ShowControls' value='$options[9]'>
            <param name='ShowAudioControls' value='$options[10]'>
            <param name='ShowDisplay' value='0'>
            <param name='ShowGotoBar' value='0'>
            <param name='ShowPositionControls' value='0'>
            <param name='ShowStatusBar' value='$options[7]'>
            <param name='ShowTracker' value='0'>
            <param name='TransparentAtStart' value='0'>
            <param name='VideoBorderWidth' value='0'>
            <param name='VideoBorderColor' value='0'>
            <param name='VideoBorder3D' value='0'>
            <param name='Volume' value='$options[8]'>
            <param name='WindowlessVideo' value='0'>
            <!--NETSCAPE PLUG-IN STARTS HERE-->
            <embed type='application/x-mplayer2' src=" . $mediashow . " name='NSPlay' pluginspage='http://www.microsoft.com/isapi/redir.dll?prd=windows&sbp=mediaplayer&ar=media&sba=plugin' showcontrols='$options[9]' showdisplay='0' showstatusbar='0' autostart='false' width='$options[0]' height='$options[1]'>
            </embed> 
          </object>";

    $block['mediashow'] .= "<form name='form1' id='form1' method='post' action='" . XOOPS_URL . "/modules/mediashow/mediashow.php'>";

    $block['mediashow'] .= '<select name="file" onchange="submit();" size="3">';

    foreach ($ExpExt as $findExt) {
        $getFile = @browse($gDirectory, $findExt);

        $countFile = count($getFile);

        if (0 != $countFile) {
            foreach ($getFile as $myFile) {
                $block['mediashow'] .= "<option value=$myFile>" . $myFile . '</option>';
            }
        }
    }

    $block['mediashow'] .= "</select>
<input type='hidden' name='op' value='1'>

</form>";

    $block['mediashow'] .= 'Playing : ';

    $block['mediashow'] .= $file;

    return $block;
}

function b_mediashow_edit($options)
{
    $form = "<table width='100%' border='0' cellspacing='1' cellpadding='3'>
  <tr> 
    <td width='16%'>* 0 = Off -1 = On </td>
    <td width='84%'><em>Certaines options ne fonctionne pas avec Mozilla - Certain options does not function with Mozilla</em></td>
  </tr>
  <tr> 
    <td width='16%'>Largeur :&nbsp;</td>
    <td width='84%'><input type='text' size='3' name='options[0]' value='$options[0]'>
      pixel </td>
  </tr>
  <tr> 
    <td>Hauteur :</td>
    <td><input type='text' size='3' name='options[1]' value='$options[1]'>
      pixel </td>
  </tr>
  <tr> 
    <td>Autostart *:</td>
    <td><input type='text' size='3' name='options[2]' value='$options[2]'></td>
  </tr>
  <tr> 
    <td>Autosize *:</td>
    <td><input type='text' size='3' name='options[3]' value='$options[3]'></td>
  </tr>
  <tr> 
    <td>AutoRewind*:</td>
    <td><input type='text' size='3' name='options[4]' value='$options[4]'></td>
  </tr>
  <tr> 
    <td>Balance :</td>
    <td><input type='text' size='3' name='options[5]' value='$options[5]'>
    </td>
  </tr>
  <tr> 
    <td>BufferingTime :</td>
    <td><input type='text' size='3' name='options[6]' value='$options[6]'></td>
  </tr>
  <tr> 
    <td>ShowStatusBar *:</td>
    <td><input type='text' size='3' name='options[7]' value='$options[7]'></td>
  </tr>
  <tr> 
    <td>Volume :</td>
    <td><input type='text' size='3' name='options[8]' value='$options[8]'></td>
  </tr>
  <td>Showcontrols* :</td>
    <td><input type='text' size='3' name='options[9]' value='$options[9]'></td>
  </tr>
  <tr>
    <td>Showaudiocontrols* :</td>
    <td><input type='text' size='3' name='options[10]' value='$options[10]'></td>
  </tr>
  </table>
";

    return $form;
}

function b_mediashow2_show($options)
{
    $block = [];

    require_once XOOPS_ROOT_PATH . '/modules/mediashow/include/func_mediashow.php';

    $gDirectory = '' . XOOPS_ROOT_PATH . '/modules/mediashow/media/video/';

    $gExtension = 'avi mpg mpeg wmv wmp rm';

    $ExpExt = explode(' ', $gExtension);

    sort($ExpExt);

    $countFile = count($getFile);

    $fp = fopen(XOOPS_ROOT_PATH . '/modules/mediashow/sql/video.txt', 'rb');

    $file = fgets($fp, 255);

    fclose($fp);

    $mediashow = XOOPS_URL . '/modules/mediashow/media/video/' . $file;

    $block['mediashow'] .= "<object id='MediaPlayer1' classid='clsid:22D6F312-B0F6-11D0-94AB-0080C74C7E95' width='$options[0]' height='$options[1]'>
            <param name='AudioStream' value='-1'>
            <param name='AutoSize' value='$options[3]'>
            <param name='AutoStart' value='$options[2]'>
            <param name='AnimationAtStart' value='$options[11]'>
            <param name='AllowScan' value='-1'>
            <param name='AllowChangeDisplaySize' value='-1'>
            <param name='AutoRewind' value='$options[4]'>
            <param name='Balance' value='$options[5]'>
            <param name='BaseURL' value>
            <param name='BufferingTime' value='$options[6]'>
            <param name='CaptioningID' value>
            <param name='ClickToPlay' value='0'>
            <param name='CursorType' value='0'>
            <param name='CurrentPosition' value='0'>
            <param name='CurrentMarker' value='0'>
            <param name='DefaultFrame' value>
            <param name='DisplayBackColor' value='-1'>
            <param name='DisplayForeColor' value='16777215'>
            <param name='DisplayMode' value='-1'>
            <param name='DisplaySize' value='-1'>
            <param name='Enabled' value='-1'>
            <param name='EnableContextMenu' value='-1'>
            <param name='EnablePositionControls' value='-1'>
            <param name='EnableFullScreenControls' value='-1'>
            <param name='EnableTracker' value='-1'>
            <param name='Filename' value=" . $mediashow . ">
			<param name='InvokeURLs' value='-1'>
            <param name='Language' value='-1'>
            <param name='Mute' value='0'>
            <param name='PlayCount' value='1'>
            <param name='PreviewMode' value='1'>
            <param name='Rate' value='1'>
            <param name='SAMILang' value>
            <param name='SAMIStyle' value>
            <param name='SAMIFileName' value>
            <param name='SelectionStart' value='-1'>
            <param name='SelectionEnd' value='-1'>
            <param name='SendOpenStateChangeEvents' Avalue='-1'>
            <param name='SendWarningEvents' value='-1'>
            <param name='SendErrorEvents' value='-1'>
            <param name='SendKeyboardEvents' value='0'>
            <param name='SendMouseClickEvents' value='0'>
            <param name='SendMouseMoveEvents' value='0'>
            <param name='SendPlayStateChangeEvents' value='-1'>
            <param name='ShowCaptioning' value='0'>
            <param name='ShowControls' value='$options[9]'>
            <param name='ShowAudioControls' value='$options[10]'>
            <param name='ShowDisplay' value='0'>
            <param name='ShowGotoBar' value='0'>
            <param name='ShowPositionControls' value='0'>
            <param name='ShowStatusBar' value='$options[7]'>
            <param name='ShowTracker' value='0'>
            <param name='TransparentAtStart' value='0'>
            <param name='VideoBorderWidth' value='0'>
            <param name='VideoBorderColor' value='0'>
            <param name='VideoBorder3D' value='0'>
            <param name='Volume' value='$options[8]'>
            <param name='WindowlessVideo' value='0'>
            <!--NETSCAPE PLUG-IN STARTS HERE-->
            <embed type='application/x-mplayer2' src=" . $mediashow . " name='NSPlay' pluginspage='http://www.microsoft.com/isapi/redir.dll?prd=windows&sbp=mediaplayer&ar=media&sba=plugin' showcontrols='$options[9]' showdisplay='0' showstatusbar='0' autostart='false' width='$options[0]' height='$options[1]'>
            </embed> 
          </object>";

    $block['mediashow'] .= "<form name='form1' id='form1' method='post' action='" . XOOPS_URL . "/modules/mediashow/mediashow.php'>";

    $block['mediashow'] .= '<select name="file" onchange="submit();" size="3">';

    foreach ($ExpExt as $findExt) {
        $getFile = @browse($gDirectory, $findExt);

        $countFile = count($getFile);

        if (0 != $countFile) {
            foreach ($getFile as $myFile) {
                $block['mediashow'] .= "<option value=$myFile>" . $myFile . '</option>';
            }
        }
    }

    $block['mediashow'] .= '</select>

</form>';

    $block['mediashow'] .= 'Playing : ';

    $block['mediashow'] .= $file;

    return $block;
}

function b_mediashow2_edit($options)
{
    $form = "<table width='100%' border='0' cellspacing='1' cellpadding='3'>
  <tr> 
    <td width='16%'>* 0 = Off -1 = On </td>
    <td width='84%'><em>Certaines options ne fonctionne pas avec Mozilla - Certain options does not function with Mozilla</em></td>
  </tr>
  <tr> 
    <td width='16%'>Largeur - Width  :&nbsp;</td>
    <td width='84%'><input type='text' size='3' name='options[0]' value='$options[0]'>
      pixel </td>
  </tr>
  <tr> 
    <td>Hauteur - Height :</td>
    <td><input type='text' size='3' name='options[1]' value='$options[1]'>
      pixel </td>
  </tr>
  <tr> 
    <td>Autostart *:</td>
    <td><input type='text' size='3' name='options[2]' value='$options[2]'></td>
  </tr>
  <tr> 
    <td>Autosize *:</td>
    <td><input type='text' size='3' name='options[3]' value='$options[3]'></td>
  </tr>
  <tr> 
    <td>AutoRewind*:</td>
    <td><input type='text' size='3' name='options[4]' value='$options[4]'></td>
  </tr>
  <tr> 
    <td>Balance :</td>
    <td><input type='text' size='3' name='options[5]' value='$options[5]'>
    </td>
  </tr>
  <tr> 
    <td>BufferingTime :</td>
    <td><input type='text' size='3' name='options[6]' value='$options[6]'></td>
  </tr>
  <tr> 
    <td>ShowStatusBar *:</td>
    <td><input type='text' size='3' name='options[7]' value='$options[7]'></td>
  </tr>
  <tr> 
    <td>Volume :</td>
    <td><input type='text' size='3' name='options[8]' value='$options[8]'></td>
  </tr>
  <td>Showcontrols* :</td>
    <td><input type='text' size='3' name='options[9]' value='$options[9]'></td>
  </tr>
  <tr>
    <td>Showaudiocontrols*:</td>
    <td><input type='text' size='3' name='options[10]' value='$options[10]'></td>
  </tr>
   <tr>
    <td>AnimationatStart*:</td>
    <td><input type='text' size='3' name='options[11]' value='$options[11]'></td>
  </tr>
  </table>";

    return $form;
}
