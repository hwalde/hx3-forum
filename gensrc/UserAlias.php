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

use POOQ\TableAlias;
use POOQ\ColumnField;
use POOQ\ColumnFieldList;

class UserAlias extends TableAlias {
   
    public function userId() : ColumnField
    {
        return new ColumnField('userId', 'User', 'user', 'userid', $this->getAliasName());
    }
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'User', 'user', 'usergroupid', $this->getAliasName());
    }
    public function memberGroupIds() : ColumnField
    {
        return new ColumnField('memberGroupIds', 'User', 'user', 'membergroupids', $this->getAliasName());
    }
    public function displayGroupId() : ColumnField
    {
        return new ColumnField('displayGroupId', 'User', 'user', 'displaygroupid', $this->getAliasName());
    }
    public function userName() : ColumnField
    {
        return new ColumnField('userName', 'User', 'user', 'username', $this->getAliasName());
    }
    public function password() : ColumnField
    {
        return new ColumnField('password', 'User', 'user', 'password', $this->getAliasName());
    }
    public function passwordDate() : ColumnField
    {
        return new ColumnField('passwordDate', 'User', 'user', 'passworddate', $this->getAliasName());
    }
    public function email() : ColumnField
    {
        return new ColumnField('email', 'User', 'user', 'email', $this->getAliasName());
    }
    public function styleId() : ColumnField
    {
        return new ColumnField('styleId', 'User', 'user', 'styleid', $this->getAliasName());
    }
    public function parentEmail() : ColumnField
    {
        return new ColumnField('parentEmail', 'User', 'user', 'parentemail', $this->getAliasName());
    }
    public function homePage() : ColumnField
    {
        return new ColumnField('homePage', 'User', 'user', 'homepage', $this->getAliasName());
    }
    public function icq() : ColumnField
    {
        return new ColumnField('icq', 'User', 'user', 'icq', $this->getAliasName());
    }
    public function aim() : ColumnField
    {
        return new ColumnField('aim', 'User', 'user', 'aim', $this->getAliasName());
    }
    public function yahoo() : ColumnField
    {
        return new ColumnField('yahoo', 'User', 'user', 'yahoo', $this->getAliasName());
    }
    public function showVbCode() : ColumnField
    {
        return new ColumnField('showVbCode', 'User', 'user', 'showvbcode', $this->getAliasName());
    }
    public function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'User', 'user', 'usertitle', $this->getAliasName());
    }
    public function customTitle() : ColumnField
    {
        return new ColumnField('customTitle', 'User', 'user', 'customtitle', $this->getAliasName());
    }
    public function joinDate() : ColumnField
    {
        return new ColumnField('joinDate', 'User', 'user', 'joindate', $this->getAliasName());
    }
    public function daysPrune() : ColumnField
    {
        return new ColumnField('daysPrune', 'User', 'user', 'daysprune', $this->getAliasName());
    }
    public function lastVisit() : ColumnField
    {
        return new ColumnField('lastVisit', 'User', 'user', 'lastvisit', $this->getAliasName());
    }
    public function lastActivity() : ColumnField
    {
        return new ColumnField('lastActivity', 'User', 'user', 'lastactivity', $this->getAliasName());
    }
    public function lastPost() : ColumnField
    {
        return new ColumnField('lastPost', 'User', 'user', 'lastpost', $this->getAliasName());
    }
    public function posts() : ColumnField
    {
        return new ColumnField('posts', 'User', 'user', 'posts', $this->getAliasName());
    }
    public function reputation() : ColumnField
    {
        return new ColumnField('reputation', 'User', 'user', 'reputation', $this->getAliasName());
    }
    public function reputationLevelId() : ColumnField
    {
        return new ColumnField('reputationLevelId', 'User', 'user', 'reputationlevelid', $this->getAliasName());
    }
    public function timeZoneOffset() : ColumnField
    {
        return new ColumnField('timeZoneOffset', 'User', 'user', 'timezoneoffset', $this->getAliasName());
    }
    public function pmPopup() : ColumnField
    {
        return new ColumnField('pmPopup', 'User', 'user', 'pmpopup', $this->getAliasName());
    }
    public function avatarId() : ColumnField
    {
        return new ColumnField('avatarId', 'User', 'user', 'avatarid', $this->getAliasName());
    }
    public function avatarRevision() : ColumnField
    {
        return new ColumnField('avatarRevision', 'User', 'user', 'avatarrevision', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('options', 'User', 'user', 'options', $this->getAliasName());
    }
    public function birthday() : ColumnField
    {
        return new ColumnField('birthday', 'User', 'user', 'birthday', $this->getAliasName());
    }
    public function birthdaySearch() : ColumnField
    {
        return new ColumnField('birthdaySearch', 'User', 'user', 'birthday_search', $this->getAliasName());
    }
    public function maxPosts() : ColumnField
    {
        return new ColumnField('maxPosts', 'User', 'user', 'maxposts', $this->getAliasName());
    }
    public function startOfWeek() : ColumnField
    {
        return new ColumnField('startOfWeek', 'User', 'user', 'startofweek', $this->getAliasName());
    }
    public function ipAddress() : ColumnField
    {
        return new ColumnField('ipAddress', 'User', 'user', 'ipaddress', $this->getAliasName());
    }
    public function referrerId() : ColumnField
    {
        return new ColumnField('referrerId', 'User', 'user', 'referrerid', $this->getAliasName());
    }
    public function languageId() : ColumnField
    {
        return new ColumnField('languageId', 'User', 'user', 'languageid', $this->getAliasName());
    }
    public function msn() : ColumnField
    {
        return new ColumnField('msn', 'User', 'user', 'msn', $this->getAliasName());
    }
    public function emailStamp() : ColumnField
    {
        return new ColumnField('emailStamp', 'User', 'user', 'emailstamp', $this->getAliasName());
    }
    public function threadedMode() : ColumnField
    {
        return new ColumnField('threadedMode', 'User', 'user', 'threadedmode', $this->getAliasName());
    }
    public function autoSubscribe() : ColumnField
    {
        return new ColumnField('autoSubscribe', 'User', 'user', 'autosubscribe', $this->getAliasName());
    }
    public function pmTotal() : ColumnField
    {
        return new ColumnField('pmTotal', 'User', 'user', 'pmtotal', $this->getAliasName());
    }
    public function pmUnread() : ColumnField
    {
        return new ColumnField('pmUnread', 'User', 'user', 'pmunread', $this->getAliasName());
    }
    public function salt() : ColumnField
    {
        return new ColumnField('salt', 'User', 'user', 'salt', $this->getAliasName());
    }
    public function importUserId() : ColumnField
    {
        return new ColumnField('importUserId', 'User', 'user', 'importuserid', $this->getAliasName());
    }
    public function profilePicRevision() : ColumnField
    {
        return new ColumnField('profilePicRevision', 'User', 'user', 'profilepicrevision', $this->getAliasName());
    }
    public function showBirthday() : ColumnField
    {
        return new ColumnField('showBirthday', 'User', 'user', 'showbirthday', $this->getAliasName());
    }
    public function skype() : ColumnField
    {
        return new ColumnField('skype', 'User', 'user', 'skype', $this->getAliasName());
    }
    public function adminOptions() : ColumnField
    {
        return new ColumnField('adminOptions', 'User', 'user', 'adminoptions', $this->getAliasName());
    }
    public function lastPostId() : ColumnField
    {
        return new ColumnField('lastPostId', 'User', 'user', 'lastpostid', $this->getAliasName());
    }
    public function sigPicRevision() : ColumnField
    {
        return new ColumnField('sigPicRevision', 'User', 'user', 'sigpicrevision', $this->getAliasName());
    }
    public function iPoints() : ColumnField
    {
        return new ColumnField('iPoints', 'User', 'user', 'ipoints', $this->getAliasName());
    }
    public function infractions() : ColumnField
    {
        return new ColumnField('infractions', 'User', 'user', 'infractions', $this->getAliasName());
    }
    public function warnings() : ColumnField
    {
        return new ColumnField('warnings', 'User', 'user', 'warnings', $this->getAliasName());
    }
    public function infractiongGoupids() : ColumnField
    {
        return new ColumnField('infractiongGoupids', 'User', 'user', 'infractiongroupids', $this->getAliasName());
    }
    public function infractionGroupId() : ColumnField
    {
        return new ColumnField('infractionGroupId', 'User', 'user', 'infractiongroupid', $this->getAliasName());
    }
    public function nCodeImageResizerMode() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMode', 'User', 'user', 'ncode_imageresizer_mode', $this->getAliasName());
    }
    public function nCodeImageResizerMaxWidth() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMaxWidth', 'User', 'user', 'ncode_imageresizer_maxwidth', $this->getAliasName());
    }
    public function nCodeImageResizerMaxHeight() : ColumnField
    {
        return new ColumnField('nCodeImageResizerMaxHeight', 'User', 'user', 'ncode_imageresizer_maxheight', $this->getAliasName());
    }
    public function profileVisits() : ColumnField
    {
        return new ColumnField('profileVisits', 'User', 'user', 'profilevisits', $this->getAliasName());
    }
    public function friendCount() : ColumnField
    {
        return new ColumnField('friendCount', 'User', 'user', 'friendcount', $this->getAliasName());
    }
    public function friendReqCount() : ColumnField
    {
        return new ColumnField('friendReqCount', 'User', 'user', 'friendreqcount', $this->getAliasName());
    }
    public function vmUnreadCount() : ColumnField
    {
        return new ColumnField('vmUnreadCount', 'User', 'user', 'vmunreadcount', $this->getAliasName());
    }
    public function vmModeratedcount() : ColumnField
    {
        return new ColumnField('vmModeratedcount', 'User', 'user', 'vmmoderatedcount', $this->getAliasName());
    }
    public function socGroupInviteCount() : ColumnField
    {
        return new ColumnField('socGroupInviteCount', 'User', 'user', 'socgroupinvitecount', $this->getAliasName());
    }
    public function socGroupReqCount() : ColumnField
    {
        return new ColumnField('socGroupReqCount', 'User', 'user', 'socgroupreqcount', $this->getAliasName());
    }
    public function pcUnreadCount() : ColumnField
    {
        return new ColumnField('pcUnreadCount', 'User', 'user', 'pcunreadcount', $this->getAliasName());
    }
    public function pcModeratedCount() : ColumnField
    {
        return new ColumnField('pcModeratedCount', 'User', 'user', 'pcmoderatedcount', $this->getAliasName());
    }
    public function gmModeratedCount() : ColumnField
    {
        return new ColumnField('gmModeratedCount', 'User', 'user', 'gmmoderatedcount', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userId(),
			$this->userGroupId(),
			$this->memberGroupIds(),
			$this->displayGroupId(),
			$this->userName(),
			$this->password(),
			$this->passwordDate(),
			$this->email(),
			$this->styleId(),
			$this->parentEmail(),
			$this->homePage(),
			$this->icq(),
			$this->aim(),
			$this->yahoo(),
			$this->showVbCode(),
			$this->userTitle(),
			$this->customTitle(),
			$this->joinDate(),
			$this->daysPrune(),
			$this->lastVisit(),
			$this->lastActivity(),
			$this->lastPost(),
			$this->posts(),
			$this->reputation(),
			$this->reputationLevelId(),
			$this->timeZoneOffset(),
			$this->pmPopup(),
			$this->avatarId(),
			$this->avatarRevision(),
			$this->options(),
			$this->birthday(),
			$this->birthdaySearch(),
			$this->maxPosts(),
			$this->startOfWeek(),
			$this->ipAddress(),
			$this->referrerId(),
			$this->languageId(),
			$this->msn(),
			$this->emailStamp(),
			$this->threadedMode(),
			$this->autoSubscribe(),
			$this->pmTotal(),
			$this->pmUnread(),
			$this->salt(),
			$this->importUserId(),
			$this->profilePicRevision(),
			$this->showBirthday(),
			$this->skype(),
			$this->adminOptions(),
			$this->lastPostId(),
			$this->sigPicRevision(),
			$this->iPoints(),
			$this->infractions(),
			$this->warnings(),
			$this->infractiongGoupids(),
			$this->infractionGroupId(),
			$this->nCodeImageResizerMode(),
			$this->nCodeImageResizerMaxWidth(),
			$this->nCodeImageResizerMaxHeight(),
			$this->profileVisits(),
			$this->friendCount(),
			$this->friendReqCount(),
			$this->vmUnreadCount(),
			$this->vmModeratedcount(),
			$this->socGroupInviteCount(),
			$this->socGroupReqCount(),
			$this->pcUnreadCount(),
			$this->pcModeratedCount(),
			$this->gmModeratedCount()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserRecord
    {
        return new UserRecord();
    }
}