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

use POOQ\Record;

class GeneratedLanguageRecord implements Record {
    
    /** @var $languageId int */
    private $languageId;
    
    /** @var $title string */
    private $title;
    
    /** @var $userSelect int */
    private $userSelect;
    
    /** @var $options int */
    private $options;
    
    /** @var $languageCode string */
    private $languageCode;
    
    /** @var $charset string */
    private $charset;
    
    /** @var $imagesOverride string */
    private $imagesOverride;
    
    /** @var $dateOverride string */
    private $dateOverride;
    
    /** @var $timeOverride string */
    private $timeOverride;
    
    /** @var $registeredDateOverride string */
    private $registeredDateOverride;
    
    /** @var $calFormat1Override string */
    private $calFormat1Override;
    
    /** @var $calFormat2Override string */
    private $calFormat2Override;
    
    /** @var $logDateOverride string */
    private $logDateOverride;
    
    /** @var $locale string */
    private $locale;
    
    /** @var $decimalSep string */
    private $decimalSep;
    
    /** @var $thousandSep string */
    private $thousandSep;
    
    /** @var $phraseGroupGlobal string */
    private $phraseGroupGlobal;
    
    /** @var $phraseGroupOpGlobal string */
    private $phraseGroupOpGlobal;
    
    /** @var $phraseGroupCpPermission string */
    private $phraseGroupCpPermission;
    
    /** @var $phraseGroupForum string */
    private $phraseGroupForum;
    
    /** @var $phraseGroupCalendar string */
    private $phraseGroupCalendar;
    
    /** @var $phraseGroupAttachmentImage string */
    private $phraseGroupAttachmentImage;
    
    /** @var $phrasegGroupStyle string */
    private $phrasegGroupStyle;
    
    /** @var $phraseGroupLogging string */
    private $phraseGroupLogging;
    
    /** @var $phraseGroupCpHome string */
    private $phraseGroupCpHome;
    
    /** @var $phraseGroupPromotion string */
    private $phraseGroupPromotion;
    
    /** @var $phraseGroupUser string */
    private $phraseGroupUser;
    
    /** @var $phraseGroupHelpFaq string */
    private $phraseGroupHelpFaq;
    
    /** @var $phraseGroupSql string */
    private $phraseGroupSql;
    
    /** @var $phraseGroupSubscription string */
    private $phraseGroupSubscription;
    
    /** @var $phraseGroupLanguage string */
    private $phraseGroupLanguage;
    
    /** @var $phraseGroupBBCode string */
    private $phraseGroupBBCode;
    
    /** @var $phraseGroupStats string */
    private $phraseGroupStats;
    
    /** @var $phraseGroupDiagnostic string */
    private $phraseGroupDiagnostic;
    
    /** @var $phraseGroupMaintenance string */
    private $phraseGroupMaintenance;
    
    /** @var $phraseGroupProfileField string */
    private $phraseGroupProfileField;
    
    /** @var $phraseGroupThread string */
    private $phraseGroupThread;
    
    /** @var $phraseGroupTimeZone string */
    private $phraseGroupTimeZone;
    
    /** @var $phraseGroupBanning string */
    private $phraseGroupBanning;
    
    /** @var $phraseGroupReputation string */
    private $phraseGroupReputation;
    
    /** @var $phraseGroupWol string */
    private $phraseGroupWol;
    
    /** @var $phraseGroupThreadManage string */
    private $phraseGroupThreadManage;
    
    /** @var $phraseGroupPm string */
    private $phraseGroupPm;
    
    /** @var $phraseGroupCpUser string */
    private $phraseGroupCpUser;
    
    /** @var $phraseGroupAccessMask string */
    private $phraseGroupAccessMask;
    
    /** @var $phraseGroupCron string */
    private $phraseGroupCron;
    
    /** @var $phrasegGoupModerator string */
    private $phrasegGoupModerator;
    
    /** @var $phraseGroupCpOption string */
    private $phraseGroupCpOption;
    
    /** @var $phraseGroupCpRank string */
    private $phraseGroupCpRank;
    
    /** @var $phraseGroupCpUserGroup string */
    private $phraseGroupCpUserGroup;
    
    /** @var $phraseGroupHoliday string */
    private $phraseGroupHoliday;
    
    /** @var $phraseGroupPosting string */
    private $phraseGroupPosting;
    
    /** @var $phraseGroupPoll string */
    private $phraseGroupPoll;
    
