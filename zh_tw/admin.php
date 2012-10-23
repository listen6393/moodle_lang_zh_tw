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
 * Strings for component 'admin', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = '禁止存取';
$string['accounts'] = '帳戶';
$string['additionalhtml'] = '外加的HTML';
$string['additionalhtml_desc'] = '這些設定允許你指定你要加到每一頁的HTML。

你可以設定把HTML加到HEAD標籤裡面，緊接開啟的BODY標籤之下，或緊接關閉的BODY標籤之前。

這樣做可讓你很容易在每一頁加上自製的頁頭或頁尾，或為服務，如 Google Analytics 提供支援，而且它獨立於你挑選的主題佈景。';
$string['additionalhtmlfooter'] = '在 BODY 關閉之前';
$string['additionalhtmlfooter_desc'] = '這裡的內容將會被添加到每一頁，在body標籤關閉之前。';
$string['additionalhtmlhead'] = '在 HEAD 之內';
$string['additionalhtmlhead_desc'] = '這裡的內容將會被添加到每一頁的HEAD標籤的底部';
$string['additionalhtml_heading'] = '外加的HTML添加到每一頁。';
$string['additionalhtmltopofbody'] = '當 BODY是被開啟的';
$string['additionalhtmltopofbody_desc'] = '這裡的內容將會立刻被添加到每一頁，在開啟的BODY標籤。';
$string['admincategory'] = '類目：{$a}';
$string['adminseesall'] = '管理者可以瀏覽全部';
$string['adminseesallevents'] = '管理者可以看見所有事件';
$string['adminseesownevents'] = '管理者只看見自己的事件(同其他使用者)';
$string['advancedfeatures'] = '進階功能';
$string['allcountrycodes'] = '所有國家代碼';
$string['allowbeforeblock'] = '允許的清單將會優先處理';
$string['allowbeforeblockdesc'] = '預設的狀況下，禁止瀏覽的IP列表會先被採用。如果啟用此選項，則允許瀏覽的IP列表會優先於禁止訪問列表。';
$string['allowblockstodock'] = '允許區塊使用這DOCK';
$string['allowcategorythemes'] = '允許自訂類別佈景';
$string['allowcoursethemes'] = '允許自訂課程佈景';
$string['allowediplist'] = '允許的IP清單';
$string['allowemailaddresses'] = '允許的電子郵件網域名稱';
$string['allowframembedding'] = '允許鑲入的架框';
$string['allowframembedding_help'] = '允許將本站嵌入到外部網站的框架(frame)中。基於安全性考量，不建議啟用此特性。';
$string['allowobjectembed'] = '允許使用 EMBED 與 OBJECT 標籤';
$string['allowthemechangeonurl'] = '允許在這網址中改變主題';
$string['allowuserblockhiding'] = '允許使用者隱藏區塊';
$string['allowuserswitchrolestheycantassign'] = '允許沒有指派角色能力的用戶來切換角色';
$string['allowuserthemes'] = '允許使用者自選佈景';
$string['antivirus'] = '防毒';
$string['appearance'] = '外觀';
$string['aspellpath'] = 'aspell的路徑';
$string['authentication'] = '身份認證';
$string['authpreventaccountcreation'] = '當正在驗證時，防止帳號被建立';
$string['authpreventaccountcreation_help'] = '當認證用戶且它在本站還沒有帳號時，會自動在本站建立帳號。如果使用外部資料庫(例如LDAP)做認證，但是您希望只允許在本站有帳號的使用者瀏覽，那麼就啟用此選項。新帳號可以透過手動建立或者上傳使用者建立。注意此設定不會引響MNet認證。';
$string['authsettings'] = '管理認證方式';
$string['autolang'] = '自動偵測語言';
$string['autologinguests'] = '自動登入為訪客';
$string['availablelicenses'] = '可用的授權方式';
$string['availableto'] = '可用於';
$string['backgroundcolour'] = '透明色';
$string['backups'] = '備份';
$string['backup_shortname'] = '使用課程名稱作為備份檔的檔名';
$string['backup_shortnamehelp'] = '使用課程名稱作為備份檔檔名的一部分';
$string['badwordsconfig'] = '輸入禁用詞語列表（用逗號,分隔）';
$string['badwordsdefault'] = '如果自訂列表是空的，將使用語言包所提供的預設列表。';
$string['badwordslist'] = '自訂禁用語列表';
$string['blockediplist'] = '封鎖的IP清單';
$string['blockinstances'] = '區塊';
$string['blockmultiple'] = '多重區塊';
$string['blockprotect'] = '保護以免被刪除';
$string['blockprotect_help'] = '被選擇的區塊實體不會在全站場景下被刪除。這主要用來保護導覽和設定版面。如果他們被意外刪除，是很難還原回來的。';
$string['blocksettings'] = '管理區塊';
$string['blockunprotect'] = '未保護';
$string['bloglevel'] = 'Blog顯示層次';
$string['bookmarkadded'] = '新增書籤了';
$string['bookmarkalreadyexists'] = '這個頁面已經在書籤中';
$string['bookmarkdeleted'] = '書籤刪除了';
$string['bookmarkthispage'] = '將這個頁面加入書籤';
$string['cachejs'] = '快取Javascript';
$string['cachejs_help'] = '將Javascript快取並壓縮，可以明顯改進頁面裝載的表現，強烈建議使用在正式網站中，若是測試中的網站，建議關閉此功能。';
$string['cachetext'] = '文字快取保留時間';
$string['cachetype'] = '快取類型';
$string['calendarexportsalt'] = '匯出行事曆時用的添加碼';
$string['calendarsettings'] = '行事曆';
$string['calendar_weekend'] = '週末';
$string['cannotdeletemodfilter'] = '你不能將"{$a->filter}"解除安裝，因為它是 "{$a->filter}"模組的一部分。';
$string['cfgwwwrootslashwarning'] = '您的config.pho內的$CFG->wwwroot定義有誤。在字串尾端多了\'/\'字元，請您移除它。不然您會收到奇怪的錯誤訊息，如<a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>所報告的。';
$string['cfgwwwrootwarning'] = '您的config.pho內的$CFG->wwwroot定義有誤。和您現在存取的網址(URL)不同， 請更正它。不然您會收到奇怪的錯誤訊息，如<a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>所報告的。';
$string['change'] = '變更';
$string['checkboxno'] = '否';
$string['checkboxyes'] = '是';
$string['choosefiletoedit'] = '選擇要編修的檔案';
$string['clamfailureonupload'] = 'Clam AV失敗時';
$string['cleanup'] = '清除';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 'y';
$string['cliincorrectvalueerror'] = '錯誤，不正確的值 "{$a->value}" 用於 "{$a->option}"';
$string['cliincorrectvalueretry'] = '不正確的值，請再試一次';
$string['clistatusdisabled'] = '狀態：關閉';
$string['clistatusenabled'] = '狀態：啟動';
$string['clitypevalue'] = '打入一值';
$string['clitypevaluedefault'] = '打入一值，按Enter可使用預設值({$a})';
$string['cliunknowoption'] = '不認得的選項：  {$a}
請使用 --幫助 選項。';
$string['cliupgradefinished'] = '指令行升級已經成功地完成';
$string['cliupgradenoneed'] = '已安裝的版本 {$a}不需要升級。謝謝您的來訪。';
$string['cliyesnoprompt'] = '輸入y(是) 或n(否)';
$string['commentsperpage'] = '評論顯示在在每一頁';
$string['commonfiltersettings'] = '共同過濾器設定';
$string['commonsettings'] = '共同的設定';
$string['componentinstalled'] = '元件已安裝';
$string['computedfromlogs'] = '從 {$a} 開始計算的日誌記錄';
$string['condifmodeditdefaults'] = '你在此設定的值，將會作為你建立一新活動時，活動設定表單上的預設值。

你也可以配置哪一個活動設定是屬於進階的。';
$string['confeditorhidebuttons'] = '請選擇HTML編輯器中要隱藏的按鈕。';
$string['configallcountrycodes'] = '這是可以在不同地方用來選擇國家的清單，比如說用戶的個人資料表。</br>
如果保持空白(預設)，將會使用在標準英文語言包的 countries.php 檔案裡的清單。</br>
這是來自ISO 3166-1的清單。
否則的話，你可以指定一個以逗點分隔的清單，例如：\'GB,FR,ES\'。</br>
如果你在此加上新的、非標準的代碼，你就需要把它們加到\'en\'(英文)和你的語言包(可能是\'zh_tw\')裡的 countries.php 檔案中。';
$string['configallowassign'] = '允許每欄左邊的角色可以指派的角色';
$string['configallowblockstodock'] = '若啟用，且被選出的主題佈景所支援，那使用者可以選擇把區塊搬移到一特定的靠泊區。';
$string['configallowcategorythemes'] = '開啟這個選項，佈景可套用於類別層級。這將會影響所有子類別及類別中的課程。除非他們已被另外設定佈景。注意：開啟這個選項可能會影響系統效能。';
$string['configallowcoursethemes'] = '如果啟動，則每個課程可以設定自己的佈景。課程的佈景將覆蓋在其他位置(網站、使用者或活動)所設定的佈景。';
$string['configallowemailaddresses'] = '如果您希望限制新的電子郵件位址在一定的網域名稱中，可以將它們列出，允許的網域名稱以空格分隔。系統將會拒絕其他網域名稱的郵件信箱。例如<strong>ourcollege.edu.au .gov.au</strong>';
$string['configallowobjectembed'] = '預設的安全考量，一般使用者是不能在網頁HTML中直接使用MBED或OBJECT標籤來嵌入多媒體(如Falsh)的(雖然透過mediaplugins過濾器已經很安全)。如果您希望允許使用者使用上述標籤，請開啟此選項。';
$string['configallowoverride'] = '允許每欄左邊的角色可以置換的角色';
$string['configallowoverride2'] = '選擇那些角可以被左邊欄中角色修改。<br />注意，這些設定權適用於具有權限moodle/role:override或moodle/role:safeoverride的使用者。';
$string['configallowswitch'] = '要選擇一使用者可以切換過去的角色，這是要根據他們已經有的角色而定。<br/>
除了要在這個表格中添加一個條目之外，該用戶也必須具有 moodle/role:switchroles 權限，才能夠切換。<br/>
注意，它只可能切換到有 moodle/course:view 權限的角色，而且不能切換到有 moodle/site:doanything 權限，因此，在這表格裡，有些欄是關閉的。';
$string['configallowthemechangeonurl'] = '如果啟用，那麼可以用下面辦法邊更佈景主题：<br />
向任意 Moodle URL加上?theme=themename（例如：mymoodlesite.com/?theme=afterburner）或<br />
向任意 Moodle 内部 URL加上&theme=themename（例如：mymoodlesite.com/course/view.php?id=2&theme=afterburner）。';
$string['configallowuserblockhiding'] = '是否允許使用者隱藏或顯示網站中各頁面兩側的區塊？這個功能使用JavaScript和Cookie來記住每一個可摺疊區塊的狀態，它只會影響使用者自己的畫面。';
$string['configallowuserswitchrolestheycantassign'] = '預設情況下，使用者必需有moodle/role:assign權限才能切換角色。啟用這個選項會去掉這一限制，並使用"允許角色分配"表格來確定"切換角色到"下拉選單中的內容。我們建議您，在允許角色分配表格中，不要允許使用者切換到權限更高的角色。';
$string['configallowuserthemes'] = '如果您啟用，則使用者可以設定自己的佈景主題。使用者的佈景主題設定會覆蓋網站的佈景主題(但不會取代課程的)。';
$string['configallusersaresitestudents'] = '是否假定<strong>所有</strong>訪問網站首頁的用戶為學生。如果設定為是，則所有經過確認的用戶帳號都可以參加首頁上學生的活動。如果設定為否，則只有那些至少參加了一門課程學習的用戶才可以參加首頁上學生的活動。只有管理員和特別指定的教師才可以作為這些首頁活動的教師。';
$string['configauthenticationplugins'] = '請選擇要使用的認證外掛並且妥善安排，自動註冊功能將會透過註冊欄位選擇的外掛處理（通常是 email）。';
$string['configautolang'] = '如果關閉網站預設值，就會由瀏覽器的設定來偵測預設的語言。';
$string['configautologinguests'] = '當訪問者訪問時，是否自動以訪客(guest)身份登錄那些允許訪客(guest)進入的課程。';
$string['configbloglevel'] = '此設定可以限制瀏覽本網站部落格的使用者層級。要注意的是：設定的是<br>瀏覽者</br>的層級，與發表者或者部落格型態無關。如果您不想要部落格，部落格也可以完全停用。';
$string['configcachetext'] = '對於較大的或者是開啟了文本過濾器的網站，這個設置可以提高速度。在一段時間之內，已經處理過的文本的副本將會被保留。如果將這個值設得太小會減慢相應速度，但設定得太大也會使文本刷新緩慢。';
$string['configcachetype'] = '選擇 Moodle 要使用的快取類型，這只會設定快取，記得啟用 rcachee 來讓其他功能使用快取。 <strong>只有在</strong>您需要減少資料庫系統負載時才啟用，因為這會影響執行速度。中型網站建議使用\'internal\'；單一網頁伺服器並且安裝了 eAccelerator 或 Turckmmcache <em>且啟用共用記憶體選項</em> 時建議試試\'eaccelerator\'；如果您安裝了多個伺服器，且執行了一或多個 memcached 常駐以及使用 PHP-memcached 外掛，請選擇 \'memcached\' 並且調整下面的 memached 選項<br /><strong>注意：</strong> 請確認實際環境中的效能，快取功能可能讓網站速度減慢。在高流量的環境中 eAccelerator 與 memcached 可以帶來幫助，但是會增加網頁伺服器的 CPU 使用成本。';
$string['configcalendarexportsalt'] = '這個隨機文字是用來改進認證令牌的安全性，這令牌是用來匯出行事曆。

