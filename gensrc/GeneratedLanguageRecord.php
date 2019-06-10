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

use POOQ\RecordValue;
use POOQ\Record;

class GeneratedLanguageRecord implements Record {
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $userSelect RecordValue */
    protected $userSelect;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $languageCode RecordValue */
    protected $languageCode;
    
    /** @var $charset RecordValue */
    protected $charset;
    
    /** @var $imagesOverride RecordValue */
    protected $imagesOverride;
    
    /** @var $dateOverride RecordValue */
    protected $dateOverride;
    
    /** @var $timeOverride RecordValue */
    protected $timeOverride;
    
    /** @var $registeredDateOverride RecordValue */
    protected $registeredDateOverride;
    
    /** @var $calFormat1Override RecordValue */
    protected $calFormat1Override;
    
    /** @var $calFormat2Override RecordValue */
    protected $calFormat2Override;
    
    /** @var $logDateOverride RecordValue */
    protected $logDateOverride;
    
    /** @var $locale RecordValue */
    protected $locale;
    
    /** @var $decimalSep RecordValue */
    protected $decimalSep;
    
    /** @var $thousandSep RecordValue */
    protected $thousandSep;
    
    /** @var $phraseGroupGlobal RecordValue */
    protected $phraseGroupGlobal;
    
    /** @var $phraseGroupOpGlobal RecordValue */
    protected $phraseGroupOpGlobal;
    
    /** @var $phraseGroupCpPermission RecordValue */
    protected $phraseGroupCpPermission;
    
    /** @var $phraseGroupForum RecordValue */
    protected $phraseGroupForum;
    
    /** @var $phraseGroupCalendar RecordValue */
    protected $phraseGroupCalendar;
    
    /** @var $phraseGroupAttachmentImage RecordValue */
    protected $phraseGroupAttachmentImage;
    
    /** @var $phrasegGroupStyle RecordValue */
    protected $phrasegGroupStyle;
    
    /** @var $phraseGroupLogging RecordValue */
    protected $phraseGroupLogging;
    
    /** @var $phraseGroupCpHome RecordValue */
    protected $phraseGroupCpHome;
    
    /** @var $phraseGroupPromotion RecordValue */
    protected $phraseGroupPromotion;
    
    /** @var $phraseGroupUser RecordValue */
    protected $phraseGroupUser;
    
    /** @var $phraseGroupHelpFaq RecordValue */
    protected $phraseGroupHelpFaq;
    
    /** @var $phraseGroupSql RecordValue */
    protected $phraseGroupSql;
    
    /** @var $phraseGroupSubscription RecordValue */
    protected $phraseGroupSubscription;
    
    /** @var $phraseGroupLanguage RecordValue */
    protected $phraseGroupLanguage;
    
    /** @var $phraseGroupBBCode RecordValue */
    protected $phraseGroupBBCode;
    
    /** @var $phraseGroupStats RecordValue */
    protected $phraseGroupStats;
    
    /** @var $phraseGroupDiagnostic RecordValue */
    protected $phraseGroupDiagnostic;
    
    /** @var $phraseGroupMaintenance RecordValue */
    protected $phraseGroupMaintenance;
    
    /** @var $phraseGroupProfileField RecordValue */
    protected $phraseGroupProfileField;
    
    /** @var $phraseGroupThread RecordValue */
    protected $phraseGroupThread;
    
    /** @var $phraseGroupTimeZone RecordValue */
    protected $phraseGroupTimeZone;
    
    /** @var $phraseGroupBanning RecordValue */
    protected $phraseGroupBanning;
    
    /** @var $phraseGroupReputation RecordValue */
    protected $phraseGroupReputation;
    
    /** @var $phraseGroupWol RecordValue */
    protected $phraseGroupWol;
    
    /** @var $phraseGroupThreadManage RecordValue */
    protected $phraseGroupThreadManage;
    
    /** @var $phraseGroupPm RecordValue */
    protected $phraseGroupPm;
    
    /** @var $phraseGroupCpUser RecordValue */
    protected $phraseGroupCpUser;
    
    /** @var $phraseGroupAccessMask RecordValue */
    protected $phraseGroupAccessMask;
    
    /** @var $phraseGroupCron RecordValue */
    protected $phraseGroupCron;
    
    /** @var $phrasegGoupModerator RecordValue */
    protected $phrasegGoupModerator;
    
    /** @var $phraseGroupCpOption RecordValue */
    protected $phraseGroupCpOption;
    
    /** @var $phraseGroupCpRank RecordValue */
    protected $phraseGroupCpRank;
    
    /** @var $phraseGroupCpUserGroup RecordValue */
    protected $phraseGroupCpUserGroup;
    
    /** @var $phraseGroupHoliday RecordValue */
    protected $phraseGroupHoliday;
    
    /** @var $phraseGroupPosting RecordValue */
    protected $phraseGroupPosting;
    
    /** @var $phraseGroupPoll RecordValue */
    protected $phraseGroupPoll;
    
    /** @var $phraseGroupFrontHelp RecordValue */
    protected $phraseGroupFrontHelp;
    
    /** @var $phraseGroupRegister RecordValue */
    protected $phraseGroupRegister;
    
    /** @var $phraseGroupSearch RecordValue */
    protected $phraseGroupSearch;
    
    /** @var $phraseGroupShowThread RecordValue */
    protected $phraseGroupShowThread;
    
    /** @var $phraseGroupPostBit RecordValue */
    protected $phraseGroupPostBit;
    
    /** @var $phraseGroupForumDisplay RecordValue */
    protected $phraseGroupForumDisplay;
    
