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

class UserGroup implements Table {

    const table = 'usergroup';
   
    public static function as(string $aliasName): UserGroupAlias
    {
        return new UserGroupAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::userGroupId(),
			self::title(),
			self::description(),
			self::userTitle(),
			self::passwordExpires(),
			self::passwordHistory(),
			self::pmQuota(),
			self::pmSendmax(),
			self::openTag(),
			self::closeTag(),
			self::canOverride(),
			self::isPublicGroup(),
			self::forumPermissions(),
			self::pmPermissions(),
			self::calendarPermissions(),
			self::wolPermissions(),
			self::adminPermissions(),
			self::genericPermissions(),
			self::genericOptions(),
			self::attachLimit(),
			self::avatarMaxWidth(),
			self::avatarMaxHeight(),
			self::avatarMaxSize(),
			self::profilePicMaxWidth(),
			self::profilePicMaxHeight(),
			self::profilePicMaxSize(),
			self::importUserGroupId(),
			self::signaturePermissions(),
			self::sigPicMaxWidth(),
			self::sigPicMaxheight(),
			self::sigPicMaxSize(),
			self::sigMaxImages(),
			self::sigMaxSizeBBCode(),
			self::sigMaxChars(),
			self::sigMaxRawChars(),
			self::sigMaxLines(),
			self::visitorMessagePermissions(),
			self::socialGroupPermissions(),
			self::userCssPermissions(),
			self::albumPermissions(),
			self::albumPicMaxWidth(),
			self::albumPicMaxHeight(),
			self::albumPicMaxSize(),
			self::albumMaxPics(),
			self::albumMaxSize(),
			self::genericpermissions2(),
			self::ptPermissions()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : UserGroupRecord
    {
        return new UserGroupRecord();
    }
    
    public static function userGroupId() : ColumnField
    {
        return new ColumnField('userGroupId', 'UserGroup', 'usergroup', 'usergroupid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('title', 'UserGroup', 'usergroup', 'title');
    }
    public static function description() : ColumnField
    {
        return new ColumnField('description', 'UserGroup', 'usergroup', 'description');
    }
    public static function userTitle() : ColumnField
    {
        return new ColumnField('userTitle', 'UserGroup', 'usergroup', 'usertitle');
    }
    public static function passwordExpires() : ColumnField
    {
        return new ColumnField('passwordExpires', 'UserGroup', 'usergroup', 'passwordexpires');
    }
    public static function passwordHistory() : ColumnField
    {
        return new ColumnField('passwordHistory', 'UserGroup', 'usergroup', 'passwordhistory');
    }
    public static function pmQuota() : ColumnField
    {
        return new ColumnField('pmQuota', 'UserGroup', 'usergroup', 'pmquota');
    }
    public static function pmSendmax() : ColumnField
    {
        return new ColumnField('pmSendmax', 'UserGroup', 'usergroup', 'pmsendmax');
    }
    public static function openTag() : ColumnField
    {
        return new ColumnField('openTag', 'UserGroup', 'usergroup', 'opentag');
    }
    public static function closeTag() : ColumnField
    {
        return new ColumnField('closeTag', 'UserGroup', 'usergroup', 'closetag');
    }
    public static function canOverride() : ColumnField
    {
        return new ColumnField('canOverride', 'UserGroup', 'usergroup', 'canoverride');
    }
    public static function isPublicGroup() : ColumnField
    {
        return new ColumnField('isPublicGroup', 'UserGroup', 'usergroup', 'ispublicgroup');
    }
    public static function forumPermissions() : ColumnField
    {
        return new ColumnField('forumPermissions', 'UserGroup', 'usergroup', 'forumpermissions');
    }
    public static function pmPermissions() : ColumnField
    {
        return new ColumnField('pmPermissions', 'UserGroup', 'usergroup', 'pmpermissions');
    }
    public static function calendarPermissions() : ColumnField
    {
        return new ColumnField('calendarPermissions', 'UserGroup', 'usergroup', 'calendarpermissions');
    }
    public static function wolPermissions() : ColumnField
    {
        return new ColumnField('wolPermissions', 'UserGroup', 'usergroup', 'wolpermissions');
    }
    public static function adminPermissions() : ColumnField
    {
        return new ColumnField('adminPermissions', 'UserGroup', 'usergroup', 'adminpermissions');
    }
    public static function genericPermissions() : ColumnField
    {
        return new ColumnField('genericPermissions', 'UserGroup', 'usergroup', 'genericpermissions');
    }
    public static function genericOptions() : ColumnField
    {
        return new ColumnField('genericOptions', 'UserGroup', 'usergroup', 'genericoptions');
    }
    public static function attachLimit() : ColumnField
    {
        return new ColumnField('attachLimit', 'UserGroup', 'usergroup', 'attachlimit');
    }
    public static function avatarMaxWidth() : ColumnField
    {
        return new ColumnField('avatarMaxWidth', 'UserGroup', 'usergroup', 'avatarmaxwidth');
    }
    public static function avatarMaxHeight() : ColumnField
    {
        return new ColumnField('avatarMaxHeight', 'UserGroup', 'usergroup', 'avatarmaxheight');
    }
    public static function avatarMaxSize() : ColumnField
    {
        return new ColumnField('avatarMaxSize', 'UserGroup', 'usergroup', 'avatarmaxsize');
    }
    public static function profilePicMaxWidth() : ColumnField
    {
        return new ColumnField('profilePicMaxWidth', 'UserGroup', 'usergroup', 'profilepicmaxwidth');
    }
    public static function profilePicMaxHeight() : ColumnField
    {
        return new ColumnField('profilePicMaxHeight', 'UserGroup', 'usergroup', 'profilepicmaxheight');
    }
    public static function profilePicMaxSize() : ColumnField
    {
        return new ColumnField('profilePicMaxSize', 'UserGroup', 'usergroup', 'profilepicmaxsize');
    }
    public static function importUserGroupId() : ColumnField
    {
        return new ColumnField('importUserGroupId', 'UserGroup', 'usergroup', 'importusergroupid');
    }
    public static function signaturePermissions() : ColumnField
    {
        return new ColumnField('signaturePermissions', 'UserGroup', 'usergroup', 'signaturepermissions');
    }
    public static function sigPicMaxWidth() : ColumnField
    {
        return new ColumnField('sigPicMaxWidth', 'UserGroup', 'usergroup', 'sigpicmaxwidth');
    }
    public static function sigPicMaxheight() : ColumnField
    {
        return new ColumnField('sigPicMaxheight', 'UserGroup', 'usergroup', 'sigpicmaxheight');
    }
    public static function sigPicMaxSize() : ColumnField
    {
        return new ColumnField('sigPicMaxSize', 'UserGroup', 'usergroup', 'sigpicmaxsize');
    }
    public static function sigMaxImages() : ColumnField
    {
        return new ColumnField('sigMaxImages', 'UserGroup', 'usergroup', 'sigmaximages');
    }
    public static function sigMaxSizeBBCode() : ColumnField
    {
        return new ColumnField('sigMaxSizeBBCode', 'UserGroup', 'usergroup', 'sigmaxsizebbcode');
    }
    public static function sigMaxChars() : ColumnField
    {
        return new ColumnField('sigMaxChars', 'UserGroup', 'usergroup', 'sigmaxchars');
    }
    public static function sigMaxRawChars() : ColumnField
    {
        return new ColumnField('sigMaxRawChars', 'UserGroup', 'usergroup', 'sigmaxrawchars');
    }
    public static function sigMaxLines() : ColumnField
    {
        return new ColumnField('sigMaxLines', 'UserGroup', 'usergroup', 'sigmaxlines');
    }
    public static function visitorMessagePermissions() : ColumnField
    {
        return new ColumnField('visitorMessagePermissions', 'UserGroup', 'usergroup', 'visitormessagepermissions');
    }
    public static function socialGroupPermissions() : ColumnField
    {
        return new ColumnField('socialGroupPermissions', 'UserGroup', 'usergroup', 'socialgrouppermissions');
    }
    public static function userCssPermissions() : ColumnField
    {
        return new ColumnField('userCssPermissions', 'UserGroup', 'usergroup', 'usercsspermissions');
    }
    public static function albumPermissions() : ColumnField
    {
        return new ColumnField('albumPermissions', 'UserGroup', 'usergroup', 'albumpermissions');
    }
    public static function albumPicMaxWidth() : ColumnField
    {
        return new ColumnField('albumPicMaxWidth', 'UserGroup', 'usergroup', 'albumpicmaxwidth');
    }
    public static function albumPicMaxHeight() : ColumnField
    {
        return new ColumnField('albumPicMaxHeight', 'UserGroup', 'usergroup', 'albumpicmaxheight');
    }
    public static function albumPicMaxSize() : ColumnField
    {
        return new ColumnField('albumPicMaxSize', 'UserGroup', 'usergroup', 'albumpicmaxsize');
    }
    public static function albumMaxPics() : ColumnField
    {
        return new ColumnField('albumMaxPics', 'UserGroup', 'usergroup', 'albummaxpics');
    }
    public static function albumMaxSize() : ColumnField
    {
        return new ColumnField('albumMaxSize', 'UserGroup', 'usergroup', 'albummaxsize');
    }
    public static function genericpermissions2() : ColumnField
    {
        return new ColumnField('genericpermissions2', 'UserGroup', 'usergroup', 'genericpermissions2');
    }
    public static function ptPermissions() : ColumnField
    {
        return new ColumnField('ptPermissions', 'UserGroup', 'usergroup', 'ptpermissions');
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
}