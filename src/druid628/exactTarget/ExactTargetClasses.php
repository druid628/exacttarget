<?php 

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

/**
 * Collection of all other slightly-modified classes provided by ExactTarget
 * Class count: 200
 * Constants Class count: 42
 * --------------------------
 * Total Class count: 242
 *
 */

class EtAPIObject extends EtBaseClass {
  public $Client;            // EtClientID
  public $PartnerKey;        // String
  public $PartnerProperties; // EtAPIProperty
  public $CreatedDate;       // dateTime
  public $ModifiedDate;      // dateTime
  public $ID;                // int
  public $ObjectID;          // String
  public $CustomerKey;       // String
  public $Owner;             // EtOwner
  public $CorrelationID;     // String
}

class EtClientID extends EtBaseClass {
  public $ClientID;          // int
  public $ID;                // int
  public $PartnerClientKey;  // String
  public $UserID;            // int
  public $PartnerUserKey;    // String
  public $CreatedBy;         // int
  public $ModifiedBy;        // int
}

class EtAPIProperty extends EtBaseClass {
  public $Name;              // String
  public $Value;             // String
}

class EtOwner extends EtBaseClass {
  public $Client;            // EtClientID
  public $FromName;          // String
  public $FromAddress;       // String
}

class EtAsyncResponse extends EtBaseClass {
  public $ResponseType;    // EtAsyncResponseType
  public $ResponseAddress; // String
  public $RespondWhen;     // EtRespondWhen
  public $IncludeResults;  // boolean
  public $IncludeObjects;  // boolean
  public $OnlyIncludeBase; // boolean
}

class EtContainerID extends EtBaseClass {
  public $APIObject;         // EtAPIObject
}

class EtRequest extends EtBaseClass {
}

class EtResult extends EtBaseClass {
  public $StatusCode;        // String
  public $StatusMessage;     // String
  public $OrdinalID;         // int
  public $ErrorCode;         // int
  public $RequestID;         // String
  public $ConversationID;    // String
  public $OverallStatusCode; // String
  public $RequestType;       // EtRequestType
  public $ResultType;        // String
  public $ResultDetailXML;   // String
}

class EtOptions extends EtBaseClass {
  public $Client;              // EtClientID
  public $SendResponseTo;      // EtAsyncResponse
  public $SaveOptions;         // EtSaveOptions
  public $Priority;            // byte
  public $ConversationID;      // String
  public $SequenceCode;        // int
  public $CallsInConversation; // int
  public $ScheduledTime;       // dateTime
  public $RequestType;         // EtRequestType
  public $QueuePriority;       // EtPriority
}

class EtSaveOptions extends EtBaseClass {
  public $SaveOption;          // EtSaveOption
}

class EtTaskResult extends EtBaseClass {
  public $StatusCode;          // String
  public $StatusMessage;       // String
  public $OrdinalID;           // int
  public $ErrorCode;           // int
  public $ID;                  // String
  public $InteractionObjectID; // String
}

class EtSaveOption extends EtBaseClass {
  public $PropertyName; // String
  public $SaveAction;   // EtSaveAction
}

class EtNullAPIProperty extends EtBaseClass {
}

class EtResultMessage extends EtBaseClass {
  public $RequestID;             // String
  public $ConversationID;        // String
  public $OverallStatusCode;     // String
  public $StatusCode;            // String
  public $StatusMessage;         // String
  public $ErrorCode;             // int
  public $RequestType;           // EtRequestType
  public $ResultType;            // String
  public $ResultDetailXML;       // String
  public $SequenceCode;          // int
  public $CallsInConversation;   // int
  }

  class EtResultItem extends EtBaseClass {
  public $RequestID;             // String
  public $ConversationID;        // String
  public $StatusCode;            // String
  public $StatusMessage;         // String
  public $OrdinalID;             // int
  public $ErrorCode;             // int
  public $RequestType;           // EtRequestType
  public $RequestObjectType;     // String
}

class EtCreateRequest extends EtBaseClass {
  public $Options; // EtCreateOptions
  public $Objects; // EtAPIObject
}

class EtCreateResult extends EtBaseClass {
  public $NewID;              // int
  public $NewObjectID;        // String
  public $PartnerKey;         // String
  public $Object;             // EtAPIObject
  public $CreateResults;      // EtCreateResult
  public $ParentPropertyName; // String
}

class EtCreateResponse extends EtBaseClass {
  public $Results;       // EtCreateResult
  public $RequestID;     // String
  public $OverallStatus; // String
}

class EtCreateOptions extends EtBaseClass {
  public $Container; // EtContainerID
}

class EtUpdateOptions extends EtBaseClass {
  public $Container; // EtContainerID
  public $Action;    // String
}

class EtUpdateRequest extends EtBaseClass {
  public $Options; // EtUpdateOptions
  public $Objects; // EtAPIObject
}

class EtUpdateResult extends EtBaseClass {
  public $Object;             // EtAPIObject
  public $UpdateResults;      // EtUpdateResult
  public $ParentPropertyName; // String
}

class EtUpdateResponse extends EtBaseClass {
  public $Results;       // EtUpdateResult
  public $RequestID;     // String
  public $OverallStatus; // String
}

class EtDeleteOptions extends EtBaseClass {
}

class EtDeleteRequest extends EtBaseClass {
  public $Options; // EtDeleteOptions
  public $Objects; // EtAPIObject
}

class EtDeleteResult extends EtBaseClass {
  public $Object; // EtAPIObject
}

class EtDeleteResponse extends EtBaseClass {
  public $Results; // EtDeleteResult
  public $RequestID; // String
  public $OverallStatus; // String
}

class EtRecallRequest extends EtBaseClass {
  public $ClientIDs; // EtClientID
  public $ObjectType; // String
  public $Properties; // String
  public $Filter; // EtFilterPart
  public $RespondTo; // EtAsyncResponse
  public $PartnerProperties; // EtAPIProperty
  public $ContinueRequest; // String
  public $QueryAllAccounts; // boolean
  public $RetrieveAllSinceLastBatch; // boolean
  public $RepeatLastResult; // boolean
  public $Retrieves; // EtRetrieves
  public $Options; // EtRetrieveOptions
}

class EtRecalls extends EtBaseClass {
  public $Request; // EtRequest
}

class EtRecallResponseMsg extends EtBaseClass {
  public $OverallStatus; // String
  public $RequestID; // String
  public $Results; // EtAPIObject
}

class EtRecallSingleRequest extends EtBaseClass {
  public $RequestedObject; // EtAPIObject
  public $RetrieveOption; // EtOptions
}

