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

class GeneratedUserRecord implements Record {
    
    /** @var $userId RecordValue */
    protected $userId;
    
    /** @var $userGroupId RecordValue */
    protected $userGroupId;
    
    /** @var $memberGroupIds RecordValue */
    protected $memberGroupIds;
    
    /** @var $displayGroupId RecordValue */
    protected $displayGroupId;
    
    /** @var $userName RecordValue */
    protected $userName;
    
    /** @var $password RecordValue */
    protected $password;
    
    /** @var $passwordDate RecordValue */
    protected $passwordDate;
    
    /** @var $email RecordValue */
    protected $email;
    
    /** @var $styleId RecordValue */
    protected $styleId;
    
    /** @var $parentEmail RecordValue */
    protected $parentEmail;
    
    /** @var $homePage RecordValue */
    protected $homePage;
    
    /** @var $icq RecordValue */
    protected $icq;
    
    /** @var $aim RecordValue */
    protected $aim;
    
    /** @var $yahoo RecordValue */
    protected $yahoo;
    
    /** @var $showVbCode RecordValue */
    protected $showVbCode;
    
    /** @var $userTitle RecordValue */
    protected $userTitle;
    
    /** @var $customTitle RecordValue */
    protected $customTitle;
    
    /** @var $joinDate RecordValue */
    protected $joinDate;
    
    /** @var $daysPrune RecordValue */
    protected $daysPrune;
    
    /** @var $lastVisit RecordValue */
    protected $lastVisit;
    
    /** @var $lastActivity RecordValue */
    protected $lastActivity;
    
    /** @var $lastPost RecordValue */
    protected $lastPost;
    
    /** @var $posts RecordValue */
    protected $posts;
    
    /** @var $reputation RecordValue */
    protected $reputation;
    
    /** @var $reputationLevelId RecordValue */
    protected $reputationLevelId;
    
    /** @var $timeZoneOffset RecordValue */
    protected $timeZoneOffset;
    
    /** @var $pmPopup RecordValue */
    protected $pmPopup;
    
    /** @var $avatarId RecordValue */
    protected $avatarId;
    
    /** @var $avatarRevision RecordValue */
    protected $avatarRevision;
    
    /** @var $options RecordValue */
    protected $options;
    
    /** @var $birthday RecordValue */
    protected $birthday;
    
    /** @var $birthdaySearch RecordValue */
    protected $birthdaySearch;
    
    /** @var $maxPosts RecordValue */
    protected $maxPosts;
    
    /** @var $startOfWeek RecordValue */
    protected $startOfWeek;
    
    /** @var $ipAddress RecordValue */
    protected $ipAddress;
    
    /** @var $referrerId RecordValue */
    protected $referrerId;
    
    /** @var $languageId RecordValue */
    protected $languageId;
    
    /** @var $msn RecordValue */
    protected $msn;
    
    /** @var $emailStamp RecordValue */
    protected $emailStamp;
    
    /** @var $threadedMode RecordValue */
    protected $threadedMode;
    
    /** @var $autoSubscribe RecordValue */
    protected $autoSubscribe;
    
    /** @var $pmTotal RecordValue */
    protected $pmTotal;
    
    /** @var $pmUnread RecordValue */
    protected $pmUnread;
    
    /** @var $salt RecordValue */
    protected $salt;
    
    /** @var $importUserId RecordValue */
    protected $importUserId;
    
    /** @var $profilePicRevision RecordValue */
    protected $profilePicRevision;
    
    /** @var $showBirthday RecordValue */
    protected $showBirthday;
    
    /** @var $skype RecordValue */
    protected $skype;
    
    /** @var $adminOptions RecordValue */
    protected $adminOptions;
    
    /** @var $lastPostId RecordValue */
    protected $lastPostId;
    
    /** @var $sigPicRevision RecordValue */
    protected $sigPicRevision;
    
    /** @var $iPoints RecordValue */
    protected $iPoints;
    
    /** @var $infractions RecordValue */
    protected $infractions;
    
    /** @var $warnings RecordValue */
    protected $warnings;
    
    /** @var $infractiongGoupids RecordValue */
    protected $infractiongGoupids;
    
