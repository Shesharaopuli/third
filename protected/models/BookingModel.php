<?php

/**
 * This is the model class for table "booking".
 *
 * The followings are the available columns in table 'booking':
 * @property integer $booking_id
 * @property integer $booking_place_id
 * @property integer $booking_traveller_id
 * @property string $booking_amount
 *
 * The followings are the available model relations:
 * @property Place $bookingPlace
 * @property Traveller $bookingTraveller
 */
class BookingModel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('booking_place_id, booking_traveller_id, booking_amount', 'required'),
			array('booking_place_id, booking_traveller_id', 'numerical', 'integerOnly'=>true),
			array('booking_amount', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('booking_id, booking_place_id, booking_traveller_id, booking_amount', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bookingPlace' => array(self::BELONGS_TO, 'Place', 'booking_place_id'),
			'bookingTraveller' => array(self::BELONGS_TO, 'Traveller', 'booking_traveller_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'booking_id' => 'Booking',
			'booking_place_id' => 'Booking Place',
			'booking_traveller_id' => 'Booking Traveller',
			'booking_amount' => 'Booking Amount',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('booking_id',$this->booking_id);
		$criteria->compare('booking_place_id',$this->booking_place_id);
		$criteria->compare('booking_traveller_id',$this->booking_traveller_id);
		$criteria->compare('booking_amount',$this->booking_amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookingModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