class EtParameters extends EtBaseClass {
  public $Parameter; // EtAPIProperty
}

class EtRecallSingleOptions extends EtBaseClass {
  public $Parameters; // EtParameters
}

class EtRecallOptions extends EtBaseClass {
  public $BatchSize; // int
}

class EtQueryRequest extends EtBaseClass {
  public $ClientIDs; // EtClientID
  public $Query; // EtQuery
  public $RespondTo; // EtAsyncResponse
  public $PartnerProperties; // EtAPIProperty
  public $ContinueRequest; // String
  public $QueryAllAccounts; // boolean
  public $RetrieveAllSinceLastBatch; // boolean
}

class EtQueryRequestMsg extends EtBaseClass {
  public $QueryRequest; // EtQueryRequest
}

class EtQueryResponseMsg extends EtBaseClass {
  public $OverallStatus; // String
  public $RequestID; // String
  public $Results; // EtAPIObject
}

class EtQueryObject extends EtBaseClass {
  public $ObjectType; // String
  public $Properties; // String
  public $Objects; // EtQueryObject
}

class EtQuery extends EtBaseClass {
  public $Object; // EtQueryObject
  public $Filter; // EtFilterPart
}

class EtFilterPart extends EtBaseClass {
}

class EtSimpleFilterPart extends EtBaseClass {
  public $Property; // String
  public $SimpleOperator; // EtSimpleOperators
  public $Value; // String
  public $DateValue; // dateTime
}

class EtTagFilterPart extends EtBaseClass {
  public $Tags; // EtTags
}

class EtTags extends EtBaseClass {
  public $Tag; // String
}

class EtComplexFilterPart extends EtBaseClass {
  public $LeftOperand; // EtFilterPart
  public $LogicalOperator; // EtLogicalOperators
  public $RightOperand; // EtFilterPart
}

class EtDefinitionRequestMsg extends EtBaseClass {
  public $DescribeRequests; // EtArrayOfObjectDefinitionRequest
}

class EtArrayOfObjectDefinitionRequest extends EtBaseClass {
  public $ObjectDefinitionRequest; // EtObjectDefinitionRequest
}

class EtObjectDefinitionRequest extends EtBaseClass {
  public $Client; // EtClientID
  public $ObjectType; // String
}

class EtDefinitionResponseMsg extends EtBaseClass {
  public $ObjectDefinition; // EtObjectDefinition
  public $RequestID; // String
}

class EtPropertyDefinition extends EtBaseClass {
  public $Name; // String
  public $DataType; // String
  public $ValueType; // EtSoapType
  public $PropertyType; // EtPropertyType
  public $IsCreatable; // boolean
  public $IsUpdatable; // boolean
  public $IsRetrievable; // boolean
  public $IsQueryable; // boolean
  public $IsFilterable; // boolean
  public $IsPartnerProperty; // boolean
  public $IsAccountProperty; // boolean
  public $PartnerMap; // String
  public $AttributeMaps; // EtAttributeMap
  public $Markups; // EtAPIProperty
  public $Precision; // int
  public $Scale; // int
  public $Label; // String
  public $Description; // String
  public $DefaultValue; // String
  public $MinLength; // int
  public $MaxLength; // int
  public $MinValue; // String
  public $MaxValue; // String
  public $IsRequired; // boolean
  public $IsViewable; // boolean
  public $IsEditable; // boolean
  public $IsNillable; // boolean
  public $IsRestrictedPicklist; // boolean
  public $PicklistItems; // EtPicklistItems
  public $IsSendTime; // boolean
  public $DisplayOrder; // int
  public $References; // EtReferences
  public $RelationshipName; // String
  public $Status; // String
  public $IsContextSpecific; // boolean
}

class EtPicklistItems extends EtBaseClass {
  public $PicklistItem; // EtPicklistItem
}

class EtReferences extends EtBaseClass {
  public $Reference; // EtAPIObject
}

class EtObjectDefinition extends EtBaseClass {
  public $ObjectType; // String
  public $Name; // String
  public $IsCreatable; // boolean
  public $IsUpdatable; // boolean
  public $IsRetrievable; // boolean
  public $IsQueryable; // boolean
  public $IsReference; // boolean
  public $ReferencedType; // String
  public $IsPropertyCollection; // String
  public $IsObjectCollection; // boolean
  public $Properties; // EtPropertyDefinition
  public $ExtendedProperties; // EtExtendedProperties
  public $ChildObjects; // EtObjectDefinition
}

class EtExtendedProperties extends EtBaseClass {
  public $ExtendedProperty; // EtPropertyDefinition
}

class EtAttributeMap extends EtBaseClass {
  public $EntityName; // String
  public $ColumnName; // String
  public $ColumnNameMappedTo; // String
  public $EntityNameMappedTo; // String
  public $AdditionalData; // EtAPIProperty
}

class EtPicklistItem extends EtBaseClass {
  public $IsDefaultValue; // boolean
  public $Label; // String
  public $Value; // String
}


class EtExecuteRequest extends EtBaseClass {
  public $Client; // EtClientID
  public $Name; // String
  public $Parameters; // EtAPIProperty
}

class EtExecuteResponse extends EtBaseClass {
  public $StatusCode; // String
  public $StatusMessage; // String
  public $OrdinalID; // int
  public $Results; // EtAPIProperty
  public $ErrorCode; // int
}

class EtExecuteRequestMsg extends EtBaseClass {
  public $Requests; // EtExecuteRequest
}

class EtExecuteResponseMsg extends EtBaseClass {
  public $OverallStatus; // String
  public $RequestID; // String
  public $Results; // EtExecuteResponse
}

class EtInteractionDefinition extends EtBaseClass {
  public $InteractionObjectID; // String
}

class EtInteractionBaseObject extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $Keyword; // String
}

class EtPerformOptions extends EtBaseClass {
}

class EtCampaignPerformOptions extends EtBaseClass {
  public $OccurrenceIDs; // String
  public $OccurrenceIDsIndex; // int
}

class EtPerformRequest extends EtBaseClass {
  public $Client; // EtClientID
  public $Action; // String
  public $Definitions; // EtDefinitions
}

class EtDefinitions extends EtBaseClass {
  public $Definition; // EtInteractionBaseObject
}

class EtPerformResponse extends EtBaseClass {
  public $StatusCode; // String
  public $StatusMessage; // String
  public $OrdinalID; // int
  public $Results; // EtResults
  public $ErrorCode; // int
}

class EtResults extends EtBaseClass {
  public $Result; // EtAPIProperty
}

