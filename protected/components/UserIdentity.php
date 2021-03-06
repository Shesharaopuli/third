<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$cmd = Yii::app()->db->createCommand()
		->select('traveller_email, traveller_password')
		->from ('traveller')
		->where ("traveller_email='$this->username'");
		$result = $cmd->query();
		foreach ($result as $row) 
		{
			$email=$row['traveller_email'];
			$password= $row['traveller_password'];
		}
		if(isset($email)&&isset($password))
		{
			$users=array(
				// username => password
				$email => $password,
			);
		}
		else
		{
			$users=array(
					// username => password
					null => null,
			);
		}
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}