請注意，如果你更改這一添加碼，所有現有的令牌都會失效。';
$string['configclamactlikevirus'] = '檔案似乎有病毒';
$string['configclamdonothing'] = '檔案沒問題';
$string['configclamfailureonupload'] = '如果您讓clam掃瞄上傳的文件，但並未正確配置clam或它因某些未知原因而運行失敗了，那應該怎麼做? 如果您選擇了「認為文件帶病毒」，那麼它們將會被轉移到隔離區或是被刪除。如果您選擇了「認為文件沒問題」，那麼文件將會如往常一樣被轉移到目標目錄中。無論選擇哪個，系統都會提醒管理員clam運行失敗了。如果您選擇「認為文件帶病毒」且由於某些原因clam運行失敗了(通常是因為您未能指定合法的 pathtoclam值)，所有上傳的文件將會被轉移到隔離區或者被刪除。使用這個設置要小心。';
$string['configconvertformat'] = '如果<i>latex</i>、<i>dvips</i> 和 <i>convert</i> 有效，這將使用指定的格式建立影像。否則，將使用mimeTeX建立GIF圖片。';
$string['configcookiehttponly'] = '使用新的PHP 5.2.0功能-瀏覽器只能用http要求來傳送cookie，不能用腳本語言傳送。不是所有的瀏覽器都支援此功能，此功能也可能與目前的程式碼不相容。此功能有助於防止部分XSS型式的攻擊。';
$string['configcookiesecure'] = '如果伺服器僅接受https連線，建議啟動安全cookies傳送。啟動時，請確認網站伺服器不能接受http://或設定重新導向至固定的https://位址。當 <em>wwwroot目錄</em>網址不是以https://開頭時，此設定自動關閉。';
$string['configcountry'] = '如果在此處設定一個國家或地區，則它將被用於使用者註冊時的預設值。如果要強制使用者自己選擇一個國家或地區，則保持此處為空白';
$string['configcourserequestnotify'] = '輸入有建立課程申請時應當被通知的使用者。';
$string['configcourserequestnotify2'] = '有新建立課程聲請時會被通知的使用者。只有擁有確認課程申請權限的用戶才會被列出。';
$string['configcoursesperpage'] = '輸入課程清單每頁顯示的課程數目。';
$string['configcronclionly'] = '設定這個項目後排程指令就只能夠從指令列執行，而不是透過網頁；這個設定會覆蓋下面設定的 cron 密碼。';
$string['configcronremotepassword'] = '這表示 cron.php 程式如果沒有提供密碼就不會執行，提供密碼的方式就像這樣：<pre> http://site.example.com/admin/cron.php?password=opensesame </pre>，保持空白表示不需要密碼。';
$string['configcurlcache'] = 'cURL快取的存活時間，以秒計';
$string['configcustommenuitems'] = '你可以在此自訂一個客製化選單，以便在佈景主題中顯示。</br>
每一行包含一些選單文字，一個鏈結的網址 (選用的) 和一個工具提示標題(選用的), 並以"|"符號隔開。</br>
你可以用"--"來指定分類架構。 </br>
例如: <pre> Moodle community|http://moodle.org -Moodle free support|http://moodle.org/support -Moodle development|http://moodle.org/development --Moodle Tracker|http://tracker.moodle.org --Moodle Docs|http://docs.moodle.org -Moodle News|http://moodle.org/news Moodle company -Moodle commercial hosting|http://moodle.com/hosting -Moodle commercial support|http://moodle.com/support </pre>';
$string['configdbsessions'] = '如果開啟此設定，將會使用資料庫來保存現在的連線資訊。這對於那些大且繁忙的網站或是在群集中建立的網站是很有用的。對於多數網站，這個選項應當保持關閉，改用伺服器的硬碟來保存連線資訊。注意改變這個設定將會強制退出所有的正在連線的使用者(包括您)。';
$string['configdebug'] = '如果您打開這個選項，那麼PHP的錯誤報告會增加，頁面上會出現更多的警告信息。這只對開發人員有用。';
$string['configdebugdisplay'] = '啟用後錯誤報告會顯示在 HTML 頁面，這個功能雖然實用，但是可能會破壞 XHTML、JS、cookies 與 HTTP 頁首；關閉表示記錄在伺服器紀錄檔案中，比較方便偵錯， PHP 的 error_log 設定會決定檔案的位置。';
$string['configdebugpageinfo'] = '如果您希望在頁面註解顯示頁面訊息，就啟用此設定。';
$string['configdebugsmtp'] = '在寄送郵件到 SMTP 伺服器時啟用額外的偵錯資訊。';
$string['configdebugvalidators'] = '如果您希望頁面底端有到外部檢查器的連結，就啟用此選項。您可能需要建立一個名為<em>w3cvalidator</em>的使用者，並賦予它使用者權限。這個變動可能使某些人未經授權就能瀏覽本站，所以吳耀在正式使用的網站上使用它。';
$string['configdefaulthomepage'] = '這裡決定已經登入的使用者首頁';
$string['configdefaultrequestcategory'] = '使用者提出的課程請求會自動放在這個類別。';
$string['configdefaultrequestedcategory'] = '當課程申請核淮後，預設放到那個類別中。';
$string['configdefaultuserroleid'] = '所有登入的使用者會具有您在這兒指定的權限，加上他們本身已經擁有的。預設是一般使用者角色（舊版是訪客角色），這不會跟他們原有的角色產生衝突，只是確保所有使用者具有課程層級所沒有指派的權限（例如發表部落格、管理行事曆等）。';
$string['configdeleteincompleteusers'] = '超過這個時限，設定不完整的舊帳號將被刪除。';
$string['configdeleteunconfirmed'] = '使用電子郵件認證註冊時，超過這個時限未認證的用戶將被刪除。';
$string['configdenyemailaddresses'] = '要拒絕某些網域名稱的電子郵件地址，請把他們列在這裡。系統會接受所有其它網域名稱的郵件。例如<strong>hotmail.com yahoo.co.uk</strong>';
$string['configdisableuserimages'] = '關閉使用者變更個人資料的圖片功能。';
$string['configdisplayloginfailures'] = '為指定用戶顯示登錄失敗的日誌。';
$string['configdndallowtextandlinks'] = '打開或關閉拖曳文字、連結到課程頁面功能。注意，拖曳文字到Firefox或在不同瀏覽器間拖曳是不可靠的，可能導致上傳成空的內容或是混亂的文字。';
$string['configdocroot'] = '定義Moodle文件的路徑.如果您希望擁有個別的線上文件，您可以修改它.然而, 如果你做了變更,請確認您的文件中的路徑格式與 http://docs.moodle.org中的格式相同.';
$string['configdoctonewwindow'] = '如果您啟動此項，Moodel文件的連結將顯示在新視窗中。';
$string['configeditordictionary'] = '這個數值會在 aspell 沒有使用者指定語言的字典時使用';
$string['configeditorfontlist'] = '選擇要出現在編輯器下拉選單中的字體。';
$string['configemailchangeconfirmation'] = '當用戶更改它們的電子郵件信箱資料，需要執行電子郵件確認的步驟。';
$string['configenableajax'] = '這個設定允許您控制網站的 AJAX (advanced client/server interfaces using Javascript) 使用，即使啟用這個項目使用者也可以在自己的設定中調整，不過停用就會套用到所有使用者。';
$string['configenablecalendarexport'] = '啟用匯出或訂閱行事曆';
$string['configenablecomments'] = '啟用回應';
$string['configenablecourserequests'] = '此選項將允許任何使用者皆可要求建立一課程。';
$string['configenabledevicedetection'] = '允許偵測移動設備，如智慧型手機、平板電腦、或預設的設備(桌上型電腦、手提電腦等)，以供主題布景和其他功能的應用。';
$string['configenablegroupmembersonly'] = '如果啟用，將只有群組成員才能瀏覽活動。這可能會增加伺服器的負擔。此外，成績單的分類必須經過特別的設定才能使活動對非群組成員隱藏。';
$string['configenablemobilewebservice'] = '這個選項啟用所有討論區的RSS彙集。您仍需啟用每一個討論區配置中的RSS彙集選項-請至系統管理下的模組設定。';
$string['configenablerssfeeds'] = '這個選項啟用所有討論區的RSS彙集。您仍需啟用每一個討論區配置中的RSS彙集選項-請至系統管理下的模組設定。';
$string['configenablerssfeedsdisabled'] = '由於RSS彙集已經在整個網站關閉了，因此無法使用。要開啟它，訪問管理中的變量設置。';
$string['configenablerssfeedsdisabled2'] = 'RSS彙集在伺服器階層是關閉的。您須在【主機/RSS】中先啟動它們。';
$string['configenablesafebrowserintegration'] = '啟用後，在測驗設定選單的"瀏覽器安全"區域中可以選擇"必須使用Safe Exam Browser"瀏覽http://www.safeexambrowser.org/　了解更多資訊。';
$string['configenablestats'] = '如果您在此選擇\'是\'，Moodle將處理記錄及收集統計資料。根據您網路的流通量而定，可能會需要一些時間。如果您啟動此選項，您將可以看到關於您的每個課程或整個網站的有趣統計圖和統計資料。';
$string['configenabletrusttext'] = 'Moodle預設會過濾來自使用者的文字來移除可能存在安全風險的惡意程式碼、媒體檔案，可信任內容系統讓指定的使用者能夠在沒有干擾的情況下在內容中使用那些進階功能；您需要先啟用這個設定，接著將信任內容的權限授予給指定的 Moodle 角色，接著來自該角色使用者建立或上傳的內容將會標示為可信任的，在顯示前不會進行過濾。';
$string['configenablewebservices'] = '其他系統可以透過其他web服務登入到此Moodle並做各種操作。基於安全考量，您應該禁用這個選項，除非您真的要使用它。';
$string['configenablewsdocumentation'] = '啟用自動產生web伺服器文件。使用者可以在他的安全密碼頁{$a}。只會顯示已啟用協定的文件。';
$string['configerrorlevel'] = '選擇顯示的PHP警告數目。「正常」通常是最佳選擇。';
$string['configextendedusernamechars'] = '啟用這個選項將允許學生在用戶名稱中使用任何字元(這並不會影響它們實際的名字)。預設值是「否」，限制用戶名稱只能使用英文字母和數字。';
$string['configextramemorylimit'] = '某些腳本像搜尋、備份/回存 或cron需要較多的記憶體，大型網站請設定較高的值。';
$string['configfilterall'] = '過濾全部字符串，包括頭部、標題、導航欄等等。當使用多語言過濾時，這是非常有用的，否則它只會給您的系統帶來額外的負擔。';
$string['configfiltermatchoneperpage'] = '自動連結過濾器將只在整個網頁中的第一個相符的文字產生連結，其他的將被忽略。';
$string['configfiltermatchonepertext'] = '自動連結過濾器將在網頁中的每一項目中(如資源、區塊)的第一個相符的文字產生連結，其他的將被忽略。如果每頁一個的設定為<i>是</i>時，此設定會被忽略。';
$string['configfilteruploadedfiles'] = '使用該設置會讓Moodle在顯示上傳的HTML和文本前用過濾器處理他們。';
$string['configforcelogin'] = '正常來說，網站和課程列表的首頁(不包含課程)，並不需要使用者登入。如果您要強制使用者登入才能瀏覽，請啟用此功能。';
$string['configforceloginforprofiles'] = '啟用這個設定會強制訪問者在查看使用者資料頁面時必須以真實(非訪客)登錄。預設的情況下此選項是關閉的(「否」)，這樣訪問者可以在未正式入學前查看每一個課程的教師情況，但同時搜索引擎也可以看到這些資料。';
$string['configfrontpage'] = '上面選擇的項目會顯示在網站的首頁';
$string['configfrontpageloggedin'] = '上面選擇的項目會在使用者登入時顯示於網站首頁。';
$string['configfullnamedisplay'] = '這定義了如何顯示名字。對於多數單一語言網站，最有效的設定是預設的「名 + 姓」，但也可以選擇隱藏姓或者讓當前的語言包來決定(一些語言有不同的習俗)。';
$string['configgdversion'] = '指明已安裝的GD版本。預設顯示的版本號是自動探測的結果。不要輕易改變它，除非您清楚您在做什麼';
$string['configgeoipfile'] = 'GeoIP City 二進位資料檔位置。此檔不屬Moodle發行，必須另外從<a href="http://www.maxmind.com/">MaxMind</a>取得。您可使用商業版本或免費版本。<br />簡易下載 <a href="http://www.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz" >http://www.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz</a>然後解壓縮至您的伺服器中的 "{$a}"目錄。';
$string['configgetremoteaddrconf'] = '若你的伺服器是位於反向代理伺服器之後，你可以使用這一設定來指定哪一個HTTP表頭可以信任，以包含遠端IP位址。