class EtPerformResult extends EtBaseClass {
  public $Object; // EtInteractionBaseObject
  public $Task; // EtTaskResult
}

class EtPerformRequestMsg extends EtBaseClass {
  public $Options; // EtPerformOptions
  public $Action; // String
  public $Definitions; // EtDefinitions
}



class EtPerformResponseMsg extends EtBaseClass {
  public $Results; // EtResults
  public $OverallStatus; // String
  public $OverallStatusMessage; // String
  public $RequestID; // String
}



class EtConfigureOptions extends EtBaseClass {
}

class EtConfigureResult extends EtBaseClass {
  public $Object; // EtAPIObject
}

class EtConfigureRequestMsg extends EtBaseClass {
  public $Options; // EtConfigureOptions
  public $Action; // String
  public $Configurations; // EtConfigurations
}

class EtConfigurations extends EtBaseClass {
  public $Configuration; // EtAPIObject
}

class EtConfigureResponseMsg extends EtBaseClass {
  public $Results; // EtResults
  public $OverallStatus; // String
  public $OverallStatusMessage; // String
  public $RequestID; // String
}



class EtScheduleDefinition extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $Recurrence; // EtRecurrence
  public $RecurrenceType; // EtRecurrenceTypeEnum
  public $RecurrenceRangeType; // EtRecurrenceRangeTypeEnum
  public $StartDateTime; // dateTime
  public $EndDateTime; // dateTime
  public $Occurrences; // int
  public $Keyword; // String
}

class EtScheduleOptions extends EtBaseClass {
}

class EtScheduleResponse extends EtBaseClass {
  public $StatusCode; // String
  public $StatusMessage; // String
  public $OrdinalID; // int
  public $Results; // EtResults
  public $ErrorCode; // int
}



class EtScheduleResult extends EtBaseClass {
  public $Object; // EtScheduleDefinition
  public $Task; // EtTaskResult
}

class EtScheduleRequestMsg extends EtBaseClass {
  public $Options; // EtScheduleOptions
  public $Action; // String
  public $Schedule; // EtScheduleDefinition
  public $Interactions; // EtInteractions
}

class EtInteractions extends EtBaseClass {
  public $Interaction; // EtInteractionBaseObject
}

class EtScheduleResponseMsg extends EtBaseClass {
  public $Results; // EtResults
  public $OverallStatus; // String
  public $OverallStatusMessage; // String
  public $RequestID; // String
}

class EtRecurrence extends EtBaseClass {
}

class EtHourlyRecurrence extends EtBaseClass {
  public $HourlyRecurrencePatternType; // EtHourlyRecurrencePatternTypeEnum
  public $HourInterval; // int
}

class EtDailyRecurrence extends EtBaseClass {
  public $DailyRecurrencePatternType; // EtDailyRecurrencePatternTypeEnum
  public $DayInterval; // int
}

class EtWeeklyRecurrence extends EtBaseClass {
  public $WeeklyRecurrencePatternType; // EtWeeklyRecurrencePatternTypeEnum
  public $WeekInterval; // int
  public $Sunday; // boolean
  public $Monday; // boolean
  public $Tuesday; // boolean
  public $Wednesday; // boolean
  public $Thursday; // boolean
  public $Friday; // boolean
  public $Saturday; // boolean
}

class EtMonthlyRecurrence extends EtBaseClass {
  public $MonthlyRecurrencePatternType; // EtMonthlyRecurrencePatternTypeEnum
  public $MonthlyInterval; // int
  public $ScheduledDay; // int
  public $ScheduledWeek; // EtWeekOfMonthEnum
  public $ScheduledDayOfWeek; // EtDayOfWeekEnum
}

class EtYearlyRecurrence extends EtBaseClass {
  public $YearlyRecurrencePatternType; // EtYearlyRecurrencePatternTypeEnum
  public $ScheduledDay; // int
  public $ScheduledWeek; // EtWeekOfMonthEnum
  public $ScheduledMonth; // EtMonthOfYearEnum
  public $ScheduledDayOfWeek; // EtDayOfWeekEnum
}

class EtExtractRequest extends EtBaseClass {
  public $Client; // EtClientID
  public $ID; // String
  public $Options; // EtExtractOptions
  public $Parameters; // EtParameters
  public $Description; // EtExtractDescription
  public $Definition; // EtExtractDefinition
}

class EtExtractResult extends EtBaseClass {
  public $Request; // EtExtractRequest
}

class EtExtractRequestMsg extends EtBaseClass {
  public $Requests; // EtExtractRequest
}

class EtExtractResponseMsg extends EtBaseClass {
  public $OverallStatus; // String
  public $RequestID; // String
  public $Results; // EtExtractResult
}

class EtExtractOptions extends EtBaseClass {
}

class EtExtractParameter extends EtBaseClass {
}

class EtExtractTemplate extends EtBaseClass {
  public $Name; // String
  public $ConfigurationPage; // String
}

class EtExtractDescription extends EtBaseClass {
  public $Parameters; // EtParameters
}

class EtExtractDefinition extends EtBaseClass {
  public $Parameters; // EtParameters
}

class EtParameterDescription extends EtBaseClass {
}

class EtExtractParameterDescription extends EtBaseClass {
  public $Name; // String
  public $DataType; // EtExtractParameterDataType
  public $DefaultValue; // String
  public $IsOptional; // boolean
}

class EtVersionInfoResponse extends EtBaseClass {
  public $Version; // String
  public $VersionDate; // dateTime
  public $Notes; // String
  public $VersionHistory; // EtVersionInfoResponse
}

class EtVersionInfoRequestMsg extends EtBaseClass {
  public $IncludeVersionHistory; // boolean
}

class EtVersionInfoResponseMsg extends EtBaseClass {
  public $VersionInfo; // EtVersionInfoResponse
  public $RequestID; // String
}

class EtAccount extends EtBaseClass {
  public $AccountType; // EtAccountTypeEnum
  public $ParentID; // int
  public $BrandID; // int
  public $PrivateLabelID; // int
  public $ReportingParentID; // int
  public $Name; // String
  public $Email; // String
  public $FromName; // String
  public $BusinessName; // String
  public $Phone; // String
  public $Address; // String
  public $Fax; // String
  public $City; // String
  public $State; // String
  public $Zip; // String
  public $Country; // String
  public $IsActive; // int
  public $IsTestAccount; // boolean
  public $OrgID; // int
  public $DBID; // int
  public $ParentName; // String
  public $CustomerID; // long
  public $DeletedDate; // dateTime
  public $EditionID; // int
  public $Children; // EtAccountDataItem
  public $Subscription; // EtSubscription
  public $PrivateLabels; // EtPrivateLabel
  public $BusinessRules; // EtBusinessRule
  public $AccountUsers; // EtAccountUser
  public $InheritAddress; // boolean
}

