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

class GeneratedUserGroupRecord implements Record {
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $title RecordValue */
    protected $title;
    
    /** @var $description RecordValue */
    protected $description;
    
    /** @var $userTitle RecordValue */
    protected $userTitle;
    
    /** @var $passwordExpires RecordValue */
    protected $passwordExpires;
    
    /** @var $passwordHistory RecordValue */
    protected $passwordHistory;
    
    /** @var $pmQuota RecordValue */
    protected $pmQuota;
    
    /** @var $pmSendmax RecordValue */
    protected $pmSendmax;
    
    /** @var $openTag RecordValue */
    protected $openTag;
    
    /** @var $closeTag RecordValue */
    protected $closeTag;
    
    /** @var $canOverride RecordValue */
    protected $canOverride;
    
    /** @var $isPublicGroup RecordValue */
    protected $isPublicGroup;
    
    /** @var $forumPermissions RecordValue */
    protected $forumPermissions;
    
    /** @var $pmPermissions RecordValue */
    protected $pmPermissions;
    
    /** @var $calendarPermissions RecordValue */
    protected $calendarPermissions;
    
    /** @var $wolPermissions RecordValue */
    protected $wolPermissions;
    
    /** @var $adminPermissions RecordValue */
    protected $adminPermissions;
    
    /** @var $genericPermissions RecordValue */
    protected $genericPermissions;
    
    /** @var $genericOptions RecordValue */
    protected $genericOptions;
    
    /** @var $attachLimit RecordValue */
    protected $attachLimit;
    
    /** @var $avatarMaxWidth RecordValue */
    protected $avatarMaxWidth;
    
    /** @var $avatarMaxHeight RecordValue */
    protected $avatarMaxHeight;
    
    /** @var $avatarMaxSize RecordValue */
    protected $avatarMaxSize;
    
    /** @var $profilePicMaxWidth RecordValue */
    protected $profilePicMaxWidth;
    
    /** @var $profilePicMaxHeight RecordValue */
    protected $profilePicMaxHeight;
    
    /** @var $profilePicMaxSize RecordValue */
    protected $profilePicMaxSize;
    
    /** @var $importUserGroupId RecordValue */
    protected $importUserGroupId;
    
    /** @var $signaturePermissions RecordValue */
    protected $signaturePermissions;
    
    /** @var $sigPicMaxWidth RecordValue */
    protected $sigPicMaxWidth;
    
    /** @var $sigPicMaxheight RecordValue */
    protected $sigPicMaxheight;
    
    /** @var $sigPicMaxSize RecordValue */
    protected $sigPicMaxSize;
    
    /** @var $sigMaxImages RecordValue */
    protected $sigMaxImages;
    
    /** @var $sigMaxSizeBBCode RecordValue */
    protected $sigMaxSizeBBCode;
    
    /** @var $sigMaxChars RecordValue */
    protected $sigMaxChars;
    
    /** @var $sigMaxRawChars RecordValue */
    protected $sigMaxRawChars;
    
    /** @var $sigMaxLines RecordValue */
    protected $sigMaxLines;
    
    /** @var $visitorMessagePermissions RecordValue */
    protected $visitorMessagePermissions;
    
    /** @var $socialGroupPermissions RecordValue */
    protected $socialGroupPermissions;
    
    /** @var $userCssPermissions RecordValue */
    protected $userCssPermissions;
    
    /** @var $albumPermissions RecordValue */
    protected $albumPermissions;
    
    /** @var $albumPicMaxWidth RecordValue */
    protected $albumPicMaxWidth;
    
    /** @var $albumPicMaxHeight RecordValue */
    protected $albumPicMaxHeight;
    
    /** @var $albumPicMaxSize RecordValue */
    protected $albumPicMaxSize;
    
    /** @var $albumMaxPics RecordValue */
    protected $albumMaxPics;
    
    /** @var $albumMaxSize RecordValue */
    protected $albumMaxSize;
    
    /** @var $genericpermissions2 RecordValue */
    protected $genericpermissions2;
    
    /** @var $ptPermissions RecordValue */
    protected $ptPermissions;

