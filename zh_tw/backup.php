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
 * Strings for component 'backup', language 'zh_tw', branch 'MOODLE_23_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = '選擇是否進行自動備份。如果選擇人工手動，那麼只能經由自動備份CLI程式做備份。

您可以用手動在命令列模式執行，或是透過 cron 排程執行。';
$string['autoactivedisabled'] = '已停用';
$string['autoactiveenabled'] = '已啟用';
$string['autoactivemanual'] = '人工';
$string['automatedbackupschedule'] = '時程';
$string['automatedbackupschedulehelp'] = '選擇每一週的那幾天執行自動備份工作。';
$string['automatedbackupsinactive'] = '網站管理員沒有啟動備份排程';
$string['automatedbackupstatus'] = '自動備份狀態';
$string['automatedsettings'] = '自動備份設定';
$string['automatedsetup'] = '自動備份的設定';
$string['automatedstorage'] = '自動備份儲存';
$string['automatedstoragehelp'] = '選擇自動備份檔案的儲存路徑';
$string['backupactivity'] = '備份活動：{$a}';
$string['backupcourse'] = '備份課程：{$a}';
$string['backupcoursedetails'] = '課程詳情';
$string['backupcoursesection'] = '學習單元：{$a}';
$string['backupcoursesections'] = '課程學習單元';
$string['backupdate'] = '備份日期';
$string['backupdetails'] = '備份細節';
$string['backupdetailsnonstandardinfo'] = '所選出的檔案不是標準的Moodle 備份檔案。

回存過程會嘗試將它轉換為標準格式再回存它。';
$string['backupformat'] = '格式';
$string['backupformatimscc'] = 'IMS通用容器';
$string['backupformatmoodle1'] = 'Moodle1格式';
$string['backupformatmoodle2'] = 'Moodle 2格式';
$string['backupformatunknown'] = '未知的格式';
$string['backupmode'] = '模式';
$string['backupmode10'] = '一般';
$string['backupmode20'] = '匯入';
$string['backupmode30'] = '課程資料中心';
$string['backupmode40'] = '相同網站';
$string['backupmode50'] = '自動的';
$string['backupmode60'] = '已轉換過';
$string['backupsection'] = '備份課程學習單元：{$a}';
$string['backupsettings'] = '備份設定';
$string['backupsitedetails'] = '網站細節';
$string['backupstage16action'] = '繼續';
$string['backupstage1action'] = '下一個';
$string['backupstage2action'] = '下一個';
$string['backupstage4action'] = '執行備份';
$string['backupstage8action'] = '繼續';
$string['backuptype'] = '類型';
$string['backuptypeactivity'] = '活動';
$string['backuptypecourse'] = '課程';
$string['backuptypesection'] = '學習單元';
$string['backupversion'] = '備份版本';
$string['cannotfindassignablerole'] = '在備份檔的這{$a}角色，無法對應到您允許指派的任何角色';
$string['choosefilefromactivitybackup'] = '活動備份區';
$string['choosefilefromactivitybackup_help'] = '當使用預設設定來備份各種活動時，備份檔將儲存在此';
$string['choosefilefromautomatedbackup'] = '自動備份';
$string['choosefilefromautomatedbackup_help'] = '包含自動產生的備份檔';
$string['choosefilefromcoursebackup'] = '課程備份區';
$string['choosefilefromcoursebackup_help'] = '當使用預設設定來備份課程時，備份檔將儲存在此';
$string['choosefilefromuserbackup'] = '使用者私人備份區';
$string['choosefilefromuserbackup_help'] = '當備份課程時，勾選"匿名使用者訊息"選項，備份檔將會儲存在此';
$string['configgeneralactivities'] = '預設為將各種活動包含在備份檔';
$string['configgeneralanonymize'] = '預設為將與使用者有關的所有訊息變成匿名';
$string['configgeneralblocks'] = '預設為將各種區塊包含在備份檔';
$string['configgeneralcomments'] = '預設為將各種評語包含在備份檔';
$string['configgeneralfilters'] = '預設為將各種過濾器包含在備份檔';
$string['configgeneralhistories'] = '預設為將使用者活動日誌包含在備份檔';
$string['configgenerallogs'] = '預設為將日誌包含在備份檔。';
$string['configgeneralroleassignments'] = '預設為將各種角色指派包含在備份檔';
$string['configgeneralusers'] = '預設為將所有使用者包含在備份檔';
$string['configgeneraluserscompletion'] = '預設為將使用者完整資訊包含在備份檔';
$string['configloglifetime'] = '請指定一個備份日誌要保留的時間。超過此時間的舊日誌將會被自動刪除。