class EtAccountDataItem extends EtBaseClass {
  public $ChildAccountID; // int
  public $BrandID; // int
  public $PrivateLabelID; // int
  public $AccountType; // int
}

class EtSubscription extends EtBaseClass {
  public $SubscriptionID; // int
  public $EmailsPurchased; // int
  public $AccountsPurchased; // int
  public $AdvAccountsPurchased; // int
  public $LPAccountsPurchased; // int
  public $DOTOAccountsPurchased; // int
  public $BUAccountsPurchased; // int
  public $BeginDate; // dateTime
  public $EndDate; // dateTime
  public $Notes; // String
  public $Period; // String
  public $NotificationTitle; // String
  public $NotificationMessage; // String
  public $NotificationFlag; // String
  public $NotificationExpDate; // dateTime
  public $ForAccounting; // String
  public $HasPurchasedEmails; // boolean
}

class EtPrivateLabel extends EtBaseClass {
  public $ID; // int
  public $Name; // String
  public $ColorPaletteXML; // String
  public $LogoFile; // String
  public $Delete; // int
  public $SetActive; // boolean
}

class EtAccountPrivateLabel extends EtBaseClass {
  public $Name; // String
  public $OwnerMemberID; // int
  public $ColorPaletteXML; // String
}

class EtBusinessRule extends EtBaseClass {
  public $MemberBusinessRuleID; // int
  public $BusinessRuleID; // int
  public $Data; // int
  public $Quality; // String
  public $Name; // String
  public $Type; // String
  public $Description; // String
  public $IsViewable; // boolean
  public $IsInheritedFromParent; // boolean
  public $DisplayName; // String
  public $ProductCode; // String
}

class EtAccountUser extends EtBaseClass {
  public $AccountUserID; // int
  public $UserID; // String
  public $Password; // String
  public $Name; // String
  public $Email; // String
  public $MustChangePassword; // boolean
  public $ActiveFlag; // boolean
  public $ChallengePhrase; // String
  public $ChallengeAnswer; // String
  public $UserPermissions; // EtUserAccess
  public $Delete; // int
  public $LastSuccessfulLogin; // dateTime
  public $IsAPIUser; // boolean
  public $NotificationEmailAddress; // String
  public $IsLocked; // boolean
  public $Unlock; // boolean
  public $BusinessUnit; // int
  public $DefaultBusinessUnit; // int
}

class EtUserAccess extends EtBaseClass {
  public $Name; // String
  public $Value; // String
  public $Description; // String
  public $Delete; // int
}

class EtBrand extends EtBaseClass {
  public $BrandID; // int
  public $Label; // String
  public $Comment; // String
  public $BrandTags; // EtBrandTag
}

class EtBrandTag extends EtBaseClass {
  public $BrandID; // int
  public $Label; // String
  public $Data; // String
}

class EtContentArea extends EtBaseClass {
  public $Key; // String
  public $Content; // String
  public $IsBlank; // boolean
  public $CategoryID; // int
  public $Name; // String
  public $Layout; // EtLayoutType
  public $IsDynamicContent; // boolean
  public $IsSurvey; // boolean
}



class EtMessage extends EtBaseClass {
  public $TextBody; // String
}

class EtTrackingEvent extends EtBaseClass {
  public $SendID; // int
  public $SubscriberKey; // String
  public $EventDate; // dateTime
  public $EventType; // EtEventType
  public $TriggeredSendDefinitionObjectID; // String
  public $BatchID; // int
}

class EtOpenEvent extends EtBaseClass {
}

class EtBounceEvent extends EtBaseClass {
  public $SMTPCode; // String
  public $BounceCategory; // String
  public $SMTPReason; // String
  public $BounceType; // String
}

class EtUnsubEvent extends EtBaseClass {
}

class EtClickEvent extends EtBaseClass {
  public $URLID; // int
  public $URL; // String
}

class EtSentEvent extends EtBaseClass {
}

class EtNotSentEvent extends EtBaseClass {
}

class EtSurveyEvent extends EtBaseClass {
  public $Question; // String
  public $Answer; // String
}

class EtForwardedEmailEvent extends EtBaseClass {
}

class EtForwardedEmailOptInEvent extends EtBaseClass {
  public $OptInSubscriberKey; // String
}



class EtSubscriberTypeDefinition extends EtBaseClass {
  public $SubscriberType; // String
}

class EtListSubscriber extends EtBaseClass {
  public $Status; // EtSubscriberStatus
  public $ListID; // int
  public $SubscriberKey; // String
}

class EtSubscriberList extends EtBaseClass {
  public $ID;       // EtList->ID
  public $Status;   // EtSubscriberStatus
  public $List;     // EtList
  public $Action;   // String
}


class EtGroup extends EtBaseClass {
  public $Name; // String
  public $Category; // int
  public $Description; // String
  public $Subscribers; // EtSubscriber
}

class EtGlobalUnsubscribeCategory extends EtBaseClass {
  public $Name; // String
  public $IgnorableByPartners; // boolean
  public $Ignore; // boolean
}

class EtCampaign extends EtBaseClass {
}

class EtSend extends EtBaseClass {
  public $Email; // EtEmail
  public $List; // EtList
  public $SendDate; // dateTime
  public $FromAddress; // String
  public $FromName; // String
  public $Duplicates; // int
  public $InvalidAddresses; // int
  public $ExistingUndeliverables; // int
  public $ExistingUnsubscribes; // int
  public $HardBounces; // int
  public $SoftBounces; // int
  public $OtherBounces; // int
  public $ForwardedEmails; // int
  public $UniqueClicks; // int
  public $UniqueOpens; // int
  public $NumberSent; // int
  public $NumberDelivered; // int
  public $Unsubscribes; // int
  public $MissingAddresses; // int
  public $Subject; // String
  public $PreviewURL; // String
  public $Links; // EtLink
  public $Events; // EtTrackingEvent
  public $SentDate; // dateTime
  public $EmailName; // String
  public $Status; // String
  public $IsMultipart; // boolean
  public $SendLimit; // int
  public $SendWindowOpen; // time
  public $SendWindowClose; // time
  public $IsAlwaysOn; // boolean
}

class EtLink extends EtBaseClass {
  public $LastClicked; // dateTime
  public $Alias; // String
  public $TotalClicks; // int
  public $UniqueClicks; // int
  public $URL; // String
  public $Subscribers; // EtTrackingEvent
}