    /** @var $infractionGroupId RecordValue */
    protected $infractionGroupId;
    
    /** @var $nCodeImageResizerMode RecordValue */
    protected $nCodeImageResizerMode;
    
    /** @var $nCodeImageResizerMaxWidth RecordValue */
    protected $nCodeImageResizerMaxWidth;
    
    /** @var $nCodeImageResizerMaxHeight RecordValue */
    protected $nCodeImageResizerMaxHeight;
    
    /** @var $profileVisits RecordValue */
    protected $profileVisits;
    
    /** @var $friendCount RecordValue */
    protected $friendCount;
    
    /** @var $friendReqCount RecordValue */
    protected $friendReqCount;
    
    /** @var $vmUnreadCount RecordValue */
    protected $vmUnreadCount;
    
    /** @var $vmModeratedcount RecordValue */
    protected $vmModeratedcount;
    
    /** @var $socGroupInviteCount RecordValue */
    protected $socGroupInviteCount;
    
    /** @var $socGroupReqCount RecordValue */
    protected $socGroupReqCount;
    
    /** @var $pcUnreadCount RecordValue */
    protected $pcUnreadCount;
    
    /** @var $pcModeratedCount RecordValue */
    protected $pcModeratedCount;
    
    /** @var $gmModeratedCount RecordValue */
    protected $gmModeratedCount;

    public function __construct() {
		$this->userId = new RecordValue();
		$this->userGroupId = new RecordValue();
		$this->memberGroupIds = new RecordValue();
		$this->displayGroupId = new RecordValue();
		$this->userName = new RecordValue();
		$this->password = new RecordValue();
		$this->passwordDate = new RecordValue();
		$this->email = new RecordValue();
		$this->styleId = new RecordValue();
		$this->parentEmail = new RecordValue();
		$this->homePage = new RecordValue();
		$this->icq = new RecordValue();
		$this->aim = new RecordValue();
		$this->yahoo = new RecordValue();
		$this->showVbCode = new RecordValue();
		$this->userTitle = new RecordValue();
		$this->customTitle = new RecordValue();
		$this->joinDate = new RecordValue();
		$this->daysPrune = new RecordValue();
		$this->lastVisit = new RecordValue();
		$this->lastActivity = new RecordValue();
		$this->lastPost = new RecordValue();
		$this->posts = new RecordValue();
		$this->reputation = new RecordValue();
		$this->reputationLevelId = new RecordValue();
		$this->timeZoneOffset = new RecordValue();
		$this->pmPopup = new RecordValue();
		$this->avatarId = new RecordValue();
		$this->avatarRevision = new RecordValue();
		$this->options = new RecordValue();
		$this->birthday = new RecordValue();
		$this->birthdaySearch = new RecordValue();
		$this->maxPosts = new RecordValue();
		$this->startOfWeek = new RecordValue();
		$this->ipAddress = new RecordValue();
		$this->referrerId = new RecordValue();
		$this->languageId = new RecordValue();
		$this->msn = new RecordValue();
		$this->emailStamp = new RecordValue();
		$this->threadedMode = new RecordValue();
		$this->autoSubscribe = new RecordValue();
		$this->pmTotal = new RecordValue();
		$this->pmUnread = new RecordValue();
		$this->salt = new RecordValue();
		$this->importUserId = new RecordValue();
		$this->profilePicRevision = new RecordValue();
		$this->showBirthday = new RecordValue();
		$this->skype = new RecordValue();
		$this->adminOptions = new RecordValue();
		$this->lastPostId = new RecordValue();
		$this->sigPicRevision = new RecordValue();
		$this->iPoints = new RecordValue();
		$this->infractions = new RecordValue();
		$this->warnings = new RecordValue();
		$this->infractiongGoupids = new RecordValue();
		$this->infractionGroupId = new RecordValue();
		$this->nCodeImageResizerMode = new RecordValue();
		$this->nCodeImageResizerMaxWidth = new RecordValue();
		$this->nCodeImageResizerMaxHeight = new RecordValue();
		$this->profileVisits = new RecordValue();
		$this->friendCount = new RecordValue();
		$this->friendReqCount = new RecordValue();
		$this->vmUnreadCount = new RecordValue();
		$this->vmModeratedcount = new RecordValue();
		$this->socGroupInviteCount = new RecordValue();
		$this->socGroupReqCount = new RecordValue();
		$this->pcUnreadCount = new RecordValue();
		$this->pcModeratedCount = new RecordValue();
		$this->gmModeratedCount = new RecordValue();
    }
    
