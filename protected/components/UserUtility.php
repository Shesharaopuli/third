<?php

class UserUtility
{
	public static function isAdmin()
	{
		if(isset(Yii::app()->session['travellerlevel']))
		{
			if(Yii::app()->session['travellerlevel']==1)
			{
				return true;
			}
			else {
				return false;
			}
		}
		else 
		{
			return false;
		}
		
	}
	
}