class EtSendSummary extends EtBaseClass {
  public $AccountID; // int
  public $AccountName; // String
  public $AccountEmail; // String
  public $IsTestAccount; // boolean
  public $SendID; // int
  public $DeliveredTime; // String
  public $TotalSent; // int
  public $Transactional; // int
  public $NonTransactional; // int
}

class EtTriggeredSendDefinition extends EtBaseClass {
  public $CustomerKey; // String
  public $TriggeredSendType; // EtTriggeredSendTypeEnum
  public $TriggeredSendStatus; // EtTriggeredSendStatusEnum
  public $Email; // EtEmail
  public $List; // EtList
  public $AutoAddSubscribers; // boolean
  public $AutoUpdateSubscribers; // boolean
  public $BatchInterval; // int
  public $BccEmail; // String
  public $EmailSubject; // String
  public $DynamicEmailSubject; // String
  public $IsMultipart; // boolean
  public $IsWrapped; // boolean
  public $AllowedSlots; // short
  public $NewSlotTrigger; // int
  public $SendLimit; // int
  public $SendWindowOpen; // time
  public $SendWindowClose; // time
  public $SendWindowDelete; // boolean
  public $RefreshContent; // boolean
  public $ExclusionFilter; // String
  public $Priority; // String
  public $SendSourceCustomerKey; // String
  public $ExclusionListCollection; // EtTriggeredSendExclusionList
  public $CCEmail; // String
  public $SendSourceDataExtension; // EtDataExtension
  public $IsAlwaysOn; // boolean
}

class EtTriggeredSendExclusionList extends EtBaseClass {
}

class EtTriggeredSendCreateResult extends EtBaseClass {
  public $SubscriberFailures; // EtSubscriberResult
}

class EtSubscriberResult extends EtBaseClass {
  public $Subscriber; // EtSubscriber
  public $ErrorCode; // String
  public $ErrorDescription; // String
  public $Ordinal; // int
}

class EtSubscriberSendResult extends EtBaseClass {
  public $Send; // EtSend
  public $Email; // EtEmail
  public $Subscriber; // EtSubscriber
  public $ClickDate; // dateTime
  public $BounceDate; // dateTime
  public $OpenDate; // dateTime
  public $SentDate; // dateTime
  public $LastAction; // String
  public $UnsubscribeDate; // dateTime
  public $FromAddress; // String
  public $FromName; // String
  public $TotalClicks; // int
  public $UniqueClicks; // int
  public $Subject; // String
  public $ViewSentEmailURL; // String
}

class EtTriggeredSendSummary extends EtBaseClass {
  public $TriggeredSendDefinition; // EtTriggeredSendDefinition
  public $Sent; // long
  public $NotSentDueToOptOut; // long
  public $NotSentDueToUndeliverable; // long
  public $Bounces; // long
  public $Opens; // long
  public $Clicks; // long
  public $UniqueOpens; // long
  public $UniqueClicks; // long
  public $OptOuts; // long
  public $SurveyResponses; // long
  public $FTAFRequests; // long
  public $FTAFEmailsSent; // long
  public $FTAFOptIns; // long
  public $Conversions; // long
  public $UniqueConversions; // long
  public $InProcess; // long
  public $NotSentDueToError; // long
}

class EtAsyncRequestResult extends EtBaseClass {
  public $Status; // String
  public $CompleteDate; // dateTime
  public $CallStatus; // String
  public $CallMessage; // String
}

class EtVoiceTriggeredSend extends EtBaseClass {
  public $VoiceTriggeredSendDefinition; // EtVoiceTriggeredSendDefinition
  public $Subscriber; // EtSubscriber
  public $Message; // String
  public $Number; // String
}

class EtVoiceTriggeredSendDefinition extends EtBaseClass {
}

class EtSMSTriggeredSend extends EtBaseClass {
  public $SMSTriggeredSendDefinition; // EtSMSTriggeredSendDefinition
  public $Subscriber; // EtSubscriber
  public $Message; // String
  public $Number; // String
}

class EtSMSTriggeredSendDefinition extends EtBaseClass {
}

class EtSendClassification extends EtBaseClass {
  public $SendClassificationType; // EtSendClassificationTypeEnum
  public $Name; // String
  public $Description; // String
  public $SenderProfile; // EtSenderProfile
  public $DeliveryProfile; // EtDeliveryProfile
}

class EtSenderProfile extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $FromName; // String
  public $FromAddress; // String
  public $UseDefaultRMMRules; // boolean
  public $AutoForwardToEmailAddress; // String
  public $AutoForwardToName; // String
  public $DirectForward; // boolean
  public $AutoForwardTriggeredSend; // EtTriggeredSendDefinition
  public $AutoReply; // boolean
  public $AutoReplyTriggeredSend; // EtTriggeredSendDefinition
  public $SenderHeaderEmailAddress; // String
  public $SenderHeaderName; // String
  public $DataRetentionPeriodLength; // short
  public $DataRetentionPeriodUnitOfMeasure; // EtRecurrenceTypeEnum
}

class EtDeliveryProfile extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $SourceAddressType; // EtDeliveryProfileSourceAddressTypeEnum
  public $PrivateIP; // EtPrivateIP
  public $DomainType; // EtDeliveryProfileDomainTypeEnum
  public $PrivateDomain; // EtPrivateDomain
  public $HeaderSalutationSource; // EtSalutationSourceEnum
  public $HeaderContentArea; // EtContentArea
  public $FooterSalutationSource; // EtSalutationSourceEnum
  public $FooterContentArea; // EtContentArea
}

class EtPrivateDomain extends EtBaseClass {
}

class EtPrivateIP extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $IsActive; // boolean
  public $OrdinalID; // short
  public $IPAddress; // String
}

class EtSendDefinition extends EtBaseClass {
  public $CategoryID; // int
  public $SendClassification; // EtSendClassification
  public $SenderProfile; // EtSenderProfile
  public $FromName; // String
  public $FromAddress; // String
  public $DeliveryProfile; // EtDeliveryProfile
  public $SourceAddressType; // EtDeliveryProfileSourceAddressTypeEnum
  public $PrivateIP; // EtPrivateIP
  public $DomainType; // EtDeliveryProfileDomainTypeEnum
  public $PrivateDomain; // EtPrivateDomain
  public $HeaderSalutationSource; // EtSalutationSourceEnum
  public $HeaderContentArea; // EtContentArea
  public $FooterSalutationSource; // EtSalutationSourceEnum
  public $FooterContentArea; // EtContentArea
  public $SuppressTracking; // boolean
  public $IsSendLogging; // boolean
}