    /** @var $phraseGroupFrontHelp string */
    private $phraseGroupFrontHelp;
    
    /** @var $phraseGroupRegister string */
    private $phraseGroupRegister;
    
    /** @var $phraseGroupSearch string */
    private $phraseGroupSearch;
    
    /** @var $phraseGroupShowThread string */
    private $phraseGroupShowThread;
    
    /** @var $phraseGroupPostBit string */
    private $phraseGroupPostBit;
    
    /** @var $phraseGroupForumDisplay string */
    private $phraseGroupForumDisplay;
    
    /** @var $phraseGroupMessaging string */
    private $phraseGroupMessaging;
    
    /** @var $phraseGroupInlineMod string */
    private $phraseGroupInlineMod;
    
    /** @var $phraseGroupPlugins string */
    private $phraseGroupPlugins;
    
    /** @var $phraseGroupCProfileField string|null */
    private $phraseGroupCProfileField;
    
    /** @var $phraseGroupReputationLevel string|null */
    private $phraseGroupReputationLevel;
    
    /** @var $phraseGroupInfraction string|null */
    private $phraseGroupInfraction;
    
    /** @var $phraseGroupInfractionLevel string|null */
    private $phraseGroupInfractionLevel;
    
    /** @var $phraseGroupPrefix string|null */
    private $phraseGroupPrefix;
    
    /** @var $phraseGroupSocialGroups string|null */
    private $phraseGroupSocialGroups;
    
    /** @var $phraseGroupPrefixAdmin string|null */
    private $phraseGroupPrefixAdmin;
    
    /** @var $phraseGroupNotice string|null */
    private $phraseGroupNotice;
    
    /** @var $phraseGroupAlbum string|null */
    private $phraseGroupAlbum;
    
    /** @var $phraseGroupProjectTools string */
    private $phraseGroupProjectTools;
    
    /** @var $phraseGroupProjectToolsAdmin string */
    private $phraseGroupProjectToolsAdmin;
    
    public function hasLanguageId(): bool
    {
        return isset($this->languageId);
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId;
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId = $languageId;
    }
    