這表頭會依序被讀取並使用第一個可以使用的。';
$string['configgooglemapkey'] = '您必須輸入一特定的鑰匙才能使用以IP位址檢視的Google Maps影像。您可以在<a href="http://code.google.com/apis/maps/signup.html" >http://code.google.com/apis/maps/signup.html</a>.<br />免費取得此鑰匙。您的網站URL是:{$a}';
$string['configgradebookroles'] = '這個設定讓您可以控制顯示在成績單的人，要顯示在課程成績單的人需要在課程中擁有至少一個指定的角色。';
$string['configgradeexport'] = '選擇何種成績簿匯出格式當作您匯出成績的主要方法。選擇外掛將設定每一筆績績使用"最新匯出"欄位。例如，此可能形成匯出的記錄被區分為"最新"或者是"已更新"。倘若您尚未決定，則不要勾選任何選項。';
$string['confighiddenuserfields'] = '選題哪些使用者資訊要隱藏，除了課程的教師們/管理者可看見外。此設定可以增加學生的隱私。同時按下CTRL鍵作多欄位的選擇。';
$string['configidnumber'] = '指定用戶是否(a)不需要ID號，(b)要ID號但可留空，(c)必須要ID號。如果給出，它將顯示在用戶資料中。';
$string['configintcachemax'] = '只用在內部快取，保留在快取的資料數量上限，建議為 50 ，數值越小使用的記憶體越少。';
$string['configintro'] = '在此頁面中，您可以設定許多環境變數，它們可讓Moodle在您的伺服主機上運作的更好。不必太擔心—預設的設定值已經能讓系統很好地運作，而且您以後也可以再回到這裡改變這些設定值。';
$string['configintroadmin'] = '在這個頁面中，您可以設定您的主管理員帳號，它可以完全控制網站。請確認您為它設定了一個安全的用戶名和密碼以及一個合法的電子郵件地址。您以後可以建立更多的管理員帳號。';
$string['configintrosite'] = '在此頁中您可以配置首頁和這個網站的名稱。您可以在今後任何的時間透過首頁上的「網站設定」連接返回到此頁修改這些設定。';
$string['configiplookup'] = '當您在記錄中點選了一個 IP 位址（例如 34.12.222.93），系統會顯示指定 IP 的可能位置；有許多這樣功能的外掛可以選擇，各有好壞。';
$string['configkeeptagnamecase'] = '如果您想將使用者建立的標示名稱，保留其輸入時的大小寫，則勾選此項。';
$string['configlang'] = '為整個網站選擇一種預設的語言。用戶是可以設定自己的語言的。';
$string['configlanglist'] = '此處留空將允許使用者從您所有已安裝的語言種類中任選一種。當然如果您要縮短語言選單，那麼可以在此填入語言代碼，以逗號(,)隔開。例如：zh_tw,ja,en,es_es,fr,it。';
$string['configlangmenu'] = '選擇要不要在主頁、登錄頁顯示通用的語言選單。這並不影響使用者在他們的個人資料中選擇偏愛的語言設定值。';
$string['configlangstringcache'] = '將所有語言編譯後的字串快去在資料目錄中。如果您正在翻譯Moodle，或在Moodle程式碼編輯了字串，那麼應該關閉此選項。否則請啟用它，來提高效能。';
$string['configlatinexcelexport'] = '選擇 Excel 匯出資料的編碼';
$string['configlocale'] = '選擇網站的地區設定——它會影響日期的格式和語言。您的操作系統上必須安裝這種地區設置(如en_US或es_ES)。如果不知如何選擇，請不要填寫。';
$string['configloginhttps'] = '啟用此選項會使 Moodle 在登入頁使用比較安全的https方法連接傳送資料(提供安全的登入)，然後在稍後改用正常的http連接以恢復到一般速度。<b>注意 </b>：此設定需要在web伺服器啟動https功能才可以使用，否則您自己可能會被鎖在站台之外，無法登入。';
$string['configloglifetime'] = '在此指定保存用戶活動日誌的時間長短。超出此時間段的日誌將被自動刪除。最好是將日誌保留盡量長的時間，萬一需要他們呢？但如果您的伺服主機非常繁忙且有性能方面的問題，您也許會希望減少保留日誌的時間。';
$string['configlookahead'] = '預看天數';
$string['configmaxbytes'] = '這一設定限制了整個網站內上傳檔案的最大容量。

這個設定會受到PHP設定中的 upload_max_filesize 以及Apache設定中 LimitRequestBody 的影響。

換句話說，這個maxbytes設置會限制課程或模組層次中選擇檔案大小的範圍。如果選擇"伺服器的限制"，那將會使用伺服器限制的最大值。';
$string['configmaxconsecutiveidentchars'] = '最大連續相同字元';
$string['configmaxeditingtime'] = '此參數指定使用者在多長時間內可以重新修改討論區的張貼內容。通常30分鐘比較合適。';
$string['configmaxevents'] = '預看事件數';
$string['configmemcachedhosts'] = '使用 memcached 時，用逗點分隔執行 memcached 程式的主機清單，使用 IP 位址可以避免 DNS 延遲，而在正常運行中的系統上新增、移除主機時可能會產生問題。';
$string['configmemcachedpconn'] = '在 memcached 環境使用持續連線，請小心使用，在 memcached 重新啟動時可能會造成 Apache/PHP 出現問題。';
$string['configmessaging'] = '是否應當開啟在網站用戶之間發送簡訊的功能?';
$string['configmessagingallowemailoverride'] = '允許使用者將電子郵件通知送出到個人資料中電子郵件位址之外的位址。';
$string['configmessagingdeletereadnotificationsdelay'] = '可以刪除已經讀取的通知，以節省空間。通知被閱讀多久後可以被刪除？';
$string['configmessaginghidereadnotifications'] = '在瀏覽訊息歷程時，隱藏討論區發文之類的通知';
$string['configminpassworddigits'] = '密碼必須有這麼多位數。';
$string['configminpasswordlength'] = '密碼必須有這麼多字元長度。';
$string['configminpasswordlower'] = '密碼必須有這麼多小寫字母。';
$string['configminpasswordnonalphanum'] = '密碼必須有這麼多非阿拉白數字字元。';
$string['configminpasswordupper'] = '密碼必須有這麼多大寫字母。';
$string['configmodchooserdefault'] = '是否預設為將活動挑選器顯示給用戶看？';
$string['configmycoursesperpage'] = '在使用者課程列表中最多顯示多少門課程';
$string['configmymoodleredirect'] = '這設定強迫非管理者在登入時重新導向至“我的Moodle”，並以“我的Moodle”取代最上層的網站首頁。';
$string['configmypagelocked'] = '這一設定用來防止預設頁面被非管理員所編輯。';
$string['confignavcourselimit'] = '當用戶沒有登入或沒有選修任何課程時，要限制只顯示幾個課程給他看。';
$string['confignavshowallcourses'] = '若啟用，用戶將可在"我的課程"部分和課程結構中看到他們選修的課程。

若關閉，用戶將只在導覽列的"我的課程"部分看到自己選修的課程。

當用戶沒有登入或沒有選修任何課程時，他所看到的課程數仍受到"課程限制"的設定所限制。';
$string['confignavshowcategories'] = '在導覽列和導覽區塊顯示課程類別。

用戶現在正在選修的課程將不會在上面，它們列在"我的課程"之下，而沒有分類別。';
$string['confignotifyloginfailures'] = '如果登入失敗的資料被記錄，可以透過E-mail將它們發送出去。誰應該收到這些通知呢？';
$string['confignotifyloginthreshold'] = '如果發送登入失敗的通知，對於一個使用者或是IP位址而言，多少次登入失敗之後發送通知呢？';
$string['confignotloggedinroleid'] = '沒有登入這個網站的使用者會以這個角色在網站活動，通常是訪客，不過您也許想要建立更多或更少限制的角色，而像是發表文章等功能還是會要求使用者確實登入。';
$string['configopentogoogle'] = '如果使用該設定，Google將能夠以訪客的身份進入網站。通過Google搜索而來的訪問者也可以以訪客的身份登入網站。這個選項僅對允許訪客訪問的課程有效。';
$string['configoverride'] = '在config.php定義';
$string['configpasswordpolicy'] = '開啟此項將使Moodle不用有效的密碼策略檢查使用者密碼。使用下方設定來指定您的策略（如果您設定為"否”，將忽略。）';
$string['configpathtoclam'] = 'Clam AV的路徑。通常是/usr/bin/clamscan或/usr/bin/clamdscan。設定了這個選項，Clam AV才能運行。';
$string['configpathtodu'] = '導向du。通常是 /usr/bin/du。如果您做此輸入, 對於含有大量檔案的目錄，此輸入可以加速顯示目錄內容網頁的速度.';
$string['configperfdebug'] = '如果您啟用這個功能，在標準佈景的頁尾處將出現效能的資訊。';
$string['configprofileroles'] = '在使用者個人資料和課程成員頁面可以看到的角色列表。';
$string['configprofilesforenrolledusersonly'] = '為了防止個人訊息被竊取，尚未加入任何課程的使用者訊將是隱藏的。新使用者只有加入至少一門課程後，才可以加入個人訊息描述。';
$string['configprotectusernames'] = '預設forget_password.php 不會顯示任何提示。因它可能引起使用者名稱或電子郵件地址的猜測。';
$string['configproxybypass'] = '半形逗點分隔的主機或IP列表。瀏覽它們時不使用代理(例如，192.168.,mydomain.com)';
$string['configproxyhost'] = '如果此伺服主機是通過代理(防火牆)上網，那麼請填入代理的主機名和端口，否則留空。';
$string['configproxypassword'] = '若需要透過代理伺服器存取網際網路(PHP及cURL擴充套件需要)，請在這裡設定密碼，否則空白。';
$string['configproxyport'] = '如果這個主機需要使用代理伺服器，請在這裡指定代理主機的連接埠。';
$string['configproxytype'] = '網站代理伺服器型態(PHP5及 cURL 擴充套件支援SOCKS5時需要)';
$string['configproxyuser'] = '若需要透過代理伺服器存取網際網路(PHP及cURL擴充套件需要)，請在這裡設定使用者名稱，否則空白。';
$string['configquarantinedir'] = '如果您希望Clam AV把受感染的文件轉移到一個隔離目錄中，那麼請在此處指定它。這個目錄對於Web伺服主機必須是可寫的。如果您在此處留空或者填寫了一個不存在或無法訪問的目錄，受感染的文件將會被刪除。注意末尾不需要斜線。';
$string['configrcache'] = '使用快取來儲存資料庫資料，記得同時要設定快取類型。';
$string['configrcachettl'] = '快取資料的保存時間（秒），建議使用小一點（&lt;15）的數字。';
$string['configrecaptchaprivatekey'] = '您的Moodle伺服器和recaptcha.net伺服器溝通所使用的字元串。至 http://recaptcha.net取得。';
$string['configrecaptchapublickey'] = '顯示reCAPTCHA元件在登入表格中所使用的字元串。由http://recaptcha.net產生。';
$string['configrequestedstudentname'] = '在已申請課程中學生的稱謂';
$string['configrequestedstudentsname'] = '在已申請課程中學生的稱謂';
$string['configrequestedteachername'] = '在已申請課程中教師的稱謂';
$string['configrequestedteachersname'] = '在已申請課程中教師的稱謂';
$string['configrequiremodintro'] = '如果你不要強迫用戶進入每一活動的說明，請關閉這一選項。';
$string['configrunclamavonupload'] = '啟用時，clam AV會掃描所有上傳的檔案。';
$string['configrunclamonupload'] = '在上傳文件時運行Clam AV？您需要在pathtoclam中填寫了正確的路徑，此選項才能生效。(Clam AV是一個病毒掃瞄程序，它是自由軟體，可從 http://www.clamav.net/ 獲得。';
$string['configsectioninterface'] = '介面';
$string['configsectionmail'] = '郵件';
$string['configsectionmaintenance'] = '維護';
$string['configsectionmisc'] = '雜項';
$string['configsectionoperatingsystem'] = '作業系統';
$string['configsectionpermissions'] = '權限';
$string['configsectionrequestedcourse'] = '開課申請';
$string['configsectionsecurity'] = '安全';
$string['configsectionstats'] = '統計';
$string['configsectionuser'] = '用戶';
$string['configsecureforms'] = '當讀取表單的資料時，Moodle可以提供更多的安全級別。如果此選項被啟用，系統將檢查瀏覽器的HTTP_REFERER變量是否與當前的表單相符。在一些極個別的情況下，這會帶來一些麻煩，譬如用戶使用防火牆(如Zonealarm)並配置了從Web信息中刪除HTTP_REFERER的時候。其症狀是遇到表單就再也無法前進了。如果用戶在登入頁面上發生錯誤，或許您應當選在關閉這個選項，儘管這樣做會使您的網站進一步暴露在暴力密碼攻擊之下。如果不知道選什麼，那就讓它保留「是」吧。';
$string['configsessioncookie'] = '此選項用來設定Moodle連線所使用的cookie的名稱。這個選項是可選的，僅僅在一種情況下比較有用：一個網站上運行了多個Moodle的拷貝，要避免cookie發生混亂。';
$string['configsessioncookiedomain'] = '透過此選項可以設定Moodle cookie有效的網域名稱。此選項對於制定Moodle(如認證或選課插件)非常有用，可以讓Moodle和另一子網域上的應用程式共享session資訊。<strong>警告：強烈建議您不要修改此選項-錯誤的設定將會導致包含管理員在內的所有人都無法登入。</strong>';
$string['configsessioncookiepath'] = '如果您需要修改瀏覽器送出Moodle cookes的地方，您可以修改這個選項將其指定為您網站的某個目錄。否則預設情況下會使用“/”。';
$string['configsessiontimeout'] = '如果使用者登入一段時間沒有動作(讀取網頁)，就會被自動登出(session被終止)，此變數可以設定此時間值。';
$string['configshowcommentscount'] = '顯示回應數量。它會在顯示評論連結時多一次資料庫查詢。';
$string['configshowsiteparticipantslist'] = '網站中所有的學生和教師將會被列在網站參與者列表中。誰可以查看這個列表呢?';
$string['configsitedefaultlicense'] = '預設網站授權方式';
$string['configsitedefaultlicensehelp'] = '在這網站所出版的內容預設的授權方式';
$string['configsitemaxcategorydepth'] = '最大類別層數';
$string['configsitemaxcategorydepthhelp'] = '這是訂定最多顯示幾層子類別';
$string['configslasharguments'] = '通過使用「斜線參數」(即這裡的第二選項)腳本來提供對文件(圖像、上傳的資料等)的訪問。該方法能讓文件更容易地緩存於網頁瀏覽器和代理伺服主機等。但有些PHP伺服主機不支持這種方法，所以如果您查看上傳的文件或圖像有點麻煩，請選擇第一個選項。';
$string['configsmartpix'] = '啟用這個項目時，圖示會由一個PHP程式提供，先是搜尋目前佈景、接著所有上層佈景、接著是Moodle /pix 資料夾，這樣一來會減少佈景中重複的圖片檔案，但是會犧牲一點效能。';
$string['configstartwday'] = '每週的開始';
$string['configstatsfirstrun'] = '在此指定<b>第一次</b>產生統計資料時，自動排程程式應處理多長期間的記錄檔。如果您的流量很大而且是在共用主機上，不建議您將時間設定的太長，那將會需要很長時間來執行而且耗費相當多的資源。（注意，在這個設定中， 1 個月 = 28 天，而圖表與報表中， 1 個月 = 該月實際天數）';
$string['configstatsmaxruntime'] = '處理統計資料可能造成沈重的負擔，所以透過此欄位與下一個欄位來設定何時執行以及執行多長時間。';
$string['configstatsmaxruntime2'] = '處理統計資料可能造成沈重的負擔，指定搜集一天統計資料所允許的最長時間。一個預儲程式執行最大天數是3日，';
$string['configstatsmaxruntime3'] = '計算一天的統計資料所能使用的最長時間。注意統計資訊的計算將會給伺服器帶來很高的負荷，在一次排程運行中可計算最多多少天的統計資料在之後設定。';
$string['configstatsruntimedays'] = '每次執行統計最多計算多少天的資訊。如果統計訊息是最新的，只會處裡最後一天的。請根據伺服器的附載來設定這一項的值，如果需要較短的cron執行時間，可以設定一個較小的值。';
$string['configstatsruntimestart'] = '自動排程程式要何時 <b>開始</b> 統計資料的處理？';
$string['configstatsuserthreshold'] = '如果您輸入 0 以外的數字，參與課程人數（學生＋教師）少於這個數量會直接被忽略。';
$string['configstrictformsrequired'] = '如果啟用，可以防止使用者在表單的必填欄位只輸入一個空白或換行。';
$string['configstripalltitletags'] = '取消本設定。允許在活動和資源名稱中使用HTML標籤。';
$string['configsupportemail'] = '當此網站的使用者需要一般性的協助時(例如，當新使用者建立他們的帳號時)，此電子郵件位址將提供給他們。如果此郵件位址是空白的，則不提供。';
$string['configsupportname'] = '這是一個透過電子郵件或網址來提供一般性協助的人或其他團體的名字。';
$string['configsupportpage'] = '當此網站的使用者需要一般性的協助時(例如，當新使用者建立他們的帳號時)，此網址將提供給他們。如果此網址是空白的，則不提供。';
$string['configthemedesignermode'] = '正常情況下，為了提升運作效能，佈景主題的圖片和排版格式單，都會暫存在瀏覽器和伺服器的記憶體裡一段很長的時間。<br/>
如果你是在設計背景主題或編寫程式碼，那你可能要開啟這一模式，這樣你才不會看到那暫存的版本。<br/>
警告：這將會使你的網站頁面顯示得更慢。另一種方式是，你也可以在佈景主題選擇頁中，以手工重設這佈景主題的快取。';
$string['configthemelist'] = '此項留空白則用戶可以使用所有的合法主題風格。如果您希望讓可選的主題風格列表短一些，您可以在此指定一些。譬如: standard,orangewhite。';
$string['configtimezone'] = '您可以在此設定預設時區。這只是用於顯示日期的預設時區——每個用戶都可以設定他自己的時區。此處的「伺服主機時間」讓Moodle預設情況下直接使用伺服主機上作業系統的設定，而使用者個人設定中的「伺服主機時間」則表示預設情況下使用此處的設定。';
$string['configunzip'] = 'unzip程序的位置(僅針對Unix系統，可選)。如果指定了，將用它來解壓伺服主機上的zip文件。如果留空，則Moodle使用內部函數解壓。';
$string['configuseblogassociations'] = '是否允許用戶將部落格文章和課程相關聯，以組織他們的文章？';
$string['configuseexternalyui'] = '使用Yahoo伺服器的線上文件，而非使用本地文件。警告：必須要能瀏覽網際網路，否則您網站上的AJAX會無效。此設定並不相容於使用https的網站。';
$string['configuserquota'] = '使用者私人文件區的最大容量配額(單位bytes)。 {$a->bytes} bytes == {$a->displaysize}';
$string['configusesitenameforsitepages'] = '如果啟用，會使用網站簡稱代替導覽中的"網站頁面"字串';
$string['configusetags'] = '啟用全網站性的標示嗎?';
$string['configvariables'] = '環境變數';
$string['configverifychangedemail'] = '在修改email地址時也對於網域名稱進行限制。如果關閉此選項，則只在建立用戶十限制email地址的網域。';
$string['configvisiblecourses'] = '正常顯示隱藏類別中的課程';
$string['configwarning'] = '小心修改這些選項——不合法的值可能導致錯誤。';
$string['configxmlstrictheaders'] = '設定為啟動，每一網頁將會以XML http標頭或序言產生，因此瀏覽器將線上顯示XHTML錯誤。此設定僅對開發很有幫助。';
$string['configyuicomboloading'] = '此選項可以用合併文件的方式最佳化YUI函式庫的載入。為了提升效能，正式使用的網站應該啟用這個選項。';
$string['configzip'] = '指定您的ZIP壓縮程式位置(只適用UNIX，選擇性的)，當指定時，此程式將會被伺服器用來產生壓縮檔，如果您留白，MOODLE會使用內部函數壓縮。';
$string['confirmation'] = '確認';
$string['confirmdeletecomments'] = '您將刪除回應，確定嗎？';
$string['confirmed'] = '已確認';
$string['convertformat'] = '<i>轉換</i> 輸出格式';
$string['cookiehttponly'] = '僅用http cookies';
$string['cookiesecure'] = '僅用安全的cookies';
$string['country'] = '預設的國家';
$string['coursecontact'] = '課程管理員';
$string['coursecontact_desc'] = '這個設定允許您控制課程說明顯示的人，要顯示的使用者必須隸屬於這些角色之一。';
$string['courselistshortnames'] = '顯示擴展課程名稱';
$string['courselistshortnames_desc'] = '當顯示課程清單時，或在管理螢幕找出課程時，將課程簡稱改成以完整名稱顯示。';
$string['coursemgmt'] = '新增/修改課程';
$string['courseoverview'] = '課程綜覽';
$string['courserequestnotify'] = '開課申請的通知';
$string['courserequestnotifyemail'] = '用戶 {$a->user} 申請開設一個新的課程於{$a->link}';
$string['courserequests'] = '開課申請';
$string['courserequestspending'] = '審核開課申請';
$string['courses'] = '課程';
$string['coursesperpage'] = '每頁的課程數';
$string['creatornewroleid'] = '建立者在新課程的角色';
$string['creatornewroleid_help'] = '如果使用者還沒有取得管理這個新課程的權限，那麼該用戶就會自動使用此角色選課。';
$string['cron'] = '排程（Cron）';
$string['cronclionly'] = '只能從指令模式執行 Cron';
$string['cronerrorclionly'] = '抱歉，管理者設定這個頁面無法透過網際網路存取。';
$string['cronerrorpassword'] = '抱歉，您沒有提供正確的密碼來存取這個頁面';
$string['cron_help'] = '這 cron.php 維護程式可以幫助某些Moodle的模組依照排定的時程運作，比如，寄出討論區貼文的副本。