class EtAudienceItem extends EtBaseClass {
  public $List; // EtList
  public $SendDefinitionListType; // EtSendDefinitionListTypeEnum
  public $CustomObjectID; // String
  public $DataSourceTypeID; // EtDataSourceTypeEnum
}

class EtEmailSendDefinition extends EtBaseClass {
  public $SendDefinitionList; // EtSendDefinitionList
  public $Email; // EtEmail
  public $BccEmail; // String
  public $AutoBccEmail; // String
  public $TestEmailAddr; // String
  public $EmailSubject; // String
  public $DynamicEmailSubject; // String
  public $IsMultipart; // boolean
  public $IsWrapped; // boolean
  public $SendLimit; // int
  public $SendWindowOpen; // time
  public $SendWindowClose; // time
  public $SendWindowDelete; // boolean
  public $DeduplicateByEmail; // boolean
  public $ExclusionFilter; // String
  public $TrackingUsers; // EtTrackingUsers
  public $Additional; // String
  public $CCEmail; // String
}

class EtTrackingUsers extends EtBaseClass {
  public $TrackingUser; // EtTrackingUser
}

class EtSendDefinitionList extends EtBaseClass {
  public $FilterDefinition; // EtFilterDefinition
  public $IsTestObject; // boolean
  public $SalesForceObjectID; // String
  public $Name; // String
  public $Parameters; // EtParameters
}

class EtTrackingUser extends EtBaseClass {
  public $IsActive; // boolean
  public $EmployeeID; // int
}

class EtMessagingVendorKind extends EtBaseClass {
  public $Vendor; // String
  public $Kind; // String
  public $IsUsernameRequired; // boolean
  public $IsPasswordRequired; // boolean
  public $IsProfileRequired; // boolean
}

class EtMessagingConfiguration extends EtBaseClass {
  public $Code; // String
  public $MessagingVendorKind; // EtMessagingVendorKind
  public $IsActive; // boolean
  public $Url; // String
  public $UserName; // String
  public $Password; // String
  public $ProfileID; // String
  public $CallbackUrl; // String
  public $MediaTypes; // String
}

class EtUserMap extends EtBaseClass {
  public $ETAccountUser; // EtAccountUser
  public $AdditionalData; // EtAPIProperty
}

class EtFolder extends EtBaseClass {
  public $ID; // int
  public $ParentID; // int
}

class EtFileTransferLocation extends EtBaseClass {
}

class EtDataExtractActivity extends EtBaseClass {
}

class EtMessageSendActivity extends EtBaseClass {
}

class EtSmsSendActivity extends EtBaseClass {
}

class EtReportActivity extends EtBaseClass {
}

class EtDataExtension extends EtBaseClass {
  public $Name; // String
  public $Description; // String
  public $IsSendable; // boolean
  public $IsTestable; // boolean
  public $SendableDataExtensionField; // EtDataExtensionField
  public $SendableSubscriberField; // EtAttribute
  public $Template; // EtDataExtensionTemplate
  public $DataRetentionPeriodLength; // int
  public $DataRetentionPeriodUnitOfMeasure; // int
  public $RowBasedRetention; // boolean
  public $ResetRetentionPeriodOnImport; // boolean
  public $DeleteAtEndOfRetentionPeriod; // boolean
  public $RetainUntil; // String
  public $Fields; // EtFields
  public $DataRetentionPeriod; // EtDateTimeUnitOfMeasure
}

class EtFields extends EtBaseClass {
  public $Field; // EtDataExtensionField
}

class EtDataExtensionField extends EtBaseClass {
  public $Ordinal; // int
  public $IsPrimaryKey; // boolean
  public $FieldType; // EtDataExtensionFieldType
  public $DataExtension; // EtDataExtension
}

class EtDataExtensionTemplate extends EtBaseClass {
  public $Name; // String
}

class EtDataExtensionObject extends EtBaseClass {
  public $Name; // String
  public $Keys; // EtKeys
}

class EtKeys extends EtBaseClass {
  public $Key; // EtAPIProperty
}

class EtDataExtensionError extends EtBaseClass {
  public $Name; // String
  public $ErrorCode; // integer
  public $ErrorMessage; // String
}

class EtDataExtensionCreateResult extends EtBaseClass {
  public $ErrorMessage; // String
  public $KeyErrors; // EtKeyErrors
  public $ValueErrors; // EtValueErrors
}

class EtKeyErrors extends EtBaseClass {
  public $KeyError; // EtDataExtensionError
}

class EtValueErrors extends EtBaseClass {
  public $ValueError; // EtDataExtensionError
}

class EtDataExtensionUpdateResult extends EtBaseClass {
  public $ErrorMessage; // String
  public $KeyErrors; // EtKeyErrors
  public $ValueErrors; // EtValueErrors
}



class EtDataExtensionDeleteResult extends EtBaseClass {
  public $ErrorMessage; // String
  public $KeyErrors; // EtKeyErrors
}




class EtFieldMap extends EtBaseClass {
  public $SourceName; // String
  public $SourceOrdinal; // int
  public $DestinationName; // String
}

class EtImportDefinition extends EtBaseClass {
  public $AllowErrors; // boolean
  public $DestinationObject; // EtAPIObject
  public $FieldMappingType; // EtImportDefinitionFieldMappingType
  public $FieldMaps; // EtFieldMaps
  public $FileSpec; // String
  public $FileType; // EtFileType
  public $Notification; // EtAsyncResponse
  public $RetrieveFileTransferLocation; // EtFileTransferLocation
  public $SubscriberImportType; // EtImportDefinitionSubscriberImportType
  public $UpdateType; // EtImportDefinitionUpdateType
  public $MaxFileAge; // int
  public $MaxFileAgeScheduleOffset; // int
  public $MaxImportFrequency; // int
  public $Delimiter; // String
  public $HeaderLines; // int
}

class EtFieldMaps extends EtBaseClass {
  public $FieldMap; // EtFieldMap
}

class EtImportDefinitionFieldMap extends EtBaseClass {
  public $SourceName; // String
  public $SourceOrdinal; // int
  public $DestinationName; // String
}

class EtImportResultsSummary extends EtBaseClass {
  public $ImportDefinitionCustomerKey; // String
  public $StartDate; // String
  public $EndDate; // String
  public $DestinationID; // String
  public $NumberSuccessful; // int
  public $NumberDuplicated; // int
  public $NumberErrors; // int
  public $TotalRows; // int
  public $ImportType; // String
  public $ImportStatus; // String
  public $TaskResultID; // int
}

class EtFilterDefinition extends EtBaseClass {
}

