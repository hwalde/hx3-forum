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

class LanguageAlias extends TableAlias {
   
    public function languageId() : ColumnField
    {
        return new ColumnField('language', 'languageid', $this->getAliasName());
    }
    public function title() : ColumnField
    {
        return new ColumnField('language', 'title', $this->getAliasName());
    }
    public function userSelect() : ColumnField
    {
        return new ColumnField('language', 'userselect', $this->getAliasName());
    }
    public function options() : ColumnField
    {
        return new ColumnField('language', 'options', $this->getAliasName());
    }
    public function languageCode() : ColumnField
    {
        return new ColumnField('language', 'languagecode', $this->getAliasName());
    }
    public function charset() : ColumnField
    {
        return new ColumnField('language', 'charset', $this->getAliasName());
    }
    public function imagesOverride() : ColumnField
    {
        return new ColumnField('language', 'imagesoverride', $this->getAliasName());
    }
    public function dateOverride() : ColumnField
    {
        return new ColumnField('language', 'dateoverride', $this->getAliasName());
    }
    public function timeOverride() : ColumnField
    {
        return new ColumnField('language', 'timeoverride', $this->getAliasName());
    }
    public function registeredDateOverride() : ColumnField
    {
        return new ColumnField('language', 'registereddateoverride', $this->getAliasName());
    }
    public function calFormat1Override() : ColumnField
    {
        return new ColumnField('language', 'calformat1override', $this->getAliasName());
    }
    public function calFormat2Override() : ColumnField
    {
        return new ColumnField('language', 'calformat2override', $this->getAliasName());
    }
    public function logDateOverride() : ColumnField
    {
        return new ColumnField('language', 'logdateoverride', $this->getAliasName());
    }
    public function locale() : ColumnField
    {
        return new ColumnField('language', 'locale', $this->getAliasName());
    }
    public function decimalSep() : ColumnField
    {
        return new ColumnField('language', 'decimalsep', $this->getAliasName());
    }
    public function thousandSep() : ColumnField
    {
        return new ColumnField('language', 'thousandsep', $this->getAliasName());
    }
    public function phraseGroupGlobal() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_global', $this->getAliasName());
    }
    public function phraseGroupOpGlobal() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpglobal', $this->getAliasName());
    }
    public function phraseGroupCpPermission() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cppermission', $this->getAliasName());
    }
    public function phraseGroupForum() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_forum', $this->getAliasName());
    }
    public function phraseGroupCalendar() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_calendar', $this->getAliasName());
    }
    public function phraseGroupAttachmentImage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_attachment_image', $this->getAliasName());
    }
    public function phrasegGroupStyle() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_style', $this->getAliasName());
    }
    public function phraseGroupLogging() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_logging', $this->getAliasName());
    }
    public function phraseGroupCpHome() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cphome', $this->getAliasName());
    }
    public function phraseGroupPromotion() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_promotion', $this->getAliasName());
    }
    public function phraseGroupUser() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_user', $this->getAliasName());
    }
    public function phraseGroupHelpFaq() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_help_faq', $this->getAliasName());
    }
    public function phraseGroupSql() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_sql', $this->getAliasName());
    }
    public function phraseGroupSubscription() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_subscription', $this->getAliasName());
    }
    public function phraseGroupLanguage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_language', $this->getAliasName());
    }
    public function phraseGroupBBCode() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_bbcode', $this->getAliasName());
    }
    public function phraseGroupStats() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_stats', $this->getAliasName());
    }
    public function phraseGroupDiagnostic() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_diagnostic', $this->getAliasName());
    }
    public function phraseGroupMaintenance() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_maintenance', $this->getAliasName());
    }
    public function phraseGroupProfileField() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_profilefield', $this->getAliasName());
    }
    public function phraseGroupThread() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_thread', $this->getAliasName());
    }
    public function phraseGroupTimeZone() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_timezone', $this->getAliasName());
    }
    public function phraseGroupBanning() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_banning', $this->getAliasName());
    }
    public function phraseGroupReputation() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_reputation', $this->getAliasName());
    }
    public function phraseGroupWol() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_wol', $this->getAliasName());
    }
    public function phraseGroupThreadManage() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_threadmanage', $this->getAliasName());
    }
    public function phraseGroupPm() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_pm', $this->getAliasName());
    }
    public function phraseGroupCpUser() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpuser', $this->getAliasName());
    }
    public function phraseGroupAccessMask() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_accessmask', $this->getAliasName());
    }
    public function phraseGroupCron() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cron', $this->getAliasName());
    }
    public function phrasegGoupModerator() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_moderator', $this->getAliasName());
    }
    public function phraseGroupCpOption() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpoption', $this->getAliasName());
    }
    public function phraseGroupCpRank() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cprank', $this->getAliasName());
    }
    public function phraseGroupCpUserGroup() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cpusergroup', $this->getAliasName());
    }
    public function phraseGroupHoliday() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_holiday', $this->getAliasName());
    }
    public function phraseGroupPosting() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_posting', $this->getAliasName());
    }
    public function phraseGroupPoll() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_poll', $this->getAliasName());
    }
    public function phraseGroupFrontHelp() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_fronthelp', $this->getAliasName());
    }
    public function phraseGroupRegister() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_register', $this->getAliasName());
    }
    public function phraseGroupSearch() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_search', $this->getAliasName());
    }
    public function phraseGroupShowThread() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_showthread', $this->getAliasName());
    }
    public function phraseGroupPostBit() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_postbit', $this->getAliasName());
    }
    public function phraseGroupForumDisplay() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_forumdisplay', $this->getAliasName());
    }
    public function phraseGroupMessaging() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_messaging', $this->getAliasName());
    }
    public function phraseGroupInlineMod() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_inlinemod', $this->getAliasName());
    }
    public function phraseGroupPlugins() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_plugins', $this->getAliasName());
    }
    public function phraseGroupCProfileField() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_cprofilefield', $this->getAliasName());
    }
    public function phraseGroupReputationLevel() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_reputationlevel', $this->getAliasName());
    }
    public function phraseGroupInfraction() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_infraction', $this->getAliasName());
    }
    public function phraseGroupInfractionLevel() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_infractionlevel', $this->getAliasName());
    }
    public function phraseGroupPrefix() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_prefix', $this->getAliasName());
    }
    public function phraseGroupSocialGroups() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_socialgroups', $this->getAliasName());
    }
    public function phraseGroupPrefixAdmin() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_prefixadmin', $this->getAliasName());
    }
    public function phraseGroupNotice() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_notice', $this->getAliasName());
    }
    public function phraseGroupAlbum() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_album', $this->getAliasName());
    }
    public function phraseGroupProjectTools() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_projecttools', $this->getAliasName());
    }
    public function phraseGroupProjectToolsAdmin() : ColumnField
    {
        return new ColumnField('language', 'phrasegroup_projecttoolsadmin', $this->getAliasName());
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

    /**
     * @return ColumnField[]
     */
    public function __getFieldList() : ColumnFieldList
    {
        return new ColumnFieldList([
            $this->languageId(),
			$this->title(),
			$this->userSelect(),
			$this->options(),
			$this->languageCode(),
			$this->charset(),
			$this->imagesOverride(),
			$this->dateOverride(),
			$this->timeOverride(),
			$this->registeredDateOverride(),
			$this->calFormat1Override(),
			$this->calFormat2Override(),
			$this->logDateOverride(),
			$this->locale(),
			$this->decimalSep(),
			$this->thousandSep(),
			$this->phraseGroupGlobal(),
			$this->phraseGroupOpGlobal(),
			$this->phraseGroupCpPermission(),
			$this->phraseGroupForum(),
			$this->phraseGroupCalendar(),
			$this->phraseGroupAttachmentImage(),
			$this->phrasegGroupStyle(),
			$this->phraseGroupLogging(),
			$this->phraseGroupCpHome(),
			$this->phraseGroupPromotion(),
			$this->phraseGroupUser(),
			$this->phraseGroupHelpFaq(),
			$this->phraseGroupSql(),
			$this->phraseGroupSubscription(),
			$this->phraseGroupLanguage(),
			$this->phraseGroupBBCode(),
			$this->phraseGroupStats(),
			$this->phraseGroupDiagnostic(),
			$this->phraseGroupMaintenance(),
			$this->phraseGroupProfileField(),
			$this->phraseGroupThread(),
			$this->phraseGroupTimeZone(),
			$this->phraseGroupBanning(),
			$this->phraseGroupReputation(),
			$this->phraseGroupWol(),
			$this->phraseGroupThreadManage(),
			$this->phraseGroupPm(),
			$this->phraseGroupCpUser(),
			$this->phraseGroupAccessMask(),
			$this->phraseGroupCron(),
			$this->phrasegGoupModerator(),
			$this->phraseGroupCpOption(),
			$this->phraseGroupCpRank(),
			$this->phraseGroupCpUserGroup(),
			$this->phraseGroupHoliday(),
			$this->phraseGroupPosting(),
			$this->phraseGroupPoll(),
			$this->phraseGroupFrontHelp(),
			$this->phraseGroupRegister(),
			$this->phraseGroupSearch(),
			$this->phraseGroupShowThread(),
			$this->phraseGroupPostBit(),
			$this->phraseGroupForumDisplay(),
			$this->phraseGroupMessaging(),
			$this->phraseGroupInlineMod(),
			$this->phraseGroupPlugins(),
			$this->phraseGroupCProfileField(),
			$this->phraseGroupReputationLevel(),
			$this->phraseGroupInfraction(),
			$this->phraseGroupInfractionLevel(),
			$this->phraseGroupPrefix(),
			$this->phraseGroupSocialGroups(),
			$this->phraseGroupPrefixAdmin(),
			$this->phraseGroupNotice(),
			$this->phraseGroupAlbum(),
			$this->phraseGroupProjectTools(),
			$this->phraseGroupProjectToolsAdmin()
        ]);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getRecordClass() : LanguageRecord
    {
        return new LanguageRecord();
    }
}