需要有一機制定期執行這一程式，例如，每隔20分鐘。';
$string['cronremotepassword'] = 'Cron 遠端執行密碼';
$string['cronwarning'] = '這個<a href="cron.php">cron.php</a>維護程式，至少有24個小時沒有執行了。';
$string['ctyperecommended'] = '強烈建議您安裝ctype 的PHP 延伸套件，特別是，您的網站要支援非拉丁語系語言的話，可以改善網站效能。';
$string['ctyperequired'] = '為了改善網站效能與提供多種語言的相容性，現在 Moodle 需要安裝 ctype 的PHP 延伸套件。';
$string['curlcache'] = 'cURL快取存活時間';
$string['curlrecommended'] = '建議安裝額外的 Curl 函式庫來啟用 Moodle 網路功能。';
$string['curlrequired'] = 'Moodle現在需要用到cURL PHP擴展，以便能和Moodle倉儲溝通。';
$string['curltimeoutkbitrate'] = '當計算cURL持續時間時，所用的Bitrate(Kbps)';
$string['curltimeoutkbitrate_help'] = '這設定用來計算當進行大 cURL 請求時的適當的截止時間。

這一計算的一部分就是會作出一個HTTP HEAD請求，以決定內容的大小。

若設定為0，可以一開始就關閉這一請求。';
$string['currenttheme'] = '現在的佈景主題';
$string['customcheck'] = '其他檢查';
$string['custommenu'] = '自訂選單';
$string['custommenuitems'] = '自訂選單項目';
$string['datarootsecurityerror'] = '<p><strong>安全性警告！</strong></p><p>您的dataroot目錄設在錯誤的位置，導致它向整個Web公開。這意味著世界上的任何人都可以瀏覽到您的私密檔案。其中有些檔案還可以被駭客利用，以管理員的身分瀏覽您的網站！</p><p>您<em>必須</em>將dataroot目錄({$a})移動到一個不在web公開目錄下的新位置，並對應的更新config.php中的<code>$CFG->dataroot</code>設定。</p>';
$string['datarootsecuritywarning'] = '您的網站設定可能不安全，請確認您的資料根目錄({$a})無法直接透過網路存取。';
$string['dbmigrate'] = 'Moodle 資料庫轉移';
$string['dbmigrateconnecerror'] = '無法連接到指定的資料庫';
$string['dbmigrateencodingerror'] = '指定資料庫的編碼為 {$a} ，而非指定的 UNICODE/UTF8。<br />請重新指定。';
$string['dbmigratepostgres'] = '您似乎是使用 PostgreSQL 資料庫。為了繼續轉移工作，您須手動建立一個以 "UNICODE"(PostgreSQL 7) 或 "UTF8" (PostgreSQL 8)編碼的資料庫來儲存轉移的資料。請在下面輸入您的新資料庫連線設定：';
$string['dbmigratewarning'] = '在開始這個動作前請確認您已經備份了 moodle 的資料庫，如果您不確定如何進行，請聯繫您的系統管理員。在開始轉換時，您的 Moodle 網站狀態會變更為維護模式。';
$string['dbmigratewarning2'] = '<b>注意： 您正要進行資料庫轉換工作，請再次確認您已完整備份 Moodle 資料庫了。</b>';
$string['dbmigrationdeprecateddb'] = '<font color="#ff0000">資料庫已經轉移至新的 UTF8 資料庫，請編輯您的 config.php 並使用新的資料庫。</font>';
$string['dbmigrationdupfailed'] = '資料庫複製時發生錯誤：<font color="#ff0000"><pre>{$a}</pre></font>';
$string['dbsessions'] = '使用資料庫儲存連線資訊';
$string['debug'] = '除錯訊息';
$string['debugall'] = '全部：顯示所有合理的 PHP 偵錯訊息';
$string['debugdeveloper'] = '開發者：為開發者保留的額外 Moodle 偵錯訊息';
$string['debugdisplay'] = '顯示除錯訊息';
$string['debugging'] = '除錯';
$string['debugminimal'] = '最小： 只顯示嚴重錯誤';
$string['debugnone'] = '無：不要顯示任何錯誤或警告';
$string['debugnormal'] = '一般：顯示錯誤、警告與提示';
$string['debugpageinfo'] = '顯示頁面資訊';
$string['debugsmtp'] = '郵件寄送偵錯';
$string['debugstringids'] = '顯示原初語言字串';
$string['debugstringids_desc'] = '此選項對翻譯人員很有幫助。啟用後，如果在網址中加入參數string=1，那麼每個輸出的字串旁都會顯示語言文件和字串id。';
$string['debugvalidators'] = '顯示驗證者的鏈結';
$string['defaultcity'] = '預設城市';
$string['defaultcity_help'] = '在此輸入的城市將會成為新建立使用者的預設城市。';
$string['defaulthomepage'] = '給使用者預設的首頁';
$string['defaultrequestcategory'] = '申請課程的預設類別';
$string['defaultsettinginfo'] = '預設:{$a}';
$string['defaultuserroleid'] = '所有使用者的預設角色';
$string['deletefilterareyousure'] = '你確定要刪除過濾器"{$a}"';
$string['deletefilterareyousuremessage'] = '您正要完全刪除過濾器“{$a}”。您確定要卸載它嗎？';
$string['deletefilterfiles'] = '與過濾器“{$a->filter}”有關的所有資料都已從資料庫刪除。為了徹底刪除（並防止此過濾器自己重新安裝），您現在應該在伺服器上刪除此目錄：{$a->directory}';
$string['deleteincompleteusers'] = '刪除登錄不完整的用戶於';
$string['deleteunconfirmed'] = '刪除未確認的使用者';
$string['deleteuser'] = '刪除使用者';
$string['deletingfilter'] = '刪除過濾器"{$a}"';
$string['density'] = '密度';
$string['denyemailaddresses'] = '禁止的郵件網域名稱';
$string['development'] = '開發';
$string['devicedetectregex'] = '設備偵測定期表述';
$string['devicedetectregex_desc'] = '預設上，Moodle可以偵測到預設類型的設備(桌上型個人電腦、手提電腦等)，行動裝置(手機和小的手握設備)，平板電腦(ipad、ANdroid tables)和以前傳下來的(IE6用戶)。</br>
佈景主題選擇器可以用來根據設備的不同來區分不同的主題佈景。</br>
這一設定允許一般表述允許偵測額外設備類型(比預設類型還優先)。</br>
舉例來說，你可以輸入一般表述"/(MIDP-1.0|Maemo|Windows CE)/" 要偵測一些常被使用的功能手機，要加上"featurephone"</br>
這個添加"featurephone"於主題佈景選擇器的功能，可以讓你添加一個可用於這些設備的新主題佈景。</br>
其他手機將仍然使用為行動裝置類型所選出的主題佈景。';
$string['devicedetectregexexpression'] = '定期表述';
$string['devicedetectregexvalue'] = '回復的數值';
$string['devicetype'] = '設備類型';
$string['disableuserimages'] = '不使用使用者簡介影像';
$string['displayerrorswarning'] = '正式的伺服網站建議不要啟用 PHP 參數 <em>display_errors</em> 設定，因為有些錯誤訊息可能會暴露伺服器敏感危及安全的資訊。';
$string['displayloginfailures'] = '顯示登入失敗記錄給';
$string['dndallowtextandlinks'] = '拖曳上傳文字/連結';
$string['docroot'] = 'Moodle Docs 根目錄';
$string['doctonewwindow'] = '開啟在新視窗';
$string['download'] = '下載';
$string['edithelpdocs'] = '編修輔助文件';
$string['editingnoncorelangfile'] = '您正嘗試調整一個外加模組/外掛程式的翻譯。您可以儲存三部份模組翻譯在您的本地資料夾。您可能想要移動已翻譯的檔案到模組語言目錄，並或者將它們送給外加模組的維護者。';
$string['editlang'] = '<b>編輯</b>';
$string['editorbackgroundcolor'] = '背景顏色';
$string['editordictionary'] = '編輯器字典';
$string['editorfontfamily'] = '字型名稱';
$string['editorfontlist'] = '字型清單';
$string['editorfontsize'] = '字型大小';
$string['editorhidebuttons'] = '隱藏的按鈕';
$string['editorkillword'] = 'Word 格式過濾';
$string['editorspelling'] = '編輯器的拼字檢查';
$string['editorspellinghelp'] = '啟用或停用拼字檢查，伺服器上必須安裝 <strong>aspell</strong> 才能啟用。';
$string['editstrings'] = '編修語句';
$string['emailchangeconfirmation'] = '電子郵件變更確認';
$string['emoticonalt'] = '替代用文字';
$string['emoticoncomponent'] = '圖片成分';
$string['emoticonimagename'] = '圖片名稱';
$string['emoticons'] = '表情符號';
$string['emoticons_desc'] = '這表單定義了用於你的網站的情緒圖示。