class EtGroupDefinition extends EtBaseClass {
}

class EtFileTransferActivity extends EtBaseClass {
}

class EtListSend extends EtBaseClass {
  public $SendID; // int
  public $List; // EtList
  public $Duplicates; // int
  public $InvalidAddresses; // int
  public $ExistingUndeliverables; // int
  public $ExistingUnsubscribes; // int
  public $HardBounces; // int
  public $SoftBounces; // int
  public $OtherBounces; // int
  public $ForwardedEmails; // int
  public $UniqueClicks; // int
  public $UniqueOpens; // int
  public $NumberSent; // int
  public $NumberDelivered; // int
  public $Unsubscribes; // int
  public $MissingAddresses; // int
  public $PreviewURL; // String
  public $Links; // EtLink
  public $Events; // EtTrackingEvent
}

class EtLinkSend extends EtBaseClass {
  public $SendID; // int
  public $Link; // EtLink
}

class EtObjectExtension extends EtBaseClass {
  public $Type; // String
  public $Properties; // EtProperties
}

class EtProperties extends EtBaseClass {
  public $Property; // EtAPIProperty
}

class EtPublicKeyManagement extends EtBaseClass {
  public $Name; // String
  public $Key; // base64Binary
}

class EtSystemStatusOptions extends EtBaseClass {
}

class EtSystemStatusRequestMsg extends EtBaseClass {
  public $Options; // EtSystemStatusOptions
}

class EtSystemStatusResult extends EtBaseClass {
  public $SystemStatus; // EtSystemStatusType
  public $Outages; // EtOutages
}

class EtOutages extends EtBaseClass {
  public $Outage; // EtSystemOutage
}

class EtSystemStatusResponseMsg extends EtBaseClass {
  public $Results; // EtResults
  public $OverallStatus; // String
  public $OverallStatusMessage; // String
  public $RequestID; // String
}

class EtSystemOutage extends EtBaseClass {
}

class EtAuthentication extends EtBaseClass {
}

class EtUsernameAuthentication extends EtBaseClass {
  public $UserName; // String
  public $PassWord; // String
}

class EtResourceSpecification extends EtBaseClass {
  public $URN; // String
  public $Authentication; // EtAuthentication
}

class EtPortfolio extends EtBaseClass {
  public $Source; // EtResourceSpecification
  public $CategoryID; // int
  public $FileName; // String
  public $DisplayName; // String
  public $Description; // String
  public $TypeDescription; // String
  public $IsUploaded; // boolean
  public $IsActive; // boolean
  public $FileSizeKB; // int
  public $ThumbSizeKB; // int
  public $FileWidthPX; // int
  public $FileHeightPX; // int
  public $FileURL; // String
  public $ThumbURL; // String
  public $CacheClearTime; // dateTime
  public $CategoryType; // String
}

class EtQueryDefinition extends EtBaseClass {
  public $QueryText; // String
  public $TargetType; // String
  public $DataExtensionTarget; // EtInteractionBaseObject
  public $TargetUpdateType; // String
  public $FileSpec; // String
  public $FileType; // String
  public $Status; // String
}

class EtRecallRequestMsg extends EtBaseClass {
  public $RetrieveRequest; // EtRetrieveRequest
  /**
   * Exact Target relies on Retrieve SOAP Requests containing a
   * RetrieveRequest parameter (typically a RequestMsg object) in
   * order to maintain consistancy of the use of Recall the method
   * setRecallRequest defines the RetrieveRequest parameter with the
   * given object (again, typically a RequestMsg object).
   *
   * @param EtRecallRequestMsg $object 
   */
  public function setRecallRequest($object) {
    $this->RetrieveRequest = $object;
  }
  
  /**
   * Exact Target relies on Retrieve SOAP Requests containing a
   * RetrieveRequest parameter (typically a RequestMsg object) in
   * order to maintain consistancy of the use of Recall the method
   * getRecallRequest returns the RetrieveRequest parameter.
   *
   * @return EtRecallRequestMsg 
   */
  public function getRecallRequest() {
    return $this->RetrieveRequest;
   }
}

// Classes Full of Constants!
// const const and a few more consts

class EtFileType extends EtBaseClass {
  const CSV='CSV';
  const TAB='TAB';
  const Other='Other';
}

class EtImportDefinitionSubscriberImportType extends EtBaseClass {
  const Email='Email';
  const SMS='SMS';
}

class EtImportDefinitionUpdateType extends EtBaseClass {
  const AddAndUpdate='AddAndUpdate';
  const AddAndDoNotUpdate='AddAndDoNotUpdate';
  const UpdateButDoNotAdd='UpdateButDoNotAdd';
  const Merge='Merge';
  const Overwrite='Overwrite';
}

class EtImportDefinitionFieldMappingType extends EtBaseClass {
  const InferFromColumnHeadings='InferFromColumnHeadings';
  const MapByOrdinal='MapByOrdinal';
  const ManualMap='ManualMap';
}

class EtDeliveryProfileSourceAddressTypeEnum extends EtBaseClass {
  const DefaultPrivateIPAddress='DefaultPrivateIPAddress';
  const CustomPrivateIPAddress='CustomPrivateIPAddress';
}

class EtDeliveryProfileDomainTypeEnum extends EtBaseClass {
  const DefaultDomain='DefaultDomain';
  const CustomDomain='CustomDomain';
}

class EtSalutationSourceEnum extends EtBaseClass {
  const _Default='Default';
  const ContentLibrary='ContentLibrary';
  const None='None';
}

class EtRecurrenceTypeEnum extends EtBaseClass {
  const Secondly='Secondly';
  const Minutely='Minutely';
  const Hourly='Hourly';
  const Daily='Daily';
  const Weekly='Weekly';
  const Monthly='Monthly';
  const Yearly='Yearly';
}

class EtRecurrenceRangeTypeEnum extends EtBaseClass {
  const EndAfter='EndAfter';
  const EndOn='EndOn';
}

class EtHourlyRecurrencePatternTypeEnum extends EtBaseClass {
  const Interval='Interval';
}

class EtDailyRecurrencePatternTypeEnum extends EtBaseClass {
  const Interval='Interval';
  const EveryWeekDay='EveryWeekDay';
}

class EtWeeklyRecurrencePatternTypeEnum extends EtBaseClass {
  const ByDay='ByDay';
}

class EtMonthlyRecurrencePatternTypeEnum extends EtBaseClass {
  const ByDay='ByDay';
  const ByWeek='ByWeek';
}

