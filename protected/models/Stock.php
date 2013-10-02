<?php

/**
 * This is the model class for table "tbl_stock".
 *
 * The followings are the available columns in table 'tbl_stock':
 * @property string $prod_code
 * @property string $quantity
 * @property string $p_price
 * @property string $s_price
 * @property string $init_quantity
 * @property string $quantity_in
 * @property string $quantity_out
 * @property string $last_entry_date
 * @property string $last_exit_date
 *
 * The followings are the available model relations:
 * @property Products $prodCode
 */
class Stock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Stock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prod_code, quantity, p_price, s_price, init_quantity', 'required'),
			array('prod_code', 'length', 'max'=>20),
			array('quantity, init_quantity, quantity_in, quantity_out', 'length', 'max'=>11),
			array('p_price, s_price', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('prod_code, quantity, p_price, s_price, init_quantity, quantity_in, quantity_out, last_entry_date, last_exit_date', 'safe', 'on'=>'search'),
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
			'prodCode' => array(self::BELONGS_TO, 'Products', 'prod_code'),
//			'products' => array(self::MANY_MANY, 'Products', 'prod_code'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prod_code' => 'Product Code',
			'quantity' => 'Quantity',
			'p_price' => 'Purchase Price',
			's_price' => 'Sale Price',
			'init_quantity' => 'Initial Quantity',
			'quantity_in' => 'Quantity In',
			'quantity_out' => 'Quantity Out',
			'last_entry_date' => 'Last Entry Date',
			'last_exit_date' => 'Last Exit Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('prod_code',$this->prod_code,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('p_price',$this->p_price,true);
		$criteria->compare('s_price',$this->s_price,true);
		$criteria->compare('init_quantity',$this->init_quantity,true);
		$criteria->compare('quantity_in',$this->quantity_in,true);
		$criteria->compare('quantity_out',$this->quantity_out,true);
		$criteria->compare('last_entry_date',$this->last_entry_date,true);
		$criteria->compare('last_exit_date',$this->last_exit_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getProducts()
	{
		$productsArray = CHtml::listData(Products::getAllProducts(), 'code', 'denomination');
		return $productsArray;
	}
}