建議您將此時間縮短，因為備份日誌所紀錄的訊息非常多。';
$string['confirmcancel'] = '取消備份';
$string['confirmcancelno'] = '留下';
$string['confirmcancelquestion'] = '您確定您要取消？任何您輸入的訊息將會遺失。';
$string['confirmcancelyes'] = '取消';
$string['confirmnewcoursecontinue'] = '新課程警告';
$string['confirmnewcoursecontinuequestion'] = '在課程還原過程中，將會建立一暫時性(隱藏的)課程。

要放棄還原，請擊點"取消"。

請不要在還原過程中關閉瀏覽器。';
$string['coursecategory'] = '課程還原時的分類';
$string['courseid'] = '原初課程編號';
$string['coursesettings'] = '課程設定';
$string['coursetitle'] = '標題';
$string['currentstage1'] = '初始設定';
$string['currentstage16'] = '完成';
$string['currentstage2'] = '架構設定';
$string['currentstage4'] = '確認和檢查';
$string['currentstage8'] = '執行備份';
$string['dependenciesenforced'] = '由於未滿足的相依關係，您的設置已被更改。';
$string['enterasearch'] = '輸入一搜尋';
$string['error_block_for_module_not_found'] = '在課程模組(id: {$a->mid})找到孤兒區塊 (id: {$a->bid})實例。

這一區塊將不會包含在備份檔中。';
$string['error_course_module_not_found'] = '找到孤兒課程模組(編號:{$a})，這模組不會加入備份檔。';
$string['errorfilenamemustbezip'] = '您輸入的檔案必須是zip壓縮檔，並以 .mbz 為副檔名。';
$string['errorfilenamerequired'] = '您必須為這一備份輸入一有效的檔案名稱。';
$string['errorinvalidformat'] = '未知的備份格式';
$string['errorinvalidformatinfo'] = '這選出的檔案不是有效的Moodle備份檔，且無法還原。';
$string['errorminbackup20version'] = '這一備份檔是以Moodle備份模組的測試版本({$a->backup})建立。

