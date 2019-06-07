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

class GeneratedUserGroupRecord implements Record {
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $title string */
    protected $title;
    
    /** @var $description string */
    protected $description;
    
    /** @var $userTitle string */
    protected $userTitle;
    
    /** @var $passwordExpires int */
    protected $passwordExpires;
    
    /** @var $passwordHistory int */
    protected $passwordHistory;
    
    /** @var $pmQuota int */
    protected $pmQuota;
    
    /** @var $pmSendmax int */
    protected $pmSendmax;
    
    /** @var $openTag string */
    protected $openTag;
    
    /** @var $closeTag string */
    protected $closeTag;
    
    /** @var $canOverride int */
    protected $canOverride;
    
    /** @var $isPublicGroup int */
    protected $isPublicGroup;
    
    /** @var $forumPermissions int */
    protected $forumPermissions;
    
    /** @var $pmPermissions int */
    protected $pmPermissions;
    
    /** @var $calendarPermissions int */
    protected $calendarPermissions;
    
    /** @var $wolPermissions int */
    protected $wolPermissions;
    
    /** @var $adminPermissions int */
    protected $adminPermissions;
    
    /** @var $genericPermissions int */
    protected $genericPermissions;
    
    /** @var $genericOptions int */
    protected $genericOptions;
    
    /** @var $attachLimit int */
    protected $attachLimit;
    
    /** @var $avatarMaxWidth int */
    protected $avatarMaxWidth;
    
    /** @var $avatarMaxHeight int */
    protected $avatarMaxHeight;
    
    /** @var $avatarMaxSize int */
    protected $avatarMaxSize;
    
    /** @var $profilePicMaxWidth int */
    protected $profilePicMaxWidth;
    
    /** @var $profilePicMaxHeight int */
    protected $profilePicMaxHeight;
    
    /** @var $profilePicMaxSize int */
    protected $profilePicMaxSize;
    
    /** @var $importUserGroupId int */
    protected $importUserGroupId;
    
    /** @var $signaturePermissions int */
    protected $signaturePermissions;
    
    /** @var $sigPicMaxWidth int */
    protected $sigPicMaxWidth;
    
    /** @var $sigPicMaxheight int */
    protected $sigPicMaxheight;
    
    /** @var $sigPicMaxSize int */
    protected $sigPicMaxSize;
    
    /** @var $sigMaxImages int */
    protected $sigMaxImages;
    
    /** @var $sigMaxSizeBBCode int */
    protected $sigMaxSizeBBCode;
    
    /** @var $sigMaxChars int */
    protected $sigMaxChars;
    
    /** @var $sigMaxRawChars int */
    protected $sigMaxRawChars;
    
    /** @var $sigMaxLines int */
    protected $sigMaxLines;
    
    /** @var $visitorMessagePermissions int */
    protected $visitorMessagePermissions;
    
    /** @var $socialGroupPermissions int */
    protected $socialGroupPermissions;
    
    /** @var $userCssPermissions int */
    protected $userCssPermissions;
    
    /** @var $albumPermissions int */
    protected $albumPermissions;
    
    /** @var $albumPicMaxWidth int */
    protected $albumPicMaxWidth;
    
    /** @var $albumPicMaxHeight int */
    protected $albumPicMaxHeight;
    
    /** @var $albumPicMaxSize int */
    protected $albumPicMaxSize;
    
    /** @var $albumMaxPics int */
    protected $albumMaxPics;
    
    /** @var $albumMaxSize int */
    protected $albumMaxSize;
    
    /** @var $genericpermissions2 int */
    protected $genericpermissions2;
    
    /** @var $ptPermissions int */
    protected $ptPermissions;
    
    public function hasUserGroupId(): bool
    {
        return isset($this->userGroupId);
    }    

    /**
     * @return int
     */
    public function getUserGroupId() : int
    {
        return $this->userGroupId;
    }