    public function __construct() {
		$this->userGroupId = new RecordValue();
		$this->title = new RecordValue();
		$this->description = new RecordValue();
		$this->userTitle = new RecordValue();
		$this->passwordExpires = new RecordValue();
		$this->passwordHistory = new RecordValue();
		$this->pmQuota = new RecordValue();
		$this->pmSendmax = new RecordValue();
		$this->openTag = new RecordValue();
		$this->closeTag = new RecordValue();
		$this->canOverride = new RecordValue();
		$this->isPublicGroup = new RecordValue();
		$this->forumPermissions = new RecordValue();
		$this->pmPermissions = new RecordValue();
		$this->calendarPermissions = new RecordValue();
		$this->wolPermissions = new RecordValue();
		$this->adminPermissions = new RecordValue();
		$this->genericPermissions = new RecordValue();
		$this->genericOptions = new RecordValue();
		$this->attachLimit = new RecordValue();
		$this->avatarMaxWidth = new RecordValue();
		$this->avatarMaxHeight = new RecordValue();
		$this->avatarMaxSize = new RecordValue();
		$this->profilePicMaxWidth = new RecordValue();
		$this->profilePicMaxHeight = new RecordValue();
		$this->profilePicMaxSize = new RecordValue();
		$this->importUserGroupId = new RecordValue();
		$this->signaturePermissions = new RecordValue();
		$this->sigPicMaxWidth = new RecordValue();
		$this->sigPicMaxheight = new RecordValue();
		$this->sigPicMaxSize = new RecordValue();
		$this->sigMaxImages = new RecordValue();
		$this->sigMaxSizeBBCode = new RecordValue();
		$this->sigMaxChars = new RecordValue();
		$this->sigMaxRawChars = new RecordValue();
		$this->sigMaxLines = new RecordValue();
		$this->visitorMessagePermissions = new RecordValue();
		$this->socialGroupPermissions = new RecordValue();
		$this->userCssPermissions = new RecordValue();
		$this->albumPermissions = new RecordValue();
		$this->albumPicMaxWidth = new RecordValue();
		$this->albumPicMaxHeight = new RecordValue();
		$this->albumPicMaxSize = new RecordValue();
		$this->albumMaxPics = new RecordValue();
		$this->albumMaxSize = new RecordValue();
		$this->genericpermissions2 = new RecordValue();
		$this->ptPermissions = new RecordValue();
    }
    
