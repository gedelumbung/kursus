<?php

/**
 * This is the model class for table "tbl_program".
 *
 * The followings are the available columns in table 'tbl_program':
 * @property integer $id_program
 * @property string $nama
 * @property integer $harga_reguler
 * @property integer $pertemuan_reguler
 * @property integer $harga_privat
 * @property integer $pertemuan_privat
 * @property string $created_at
 * @property string $updated_at
 */
class Program extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_program';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, harga_reguler, gaji_pokok, pertemuan_reguler, harga_privat, created_at, updated_at', 'required'),
			array('harga_reguler, gaji_pokok, pertemuan_reguler, harga_privat, pertemuan_privat', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			array('created_at, updated_at', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_program, gaji_pokok, nama, harga_reguler, pertemuan_reguler, harga_privat, pertemuan_privat, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'id_program' => 'Id Program',
			'nama' => 'Nama Program',
			'harga_reguler' => 'Harga Reguler',
			'pertemuan_reguler' => 'Pertemuan Reguler',
			'harga_privat' => 'Harga Privat',
			'pertemuan_privat' => 'Pertemuan Privat',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'gaji_pokok' => 'Gaji Pokok',
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

		$criteria->compare('id_program',$this->id_program);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('harga_reguler',$this->harga_reguler);
		$criteria->compare('pertemuan_reguler',$this->pertemuan_reguler);
		$criteria->compare('harga_privat',$this->harga_privat);
		$criteria->compare('pertemuan_privat',$this->pertemuan_privat);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Program the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
