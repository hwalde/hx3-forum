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

class GeneratedUserRecord implements Record {
    
    /** @var $userId int */
    protected $userId;
    
    /** @var $userGroupId int */
    protected $userGroupId;
    
    /** @var $memberGroupIds string */
    protected $memberGroupIds;
    
    /** @var $displayGroupId int */
    protected $displayGroupId;
    
    /** @var $userName string */
    protected $userName;
    
    /** @var $password string */
    protected $password;
    
    /** @var $passwordDate \DateTime */
    protected $passwordDate;
    
    /** @var $email string */
    protected $email;
    
    /** @var $styleId int */
    protected $styleId;
    
    /** @var $parentEmail string */
    protected $parentEmail;
    
    /** @var $homePage string */
    protected $homePage;
    
    /** @var $icq string */
    protected $icq;
    
    /** @var $aim string */
    protected $aim;
    
    /** @var $yahoo string */
    protected $yahoo;
    
    /** @var $showVbCode int */
    protected $showVbCode;
    
    /** @var $userTitle string */
    protected $userTitle;
    
    /** @var $customTitle int */
    protected $customTitle;
    
    /** @var $joinDate int */
    protected $joinDate;
    
    /** @var $daysPrune int */
    protected $daysPrune;
    
    /** @var $lastVisit int */
    protected $lastVisit;
    
    /** @var $lastActivity int */
    protected $lastActivity;
    
    /** @var $lastPost int */
    protected $lastPost;
    
    /** @var $posts int */
    protected $posts;
    
    /** @var $reputation int */
    protected $reputation;
    
    /** @var $reputationLevelId int */
    protected $reputationLevelId;
    
    /** @var $timeZoneOffset string */
    protected $timeZoneOffset;
    
    /** @var $pmPopup int */
    protected $pmPopup;
    
    /** @var $avatarId int */
    protected $avatarId;
    
    /** @var $avatarRevision int */
    protected $avatarRevision;
    
    /** @var $options int */
    protected $options;
    
    /** @var $birthday string */
    protected $birthday;
    
    /** @var $birthdaySearch \DateTime */
    protected $birthdaySearch;
    
    /** @var $maxPosts int */
    protected $maxPosts;
    
    /** @var $startOfWeek int */
    protected $startOfWeek;
    
    /** @var $ipAddress string */
    protected $ipAddress;
    
    /** @var $referrerId int */
    protected $referrerId;
    
    /** @var $languageId int */
    protected $languageId;
    
    /** @var $msn string */
    protected $msn;
    
    /** @var $emailStamp int */
    protected $emailStamp;
    
    /** @var $threadedMode int */
    protected $threadedMode;
    
    /** @var $autoSubscribe int */
    protected $autoSubscribe;
    
    /** @var $pmTotal int */
    protected $pmTotal;
    
    /** @var $pmUnread int */
    protected $pmUnread;
    
    /** @var $salt string */
    protected $salt;
    
    /** @var $importUserId int */
    protected $importUserId;
    
    /** @var $profilePicRevision int */
    protected $profilePicRevision;
    
    /** @var $showBirthday int */
    protected $showBirthday;
    
    /** @var $skype string */
    protected $skype;
    
    /** @var $adminOptions int */
    protected $adminOptions;
    
    /** @var $lastPostId int */
    protected $lastPostId;
    
    /** @var $sigPicRevision int */
    protected $sigPicRevision;
    
    /** @var $iPoints int */
    protected $iPoints;
    
    /** @var $infractions int */
    protected $infractions;
    
    /** @var $warnings int */
    protected $warnings;
    
    /** @var $infractiongGoupids string */
    protected $infractiongGoupids;
    
    /** @var $infractionGroupId int */
    protected $infractionGroupId;
    
    /** @var $nCodeImageResizerMode string|null */
    protected $nCodeImageResizerMode;
    
    /** @var $nCodeImageResizerMaxWidth int|null */
    protected $nCodeImageResizerMaxWidth;
    
    /** @var $nCodeImageResizerMaxHeight int|null */
    protected $nCodeImageResizerMaxHeight;
    
    /** @var $profileVisits int */
    protected $profileVisits;
    
    /** @var $friendCount int */
    protected $friendCount;
    
    /** @var $friendReqCount int */
    protected $friendReqCount;
    
    /** @var $vmUnreadCount int */
    protected $vmUnreadCount;
    
    /** @var $vmModeratedcount int */
    protected $vmModeratedcount;
    
    /** @var $socGroupInviteCount int */
    protected $socGroupInviteCount;
    