    /**
     * @param int $userGroupId
     */
    public function setUserGroupId(int $userGroupId)
    {
        $this->userGroupId = $userGroupId;
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
    
    public function hasDescription(): bool
    {
        return isset($this->description);
    }    

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    public function hasUserTitle(): bool
    {
        return isset($this->userTitle);
    }    

    /**
     * @return string
     */
    public function getUserTitle() : string
    {
        return $this->userTitle;
    }

    /**
     * @param string $userTitle
     */
    public function setUserTitle(string $userTitle)
    {
        $this->userTitle = $userTitle;
    }
    
    public function hasPasswordExpires(): bool
    {
        return isset($this->passwordExpires);
    }    

    /**
     * @return int
     */
    public function getPasswordExpires() : int
    {
        return $this->passwordExpires;
    }

    /**
     * @param int $passwordExpires
     */
    public function setPasswordExpires(int $passwordExpires)
    {
        $this->passwordExpires = $passwordExpires;
    }
    
    public function hasPasswordHistory(): bool
    {
        return isset($this->passwordHistory);
    }    

    /**
     * @return int
     */
    public function getPasswordHistory() : int
    {
        return $this->passwordHistory;
    }

    /**
     * @param int $passwordHistory
     */
    public function setPasswordHistory(int $passwordHistory)
    {
        $this->passwordHistory = $passwordHistory;
    }
    
    public function hasPmQuota(): bool
    {
        return isset($this->pmQuota);
    }    

    /**
     * @return int
     */
    public function getPmQuota() : int
    {
        return $this->pmQuota;
    }

    /**
     * @param int $pmQuota
     */
    public function setPmQuota(int $pmQuota)
    {
        $this->pmQuota = $pmQuota;
    }
    
    public function hasPmSendmax(): bool
    {
        return isset($this->pmSendmax);
    }    

    /**
     * @return int
     */
    public function getPmSendmax() : int
    {
        return $this->pmSendmax;
    }

    /**
     * @param int $pmSendmax
     */
    public function setPmSendmax(int $pmSendmax)
    {
        $this->pmSendmax = $pmSendmax;
    }
    
    public function hasOpenTag(): bool
    {
        return isset($this->openTag);
    }    

    /**
     * @return string
     */
    public function getOpenTag() : string
    {
        return $this->openTag;
    }

    /**
     * @param string $openTag
     */
    public function setOpenTag(string $openTag)
    {
        $this->openTag = $openTag;
    }
    
    public function hasCloseTag(): bool
    {
        return isset($this->closeTag);
    }    

    /**
     * @return string
     */
    public function getCloseTag() : string
    {
        return $this->closeTag;
    }

    /**
     * @param string $closeTag
     */
    public function setCloseTag(string $closeTag)
    {
        $this->closeTag = $closeTag;
    }
    
    public function hasCanOverride(): bool
    {
        return isset($this->canOverride);
    }    

    /**
     * @return int
     */
    public function getCanOverride() : int
    {
        return $this->canOverride;
    }

    /**
     * @param int $canOverride
     */
    public function setCanOverride(int $canOverride)
    {
        $this->canOverride = $canOverride;
    }
    
    public function hasIsPublicGroup(): bool
    {
        return isset($this->isPublicGroup);
    }    

    /**
     * @return int
     */
    public function getIsPublicGroup() : int
    {
        return $this->isPublicGroup;
    }

    /**
     * @param int $isPublicGroup
     */
    public function setIsPublicGroup(int $isPublicGroup)
    {
        $this->isPublicGroup = $isPublicGroup;
    }
    
    public function hasForumPermissions(): bool
    {
        return isset($this->forumPermissions);
    }    

    /**
     * @return int
     */
    public function getForumPermissions() : int
    {
        return $this->forumPermissions;
    }

    /**
     * @param int $forumPermissions
     */
    public function setForumPermissions(int $forumPermissions)
    {
        $this->forumPermissions = $forumPermissions;
    }
    
    public function hasPmPermissions(): bool
    {
        return isset($this->pmPermissions);
    }    

    /**
     * @return int
     */
    public function getPmPermissions() : int
    {
        return $this->pmPermissions;
    }

    /**
     * @param int $pmPermissions
     */
    public function setPmPermissions(int $pmPermissions)
    {
        $this->pmPermissions = $pmPermissions;
    }
    
    public function hasCalendarPermissions(): bool
    {
        return isset($this->calendarPermissions);
    }    

    /**
     * @return int
     */
    public function getCalendarPermissions() : int
    {
        return $this->calendarPermissions;
    }

    /**
     * @param int $calendarPermissions
     */
    public function setCalendarPermissions(int $calendarPermissions)
    {
        $this->calendarPermissions = $calendarPermissions;
    }
    
    public function hasWolPermissions(): bool
    {
        return isset($this->wolPermissions);
    }    

    /**
     * @return int
     */
    public function getWolPermissions() : int
    {
        return $this->wolPermissions;
    }

    /**
     * @param int $wolPermissions
     */
    public function setWolPermissions(int $wolPermissions)
    {
        $this->wolPermissions = $wolPermissions;
    }
    
    public function hasAdminPermissions(): bool
    {
        return isset($this->adminPermissions);
    }    

    /**
     * @return int
     */
    public function getAdminPermissions() : int
    {
        return $this->adminPermissions;
    }

    /**
     * @param int $adminPermissions
     */
    public function setAdminPermissions(int $adminPermissions)
    {
        $this->adminPermissions = $adminPermissions;
    }
    
    public function hasGenericPermissions(): bool
    {
        return isset($this->genericPermissions);
    }    

    /**
     * @return int
     */
    public function getGenericPermissions() : int
    {
        return $this->genericPermissions;
    }

    /**
     * @param int $genericPermissions
     */
    public function setGenericPermissions(int $genericPermissions)
    {
        $this->genericPermissions = $genericPermissions;
    }
    
    public function hasGenericOptions(): bool
    {
        return isset($this->genericOptions);
    }    

    /**
     * @return int
     */
    public function getGenericOptions() : int
    {
        return $this->genericOptions;
    }

    /**
     * @param int $genericOptions
     */
    public function setGenericOptions(int $genericOptions)
    {
        $this->genericOptions = $genericOptions;
    }
    
    public function hasAttachLimit(): bool
    {
        return isset($this->attachLimit);
    }    

    /**
     * @return int
     */
    public function getAttachLimit() : int
    {
        return $this->attachLimit;
    }

    /**
     * @param int $attachLimit
     */
    public function setAttachLimit(int $attachLimit)
    {
        $this->attachLimit = $attachLimit;
    }
    
    public function hasAvatarMaxWidth(): bool
    {
        return isset($this->avatarMaxWidth);
    }    

    /**
     * @return int
     */
    public function getAvatarMaxWidth() : int
    {
        return $this->avatarMaxWidth;
    }

    /**
     * @param int $avatarMaxWidth
     */
    public function setAvatarMaxWidth(int $avatarMaxWidth)
    {
        $this->avatarMaxWidth = $avatarMaxWidth;
    }
    
    public function hasAvatarMaxHeight(): bool
    {
        return isset($this->avatarMaxHeight);
    }    

    /**
     * @return int
     */
    public function getAvatarMaxHeight() : int
    {
        return $this->avatarMaxHeight;
    }

    /**
     * @param int $avatarMaxHeight
     */
    public function setAvatarMaxHeight(int $avatarMaxHeight)
    {
        $this->avatarMaxHeight = $avatarMaxHeight;
    }
    
    public function hasAvatarMaxSize(): bool
    {
        return isset($this->avatarMaxSize);
    }    

    /**
     * @return int
     */
    public function getAvatarMaxSize() : int
    {
        return $this->avatarMaxSize;
    }

    /**
     * @param int $avatarMaxSize
     */
    public function setAvatarMaxSize(int $avatarMaxSize)
    {
        $this->avatarMaxSize = $avatarMaxSize;
    }
    
    public function hasProfilePicMaxWidth(): bool
    {
        return isset($this->profilePicMaxWidth);
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxWidth() : int
    {
        return $this->profilePicMaxWidth;
    }

    /**
     * @param int $profilePicMaxWidth
     */
    public function setProfilePicMaxWidth(int $profilePicMaxWidth)
    {
        $this->profilePicMaxWidth = $profilePicMaxWidth;
    }
    
    public function hasProfilePicMaxHeight(): bool
    {
        return isset($this->profilePicMaxHeight);
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxHeight() : int
    {
        return $this->profilePicMaxHeight;
    }

    /**
     * @param int $profilePicMaxHeight
     */
    public function setProfilePicMaxHeight(int $profilePicMaxHeight)
    {
        $this->profilePicMaxHeight = $profilePicMaxHeight;
    }
    
    public function hasProfilePicMaxSize(): bool
    {
        return isset($this->profilePicMaxSize);
    }    

    /**
     * @return int
     */
    public function getProfilePicMaxSize() : int
    {
        return $this->profilePicMaxSize;
    }

    /**
     * @param int $profilePicMaxSize
     */
    public function setProfilePicMaxSize(int $profilePicMaxSize)
    {
        $this->profilePicMaxSize = $profilePicMaxSize;
    }
    
    public function hasImportUserGroupId(): bool
    {
        return isset($this->importUserGroupId);
    }    

    /**
     * @return int
     */
    public function getImportUserGroupId() : int
    {
        return $this->importUserGroupId;
    }

    /**
     * @param int $importUserGroupId
     */
    public function setImportUserGroupId(int $importUserGroupId)
    {
        $this->importUserGroupId = $importUserGroupId;
    }
    
    public function hasSignaturePermissions(): bool
    {
        return isset($this->signaturePermissions);
    }    

    /**
     * @return int
     */
    public function getSignaturePermissions() : int
    {
        return $this->signaturePermissions;
    }

    /**
     * @param int $signaturePermissions
     */
    public function setSignaturePermissions(int $signaturePermissions)
    {
        $this->signaturePermissions = $signaturePermissions;
    }
    
    public function hasSigPicMaxWidth(): bool
    {
        return isset($this->sigPicMaxWidth);
    }    

    /**
     * @return int
     */
    public function getSigPicMaxWidth() : int
    {
        return $this->sigPicMaxWidth;
    }

    /**
     * @param int $sigPicMaxWidth
     */
    public function setSigPicMaxWidth(int $sigPicMaxWidth)
    {
        $this->sigPicMaxWidth = $sigPicMaxWidth;
    }
    
    public function hasSigPicMaxheight(): bool
    {
        return isset($this->sigPicMaxheight);
    }    

    /**
     * @return int
     */
    public function getSigPicMaxheight() : int
    {
        return $this->sigPicMaxheight;
    }

    /**
     * @param int $sigPicMaxheight
     */
    public function setSigPicMaxheight(int $sigPicMaxheight)
    {
        $this->sigPicMaxheight = $sigPicMaxheight;
    }
    
    public function hasSigPicMaxSize(): bool
    {
        return isset($this->sigPicMaxSize);
    }    

    /**
     * @return int
     */
    public function getSigPicMaxSize() : int
    {
        return $this->sigPicMaxSize;
    }

    /**
     * @param int $sigPicMaxSize
     */
    public function setSigPicMaxSize(int $sigPicMaxSize)
    {
        $this->sigPicMaxSize = $sigPicMaxSize;
    }
    
    public function hasSigMaxImages(): bool
    {
        return isset($this->sigMaxImages);
    }    

    /**
     * @return int
     */
    public function getSigMaxImages() : int
    {
        return $this->sigMaxImages;
    }

    /**
     * @param int $sigMaxImages
     */
    public function setSigMaxImages(int $sigMaxImages)
    {
        $this->sigMaxImages = $sigMaxImages;
    }
    
    public function hasSigMaxSizeBBCode(): bool
    {
        return isset($this->sigMaxSizeBBCode);
    }    

    /**
     * @return int
     */
    public function getSigMaxSizeBBCode() : int
    {
        return $this->sigMaxSizeBBCode;
    }

    /**
     * @param int $sigMaxSizeBBCode
     */
    public function setSigMaxSizeBBCode(int $sigMaxSizeBBCode)
    {
        $this->sigMaxSizeBBCode = $sigMaxSizeBBCode;
    }
    
    public function hasSigMaxChars(): bool
    {
        return isset($this->sigMaxChars);
    }    

    /**
     * @return int
     */
    public function getSigMaxChars() : int
    {
        return $this->sigMaxChars;
    }

    /**
     * @param int $sigMaxChars
     */
    public function setSigMaxChars(int $sigMaxChars)
    {
        $this->sigMaxChars = $sigMaxChars;
    }
    
    public function hasSigMaxRawChars(): bool
    {
        return isset($this->sigMaxRawChars);
    }    

    /**
     * @return int
     */
    public function getSigMaxRawChars() : int
    {
        return $this->sigMaxRawChars;
    }

    /**
     * @param int $sigMaxRawChars
     */
    public function setSigMaxRawChars(int $sigMaxRawChars)
    {
        $this->sigMaxRawChars = $sigMaxRawChars;
    }
    
    public function hasSigMaxLines(): bool
    {
        return isset($this->sigMaxLines);
    }    

    /**
     * @return int
     */
    public function getSigMaxLines() : int
    {
        return $this->sigMaxLines;
    }

    /**
     * @param int $sigMaxLines
     */
    public function setSigMaxLines(int $sigMaxLines)
    {
        $this->sigMaxLines = $sigMaxLines;
    }
    
    public function hasVisitorMessagePermissions(): bool
    {
        return isset($this->visitorMessagePermissions);
    }    

    /**
     * @return int
     */
    public function getVisitorMessagePermissions() : int
    {
        return $this->visitorMessagePermissions;
    }

    /**
     * @param int $visitorMessagePermissions
     */
    public function setVisitorMessagePermissions(int $visitorMessagePermissions)
    {
        $this->visitorMessagePermissions = $visitorMessagePermissions;
    }
    
    public function hasSocialGroupPermissions(): bool
    {
        return isset($this->socialGroupPermissions);
    }    

    /**
     * @return int
     */
    public function getSocialGroupPermissions() : int
    {
        return $this->socialGroupPermissions;
    }

    /**
     * @param int $socialGroupPermissions
     */
    public function setSocialGroupPermissions(int $socialGroupPermissions)
    {
        $this->socialGroupPermissions = $socialGroupPermissions;
    }
    
    public function hasUserCssPermissions(): bool
    {
        return isset($this->userCssPermissions);
    }    

    /**
     * @return int
     */
    public function getUserCssPermissions() : int
    {
        return $this->userCssPermissions;
    }

    /**
     * @param int $userCssPermissions
     */
    public function setUserCssPermissions(int $userCssPermissions)
    {
        $this->userCssPermissions = $userCssPermissions;
    }
    
    public function hasAlbumPermissions(): bool
    {
        return isset($this->albumPermissions);
    }    

    /**
     * @return int
     */
    public function getAlbumPermissions() : int
    {
        return $this->albumPermissions;
    }

    /**
     * @param int $albumPermissions
     */
    public function setAlbumPermissions(int $albumPermissions)
    {
        $this->albumPermissions = $albumPermissions;
    }
    
    public function hasAlbumPicMaxWidth(): bool
    {
        return isset($this->albumPicMaxWidth);
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxWidth() : int
    {
        return $this->albumPicMaxWidth;
    }

    /**
     * @param int $albumPicMaxWidth
     */
    public function setAlbumPicMaxWidth(int $albumPicMaxWidth)
    {
        $this->albumPicMaxWidth = $albumPicMaxWidth;
    }
    
    public function hasAlbumPicMaxHeight(): bool
    {
        return isset($this->albumPicMaxHeight);
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxHeight() : int
    {
        return $this->albumPicMaxHeight;
    }

    /**
     * @param int $albumPicMaxHeight
     */
    public function setAlbumPicMaxHeight(int $albumPicMaxHeight)
    {
        $this->albumPicMaxHeight = $albumPicMaxHeight;
    }
    
    public function hasAlbumPicMaxSize(): bool
    {
        return isset($this->albumPicMaxSize);
    }    

    /**
     * @return int
     */
    public function getAlbumPicMaxSize() : int
    {
        return $this->albumPicMaxSize;
    }

    /**
     * @param int $albumPicMaxSize
     */
    public function setAlbumPicMaxSize(int $albumPicMaxSize)
    {
        $this->albumPicMaxSize = $albumPicMaxSize;
    }
    
    public function hasAlbumMaxPics(): bool
    {
        return isset($this->albumMaxPics);
    }    

    /**
     * @return int
     */
    public function getAlbumMaxPics() : int
    {
        return $this->albumMaxPics;
    }

    /**
     * @param int $albumMaxPics
     */
    public function setAlbumMaxPics(int $albumMaxPics)
    {
        $this->albumMaxPics = $albumMaxPics;
    }
    
    public function hasAlbumMaxSize(): bool
    {
        return isset($this->albumMaxSize);
    }    

    /**
     * @return int
     */
    public function getAlbumMaxSize() : int
    {
        return $this->albumMaxSize;
    }

    /**
     * @param int $albumMaxSize
     */
    public function setAlbumMaxSize(int $albumMaxSize)
    {
        $this->albumMaxSize = $albumMaxSize;
    }
    
    public function hasGenericpermissions2(): bool
    {
        return isset($this->genericpermissions2);
    }    

    /**
     * @return int
     */
    public function getGenericpermissions2() : int
    {
        return $this->genericpermissions2;
    }

    /**
     * @param int $genericpermissions2
     */
    public function setGenericpermissions2(int $genericpermissions2)
    {
        $this->genericpermissions2 = $genericpermissions2;
    }
    
    public function hasPtPermissions(): bool
    {
        return isset($this->ptPermissions);
    }    

    /**
     * @return int
     */
    public function getPtPermissions() : int
    {
        return $this->ptPermissions;
    }

    /**
     * @param int $ptPermissions
     */
    public function setPtPermissions(int $ptPermissions)
    {
        $this->ptPermissions = $ptPermissions;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): UserGroup
    {
        return new UserGroup();
    }
}