若要從這表格移除一列，把需要的欄位都改成空白值，再儲存表單即可。

若要註冊一個新圖示，要在最下面的空白列填入所有欄位。

若要重設所有欄位成為預設值，點選以上的鏈結。

*文字(必要的) -- 放在文章中，用來叫出表情圖示的一連串符號，例如：8-)，它至少要有兩個字元。
*圖檔名稱(必要的) --情緒圖像的檔名，不必加副檔名，放在component pix 資料夾中。

*圖像成分(必要的) --

*替代文字(選用的) --';
$string['emoticonsreset'] = '將表情符號重設為預設值';
$string['emoticontext'] = '文字';
$string['emptysettingvalue'] = '空白';
$string['enableajax'] = '啟用 AJAX';
$string['enablecalendarexport'] = '啟用行事曆匯出功能';
$string['enablecomments'] = '啟用回應';
$string['enablecourserequests'] = '啟用課程申請';
$string['enablecssoptimiser'] = '啟用CSS優化器';
$string['enablecssoptimiser_desc'] = '若啟用， CSS 在被放入快取之前會徹底跑一次最佳化過程。

這最佳化程式會將 CSS 移除重複的規則和風格，還有可移除的空白空間，並重新格式化。

當主題布景設計者模式表現很差時，同時開起這設定，將會幫助主題布景設計者建立最佳化的 CSS。';
$string['enabledevicedetection'] = '啟用設備偵測';
$string['enablegravatar'] = '啟用Gravatar';
$string['enablegravatar_help'] = '啟用後，如果使用者未上傳大頭照，Moodle會試著從Gravatar取得使用者頭像。';
$string['enablegroupmembersonly'] = '只有群組內成員可以使用';
$string['enablemobilewebservice'] = '為行動裝置啟用網路服務';
$string['enablerecordcache'] = '啟用資料錄快取';
$string['enablerssfeeds'] = '啟用RSS資訊提供';
$string['enablesafebrowserintegration'] = '打開安全考試的瀏覽器整合';
$string['enablestats'] = '啟用統計功能';
$string['enabletrusttext'] = '啟用信任的內容';
$string['enablewebservices'] = '啟用web服務';
$string['enablewsdocumentation'] = 'web服務文件';
$string['enrolinstancedefaults'] = '選課實體預設值';
$string['enrolinstancedefaults_desc'] = '建立新的課程選課設定。';
$string['enrolmultipleusers'] = '將這些使用者加入課程';
$string['environment'] = '環境';
$string['environmenterrortodo'] = '在開始安裝這個 Moodle 版本前，您必須修正上述所有環境問題（錯誤）！';
$string['environmenterrorupgrade'] = '警告：在升級這個 Moodle 的版本前，您需要解決上面找到的所有環境的問題（錯誤）！沒有修正這些問題就進行問題可能造成像是資料遺失等問題，您確定要繼續升級？';
$string['environmentmustfixsetting'] = 'PHP的設定必須變更';
$string['environmentok'] = '您的伺服器環境符合所有最低的需求。';
$string['environmentrecommendcustomcheck'] = '如果這個測試失敗，代表有一個潛在的問題';
$string['environmentrecommendinstall'] = '建議安裝/啟用';
$string['environmentrecommendversion'] = '建議版本為 {$a->needed} ，您目前版本為 {$a->current}';
$string['environmentrequirecustomcheck'] = '這個測試必須通過';
$string['environmentrequireinstall'] = '必須安裝/啟用';
$string['environmentrequireversion'] = '要求版本為 {$a->needed} ，您目前版本為 {$a->current}';
$string['environmentsettingok'] = '已經偵測到建議的設定';
$string['environmentshouldfixsetting'] = 'PHP設定須被變更';
$string['environmentxmlerror'] = '讀取環境資料時發生錯誤 ({$a->error_code})';
$string['errordeletingconfig'] = '一個錯誤發生在刪除外掛 \'{$a}\'.的設定檔案紀錄';
$string['errorsetting'] = '無法儲存設定資料:';
$string['errorwithsettings'] = '無法更新一些設定，因為發生了這個錯誤：';
$string['everyonewhocan'] = '每一位可以\'{$a}\'的人';
$string['exceptions'] = '例外';
$string['experimental'] = '實驗功能';
$string['experimentalsettings'] = '實驗性設定';
$string['extendedusernamechars'] = '帳號名稱允許使用延伸字元';
$string['extramemorylimit'] = '額外PHP記憶體限制';
$string['fatalmagicquotesruntime'] = '<p>偵測到嚴重的錯誤，請通知伺服器管理員。</p>
<p>要運作正常，Moodle需要管理員更改PHP設定。</p>
<p><code>magic_quotes_runtime</code>必須設定為<code>off</code>。</p>
<p>這一設定可以經由編輯這伺服器上的<code>php.ini</code>, Apache/IIS <br />設定檔，或<code>.htaccess</code> 檔。</p>';
$string['fatalsessionautostart'] = '<p>偵測到嚴重的錯誤，請通知伺服器管理員。</p>
<p>要運作正常，Moodle需要管理員更改PHP設定。</p>
<p><code>session.auto_start</code>必須設定為<code>off</code>。</p>
<p>這一設定可以經由編輯這伺服器上的<code>php.ini</code>, Apache/IIS <br />設定檔，或<code>.htaccess</code> 檔。</p>';
$string['filecreated'] = '新檔案建立了';
$string['filestoredin'] = '儲存檔案到資料夾：';
$string['filestoredinhelp'] = '檔案儲存的位置';
$string['filterall'] = '過濾所有字串';
$string['filtermatchoneperpage'] = '每頁過濾一次';
$string['filtermatchonepertext'] = '每篇文章過濾一次';
$string['filters'] = '過濾器';
$string['filtersettings'] = '過濾器設定';
$string['filtersettingsgeneral'] = '一般過瀘器設定';
$string['filteruploadedfiles'] = '過濾上傳檔案';
$string['forcelogin'] = '強制使用者登入';
$string['forceloginforprofileimage'] = '強制使用者登入才能檢視使用者圖片';
$string['forceloginforprofileimage_help'] = '如果啟用，只有已經登入的使用者才能查看用戶的個人大頭貼，並且所有通知郵件都將使用預設大頭貼。';
$string['forceloginforprofiles'] = '強制使用者登入後才能檢視個人資料';
$string['forcetimezone'] = '強制預設時區';
$string['frontpage'] = '首頁';
$string['frontpagebackup'] = '首頁備份';
$string['frontpagedefaultrole'] = '首頁預設的角色';
$string['frontpagefilters'] = '首頁的過濾器';
$string['frontpageloggedin'] = '登入後首頁的項目';
$string['frontpageoverrides'] = '首頁權限覆蓋';
$string['frontpagequestions'] = '首頁試題';
$string['frontpagerestore'] = '首頁還原';
$string['frontpageroles'] = '首頁角色';
$string['frontpagesettings'] = '首頁設定';
$string['fullnamedisplay'] = '全名格式';
$string['gdrecommended'] = 'GD擴展使用在轉換影像，假如缺少的話會使某些功能不見，像是使用者的身分影像。';
$string['gdversion'] = 'GD 的版本';
$string['generalsettings'] = '一般設定';
$string['geoipfile'] = 'GeoIP 城市資料檔';
$string['getremoteaddrconf'] = '記錄使用者IP來源';
$string['globalsquoteswarning'] = '<p><strong>安全警示</strong>: 為了正常運作，Moodle 要求<br />您對PHP的設定做一些變更。<p/><p>您 <em>必須</em> 設定 <code>register_globals=off</code> 和/或者 <code>magic_quotes_gpc=on</code>。 <br />可能的話，您應該設定 <code>register_globals=off</code> 來改善<br />伺服器的安全性，並且建議您也設定<code>magic_quotes_gpc=on</code>。<p/><p>您可以修改<code>php.ini</code>, Apache/IIS <br />的設定檔或是 <code>.htaccess</code> 檔案，來加強安全性。</p>';
$string['globalswarning'] = '<p><strong>安全性警告</strong>: 為了正常運作，Moodle需要<br />您進行目前PHP設定的變更<p/><p>您 <em>務必</em>設定 <code>register_globals=off</code>.<p>此設定透過 <code>php.ini</code>, Apache/IIS <br />或<code>.htaccess</code> 檔案的編輯來設定。</p>';
$string['googlemapkey'] = 'Google Maps API key';
$string['googlemapkey3'] = 'Google Maps API key';
$string['googlemapkey3_help'] = '你需要輸入一特殊密鑰來使用Google 地圖進行 視覺化尋找IP位址。

你可以在 <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key" target="_blank">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a>免費取得密鑰。';
$string['gotofirst'] = '跳到第一個缺漏的字串';
$string['gradebook'] = '成績簿';
$string['gradebookroles'] = '列入成績簿的角色';
$string['gradeexport'] = '主要的成績匯出方式';
$string['gravatardefaulturl'] = 'Gravatar 預設的影像 URL';
$string['gravatardefaulturl_help'] = '如果無法找到一張給指定用戶的照片，頭像就需要有預設的圖像來顯示。請提供一圖檔的完整網址。

若讓這設定空白，Moodle會提供最適當的預設圖像來呈現。

注意，頭像模組有一些代碼可以用來 <a href="https://en.gravatar.com/site/implement/images/#default-image">產生預設圖像</a>。';
$string['groupenrolmentkeypolicy'] = '選課分組密碼規則';
$string['groupenrolmentkeypolicy_desc'] = '打開此選項後，Moodle會按照既定的密碼策略檢查分組選課密碼。';
$string['guestroleid'] = '訪客的角色';
$string['guestroleid_help'] = '此角色會自動分配給來賓使用者。它也被臨時分配給通過訪問選課插件進入課程的未選課使用者。';
$string['helpadminseesall'] = '管理者可以看到所有行事曆或只有他們自己的行事曆?';
$string['helpcalendarsettings'] = '設定多種日曆及日期時間相關的外觀';
$string['helpforcetimezone'] = '您可以允許用戶選擇他自己的時區或者讓所有用戶只能使用同一時區。';
$string['helpsitemaintenance'] = '用於升級和其他需要的工作';
$string['helpstartofweek'] = '此日曆要以星期幾來當星期的第一天?';
$string['helpupcominglookahead'] = '此日曆預設要顯示未來幾天的行事?';
$string['helpupcomingmaxevents'] = '預設要顯示多少未來事件給使用者?';
$string['helpweekenddays'] = '那幾天視為一個星期的週末，將以不同顏色顯示?';
$string['hiddenuserfields'] = '隱藏使用者的欄位';
$string['hidefromall'] = '對所有使用者隱藏';
$string['hidefromnone'] = '不對任何人隱藏';
$string['hidefromstudents'] = '對學生隱藏';
$string['htmleditor'] = 'HTML 編輯器';
$string['htmleditorsettings'] = 'HTML編輯器設定';
$string['htmlsettings'] = 'HTML 設定';
$string['http'] = 'HTTP';
$string['httpsecurity'] = 'HTTP 安全性';
$string['hubs'] = '課程資源中心';
$string['iconvrecommended'] = '為了提昇網站效率，尤其您的網站支援非拉丁語系的情況下，建議您可以安裝額外的 ICONV 函式庫。';
$string['iconvrequired'] = '必須安裝 ICONV 擴展';
$string['ignore'] = '忽略';
$string['includemoduleuserdata'] = '包含模組使用者資料';
$string['incompatibleblocks'] = '不相容的區塊';
$string['installhijacked'] = '抱歉，安裝必須從原始的IP位址完成';
$string['installsessionerror'] = '無法初始化PHP session，請檢察您的瀏覽器是否接受cookies';
$string['intcachemax'] = '內部快取最大值';
$string['intlrecommended'] = 'intl或展可以增強國際化支援，例如符合區域習慣的排序。';
$string['invalidsection'] = '錯誤的區域';
$string['invaliduserchangeme'] = '帳號 "changeme" 是保留字，您不能夠用來註冊。';
$string['ipblocked'] = '本站現在不可瀏覽。';
$string['ipblocker'] = 'IP阻擋';
$string['ipblockersyntax'] = '每行止放一項。有效的項目可以是完整的IP位址(例如<b>192.168.10.1</b>），它只與一個主機匹配，也可以是部分位址(例如<b>192.168.</b>)，它與任何用這些數字開頭的位址匹配；也可以是CIDR表示法（例如<b>231.54.211.0/20</b>）；還可以是一個IP位址的範圍（例如<b>231.3.56.10-20</b>），指名位址最後一個數字的範圍。不支援網域名稱（比如“example.com”）。空行會被忽略。';
$string['iplookup'] = 'IP 位址查詢';
$string['iplookupgeoplugin'] = '目前正使用 <a href="http://www.geoplugin.com">geoPlugin</a> 服務來尋找地理訊息。為得到更準確的結果，我們建議在本地安裝MaxMind GeoLite資料庫。';
$string['iplookupinfo'] = '預設Moodle使用免費線上NetGeo(網際網路地理資料庫)伺服器來查詢IP位址的地理位置，不幸地此資料庫不再受維護而且可能回傳<em>錯誤</em>的資料。建議從MaxMind安裝本地的免費GeoLite City資料庫複本。<br/>IP位址地理位置僅用簡單的地圖或使用Google Maps來顯示。請注意您需有Google帳號並申請免費的Google Maps API key來啟動互動式地圖。';
$string['iplookupmaxmindnote'] = '此產品包含由MaxMind建立的GeoLite資料，可從<a href="http://www.maxmind.com/">http://www.maxmind.com/</a>取得.';
$string['keeptagnamecase'] = '保留標示名稱的大小寫';
$string['lang'] = '預設語言';
$string['langcache'] = '語言選單快取';
$string['langcache_desc'] = '如果啟用快取語言選單，可用的翻譯的清單會被快取。