    /** @var $socGroupReqCount int */
    protected $socGroupReqCount;
    
    /** @var $pcUnreadCount int */
    protected $pcUnreadCount;
    
    /** @var $pcModeratedCount int */
    protected $pcModeratedCount;
    
    /** @var $gmModeratedCount int */
    protected $gmModeratedCount;
    
    public function hasUserId(): bool
    {
        return isset($this->userId);
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
    
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
    
    public function hasMemberGroupIds(): bool
    {
        return isset($this->memberGroupIds);
    }    

    /**
     * @return string
     */
    public function getMemberGroupIds() : string
    {
        return $this->memberGroupIds;
    }

    /**
     * @param string $memberGroupIds
     */
    public function setMemberGroupIds(string $memberGroupIds)
    {
        $this->memberGroupIds = $memberGroupIds;
    }
    
    public function hasDisplayGroupId(): bool
    {
        return isset($this->displayGroupId);
    }    

    /**
     * @return int
     */
    public function getDisplayGroupId() : int
    {
        return $this->displayGroupId;
    }

    /**
     * @param int $displayGroupId
     */
    public function setDisplayGroupId(int $displayGroupId)
    {
        $this->displayGroupId = $displayGroupId;
    }
    
    public function hasUserName(): bool
    {
        return isset($this->userName);
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName = $userName;
    }
    
    public function hasPassword(): bool
    {
        return isset($this->password);
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    
    public function hasPasswordDate(): bool
    {
        return isset($this->passwordDate);
    }    

    /**
     * @return \DateTime
     */
    public function getPasswordDate() : \DateTime
    {
        return $this->passwordDate;
    }

    /**
     * @param \DateTime $passwordDate
     */
    public function setPasswordDate(\DateTime $passwordDate)
    {
        $this->passwordDate = $passwordDate;
    }
    
    public function hasEmail(): bool
    {
        return isset($this->email);
    }    

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    
    public function hasStyleId(): bool
    {
        return isset($this->styleId);
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId;
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId = $styleId;
    }
    
    public function hasParentEmail(): bool
    {
        return isset($this->parentEmail);
    }    

    /**
     * @return string
     */
    public function getParentEmail() : string
    {
        return $this->parentEmail;
    }

    /**
     * @param string $parentEmail
     */
    public function setParentEmail(string $parentEmail)
    {
        $this->parentEmail = $parentEmail;
    }
    
    public function hasHomePage(): bool
    {
        return isset($this->homePage);
    }    

    /**
     * @return string
     */
    public function getHomePage() : string
    {
        return $this->homePage;
    }

    /**
     * @param string $homePage
     */
    public function setHomePage(string $homePage)
    {
        $this->homePage = $homePage;
    }
    
    public function hasIcq(): bool
    {
        return isset($this->icq);
    }    

    /**
     * @return string
     */
    public function getIcq() : string
    {
        return $this->icq;
    }

    /**
     * @param string $icq
     */
    public function setIcq(string $icq)
    {
        $this->icq = $icq;
    }
    
    public function hasAim(): bool
    {
        return isset($this->aim);
    }    

    /**
     * @return string
     */
    public function getAim() : string
    {
        return $this->aim;
    }

    /**
     * @param string $aim
     */
    public function setAim(string $aim)
    {
        $this->aim = $aim;
    }
    
    public function hasYahoo(): bool
    {
        return isset($this->yahoo);
    }    

    /**
     * @return string
     */
    public function getYahoo() : string
    {
        return $this->yahoo;
    }

    /**
     * @param string $yahoo
     */
    public function setYahoo(string $yahoo)
    {
        $this->yahoo = $yahoo;
    }
    
    public function hasShowVbCode(): bool
    {
        return isset($this->showVbCode);
    }    

    /**
     * @return int
     */
    public function getShowVbCode() : int
    {
        return $this->showVbCode;
    }

    /**
     * @param int $showVbCode
     */
    public function setShowVbCode(int $showVbCode)
    {
        $this->showVbCode = $showVbCode;
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
    
    public function hasCustomTitle(): bool
    {
        return isset($this->customTitle);
    }    

    /**
     * @return int
     */
    public function getCustomTitle() : int
    {
        return $this->customTitle;
    }

    /**
     * @param int $customTitle
     */
    public function setCustomTitle(int $customTitle)
    {
        $this->customTitle = $customTitle;
    }
    
    public function hasJoinDate(): bool
    {
        return isset($this->joinDate);
    }    

    /**
     * @return int
     */
    public function getJoinDate() : int
    {
        return $this->joinDate;
    }

    /**
     * @param int $joinDate
     */
    public function setJoinDate(int $joinDate)
    {
        $this->joinDate = $joinDate;
    }
    
    public function hasDaysPrune(): bool
    {
        return isset($this->daysPrune);
    }    

    /**
     * @return int
     */
    public function getDaysPrune() : int
    {
        return $this->daysPrune;
    }

    /**
     * @param int $daysPrune
     */
    public function setDaysPrune(int $daysPrune)
    {
        $this->daysPrune = $daysPrune;
    }
    
    public function hasLastVisit(): bool
    {
        return isset($this->lastVisit);
    }    

    /**
     * @return int
     */
    public function getLastVisit() : int
    {
        return $this->lastVisit;
    }

    /**
     * @param int $lastVisit
     */
    public function setLastVisit(int $lastVisit)
    {
        $this->lastVisit = $lastVisit;
    }
    
    public function hasLastActivity(): bool
    {
        return isset($this->lastActivity);
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity;
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity = $lastActivity;
    }
    
    public function hasLastPost(): bool
    {
        return isset($this->lastPost);
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost;
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost = $lastPost;
    }
    
    public function hasPosts(): bool
    {
        return isset($this->posts);
    }    

    /**
     * @return int
     */
    public function getPosts() : int
    {
        return $this->posts;
    }

    /**
     * @param int $posts
     */
    public function setPosts(int $posts)
    {
        $this->posts = $posts;
    }
    
    public function hasReputation(): bool
    {
        return isset($this->reputation);
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation;
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation = $reputation;
    }
    
    public function hasReputationLevelId(): bool
    {
        return isset($this->reputationLevelId);
    }    

    /**
     * @return int
     */
    public function getReputationLevelId() : int
    {
        return $this->reputationLevelId;
    }

    /**
     * @param int $reputationLevelId
     */
    public function setReputationLevelId(int $reputationLevelId)
    {
        $this->reputationLevelId = $reputationLevelId;
    }
    
    public function hasTimeZoneOffset(): bool
    {
        return isset($this->timeZoneOffset);
    }    

    /**
     * @return string
     */
    public function getTimeZoneOffset() : string
    {
        return $this->timeZoneOffset;
    }

    /**
     * @param string $timeZoneOffset
     */
    public function setTimeZoneOffset(string $timeZoneOffset)
    {
        $this->timeZoneOffset = $timeZoneOffset;
    }
    
    public function hasPmPopup(): bool
    {
        return isset($this->pmPopup);
    }    

    /**
     * @return int
     */
    public function getPmPopup() : int
    {
        return $this->pmPopup;
    }

    /**
     * @param int $pmPopup
     */
    public function setPmPopup(int $pmPopup)
    {
        $this->pmPopup = $pmPopup;
    }
    
    public function hasAvatarId(): bool
    {
        return isset($this->avatarId);
    }    

    /**
     * @return int
     */
    public function getAvatarId() : int
    {
        return $this->avatarId;
    }

    /**
     * @param int $avatarId
     */
    public function setAvatarId(int $avatarId)
    {
        $this->avatarId = $avatarId;
    }
    
    public function hasAvatarRevision(): bool
    {
        return isset($this->avatarRevision);
    }    

    /**
     * @return int
     */
    public function getAvatarRevision() : int
    {
        return $this->avatarRevision;
    }

    /**
     * @param int $avatarRevision
     */
    public function setAvatarRevision(int $avatarRevision)
    {
        $this->avatarRevision = $avatarRevision;
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
    
    public function hasBirthday(): bool
    {
        return isset($this->birthday);
    }    

    /**
     * @return string
     */
    public function getBirthday() : string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday)
    {
        $this->birthday = $birthday;
    }
    
    public function hasBirthdaySearch(): bool
    {
        return isset($this->birthdaySearch);
    }    

    /**
     * @return \DateTime
     */
    public function getBirthdaySearch() : \DateTime
    {
        return $this->birthdaySearch;
    }

    /**
     * @param \DateTime $birthdaySearch
     */
    public function setBirthdaySearch(\DateTime $birthdaySearch)
    {
        $this->birthdaySearch = $birthdaySearch;
    }
    
    public function hasMaxPosts(): bool
    {
        return isset($this->maxPosts);
    }    

    /**
     * @return int
     */
    public function getMaxPosts() : int
    {
        return $this->maxPosts;
    }

    /**
     * @param int $maxPosts
     */
    public function setMaxPosts(int $maxPosts)
    {
        $this->maxPosts = $maxPosts;
    }
    
    public function hasStartOfWeek(): bool
    {
        return isset($this->startOfWeek);
    }    

    /**
     * @return int
     */
    public function getStartOfWeek() : int
    {
        return $this->startOfWeek;
    }

    /**
     * @param int $startOfWeek
     */
    public function setStartOfWeek(int $startOfWeek)
    {
        $this->startOfWeek = $startOfWeek;
    }
    
    public function hasIpAddress(): bool
    {
        return isset($this->ipAddress);
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    public function hasReferrerId(): bool
    {
        return isset($this->referrerId);
    }    

    /**
     * @return int
     */
    public function getReferrerId() : int
    {
        return $this->referrerId;
    }

    /**
     * @param int $referrerId
     */
    public function setReferrerId(int $referrerId)
    {
        $this->referrerId = $referrerId;
    }
    
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
    
    public function hasMsn(): bool
    {
        return isset($this->msn);
    }    

    /**
     * @return string
     */
    public function getMsn() : string
    {
        return $this->msn;
    }

    /**
     * @param string $msn
     */
    public function setMsn(string $msn)
    {
        $this->msn = $msn;
    }
    
    public function hasEmailStamp(): bool
    {
        return isset($this->emailStamp);
    }    

    /**
     * @return int
     */
    public function getEmailStamp() : int
    {
        return $this->emailStamp;
    }

    /**
     * @param int $emailStamp
     */
    public function setEmailStamp(int $emailStamp)
    {
        $this->emailStamp = $emailStamp;
    }
    
    public function hasThreadedMode(): bool
    {
        return isset($this->threadedMode);
    }    

    /**
     * @return int
     */
    public function getThreadedMode() : int
    {
        return $this->threadedMode;
    }

    /**
     * @param int $threadedMode
     */
    public function setThreadedMode(int $threadedMode)
    {
        $this->threadedMode = $threadedMode;
    }
    
    public function hasAutoSubscribe(): bool
    {
        return isset($this->autoSubscribe);
    }    

    /**
     * @return int
     */
    public function getAutoSubscribe() : int
    {
        return $this->autoSubscribe;
    }

    /**
     * @param int $autoSubscribe
     */
    public function setAutoSubscribe(int $autoSubscribe)
    {
        $this->autoSubscribe = $autoSubscribe;
    }
    
    public function hasPmTotal(): bool
    {
        return isset($this->pmTotal);
    }    

    /**
     * @return int
     */
    public function getPmTotal() : int
    {
        return $this->pmTotal;
    }

    /**
     * @param int $pmTotal
     */
    public function setPmTotal(int $pmTotal)
    {
        $this->pmTotal = $pmTotal;
    }
    
    public function hasPmUnread(): bool
    {
        return isset($this->pmUnread);
    }    

    /**
     * @return int
     */
    public function getPmUnread() : int
    {
        return $this->pmUnread;
    }

    /**
     * @param int $pmUnread
     */
    public function setPmUnread(int $pmUnread)
    {
        $this->pmUnread = $pmUnread;
    }
    
    public function hasSalt(): bool
    {
        return isset($this->salt);
    }    

    /**
     * @return string
     */
    public function getSalt() : string
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt(string $salt)
    {
        $this->salt = $salt;
    }
    
    public function hasImportUserId(): bool
    {
        return isset($this->importUserId);
    }    

    /**
     * @return int
     */
    public function getImportUserId() : int
    {
        return $this->importUserId;
    }

    /**
     * @param int $importUserId
     */
    public function setImportUserId(int $importUserId)
    {
        $this->importUserId = $importUserId;
    }
    
    public function hasProfilePicRevision(): bool
    {
        return isset($this->profilePicRevision);
    }    

    /**
     * @return int
     */
    public function getProfilePicRevision() : int
    {
        return $this->profilePicRevision;
    }

    /**
     * @param int $profilePicRevision
     */
    public function setProfilePicRevision(int $profilePicRevision)
    {
        $this->profilePicRevision = $profilePicRevision;
    }
    
    public function hasShowBirthday(): bool
    {
        return isset($this->showBirthday);
    }    

    /**
     * @return int
     */
    public function getShowBirthday() : int
    {
        return $this->showBirthday;
    }

    /**
     * @param int $showBirthday
     */
    public function setShowBirthday(int $showBirthday)
    {
        $this->showBirthday = $showBirthday;
    }
    
    public function hasSkype(): bool
    {
        return isset($this->skype);
    }    

    /**
     * @return string
     */
    public function getSkype() : string
    {
        return $this->skype;
    }

    /**
     * @param string $skype
     */
    public function setSkype(string $skype)
    {
        $this->skype = $skype;
    }
    
    public function hasAdminOptions(): bool
    {
        return isset($this->adminOptions);
    }    

    /**
     * @return int
     */
    public function getAdminOptions() : int
    {
        return $this->adminOptions;
    }

    /**
     * @param int $adminOptions
     */
    public function setAdminOptions(int $adminOptions)
    {
        $this->adminOptions = $adminOptions;
    }
    
    public function hasLastPostId(): bool
    {
        return isset($this->lastPostId);
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId;
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId = $lastPostId;
    }
    
    public function hasSigPicRevision(): bool
    {
        return isset($this->sigPicRevision);
    }    

    /**
     * @return int
     */
    public function getSigPicRevision() : int
    {
        return $this->sigPicRevision;
    }

    /**
     * @param int $sigPicRevision
     */
    public function setSigPicRevision(int $sigPicRevision)
    {
        $this->sigPicRevision = $sigPicRevision;
    }
    
    public function hasIPoints(): bool
    {
        return isset($this->iPoints);
    }    

    /**
     * @return int
     */
    public function getIPoints() : int
    {
        return $this->iPoints;
    }

    /**
     * @param int $iPoints
     */
    public function setIPoints(int $iPoints)
    {
        $this->iPoints = $iPoints;
    }
    
    public function hasInfractions(): bool
    {
        return isset($this->infractions);
    }    

    /**
     * @return int
     */
    public function getInfractions() : int
    {
        return $this->infractions;
    }

    /**
     * @param int $infractions
     */
    public function setInfractions(int $infractions)
    {
        $this->infractions = $infractions;
    }
    
    public function hasWarnings(): bool
    {
        return isset($this->warnings);
    }    

    /**
     * @return int
     */
    public function getWarnings() : int
    {
        return $this->warnings;
    }

    /**
     * @param int $warnings
     */
    public function setWarnings(int $warnings)
    {
        $this->warnings = $warnings;
    }
    
    public function hasInfractiongGoupids(): bool
    {
        return isset($this->infractiongGoupids);
    }    

    /**
     * @return string
     */
    public function getInfractiongGoupids() : string
    {
        return $this->infractiongGoupids;
    }

    /**
     * @param string $infractiongGoupids
     */
    public function setInfractiongGoupids(string $infractiongGoupids)
    {
        $this->infractiongGoupids = $infractiongGoupids;
    }
    
    public function hasInfractionGroupId(): bool
    {
        return isset($this->infractionGroupId);
    }    

    /**
     * @return int
     */
    public function getInfractionGroupId() : int
    {
        return $this->infractionGroupId;
    }

    /**
     * @param int $infractionGroupId
     */
    public function setInfractionGroupId(int $infractionGroupId)
    {
        $this->infractionGroupId = $infractionGroupId;
    }
    
    public function hasNCodeImageResizerMode(): bool
    {
        return isset($this->nCodeImageResizerMode);
    }    

    /**
     * @return string|null
     */
    public function getNCodeImageResizerMode() : ?string
    {
        return $this->nCodeImageResizerMode;
    }

    /**
     * @param string|null $nCodeImageResizerMode
     */
    public function setNCodeImageResizerMode(?string $nCodeImageResizerMode)
    {
        $this->nCodeImageResizerMode = $nCodeImageResizerMode;
    }
    
    public function hasNCodeImageResizerMaxWidth(): bool
    {
        return isset($this->nCodeImageResizerMaxWidth);
    }    

    /**
     * @return int|null
     */
    public function getNCodeImageResizerMaxWidth() : ?int
    {
        return $this->nCodeImageResizerMaxWidth;
    }

    /**
     * @param int|null $nCodeImageResizerMaxWidth
     */
    public function setNCodeImageResizerMaxWidth(?int $nCodeImageResizerMaxWidth)
    {
        $this->nCodeImageResizerMaxWidth = $nCodeImageResizerMaxWidth;
    }
    
    public function hasNCodeImageResizerMaxHeight(): bool
    {
        return isset($this->nCodeImageResizerMaxHeight);
    }    

    /**
     * @return int|null
     */
    public function getNCodeImageResizerMaxHeight() : ?int
    {
        return $this->nCodeImageResizerMaxHeight;
    }

    /**
     * @param int|null $nCodeImageResizerMaxHeight
     */
    public function setNCodeImageResizerMaxHeight(?int $nCodeImageResizerMaxHeight)
    {
        $this->nCodeImageResizerMaxHeight = $nCodeImageResizerMaxHeight;
    }
    
    public function hasProfileVisits(): bool
    {
        return isset($this->profileVisits);
    }    

    /**
     * @return int
     */
    public function getProfileVisits() : int
    {
        return $this->profileVisits;
    }

    /**
     * @param int $profileVisits
     */
    public function setProfileVisits(int $profileVisits)
    {
        $this->profileVisits = $profileVisits;
    }
    
    public function hasFriendCount(): bool
    {
        return isset($this->friendCount);
    }    

    /**
     * @return int
     */
    public function getFriendCount() : int
    {
        return $this->friendCount;
    }

    /**
     * @param int $friendCount
     */
    public function setFriendCount(int $friendCount)
    {
        $this->friendCount = $friendCount;
    }
    
    public function hasFriendReqCount(): bool
    {
        return isset($this->friendReqCount);
    }    

    /**
     * @return int
     */
    public function getFriendReqCount() : int
    {
        return $this->friendReqCount;
    }

    /**
     * @param int $friendReqCount
     */
    public function setFriendReqCount(int $friendReqCount)
    {
        $this->friendReqCount = $friendReqCount;
    }
    
    public function hasVmUnreadCount(): bool
    {
        return isset($this->vmUnreadCount);
    }    

    /**
     * @return int
     */
    public function getVmUnreadCount() : int
    {
        return $this->vmUnreadCount;
    }

    /**
     * @param int $vmUnreadCount
     */
    public function setVmUnreadCount(int $vmUnreadCount)
    {
        $this->vmUnreadCount = $vmUnreadCount;
    }
    
    public function hasVmModeratedcount(): bool
    {
        return isset($this->vmModeratedcount);
    }    

    /**
     * @return int
     */
    public function getVmModeratedcount() : int
    {
        return $this->vmModeratedcount;
    }

    /**
     * @param int $vmModeratedcount
     */
    public function setVmModeratedcount(int $vmModeratedcount)
    {
        $this->vmModeratedcount = $vmModeratedcount;
    }
    
    public function hasSocGroupInviteCount(): bool
    {
        return isset($this->socGroupInviteCount);
    }    

    /**
     * @return int
     */
    public function getSocGroupInviteCount() : int
    {
        return $this->socGroupInviteCount;
    }

    /**
     * @param int $socGroupInviteCount
     */
    public function setSocGroupInviteCount(int $socGroupInviteCount)
    {
        $this->socGroupInviteCount = $socGroupInviteCount;
    }
    
    public function hasSocGroupReqCount(): bool
    {
        return isset($this->socGroupReqCount);
    }    

    /**
     * @return int
     */
    public function getSocGroupReqCount() : int
    {
        return $this->socGroupReqCount;
    }

    /**
     * @param int $socGroupReqCount
     */
    public function setSocGroupReqCount(int $socGroupReqCount)
    {
        $this->socGroupReqCount = $socGroupReqCount;
    }
    
    public function hasPcUnreadCount(): bool
    {
        return isset($this->pcUnreadCount);
    }    

    /**
     * @return int
     */
    public function getPcUnreadCount() : int
    {
        return $this->pcUnreadCount;
    }

    /**
     * @param int $pcUnreadCount
     */
    public function setPcUnreadCount(int $pcUnreadCount)
    {
        $this->pcUnreadCount = $pcUnreadCount;
    }
    
    public function hasPcModeratedCount(): bool
    {
        return isset($this->pcModeratedCount);
    }    

    /**
     * @return int
     */
    public function getPcModeratedCount() : int
    {
        return $this->pcModeratedCount;
    }

    /**
     * @param int $pcModeratedCount
     */
    public function setPcModeratedCount(int $pcModeratedCount)
    {
        $this->pcModeratedCount = $pcModeratedCount;
    }
    
    public function hasGmModeratedCount(): bool
    {
        return isset($this->gmModeratedCount);
    }    

    /**
     * @return int
     */
    public function getGmModeratedCount() : int
    {
        return $this->gmModeratedCount;
    }

    /**
     * @param int $gmModeratedCount
     */
    public function setGmModeratedCount(int $gmModeratedCount)
    {
        $this->gmModeratedCount = $gmModeratedCount;
    }

    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): User
    {
        return new User();
    }
}