    /** @var $phraseGroupMessaging RecordValue */
    protected $phraseGroupMessaging;
    
    /** @var $phraseGroupInlineMod RecordValue */
    protected $phraseGroupInlineMod;
    
    /** @var $phraseGroupPlugins RecordValue */
    protected $phraseGroupPlugins;
    
    /** @var $phraseGroupCProfileField RecordValue */
    protected $phraseGroupCProfileField;
    
    /** @var $phraseGroupReputationLevel RecordValue */
    protected $phraseGroupReputationLevel;
    
    /** @var $phraseGroupInfraction RecordValue */
    protected $phraseGroupInfraction;
    
    /** @var $phraseGroupInfractionLevel RecordValue */
    protected $phraseGroupInfractionLevel;
    
    /** @var $phraseGroupPrefix RecordValue */
    protected $phraseGroupPrefix;
    
    /** @var $phraseGroupSocialGroups RecordValue */
    protected $phraseGroupSocialGroups;
    
    /** @var $phraseGroupPrefixAdmin RecordValue */
    protected $phraseGroupPrefixAdmin;
    
    /** @var $phraseGroupNotice RecordValue */
    protected $phraseGroupNotice;
    
    /** @var $phraseGroupAlbum RecordValue */
    protected $phraseGroupAlbum;
    
    /** @var $phraseGroupProjectTools RecordValue */
    protected $phraseGroupProjectTools;
    
    /** @var $phraseGroupProjectToolsAdmin RecordValue */
    protected $phraseGroupProjectToolsAdmin;

    public function __construct() {
		$this->languageId = new RecordValue();
		$this->title = new RecordValue();
		$this->userSelect = new RecordValue();
		$this->options = new RecordValue();
		$this->languageCode = new RecordValue();
		$this->charset = new RecordValue();
		$this->imagesOverride = new RecordValue();
		$this->dateOverride = new RecordValue();
		$this->timeOverride = new RecordValue();
		$this->registeredDateOverride = new RecordValue();
		$this->calFormat1Override = new RecordValue();
		$this->calFormat2Override = new RecordValue();
		$this->logDateOverride = new RecordValue();
		$this->locale = new RecordValue();
		$this->decimalSep = new RecordValue();
		$this->thousandSep = new RecordValue();
		$this->phraseGroupGlobal = new RecordValue();
		$this->phraseGroupOpGlobal = new RecordValue();
		$this->phraseGroupCpPermission = new RecordValue();
		$this->phraseGroupForum = new RecordValue();
		$this->phraseGroupCalendar = new RecordValue();
		$this->phraseGroupAttachmentImage = new RecordValue();
		$this->phrasegGroupStyle = new RecordValue();
		$this->phraseGroupLogging = new RecordValue();
		$this->phraseGroupCpHome = new RecordValue();
		$this->phraseGroupPromotion = new RecordValue();
		$this->phraseGroupUser = new RecordValue();
		$this->phraseGroupHelpFaq = new RecordValue();
		$this->phraseGroupSql = new RecordValue();
		$this->phraseGroupSubscription = new RecordValue();
		$this->phraseGroupLanguage = new RecordValue();
		$this->phraseGroupBBCode = new RecordValue();
		$this->phraseGroupStats = new RecordValue();
		$this->phraseGroupDiagnostic = new RecordValue();
		$this->phraseGroupMaintenance = new RecordValue();
		$this->phraseGroupProfileField = new RecordValue();
		$this->phraseGroupThread = new RecordValue();
		$this->phraseGroupTimeZone = new RecordValue();
		$this->phraseGroupBanning = new RecordValue();
		$this->phraseGroupReputation = new RecordValue();
		$this->phraseGroupWol = new RecordValue();
		$this->phraseGroupThreadManage = new RecordValue();
		$this->phraseGroupPm = new RecordValue();
		$this->phraseGroupCpUser = new RecordValue();
		$this->phraseGroupAccessMask = new RecordValue();
		$this->phraseGroupCron = new RecordValue();
		$this->phrasegGoupModerator = new RecordValue();
		$this->phraseGroupCpOption = new RecordValue();
		$this->phraseGroupCpRank = new RecordValue();
		$this->phraseGroupCpUserGroup = new RecordValue();
		$this->phraseGroupHoliday = new RecordValue();
		$this->phraseGroupPosting = new RecordValue();
		$this->phraseGroupPoll = new RecordValue();
		$this->phraseGroupFrontHelp = new RecordValue();
		$this->phraseGroupRegister = new RecordValue();
		$this->phraseGroupSearch = new RecordValue();
		$this->phraseGroupShowThread = new RecordValue();
		$this->phraseGroupPostBit = new RecordValue();
		$this->phraseGroupForumDisplay = new RecordValue();
		$this->phraseGroupMessaging = new RecordValue();
		$this->phraseGroupInlineMod = new RecordValue();
		$this->phraseGroupPlugins = new RecordValue();
		$this->phraseGroupCProfileField = new RecordValue();
		$this->phraseGroupReputationLevel = new RecordValue();
		$this->phraseGroupInfraction = new RecordValue();
		$this->phraseGroupInfractionLevel = new RecordValue();
		$this->phraseGroupPrefix = new RecordValue();
		$this->phraseGroupSocialGroups = new RecordValue();
		$this->phraseGroupPrefixAdmin = new RecordValue();
		$this->phraseGroupNotice = new RecordValue();
		$this->phraseGroupAlbum = new RecordValue();
		$this->phraseGroupProjectTools = new RecordValue();
		$this->phraseGroupProjectToolsAdmin = new RecordValue();
    }
    