class EtWeekOfMonthEnum extends EtBaseClass {
  const first='first';
  const second='second';
  const third='third';
  const fourth='fourth';
  const last='last';
}

class EtDayOfWeekEnum extends EtBaseClass {
  const Sunday='Sunday';
  const Monday='Monday';
  const Tuesday='Tuesday';
  const Wednesday='Wednesday';
  const Thursday='Thursday';
  const Friday='Friday';
  const Saturday='Saturday';
}

class EtYearlyRecurrencePatternTypeEnum extends EtBaseClass {
  const ByDay='ByDay';
  const ByWeek='ByWeek';
  const ByMonth='ByMonth';
}

class EtMonthOfYearEnum extends EtBaseClass {
  const January='January';
  const February='February';
  const March='March';
  const April='April';
  const May='May';
  const June='June';
  const July='July';
  const August='August';
  const September='September';
  const October='October';
  const November='November';
  const December='December';
}

class EtExtractParameterDataType extends EtBaseClass {
  const datetime='datetime';
  const bool='bool';
  const string='string';
  const integer='integer';
}

class EtAccountTypeEnum extends EtBaseClass {
  const None='None';
  const EXACTTARGET='EXACTTARGET';
  const PRO_CONNECT='PRO_CONNECT';
  const CHANNEL_CONNECT='CHANNEL_CONNECT';
  const CONNECT='CONNECT';
  const PRO_CONNECT_CLIENT='PRO_CONNECT_CLIENT';
  const LP_MEMBER='LP_MEMBER';
  const DOTO_MEMBER='DOTO_MEMBER';
  const ENTERPRISE_2='ENTERPRISE_2';
  const BUSINESS_UNIT='BUSINESS_UNIT';
}

class EtLayoutType extends EtBaseClass {
  const HTMLWrapped='HTMLWrapped';
  const RawText='RawText';
  const SMS='SMS';
}

class EtEventType extends EtBaseClass {
  const Open='Open';
  const Click='Click';
  const HardBounce='HardBounce';
  const SoftBounce='SoftBounce';
  const OtherBounce='OtherBounce';
  const Unsubscribe='Unsubscribe';
  const Sent='Sent';
  const NotSent='NotSent';
  const Survey='Survey';
  const ForwardedEmail='ForwardedEmail';
  const ForwardedEmailOptIn='ForwardedEmailOptIn';
}

class EtSubscriberStatus extends EtBaseClass {
  const Active='Active';
  const Bounced='Bounced';
  const Held='Held';
  const Unsubscribed='Unsubscribed';
  const Deleted='Deleted';
}

class EtEmailType extends EtBaseClass {
  const Text='Text';
  const HTML='HTML';
}
class EtListTypeEnum extends EtBaseClass {
  const _Public='Public';
  const _Private='Private';
  const SalesForce='SalesForce';
  const GlobalUnsubscribe='GlobalUnsubscribe';
  const Master='Master';
}
class EtTriggeredSendTypeEnum extends EtBaseClass {
  const Continuous='Continuous';
  const Batched='Batched';
  const Scheduled='Scheduled';
}

class EtTriggeredSendStatusEnum extends EtBaseClass {
  const _New='New';
  const Inactive='Inactive';
  const Active='Active';
  const Canceled='Canceled';
  const Deleted='Deleted';
}

class EtSendClassificationTypeEnum extends EtBaseClass {
  const Operational='Operational';
  const Marketing='Marketing';
}

class EtSendDefinitionStatusEnum extends EtBaseClass {
  const Active='Active';
  const Archived='Archived';
  const Deleted='Deleted';
}

class EtSendDefinitionListTypeEnum extends EtBaseClass {
  const SourceList='SourceList';
  const ExclusionList='ExclusionList';
  const DomainExclusion='DomainExclusion';
}

class EtDataSourceTypeEnum extends EtBaseClass {
  const _List='List';
  const CustomObject='CustomObject';
  const DomainExclusion='DomainExclusion';
  const SalesForceReport='SalesForceReport';
  const SalesForceCampaign='SalesForceCampaign';
  const FilterDefinition='FilterDefinition';
}

class EtDataExtensionFieldType extends EtBaseClass {
  const Text='Text';
  const Number='Number';
  const Date='Date';
  const Boolean='Boolean';
  const EmailAddress='EmailAddress';
  const Phone='Phone';
}

class EtDateTimeUnitOfMeasure extends EtBaseClass {
  const Days='Days';
  const Weeks='Weeks';
  const Months='Months';
  const Years='Years';
}

class EtSystemStatusType extends EtBaseClass {
  const OK='OK';
  const UnplannedOutage='UnplannedOutage';
  const InMaintenance='InMaintenance';
}

class EtPriority extends EtBaseClass {
  const Low='Low';
  const Medium='Medium';
  const High='High';
}

class EtRequestType extends EtBaseClass {
  const Synchronous='Synchronous';
  const Asynchronous='Asynchronous';
}

class EtRespondWhen extends EtBaseClass {
  const Never='Never';
  const OnError='OnError';
  const Always='Always';
  const OnConversationError='OnConversationError';
  const OnConversationComplete='OnConversationComplete';
  const OnCallComplete='OnCallComplete';
}

class EtAsyncResponseType extends EtBaseClass {
  const None='None';
  const email='email';
  const FTP='FTP';
  const HTTPPost='HTTPPost';
}

class EtSaveAction extends EtBaseClass {
  const AddOnly='AddOnly';
  const _Default='Default';
  const Nothing='Nothing';
  const UpdateAdd='UpdateAdd';
  const UpdateOnly='UpdateOnly';
}

class EtSimpleOperators extends EtBaseClass {
  const EQUALS             = 'equals';
  const NOTEQUALS          = 'notEquals';
  const GREATERTHAN        = 'greaterThan';
  const LESSTHAN           = 'lessThan';
  const ISNULL             = 'isNull';
  const ISNOTNULL          = 'isNotNull';
  const GREATERTHANOREQUAL = 'greaterThanOrEqual';
  const LESSTHANOREQUAL    = 'lessThanOrEqual';
  const BETWEEN            = 'between';
  const IN                 = 'IN';
  const LIKE               = 'like';
}

class EtLogicalOperators extends EtBaseClass {
  const _OR='OR';
  const _AND='AND';
}

class EtSoapType extends EtBaseClass {
  const xsd_string='xsd:string';
  const xsd_boolean='xsd:boolean';
  const xsd_double='xsd:double';
  const xsd_dateTime='xsd:dateTime';
}

class EtPropertyType extends EtBaseClass {
  const string='string';
  const boolean='boolean';
  const double='double';
  const datetime='datetime';
}
