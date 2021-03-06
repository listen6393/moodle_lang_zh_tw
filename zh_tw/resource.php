<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'resource', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   resource
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = '點選 {$a}鏈結來下載這檔案。';
$string['clicktoopen2'] = '點選 {$a}鏈結來檢視這檔案。';
$string['configdisplayoptions'] = '選擇可以使用的選項，現有的設定不會被改變。按住CTRL鍵可選擇多個欄位。';
$string['configframesize'] = '當網頁或上傳的檔案在框架中顯示，這個設定值決定了框架大小。';
$string['configparametersettings'] = '在此設定，新增資源的表格中，參數設定面版的預設值。使用者一旦使用後，會變成使用者個人的偏好設定。';
$string['configpopup'] = '當新增一個新資源時，這個資源是否要採用彈出式視窗，以提供閱讀。這個選項預設是啟用的。';
$string['configpopupdirectories'] = '彈出視窗是否顯示預設目錄連結？';
$string['configpopupheight'] = '新視窗預設高度？';
$string['configpopuplocation'] = '彈出視窗是否顯示位址欄？';
$string['configpopupmenubar'] = '彈出視窗是否顯示功能表欄？';
$string['configpopupresizable'] = '彈出視窗是否可以調整大小？';
$string['configpopupscrollbars'] = '彈出視窗是否可滾動？';
$string['configpopupstatus'] = '彈出視窗是否顯示狀態欄？';
$string['configpopuptoolbar'] = '彈出視窗是否顯示工具欄？';
$string['configpopupwidth'] = '新視窗預設寬度？';
$string['contentheader'] = '內容';
$string['displayoptions'] = '可使用的顯示選項';
$string['displayselect'] = '顯示';
$string['displayselectexplain'] = '選擇顯示類型，不幸的是，不是所有類型都適合所有檔案。';
$string['displayselect_help'] = '這一設定，加上檔案類型和瀏覽器是否允許鑲入，決定了檔案是如何呈現？<br />
選項可以包括: <br />
* 自動的 - 讓系統依據檔案類型自動為您選擇最佳顯示方式。<br />
* 鑲入的 - 檔案被顯示在Moodle頁面內，有導覽列、檔案說明和任何區塊。<br />
* 強迫下載 - 使用者被提示要下載檔案<br />
* 以原視窗開啟 - 只有這檔案被顯示在瀏覽器視窗<br />
* 用彈出式視窗開啟 - 檔案被顯示在一彈出的小的新視窗中(可用滑鼠調整大小)，而沒有工具列和位址列<br />
* 用框架開啟 - 檔案被顯示在一框架上端有導覽列和檔案說明<br />
* 以新視窗開啟 - 檔案被顯示在另一新瀏覽器視窗，有工具列和位址列。';
$string['encryptedcode'] = '已加密的程式碼';
$string['filenotfound'] = '找不到檔案，抱歉。';
$string['filterfiles'] = '對檔案內容使用過濾器';
$string['filterfilesexplain'] = '選擇檔案內容過濾的類型，
請注意，這可能造成某些 Flash 和 Java小程式出問題。
請確定所有的文字檔是以  UTF-8 編碼。';
$string['filtername'] = '資源名稱 自動連結';
$string['forcedownload'] = '強迫下載';
$string['framesize'] = '頁框大小';
$string['legacyfiles'] = '移植舊課程檔案';
$string['legacyfilesactive'] = '啟用';
$string['legacyfilesdone'] = '已完成';
$string['modulename'] = '線上資源';
$string['modulenameplural'] = '線上資源';
$string['neverseen'] = '無人閱覽';
$string['notmigrated'] = '這一繼承的資源類型({$a})還沒有被移植，抱歉。';
$string['optionsheader'] = '選項';
$string['page-mod-resource-x'] = '任何線上資源模組頁面';
$string['pluginadministration'] = '線上資源模組管理';
$string['pluginname'] = '線上資源';
$string['popupheight'] = '彈出視窗高度(以像素表示)';
$string['popupheightexplain'] = '指定彈出式視窗的預設高度';
$string['popupresource'] = '這個資源應顯示在彈出視窗';
$string['popupresourcelink'] = '如果未生效，請點選這裡： {$a}';
$string['popupwidth'] = '彈出視窗寬度(以像素表示)';
$string['popupwidthexplain'] = '指定彈出式視窗的預設寬度';
$string['printheading'] = '顯示資源名稱';
$string['printheadingexplain'] = '在內容的上方顯示資源名稱？某些顯示類型可能無法顯示名稱，即使它已被啟用。';
$string['printintro'] = '顯示資源描述';
$string['printintroexplain'] = '在內容的下方顯示資源說明？某些顯示類型可能無法顯示說明，即使它已被啟用。';
$string['resourcecontent'] = '檔案和下層資料夾';
$string['resource:exportresource'] = '匯出資源';
$string['resource:view'] = '查看資源';
$string['selectmainfile'] = '請點選檔案旁邊的圖示，以便選出主要檔案。';