當你經由內建的語言套件管理工具來安裝或刪除語言套件時這快取會自動更新。

如果你以手動安裝一新語言套件時，你必須使用清除所有快取的功能來更新快取清單。';
$string['langlist'] = '語言選單中的語言項目';
$string['langmenu'] = '顯示語言選單';
$string['langpackwillbeupdated'] = '提醒譯者：在更新過程中，Moodle會嘗試更新您的語言包。你在非本地語言資料夾的修正將會被覆蓋。';
$string['langstringcache'] = '快取所有的語言字串';
$string['languagesettings'] = '語言設定';
$string['latexpreamble'] = 'LaTeX 前文';
$string['latexsettings'] = 'LaTeX 設定';
$string['latinexcelexport'] = 'Excel 檔案的編碼';
$string['legacyfilesinnewcourses'] = '新課程使用舊版課程文件';
$string['legacyfilesinnewcourses_help'] = '預設情況下，舊版本課程文件只在升級過來的課程中存在。請注意，某些特性，例如單個活動的備份恢復，和此設定不相容。';
$string['licensesettings'] = '授權設定';
$string['linkadmincategories'] = '連接管理類別';
$string['linkadmincategories_help'] = '如果啟用，管理員設定分類連結會顯示在導覽中，導向管理分類頁面。';
$string['loading'] = '讀取中';
$string['localetext'] = '網站語系';
$string['localstringcustomization'] = '自訂本地文字';
$string['location'] = '位置';
$string['locationsettings'] = '位置設定';
$string['locked'] = '鎖定';
$string['log'] = '日誌';
$string['logguests'] = '記錄訪客連線';
$string['logguests_help'] = '此設定啟用後，訪客帳號的行為會被寫入日誌。高知名度的網站出於性能考量，可能要停用此功能。建議正式的網站打開此功能。';
$string['loginhttps'] = '使用 HTTPS 登入';
$string['loginpageautofocus'] = '登入頁面游標自動移動到表單';
$string['loginpageautofocus_help'] = '啟用此選項可以讓登入頁面更方便，但自動一動焦點可能會給無障礙瀏覽帶來問題。';
$string['loginpasswordautocomplete'] = '防止登入框自動儲存密碼功能';
$string['loginpasswordautocomplete_help'] = '關閉此選項將允許使用者在瀏覽器中儲存他們的密碼。打開此選項會使您的網站不再符合XHTML嚴格校驗規則。';
$string['loglifetime'] = '保留日誌為';
$string['longtimewarning'] = '<b>請注意，這個處理過程可能需要很長的一段時間。</b>';
$string['maintenancemode'] = '維護模式中';
$string['maintfileopenerror'] = '開啟維護檔案時發生錯誤！';
$string['maintinprogress'] = '維護進行中';
$string['managelang'] = '<b>管理</b>';
$string['managelicenses'] = '管理認證';
$string['manageqbehaviours'] = '管理問題行為';
$string['manageqtypes'] = '管理問題類型';
$string['maturity100'] = '測試版';
$string['maturity150'] = '等待發行';
$string['maturity200'] = '穩定版本';
$string['maturity50'] = '內部測試版';
$string['maturityallowunstable'] = '提示：您可能需要使用 --allow-unstable 來執行這個程式';
$string['maturitycoreinfo'] = '您的網站正在執行不穩定的“{$a}”開發版本程式碼。';
$string['maturitycorewarning'] = '您正要安裝或升級的Moodle版本包含不穩定的"{$a}"開發版程式，它還不是和在正式網站使用。如果您不想這樣，請確認您正在以穩定分支的Moodle代碼升級。閱讀Moodle文件了解更多細節。';
$string['maxbytes'] = '上傳檔案大小的最大值';
$string['maxconsecutiveidentchars'] = '連續相同字母數量';
$string['maxeditingtime'] = '編輯張貼內容的最大時間';
$string['mbstringrecommended'] = '為了提昇網站效率，建議您可以安裝額外的 MBSTRING 函式庫，特別是在您的網站使用非拉丁語系。';
$string['mediapluginavi'] = '啟用 .avi 過濾器';
$string['mediapluginflv'] = '啟用 .flv過濾器';
$string['mediapluginimg'] = '啟用鏈結圖片的自動鑲入';
$string['mediapluginmov'] = '啟用 .mov過濾器';
$string['mediapluginmp3'] = '啟用 .mp3 過濾器';
$string['mediapluginmpg'] = '啟用 .mpg 過濾器';
$string['mediapluginogg'] = '啟用 .ogg 過濾器';
$string['mediapluginogv'] = '啟用 .ogv 過濾器';
$string['mediapluginram'] = '啟用 .ram 過濾器';
$string['mediapluginrm'] = '啟用 .rm過濾器';
$string['mediapluginrpm'] = '啟用 .rpm 過濾器';
$string['mediapluginswf'] = '啟用 .swf 過濾器';
$string['mediapluginswfnote'] = '使用預設的安全性，一般使用者不允許嵌入.swf 的flash檔案。';
$string['mediapluginwmv'] = '啟用 .wmv 過濾器';
$string['mediapluginyoutube'] = '啟用 YouTube 鏈結過濾器';
$string['memcachedhosts'] = 'memcached 主機';
$string['memcachedpconn'] = 'memcached 使用持續連線';
$string['messaging'] = '啟用簡訊系統';
$string['messagingallowemailoverride'] = '啟用email複寫';
$string['messagingdeletereadnotificationsdelay'] = '刪除已讀過的通知';
$string['messaginghidereadnotifications'] = '隱藏已讀過的通知';
$string['minpassworddigits'] = '密碼最少要有幾個數字';
$string['minpasswordlength'] = '密碼最小要有幾個字元';
$string['minpasswordlower'] = '密碼最少要有幾個小寫字母';
$string['minpasswordnonalphanum'] = '密碼最少要有幾個非文字或數字的字元(!@&*_-+)';
$string['minpasswordupper'] = '密碼最少要有幾個大寫字母';
$string['misc'] = '雜項';
$string['mnetrestore_extusers'] = '<strong>注意：</strong>這個備份檔案包含了遠端網路使用者帳號，在還原時會是處理過程的一部分。';
$string['mnetrestore_extusers_admin'] = '<strong>注意：</strong>您選擇的備份文件似乎是來自另一個Moodle，且文件中包含遠端Moodle網路用戶帳號。還原過程將會嘗試把所有已有用戶和Moodle網路主機匹配。所有不匹配的帳號將自動轉換為網際網路的認證帳號(而不是mnet帳號)。還原日誌將記錄詳情。';
$string['mnetrestore_extusers_mismatch'] = '<strong>注意：</strong>這個備份檔案看起來是來自一個不同的 Moodle 網站，包含的遠端 Moodle 網路使用者帳號在還原時可能發生錯誤，目前不支援這個操作。如果您確定檔案是來自這個 Moodle 網站，或是您確定所有必要的 Moodle 網路主機都設定完成，您也許想要試著還原。';
$string['mnetrestore_extusers_noadmin'] = '<strong>注意：</strong>您選擇的備份檔案似乎是來自另一個Moodle，且文件中包含遠端Moodle網路使用者帳號。您不可以進行這種還原。請聯繫網站管理員，或者不包含用戶資訊(模組、文件等)還原課程。';
$string['mnetrestore_extusers_switchuserauth'] = '遠端Moodle網路用戶 {$a->username} (來自 {$a->mnethosturl}) 切換到本地 {$a->auth} 身分以驗證的用戶。';
$string['modchooserdefault'] = '活動挑選器的預設';
$string['modeditdefaults'] = '活動設定的預設值';
$string['modsettings'] = '管理活動';
$string['modulesecurity'] = '模組的安全性';
$string['multilangforceold'] = '強制舊的多語言語法 &lt;span&gt; 沒有 class="multilang" 與 &lt;lang&gt;';
$string['mustenablestats'] = '本網站的統計功能還未被開啟。';
$string['mycoursesperpage'] = '課程數量';
$string['mydashboard'] = '系統預設的操作面板';
$string['mymoodle'] = '我的Moodle';
$string['mymoodleredirect'] = '強制用戶使用“我的Moodle”';
$string['mypage'] = '預設的"我的Moodle"頁面';
$string['mypagelocked'] = '鎖定預設頁面';
$string['myprofile'] = '預設的個人資料頁';
$string['mysql416bypassed'] = '不過，若您的網站僅使用 iso-8859-1 (拉丁) 語言，您可以繼續使用目前安裝的 MySQL 4.1.12 (或以上的版本)。';
$string['mysql416required'] = 'Moodle 1.6 需要 MySQL 4.1.16以上的版本來確保未來所有資料都能夠轉換為 UTF-8 編碼。';
$string['navadduserpostslinks'] = '添加鏈結以檢視用戶貼文';
$string['navadduserpostslinks_help'] = '如果啟用，每個使用者的導覽中都會有兩個連結，指向使用者在全站或指定課程發起的討論和發表的文章。';
$string['navcourselimit'] = '課程限制';
$string['navigationupgrade'] = '這次升級包含兩個新的導覽區塊來代替管理、課程、活動和師生名冊區塊。如果您已經為這些區塊設定了某些特殊的權限，那麼您應該檢查一下是否一切都在按照你想要的方式工作。';
$string['navshowallcourses'] = '顯示所有課程';
$string['navshowcategories'] = '顯示課程類目';
$string['navshowfrontpagemods'] = '在這導覽中顯示首頁的活動';
$string['navshowfrontpagemods_help'] = '如果啟用，導覽區塊的「網站頁面」下會顯示首頁活動。';
$string['navshowmycoursecategories'] = '顯示我的課程類目';
$string['navshowmycoursecategories_help'] = '如果啟用，使用者「我的課程」中的課程會顯示在分類中。';
$string['neverdeleteruns'] = '從不刪除執行';
$string['nobookmarksforuser'] = '您沒有任何的書籤。';
$string['nodatabase'] = '沒有資料庫';
$string['nohttpsformobilewarning'] = '建議啟用HTTPS並使用有效的認證。Moodle app總會先嘗試使用安全連接。';
$string['nomissingstrings'] = '沒有缺少字串';
$string['nonewsettings'] = '在這次的升級中並沒有加入新的設定項目。';
$string['nonexistentbookmark'] = '選擇的書籤不存在。';
$string['noresults'] = '查無結果';
$string['noroles'] = '沒有角色';
$string['notifications'] = '通知';
$string['notifyloginfailures'] = '把登入失敗的紀錄，用Email發送給';
$string['notifyloginthreshold'] = '以郵件通知的門檻';
$string['notloggedinroleid'] = '訪客的角色';
$string['numberofmissingstrings'] = '缺少字串數:{$a}';
$string['numberofstrings'] = '缺少字數總數: {$a->strings}<br />缺少: {$a->missing} ({$a->missingpercent}&nbsp;%)';
$string['numcoursesincombo'] = '下拉式選單中最多的課程數';
$string['numcoursesincombo_help'] = '當課程數目過多時，下拉式選單會表現欠佳。當網站的課程總數高於此刻定時，將不會試圖在首頁顯示所有的課程，而是顯示一個指向專門設計的課程列表的連結。';
$string['opensslrecommended'] = '強烈建議您安裝 OpenSSL 函式庫，這樣才能夠使用 Moodle Networking功能';
$string['opentogoogle'] = '開放給 Google 搜尋';
$string['optionalmaintenancemessage'] = '選擇性的維護訊息';
$string['order1'] = '第一';
$string['order2'] = '第二';
$string['order3'] = '第三';
$string['order4'] = '第四';
$string['passwordpolicy'] = '密碼政策';
$string['pathconvert'] = '<i>convert</i> 指令路徑';
$string['pathdvips'] = '<i>dvips</i> 指令路徑';
$string['pathlatex'] = '<i>latex</i> 指令路徑';
$string['pathtoclam'] = 'clam AV 路徑';
$string['pathtodot'] = 'dot的路徑';
$string['pathtodot_help'] = 'dot的路徑，型態如同/usr/bin/dot。您必須安裝dot並在這裡指定它，才能從DOT文件產生圖片。注意，到目前為止，只有Moodle內置的剖析功能(開發->剖析)需要使用它。';
$string['pathtodu'] = 'du 的路徑';
$string['pathtopgdump'] = 'pg_dump 指令路徑';
$string['pathtopgdumpdesc'] = '若系統中有一個以上的 pg_dump 執行檔，只需按下enter鍵（例如您安裝了一個版本以上的 postgresql ）';
$string['pathtopgdumpinvalid'] = 'pg_dump 路徑有誤 - 路徑錯誤或是無法執行';
$string['pathtopsql'] = 'psql 路徑';
$string['pathtopsqldesc'] = '若系統中有一個以上的 psql 執行檔，只需按下enter鍵（例如您安裝了一個版本以上的 postgresql ）';
$string['pathtopsqlinvalid'] = 'psql 路徑有誤 - 路徑錯誤或是無法執行';
$string['pathtounzip'] = 'unzip 的路徑';
$string['pathtozip'] = 'zip 的路徑';
$string['pcreunicodewarning'] = '強烈建議使用相容Unicode字元的PCRE PHP擴展。';
$string['perfdebug'] = '效能資訊';
$string['performance'] = '效能';
$string['pgcluster'] = 'PostgreSQL叢集';
$string['pgclusterdescription'] = '命令列操作所需的 PostgreSQL 版本/叢集 參數，如果您在系統中只安裝一個 postgresql ，請保留空白。';
$string['php50restricted'] = 'PHP 5.0.x 有許多已知問題，請升級為 5.1.x 或降級為 4.3.x 或 4.4.x';
$string['php533warning'] = '建議用PHP 5.3.3以上';
$string['phpfloatproblem'] = '在處裡PHP浮點數字- {$a}時，偵測到意外的問題';
$string['pleaserefreshregistration'] = '您的網站已在Moodle.org登記。自從您上次的更新後，如果有重大的改變，請考慮在{$a}更新登記資料。';
$string['pleaseregister'] = '請註冊您的網站以移除此按鈕。';
$string['plugin'] = '插件';
$string['plugins'] = '插件';
$string['pluginscheck'] = '插件依賴性檢查';
$string['pluginscheckfailed'] = '以下插件的依賴性檢查失敗： {$a->pluginslist}';
$string['pluginschecktodo'] = '在進行安裝這一Moodle版本之前，你必須先解決所有的插件需求';
$string['pluginsoverview'] = '插件綜覽';
$string['profilecategory'] = '分類';
$string['profilecategoryname'] = '分類名稱 (必須是唯一不重複)';
$string['profilecategorynamenotunique'] = '這個分類名稱已經被使用了';
$string['profilecommonsettings'] = '共同的設定';
$string['profileconfirmcategorydeletion'] = '在這個類別有 {$a} 個欄位將移到上一層類別（或是在最上層類別之下）<br />您是否仍確定要刪除這個類別？';
$string['profileconfirmfielddeletion'] = '這個欄位有 {$a} 筆使用者資料將被刪除<br />您是否仍確定要刪除這個欄位？';
$string['profilecreatecategory'] = '建立一項新的個人資料分類';
$string['profilecreatefield'] = '建立一項新的個人資料分類';
$string['profilecreatenewcategory'] = '建立一個新的類別';
$string['profilecreatenewfield'] = '建立一項新的 &quot;{$a}&quot; 個人資料欄位';
$string['profiledefaultcategory'] = '其他欄位';
$string['profiledefaultchecked'] = '預設勾選';
$string['profiledefaultdata'] = '預設值';
$string['profiledeletecategory'] = '刪除一個分類';
$string['profiledeletefield'] = '刪除一個欄位';
$string['profiledescription'] = '欄位的描述說明';
$string['profiledscript'] = '這一腳本已經被查驗過';
$string['profiledscriptview'] = '檢視這一腳本的查驗訊息';
$string['profileeditcategory'] = '編輯分類：{$a}';
$string['profileeditfield'] = '編輯個人資料欄位：{$a}';
$string['profilefield'] = '個人資料欄位';
$string['profilefieldcolumns'] = '欄數';
$string['profilefieldispassword'] = '這是密碼欄位嗎？';
$string['profilefieldlink'] = '鏈結';
$string['profilefieldlink_help'] = '要把文字轉換成鏈結，輸入一網址並包含$$，這裡$$將會被文字所取代。

