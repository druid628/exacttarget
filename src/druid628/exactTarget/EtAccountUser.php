<?PHP

namespace druid628\exactTarget;


class EtAccountUser extends EtBaseClass
{
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
