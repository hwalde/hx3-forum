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

class Language implements Table {

    const table = 'language';
   
    public static function as(string $aliasName): LanguageAlias
    {
        return new LanguageAlias($aliasName);
    }
    
    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            self::languageId(),
			self::title(),
			self::userSelect(),
			self::options(),
			self::languageCode(),
			self::charset(),
			self::imagesOverride(),
			self::dateOverride(),
			self::timeOverride(),
			self::registeredDateOverride(),
			self::calFormat1Override(),
			self::calFormat2Override(),
			self::logDateOverride(),
			self::locale(),
			self::decimalSep(),
			self::thousandSep(),
			self::phraseGroupGlobal(),
			self::phraseGroupOpGlobal(),
			self::phraseGroupCpPermission(),
			self::phraseGroupForum(),
			self::phraseGroupCalendar(),
			self::phraseGroupAttachmentImage(),
			self::phrasegGroupStyle(),
			self::phraseGroupLogging(),
			self::phraseGroupCpHome(),
			self::phraseGroupPromotion(),
			self::phraseGroupUser(),
			self::phraseGroupHelpFaq(),
			self::phraseGroupSql(),
			self::phraseGroupSubscription(),
			self::phraseGroupLanguage(),
			self::phraseGroupBBCode(),
			self::phraseGroupStats(),
			self::phraseGroupDiagnostic(),
			self::phraseGroupMaintenance(),
			self::phraseGroupProfileField(),
			self::phraseGroupThread(),
			self::phraseGroupTimeZone(),
			self::phraseGroupBanning(),
			self::phraseGroupReputation(),
			self::phraseGroupWol(),
			self::phraseGroupThreadManage(),
			self::phraseGroupPm(),
			self::phraseGroupCpUser(),
			self::phraseGroupAccessMask(),
			self::phraseGroupCron(),
			self::phrasegGoupModerator(),
			self::phraseGroupCpOption(),
			self::phraseGroupCpRank(),
			self::phraseGroupCpUserGroup(),
			self::phraseGroupHoliday(),
			self::phraseGroupPosting(),
			self::phraseGroupPoll(),
			self::phraseGroupFrontHelp(),
			self::phraseGroupRegister(),
			self::phraseGroupSearch(),
			self::phraseGroupShowThread(),
			self::phraseGroupPostBit(),
			self::phraseGroupForumDisplay(),
			self::phraseGroupMessaging(),
			self::phraseGroupInlineMod(),
			self::phraseGroupPlugins(),
			self::phraseGroupCProfileField(),
			self::phraseGroupReputationLevel(),
			self::phraseGroupInfraction(),
			self::phraseGroupInfractionLevel(),
			self::phraseGroupPrefix(),
			self::phraseGroupSocialGroups(),
			self::phraseGroupPrefixAdmin(),
			self::phraseGroupNotice(),
			self::phraseGroupAlbum(),
			self::phraseGroupProjectTools(),
			self::phraseGroupProjectToolsAdmin()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : LanguageRecord
    {
        return new LanguageRecord();
    }
    