舉例來說，要把Twiter ID轉換成一個鏈結，請輸入http://twitter.com/$$';
$string['profilefieldlinktarget'] = '鏈結目標';
$string['profilefieldmaxlength'] = '最大的長度';
$string['profilefieldrows'] = '列數';
$string['profilefields'] = '個人資料欄位';
$string['profilefieldsize'] = '顯示的寬度';
$string['profileforceunique'] = '此資料必須是唯一的(不能有重複)？';
$string['profileinvaliddata'] = '無效的值';
$string['profilelocked'] = '這個欄位要鎖住嗎?';
$string['profilemenudefaultnotinoptions'] = '這預設值不是選項之一';
$string['profilemenunooptions'] = '沒有提供選單的選項';
$string['profilemenuoptions'] = '選單的選項(每行一項)';
$string['profilemenutoofewoptions'] = '您必須提供至少兩個選項';
$string['profilename'] = '名稱';
$string['profilenofieldsdefined'] = '沒有定義欄位';
$string['profilerequired'] = '這個欄位是必填的嗎？';
$string['profileroles'] = '查驗可見的角色';
$string['profilesforenrolledusersonly'] = '只查驗選課的用戶';
$string['profileshortname'] = '簡稱(必須是唯一不重複)';
$string['profileshortnamenotunique'] = '這個簡稱已經被使用了';
$string['profilesignup'] = '顯示在註冊的頁面上？';
$string['profilespecificsettings'] = '特別的設定';
$string['profilevisible'] = '誰可以看見這個欄位？';
$string['profilevisibleall'] = '每個人都可以看見';
$string['profilevisible_help'] = '*無法看見 -- 只用於私人資料，但管理員可看見。
*用戶可以看見 -- 只用於私人資料，用戶和管理員可看見。
*每個人都可看見。';
$string['profilevisiblenone'] = '隱藏';
$string['profilevisibleprivate'] = '使用者可以看見';
$string['profiling'] = '查驗中';
$string['profilingallowall'] = '繼續查驗';
$string['profilingallowall_help'] = '如果啟用此設定，那麼在任何時候，您可以在任何地方(PGC)使用PROFILEALL參數來啟動對Moodle session生命週期中執行的所有腳板的剖析。類似的，您可以使用PROFILEALLSTOP參數來停止剖析。';
$string['profilingallowme'] = '選擇性查驗';
$string['profilingallowme_help'] = '如果啟用此設定，那麼，您可以選擇性的在任何地方(PGC)使用PROFILEME參數，來剖析該腳本。同樣的，你可以使用DONFROFILEME參數禁止剖析。';
$string['profilingautofrec'] = '自動的查驗';
$string['profilingautofrec_help'] = '通過設定此參數，一些請求（基於指定的頻率(1/XXX) 隨機選擇)會被選出、自動剖析、保存結果以待進一步分析。注意這種剖析方法會使用包含/排除設定。設定為0會停用自動剖析。';
$string['profilingenabled'] = '啟用查驗';
$string['profilingenabled_help'] = '如果您啟用了這個設定，那麼剖析就是可用的，然後您就可以通過設定下一個選項來定義它的行為。';
$string['profilingexcluded'] = '執行分析';
$string['profilingexcluded_help'] = '在"剖析這些"設定中，將會被排除的網址清單 (以逗點分隔，絕對位址跳過 wwwroot, 可呼叫的)';
$string['profilingincluded'] = '剖析這些';
$string['profilingincluded_help'] = '將會被自動剖析的網址清單 (以逗點分隔，絕對位址跳過 wwwroot, 可呼叫的) 。舉例： /index.php, /course/view.php。

