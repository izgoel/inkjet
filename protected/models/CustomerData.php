<?php

/**
 * This is the model class for table "customerData".
 *
 * The followings are the available columns in table 'customerData':
 * @property integer $id
 * @property string $phone
 * @property string $mobile
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $email
 * @property string $lineId
 * @property string $web
 * @property string $credibility
 * @property string $type
 */
class CustomerData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customerData';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('phone, mobile, address, city, zip, email, lineId, web, credibility, type', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, phone, mobile, address, city, zip, email, lineId, web, credibility, type', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'phone' => 'Phone',
			'mobile' => 'Mobile',
			'address' => 'Address',
			'city' => 'City',
			'zip' => 'Zip',
			'email' => 'Email',
			'lineId' => 'Line',
			'web' => 'Web',
			'credibility' => 'Credibility',
			'type' => 'Type',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lineId',$this->lineId,true);
		$criteria->compare('web',$this->web,true);
		$criteria->compare('credibility',$this->credibility,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CustomerData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