    public function hasLanguageId(): bool
    {
        return $this->languageId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLanguageId() : int
    {
        return $this->languageId->getValue();
    }

    /**
     * @param int $languageId
     */
    public function setLanguageId(int $languageId)
    {
        $this->languageId->setChanged(true);
        $this->languageId->setValue($languageId);
    }
    
    public function hasTitle(): bool
    {
        return $this->title->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title->getValue();
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title->setChanged(true);
        $this->title->setValue($title);
    }
    
    public function hasUserSelect(): bool
    {
        return $this->userSelect->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserSelect() : int
    {
        return $this->userSelect->getValue();
    }

    /**
     * @param int $userSelect
     */
    public function setUserSelect(int $userSelect)
    {
        $this->userSelect->setChanged(true);
        $this->userSelect->setValue($userSelect);
    }
    
    public function hasOptions(): bool
    {
        return $this->options->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getOptions() : int
    {
        return $this->options->getValue();
    }

    /**
     * @param int $options
     */
    public function setOptions(int $options)
    {
        $this->options->setChanged(true);
        $this->options->setValue($options);
    }
    
    public function hasLanguageCode(): bool
    {
        return $this->languageCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLanguageCode() : string
    {
        return $this->languageCode->getValue();
    }

    /**
     * @param string $languageCode
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->languageCode->setChanged(true);
        $this->languageCode->setValue($languageCode);
    }
    
    public function hasCharset(): bool
    {
        return $this->charset->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCharset() : string
    {
        return $this->charset->getValue();
    }

    /**
     * @param string $charset
     */
    public function setCharset(string $charset)
    {
        $this->charset->setChanged(true);
        $this->charset->setValue($charset);
    }
    
    public function hasImagesOverride(): bool
    {
        return $this->imagesOverride->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getImagesOverride() : string
    {
        return $this->imagesOverride->getValue();
    }

    /**
     * @param string $imagesOverride
     */
    public function setImagesOverride(string $imagesOverride)
    {
        $this->imagesOverride->setChanged(true);
        $this->imagesOverride->setValue($imagesOverride);
    }
    
    public function hasDateOverride(): bool
    {
        return $this->dateOverride->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDateOverride() : string
    {
        return $this->dateOverride->getValue();
    }

    /**
     * @param string $dateOverride
     */
    public function setDateOverride(string $dateOverride)
    {
        $this->dateOverride->setChanged(true);
        $this->dateOverride->setValue($dateOverride);
    }
    
    public function hasTimeOverride(): bool
    {
        return $this->timeOverride->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTimeOverride() : string
    {
        return $this->timeOverride->getValue();
    }

    /**
     * @param string $timeOverride
     */
    public function setTimeOverride(string $timeOverride)
    {
        $this->timeOverride->setChanged(true);
        $this->timeOverride->setValue($timeOverride);
    }
    
    public function hasRegisteredDateOverride(): bool
    {
        return $this->registeredDateOverride->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getRegisteredDateOverride() : string
    {
        return $this->registeredDateOverride->getValue();
    }

    /**
     * @param string $registeredDateOverride
     */
    public function setRegisteredDateOverride(string $registeredDateOverride)
    {
        $this->registeredDateOverride->setChanged(true);
        $this->registeredDateOverride->setValue($registeredDateOverride);
    }
    
    public function hasCalFormat1Override(): bool
    {
        return $this->calFormat1Override->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCalFormat1Override() : string
    {
        return $this->calFormat1Override->getValue();
    }

    /**
     * @param string $calFormat1Override
     */
    public function setCalFormat1Override(string $calFormat1Override)
    {
        $this->calFormat1Override->setChanged(true);
        $this->calFormat1Override->setValue($calFormat1Override);
    }
    
    public function hasCalFormat2Override(): bool
    {
        return $this->calFormat2Override->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCalFormat2Override() : string
    {
        return $this->calFormat2Override->getValue();
    }

    /**
     * @param string $calFormat2Override
     */
    public function setCalFormat2Override(string $calFormat2Override)
    {
        $this->calFormat2Override->setChanged(true);
        $this->calFormat2Override->setValue($calFormat2Override);
    }
    
    public function hasLogDateOverride(): bool
    {
        return $this->logDateOverride->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLogDateOverride() : string
    {
        return $this->logDateOverride->getValue();
    }

    /**
     * @param string $logDateOverride
     */
    public function setLogDateOverride(string $logDateOverride)
    {
        $this->logDateOverride->setChanged(true);
        $this->logDateOverride->setValue($logDateOverride);
    }
    
    public function hasLocale(): bool
    {
        return $this->locale->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale->getValue();
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale)
    {
        $this->locale->setChanged(true);
        $this->locale->setValue($locale);
    }
    
    public function hasDecimalSep(): bool
    {
        return $this->decimalSep->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDecimalSep() : string
    {
        return $this->decimalSep->getValue();
    }

    /**
     * @param string $decimalSep
     */
    public function setDecimalSep(string $decimalSep)
    {
        $this->decimalSep->setChanged(true);
        $this->decimalSep->setValue($decimalSep);
    }
    
    public function hasThousandSep(): bool
    {
        return $this->thousandSep->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getThousandSep() : string
    {
        return $this->thousandSep->getValue();
    }

    /**
     * @param string $thousandSep
     */
    public function setThousandSep(string $thousandSep)
    {
        $this->thousandSep->setChanged(true);
        $this->thousandSep->setValue($thousandSep);
    }
    
    public function hasPhraseGroupGlobal(): bool
    {
        return $this->phraseGroupGlobal->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupGlobal() : string
    {
        return $this->phraseGroupGlobal->getValue();
    }

    /**
     * @param string $phraseGroupGlobal
     */
    public function setPhraseGroupGlobal(string $phraseGroupGlobal)
    {
        $this->phraseGroupGlobal->setChanged(true);
        $this->phraseGroupGlobal->setValue($phraseGroupGlobal);
    }
    
    public function hasPhraseGroupOpGlobal(): bool
    {
        return $this->phraseGroupOpGlobal->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupOpGlobal() : string
    {
        return $this->phraseGroupOpGlobal->getValue();
    }

    /**
     * @param string $phraseGroupOpGlobal
     */
    public function setPhraseGroupOpGlobal(string $phraseGroupOpGlobal)
    {
        $this->phraseGroupOpGlobal->setChanged(true);
        $this->phraseGroupOpGlobal->setValue($phraseGroupOpGlobal);
    }
    
    public function hasPhraseGroupCpPermission(): bool
    {
        return $this->phraseGroupCpPermission->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpPermission() : string
    {
        return $this->phraseGroupCpPermission->getValue();
    }

    /**
     * @param string $phraseGroupCpPermission
     */
    public function setPhraseGroupCpPermission(string $phraseGroupCpPermission)
    {
        $this->phraseGroupCpPermission->setChanged(true);
        $this->phraseGroupCpPermission->setValue($phraseGroupCpPermission);
    }
    
    public function hasPhraseGroupForum(): bool
    {
        return $this->phraseGroupForum->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupForum() : string
    {
        return $this->phraseGroupForum->getValue();
    }

    /**
     * @param string $phraseGroupForum
     */
    public function setPhraseGroupForum(string $phraseGroupForum)
    {
        $this->phraseGroupForum->setChanged(true);
        $this->phraseGroupForum->setValue($phraseGroupForum);
    }
    
    public function hasPhraseGroupCalendar(): bool
    {
        return $this->phraseGroupCalendar->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCalendar() : string
    {
        return $this->phraseGroupCalendar->getValue();
    }

    /**
     * @param string $phraseGroupCalendar
     */
    public function setPhraseGroupCalendar(string $phraseGroupCalendar)
    {
        $this->phraseGroupCalendar->setChanged(true);
        $this->phraseGroupCalendar->setValue($phraseGroupCalendar);
    }
    
    public function hasPhraseGroupAttachmentImage(): bool
    {
        return $this->phraseGroupAttachmentImage->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupAttachmentImage() : string
    {
        return $this->phraseGroupAttachmentImage->getValue();
    }

    /**
     * @param string $phraseGroupAttachmentImage
     */
    public function setPhraseGroupAttachmentImage(string $phraseGroupAttachmentImage)
    {
        $this->phraseGroupAttachmentImage->setChanged(true);
        $this->phraseGroupAttachmentImage->setValue($phraseGroupAttachmentImage);
    }
    
    public function hasPhrasegGroupStyle(): bool
    {
        return $this->phrasegGroupStyle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhrasegGroupStyle() : string
    {
        return $this->phrasegGroupStyle->getValue();
    }

    /**
     * @param string $phrasegGroupStyle
     */
    public function setPhrasegGroupStyle(string $phrasegGroupStyle)
    {
        $this->phrasegGroupStyle->setChanged(true);
        $this->phrasegGroupStyle->setValue($phrasegGroupStyle);
    }
    
    public function hasPhraseGroupLogging(): bool
    {
        return $this->phraseGroupLogging->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupLogging() : string
    {
        return $this->phraseGroupLogging->getValue();
    }

    /**
     * @param string $phraseGroupLogging
     */
    public function setPhraseGroupLogging(string $phraseGroupLogging)
    {
        $this->phraseGroupLogging->setChanged(true);
        $this->phraseGroupLogging->setValue($phraseGroupLogging);
    }
    
    public function hasPhraseGroupCpHome(): bool
    {
        return $this->phraseGroupCpHome->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpHome() : string
    {
        return $this->phraseGroupCpHome->getValue();
    }

    /**
     * @param string $phraseGroupCpHome
     */
    public function setPhraseGroupCpHome(string $phraseGroupCpHome)
    {
        $this->phraseGroupCpHome->setChanged(true);
        $this->phraseGroupCpHome->setValue($phraseGroupCpHome);
    }
    
    public function hasPhraseGroupPromotion(): bool
    {
        return $this->phraseGroupPromotion->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPromotion() : string
    {
        return $this->phraseGroupPromotion->getValue();
    }

    /**
     * @param string $phraseGroupPromotion
     */
    public function setPhraseGroupPromotion(string $phraseGroupPromotion)
    {
        $this->phraseGroupPromotion->setChanged(true);
        $this->phraseGroupPromotion->setValue($phraseGroupPromotion);
    }
    
    public function hasPhraseGroupUser(): bool
    {
        return $this->phraseGroupUser->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupUser() : string
    {
        return $this->phraseGroupUser->getValue();
    }

    /**
     * @param string $phraseGroupUser
     */
    public function setPhraseGroupUser(string $phraseGroupUser)
    {
        $this->phraseGroupUser->setChanged(true);
        $this->phraseGroupUser->setValue($phraseGroupUser);
    }
    
    public function hasPhraseGroupHelpFaq(): bool
    {
        return $this->phraseGroupHelpFaq->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupHelpFaq() : string
    {
        return $this->phraseGroupHelpFaq->getValue();
    }

    /**
     * @param string $phraseGroupHelpFaq
     */
    public function setPhraseGroupHelpFaq(string $phraseGroupHelpFaq)
    {
        $this->phraseGroupHelpFaq->setChanged(true);
        $this->phraseGroupHelpFaq->setValue($phraseGroupHelpFaq);
    }
    
    public function hasPhraseGroupSql(): bool
    {
        return $this->phraseGroupSql->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSql() : string
    {
        return $this->phraseGroupSql->getValue();
    }

    /**
     * @param string $phraseGroupSql
     */
    public function setPhraseGroupSql(string $phraseGroupSql)
    {
        $this->phraseGroupSql->setChanged(true);
        $this->phraseGroupSql->setValue($phraseGroupSql);
    }
    
    public function hasPhraseGroupSubscription(): bool
    {
        return $this->phraseGroupSubscription->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSubscription() : string
    {
        return $this->phraseGroupSubscription->getValue();
    }

    /**
     * @param string $phraseGroupSubscription
     */
    public function setPhraseGroupSubscription(string $phraseGroupSubscription)
    {
        $this->phraseGroupSubscription->setChanged(true);
        $this->phraseGroupSubscription->setValue($phraseGroupSubscription);
    }
    
    public function hasPhraseGroupLanguage(): bool
    {
        return $this->phraseGroupLanguage->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupLanguage() : string
    {
        return $this->phraseGroupLanguage->getValue();
    }

    /**
     * @param string $phraseGroupLanguage
     */
    public function setPhraseGroupLanguage(string $phraseGroupLanguage)
    {
        $this->phraseGroupLanguage->setChanged(true);
        $this->phraseGroupLanguage->setValue($phraseGroupLanguage);
    }
    
    public function hasPhraseGroupBBCode(): bool
    {
        return $this->phraseGroupBBCode->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupBBCode() : string
    {
        return $this->phraseGroupBBCode->getValue();
    }

    /**
     * @param string $phraseGroupBBCode
     */
    public function setPhraseGroupBBCode(string $phraseGroupBBCode)
    {
        $this->phraseGroupBBCode->setChanged(true);
        $this->phraseGroupBBCode->setValue($phraseGroupBBCode);
    }
    
    public function hasPhraseGroupStats(): bool
    {
        return $this->phraseGroupStats->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupStats() : string
    {
        return $this->phraseGroupStats->getValue();
    }

    /**
     * @param string $phraseGroupStats
     */
    public function setPhraseGroupStats(string $phraseGroupStats)
    {
        $this->phraseGroupStats->setChanged(true);
        $this->phraseGroupStats->setValue($phraseGroupStats);
    }
    
    public function hasPhraseGroupDiagnostic(): bool
    {
        return $this->phraseGroupDiagnostic->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupDiagnostic() : string
    {
        return $this->phraseGroupDiagnostic->getValue();
    }

    /**
     * @param string $phraseGroupDiagnostic
     */
    public function setPhraseGroupDiagnostic(string $phraseGroupDiagnostic)
    {
        $this->phraseGroupDiagnostic->setChanged(true);
        $this->phraseGroupDiagnostic->setValue($phraseGroupDiagnostic);
    }
    
    public function hasPhraseGroupMaintenance(): bool
    {
        return $this->phraseGroupMaintenance->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupMaintenance() : string
    {
        return $this->phraseGroupMaintenance->getValue();
    }

    /**
     * @param string $phraseGroupMaintenance
     */
    public function setPhraseGroupMaintenance(string $phraseGroupMaintenance)
    {
        $this->phraseGroupMaintenance->setChanged(true);
        $this->phraseGroupMaintenance->setValue($phraseGroupMaintenance);
    }
    
    public function hasPhraseGroupProfileField(): bool
    {
        return $this->phraseGroupProfileField->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProfileField() : string
    {
        return $this->phraseGroupProfileField->getValue();
    }

    /**
     * @param string $phraseGroupProfileField
     */
    public function setPhraseGroupProfileField(string $phraseGroupProfileField)
    {
        $this->phraseGroupProfileField->setChanged(true);
        $this->phraseGroupProfileField->setValue($phraseGroupProfileField);
    }
    
    public function hasPhraseGroupThread(): bool
    {
        return $this->phraseGroupThread->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupThread() : string
    {
        return $this->phraseGroupThread->getValue();
    }

    /**
     * @param string $phraseGroupThread
     */
    public function setPhraseGroupThread(string $phraseGroupThread)
    {
        $this->phraseGroupThread->setChanged(true);
        $this->phraseGroupThread->setValue($phraseGroupThread);
    }
    
    public function hasPhraseGroupTimeZone(): bool
    {
        return $this->phraseGroupTimeZone->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupTimeZone() : string
    {
        return $this->phraseGroupTimeZone->getValue();
    }

    /**
     * @param string $phraseGroupTimeZone
     */
    public function setPhraseGroupTimeZone(string $phraseGroupTimeZone)
    {
        $this->phraseGroupTimeZone->setChanged(true);
        $this->phraseGroupTimeZone->setValue($phraseGroupTimeZone);
    }
    
    public function hasPhraseGroupBanning(): bool
    {
        return $this->phraseGroupBanning->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupBanning() : string
    {
        return $this->phraseGroupBanning->getValue();
    }

    /**
     * @param string $phraseGroupBanning
     */
    public function setPhraseGroupBanning(string $phraseGroupBanning)
    {
        $this->phraseGroupBanning->setChanged(true);
        $this->phraseGroupBanning->setValue($phraseGroupBanning);
    }
    
    public function hasPhraseGroupReputation(): bool
    {
        return $this->phraseGroupReputation->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupReputation() : string
    {
        return $this->phraseGroupReputation->getValue();
    }

    /**
     * @param string $phraseGroupReputation
     */
    public function setPhraseGroupReputation(string $phraseGroupReputation)
    {
        $this->phraseGroupReputation->setChanged(true);
        $this->phraseGroupReputation->setValue($phraseGroupReputation);
    }
    
    public function hasPhraseGroupWol(): bool
    {
        return $this->phraseGroupWol->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupWol() : string
    {
        return $this->phraseGroupWol->getValue();
    }

    /**
     * @param string $phraseGroupWol
     */
    public function setPhraseGroupWol(string $phraseGroupWol)
    {
        $this->phraseGroupWol->setChanged(true);
        $this->phraseGroupWol->setValue($phraseGroupWol);
    }
    
    public function hasPhraseGroupThreadManage(): bool
    {
        return $this->phraseGroupThreadManage->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupThreadManage() : string
    {
        return $this->phraseGroupThreadManage->getValue();
    }

    /**
     * @param string $phraseGroupThreadManage
     */
    public function setPhraseGroupThreadManage(string $phraseGroupThreadManage)
    {
        $this->phraseGroupThreadManage->setChanged(true);
        $this->phraseGroupThreadManage->setValue($phraseGroupThreadManage);
    }
    
    public function hasPhraseGroupPm(): bool
    {
        return $this->phraseGroupPm->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPm() : string
    {
        return $this->phraseGroupPm->getValue();
    }

    /**
     * @param string $phraseGroupPm
     */
    public function setPhraseGroupPm(string $phraseGroupPm)
    {
        $this->phraseGroupPm->setChanged(true);
        $this->phraseGroupPm->setValue($phraseGroupPm);
    }
    
    public function hasPhraseGroupCpUser(): bool
    {
        return $this->phraseGroupCpUser->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpUser() : string
    {
        return $this->phraseGroupCpUser->getValue();
    }

    /**
     * @param string $phraseGroupCpUser
     */
    public function setPhraseGroupCpUser(string $phraseGroupCpUser)
    {
        $this->phraseGroupCpUser->setChanged(true);
        $this->phraseGroupCpUser->setValue($phraseGroupCpUser);
    }
    
    public function hasPhraseGroupAccessMask(): bool
    {
        return $this->phraseGroupAccessMask->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupAccessMask() : string
    {
        return $this->phraseGroupAccessMask->getValue();
    }

    /**
     * @param string $phraseGroupAccessMask
     */
    public function setPhraseGroupAccessMask(string $phraseGroupAccessMask)
    {
        $this->phraseGroupAccessMask->setChanged(true);
        $this->phraseGroupAccessMask->setValue($phraseGroupAccessMask);
    }
    
    public function hasPhraseGroupCron(): bool
    {
        return $this->phraseGroupCron->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCron() : string
    {
        return $this->phraseGroupCron->getValue();
    }

    /**
     * @param string $phraseGroupCron
     */
    public function setPhraseGroupCron(string $phraseGroupCron)
    {
        $this->phraseGroupCron->setChanged(true);
        $this->phraseGroupCron->setValue($phraseGroupCron);
    }
    
    public function hasPhrasegGoupModerator(): bool
    {
        return $this->phrasegGoupModerator->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhrasegGoupModerator() : string
    {
        return $this->phrasegGoupModerator->getValue();
    }

    /**
     * @param string $phrasegGoupModerator
     */
    public function setPhrasegGoupModerator(string $phrasegGoupModerator)
    {
        $this->phrasegGoupModerator->setChanged(true);
        $this->phrasegGoupModerator->setValue($phrasegGoupModerator);
    }
    
    public function hasPhraseGroupCpOption(): bool
    {
        return $this->phraseGroupCpOption->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpOption() : string
    {
        return $this->phraseGroupCpOption->getValue();
    }

    /**
     * @param string $phraseGroupCpOption
     */
    public function setPhraseGroupCpOption(string $phraseGroupCpOption)
    {
        $this->phraseGroupCpOption->setChanged(true);
        $this->phraseGroupCpOption->setValue($phraseGroupCpOption);
    }
    
    public function hasPhraseGroupCpRank(): bool
    {
        return $this->phraseGroupCpRank->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpRank() : string
    {
        return $this->phraseGroupCpRank->getValue();
    }

    /**
     * @param string $phraseGroupCpRank
     */
    public function setPhraseGroupCpRank(string $phraseGroupCpRank)
    {
        $this->phraseGroupCpRank->setChanged(true);
        $this->phraseGroupCpRank->setValue($phraseGroupCpRank);
    }
    
    public function hasPhraseGroupCpUserGroup(): bool
    {
        return $this->phraseGroupCpUserGroup->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupCpUserGroup() : string
    {
        return $this->phraseGroupCpUserGroup->getValue();
    }

    /**
     * @param string $phraseGroupCpUserGroup
     */
    public function setPhraseGroupCpUserGroup(string $phraseGroupCpUserGroup)
    {
        $this->phraseGroupCpUserGroup->setChanged(true);
        $this->phraseGroupCpUserGroup->setValue($phraseGroupCpUserGroup);
    }
    
    public function hasPhraseGroupHoliday(): bool
    {
        return $this->phraseGroupHoliday->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupHoliday() : string
    {
        return $this->phraseGroupHoliday->getValue();
    }

    /**
     * @param string $phraseGroupHoliday
     */
    public function setPhraseGroupHoliday(string $phraseGroupHoliday)
    {
        $this->phraseGroupHoliday->setChanged(true);
        $this->phraseGroupHoliday->setValue($phraseGroupHoliday);
    }
    
    public function hasPhraseGroupPosting(): bool
    {
        return $this->phraseGroupPosting->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPosting() : string
    {
        return $this->phraseGroupPosting->getValue();
    }

    /**
     * @param string $phraseGroupPosting
     */
    public function setPhraseGroupPosting(string $phraseGroupPosting)
    {
        $this->phraseGroupPosting->setChanged(true);
        $this->phraseGroupPosting->setValue($phraseGroupPosting);
    }
    
    public function hasPhraseGroupPoll(): bool
    {
        return $this->phraseGroupPoll->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPoll() : string
    {
        return $this->phraseGroupPoll->getValue();
    }

    /**
     * @param string $phraseGroupPoll
     */
    public function setPhraseGroupPoll(string $phraseGroupPoll)
    {
        $this->phraseGroupPoll->setChanged(true);
        $this->phraseGroupPoll->setValue($phraseGroupPoll);
    }
    
    public function hasPhraseGroupFrontHelp(): bool
    {
        return $this->phraseGroupFrontHelp->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupFrontHelp() : string
    {
        return $this->phraseGroupFrontHelp->getValue();
    }

    /**
     * @param string $phraseGroupFrontHelp
     */
    public function setPhraseGroupFrontHelp(string $phraseGroupFrontHelp)
    {
        $this->phraseGroupFrontHelp->setChanged(true);
        $this->phraseGroupFrontHelp->setValue($phraseGroupFrontHelp);
    }
    
    public function hasPhraseGroupRegister(): bool
    {
        return $this->phraseGroupRegister->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupRegister() : string
    {
        return $this->phraseGroupRegister->getValue();
    }

    /**
     * @param string $phraseGroupRegister
     */
    public function setPhraseGroupRegister(string $phraseGroupRegister)
    {
        $this->phraseGroupRegister->setChanged(true);
        $this->phraseGroupRegister->setValue($phraseGroupRegister);
    }
    
    public function hasPhraseGroupSearch(): bool
    {
        return $this->phraseGroupSearch->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupSearch() : string
    {
        return $this->phraseGroupSearch->getValue();
    }

    /**
     * @param string $phraseGroupSearch
     */
    public function setPhraseGroupSearch(string $phraseGroupSearch)
    {
        $this->phraseGroupSearch->setChanged(true);
        $this->phraseGroupSearch->setValue($phraseGroupSearch);
    }
    
    public function hasPhraseGroupShowThread(): bool
    {
        return $this->phraseGroupShowThread->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupShowThread() : string
    {
        return $this->phraseGroupShowThread->getValue();
    }

    /**
     * @param string $phraseGroupShowThread
     */
    public function setPhraseGroupShowThread(string $phraseGroupShowThread)
    {
        $this->phraseGroupShowThread->setChanged(true);
        $this->phraseGroupShowThread->setValue($phraseGroupShowThread);
    }
    
    public function hasPhraseGroupPostBit(): bool
    {
        return $this->phraseGroupPostBit->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPostBit() : string
    {
        return $this->phraseGroupPostBit->getValue();
    }

    /**
     * @param string $phraseGroupPostBit
     */
    public function setPhraseGroupPostBit(string $phraseGroupPostBit)
    {
        $this->phraseGroupPostBit->setChanged(true);
        $this->phraseGroupPostBit->setValue($phraseGroupPostBit);
    }
    
    public function hasPhraseGroupForumDisplay(): bool
    {
        return $this->phraseGroupForumDisplay->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupForumDisplay() : string
    {
        return $this->phraseGroupForumDisplay->getValue();
    }

    /**
     * @param string $phraseGroupForumDisplay
     */
    public function setPhraseGroupForumDisplay(string $phraseGroupForumDisplay)
    {
        $this->phraseGroupForumDisplay->setChanged(true);
        $this->phraseGroupForumDisplay->setValue($phraseGroupForumDisplay);
    }
    
    public function hasPhraseGroupMessaging(): bool
    {
        return $this->phraseGroupMessaging->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupMessaging() : string
    {
        return $this->phraseGroupMessaging->getValue();
    }

    /**
     * @param string $phraseGroupMessaging
     */
    public function setPhraseGroupMessaging(string $phraseGroupMessaging)
    {
        $this->phraseGroupMessaging->setChanged(true);
        $this->phraseGroupMessaging->setValue($phraseGroupMessaging);
    }
    
    public function hasPhraseGroupInlineMod(): bool
    {
        return $this->phraseGroupInlineMod->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupInlineMod() : string
    {
        return $this->phraseGroupInlineMod->getValue();
    }

    /**
     * @param string $phraseGroupInlineMod
     */
    public function setPhraseGroupInlineMod(string $phraseGroupInlineMod)
    {
        $this->phraseGroupInlineMod->setChanged(true);
        $this->phraseGroupInlineMod->setValue($phraseGroupInlineMod);
    }
    
    public function hasPhraseGroupPlugins(): bool
    {
        return $this->phraseGroupPlugins->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupPlugins() : string
    {
        return $this->phraseGroupPlugins->getValue();
    }

    /**
     * @param string $phraseGroupPlugins
     */
    public function setPhraseGroupPlugins(string $phraseGroupPlugins)
    {
        $this->phraseGroupPlugins->setChanged(true);
        $this->phraseGroupPlugins->setValue($phraseGroupPlugins);
    }
    
    public function hasPhraseGroupCProfileField(): bool
    {
        return $this->phraseGroupCProfileField->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupCProfileField() : ?string
    {
        return $this->phraseGroupCProfileField->getValue();
    }

    /**
     * @param string|null $phraseGroupCProfileField
     */
    public function setPhraseGroupCProfileField(?string $phraseGroupCProfileField)
    {
        $this->phraseGroupCProfileField->setChanged(true);
        $this->phraseGroupCProfileField->setValue($phraseGroupCProfileField);
    }
    
    public function hasPhraseGroupReputationLevel(): bool
    {
        return $this->phraseGroupReputationLevel->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupReputationLevel() : ?string
    {
        return $this->phraseGroupReputationLevel->getValue();
    }

    /**
     * @param string|null $phraseGroupReputationLevel
     */
    public function setPhraseGroupReputationLevel(?string $phraseGroupReputationLevel)
    {
        $this->phraseGroupReputationLevel->setChanged(true);
        $this->phraseGroupReputationLevel->setValue($phraseGroupReputationLevel);
    }
    
    public function hasPhraseGroupInfraction(): bool
    {
        return $this->phraseGroupInfraction->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupInfraction() : ?string
    {
        return $this->phraseGroupInfraction->getValue();
    }

    /**
     * @param string|null $phraseGroupInfraction
     */
    public function setPhraseGroupInfraction(?string $phraseGroupInfraction)
    {
        $this->phraseGroupInfraction->setChanged(true);
        $this->phraseGroupInfraction->setValue($phraseGroupInfraction);
    }
    
    public function hasPhraseGroupInfractionLevel(): bool
    {
        return $this->phraseGroupInfractionLevel->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupInfractionLevel() : ?string
    {
        return $this->phraseGroupInfractionLevel->getValue();
    }

    /**
     * @param string|null $phraseGroupInfractionLevel
     */
    public function setPhraseGroupInfractionLevel(?string $phraseGroupInfractionLevel)
    {
        $this->phraseGroupInfractionLevel->setChanged(true);
        $this->phraseGroupInfractionLevel->setValue($phraseGroupInfractionLevel);
    }
    
    public function hasPhraseGroupPrefix(): bool
    {
        return $this->phraseGroupPrefix->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupPrefix() : ?string
    {
        return $this->phraseGroupPrefix->getValue();
    }

    /**
     * @param string|null $phraseGroupPrefix
     */
    public function setPhraseGroupPrefix(?string $phraseGroupPrefix)
    {
        $this->phraseGroupPrefix->setChanged(true);
        $this->phraseGroupPrefix->setValue($phraseGroupPrefix);
    }
    
    public function hasPhraseGroupSocialGroups(): bool
    {
        return $this->phraseGroupSocialGroups->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupSocialGroups() : ?string
    {
        return $this->phraseGroupSocialGroups->getValue();
    }

    /**
     * @param string|null $phraseGroupSocialGroups
     */
    public function setPhraseGroupSocialGroups(?string $phraseGroupSocialGroups)
    {
        $this->phraseGroupSocialGroups->setChanged(true);
        $this->phraseGroupSocialGroups->setValue($phraseGroupSocialGroups);
    }
    
    public function hasPhraseGroupPrefixAdmin(): bool
    {
        return $this->phraseGroupPrefixAdmin->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupPrefixAdmin() : ?string
    {
        return $this->phraseGroupPrefixAdmin->getValue();
    }

    /**
     * @param string|null $phraseGroupPrefixAdmin
     */
    public function setPhraseGroupPrefixAdmin(?string $phraseGroupPrefixAdmin)
    {
        $this->phraseGroupPrefixAdmin->setChanged(true);
        $this->phraseGroupPrefixAdmin->setValue($phraseGroupPrefixAdmin);
    }
    
    public function hasPhraseGroupNotice(): bool
    {
        return $this->phraseGroupNotice->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupNotice() : ?string
    {
        return $this->phraseGroupNotice->getValue();
    }

    /**
     * @param string|null $phraseGroupNotice
     */
    public function setPhraseGroupNotice(?string $phraseGroupNotice)
    {
        $this->phraseGroupNotice->setChanged(true);
        $this->phraseGroupNotice->setValue($phraseGroupNotice);
    }
    
    public function hasPhraseGroupAlbum(): bool
    {
        return $this->phraseGroupAlbum->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getPhraseGroupAlbum() : ?string
    {
        return $this->phraseGroupAlbum->getValue();
    }

    /**
     * @param string|null $phraseGroupAlbum
     */
    public function setPhraseGroupAlbum(?string $phraseGroupAlbum)
    {
        $this->phraseGroupAlbum->setChanged(true);
        $this->phraseGroupAlbum->setValue($phraseGroupAlbum);
    }
    
    public function hasPhraseGroupProjectTools(): bool
    {
        return $this->phraseGroupProjectTools->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProjectTools() : string
    {
        return $this->phraseGroupProjectTools->getValue();
    }

    /**
     * @param string $phraseGroupProjectTools
     */
    public function setPhraseGroupProjectTools(string $phraseGroupProjectTools)
    {
        $this->phraseGroupProjectTools->setChanged(true);
        $this->phraseGroupProjectTools->setValue($phraseGroupProjectTools);
    }
    
    public function hasPhraseGroupProjectToolsAdmin(): bool
    {
        return $this->phraseGroupProjectToolsAdmin->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPhraseGroupProjectToolsAdmin() : string
    {
        return $this->phraseGroupProjectToolsAdmin->getValue();
    }

    /**
     * @param string $phraseGroupProjectToolsAdmin
     */
    public function setPhraseGroupProjectToolsAdmin(string $phraseGroupProjectToolsAdmin)
    {
        $this->phraseGroupProjectToolsAdmin->setChanged(true);
        $this->phraseGroupProjectToolsAdmin->setValue($phraseGroupProjectToolsAdmin);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): Language
    {
        return new Language();
    }
}