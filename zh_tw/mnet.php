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
 * Strings for component 'mnet', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = '關於您的伺服器';
$string['accesslevel'] = '存取等級';
$string['addhost'] = '增加主機';
$string['addnewhost'] = '增加一個新主機';
$string['addtoacl'] = '增加到存取控制';
$string['allow'] = '允許';
$string['authfail_nosessionexists'] = '認證失敗：mnet連線session不存在。';
$string['authfail_sessiontimedout'] = '認證失敗：mnet連線session逾時。';
$string['authfail_usermismatch'] = '認證失敗：使用者不符合。';
$string['authmnetdisabled'] = 'Moodle網路<em>認證外掛</em>已經被<strong>停用</strong>。';
$string['badcert'] = '這不是合法的證書。';
$string['couldnotgetcert'] = '在<br />{$a} <br />沒有找到證書。主機可能已經當機或是設定錯誤。';
$string['couldnotmatchcert'] = '這和目前web伺服器發佈的證書不符合。';
$string['courses'] = '課程';
$string['courseson'] = '課程在';
$string['currentkey'] = '現在的公鑰';
$string['current_transport'] = '現在的傳輸';
$string['databaseerror'] = '無法將內容寫到這資料庫';
$string['deleteaserver'] = '刪除一個伺服器';
$string['deletehost'] = '刪除主機';
$string['deletekeycheck'] = '您確定要刪除這個密鑰嗎？';
$string['deleteoutoftime'] = '60秒刪除密鑰的視窗已經逾時了，請重新開始。';
$string['deleteuserrecord'] = 'SSO ACL：從{$a[1]}中刪除用戶{$a[0]}的記錄。';
$string['deletewrongkeyvalue'] = '發生了一個錯誤。如果您沒有刪除伺服器上的SSL密鑰，則很有可能您已經成為惡意攻擊的對象。未進行任何操作。';
$string['deny'] = '拒絕';
$string['description'] = '描述';
$string['duplicate_usernames'] = '我們未能創造一個索引，在您的用戶表上“ mnethostid ”和“使用者”的欄位中。您複製使用者的在您的用戶表時，可能發生。您的升級應仍順利完成。按一下上面的鏈接，將顯示在一個新視窗來修正此問題。您可以最後再升級。';
$string['enabled_for_all'] = '(這個服務已經對所有網站啟動)。';
$string['enterausername'] = '請輸入一個使用名稱，或是以逗號分隔的使用者清單。';
$string['error7020'] = '這個錯誤通常發生，如果遠端站台為您創造了一個帶有錯誤wwwroot紀錄，例：http://yoursite.com 而非http://www.yoursite.com，你應該與遠端站的管理員聯繫點與您的wwwroot，讓她為您的主機更新她的紀錄';
$string['error7022'] = '您發送到遠程站點的郵件是加密的，但沒有簽名。這是非常意外，您應該在可能的文件的錯誤如果發生這種情況給予盡可能多的訊息，關於moodle版本的問題等';
$string['error7023'] = '遠程站點試圖使用所有的方法將您的訊息解密。他們都失敗了。您或許能夠解決這個問題，使用手動重新鍵控與遠程站點。這是不可能發生的，除非你已經沒有與遠程站點溝通已經數個月';
$string['error7024'] = '您發送未加密的信息到遠端站台，但遠程站點不接受從您的網站的未加密的溝通，這是非常意外，您應該是可能文件的錯誤，如果發生這種情況給予盡可能多的信息，關於moodle版本的問題等';
$string['error7026'] = '關鍵是您的留言已簽署了與不同的關鍵遠程主機已對文件進行了您的伺服器。此外，遠程主機的企圖取得您當前的key，並沒有這樣做，請手動再試一次重新核對與遠程主機';
$string['error709'] = '遠端站台未能從你那邊獲取一個SSL的key';
$string['expired'] = '密鑰過期於';
$string['expires'] = '有效至';
$string['expireyourkey'] = '刪除這個密鑰';
$string['expireyourkeyexplain'] = 'moodle每28天會自動轉移您的密碼（預設)，但你也可以在任何時候選擇手動到期這個密碼。如果您認為此密碼匙已妥協，這將是有益的。更換會立即自動生成。刪去這一密碼將變得不可能為其他moodles與您溝通，直到您手動相互聯繫管理員，並為他們提供與您的新的密碼。';
$string['failedaclwrite'] = '對於使用者沒有通知mnet存取控制清單';
$string['forbidden-function'] = '對RPC而言該功能尚未啟用';
$string['forbidden-transport'] = '您正在嘗試使用的傳輸方法是不容許';
$string['forcesavechanges'] = '強迫更改儲存';
$string['helpnetworksettings'] = '配置inter-moodle的傳訊';
$string['hidelocal'] = '隱藏本地端的使用者';
$string['hideremote'] = '隱藏遠端的使用者';
$string['host'] = '主機';
$string['hostcoursenotfound'] = '主機或課程沒有發現';
$string['hostdeleted'] = '好-主機刪除';
$string['hostexists'] = '紀錄已經存在主機和moodle使用ID部署，按此繼續編輯記錄';
$string['hostname'] = '主機名稱';
$string['hostnamehelp'] = '完整合格的遠端主機網域名稱，例：www.example.com';
$string['hostnotconfiguredforsso'] = '對遠端登錄而言，這個遠端的moodle hub是未配置';
$string['hostsettings'] = '主機設定';
$string['http_self_signed_help'] = '在遠端主機上，允許使用自我簽名的DIY SSL認證連接';
$string['https_self_signed_help'] = '允許使用自我簽名的diy的SSL在PHP上連接，對遠端主機超過HTTP';
$string['https_verified_help'] = '允許使用SSL認證在遠程主機的連接';
$string['http_verified_help'] = '允許使用經過在PHP上SSL認證連接，在遠端主機，但超過HTTP（不通過https ）';
$string['id'] = 'ID';
$string['idhelp'] = '這個值是自動分配且不能被改變的';
$string['invalidaccessparam'] = '無效的存取參數';
$string['invalidactionparam'] = '無效的動作參數';
$string['invalidhost'] = '您必須提供有效的主機標識';
$string['invalidpubkey'] = '識別碼不是一個有效的SSL識別碼';
$string['invalidurl'] = '無效的URL參數';
$string['ipaddress'] = 'IP 位址';
$string['is_in_range'] = 'IP位址&nbsp;<code>{$a}</code>&nbsp; 代表了一個有效值得信賴的主機';
$string['ispublished'] = '{$a} Moodle 已為您啟用這項服務，';
$string['issubscribed'] = '{$a}Moodle正在您的主機上訂閱該服務。';
$string['keydeleted'] = '您的密碼已成功刪除且被取代';
$string['keymismatch'] = '此主機持有的公鑰是不同於目前公佈的公鑰';
$string['last_connect_time'] = '最後連線時間';
$string['last_connect_time_help'] = '上次連接到主機的時間';
$string['logs'] = '日誌';
$string['mnet'] = 'Moodle 網路';
$string['mnet_concatenate_strings'] = '串連（最多)3個字元串及返回結果';
$string['mnetdisabled'] = 'Moodle Network<strong>被關閉</strong>。';
$string['mnetlog'] = 'Logs';
$string['mnetpeers'] = 'Peers';
$string['mnetservices'] = '服務';
$string['mnetsettings'] = 'Moodle 網路設定';
$string['moodle_home_help'] = '遠程伺服器中Moodle主頁的路徑，例如：/moodle/.';
$string['net'] = '網路';
$string['networksettings'] = '網路設定';
$string['never'] = '從不';
$string['noaclentries'] = '在SSO存取控制清單中，沒有任何記錄。';
$string['nocurl'] = 'PHP Curl 函數庫沒有安裝';
$string['off'] = '關';
$string['on'] = '開';
$string['publickey'] = '公鑰';
$string['publish'] = '公開';
$string['remotecourses'] = '遠端的使用者';
$string['remotehost'] = '遠端的中繼站';
$string['remotehosts'] = '遠端的主機';
$string['requiresopenssl'] = 'Moodle網路需要 OpenSSL 延伸套件';
$string['restore'] = '復原';
$string['reviewhostdetails'] = '檢閱主機內容';
$string['reviewhostservices'] = '檢閱主機服務';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP(未加密)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP(自我簽名)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS(自我簽名)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS(已簽名)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP(已簽名)';
$string['settings'] = '設定';
$string['showlocal'] = '顯示本地的使用者';
$string['showremote'] = '顯示遠端的使用者';
$string['ssl_acl_allow'] = 'SSO ACL: Allow user {$a}[0] from {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Deny user {$a}[0] from {$a}[1]';
$string['ssoaccesscontrol'] = 'SSO 存取控制';
$string['strict'] = '嚴密的';
$string['subscribe'] = '訂約';
$string['system'] = '系統';
$string['testtrustedhosts'] = '測試一個位址';
$string['trustedhosts'] = 'XML-RPC主機';
$string['version'] = '版本';
$string['warning'] = '警告';
$string['yourhost'] = '您的主機';
$string['yourpeers'] = '您的夥伴點(Peer)';