也在任何位置接受 * 萬用符號。 舉例： /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = '保留剖析運行';
$string['profilinglifetime_help'] = '指定您想包留多久就地剖析運行訊息。舊資料會被定期清除。注意，這不包含任意標記為"參考運行"的剖析運行資料。';
$string['protectusernames'] = '保護使用者姓名';
$string['proxybypass'] = '不使用代理伺服器';
$string['proxyhost'] = 'Proxy 主機';
$string['proxypassword'] = 'Proxy密碼';
$string['proxyport'] = 'Proxy 連接埠';
$string['proxytype'] = 'Proxy類態';
$string['proxyuser'] = 'Proxy使用者名稱';
$string['purgecaches'] = '清除所有的快取';
$string['purgecachesconfirm'] = 'Moodle可以快取佈景主題、javascript、語言字串、已經過濾的文字、rss feed和許多其他已處裡過的資料。清空這些暫存會從伺服器刪除這些數據，並強制瀏覽器重新下載數據，從而使您能看到由目前程式產生的最新資料。清空快取並沒有危險，但在服務器和客戶端還沒有處裡完新訊息和產生快取之前，您的網站可能會顯得有點慢。';
$string['purgecachesfinished'] = '全部快取已經清除';
$string['qtyperqpwillberemoved'] = '在更新期間，RQP問題類型將被移除。您不能再使用這種問題類型，這樣就不會遇到任何問題。';
$string['qtyperqpwillberemovedanyway'] = '在更新時，也將RQP問題移除。您的資料庫中有一些RQP問題存在，除非您在繼續更新前，重新安裝程式碼 http://moodle.org/mod/data/view.php?d=13&amp;rid=797，否則它會停止運作。';
$string['quarantinedir'] = '檢疫目錄區';
$string['question'] = '試題';
$string['questionbehaviours'] = '試題動作';
$string['questioncwqpfscheck'] = '在測驗卷中一個以上的\'隨機\' 試題設定為從共用及非共用混合的題庫中選取出來。更詳細的報告在<a href="{$a->reporturl}">此處</a> ，參考Moodle文件頁 <a href="{$a->docsurl}">點選此處</a>.';
$string['questioncwqpfsok'] = '很好。在您的測驗卷中沒有任何的"隨機"試題被設定為要從共用及非共用混合的試題類目中選出來。';
$string['questiontype'] = '題型';
$string['questiontypes'] = '各種題型';
$string['rcache'] = '資料快取';
$string['rcachettl'] = '資料快取存活時間';
$string['recaptchaprivatekey'] = 'ReCAPTCHA 私鑰';
$string['recaptchapublickey'] = 'ReCAPTCHA 公鑰';
$string['register'] = '註冊您的網站';
$string['registermoodleorg'] = '當您使用{$a}註冊您的網站';
$string['registermoodleorgli1'] = '為了您能得到重要的通知如安全警告和新版本的Moodle，您被加入到一個低平率的郵件列表中。';
$string['registermoodleorgli2'] = '關於您網站的統計數據將被加入到全球的Moodle社群{$a}裡';
$string['registermoodleorgli3'] = '您的網站也註冊了Moodle.org Open Community Hub({$a)}，允許有發佈課程權限的使用者(預設情況下只有管理員)有在MOOCH發佈課程的選項。';
$string['registerwithmoodleorg'] = '在Moodle.org註冊';
$string['registration'] = '註冊';
$string['registration_help'] = '為了能接收安全警告電子郵件，有助於Moodle的增長和統計，獲能夠在MOOCH上分享課程，建議在Moodle.org註冊。';
$string['registrationwarning'] = '您的網站尚未註冊。';
$string['releasenoteslink'] = '關於這個版本的 Moodle資訊，請參考線上 <a target="_new" href="{$a}">版本摘要</a>';
$string['rememberusername'] = '記住使用者名稱';
$string['rememberusername_desc'] = '如果想在使用者登入時使用永久cookie儲存使用者名稱，啟用此選項。未經使用者同意而使用永久cookie可能會引發隱私問題。';
$string['reportsdeleteconfirm'] = '您要完全刪除報告“{$a}”。資料庫中有與此插件相關的數據都會被完全刪除。您確認要繼續嗎？';
$string['reportsmanage'] = '管理報告';
$string['requiredentrieschanged'] = '<strong>重要-請一定要閱讀<br/>(這項警告只會在升級過程中顯示) </strong><br/>為了修復一個bug，使用了"必須完成的條目數"和"檢視前必須完成的條目數"的資料庫活動的設定將被修改。請查看a href="http://moodle.org/mod/forum/discuss.php?d=110928" target="_blank">資料庫模組討論區</a>了解更多細節。還可以在<a href="http://docs.moodle.org/en/Adding/editing_a_database#Required_entries" target="_blank">Moodle文件</a>中了解這些設定的特性。<br/><br/>這個修改影響您系統中的下列資料庫：(請馬上備份此列表，並在升級結束後，檢查這些活動是否仍按照教師期望的方式運作。)<br/><strong>{$a->text}</strong><br/>';
$string['requiremodintro'] = '必須輸入活動敘述';
$string['requires'] = '必須的';
$string['restorernewroleid'] = '還原課程中的角色';
$string['restorernewroleid_help'] = '如果使用者還沒有管理還原的課程權限，那麼使用者會被自動選課並分配此角色。如果您不希望做還原的使用者能管理所有它還原的課程，就選擇"無"。';
$string['reverseproxy'] = '反向代理';
$string['riskconfig'] = '使用者可以修改網站設定與行為';
$string['riskconfigshort'] = '架構的風險';
$string['riskdataloss'] = '使用者能銷毀大量內容或資訊';
$string['riskdatalossshort'] = '資料遺失風險';
$string['riskmanagetrust'] = '使用者可以修改其他使用者的信任設定';
$string['riskmanagetrustshort'] = '管理信任';
$string['riskpersonal'] = '使用者可以取得其他使用者私人資訊的存取權';
$string['riskpersonalshort'] = '隱私的風險';
$string['riskspam'] = '使用者以發送垃圾資訊給網站上其他使用者';
$string['riskspamshort'] = 'Spam 的風險';
$string['riskxss'] = '使用者可以新增造成跨網站程式攻擊的檔案與文字';
$string['riskxssshort'] = '跨網站攻擊程式的風險';
$string['roleswithexceptions'] = '{$a->roles}，有以下例外， {$a->exceptions}';
$string['rssglobaldisabled'] = '在伺服器階層失效';
$string['runclamavonupload'] = '當上傳檔案時使用 clam AV 檢查';
$string['save'] = '儲存';
$string['savechanges'] = '儲存變更';
$string['search'] = '搜尋';
$string['searchinsettings'] = '在設定中搜尋';
$string['searchresults'] = '搜尋結果';
$string['sectionerror'] = '區段錯誤';
$string['secureforms'] = '使用額外的表單安全性';
$string['security'] = '安全';
$string['selectdevice'] = '選擇設備';
$string['selecttheme'] = '從 {$a}選擇佈景主題';
$string['server'] = '主機';
$string['serverchecks'] = '伺服器檢查';
$string['serverlimit'] = '伺服器限制';
$string['sessionautostartwarning'] = '<p>檢測到嚴重的設定錯誤。請通知伺服器管理員。</p><p>為了Moodle的正確運作，需要管理員修改PHP設定。</p><p><code>session.auto_start</code>必須被設為<code>off</code>。</p><p>修改伺服器上的<code>php.ini</code>、 Apache/IIS<br />設定或<code>.htaccess</code>文件可以設定它。</p>';
$string['sessioncookie'] = 'Cookie 的字首';
$string['sessioncookiedomain'] = 'Cookie 的網域';
$string['sessioncookiepath'] = 'Cookie 的路徑';
$string['sessionhandling'] = 'Session 管理';
$string['sessiontimeout'] = '逾時';
$string['settingfileuploads'] = '檔案上傳功能是常用的操作，請修改PHP設定來啟用檔案上傳';
$string['settingmemorylimit'] = '檢測到的記憶體不足，請修該PHP設定提高記憶體的使用限制';
$string['settingsafemode'] = 'Moodle不完全相容於安全模式，請聯絡伺服器管理員關閉。如果您繼續使用安全模式運行Moodle將會發生各種的問題。';
$string['showcommentscount'] = '顯示回應數量';
$string['showdetails'] = '顯示詳細資訊';
$string['showuseridentity'] = '顯示使用者認證';
$string['showuseridentity_desc'] = '在選擇或搜尋使用者，以及顯示使用者列表的時候，這些字元可以和全名一起顯示。它們只會顯示給有moodle/site:viewuseridentity權限的使用者。預設情形下式教師和管理員。(選擇您的機構強制分配的區段，例如學號，會非常有用。)';
$string['simplexmlrequired'] = 'Moodle需要SimpleXML 的PHP擴展';
$string['sitemaintenance'] = '這個網站目前正在維護中，暫時不能使用。';
$string['sitemaintenancemode'] = '網站維護模式';
$string['sitemaintenanceoff'] = '維護模式已經關閉了，現在網站已經重新正常運行。';
$string['sitemaintenanceon'] = '您的網站目前處於維護模式(只有管理員可以登錄或使用網站)。';
$string['sitemaintenancewarning'] = '您的網站目前處於維護模式(只有管理員可以登錄)。要讓網站返回到正常模式，請<a href="maintenance.php">關閉維護模式</a>。';
$string['sitemaintenancewarning2'] = '您的網站目前處於維護模式(只有管理員可以登入)。要回復到正常模式，請a href="{$a}">關閉維護模式</a>。';
$string['sitepolicies'] = '網站政策';
$string['sitepolicy'] = '網站政策的網址';
$string['sitepolicyguest'] = '給訪客的網站連結政策';
$string['sitepolicyguest_help'] = '如果您有一份網站使用協議，並且需要所有訪客在使用此網站前閱讀並同意，那麼請在此指定它的網址，否則請留空白。網址可以指向任何公開的網址。注意：如果設定了強制登入，那麼未登入的使用者瀏覽會被拒絕。';
$string['sitepolicy_help'] = '如果您有一份網站使用規範，並且需要所有的用戶在使用此網站前閱讀並同意，那麼請在此指定它的URL，否則請留空。URL可以指向任何地址，一個方便的方法是指向網站中的文件，如 http://yoursite/file.php/1/policy.html 。';
$string['sitesectionhelp'] = '選擇後，網站首頁會出現一個主題區。';
$string['slasharguments'] = '使用斜線參數';
$string['smartpix'] = '智慧圖形搜尋';
$string['soaprecommended'] = '網路服務和某些第三方模組需要安裝可選的soap擴展';
$string['spellengine'] = '拼字檢查引擎';
$string['spelllanguagelist'] = '拼字檢查語言列表';
$string['splrequired'] = 'Moodle需要 SPL的PHP擴展列表';
$string['stats'] = '統計';
$string['statsfirstrun'] = '最大處理的時間間隔';
$string['statsmaxruntime'] = '最大執行時間';
$string['statsmoodleorg'] = '統計數據';
$string['statsruntimedays'] = '處理的天數';
$string['statsruntimestart'] = '執行於';
$string['statsuserthreshold'] = '使用者門檻';
$string['stickyblocks'] = '置頂區塊';
$string['stickyblockscourseview'] = '課程頁面';
$string['stickyblocksduplicatenotice'] = '如果您在這裡新增的區塊已經存在於同樣頁面，這會造成重複情形。<br />只有停駐的區塊不會被編輯，重複的項目還是會被修改。';
$string['stickyblocksmymoodle'] = '我的 Moodle';
$string['stickyblockspagetype'] = '要設定的頁面類型';
$string['strictformsrequired'] = '嚴格檢查必填欄位';
$string['stripalltitletags'] = '移除所有活動名稱中的HTML標籤';
$string['supportcontact'] = '技術支援';
$string['supportemail'] = '支援的電子郵件信箱';
$string['supportname'] = '支援的名稱';
$string['supportpage'] = '支援的頁面';
$string['suspenduser'] = '停用使用者帳號';
$string['switchlang'] = '切換語言目錄';
$string['systempaths'] = '系統路徑';
$string['tablenosave'] = '以上表格的更改會自動儲存';
$string['tablesnosave'] = '以上表格的更改會自動儲存';
$string['tabselectedtofront'] = '在多頁籤的表格中，是否要將目前已選擇的頁籤放在前面？';
$string['tabselectedtofronttext'] = '將已選擇的頁籤列移到最前面';
$string['themedesignermode'] = '主題佈景設計者模式';
$string['themelist'] = '佈景清單';
$string['themenoselected'] = '沒有選出佈景';
$string['themeresetcaches'] = '清除佈景快取';
$string['themeselect'] = '選擇佈景';
$string['themeselector'] = '佈景選擇器';
$string['themesettings'] = '佈景設定';
$string['therewereerrors'] = '資料有錯誤';
$string['timezone'] = '預設時區';
$string['timezoneforced'] = '這是網站管理員規定必須這樣做';
$string['timezoneisforcedto'] = '強制所有用戶使用';
$string['timezonenotforced'] = '用戶可以選擇自己的時區';
$string['tokenizerrecommended'] = '建議安裝 PHP Tokenizer 外掛，它可以增進 Moodle 網路功能。';
$string['tools'] = '管理員工具';
$string['toolsdeleteconfirm'] = '您將要完全刪除管理工具“{$a}”。資料庫中所有與此插件相關的數據都會被完全刪除。您確定要繼續嗎？';
$string['toolsmanage'] = '管理管理工具';
$string['unattendedoperation'] = '自動化安裝';
$string['unbookmarkthispage'] = '移除這個頁面的書籤';
$string['unicoderecommended'] = '建議將所有資料儲存為萬國編碼(UTF-8)，新安裝的網站在存取資料庫時預設編碼都是萬國編碼，如果您正在進行升級，您應該執行 UTF-8 轉換程式（請參考管理首頁）';
$string['unicoderequired'] = '您必須將資料儲存為萬國編碼格式 (UTF-8)，新安裝的網站在存取資料庫時預設編碼都是萬國編碼，如果您正在進行升級，您應該執行 UTF-8 轉換程式（請參考管理首頁）';
$string['uninstallplugin'] = '移除';
$string['unsettheme'] = '取消布景主體';
$string['unsupported'] = '不支援的';
$string['unsuspenduser'] = '啟動使用者帳號';
$string['updateaccounts'] = '更新現有帳號';
$string['updateautocheck'] = '自動檢查可用更新';
$string['updateautocheck_desc'] = '如果啟用，您的網站會自動檢查Moodle程式和所有附加插件的可用更新。如果有心的更新可用，會送出給網站管理員一個通知。';
$string['updateavailable'] = '有一個新版本的Moodle可用！';
$string['updateavailabledetailslink'] = '到{$a->url} 瀏覽更多詳細資訊';
$string['updateavailableforplugin'] = '您的一些插件有新版本可用！';
$string['updateavailable_moreinfo'] = '更多訊息...';
$string['updateavailablenot'] = '您的Moodle程式是最新的！';
$string['updateavailable_release'] = 'Moodle {$a}';
$string['updateavailable_version'] = '版本 {$a}';
$string['updatecomponent'] = '更新元件';
$string['updateminmaturity'] = '程式碼完成度需求';
$string['updateminmaturity_desc'] = '只有當可用程式碼達到選定的完成度時，才通知有可用更新。不論此設定如何，沒有聲明程式碼完成度的插件總會被報告更新。';
$string['updatenotificationfooter'] = '您的Moodle的網站 {$a->siteurl}設定為自動檢查可用的更新。作為網站管理員，您會收到此訊息。您可以在網站設定版面的管理部分中停用自動檢查可用更新。您可以在個人資料的設定部分裡的消息中定義此消息的發送方式。';
$string['updatenotifications'] = '更新通知';
$string['updatenotificationsubject'] = '您的Moodle網站有心的更新可使用';
$string['updatenotifybuilds'] = '有更新時通知';
$string['updatenotifybuilds_desc'] = '如果啟用，當目前版本有更新時，會報告Moodle程式碼有更新。更新式某個Moodle版本的持續改進。他們通常是每週發佈一次。如果停用，只有當更高版本的Moodle發佈時才會報告有可用的更新。插件更新的檢查不受到此設定的引響。';
$string['upgrade197notice'] = '<p>Moodle 1.9.7 包含了ㄧ些關於用戶密碼和備份的安全性修補，以保護你網站的用戶資料。 其結果是與備份有關的設定和權限會被改變。<br />
細節請參見<a href="http://docs.moodle.org/dev/Moodle_1.9.7_release_notes" target="_blank">Moodle 1.9.7 發行說明</a> 。';
$string['upgrade197noticesubject'] = 'Moodle 1.9.7安全通知';
$string['upgrade197salt'] = '為了減少密碼被盜的風險，強烈建議你設定一個密碼防盜碼。</br>詳細請看 <a href="{$a}" target="_blank">密碼防盜碼文件</a>。';
$string['upgradeerror'] = '升級{$a->plugin}到版本{$a->version}時發生未知錯誤，不能繼續進行。';
$string['upgradeforumread'] = '在Moodle 1.5中增加了一項新的功能，它可以跟蹤論區張貼的內容是否已經閱讀。<br />為了使用這個功能，您需要<a href="{$a}">升級您的資料表</a>。';
$string['upgradeforumreadinfo'] = '在Moodle 1.5中增加了一項新的功能，它可以追蹤討論區張貼的內容是否已經閱讀。為了使用這個功能，您需要升級您的資料表，為已經存在的討論區資料增加欄位。如果您的網站很大，這會花費很長的時間(數小時)，並且給資料庫伺服主機帶來很大負擔，因此最好在夜深人靜時再做這個工作。當然，在您的網站升級時，它還是可以繼續工作的，用戶不會受到任何影響。一旦您開始了這個工作，就必須讓它執行到結束(保持瀏覽器開啟著)。當然，如果您中途關閉了瀏覽器：不用擔心，重新開始就可以了。< br /><br />您現在要開始升級的程序嗎？';
$string['upgradelogs'] = '為了完整的功能，需要將您的舊日誌升級。<a href="{$a}">更多資訊</a>';
$string['upgradelogsinfo'] = '網站的變動記錄保存在日誌中.升級它以便查看最新的完整記錄。升級較大規模網站的日誌檔或許費時較長，耐心一些，升級過程中不要關閉瀏覽器--升級會順利的，它不會影響升級後使用者的使用<br /><br />您要升級日誌檔嗎?';
$string['upgradepluginsfirst'] = '您需要手動下載並且安裝可用更新';
$string['upgradepluginsinfo'] = '更新插件';
$string['upgradepluginsinfo_help'] = '您的某些插件有可用的更新。Moodle不會自動更新它們。您必須手動下載並在伺服器上安裝它。';
$string['upgradesettings'] = '新設定';
$string['upgradesettingsintro'] = '下面顯示的設定項目是在剛剛升級 Moodle 後加入的，請做必要的調整後點選頁尾的&quot;儲存設定&quot;按鈕';
$string['upgradestalefiles'] = '偵測到混和的Moodle版本，升級無法繼續';
$string['upgradestalefilesinfo'] = 'Moodle 更新過程已暫停，因為在 Moodle 資料夾內檢測到來自至少兩個Moodle主版本的PHP程式。

這會引發重大問題。如果要繼續，您必须保證 Moodle 目錄只包含一個版本的 Moodle 文件。

建議您採用如下方法清理您的 Moodle 資料夾：

* 重新命名目前的 Moodle 資料夾為“moodle_old”
* 建立一個標準的 Moodle 下載軟體包、Moodle CVS 或 GIT 儲存庫的檔案的資料夾
* 從“moodle_old”目錄移動 config.php 文件和所有非標準插件到新 Moodle 目錄

當您有了乾淨的 Moodle 目錄，重新整理頁面繼續 Moodle 更新程序。

這個警告伊班是由解壓縮標準Moodle程式包覆蓋到舊版本的Moodle引發的。雖然這樣做小的升級是可以的，但是一定不要這樣升級主版本。

這個警告也可能由使用CVS、SVN或GIT程式庫時的一次不完整的下載或更新操作引發的。如果是這樣，您可能只需等待操作完成，或者執行適當的清除指令並且重新執行還原操作。

您可以在 <a href="{$a}">{$a}</a> 的升級文件看到更多資訊';
$string['upgradestart'] = '正在升級Moodle資料庫';
$string['upgradesure'] = '您的 Moodle 檔案已經變更, 系統將會自動更新您的伺服器到這個版本:
<p><b>{$a}</b></p>
<p>一旦您進行更新就無法回復.</p>
<p>您確定要更新到這個版本嗎?</p>';
$string['upgradetimedout'] = '升級超過時間，請重新升級';
$string['upgradingdata'] = '系統更新的資料';
$string['upgradinglogs'] = '系統更新紀錄';
$string['upgradingversion'] = '升級到新版本';
$string['upwards'] = '向上';
$string['useblogassociations'] = '啟用關聯';
$string['useexternalyui'] = '使用線上YUI  libraries';
$string['usehtmleditor'] = '使用 HTML 編輯器';
$string['user'] = '用戶';
$string['userbulk'] = '批次處理用戶';
$string['userlist'] = '瀏覽用戶清單';
$string['userpolicies'] = '用戶管理辦法';
$string['userpreference'] = '使用者偏好設定';
$string['userquota'] = '使用者配額';
$string['users'] = '用戶';
$string['usesitenameforsitepages'] = '在網站頁面上使用網站名稱';
$string['usetags'] = '開啟標籤功能';
$string['validateerror'] = '此值無效：';
$string['verifychangedemail'] = '當變更郵件信箱時，限制網域名稱';
$string['warningcurrentsetting'] = '目前的值：{$a}無效';
$string['warningiconvbuggy'] = '您的 iconv 庫不支援//IGNORE標記。您需要安裝mbstring擴充，用來清除包含無效的UTF-8字元的字串。';
$string['webproxy'] = '網站代理伺服器';
$string['webproxyinfo'] = '如果您的Moodle伺服器無法直接存取網際網路，填寫下列選項。下載環境資料、語言包、RSS彙集、時區等等，必需存取網際網路。<br /><em>強烈建議PHP cURL延伸套件。</em>';
$string['xmlrpcrecommended'] = '與集線器溝通時需要 xmlrpc擴展，且會用於網頁服務和Moodle網路。';
$string['xmlstrictheaders'] = 'XML詳細表頭';
$string['yuicomboloading'] = 'YUI 大量裝載';
$string['ziprequired'] = 'Moodle現在需要 Zip PHP 擴展。 info-ZIP 程式庫或 PclZip程式庫已經不再使用';