最低需求是 {$a->min}，無法被回存。';
$string['errorrestorefrontpage'] = '錯誤! 不允許還原覆蓋首頁';
$string['executionsuccess'] = '備份檔已經成功建立';
$string['filename'] = '檔案名稱';
$string['generalactivities'] = '包含活動';
$string['generalanonymize'] = '匿名訊息';
$string['generalbackdefaults'] = '一般備份預設';
$string['generalblocks'] = '包含區塊';
$string['generalcomments'] = '包含回應';
$string['generalfilters'] = '包含過濾器';
$string['generalgradehistories'] = '包含成績歷史紀錄';
$string['generalhistories'] = '包含歷史紀錄';
$string['generallogs'] = '包含日誌';
$string['generalroleassignments'] = '包含角色指派';
$string['generalsettings'] = '一般備份設定';
$string['generalusers'] = '包含使用者';
$string['generaluserscompletion'] = '包含使用者完成訊息';
$string['importbackupstage16action'] = '繼續';
$string['importbackupstage1action'] = '下一個';
$string['importbackupstage2action'] = '下一個';
$string['importbackupstage4action'] = '執行匯入';
$string['importbackupstage8action'] = '繼續';
$string['importcurrentstage0'] = '課程選擇';
$string['importcurrentstage1'] = '初始設定';
$string['importcurrentstage16'] = '完成';
$string['importcurrentstage2'] = '架構設定';
$string['importcurrentstage4'] = '確認和檢查';
$string['importcurrentstage8'] = '進行匯入';
$string['importfile'] = '匯入一備份檔';
$string['importsuccess'] = '匯入已經完成，請擊點繼續以回到課程';
$string['includeactivities'] = '包含：';
$string['includeditems'] = '包含項目：';
$string['includesection'] = '學習單元{$a}';
$string['includeuserinfo'] = '使用者資料';
$string['locked'] = '已被封鎖';
$string['lockedbyconfig'] = '此設定被預設的備份設定鎖住。';
$string['lockedbyhierarchy'] = '因依賴關係被鎖定';
$string['lockedbypermission'] = '您無足夠權限去更改這一設定';
$string['loglifetime'] = '保持日誌檔';
$string['managefiles'] = '管理備份檔';
$string['moodleversion'] = 'Moodle版本';
$string['moreresults'] = '有太多結果，請輸入更精確詳細的搜尋詞。';
$string['nomatchingcourses'] = '沒有課程可以顯示';
$string['norestoreoptions'] = '這兒沒有類別或現有課程讓您回存';
$string['originalwwwroot'] = '備份檔的網址';
$string['previousstage'] = '先前的';
$string['qcategory2coursefallback'] = '在備份檔中的原來位於系統/課程類別脈絡的試題類別"{$a->name}"，在回存時將會被建立在課程脈絡';
$string['qcategorycannotberestored'] = '這試題類別 "{$a->name}" 無法以還原建立';
$string['question2coursefallback'] = '在備份檔中的原來位於系統/課程類別脈絡的試題類別"{$a->name}"，在回存時將會被建立在課程脈絡。';
$string['questionegorycannotberestored'] = '這試題"{$a->name}" 無法經由還原建立。';
$string['restoreactivity'] = '恢復活動';
$string['restorecourse'] = '恢復課程';
$string['restorecoursesettings'] = '課程設定';
$string['restoreexecutionsuccess'] = '這課程已經成功地回存，擊點以下"繼續"按鈕，將帶您檢視您回存的課程。';
$string['restorenewcoursefullname'] = '新課程名稱';
$string['restorenewcourseshortname'] = '新課程簡稱';
$string['restorenewcoursestartdate'] = '新開始日期';
$string['restorerolemappings'] = '回存角色對應';
$string['restorerootsettings'] = '回存設定';
$string['restoresection'] = '還原學習單元';
$string['restorestage1'] = '確認';
$string['restorestage16'] = '檢視';
$string['restorestage16action'] = '執行回存';
$string['restorestage1action'] = '下一個';
$string['restorestage2'] = '目的地';
$string['restorestage2action'] = '下一個';
$string['restorestage32'] = '處裡';
$string['restorestage32action'] = '繼續';
$string['restorestage4'] = '各種設定';
$string['restorestage4action'] = '下一個';
$string['restorestage64'] = '完成';
$string['restorestage64action'] = '繼續';
$string['restorestage8'] = '架構';
$string['restorestage8action'] = '下一步';
$string['restoretarget'] = '回存的目標';
$string['restoretocourse'] = '回存到課程：';
$string['restoretocurrentcourse'] = '回存到這一課程：';
$string['restoretocurrentcourseadding'] = '合併這備份課程到這一課程';
$string['restoretocurrentcoursedeleting'] = '刪除這一課程的內容，然後用備份檔還原';
$string['restoretoexistingcourse'] = '回存到一現有課程';
$string['restoretoexistingcourseadding'] = '合併這備份課程到這一現有課程';
$string['restoretoexistingcoursedeleting'] = '刪除這現有課程的內容，然後用備份檔還原';
$string['restoretonewcourse'] = '回存成一新課程';
$string['restoringcourse'] = '課程回存進行中';
$string['restoringcourseshortname'] = '正在回存中';
$string['rootsettingactivities'] = '包含各種活動';
$string['rootsettinganonymize'] = '匿名的使用者訊息';
$string['rootsettingblocks'] = '包含各種區塊';
$string['rootsettingcalendarevents'] = '包含行事曆事件';
$string['rootsettingcomments'] = '包含評語';
$string['rootsettingfilters'] = '包含過濾器';
$string['rootsettinggradehistories'] = '包含成績紀錄';
$string['rootsettinglogs'] = '包含課程日誌';
$string['rootsettingroleassignments'] = '包含使用者角色指派';
$string['rootsettings'] = '備份設定';
$string['rootsettingusers'] = '包含有選修的使用者';
$string['rootsettinguserscompletion'] = '包含使用者學習進度細節';
$string['sectionactivities'] = '各種活動';
$string['sectioninc'] = '包含在備份檔(不含使用者訊息)';
$string['sectionincanduser'] = '包含在備份檔，伴隨使用者訊息';
$string['selectacategory'] = '選擇一類別';
$string['selectacourse'] = '選擇一課程';
$string['setting_course_fullname'] = '課程名稱';
$string['setting_course_shortname'] = '課程簡稱';
$string['setting_course_startdate'] = '課程開始日期';
$string['setting_overwriteconf'] = '覆寫課程配置';
$string['storagecourseandexternal'] = '課程備份檔案區和指定的目錄';
$string['storagecourseonly'] = '課程備份檔案區';
$string['storageexternalonly'] = '為自動備份指定目錄';
$string['totalcategorysearchresults'] = '類別總數：{$a}';
$string['totalcoursesearchresults'] = '課程總數：{$a}';