    public function hasUserId(): bool
    {
        return $this->userId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId->getValue();
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId->setChanged(true);
        $this->userId->setValue($userId);
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
    
    public function hasMemberGroupIds(): bool
    {
        return $this->memberGroupIds->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMemberGroupIds() : string
    {
        return $this->memberGroupIds->getValue();
    }

    /**
     * @param string $memberGroupIds
     */
    public function setMemberGroupIds(string $memberGroupIds)
    {
        $this->memberGroupIds->setChanged(true);
        $this->memberGroupIds->setValue($memberGroupIds);
    }
    
    public function hasDisplayGroupId(): bool
    {
        return $this->displayGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDisplayGroupId() : int
    {
        return $this->displayGroupId->getValue();
    }

    /**
     * @param int $displayGroupId
     */
    public function setDisplayGroupId(int $displayGroupId)
    {
        $this->displayGroupId->setChanged(true);
        $this->displayGroupId->setValue($displayGroupId);
    }
    
    public function hasUserName(): bool
    {
        return $this->userName->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getUserName() : string
    {
        return $this->userName->getValue();
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName)
    {
        $this->userName->setChanged(true);
        $this->userName->setValue($userName);
    }
    
    public function hasPassword(): bool
    {
        return $this->password->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password->getValue();
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password->setChanged(true);
        $this->password->setValue($password);
    }
    
    public function hasPasswordDate(): bool
    {
        return $this->passwordDate->hasBeenSet();
    }    

    /**
     * @return \DateTime
     */
    public function getPasswordDate() : \DateTime
    {
        return $this->passwordDate->getValue();
    }

    /**
     * @param \DateTime $passwordDate
     */
    public function setPasswordDate(\DateTime $passwordDate)
    {
        $this->passwordDate->setChanged(true);
        $this->passwordDate->setValue($passwordDate);
    }
    
    public function hasEmail(): bool
    {
        return $this->email->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email->getValue();
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email->setChanged(true);
        $this->email->setValue($email);
    }
    
    public function hasStyleId(): bool
    {
        return $this->styleId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStyleId() : int
    {
        return $this->styleId->getValue();
    }

    /**
     * @param int $styleId
     */
    public function setStyleId(int $styleId)
    {
        $this->styleId->setChanged(true);
        $this->styleId->setValue($styleId);
    }
    
    public function hasParentEmail(): bool
    {
        return $this->parentEmail->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getParentEmail() : string
    {
        return $this->parentEmail->getValue();
    }

    /**
     * @param string $parentEmail
     */
    public function setParentEmail(string $parentEmail)
    {
        $this->parentEmail->setChanged(true);
        $this->parentEmail->setValue($parentEmail);
    }
    
    public function hasHomePage(): bool
    {
        return $this->homePage->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getHomePage() : string
    {
        return $this->homePage->getValue();
    }

    /**
     * @param string $homePage
     */
    public function setHomePage(string $homePage)
    {
        $this->homePage->setChanged(true);
        $this->homePage->setValue($homePage);
    }
    
    public function hasIcq(): bool
    {
        return $this->icq->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIcq() : string
    {
        return $this->icq->getValue();
    }

    /**
     * @param string $icq
     */
    public function setIcq(string $icq)
    {
        $this->icq->setChanged(true);
        $this->icq->setValue($icq);
    }
    
    public function hasAim(): bool
    {
        return $this->aim->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getAim() : string
    {
        return $this->aim->getValue();
    }

    /**
     * @param string $aim
     */
    public function setAim(string $aim)
    {
        $this->aim->setChanged(true);
        $this->aim->setValue($aim);
    }
    
    public function hasYahoo(): bool
    {
        return $this->yahoo->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getYahoo() : string
    {
        return $this->yahoo->getValue();
    }

    /**
     * @param string $yahoo
     */
    public function setYahoo(string $yahoo)
    {
        $this->yahoo->setChanged(true);
        $this->yahoo->setValue($yahoo);
    }
    
    public function hasShowVbCode(): bool
    {
        return $this->showVbCode->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowVbCode() : int
    {
        return $this->showVbCode->getValue();
    }

    /**
     * @param int $showVbCode
     */
    public function setShowVbCode(int $showVbCode)
    {
        $this->showVbCode->setChanged(true);
        $this->showVbCode->setValue($showVbCode);
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
    
    public function hasCustomTitle(): bool
    {
        return $this->customTitle->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getCustomTitle() : int
    {
        return $this->customTitle->getValue();
    }

    /**
     * @param int $customTitle
     */
    public function setCustomTitle(int $customTitle)
    {
        $this->customTitle->setChanged(true);
        $this->customTitle->setValue($customTitle);
    }
    
    public function hasJoinDate(): bool
    {
        return $this->joinDate->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getJoinDate() : int
    {
        return $this->joinDate->getValue();
    }

    /**
     * @param int $joinDate
     */
    public function setJoinDate(int $joinDate)
    {
        $this->joinDate->setChanged(true);
        $this->joinDate->setValue($joinDate);
    }
    
    public function hasDaysPrune(): bool
    {
        return $this->daysPrune->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getDaysPrune() : int
    {
        return $this->daysPrune->getValue();
    }

    /**
     * @param int $daysPrune
     */
    public function setDaysPrune(int $daysPrune)
    {
        $this->daysPrune->setChanged(true);
        $this->daysPrune->setValue($daysPrune);
    }
    
    public function hasLastVisit(): bool
    {
        return $this->lastVisit->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastVisit() : int
    {
        return $this->lastVisit->getValue();
    }

    /**
     * @param int $lastVisit
     */
    public function setLastVisit(int $lastVisit)
    {
        $this->lastVisit->setChanged(true);
        $this->lastVisit->setValue($lastVisit);
    }
    
    public function hasLastActivity(): bool
    {
        return $this->lastActivity->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastActivity() : int
    {
        return $this->lastActivity->getValue();
    }

    /**
     * @param int $lastActivity
     */
    public function setLastActivity(int $lastActivity)
    {
        $this->lastActivity->setChanged(true);
        $this->lastActivity->setValue($lastActivity);
    }
    
    public function hasLastPost(): bool
    {
        return $this->lastPost->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPost() : int
    {
        return $this->lastPost->getValue();
    }

    /**
     * @param int $lastPost
     */
    public function setLastPost(int $lastPost)
    {
        $this->lastPost->setChanged(true);
        $this->lastPost->setValue($lastPost);
    }
    
    public function hasPosts(): bool
    {
        return $this->posts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPosts() : int
    {
        return $this->posts->getValue();
    }

    /**
     * @param int $posts
     */
    public function setPosts(int $posts)
    {
        $this->posts->setChanged(true);
        $this->posts->setValue($posts);
    }
    
    public function hasReputation(): bool
    {
        return $this->reputation->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputation() : int
    {
        return $this->reputation->getValue();
    }

    /**
     * @param int $reputation
     */
    public function setReputation(int $reputation)
    {
        $this->reputation->setChanged(true);
        $this->reputation->setValue($reputation);
    }
    
    public function hasReputationLevelId(): bool
    {
        return $this->reputationLevelId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReputationLevelId() : int
    {
        return $this->reputationLevelId->getValue();
    }

    /**
     * @param int $reputationLevelId
     */
    public function setReputationLevelId(int $reputationLevelId)
    {
        $this->reputationLevelId->setChanged(true);
        $this->reputationLevelId->setValue($reputationLevelId);
    }
    
    public function hasTimeZoneOffset(): bool
    {
        return $this->timeZoneOffset->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getTimeZoneOffset() : string
    {
        return $this->timeZoneOffset->getValue();
    }

    /**
     * @param string $timeZoneOffset
     */
    public function setTimeZoneOffset(string $timeZoneOffset)
    {
        $this->timeZoneOffset->setChanged(true);
        $this->timeZoneOffset->setValue($timeZoneOffset);
    }
    
    public function hasPmPopup(): bool
    {
        return $this->pmPopup->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmPopup() : int
    {
        return $this->pmPopup->getValue();
    }

    /**
     * @param int $pmPopup
     */
    public function setPmPopup(int $pmPopup)
    {
        $this->pmPopup->setChanged(true);
        $this->pmPopup->setValue($pmPopup);
    }
    
    public function hasAvatarId(): bool
    {
        return $this->avatarId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarId() : int
    {
        return $this->avatarId->getValue();
    }

    /**
     * @param int $avatarId
     */
    public function setAvatarId(int $avatarId)
    {
        $this->avatarId->setChanged(true);
        $this->avatarId->setValue($avatarId);
    }
    
    public function hasAvatarRevision(): bool
    {
        return $this->avatarRevision->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAvatarRevision() : int
    {
        return $this->avatarRevision->getValue();
    }

    /**
     * @param int $avatarRevision
     */
    public function setAvatarRevision(int $avatarRevision)
    {
        $this->avatarRevision->setChanged(true);
        $this->avatarRevision->setValue($avatarRevision);
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
    
    public function hasBirthday(): bool
    {
        return $this->birthday->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getBirthday() : string
    {
        return $this->birthday->getValue();
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday)
    {
        $this->birthday->setChanged(true);
        $this->birthday->setValue($birthday);
    }
    
    public function hasBirthdaySearch(): bool
    {
        return $this->birthdaySearch->hasBeenSet();
    }    

    /**
     * @return \DateTime
     */
    public function getBirthdaySearch() : \DateTime
    {
        return $this->birthdaySearch->getValue();
    }

    /**
     * @param \DateTime $birthdaySearch
     */
    public function setBirthdaySearch(\DateTime $birthdaySearch)
    {
        $this->birthdaySearch->setChanged(true);
        $this->birthdaySearch->setValue($birthdaySearch);
    }
    
    public function hasMaxPosts(): bool
    {
        return $this->maxPosts->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getMaxPosts() : int
    {
        return $this->maxPosts->getValue();
    }

    /**
     * @param int $maxPosts
     */
    public function setMaxPosts(int $maxPosts)
    {
        $this->maxPosts->setChanged(true);
        $this->maxPosts->setValue($maxPosts);
    }
    
    public function hasStartOfWeek(): bool
    {
        return $this->startOfWeek->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getStartOfWeek() : int
    {
        return $this->startOfWeek->getValue();
    }

    /**
     * @param int $startOfWeek
     */
    public function setStartOfWeek(int $startOfWeek)
    {
        $this->startOfWeek->setChanged(true);
        $this->startOfWeek->setValue($startOfWeek);
    }
    
    public function hasIpAddress(): bool
    {
        return $this->ipAddress->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getIpAddress() : string
    {
        return $this->ipAddress->getValue();
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress(string $ipAddress)
    {
        $this->ipAddress->setChanged(true);
        $this->ipAddress->setValue($ipAddress);
    }
    
    public function hasReferrerId(): bool
    {
        return $this->referrerId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getReferrerId() : int
    {
        return $this->referrerId->getValue();
    }

    /**
     * @param int $referrerId
     */
    public function setReferrerId(int $referrerId)
    {
        $this->referrerId->setChanged(true);
        $this->referrerId->setValue($referrerId);
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
    
    public function hasMsn(): bool
    {
        return $this->msn->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getMsn() : string
    {
        return $this->msn->getValue();
    }

    /**
     * @param string $msn
     */
    public function setMsn(string $msn)
    {
        $this->msn->setChanged(true);
        $this->msn->setValue($msn);
    }
    
    public function hasEmailStamp(): bool
    {
        return $this->emailStamp->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getEmailStamp() : int
    {
        return $this->emailStamp->getValue();
    }

    /**
     * @param int $emailStamp
     */
    public function setEmailStamp(int $emailStamp)
    {
        $this->emailStamp->setChanged(true);
        $this->emailStamp->setValue($emailStamp);
    }
    
    public function hasThreadedMode(): bool
    {
        return $this->threadedMode->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getThreadedMode() : int
    {
        return $this->threadedMode->getValue();
    }

    /**
     * @param int $threadedMode
     */
    public function setThreadedMode(int $threadedMode)
    {
        $this->threadedMode->setChanged(true);
        $this->threadedMode->setValue($threadedMode);
    }
    
    public function hasAutoSubscribe(): bool
    {
        return $this->autoSubscribe->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAutoSubscribe() : int
    {
        return $this->autoSubscribe->getValue();
    }

    /**
     * @param int $autoSubscribe
     */
    public function setAutoSubscribe(int $autoSubscribe)
    {
        $this->autoSubscribe->setChanged(true);
        $this->autoSubscribe->setValue($autoSubscribe);
    }
    
    public function hasPmTotal(): bool
    {
        return $this->pmTotal->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmTotal() : int
    {
        return $this->pmTotal->getValue();
    }

    /**
     * @param int $pmTotal
     */
    public function setPmTotal(int $pmTotal)
    {
        $this->pmTotal->setChanged(true);
        $this->pmTotal->setValue($pmTotal);
    }
    
    public function hasPmUnread(): bool
    {
        return $this->pmUnread->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPmUnread() : int
    {
        return $this->pmUnread->getValue();
    }

    /**
     * @param int $pmUnread
     */
    public function setPmUnread(int $pmUnread)
    {
        $this->pmUnread->setChanged(true);
        $this->pmUnread->setValue($pmUnread);
    }
    
    public function hasSalt(): bool
    {
        return $this->salt->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSalt() : string
    {
        return $this->salt->getValue();
    }

    /**
     * @param string $salt
     */
    public function setSalt(string $salt)
    {
        $this->salt->setChanged(true);
        $this->salt->setValue($salt);
    }
    
    public function hasImportUserId(): bool
    {
        return $this->importUserId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getImportUserId() : int
    {
        return $this->importUserId->getValue();
    }

    /**
     * @param int $importUserId
     */
    public function setImportUserId(int $importUserId)
    {
        $this->importUserId->setChanged(true);
        $this->importUserId->setValue($importUserId);
    }
    
    public function hasProfilePicRevision(): bool
    {
        return $this->profilePicRevision->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfilePicRevision() : int
    {
        return $this->profilePicRevision->getValue();
    }

    /**
     * @param int $profilePicRevision
     */
    public function setProfilePicRevision(int $profilePicRevision)
    {
        $this->profilePicRevision->setChanged(true);
        $this->profilePicRevision->setValue($profilePicRevision);
    }
    
    public function hasShowBirthday(): bool
    {
        return $this->showBirthday->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getShowBirthday() : int
    {
        return $this->showBirthday->getValue();
    }

    /**
     * @param int $showBirthday
     */
    public function setShowBirthday(int $showBirthday)
    {
        $this->showBirthday->setChanged(true);
        $this->showBirthday->setValue($showBirthday);
    }
    
    public function hasSkype(): bool
    {
        return $this->skype->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getSkype() : string
    {
        return $this->skype->getValue();
    }

    /**
     * @param string $skype
     */
    public function setSkype(string $skype)
    {
        $this->skype->setChanged(true);
        $this->skype->setValue($skype);
    }
    
    public function hasAdminOptions(): bool
    {
        return $this->adminOptions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getAdminOptions() : int
    {
        return $this->adminOptions->getValue();
    }

    /**
     * @param int $adminOptions
     */
    public function setAdminOptions(int $adminOptions)
    {
        $this->adminOptions->setChanged(true);
        $this->adminOptions->setValue($adminOptions);
    }
    
    public function hasLastPostId(): bool
    {
        return $this->lastPostId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getLastPostId() : int
    {
        return $this->lastPostId->getValue();
    }

    /**
     * @param int $lastPostId
     */
    public function setLastPostId(int $lastPostId)
    {
        $this->lastPostId->setChanged(true);
        $this->lastPostId->setValue($lastPostId);
    }
    
    public function hasSigPicRevision(): bool
    {
        return $this->sigPicRevision->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSigPicRevision() : int
    {
        return $this->sigPicRevision->getValue();
    }

    /**
     * @param int $sigPicRevision
     */
    public function setSigPicRevision(int $sigPicRevision)
    {
        $this->sigPicRevision->setChanged(true);
        $this->sigPicRevision->setValue($sigPicRevision);
    }
    
    public function hasIPoints(): bool
    {
        return $this->iPoints->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getIPoints() : int
    {
        return $this->iPoints->getValue();
    }

    /**
     * @param int $iPoints
     */
    public function setIPoints(int $iPoints)
    {
        $this->iPoints->setChanged(true);
        $this->iPoints->setValue($iPoints);
    }
    
    public function hasInfractions(): bool
    {
        return $this->infractions->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractions() : int
    {
        return $this->infractions->getValue();
    }

    /**
     * @param int $infractions
     */
    public function setInfractions(int $infractions)
    {
        $this->infractions->setChanged(true);
        $this->infractions->setValue($infractions);
    }
    
    public function hasWarnings(): bool
    {
        return $this->warnings->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getWarnings() : int
    {
        return $this->warnings->getValue();
    }

    /**
     * @param int $warnings
     */
    public function setWarnings(int $warnings)
    {
        $this->warnings->setChanged(true);
        $this->warnings->setValue($warnings);
    }
    
    public function hasInfractiongGoupids(): bool
    {
        return $this->infractiongGoupids->hasBeenSet();
    }    

    /**
     * @return string
     */
    public function getInfractiongGoupids() : string
    {
        return $this->infractiongGoupids->getValue();
    }

    /**
     * @param string $infractiongGoupids
     */
    public function setInfractiongGoupids(string $infractiongGoupids)
    {
        $this->infractiongGoupids->setChanged(true);
        $this->infractiongGoupids->setValue($infractiongGoupids);
    }
    
    public function hasInfractionGroupId(): bool
    {
        return $this->infractionGroupId->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getInfractionGroupId() : int
    {
        return $this->infractionGroupId->getValue();
    }

    /**
     * @param int $infractionGroupId
     */
    public function setInfractionGroupId(int $infractionGroupId)
    {
        $this->infractionGroupId->setChanged(true);
        $this->infractionGroupId->setValue($infractionGroupId);
    }
    
    public function hasNCodeImageResizerMode(): bool
    {
        return $this->nCodeImageResizerMode->hasBeenSet();
    }    

    /**
     * @return string|null
     */
    public function getNCodeImageResizerMode() : ?string
    {
        return $this->nCodeImageResizerMode->getValue();
    }

    /**
     * @param string|null $nCodeImageResizerMode
     */
    public function setNCodeImageResizerMode(?string $nCodeImageResizerMode)
    {
        $this->nCodeImageResizerMode->setChanged(true);
        $this->nCodeImageResizerMode->setValue($nCodeImageResizerMode);
    }
    
    public function hasNCodeImageResizerMaxWidth(): bool
    {
        return $this->nCodeImageResizerMaxWidth->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getNCodeImageResizerMaxWidth() : ?int
    {
        return $this->nCodeImageResizerMaxWidth->getValue();
    }

    /**
     * @param int|null $nCodeImageResizerMaxWidth
     */
    public function setNCodeImageResizerMaxWidth(?int $nCodeImageResizerMaxWidth)
    {
        $this->nCodeImageResizerMaxWidth->setChanged(true);
        $this->nCodeImageResizerMaxWidth->setValue($nCodeImageResizerMaxWidth);
    }
    
    public function hasNCodeImageResizerMaxHeight(): bool
    {
        return $this->nCodeImageResizerMaxHeight->hasBeenSet();
    }    

    /**
     * @return int|null
     */
    public function getNCodeImageResizerMaxHeight() : ?int
    {
        return $this->nCodeImageResizerMaxHeight->getValue();
    }

    /**
     * @param int|null $nCodeImageResizerMaxHeight
     */
    public function setNCodeImageResizerMaxHeight(?int $nCodeImageResizerMaxHeight)
    {
        $this->nCodeImageResizerMaxHeight->setChanged(true);
        $this->nCodeImageResizerMaxHeight->setValue($nCodeImageResizerMaxHeight);
    }
    
    public function hasProfileVisits(): bool
    {
        return $this->profileVisits->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getProfileVisits() : int
    {
        return $this->profileVisits->getValue();
    }

    /**
     * @param int $profileVisits
     */
    public function setProfileVisits(int $profileVisits)
    {
        $this->profileVisits->setChanged(true);
        $this->profileVisits->setValue($profileVisits);
    }
    
    public function hasFriendCount(): bool
    {
        return $this->friendCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFriendCount() : int
    {
        return $this->friendCount->getValue();
    }

    /**
     * @param int $friendCount
     */
    public function setFriendCount(int $friendCount)
    {
        $this->friendCount->setChanged(true);
        $this->friendCount->setValue($friendCount);
    }
    
    public function hasFriendReqCount(): bool
    {
        return $this->friendReqCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getFriendReqCount() : int
    {
        return $this->friendReqCount->getValue();
    }

    /**
     * @param int $friendReqCount
     */
    public function setFriendReqCount(int $friendReqCount)
    {
        $this->friendReqCount->setChanged(true);
        $this->friendReqCount->setValue($friendReqCount);
    }
    
    public function hasVmUnreadCount(): bool
    {
        return $this->vmUnreadCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVmUnreadCount() : int
    {
        return $this->vmUnreadCount->getValue();
    }

    /**
     * @param int $vmUnreadCount
     */
    public function setVmUnreadCount(int $vmUnreadCount)
    {
        $this->vmUnreadCount->setChanged(true);
        $this->vmUnreadCount->setValue($vmUnreadCount);
    }
    
    public function hasVmModeratedcount(): bool
    {
        return $this->vmModeratedcount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getVmModeratedcount() : int
    {
        return $this->vmModeratedcount->getValue();
    }

    /**
     * @param int $vmModeratedcount
     */
    public function setVmModeratedcount(int $vmModeratedcount)
    {
        $this->vmModeratedcount->setChanged(true);
        $this->vmModeratedcount->setValue($vmModeratedcount);
    }
    
    public function hasSocGroupInviteCount(): bool
    {
        return $this->socGroupInviteCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSocGroupInviteCount() : int
    {
        return $this->socGroupInviteCount->getValue();
    }

    /**
     * @param int $socGroupInviteCount
     */
    public function setSocGroupInviteCount(int $socGroupInviteCount)
    {
        $this->socGroupInviteCount->setChanged(true);
        $this->socGroupInviteCount->setValue($socGroupInviteCount);
    }
    
    public function hasSocGroupReqCount(): bool
    {
        return $this->socGroupReqCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getSocGroupReqCount() : int
    {
        return $this->socGroupReqCount->getValue();
    }

    /**
     * @param int $socGroupReqCount
     */
    public function setSocGroupReqCount(int $socGroupReqCount)
    {
        $this->socGroupReqCount->setChanged(true);
        $this->socGroupReqCount->setValue($socGroupReqCount);
    }
    
    public function hasPcUnreadCount(): bool
    {
        return $this->pcUnreadCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPcUnreadCount() : int
    {
        return $this->pcUnreadCount->getValue();
    }

    /**
     * @param int $pcUnreadCount
     */
    public function setPcUnreadCount(int $pcUnreadCount)
    {
        $this->pcUnreadCount->setChanged(true);
        $this->pcUnreadCount->setValue($pcUnreadCount);
    }
    
    public function hasPcModeratedCount(): bool
    {
        return $this->pcModeratedCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getPcModeratedCount() : int
    {
        return $this->pcModeratedCount->getValue();
    }

    /**
     * @param int $pcModeratedCount
     */
    public function setPcModeratedCount(int $pcModeratedCount)
    {
        $this->pcModeratedCount->setChanged(true);
        $this->pcModeratedCount->setValue($pcModeratedCount);
    }
    
    public function hasGmModeratedCount(): bool
    {
        return $this->gmModeratedCount->hasBeenSet();
    }    

    /**
     * @return int
     */
    public function getGmModeratedCount() : int
    {
        return $this->gmModeratedCount->getValue();
    }

    /**
     * @param int $gmModeratedCount
     */
    public function setGmModeratedCount(int $gmModeratedCount)
    {
        $this->gmModeratedCount->setChanged(true);
        $this->gmModeratedCount->setValue($gmModeratedCount);
    }
    
    /** @noinspection PhpHierarchyChecksInspection */
    /** @noinspection PhpSignatureMismatchDuringInheritanceInspection */
    public function __getModel(): User
    {
        return new User();
    }
}