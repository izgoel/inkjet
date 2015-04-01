<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $userId
 * @property string $created
 * @property string $pwd
 * @property integer $autLevel
 * @property integer $custId
 * @property string $hint
 * @property string $email
 * @property string $lastLogin
 * @property string $status
 * @property string $profile
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userId, pwd', 'required'),
			array('autLevel, custId', 'numerical', 'integerOnly'=>true),
			array('created, hint, email, lastLogin, status, profile', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, userId, created, pwd, autLevel, custId, hint, email, lastLogin, status, profile', 'safe', 'on'=>'search'),
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
			'userId' => 'User',
			'created' => 'Created',
			'pwd' => 'Pwd',
			'autLevel' => 'Aut Level',
			'custId' => 'Cust',
			'hint' => 'Hint',
			'email' => 'Email',
			'lastLogin' => 'Last Login',
			'status' => 'Status',
			'profile' => 'Profile',
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
		$criteria->compare('userId',$this->userId,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('pwd',$this->pwd,true);
		$criteria->compare('autLevel',$this->autLevel);
		$criteria->compare('custId',$this->custId);
		$criteria->compare('hint',$this->hint,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lastLogin',$this->lastLogin,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('profile',$this->profile,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function validatePassword($password)
        {
            return CPasswordHelper::verifyPassword($password,$this->password);
        }
 
        public function hashPassword($password)
        {
            return CPasswordHelper::hashPassword($password);
        }
}
