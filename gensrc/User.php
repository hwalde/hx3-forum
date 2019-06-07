<?php
/**
 * This file is part of HX3 Forum.
 *
 * (c) Herbert "Atomic" Walde <herbert.walde@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace generated;

use POOQ\ColumnField;
use POOQ\ColumnFieldList;
use POOQ\Table;

class User implements Table {

    const table = 'user';
   
    public static function as(string $aliasName): UserAlias
    {
        return new UserAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userId(),
			self::userGroupId(),
			self::memberGroupIds(),
			self::displayGroupId(),
			self::userName(),
			self::password(),
			self::passwordDate(),
			self::email(),
			self::styleId(),
			self::parentEmail(),
			self::homePage(),
			self::icq(),
			self::aim(),
			self::yahoo(),
			self::showVbCode(),
			self::userTitle(),
			self::customTitle(),
			self::joinDate(),
			self::daysPrune(),
			self::lastVisit(),
			self::lastActivity(),
			self::lastPost(),
			self::posts(),
			self::reputation(),
			self::reputationLevelId(),
			self::timeZoneOffset(),
			self::pmPopup(),
			self::avatarId(),
			self::avatarRevision(),
			self::options(),
			self::birthday(),
			self::birthdaySearch(),
			self::maxPosts(),
			self::startOfWeek(),
			self::ipAddress(),
			self::referrerId(),
			self::languageId(),
			self::msn(),
			self::emailStamp(),
			self::threadedMode(),
			self::autoSubscribe(),
			self::pmTotal(),
			self::pmUnread(),
			self::salt(),
			self::importUserId(),
			self::profilePicRevision(),
			self::showBirthday(),
			self::skype(),
			self::adminOptions(),
			self::lastPostId(),
			self::sigPicRevision(),
			self::iPoints(),
			self::infractions(),
			self::warnings(),
			self::infractiongGoupids(),
			self::infractionGroupId(),
			self::nCodeImageResizerMode(),
			self::nCodeImageResizerMaxWidth(),
			self::nCodeImageResizerMaxHeight(),
			self::profileVisits(),
			self::friendCount(),
			self::friendReqCount(),
			self::vmUnreadCount(),
			self::vmModeratedcount(),
			self::socGroupInviteCount(),
			self::socGroupReqCount(),
			self::pcUnreadCount(),
			self::pcModeratedCount(),
			self::gmModeratedCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserRecord
    {
        return new UserRecord();
    }
    
    public static function userId() : ColumnField
    {
        return new ColumnField('userId', 'User', 'user', 'userid');
    }
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'User', 'user', 'usergroupid');
    }
    public static function memberGroupIds() : ColumnField
    {
        return new ColumnField('memberGroupIds', 'User', 'user', 'membergroupids');
    }
    public static function displayGroupId() : ColumnField
    {
        return new ColumnField('displayGroupId', 'User', 'user', 'displaygroupid');
    }
    public static function userName() : ColumnField
    {
        return new ColumnField('userName', 'User', 'user', 'username');
    }
    public static function password() : ColumnField
    {
        return new ColumnField('password', 'User', 'user', 'password');
    }
    public static function passwordDate() : ColumnField
    {
        return new ColumnField('passwordDate', 'User', 'user', 'passworddate');
    }
    public static function email() : ColumnField
    {
        return new ColumnField('email', 'User', 'user', 'email');
    }
    public static function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'User', 'user', 'styleid');
    }
    public static function parentEmail() : ColumnField
    {
        return new ColumnField('parentEmail', 'User', 'user', 'parentemail');
    }
    public static function homePage() : ColumnField
    {
        return new ColumnField('homePage', 'User', 'user', 'homepage');
    }
    public static function icq() : ColumnField
    {
        return new ColumnField('icq', 'User', 'user', 'icq');
    }
    public static function aim() : ColumnField
    {
        return new ColumnField('aim', 'User', 'user', 'aim');
    }
    public static function yahoo() : ColumnField
    {
        return new ColumnField('yahoo', 'User', 'user', 'yahoo');
    }
    public static function showVbCode() : ColumnField
    {
        return new ColumnField('showVbCode', 'User', 'user', 'showvbcode');
    }
    public static function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'User', 'user', 'usertitle');
    }
    public static function customTitle() : ColumnField
    {
        return new ColumnField('customTitle', 'User', 'user', 'customtitle');
    }
    public static function joinDate() : ColumnField
    {
        return new ColumnField('joinDate', 'User', 'user', 'joindate');
    }
    public static function daysPrune() : ColumnField
    {
        return new ColumnField('daysPrune', 'User', 'user', 'daysprune');
    }
    public static function lastVisit() : ColumnField
    {
        return new ColumnField('lastVisit', 'User', 'user', 'lastvisit');
    }
    public static function lastActivity() : ColumnField
    {
        return new ColumnField('lastActivity', 'User', 'user', 'lastactivity');
    }
    public static function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'User', 'user', 'lastpost');
    }
    public static function posts() : ColumnField
    {
        return new ColumnField('posts', 'User', 'user', 'posts');
    }
    public static function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'User', 'user', 'reputation');
    }
    public static function reputationLevelId() : ColumnField
    {
        return new ColumnField('reputationLevelId', 'User', 'user', 'reputationlevelid');
    }
    public static function timeZoneOffset() : ColumnField
    {
        return new ColumnField('timeZoneOffset', 'User', 'user', 'timezoneoffset');
    }
    public static function pmPopup() : ColumnField
    {
        return new ColumnField('pmPopup', 'User', 'user', 'pmpopup');
    }
    public static function avatarId() : ColumnField
    {
        return new ColumnField('avatarId', 'User', 'user', 'avatarid');
    }
    public static function avatarRevision() : ColumnField
    {
        return new ColumnField('avatarRevision', 'User', 'user', 'avatarrevision');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('options', 'User', 'user', 'options');
    }
    public static function birthday() : ColumnField
    {
        return new ColumnField('birthday', 'User', 'user', 'birthday');
    }
    public static function birthdaySearch() : ColumnField
    {
        return new ColumnField('birthdaySearch', 'User', 'user', 'birthday_search');
    }
    public static function maxPosts() : ColumnField
    {
        return new ColumnField('maxPosts', 'User', 'user', 'maxposts');
    }
    public static function startOfWeek() : ColumnField
    {
        return new ColumnField('startOfWeek', 'User', 'user', 'startofweek');
    }
    public static function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'User', 'user', 'ipaddress');
    }
    public static function referrerId() : ColumnField
    {
        return new ColumnField('referrerId', 'User', 'user', 'referrerid');
    }
    public static function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'User', 'user', 'languageid');
    }
    public static function msn() : ColumnField
    {
        return new ColumnField('msn', 'User', 'user', 'msn');
    }
    public static function emailStamp() : ColumnField
    {
        return new ColumnField('emailStamp', 'User', 'user', 'emailstamp');
    }
    public static function threadedMode() : ColumnField
    {
        return new ColumnField('threadedMode', 'User', 'user', 'threadedmode');
    }
    public static function autoSubscribe() : ColumnField
    {
        return new ColumnField('autoSubscribe', 'User', 'user', 'autosubscribe');
    }
    public static function pmTotal() : ColumnField
    {
        return new ColumnField('pmTotal', 'User', 'user', 'pmtotal');
    }
    public static function pmUnread() : ColumnField
    {
        return new ColumnField('pmUnread', 'User', 'user', 'pmunread');
    }
    public static function salt() : ColumnField
    {
        return new ColumnField('salt', 'User', 'user', 'salt');
    }
    public static function importUserId() : ColumnField
    {
        return new ColumnField('importUserId', 'User', 'user', 'importuserid');
    }
    public static function profilePicRevision() : ColumnField
    {
        return new ColumnField('profilePicRevision', 'User', 'user', 'profilepicrevision');
    }
    public static function showBirthday() : ColumnField
    {
        return new ColumnField('showBirthday', 'User', 'user', 'showbirthday');
    }
    public static function skype() : ColumnField
    {
        return new ColumnField('skype', 'User', 'user', 'skype');
    }
    public static function adminOptions() : ColumnField
    {
        return new ColumnField('adminOptions', 'User', 'user', 'adminoptions');
    }
    public static function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'User', 'user', 'lastpostid');
    }
    public static function sigPicRevision() : ColumnField
    {
        return new ColumnField('sigPicRevision', 'User', 'user', 'sigpicrevision');
    }
    public static function iPoints() : ColumnField
    {
        return new ColumnField('iPoints', 'User', 'user', 'ipoints');
    }
    public static function infractions() : ColumnField
    {
        return new ColumnField('infractions', 'User', 'user', 'infractions');
    }
    public static function warnings() : ColumnField
    {
        return new ColumnField('warnings', 'User', 'user', 'warnings');
    }
    public static function infractiongGoupids() : ColumnField
    {
        return new ColumnField('infractiongGoupids', 'User', 'user', 'infractiongroupids');
    }
    public static function infractionGroupId() : ColumnField
    {
        return new ColumnField('infractionGroupId', 'User', 'user', 'infractiongroupid');
    }
    public static function nCodeImageResizerMode() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMode', 'User', 'user', 'ncode_imageresizer_mode');
    }
    public static function nCodeImageResizerMaxWidth() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMaxWidth', 'User', 'user', 'ncode_imageresizer_maxwidth');
    }
    public static function nCodeImageResizerMaxHeight() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMaxHeight', 'User', 'user', 'ncode_imageresizer_maxheight');
    }
    public static function profileVisits() : ColumnField
    {
        return new ColumnField('profileVisits', 'User', 'user', 'profilevisits');
    }
    public static function friendCount() : ColumnField
    {
        return new ColumnField('friendCount', 'User', 'user', 'friendcount');
    }
    public static function friendReqCount() : ColumnField
    {
        return new ColumnField('friendReqCount', 'User', 'user', 'friendreqcount');
    }
    public static function vmUnreadCount() : ColumnField
    {
        return new ColumnField('vmUnreadCount', 'User', 'user', 'vmunreadcount');
    }
    public static function vmModeratedcount() : ColumnField
    {
        return new ColumnField('vmModeratedcount', 'User', 'user', 'vmmoderatedcount');
    }
    public static function socGroupInviteCount() : ColumnField
    {
        return new ColumnField('socGroupInviteCount', 'User', 'user', 'socgroupinvitecount');
    }
    public static function socGroupReqCount() : ColumnField
    {
        return new ColumnField('socGroupReqCount', 'User', 'user', 'socgroupreqcount');
    }
    public static function pcUnreadCount() : ColumnField
    {
        return new ColumnField('pcUnreadCount', 'User', 'user', 'pcunreadcount');
    }
    public static function pcModeratedCount() : ColumnField
    {
        return new ColumnField('pcModeratedCount', 'User', 'user', 'pcmoderatedcount');
    }
    public static function gmModeratedCount() : ColumnField
    {
        return new ColumnField('gmModeratedCount', 'User', 'user', 'gmmoderatedcount');
    }

    public function getTableName(): string
    {
        return 'user';
    }
    
    public function __listColumns() : array
    {
        return ['userid', 'usergroupid', 'membergroupids', 'displaygroupid', 'username', 'password', 'passworddate', 'email', 'styleid', 'parentemail', 'homepage', 'icq', 'aim', 'yahoo', 'showvbcode', 'usertitle', 'customtitle', 'joindate', 'daysprune', 'lastvisit', 'lastactivity', 'lastpost', 'posts', 'reputation', 'reputationlevelid', 'timezoneoffset', 'pmpopup', 'avatarid', 'avatarrevision', 'options', 'birthday', 'birthday_search', 'maxposts', 'startofweek', 'ipaddress', 'referrerid', 'languageid', 'msn', 'emailstamp', 'threadedmode', 'autosubscribe', 'pmtotal', 'pmunread', 'salt', 'importuserid', 'profilepicrevision', 'showbirthday', 'skype', 'adminoptions', 'lastpostid', 'sigpicrevision', 'ipoints', 'infractions', 'warnings', 'infractiongroupids', 'infractiongroupid', 'ncode_imageresizer_mode', 'ncode_imageresizer_maxwidth', 'ncode_imageresizer_maxheight', 'profilevisits', 'friendcount', 'friendreqcount', 'vmunreadcount', 'vmmoderatedcount', 'socgroupinvitecount', 'socgroupreqcount', 'pcunreadcount', 'pcmoderatedcount', 'gmmoderatedcount'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['userid'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['ncode_imageresizer_mode', 'ncode_imageresizer_maxwidth', 'ncode_imageresizer_maxheight'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'userid' => 'integer', 
			'usergroupid' => 'integer', 
			'membergroupids' => 'string', 
			'displaygroupid' => 'integer', 
			'username' => 'string', 
			'password' => 'string', 
			'passworddate' => 'date', 
			'email' => 'string', 
			'styleid' => 'integer', 
			'parentemail' => 'string', 
			'homepage' => 'string', 
			'icq' => 'string', 
			'aim' => 'string', 
			'yahoo' => 'string', 
			'showvbcode' => 'integer', 
			'usertitle' => 'string', 
			'customtitle' => 'integer', 
			'joindate' => 'integer', 
			'daysprune' => 'integer', 
			'lastvisit' => 'integer', 
			'lastactivity' => 'integer', 
			'lastpost' => 'integer', 
			'posts' => 'integer', 
			'reputation' => 'integer', 
			'reputationlevelid' => 'integer', 
			'timezoneoffset' => 'string', 
			'pmpopup' => 'integer', 
			'avatarid' => 'integer', 
			'avatarrevision' => 'integer', 
			'options' => 'integer', 
			'birthday' => 'string', 
			'birthday_search' => 'date', 
			'maxposts' => 'integer', 
			'startofweek' => 'integer', 
			'ipaddress' => 'string', 
			'referrerid' => 'integer', 
			'languageid' => 'integer', 
			'msn' => 'string', 
			'emailstamp' => 'integer', 
			'threadedmode' => 'integer', 
			'autosubscribe' => 'integer', 
			'pmtotal' => 'integer', 
			'pmunread' => 'integer', 
			'salt' => 'string', 
			'importuserid' => 'integer', 
			'profilepicrevision' => 'integer', 
			'showbirthday' => 'integer', 
			'skype' => 'string', 
			'adminoptions' => 'integer', 
			'lastpostid' => 'integer', 
			'sigpicrevision' => 'integer', 
			'ipoints' => 'integer', 
			'infractions' => 'integer', 
			'warnings' => 'integer', 
			'infractiongroupids' => 'string', 
			'infractiongroupid' => 'integer', 
			'ncode_imageresizer_mode' => 'string', 
			'ncode_imageresizer_maxwidth' => 'integer', 
			'ncode_imageresizer_maxheight' => 'integer', 
			'profilevisits' => 'integer', 
			'friendcount' => 'integer', 
			'friendreqcount' => 'integer', 
			'vmunreadcount' => 'integer', 
			'vmmoderatedcount' => 'integer', 
			'socgroupinvitecount' => 'integer', 
			'socgroupreqcount' => 'integer', 
			'pcunreadcount' => 'integer', 
			'pcmoderatedcount' => 'integer', 
			'gmmoderatedcount' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'userid' => 'userId', 
			'usergroupid' => 'userGroupId', 
			'membergroupids' => 'memberGroupIds', 
			'displaygroupid' => 'displayGroupId', 
			'username' => 'userName', 
			'password' => 'password', 
			'passworddate' => 'passwordDate', 
			'email' => 'email', 
			'styleid' => 'styleId', 
			'parentemail' => 'parentEmail', 
			'homepage' => 'homePage', 
			'icq' => 'icq', 
			'aim' => 'aim', 
			'yahoo' => 'yahoo', 
			'showvbcode' => 'showVbCode', 
			'usertitle' => 'userTitle', 
			'customtitle' => 'customTitle', 
			'joindate' => 'joinDate', 
			'daysprune' => 'daysPrune', 
			'lastvisit' => 'lastVisit', 
			'lastactivity' => 'lastActivity', 
			'lastpost' => 'lastPost', 
			'posts' => 'posts', 
			'reputation' => 'reputation', 
			'reputationlevelid' => 'reputationLevelId', 
			'timezoneoffset' => 'timeZoneOffset', 
			'pmpopup' => 'pmPopup', 
			'avatarid' => 'avatarId', 
			'avatarrevision' => 'avatarRevision', 
			'options' => 'options', 
			'birthday' => 'birthday', 
			'birthday_search' => 'birthdaySearch', 
			'maxposts' => 'maxPosts', 
			'startofweek' => 'startOfWeek', 
			'ipaddress' => 'ipAddress', 
			'referrerid' => 'referrerId', 
			'languageid' => 'languageId', 
			'msn' => 'msn', 
			'emailstamp' => 'emailStamp', 
			'threadedmode' => 'threadedMode', 
			'autosubscribe' => 'autoSubscribe', 
			'pmtotal' => 'pmTotal', 
			'pmunread' => 'pmUnread', 
			'salt' => 'salt', 
			'importuserid' => 'importUserId', 
			'profilepicrevision' => 'profilePicRevision', 
			'showbirthday' => 'showBirthday', 
			'skype' => 'skype', 
			'adminoptions' => 'adminOptions', 
			'lastpostid' => 'lastPostId', 
			'sigpicrevision' => 'sigPicRevision', 
			'ipoints' => 'iPoints', 
			'infractions' => 'infractions', 
			'warnings' => 'warnings', 
			'infractiongroupids' => 'infractiongGoupids', 
			'infractiongroupid' => 'infractionGroupId', 
			'ncode_imageresizer_mode' => 'nCodeImageResizerMode', 
			'ncode_imageresizer_maxwidth' => 'nCodeImageResizerMaxWidth', 
			'ncode_imageresizer_maxheight' => 'nCodeImageResizerMaxHeight', 
			'profilevisits' => 'profileVisits', 
			'friendcount' => 'friendCount', 
			'friendreqcount' => 'friendReqCount', 
			'vmunreadcount' => 'vmUnreadCount', 
			'vmmoderatedcount' => 'vmModeratedcount', 
			'socgroupinvitecount' => 'socGroupInviteCount', 
			'socgroupreqcount' => 'socGroupReqCount', 
			'pcunreadcount' => 'pcUnreadCount', 
			'pcmoderatedcount' => 'pcModeratedCount', 
			'gmmoderatedcount' => 'gmModeratedCount'
		];
    }
}