    public function hasTitle(): bool
    {
        return isset($this->title);
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    public function hasUserSelect(): bool
    {
        return isset($this->userSelect);
    }    

    /**
     * @return int
     */
    public function getUserSelect() : int
    {
        return $this->userSelect;
    }

    /**
     * @param int $userSelect
     */
    public function setUserSelect(int $userSelect)
    {
        $this->userSelect = $userSelect;
    }
    
    public function hasOptions(): bool
    {
        return isset($this->options);
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options;
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options = $options;
    }
    
    public function hasLanguageCode(): bool
    {
        return isset($this->languageCode);
    }    

    /**
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode;
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->languageCode = $languageCode;
    }
    
    public function hasCharset(): bool
    {
        return isset($this->charset);
    }    

    /**
     * @return string
     */
    public function getCharset() : string
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset(string $charset)
    {
        $this->charset = $charset;
    }
    
    public function hasImagesOverride(): bool
    {
        return isset($this->imagesOverride);
    }    

    /**
     * @return string
     */
    public function getImagesOverride() : string
    {
        return $this->imagesOverride;
    }

    /**
     * @param string $imagesOverride
     */
    public function setImagesOverride(string $imagesOverride)
    {
        $this->imagesOverride = $imagesOverride;
    }
    
    public function hasDateOverride(): bool
    {
        return isset($this->dateOverride);
    }    

    /**
     * @return string
     */
    public function getDateOverride() : string
    {
        return $this->dateOverride;
    }

    /**
     * @param string $dateOverride
     */
    public function setDateOverride(string $dateOverride)
    {
        $this->dateOverride = $dateOverride;
    }
    
    public function hasTimeOverride(): bool
    {
        return isset($this->timeOverride);
    }    

    /**
     * @return string
     */
    public function getTimeOverride() : string
    {
        return $this->timeOverride;
    }

    /**
     * @param string $timeOverride
     */
    public function setTimeOverride(string $timeOverride)
    {
        $this->timeOverride = $timeOverride;
    }
    
    public function hasRegisteredDateOverride(): bool
    {
        return isset($this->registeredDateOverride);
    }    

    /**
     * @return string
     */
    public function getRegisteredDateOverride() : string
    {
        return $this->registeredDateOverride;
    }

    /**
     * @param string $registeredDateOverride
     */
    public function setRegisteredDateOverride(string $registeredDateOverride)
    {
        $this->registeredDateOverride = $registeredDateOverride;
    }
    
    public function hasCalFormat1Override(): bool
    {
        return isset($this->calFormat1Override);
    }    

    /**
     * @return string
     */
    public function getCalFormat1Override() : string
    {
        return $this->calFormat1Override;
    }

    /**
     * @param string $calFormat1Override
     */
    public function setCalFormat1Override(string $calFormat1Override)
    {
        $this->calFormat1Override = $calFormat1Override;
    }
    
    public function hasCalFormat2Override(): bool
    {
        return isset($this->calFormat2Override);
    }    

    /**
     * @return string
     */
    public function getCalFormat2Override() : string
    {
        return $this->calFormat2Override;
    }

    /**
     * @param string $calFormat2Override
     */
    public function setCalFormat2Override(string $calFormat2Override)
    {
        $this->calFormat2Override = $calFormat2Override;
    }
    
    public function hasLogDateOverride(): bool
    {
        return isset($this->logDateOverride);
    }    

    /**
     * @return string
     */
    public function getLogDateOverride() : string
    {
        return $this->logDateOverride;
    }

    /**
     * @param string $logDateOverride
     */
    public function setLogDateOverride(string $logDateOverride)
    {
        $this->logDateOverride = $logDateOverride;
    }
    
    public function hasLocale(): bool
    {
        return isset($this->locale);
    }    

    /**
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->locale = $locale;
    }
    
    public function hasDecimalSep(): bool
    {
        return isset($this->decimalSep);
    }    

    /**
     * @return string
     */
    public function getDecimalSep() : string
    {
        return $this->decimalSep;
    }

    /**
     * @param string $decimalSep
     */
    public function setDecimalSep(string $decimalSep)
    {
        $this->decimalSep = $decimalSep;
    }
    
    public function hasThousandSep(): bool
    {
        return isset($this->thousandSep);
    }    

    /**
     * @return string
     */
    public function getThousandSep() : string
    {
        return $this->thousandSep;
    }

    /**
     * @param string $thousandSep
     */
    public function setThousandSep(string $thousandSep)
    {
        $this->thousandSep = $thousandSep;
    }
    
    public function hasPhraseGroupGlobal(): bool
    {
        return isset($this->phraseGroupGlobal);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupGlobal() : string
    {
        return $this->phraseGroupGlobal;
    }

    /**
     * @param string $phraseGroupGlobal
     */
    public function setPhraseGroupGlobal(string $phraseGroupGlobal)
    {
        $this->phraseGroupGlobal = $phraseGroupGlobal;
    }
    
    public function hasPhraseGroupOpGlobal(): bool
    {
        return isset($this->phraseGroupOpGlobal);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupOpGlobal() : string
    {
        return $this->phraseGroupOpGlobal;
    }

    /**
     * @param string $phraseGroupOpGlobal
     */
    public function setPhraseGroupOpGlobal(string $phraseGroupOpGlobal)
    {
        $this->phraseGroupOpGlobal = $phraseGroupOpGlobal;
    }
    
    public function hasPhraseGroupCpPermission(): bool
    {
        return isset($this->phraseGroupCpPermission);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpPermission() : string
    {
        return $this->phraseGroupCpPermission;
    }

    /**
     * @param string $phraseGroupCpPermission
     */
    public function setPhraseGroupCpPermission(string $phraseGroupCpPermission)
    {
        $this->phraseGroupCpPermission = $phraseGroupCpPermission;
    }
    
    public function hasPhraseGroupForum(): bool
    {
        return isset($this->phraseGroupForum);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupForum() : string
    {
        return $this->phraseGroupForum;
    }

    /**
     * @param string $phraseGroupForum
     */
    public function setPhraseGroupForum(string $phraseGroupForum)
    {
        $this->phraseGroupForum = $phraseGroupForum;
    }
    
    public function hasPhraseGroupCalendar(): bool
    {
        return isset($this->phraseGroupCalendar);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCalendar() : string
    {
        return $this->phraseGroupCalendar;
    }

    /**
     * @param string $phraseGroupCalendar
     */
    public function setPhraseGroupCalendar(string $phraseGroupCalendar)
    {
        $this->phraseGroupCalendar = $phraseGroupCalendar;
    }
    
    public function hasPhraseGroupAttachmentImage(): bool
    {
        return isset($this->phraseGroupAttachmentImage);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupAttachmentImage() : string
    {
        return $this->phraseGroupAttachmentImage;
    }

    /**
     * @param string $phraseGroupAttachmentImage
     */
    public function setPhraseGroupAttachmentImage(string $phraseGroupAttachmentImage)
    {
        $this->phraseGroupAttachmentImage = $phraseGroupAttachmentImage;
    }
    
    public function hasPhrasegGroupStyle(): bool
    {
        return isset($this->phrasegGroupStyle);
    }    

    /**
     * @return string
     */
    public function getPhrasegGroupStyle() : string
    {
        return $this->phrasegGroupStyle;
    }

    /**
     * @param string $phrasegGroupStyle
     */
    public function setPhrasegGroupStyle(string $phrasegGroupStyle)
    {
        $this->phrasegGroupStyle = $phrasegGroupStyle;
    }
    
    public function hasPhraseGroupLogging(): bool
    {
        return isset($this->phraseGroupLogging);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupLogging() : string
    {
        return $this->phraseGroupLogging;
    }

    /**
     * @param string $phraseGroupLogging
     */
    public function setPhraseGroupLogging(string $phraseGroupLogging)
    {
        $this->phraseGroupLogging = $phraseGroupLogging;
    }
    
    public function hasPhraseGroupCpHome(): bool
    {
        return isset($this->phraseGroupCpHome);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpHome() : string
    {
        return $this->phraseGroupCpHome;
    }

    /**
     * @param string $phraseGroupCpHome
     */
    public function setPhraseGroupCpHome(string $phraseGroupCpHome)
    {
        $this->phraseGroupCpHome = $phraseGroupCpHome;
    }
    
    public function hasPhraseGroupPromotion(): bool
    {
        return isset($this->phraseGroupPromotion);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPromotion() : string
    {
        return $this->phraseGroupPromotion;
    }

    /**
     * @param string $phraseGroupPromotion
     */
    public function setPhraseGroupPromotion(string $phraseGroupPromotion)
    {
        $this->phraseGroupPromotion = $phraseGroupPromotion;
    }
    
    public function hasPhraseGroupUser(): bool
    {
        return isset($this->phraseGroupUser);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupUser() : string
    {
        return $this->phraseGroupUser;
    }

    /**
     * @param string $phraseGroupUser
     */
    public function setPhraseGroupUser(string $phraseGroupUser)
    {
        $this->phraseGroupUser = $phraseGroupUser;
    }
    
    public function hasPhraseGroupHelpFaq(): bool
    {
        return isset($this->phraseGroupHelpFaq);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupHelpFaq() : string
    {
        return $this->phraseGroupHelpFaq;
    }

    /**
     * @param string $phraseGroupHelpFaq
     */
    public function setPhraseGroupHelpFaq(string $phraseGroupHelpFaq)
    {
        $this->phraseGroupHelpFaq = $phraseGroupHelpFaq;
    }
    
    public function hasPhraseGroupSql(): bool
    {
        return isset($this->phraseGroupSql);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSql() : string
    {
        return $this->phraseGroupSql;
    }

    /**
     * @param string $phraseGroupSql
     */
    public function setPhraseGroupSql(string $phraseGroupSql)
    {
        $this->phraseGroupSql = $phraseGroupSql;
    }
    
    public function hasPhraseGroupSubscription(): bool
    {
        return isset($this->phraseGroupSubscription);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSubscription() : string
    {
        return $this->phraseGroupSubscription;
    }

    /**
     * @param string $phraseGroupSubscription
     */
    public function setPhraseGroupSubscription(string $phraseGroupSubscription)
    {
        $this->phraseGroupSubscription = $phraseGroupSubscription;
    }
    
    public function hasPhraseGroupLanguage(): bool
    {
        return isset($this->phraseGroupLanguage);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupLanguage() : string
    {
        return $this->phraseGroupLanguage;
    }

    /**
     * @param string $phraseGroupLanguage
     */
    public function setPhraseGroupLanguage(string $phraseGroupLanguage)
    {
        $this->phraseGroupLanguage = $phraseGroupLanguage;
    }
    
    public function hasPhraseGroupBBCode(): bool
    {
        return isset($this->phraseGroupBBCode);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupBBCode() : string
    {
        return $this->phraseGroupBBCode;
    }

    /**
     * @param string $phraseGroupBBCode
     */
    public function setPhraseGroupBBCode(string $phraseGroupBBCode)
    {
        $this->phraseGroupBBCode = $phraseGroupBBCode;
    }
    
    public function hasPhraseGroupStats(): bool
    {
        return isset($this->phraseGroupStats);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupStats() : string
    {
        return $this->phraseGroupStats;
    }

    /**
     * @param string $phraseGroupStats
     */
    public function setPhraseGroupStats(string $phraseGroupStats)
    {
        $this->phraseGroupStats = $phraseGroupStats;
    }
    
    public function hasPhraseGroupDiagnostic(): bool
    {
        return isset($this->phraseGroupDiagnostic);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupDiagnostic() : string
    {
        return $this->phraseGroupDiagnostic;
    }

    /**
     * @param string $phraseGroupDiagnostic
     */
    public function setPhraseGroupDiagnostic(string $phraseGroupDiagnostic)
    {
        $this->phraseGroupDiagnostic = $phraseGroupDiagnostic;
    }
    
    public function hasPhraseGroupMaintenance(): bool
    {
        return isset($this->phraseGroupMaintenance);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupMaintenance() : string
    {
        return $this->phraseGroupMaintenance;
    }

    /**
     * @param string $phraseGroupMaintenance
     */
    public function setPhraseGroupMaintenance(string $phraseGroupMaintenance)
    {
        $this->phraseGroupMaintenance = $phraseGroupMaintenance;
    }
    
    public function hasPhraseGroupProfileField(): bool
    {
        return isset($this->phraseGroupProfileField);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProfileField() : string
    {
        return $this->phraseGroupProfileField;
    }

    /**
     * @param string $phraseGroupProfileField
     */
    public function setPhraseGroupProfileField(string $phraseGroupProfileField)
    {
        $this->phraseGroupProfileField = $phraseGroupProfileField;
    }
    
    public function hasPhraseGroupThread(): bool
    {
        return isset($this->phraseGroupThread);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupThread() : string
    {
        return $this->phraseGroupThread;
    }

    /**
     * @param string $phraseGroupThread
     */
    public function setPhraseGroupThread(string $phraseGroupThread)
    {
        $this->phraseGroupThread = $phraseGroupThread;
    }
    
    public function hasPhraseGroupTimeZone(): bool
    {
        return isset($this->phraseGroupTimeZone);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupTimeZone() : string
    {
        return $this->phraseGroupTimeZone;
    }

    /**
     * @param string $phraseGroupTimeZone
     */
    public function setPhraseGroupTimeZone(string $phraseGroupTimeZone)
    {
        $this->phraseGroupTimeZone = $phraseGroupTimeZone;
    }
    
    public function hasPhraseGroupBanning(): bool
    {
        return isset($this->phraseGroupBanning);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupBanning() : string
    {
        return $this->phraseGroupBanning;
    }

    /**
     * @param string $phraseGroupBanning
     */
    public function setPhraseGroupBanning(string $phraseGroupBanning)
    {
        $this->phraseGroupBanning = $phraseGroupBanning;
    }
    
    public function hasPhraseGroupReputation(): bool
    {
        return isset($this->phraseGroupReputation);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupReputation() : string
    {
        return $this->phraseGroupReputation;
    }

    /**
     * @param string $phraseGroupReputation
     */
    public function setPhraseGroupReputation(string $phraseGroupReputation)
    {
        $this->phraseGroupReputation = $phraseGroupReputation;
    }
    
    public function hasPhraseGroupWol(): bool
    {
        return isset($this->phraseGroupWol);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupWol() : string
    {
        return $this->phraseGroupWol;
    }

    /**
     * @param string $phraseGroupWol
     */
    public function setPhraseGroupWol(string $phraseGroupWol)
    {
        $this->phraseGroupWol = $phraseGroupWol;
    }
    
    public function hasPhraseGroupThreadManage(): bool
    {
        return isset($this->phraseGroupThreadManage);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupThreadManage() : string
    {
        return $this->phraseGroupThreadManage;
    }

    /**
     * @param string $phraseGroupThreadManage
     */
    public function setPhraseGroupThreadManage(string $phraseGroupThreadManage)
    {
        $this->phraseGroupThreadManage = $phraseGroupThreadManage;
    }
    
    public function hasPhraseGroupPm(): bool
    {
        return isset($this->phraseGroupPm);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPm() : string
    {
        return $this->phraseGroupPm;
    }

    /**
     * @param string $phraseGroupPm
     */
    public function setPhraseGroupPm(string $phraseGroupPm)
    {
        $this->phraseGroupPm = $phraseGroupPm;
    }
    
    public function hasPhraseGroupCpUser(): bool
    {
        return isset($this->phraseGroupCpUser);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpUser() : string
    {
        return $this->phraseGroupCpUser;
    }

    /**
     * @param string $phraseGroupCpUser
     */
    public function setPhraseGroupCpUser(string $phraseGroupCpUser)
    {
        $this->phraseGroupCpUser = $phraseGroupCpUser;
    }
    
    public function hasPhraseGroupAccessMask(): bool
    {
        return isset($this->phraseGroupAccessMask);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupAccessMask() : string
    {
        return $this->phraseGroupAccessMask;
    }

    /**
     * @param string $phraseGroupAccessMask
     */
    public function setPhraseGroupAccessMask(string $phraseGroupAccessMask)
    {
        $this->phraseGroupAccessMask = $phraseGroupAccessMask;
    }
    
    public function hasPhraseGroupCron(): bool
    {
        return isset($this->phraseGroupCron);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCron() : string
    {
        return $this->phraseGroupCron;
    }

    /**
     * @param string $phraseGroupCron
     */
    public function setPhraseGroupCron(string $phraseGroupCron)
    {
        $this->phraseGroupCron = $phraseGroupCron;
    }
    
    public function hasPhrasegGoupModerator(): bool
    {
        return isset($this->phrasegGoupModerator);
    }    

    /**
     * @return string
     */
    public function getPhrasegGoupModerator() : string
    {
        return $this->phrasegGoupModerator;
    }

    /**
     * @param string $phrasegGoupModerator
     */
    public function setPhrasegGoupModerator(string $phrasegGoupModerator)
    {
        $this->phrasegGoupModerator = $phrasegGoupModerator;
    }
    
    public function hasPhraseGroupCpOption(): bool
    {
        return isset($this->phraseGroupCpOption);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpOption() : string
    {
        return $this->phraseGroupCpOption;
    }

    /**
     * @param string $phraseGroupCpOption
     */
    public function setPhraseGroupCpOption(string $phraseGroupCpOption)
    {
        $this->phraseGroupCpOption = $phraseGroupCpOption;
    }
    
    public function hasPhraseGroupCpRank(): bool
    {
        return isset($this->phraseGroupCpRank);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpRank() : string
    {
        return $this->phraseGroupCpRank;
    }

    /**
     * @param string $phraseGroupCpRank
     */
    public function setPhraseGroupCpRank(string $phraseGroupCpRank)
    {
        $this->phraseGroupCpRank = $phraseGroupCpRank;
    }
    
    public function hasPhraseGroupCpUserGroup(): bool
    {
        return isset($this->phraseGroupCpUserGroup);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpUserGroup() : string
    {
        return $this->phraseGroupCpUserGroup;
    }

    /**
     * @param string $phraseGroupCpUserGroup
     */
    public function setPhraseGroupCpUserGroup(string $phraseGroupCpUserGroup)
    {
        $this->phraseGroupCpUserGroup = $phraseGroupCpUserGroup;
    }
    
    public function hasPhraseGroupHoliday(): bool
    {
        return isset($this->phraseGroupHoliday);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupHoliday() : string
    {
        return $this->phraseGroupHoliday;
    }

    /**
     * @param string $phraseGroupHoliday
     */
    public function setPhraseGroupHoliday(string $phraseGroupHoliday)
    {
        $this->phraseGroupHoliday = $phraseGroupHoliday;
    }
    
    public function hasPhraseGroupPosting(): bool
    {
        return isset($this->phraseGroupPosting);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPosting() : string
    {
        return $this->phraseGroupPosting;
    }

    /**
     * @param string $phraseGroupPosting
     */
    public function setPhraseGroupPosting(string $phraseGroupPosting)
    {
        $this->phraseGroupPosting = $phraseGroupPosting;
    }
    
    public function hasPhraseGroupPoll(): bool
    {
        return isset($this->phraseGroupPoll);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPoll() : string
    {
        return $this->phraseGroupPoll;
    }

    /**
     * @param string $phraseGroupPoll
     */
    public function setPhraseGroupPoll(string $phraseGroupPoll)
    {
        $this->phraseGroupPoll = $phraseGroupPoll;
    }
    
    public function hasPhraseGroupFrontHelp(): bool
    {
        return isset($this->phraseGroupFrontHelp);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupFrontHelp() : string
    {
        return $this->phraseGroupFrontHelp;
    }

    /**
     * @param string $phraseGroupFrontHelp
     */
    public function setPhraseGroupFrontHelp(string $phraseGroupFrontHelp)
    {
        $this->phraseGroupFrontHelp = $phraseGroupFrontHelp;
    }
    
    public function hasPhraseGroupRegister(): bool
    {
        return isset($this->phraseGroupRegister);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupRegister() : string
    {
        return $this->phraseGroupRegister;
    }

    /**
     * @param string $phraseGroupRegister
     */
    public function setPhraseGroupRegister(string $phraseGroupRegister)
    {
        $this->phraseGroupRegister = $phraseGroupRegister;
    }
    
    public function hasPhraseGroupSearch(): bool
    {
        return isset($this->phraseGroupSearch);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSearch() : string
    {
        return $this->phraseGroupSearch;
    }

    /**
     * @param string $phraseGroupSearch
     */
    public function setPhraseGroupSearch(string $phraseGroupSearch)
    {
        $this->phraseGroupSearch = $phraseGroupSearch;
    }
    
    public function hasPhraseGroupShowThread(): bool
    {
        return isset($this->phraseGroupShowThread);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupShowThread() : string
    {
        return $this->phraseGroupShowThread;
    }

    /**
     * @param string $phraseGroupShowThread
     */
    public function setPhraseGroupShowThread(string $phraseGroupShowThread)
    {
        $this->phraseGroupShowThread = $phraseGroupShowThread;
    }
    
    public function hasPhraseGroupPostBit(): bool
    {
        return isset($this->phraseGroupPostBit);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPostBit() : string
    {
        return $this->phraseGroupPostBit;
    }

    /**
     * @param string $phraseGroupPostBit
     */
    public function setPhraseGroupPostBit(string $phraseGroupPostBit)
    {
        $this->phraseGroupPostBit = $phraseGroupPostBit;
    }
    
    public function hasPhraseGroupForumDisplay(): bool
    {
        return isset($this->phraseGroupForumDisplay);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupForumDisplay() : string
    {
        return $this->phraseGroupForumDisplay;
    }

    /**
     * @param string $phraseGroupForumDisplay
     */
    public function setPhraseGroupForumDisplay(string $phraseGroupForumDisplay)
    {
        $this->phraseGroupForumDisplay = $phraseGroupForumDisplay;
    }
    
    public function hasPhraseGroupMessaging(): bool
    {
        return isset($this->phraseGroupMessaging);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupMessaging() : string
    {
        return $this->phraseGroupMessaging;
    }

    /**
     * @param string $phraseGroupMessaging
     */
    public function setPhraseGroupMessaging(string $phraseGroupMessaging)
    {
        $this->phraseGroupMessaging = $phraseGroupMessaging;
    }
    
    public function hasPhraseGroupInlineMod(): bool
    {
        return isset($this->phraseGroupInlineMod);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupInlineMod() : string
    {
        return $this->phraseGroupInlineMod;
    }

    /**
     * @param string $phraseGroupInlineMod
     */
    public function setPhraseGroupInlineMod(string $phraseGroupInlineMod)
    {
        $this->phraseGroupInlineMod = $phraseGroupInlineMod;
    }
    
    public function hasPhraseGroupPlugins(): bool
    {
        return isset($this->phraseGroupPlugins);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPlugins() : string
    {
        return $this->phraseGroupPlugins;
    }

    /**
     * @param string $phraseGroupPlugins
     */
    public function setPhraseGroupPlugins(string $phraseGroupPlugins)
    {
        $this->phraseGroupPlugins = $phraseGroupPlugins;
    }
    
    public function hasPhraseGroupCProfileField(): bool
    {
        return isset($this->phraseGroupCProfileField);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupCProfileField() : ?string
    {
        return $this->phraseGroupCProfileField;
    }

    /**
     * @param string|null $phraseGroupCProfileField
     */
    public function setPhraseGroupCProfileField(?string $phraseGroupCProfileField)
    {
        $this->phraseGroupCProfileField = $phraseGroupCProfileField;
    }
    
    public function hasPhraseGroupReputationLevel(): bool
    {
        return isset($this->phraseGroupReputationLevel);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupReputationLevel() : ?string
    {
        return $this->phraseGroupReputationLevel;
    }

    /**
     * @param string|null $phraseGroupReputationLevel
     */
    public function setPhraseGroupReputationLevel(?string $phraseGroupReputationLevel)
    {
        $this->phraseGroupReputationLevel = $phraseGroupReputationLevel;
    }
    
    public function hasPhraseGroupInfraction(): bool
    {
        return isset($this->phraseGroupInfraction);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupInfraction() : ?string
    {
        return $this->phraseGroupInfraction;
    }

    /**
     * @param string|null $phraseGroupInfraction
     */
    public function setPhraseGroupInfraction(?string $phraseGroupInfraction)
    {
        $this->phraseGroupInfraction = $phraseGroupInfraction;
    }
    
    public function hasPhraseGroupInfractionLevel(): bool
    {
        return isset($this->phraseGroupInfractionLevel);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupInfractionLevel() : ?string
    {
        return $this->phraseGroupInfractionLevel;
    }

    /**
     * @param string|null $phraseGroupInfractionLevel
     */
    public function setPhraseGroupInfractionLevel(?string $phraseGroupInfractionLevel)
    {
        $this->phraseGroupInfractionLevel = $phraseGroupInfractionLevel;
    }
    
    public function hasPhraseGroupPrefix(): bool
    {
        return isset($this->phraseGroupPrefix);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupPrefix() : ?string
    {
        return $this->phraseGroupPrefix;
    }

    /**
     * @param string|null $phraseGroupPrefix
     */
    public function setPhraseGroupPrefix(?string $phraseGroupPrefix)
    {
        $this->phraseGroupPrefix = $phraseGroupPrefix;
    }
    
    public function hasPhraseGroupSocialGroups(): bool
    {
        return isset($this->phraseGroupSocialGroups);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupSocialGroups() : ?string
    {
        return $this->phraseGroupSocialGroups;
    }

    /**
     * @param string|null $phraseGroupSocialGroups
     */
    public function setPhraseGroupSocialGroups(?string $phraseGroupSocialGroups)
    {
        $this->phraseGroupSocialGroups = $phraseGroupSocialGroups;
    }
    
    public function hasPhraseGroupPrefixAdmin(): bool
    {
        return isset($this->phraseGroupPrefixAdmin);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupPrefixAdmin() : ?string
    {
        return $this->phraseGroupPrefixAdmin;
    }

    /**
     * @param string|null $phraseGroupPrefixAdmin
     */
    public function setPhraseGroupPrefixAdmin(?string $phraseGroupPrefixAdmin)
    {
        $this->phraseGroupPrefixAdmin = $phraseGroupPrefixAdmin;
    }
    
    public function hasPhraseGroupNotice(): bool
    {
        return isset($this->phraseGroupNotice);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupNotice() : ?string
    {
        return $this->phraseGroupNotice;
    }

    /**
     * @param string|null $phraseGroupNotice
     */
    public function setPhraseGroupNotice(?string $phraseGroupNotice)
    {
        $this->phraseGroupNotice = $phraseGroupNotice;
    }
    
    public function hasPhraseGroupAlbum(): bool
    {
        return isset($this->phraseGroupAlbum);
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupAlbum() : ?string
    {
        return $this->phraseGroupAlbum;
    }

    /**
     * @param string|null $phraseGroupAlbum
     */
    public function setPhraseGroupAlbum(?string $phraseGroupAlbum)
    {
        $this->phraseGroupAlbum = $phraseGroupAlbum;
    }
    
    public function hasPhraseGroupProjectTools(): bool
    {
        return isset($this->phraseGroupProjectTools);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProjectTools() : string
    {
        return $this->phraseGroupProjectTools;
    }

    /**
     * @param string $phraseGroupProjectTools
     */
    public function setPhraseGroupProjectTools(string $phraseGroupProjectTools)
    {
        $this->phraseGroupProjectTools = $phraseGroupProjectTools;
    }
    
    public function hasPhraseGroupProjectToolsAdmin(): bool
    {
        return isset($this->phraseGroupProjectToolsAdmin);
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProjectToolsAdmin() : string
    {
        return $this->phraseGroupProjectToolsAdmin;
    }

    /**
     * @param string $phraseGroupProjectToolsAdmin
     */
    public function setPhraseGroupProjectToolsAdmin(string $phraseGroupProjectToolsAdmin)
    {
        $this->phraseGroupProjectToolsAdmin = $phraseGroupProjectToolsAdmin;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Language
    {
        return new Language();
    }
}