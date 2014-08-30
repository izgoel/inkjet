<?php

/**
 * This is the model class for table "invoiceItem".
 *
 * The followings are the available columns in table 'invoiceItem':
 * @property integer $id
 * @property integer $invoiceId
 * @property integer $position
 * @property string $description
 * @property double $unitPrice
 * @property double $units
 * @property double $price
 * @property double $discount
 * @property double $endprice
 * @property double $vat
 */
class InvoiceItem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invoiceItem';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('invoiceId, position, description, unitPrice, units, price, endprice', 'required'),
			array('invoiceId, position', 'numerical', 'integerOnly'=>true),
			array('unitPrice, units, price, discount, endprice, vat', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, invoiceId, position, description, unitPrice, units, price, discount, endprice, vat', 'safe', 'on'=>'search'),
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
			'invoiceId' => 'Invoice',
			'position' => 'Position',
			'description' => 'Description',
			'unitPrice' => 'Unit Price',
			'units' => 'Units',
			'price' => 'Price',
			'discount' => 'Discount',
			'endprice' => 'Endprice',
			'vat' => 'Vat',
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
		$criteria->compare('invoiceId',$this->invoiceId);
		$criteria->compare('position',$this->position);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('unitPrice',$this->unitPrice);
		$criteria->compare('units',$this->units);
		$criteria->compare('price',$this->price);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('endprice',$this->endprice);
		$criteria->compare('vat',$this->vat);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InvoiceItem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