    public function hasUserGroupId(): bool
    {
        return $this->userGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId->getValue();
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId->setChanged(true);
        $this->userGroupId->setValue($userGroupId);
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
    
    public function hasDescription(): bool
    {
        return $this->description->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description->getValue();
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description->setChanged(true);
        $this->description->setValue($description);
    }
    
    public function hasUserTitle(): bool
    {
        return $this->userTitle->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserTitle() : string
    {
        return $this->userTitle->getValue();
    }

    /**
     * @param string $userTitle
     */
    public function setUserTitle(string $userTitle)
    {
        $this->userTitle->setChanged(true);
        $this->userTitle->setValue($userTitle);
    }
    
    public function hasPasswordExpires(): bool
    {
        return $this->passwordExpires->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPasswordExpires() : int
    {
        return $this->passwordExpires->getValue();
    }

    /**
     * @param int $passwordExpires
     */
    public function setPasswordExpires(int $passwordExpires)
    {
        $this->passwordExpires->setChanged(true);
        $this->passwordExpires->setValue($passwordExpires);
    }
    
    public function hasPasswordHistory(): bool
    {
        return $this->passwordHistory->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPasswordHistory() : int
    {
        return $this->passwordHistory->getValue();
    }

    /**
     * @param int $passwordHistory
     */
    public function setPasswordHistory(int $passwordHistory)
    {
        $this->passwordHistory->setChanged(true);
        $this->passwordHistory->setValue($passwordHistory);
    }
    
    public function hasPmQuota(): bool
    {
        return $this->pmQuota->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmQuota() : int
    {
        return $this->pmQuota->getValue();
    }

    /**
     * @param int $pmQuota
     */
    public function setPmQuota(int $pmQuota)
    {
        $this->pmQuota->setChanged(true);
        $this->pmQuota->setValue($pmQuota);
    }
    
    public function hasPmSendmax(): bool
    {
        return $this->pmSendmax->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmSendmax() : int
    {
        return $this->pmSendmax->getValue();
    }

    /**
     * @param int $pmSendmax
     */
    public function setPmSendmax(int $pmSendmax)
    {
        $this->pmSendmax->setChanged(true);
        $this->pmSendmax->setValue($pmSendmax);
    }
    
    public function hasOpenTag(): bool
    {
        return $this->openTag->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getOpenTag() : string
    {
        return $this->openTag->getValue();
    }

    /**
     * @param string $openTag
     */
    public function setOpenTag(string $openTag)
    {
        $this->openTag->setChanged(true);
        $this->openTag->setValue($openTag);
    }
    
    public function hasCloseTag(): bool
    {
        return $this->closeTag->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getCloseTag() : string
    {
        return $this->closeTag->getValue();
    }

    /**
     * @param string $closeTag
     */
    public function setCloseTag(string $closeTag)
    {
        $this->closeTag->setChanged(true);
        $this->closeTag->setValue($closeTag);
    }
    
    public function hasCanOverride(): bool
    {
        return $this->canOverride->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCanOverride() : int
    {
        return $this->canOverride->getValue();
    }

    /**
     * @param int $canOverride
     */
    public function setCanOverride(int $canOverride)
    {
        $this->canOverride->setChanged(true);
        $this->canOverride->setValue($canOverride);
    }
    
    public function hasIsPublicGroup(): bool
    {
        return $this->isPublicGroup->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIsPublicGroup() : int
    {
        return $this->isPublicGroup->getValue();
    }

    /**
     * @param int $isPublicGroup
     */
    public function setIsPublicGroup(int $isPublicGroup)
    {
        $this->isPublicGroup->setChanged(true);
        $this->isPublicGroup->setValue($isPublicGroup);
    }
    
    public function hasForumPermissions(): bool
    {
        return $this->forumPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getForumPermissions() : int
    {
        return $this->forumPermissions->getValue();
    }

    /**
     * @param int $forumPermissions
     */
    public function setForumPermissions(int $forumPermissions)
    {
        $this->forumPermissions->setChanged(true);
        $this->forumPermissions->setValue($forumPermissions);
    }
    
    public function hasPmPermissions(): bool
    {
        return $this->pmPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmPermissions() : int
    {
        return $this->pmPermissions->getValue();
    }

    /**
     * @param int $pmPermissions
     */
    public function setPmPermissions(int $pmPermissions)
    {
        $this->pmPermissions->setChanged(true);
        $this->pmPermissions->setValue($pmPermissions);
    }
    
    public function hasCalendarPermissions(): bool
    {
        return $this->calendarPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCalendarPermissions() : int
    {
        return $this->calendarPermissions->getValue();
    }

    /**
     * @param int $calendarPermissions
     */
    public function setCalendarPermissions(int $calendarPermissions)
    {
        $this->calendarPermissions->setChanged(true);
        $this->calendarPermissions->setValue($calendarPermissions);
    }
    
    public function hasWolPermissions(): bool
    {
        return $this->wolPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWolPermissions() : int
    {
        return $this->wolPermissions->getValue();
    }

    /**
     * @param int $wolPermissions
     */
    public function setWolPermissions(int $wolPermissions)
    {
        $this->wolPermissions->setChanged(true);
        $this->wolPermissions->setValue($wolPermissions);
    }
    
    public function hasAdminPermissions(): bool
    {
        return $this->adminPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminPermissions() : int
    {
        return $this->adminPermissions->getValue();
    }

    /**
     * @param int $adminPermissions
     */
    public function setAdminPermissions(int $adminPermissions)
    {
        $this->adminPermissions->setChanged(true);
        $this->adminPermissions->setValue($adminPermissions);
    }
    
    public function hasGenericPermissions(): bool
    {
        return $this->genericPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGenericPermissions() : int
    {
        return $this->genericPermissions->getValue();
    }

    /**
     * @param int $genericPermissions
     */
    public function setGenericPermissions(int $genericPermissions)
    {
        $this->genericPermissions->setChanged(true);
        $this->genericPermissions->setValue($genericPermissions);
    }
    
    public function hasGenericOptions(): bool
    {
        return $this->genericOptions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGenericOptions() : int
    {
        return $this->genericOptions->getValue();
    }

    /**
     * @param int $genericOptions
     */
    public function setGenericOptions(int $genericOptions)
    {
        $this->genericOptions->setChanged(true);
        $this->genericOptions->setValue($genericOptions);
    }
    
    public function hasAttachLimit(): bool
    {
        return $this->attachLimit->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAttachLimit() : int
    {
        return $this->attachLimit->getValue();
    }

    /**
     * @param int $attachLimit
     */
    public function setAttachLimit(int $attachLimit)
    {
        $this->attachLimit->setChanged(true);
        $this->attachLimit->setValue($attachLimit);
    }
    
    public function hasAvatarMaxWidth(): bool
    {
        return $this->avatarMaxWidth->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarMaxWidth() : int
    {
        return $this->avatarMaxWidth->getValue();
    }

    /**
     * @param int $avatarMaxWidth
     */
    public function setAvatarMaxWidth(int $avatarMaxWidth)
    {
        $this->avatarMaxWidth->setChanged(true);
        $this->avatarMaxWidth->setValue($avatarMaxWidth);
    }
    
    public function hasAvatarMaxHeight(): bool
    {
        return $this->avatarMaxHeight->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarMaxHeight() : int
    {
        return $this->avatarMaxHeight->getValue();
    }

    /**
     * @param int $avatarMaxHeight
     */
    public function setAvatarMaxHeight(int $avatarMaxHeight)
    {
        $this->avatarMaxHeight->setChanged(true);
        $this->avatarMaxHeight->setValue($avatarMaxHeight);
    }
    
    public function hasAvatarMaxSize(): bool
    {
        return $this->avatarMaxSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarMaxSize() : int
    {
        return $this->avatarMaxSize->getValue();
    }

    /**
     * @param int $avatarMaxSize
     */
    public function setAvatarMaxSize(int $avatarMaxSize)
    {
        $this->avatarMaxSize->setChanged(true);
        $this->avatarMaxSize->setValue($avatarMaxSize);
    }
    
    public function hasProfilePicMaxWidth(): bool
    {
        return $this->profilePicMaxWidth->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxWidth() : int
    {
        return $this->profilePicMaxWidth->getValue();
    }

    /**
     * @param int $profilePicMaxWidth
     */
    public function setProfilePicMaxWidth(int $profilePicMaxWidth)
    {
        $this->profilePicMaxWidth->setChanged(true);
        $this->profilePicMaxWidth->setValue($profilePicMaxWidth);
    }
    
    public function hasProfilePicMaxHeight(): bool
    {
        return $this->profilePicMaxHeight->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxHeight() : int
    {
        return $this->profilePicMaxHeight->getValue();
    }

    /**
     * @param int $profilePicMaxHeight
     */
    public function setProfilePicMaxHeight(int $profilePicMaxHeight)
    {
        $this->profilePicMaxHeight->setChanged(true);
        $this->profilePicMaxHeight->setValue($profilePicMaxHeight);
    }
    
    public function hasProfilePicMaxSize(): bool
    {
        return $this->profilePicMaxSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxSize() : int
    {
        return $this->profilePicMaxSize->getValue();
    }

    /**
     * @param int $profilePicMaxSize
     */
    public function setProfilePicMaxSize(int $profilePicMaxSize)
    {
        $this->profilePicMaxSize->setChanged(true);
        $this->profilePicMaxSize->setValue($profilePicMaxSize);
    }
    
    public function hasImportUserGroupId(): bool
    {
        return $this->importUserGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportUserGroupId() : int
    {
        return $this->importUserGroupId->getValue();
    }

    /**
     * @param int $importUserGroupId
     */
    public function setImportUserGroupId(int $importUserGroupId)
    {
        $this->importUserGroupId->setChanged(true);
        $this->importUserGroupId->setValue($importUserGroupId);
    }
    
    public function hasSignaturePermissions(): bool
    {
        return $this->signaturePermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSignaturePermissions() : int
    {
        return $this->signaturePermissions->getValue();
    }

    /**
     * @param int $signaturePermissions
     */
    public function setSignaturePermissions(int $signaturePermissions)
    {
        $this->signaturePermissions->setChanged(true);
        $this->signaturePermissions->setValue($signaturePermissions);
    }
    
    public function hasSigPicMaxWidth(): bool
    {
        return $this->sigPicMaxWidth->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigPicMaxWidth() : int
    {
        return $this->sigPicMaxWidth->getValue();
    }

    /**
     * @param int $sigPicMaxWidth
     */
    public function setSigPicMaxWidth(int $sigPicMaxWidth)
    {
        $this->sigPicMaxWidth->setChanged(true);
        $this->sigPicMaxWidth->setValue($sigPicMaxWidth);
    }
    
    public function hasSigPicMaxheight(): bool
    {
        return $this->sigPicMaxheight->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigPicMaxheight() : int
    {
        return $this->sigPicMaxheight->getValue();
    }

    /**
     * @param int $sigPicMaxheight
     */
    public function setSigPicMaxheight(int $sigPicMaxheight)
    {
        $this->sigPicMaxheight->setChanged(true);
        $this->sigPicMaxheight->setValue($sigPicMaxheight);
    }
    
    public function hasSigPicMaxSize(): bool
    {
        return $this->sigPicMaxSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigPicMaxSize() : int
    {
        return $this->sigPicMaxSize->getValue();
    }

    /**
     * @param int $sigPicMaxSize
     */
    public function setSigPicMaxSize(int $sigPicMaxSize)
    {
        $this->sigPicMaxSize->setChanged(true);
        $this->sigPicMaxSize->setValue($sigPicMaxSize);
    }
    
    public function hasSigMaxImages(): bool
    {
        return $this->sigMaxImages->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigMaxImages() : int
    {
        return $this->sigMaxImages->getValue();
    }

    /**
     * @param int $sigMaxImages
     */
    public function setSigMaxImages(int $sigMaxImages)
    {
        $this->sigMaxImages->setChanged(true);
        $this->sigMaxImages->setValue($sigMaxImages);
    }
    
    public function hasSigMaxSizeBBCode(): bool
    {
        return $this->sigMaxSizeBBCode->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigMaxSizeBBCode() : int
    {
        return $this->sigMaxSizeBBCode->getValue();
    }

    /**
     * @param int $sigMaxSizeBBCode
     */
    public function setSigMaxSizeBBCode(int $sigMaxSizeBBCode)
    {
        $this->sigMaxSizeBBCode->setChanged(true);
        $this->sigMaxSizeBBCode->setValue($sigMaxSizeBBCode);
    }
    
    public function hasSigMaxChars(): bool
    {
        return $this->sigMaxChars->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigMaxChars() : int
    {
        return $this->sigMaxChars->getValue();
    }

    /**
     * @param int $sigMaxChars
     */
    public function setSigMaxChars(int $sigMaxChars)
    {
        $this->sigMaxChars->setChanged(true);
        $this->sigMaxChars->setValue($sigMaxChars);
    }
    
    public function hasSigMaxRawChars(): bool
    {
        return $this->sigMaxRawChars->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigMaxRawChars() : int
    {
        return $this->sigMaxRawChars->getValue();
    }

    /**
     * @param int $sigMaxRawChars
     */
    public function setSigMaxRawChars(int $sigMaxRawChars)
    {
        $this->sigMaxRawChars->setChanged(true);
        $this->sigMaxRawChars->setValue($sigMaxRawChars);
    }
    
    public function hasSigMaxLines(): bool
    {
        return $this->sigMaxLines->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigMaxLines() : int
    {
        return $this->sigMaxLines->getValue();
    }

    /**
     * @param int $sigMaxLines
     */
    public function setSigMaxLines(int $sigMaxLines)
    {
        $this->sigMaxLines->setChanged(true);
        $this->sigMaxLines->setValue($sigMaxLines);
    }
    
    public function hasVisitorMessagePermissions(): bool
    {
        return $this->visitorMessagePermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVisitorMessagePermissions() : int
    {
        return $this->visitorMessagePermissions->getValue();
    }

    /**
     * @param int $visitorMessagePermissions
     */
    public function setVisitorMessagePermissions(int $visitorMessagePermissions)
    {
        $this->visitorMessagePermissions->setChanged(true);
        $this->visitorMessagePermissions->setValue($visitorMessagePermissions);
    }
    
    public function hasSocialGroupPermissions(): bool
    {
        return $this->socialGroupPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSocialGroupPermissions() : int
    {
        return $this->socialGroupPermissions->getValue();
    }

    /**
     * @param int $socialGroupPermissions
     */
    public function setSocialGroupPermissions(int $socialGroupPermissions)
    {
        $this->socialGroupPermissions->setChanged(true);
        $this->socialGroupPermissions->setValue($socialGroupPermissions);
    }
    
    public function hasUserCssPermissions(): bool
    {
        return $this->userCssPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserCssPermissions() : int
    {
        return $this->userCssPermissions->getValue();
    }

    /**
     * @param int $userCssPermissions
     */
    public function setUserCssPermissions(int $userCssPermissions)
    {
        $this->userCssPermissions->setChanged(true);
        $this->userCssPermissions->setValue($userCssPermissions);
    }
    
    public function hasAlbumPermissions(): bool
    {
        return $this->albumPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumPermissions() : int
    {
        return $this->albumPermissions->getValue();
    }

    /**
     * @param int $albumPermissions
     */
    public function setAlbumPermissions(int $albumPermissions)
    {
        $this->albumPermissions->setChanged(true);
        $this->albumPermissions->setValue($albumPermissions);
    }
    
    public function hasAlbumPicMaxWidth(): bool
    {
        return $this->albumPicMaxWidth->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxWidth() : int
    {
        return $this->albumPicMaxWidth->getValue();
    }

    /**
     * @param int $albumPicMaxWidth
     */
    public function setAlbumPicMaxWidth(int $albumPicMaxWidth)
    {
        $this->albumPicMaxWidth->setChanged(true);
        $this->albumPicMaxWidth->setValue($albumPicMaxWidth);
    }
    
    public function hasAlbumPicMaxHeight(): bool
    {
        return $this->albumPicMaxHeight->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxHeight() : int
    {
        return $this->albumPicMaxHeight->getValue();
    }

    /**
     * @param int $albumPicMaxHeight
     */
    public function setAlbumPicMaxHeight(int $albumPicMaxHeight)
    {
        $this->albumPicMaxHeight->setChanged(true);
        $this->albumPicMaxHeight->setValue($albumPicMaxHeight);
    }
    
    public function hasAlbumPicMaxSize(): bool
    {
        return $this->albumPicMaxSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxSize() : int
    {
        return $this->albumPicMaxSize->getValue();
    }

    /**
     * @param int $albumPicMaxSize
     */
    public function setAlbumPicMaxSize(int $albumPicMaxSize)
    {
        $this->albumPicMaxSize->setChanged(true);
        $this->albumPicMaxSize->setValue($albumPicMaxSize);
    }
    
    public function hasAlbumMaxPics(): bool
    {
        return $this->albumMaxPics->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumMaxPics() : int
    {
        return $this->albumMaxPics->getValue();
    }

    /**
     * @param int $albumMaxPics
     */
    public function setAlbumMaxPics(int $albumMaxPics)
    {
        $this->albumMaxPics->setChanged(true);
        $this->albumMaxPics->setValue($albumMaxPics);
    }
    
    public function hasAlbumMaxSize(): bool
    {
        return $this->albumMaxSize->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAlbumMaxSize() : int
    {
        return $this->albumMaxSize->getValue();
    }

    /**
     * @param int $albumMaxSize
     */
    public function setAlbumMaxSize(int $albumMaxSize)
    {
        $this->albumMaxSize->setChanged(true);
        $this->albumMaxSize->setValue($albumMaxSize);
    }
    
    public function hasGenericpermissions2(): bool
    {
        return $this->genericpermissions2->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGenericpermissions2() : int
    {
        return $this->genericpermissions2->getValue();
    }

    /**
     * @param int $genericpermissions2
     */
    public function setGenericpermissions2(int $genericpermissions2)
    {
        $this->genericpermissions2->setChanged(true);
        $this->genericpermissions2->setValue($genericpermissions2);
    }
    
    public function hasPtPermissions(): bool
    {
        return $this->ptPermissions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPtPermissions() : int
    {
        return $this->ptPermissions->getValue();
    }

    /**
     * @param int $ptPermissions
     */
    public function setPtPermissions(int $ptPermissions)
    {
        $this->ptPermissions->setChanged(true);
        $this->ptPermissions->setValue($ptPermissions);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroup
    {
        return new UserGroup();
    }
}