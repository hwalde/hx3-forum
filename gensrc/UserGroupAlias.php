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

class UserGroupAlias extends TableAlias {
   
    public function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserGroup', 'usergroup', 'usergroupid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('title', 'UserGroup', 'usergroup', 'title', $this->getAliasName());
    }
    public function description() : ColumnField
    {
        return new ColumnField('description', 'UserGroup', 'usergroup', 'description', $this->getAliasName());
    }
    public function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'UserGroup', 'usergroup', 'usertitle', $this->getAliasName());
    }
    public function passwordExpires() : ColumnField
    {
        return new ColumnField('passwordExpires', 'UserGroup', 'usergroup', 'passwordexpires', $this->getAliasName());
    }
    public function passwordHistory() : ColumnField
    {
        return new ColumnField('passwordHistory', 'UserGroup', 'usergroup', 'passwordhistory', $this->getAliasName());
    }
    public function pmQuota() : ColumnField
    {
        return new ColumnField('pmQuota', 'UserGroup', 'usergroup', 'pmquota', $this->getAliasName());
    }
    public function pmSendmax() : ColumnField
    {
        return new ColumnField('pmSendmax', 'UserGroup', 'usergroup', 'pmsendmax', $this->getAliasName());
    }
    public function openTag() : ColumnField
    {
        return new ColumnField('openTag', 'UserGroup', 'usergroup', 'opentag', $this->getAliasName());
    }
    public function closeTag() : ColumnField
    {
        return new ColumnField('closeTag', 'UserGroup', 'usergroup', 'closetag', $this->getAliasName());
    }
    public function canOverride() : ColumnField
    {
        return new ColumnField('canOverride', 'UserGroup', 'usergroup', 'canoverride', $this->getAliasName());
    }
    public function isPublicGroup() : ColumnField
    {
        return new ColumnField('isPublicGroup', 'UserGroup', 'usergroup', 'ispublicgroup', $this->getAliasName());
    }
    public function forumPermissions() : ColumnField
    {
        return new ColumnField('forumPermissions', 'UserGroup', 'usergroup', 'forumpermissions', $this->getAliasName());
    }
    public function pmPermissions() : ColumnField
    {
        return new ColumnField('pmPermissions', 'UserGroup', 'usergroup', 'pmpermissions', $this->getAliasName());
    }
    public function calendarPermissions() : ColumnField
    {
        return new ColumnField('calendarPermissions', 'UserGroup', 'usergroup', 'calendarpermissions', $this->getAliasName());
    }
    public function wolPermissions() : ColumnField
    {
        return new ColumnField('wolPermissions', 'UserGroup', 'usergroup', 'wolpermissions', $this->getAliasName());
    }
    public function adminPermissions() : ColumnField
    {
        return new ColumnField('adminPermissions', 'UserGroup', 'usergroup', 'adminpermissions', $this->getAliasName());
    }
    public function genericPermissions() : ColumnField
    {
        return new ColumnField('genericPermissions', 'UserGroup', 'usergroup', 'genericpermissions', $this->getAliasName());
    }
    public function genericOptions() : ColumnField
    {
        return new ColumnField('genericOptions', 'UserGroup', 'usergroup', 'genericoptions', $this->getAliasName());
    }
    public function attachLimit() : ColumnField
    {
        return new ColumnField('attachLimit', 'UserGroup', 'usergroup', 'attachlimit', $this->getAliasName());
    }
    public function avatarMaxWidth() : ColumnField
    {
        return new ColumnField('avatarMaxWidth', 'UserGroup', 'usergroup', 'avatarmaxwidth', $this->getAliasName());
    }
    public function avatarMaxHeight() : ColumnField
    {
        return new ColumnField('avatarMaxHeight', 'UserGroup', 'usergroup', 'avatarmaxheight', $this->getAliasName());
    }
    public function avatarMaxSize() : ColumnField
    {
        return new ColumnField('avatarMaxSize', 'UserGroup', 'usergroup', 'avatarmaxsize', $this->getAliasName());
    }
    public function profilePicMaxWidth() : ColumnField
    {
        return new ColumnField('profilePicMaxWidth', 'UserGroup', 'usergroup', 'profilepicmaxwidth', $this->getAliasName());
    }
    public function profilePicMaxHeight() : ColumnField
    {
        return new ColumnField('profilePicMaxHeight', 'UserGroup', 'usergroup', 'profilepicmaxheight', $this->getAliasName());
    }
    public function profilePicMaxSize() : ColumnField
    {
        return new ColumnField('profilePicMaxSize', 'UserGroup', 'usergroup', 'profilepicmaxsize', $this->getAliasName());
    }
    public function importUserGroupId() : ColumnField
    {
        return new ColumnField('importUserGroupId', 'UserGroup', 'usergroup', 'importusergroupid', $this->getAliasName());
    }
    public function signaturePermissions() : ColumnField
    {
        return new ColumnField('signaturePermissions', 'UserGroup', 'usergroup', 'signaturepermissions', $this->getAliasName());
    }
    public function sigPicMaxWidth() : ColumnField
    {
        return new ColumnField('sigPicMaxWidth', 'UserGroup', 'usergroup', 'sigpicmaxwidth', $this->getAliasName());
    }
    public function sigPicMaxheight() : ColumnField
    {
        return new ColumnField('sigPicMaxheight', 'UserGroup', 'usergroup', 'sigpicmaxheight', $this->getAliasName());
    }
    public function sigPicMaxSize() : ColumnField
    {
        return new ColumnField('sigPicMaxSize', 'UserGroup', 'usergroup', 'sigpicmaxsize', $this->getAliasName());
    }
    public function sigMaxImages() : ColumnField
    {
        return new ColumnField('sigMaxImages', 'UserGroup', 'usergroup', 'sigmaximages', $this->getAliasName());
    }
    public function sigMaxSizeBBCode() : ColumnField
    {
        return new ColumnField('sigMaxSizeBBCode', 'UserGroup', 'usergroup', 'sigmaxsizebbcode', $this->getAliasName());
    }
    public function sigMaxChars() : ColumnField
    {
        return new ColumnField('sigMaxChars', 'UserGroup', 'usergroup', 'sigmaxchars', $this->getAliasName());
    }
    public function sigMaxRawChars() : ColumnField
    {
        return new ColumnField('sigMaxRawChars', 'UserGroup', 'usergroup', 'sigmaxrawchars', $this->getAliasName());
    }
    public function sigMaxLines() : ColumnField
    {
        return new ColumnField('sigMaxLines', 'UserGroup', 'usergroup', 'sigmaxlines', $this->getAliasName());
    }
    public function visitorMessagePermissions() : ColumnField
    {
        return new ColumnField('visitorMessagePermissions', 'UserGroup', 'usergroup', 'visitormessagepermissions', $this->getAliasName());
    }
    public function socialGroupPermissions() : ColumnField
    {
        return new ColumnField('socialGroupPermissions', 'UserGroup', 'usergroup', 'socialgrouppermissions', $this->getAliasName());
    }
    public function userCssPermissions() : ColumnField
    {
        return new ColumnField('userCssPermissions', 'UserGroup', 'usergroup', 'usercsspermissions', $this->getAliasName());
    }
    public function albumPermissions() : ColumnField
    {
        return new ColumnField('albumPermissions', 'UserGroup', 'usergroup', 'albumpermissions', $this->getAliasName());
    }
    public function albumPicMaxWidth() : ColumnField
    {
        return new ColumnField('albumPicMaxWidth', 'UserGroup', 'usergroup', 'albumpicmaxwidth', $this->getAliasName());
    }
    public function albumPicMaxHeight() : ColumnField
    {
        return new ColumnField('albumPicMaxHeight', 'UserGroup', 'usergroup', 'albumpicmaxheight', $this->getAliasName());
    }
    public function albumPicMaxSize() : ColumnField
    {
        return new ColumnField('albumPicMaxSize', 'UserGroup', 'usergroup', 'albumpicmaxsize', $this->getAliasName());
    }
    public function albumMaxPics() : ColumnField
    {
        return new ColumnField('albumMaxPics', 'UserGroup', 'usergroup', 'albummaxpics', $this->getAliasName());
    }
    public function albumMaxSize() : ColumnField
    {
        return new ColumnField('albumMaxSize', 'UserGroup', 'usergroup', 'albummaxsize', $this->getAliasName());
    }
    public function genericpermissions2() : ColumnField
    {
        return new ColumnField('genericpermissions2', 'UserGroup', 'usergroup', 'genericpermissions2', $this->getAliasName());
    }
    public function ptPermissions() : ColumnField
    {
        return new ColumnField('ptPermissions', 'UserGroup', 'usergroup', 'ptpermissions', $this->getAliasName());
    }

    public function getTableName(): string
    {
        return 'usergroup';
    }
    
    public function __listColumns() : array
    {
        return ['usergroupid', 'title', 'description', 'usertitle', 'passwordexpires', 'passwordhistory', 'pmquota', 'pmsendmax', 'opentag', 'closetag', 'canoverride', 'ispublicgroup', 'forumpermissions', 'pmpermissions', 'calendarpermissions', 'wolpermissions', 'adminpermissions', 'genericpermissions', 'genericoptions', 'attachlimit', 'avatarmaxwidth', 'avatarmaxheight', 'avatarmaxsize', 'profilepicmaxwidth', 'profilepicmaxheight', 'profilepicmaxsize', 'importusergroupid', 'signaturepermissions', 'sigpicmaxwidth', 'sigpicmaxheight', 'sigpicmaxsize', 'sigmaximages', 'sigmaxsizebbcode', 'sigmaxchars', 'sigmaxrawchars', 'sigmaxlines', 'visitormessagepermissions', 'socialgrouppermissions', 'usercsspermissions', 'albumpermissions', 'albumpicmaxwidth', 'albumpicmaxheight', 'albumpicmaxsize', 'albummaxpics', 'albummaxsize', 'genericpermissions2', 'ptpermissions'];
    }
    
    /**
     * @return string[]
     */
    public function __listPrimaryKeyColumns(): array
    {
        return ['usergroupid'];
    }
    
    public function __listNullableColumns() : array
    {
        return [];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'usergroupid' => 'integer', 
			'title' => 'string', 
			'description' => 'string', 
			'usertitle' => 'string', 
			'passwordexpires' => 'integer', 
			'passwordhistory' => 'integer', 
			'pmquota' => 'integer', 
			'pmsendmax' => 'integer', 
			'opentag' => 'string', 
			'closetag' => 'string', 
			'canoverride' => 'integer', 
			'ispublicgroup' => 'integer', 
			'forumpermissions' => 'integer', 
			'pmpermissions' => 'integer', 
			'calendarpermissions' => 'integer', 
			'wolpermissions' => 'integer', 
			'adminpermissions' => 'integer', 
			'genericpermissions' => 'integer', 
			'genericoptions' => 'integer', 
			'attachlimit' => 'integer', 
			'avatarmaxwidth' => 'integer', 
			'avatarmaxheight' => 'integer', 
			'avatarmaxsize' => 'integer', 
			'profilepicmaxwidth' => 'integer', 
			'profilepicmaxheight' => 'integer', 
			'profilepicmaxsize' => 'integer', 
			'importusergroupid' => 'integer', 
			'signaturepermissions' => 'integer', 
			'sigpicmaxwidth' => 'integer', 
			'sigpicmaxheight' => 'integer', 
			'sigpicmaxsize' => 'integer', 
			'sigmaximages' => 'integer', 
			'sigmaxsizebbcode' => 'integer', 
			'sigmaxchars' => 'integer', 
			'sigmaxrawchars' => 'integer', 
			'sigmaxlines' => 'integer', 
			'visitormessagepermissions' => 'integer', 
			'socialgrouppermissions' => 'integer', 
			'usercsspermissions' => 'integer', 
			'albumpermissions' => 'integer', 
			'albumpicmaxwidth' => 'integer', 
			'albumpicmaxheight' => 'integer', 
			'albumpicmaxsize' => 'integer', 
			'albummaxpics' => 'integer', 
			'albummaxsize' => 'integer', 
			'genericpermissions2' => 'integer', 
			'ptpermissions' => 'integer'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'usergroupid' => 'userGroupId', 
			'title' => 'title', 
			'description' => 'description', 
			'usertitle' => 'userTitle', 
			'passwordexpires' => 'passwordExpires', 
			'passwordhistory' => 'passwordHistory', 
			'pmquota' => 'pmQuota', 
			'pmsendmax' => 'pmSendmax', 
			'opentag' => 'openTag', 
			'closetag' => 'closeTag', 
			'canoverride' => 'canOverride', 
			'ispublicgroup' => 'isPublicGroup', 
			'forumpermissions' => 'forumPermissions', 
			'pmpermissions' => 'pmPermissions', 
			'calendarpermissions' => 'calendarPermissions', 
			'wolpermissions' => 'wolPermissions', 
			'adminpermissions' => 'adminPermissions', 
			'genericpermissions' => 'genericPermissions', 
			'genericoptions' => 'genericOptions', 
			'attachlimit' => 'attachLimit', 
			'avatarmaxwidth' => 'avatarMaxWidth', 
			'avatarmaxheight' => 'avatarMaxHeight', 
			'avatarmaxsize' => 'avatarMaxSize', 
			'profilepicmaxwidth' => 'profilePicMaxWidth', 
			'profilepicmaxheight' => 'profilePicMaxHeight', 
			'profilepicmaxsize' => 'profilePicMaxSize', 
			'importusergroupid' => 'importUserGroupId', 
			'signaturepermissions' => 'signaturePermissions', 
			'sigpicmaxwidth' => 'sigPicMaxWidth', 
			'sigpicmaxheight' => 'sigPicMaxheight', 
			'sigpicmaxsize' => 'sigPicMaxSize', 
			'sigmaximages' => 'sigMaxImages', 
			'sigmaxsizebbcode' => 'sigMaxSizeBBCode', 
			'sigmaxchars' => 'sigMaxChars', 
			'sigmaxrawchars' => 'sigMaxRawChars', 
			'sigmaxlines' => 'sigMaxLines', 
			'visitormessagepermissions' => 'visitorMessagePermissions', 
			'socialgrouppermissions' => 'socialGroupPermissions', 
			'usercsspermissions' => 'userCssPermissions', 
			'albumpermissions' => 'albumPermissions', 
			'albumpicmaxwidth' => 'albumPicMaxWidth', 
			'albumpicmaxheight' => 'albumPicMaxHeight', 
			'albumpicmaxsize' => 'albumPicMaxSize', 
			'albummaxpics' => 'albumMaxPics', 
			'albummaxsize' => 'albumMaxSize', 
			'genericpermissions2' => 'genericpermissions2', 
			'ptpermissions' => 'ptPermissions'
		];
    }

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->userGroupId(),
			$this->title(),
			$this->description(),
			$this->userTitle(),
			$this->passwordExpires(),
			$this->passwordHistory(),
			$this->pmQuota(),
			$this->pmSendmax(),
			$this->openTag(),
			$this->closeTag(),
			$this->canOverride(),
			$this->isPublicGroup(),
			$this->forumPermissions(),
			$this->pmPermissions(),
			$this->calendarPermissions(),
			$this->wolPermissions(),
			$this->adminPermissions(),
			$this->genericPermissions(),
			$this->genericOptions(),
			$this->attachLimit(),
			$this->avatarMaxWidth(),
			$this->avatarMaxHeight(),
			$this->avatarMaxSize(),
			$this->profilePicMaxWidth(),
			$this->profilePicMaxHeight(),
			$this->profilePicMaxSize(),
			$this->importUserGroupId(),
			$this->signaturePermissions(),
			$this->sigPicMaxWidth(),
			$this->sigPicMaxheight(),
			$this->sigPicMaxSize(),
			$this->sigMaxImages(),
			$this->sigMaxSizeBBCode(),
			$this->sigMaxChars(),
			$this->sigMaxRawChars(),
			$this->sigMaxLines(),
			$this->visitorMessagePermissions(),
			$this->socialGroupPermissions(),
			$this->userCssPermissions(),
			$this->albumPermissions(),
			$this->albumPicMaxWidth(),
			$this->albumPicMaxHeight(),
			$this->albumPicMaxSize(),
			$this->albumMaxPics(),
			$this->albumMaxSize(),
			$this->genericpermissions2(),
			$this->ptPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupRecord
    {
        return new UserGroupRecord();
    }
}