    public static function languageId() : ColumnField
    {
        return new ColumnField('language', 'languageid');
    }
    public static function title() : ColumnField
    {
        return new ColumnField('language', 'title');
    }
    public static function userSelect() : ColumnField
    {
        return new ColumnField('language', 'userselect');
    }
    public static function options() : ColumnField
    {
        return new ColumnField('language', 'options');
    }
    public static function languageCode() : ColumnField
    {
        return new ColumnField('language', 'languagecode');
    }
    public static function charset() : ColumnField
    {
        return new ColumnField('language', 'charset');
    }
    public static function imagesOverride() : ColumnField
    {
        return new ColumnField('language', 'imagesoverride');
    }
    public static function dateOverride() : ColumnField
    {
        return new ColumnField('language', 'dateoverride');
    }
    public static function timeOverride() : ColumnField
    {
        return new ColumnField('language', 'timeoverride');
    }
    public static function registeredDateOverride() : ColumnField
    {
        return new ColumnField('language', 'registereddateoverride');
    }
    public static function calFormat1Override() : ColumnField
    {
        return new ColumnField('language', 'calformat1override');
    }
    public static function calFormat2Override() : ColumnField
    {
        return new ColumnField('language', 'calformat2override');
    }
    public static function logDateOverride() : ColumnField
    {
        return new ColumnField('language', 'logdateoverride');
    }
    public static function locale() : ColumnField
    {
        return new ColumnField('language', 'locale');
    }
    public static function decimalSep() : ColumnField
    {
        return new ColumnField('language', 'decimalsep');
    }
    public static function thousandSep() : ColumnField
    {
        return new ColumnField('language', 'thousandsep');
    }
    public static function phraseGroupGlobal() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_global');
    }
    public static function phraseGroupOpGlobal() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpglobal');
    }
    public static function phraseGroupCpPermission() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cppermission');
    }
    public static function phraseGroupForum() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_forum');
    }
    public static function phraseGroupCalendar() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_calendar');
    }
    public static function phraseGroupAttachmentImage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_attachment_image');
    }
    public static function phrasegGroupStyle() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_style');
    }
    public static function phraseGroupLogging() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_logging');
    }
    public static function phraseGroupCpHome() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cphome');
    }
    public static function phraseGroupPromotion() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_promotion');
    }
    public static function phraseGroupUser() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_user');
    }
    public static function phraseGroupHelpFaq() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_help_faq');
    }
    public static function phraseGroupSql() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_sql');
    }
    public static function phraseGroupSubscription() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_subscription');
    }
    public static function phraseGroupLanguage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_language');
    }
    public static function phraseGroupBBCode() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_bbcode');
    }
    public static function phraseGroupStats() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_stats');
    }
    public static function phraseGroupDiagnostic() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_diagnostic');
    }
    public static function phraseGroupMaintenance() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_maintenance');
    }
    public static function phraseGroupProfileField() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_profilefield');
    }
    public static function phraseGroupThread() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_thread');
    }
    public static function phraseGroupTimeZone() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_timezone');
    }
    public static function phraseGroupBanning() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_banning');
    }
    public static function phraseGroupReputation() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_reputation');
    }
    public static function phraseGroupWol() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_wol');
    }
    public static function phraseGroupThreadManage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_threadmanage');
    }
    public static function phraseGroupPm() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_pm');
    }
    public static function phraseGroupCpUser() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpuser');
    }
    public static function phraseGroupAccessMask() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_accessmask');
    }
    public static function phraseGroupCron() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cron');
    }
    public static function phrasegGoupModerator() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_moderator');
    }
    public static function phraseGroupCpOption() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpoption');
    }
    public static function phraseGroupCpRank() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cprank');
    }
    public static function phraseGroupCpUserGroup() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpusergroup');
    }
    public static function phraseGroupHoliday() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_holiday');
    }
    public static function phraseGroupPosting() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_posting');
    }
    public static function phraseGroupPoll() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_poll');
    }
    public static function phraseGroupFrontHelp() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_fronthelp');
    }
    public static function phraseGroupRegister() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_register');
    }
    public static function phraseGroupSearch() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_search');
    }
    public static function phraseGroupShowThread() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_showthread');
    }
    public static function phraseGroupPostBit() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_postbit');
    }
    public static function phraseGroupForumDisplay() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_forumdisplay');
    }
    public static function phraseGroupMessaging() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_messaging');
    }
    public static function phraseGroupInlineMod() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_inlinemod');
    }
    public static function phraseGroupPlugins() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_plugins');
    }
    public static function phraseGroupCProfileField() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cprofilefield');
    }
    public static function phraseGroupReputationLevel() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_reputationlevel');
    }
    public static function phraseGroupInfraction() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_infraction');
    }
    public static function phraseGroupInfractionLevel() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_infractionlevel');
    }
    public static function phraseGroupPrefix() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_prefix');
    }
    public static function phraseGroupSocialGroups() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_socialgroups');
    }
    public static function phraseGroupPrefixAdmin() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_prefixadmin');
    }
    public static function phraseGroupNotice() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_notice');
    }
    public static function phraseGroupAlbum() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_album');
    }
    public static function phraseGroupProjectTools() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_projecttools');
    }
    public static function phraseGroupProjectToolsAdmin() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_projecttoolsadmin');
    }

    public function getTableName(): string
    {
        return 'language';
    }
    
    public function __listColumns() : array
    {
        return ['languageid', 'title', 'userselect', 'options', 'languagecode', 'charset', 'imagesoverride', 'dateoverride', 'timeoverride', 'registereddateoverride', 'calformat1override', 'calformat2override', 'logdateoverride', 'locale', 'decimalsep', 'thousandsep', 'phrasegroup_global', 'phrasegroup_cpglobal', 'phrasegroup_cppermission', 'phrasegroup_forum', 'phrasegroup_calendar', 'phrasegroup_attachment_image', 'phrasegroup_style', 'phrasegroup_logging', 'phrasegroup_cphome', 'phrasegroup_promotion', 'phrasegroup_user', 'phrasegroup_help_faq', 'phrasegroup_sql', 'phrasegroup_subscription', 'phrasegroup_language', 'phrasegroup_bbcode', 'phrasegroup_stats', 'phrasegroup_diagnostic', 'phrasegroup_maintenance', 'phrasegroup_profilefield', 'phrasegroup_thread', 'phrasegroup_timezone', 'phrasegroup_banning', 'phrasegroup_reputation', 'phrasegroup_wol', 'phrasegroup_threadmanage', 'phrasegroup_pm', 'phrasegroup_cpuser', 'phrasegroup_accessmask', 'phrasegroup_cron', 'phrasegroup_moderator', 'phrasegroup_cpoption', 'phrasegroup_cprank', 'phrasegroup_cpusergroup', 'phrasegroup_holiday', 'phrasegroup_posting', 'phrasegroup_poll', 'phrasegroup_fronthelp', 'phrasegroup_register', 'phrasegroup_search', 'phrasegroup_showthread', 'phrasegroup_postbit', 'phrasegroup_forumdisplay', 'phrasegroup_messaging', 'phrasegroup_inlinemod', 'phrasegroup_plugins', 'phrasegroup_cprofilefield', 'phrasegroup_reputationlevel', 'phrasegroup_infraction', 'phrasegroup_infractionlevel', 'phrasegroup_prefix', 'phrasegroup_socialgroups', 'phrasegroup_prefixadmin', 'phrasegroup_notice', 'phrasegroup_album', 'phrasegroup_projecttools', 'phrasegroup_projecttoolsadmin'];
    }
    
    public function __listNullableColumns() : array
    {
        return ['phrasegroup_cprofilefield', 'phrasegroup_reputationlevel', 'phrasegroup_infraction', 'phrasegroup_infractionlevel', 'phrasegroup_prefix', 'phrasegroup_socialgroups', 'phrasegroup_prefixadmin', 'phrasegroup_notice', 'phrasegroup_album'];
    }
    
    public function __getColumn2TypeMap() : array
    {
        return [
			'languageid' => 'integer', 
			'title' => 'string', 
			'userselect' => 'integer', 
			'options' => 'integer', 
			'languagecode' => 'string', 
			'charset' => 'string', 
			'imagesoverride' => 'string', 
			'dateoverride' => 'string', 
			'timeoverride' => 'string', 
			'registereddateoverride' => 'string', 
			'calformat1override' => 'string', 
			'calformat2override' => 'string', 
			'logdateoverride' => 'string', 
			'locale' => 'string', 
			'decimalsep' => 'string', 
			'thousandsep' => 'string', 
			'phrasegroup_global' => 'string', 
			'phrasegroup_cpglobal' => 'string', 
			'phrasegroup_cppermission' => 'string', 
			'phrasegroup_forum' => 'string', 
			'phrasegroup_calendar' => 'string', 
			'phrasegroup_attachment_image' => 'string', 
			'phrasegroup_style' => 'string', 
			'phrasegroup_logging' => 'string', 
			'phrasegroup_cphome' => 'string', 
			'phrasegroup_promotion' => 'string', 
			'phrasegroup_user' => 'string', 
			'phrasegroup_help_faq' => 'string', 
			'phrasegroup_sql' => 'string', 
			'phrasegroup_subscription' => 'string', 
			'phrasegroup_language' => 'string', 
			'phrasegroup_bbcode' => 'string', 
			'phrasegroup_stats' => 'string', 
			'phrasegroup_diagnostic' => 'string', 
			'phrasegroup_maintenance' => 'string', 
			'phrasegroup_profilefield' => 'string', 
			'phrasegroup_thread' => 'string', 
			'phrasegroup_timezone' => 'string', 
			'phrasegroup_banning' => 'string', 
			'phrasegroup_reputation' => 'string', 
			'phrasegroup_wol' => 'string', 
			'phrasegroup_threadmanage' => 'string', 
			'phrasegroup_pm' => 'string', 
			'phrasegroup_cpuser' => 'string', 
			'phrasegroup_accessmask' => 'string', 
			'phrasegroup_cron' => 'string', 
			'phrasegroup_moderator' => 'string', 
			'phrasegroup_cpoption' => 'string', 
			'phrasegroup_cprank' => 'string', 
			'phrasegroup_cpusergroup' => 'string', 
			'phrasegroup_holiday' => 'string', 
			'phrasegroup_posting' => 'string', 
			'phrasegroup_poll' => 'string', 
			'phrasegroup_fronthelp' => 'string', 
			'phrasegroup_register' => 'string', 
			'phrasegroup_search' => 'string', 
			'phrasegroup_showthread' => 'string', 
			'phrasegroup_postbit' => 'string', 
			'phrasegroup_forumdisplay' => 'string', 
			'phrasegroup_messaging' => 'string', 
			'phrasegroup_inlinemod' => 'string', 
			'phrasegroup_plugins' => 'string', 
			'phrasegroup_cprofilefield' => 'string', 
			'phrasegroup_reputationlevel' => 'string', 
			'phrasegroup_infraction' => 'string', 
			'phrasegroup_infractionlevel' => 'string', 
			'phrasegroup_prefix' => 'string', 
			'phrasegroup_socialgroups' => 'string', 
			'phrasegroup_prefixadmin' => 'string', 
			'phrasegroup_notice' => 'string', 
			'phrasegroup_album' => 'string', 
			'phrasegroup_projecttools' => 'string', 
			'phrasegroup_projecttoolsadmin' => 'string'
		];
    }
    
    public function __getColumn2NameMap() : array
    {
        return [
			'languageid' => 'languageId', 
			'title' => 'title', 
			'userselect' => 'userSelect', 
			'options' => 'options', 
			'languagecode' => 'languageCode', 
			'charset' => 'charset', 
			'imagesoverride' => 'imagesOverride', 
			'dateoverride' => 'dateOverride', 
			'timeoverride' => 'timeOverride', 
			'registereddateoverride' => 'registeredDateOverride', 
			'calformat1override' => 'calFormat1Override', 
			'calformat2override' => 'calFormat2Override', 
			'logdateoverride' => 'logDateOverride', 
			'locale' => 'locale', 
			'decimalsep' => 'decimalSep', 
			'thousandsep' => 'thousandSep', 
			'phrasegroup_global' => 'phraseGroupGlobal', 
			'phrasegroup_cpglobal' => 'phraseGroupOpGlobal', 
			'phrasegroup_cppermission' => 'phraseGroupCpPermission', 
			'phrasegroup_forum' => 'phraseGroupForum', 
			'phrasegroup_calendar' => 'phraseGroupCalendar', 
			'phrasegroup_attachment_image' => 'phraseGroupAttachmentImage', 
			'phrasegroup_style' => 'phrasegGroupStyle', 
			'phrasegroup_logging' => 'phraseGroupLogging', 
			'phrasegroup_cphome' => 'phraseGroupCpHome', 
			'phrasegroup_promotion' => 'phraseGroupPromotion', 
			'phrasegroup_user' => 'phraseGroupUser', 
			'phrasegroup_help_faq' => 'phraseGroupHelpFaq', 
			'phrasegroup_sql' => 'phraseGroupSql', 
			'phrasegroup_subscription' => 'phraseGroupSubscription', 
			'phrasegroup_language' => 'phraseGroupLanguage', 
			'phrasegroup_bbcode' => 'phraseGroupBBCode', 
			'phrasegroup_stats' => 'phraseGroupStats', 
			'phrasegroup_diagnostic' => 'phraseGroupDiagnostic', 
			'phrasegroup_maintenance' => 'phraseGroupMaintenance', 
			'phrasegroup_profilefield' => 'phraseGroupProfileField', 
			'phrasegroup_thread' => 'phraseGroupThread', 
			'phrasegroup_timezone' => 'phraseGroupTimeZone', 
			'phrasegroup_banning' => 'phraseGroupBanning', 
			'phrasegroup_reputation' => 'phraseGroupReputation', 
			'phrasegroup_wol' => 'phraseGroupWol', 
			'phrasegroup_threadmanage' => 'phraseGroupThreadManage', 
			'phrasegroup_pm' => 'phraseGroupPm', 
			'phrasegroup_cpuser' => 'phraseGroupCpUser', 
			'phrasegroup_accessmask' => 'phraseGroupAccessMask', 
			'phrasegroup_cron' => 'phraseGroupCron', 
			'phrasegroup_moderator' => 'phrasegGoupModerator', 
			'phrasegroup_cpoption' => 'phraseGroupCpOption', 
			'phrasegroup_cprank' => 'phraseGroupCpRank', 
			'phrasegroup_cpusergroup' => 'phraseGroupCpUserGroup', 
			'phrasegroup_holiday' => 'phraseGroupHoliday', 
			'phrasegroup_posting' => 'phraseGroupPosting', 
			'phrasegroup_poll' => 'phraseGroupPoll', 
			'phrasegroup_fronthelp' => 'phraseGroupFrontHelp', 
			'phrasegroup_register' => 'phraseGroupRegister', 
			'phrasegroup_search' => 'phraseGroupSearch', 
			'phrasegroup_showthread' => 'phraseGroupShowThread', 
			'phrasegroup_postbit' => 'phraseGroupPostBit', 
			'phrasegroup_forumdisplay' => 'phraseGroupForumDisplay', 
			'phrasegroup_messaging' => 'phraseGroupMessaging', 
			'phrasegroup_inlinemod' => 'phraseGroupInlineMod', 
			'phrasegroup_plugins' => 'phraseGroupPlugins', 
			'phrasegroup_cprofilefield' => 'phraseGroupCProfileField', 
			'phrasegroup_reputationlevel' => 'phraseGroupReputationLevel', 
			'phrasegroup_infraction' => 'phraseGroupInfraction', 
			'phrasegroup_infractionlevel' => 'phraseGroupInfractionLevel', 
			'phrasegroup_prefix' => 'phraseGroupPrefix', 
			'phrasegroup_socialgroups' => 'phraseGroupSocialGroups', 
			'phrasegroup_prefixadmin' => 'phraseGroupPrefixAdmin', 
			'phrasegroup_notice' => 'phraseGroupNotice', 
			'phrasegroup_album' => 'phraseGroupAlbum', 
			'phrasegroup_projecttools' => 'phraseGroupProjectTools', 
			'phrasegroup_projecttoolsadmin' => 'phraseGroupProjectToolsAdmin'
		];
    }

}