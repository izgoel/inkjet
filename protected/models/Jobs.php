<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property integer $id
 * @property integer $customerId
 * @property string $type
 * @property string $status
 * @property string $createDate
 * @property string $finished
 * @property string $description
 * @property string $tags
 * @property string $person
 * @property integer $quotaId
 * @property integer $discount
 * @property double $price
 * @property integer $invoiceId
 */
class Jobs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jobs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customerId, type, status, createDate, finished, description, person, quotaId, discount', 'required'),
			array('customerId, quotaId, discount, invoiceId', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			array('tags', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customerId, type, status, createDate, finished, description, tags, person, quotaId, discount, price, invoiceId', 'safe', 'on'=>'search'),
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
			'customerId' => 'Customer',
			'type' => 'Type',
			'status' => 'Status',
			'createDate' => 'Create Date',
			'finished' => 'Finished',
			'description' => 'Description',
			'tags' => 'Tags',
			'person' => 'Person',
			'quotaId' => 'Quota',
			'discount' => 'Discount',
			'price' => 'Price',
			'invoiceId' => 'Invoice',
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
		$criteria->compare('customerId',$this->customerId);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('createDate',$this->createDate,true);
		$criteria->compare('finished',$this->finished,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('person',$this->person,true);
		$criteria->compare('quotaId',$this->quotaId);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('price',$this->price);
		$criteria->compare('invoiceId',$this->invoiceId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Jobs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
