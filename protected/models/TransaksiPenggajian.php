<?php

/**
 * This is the model class for table "tbl_transaksi_penggajian".
 *
 * The followings are the available columns in table 'tbl_transaksi_penggajian':
 * @property integer $id_transaksi_penggajian
 * @property integer $id_guru
 * @property integer $id_program
 * @property integer $jumlah_murid_reguler
 * @property integer $jumlah_murid_privat
 * @property string $bulan
 * @property integer $tahun
 * @property string $created_at
 * @property string $updated_at
 */
class TransaksiPenggajian extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_transaksi_penggajian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_guru, id_program, jumlah_murid_reguler, jumlah_murid_privat, bulan, tahun', 'required'),
			array('id_guru, id_program, jumlah_murid_reguler, jumlah_murid_privat, tahun', 'numerical', 'integerOnly'=>true),
			array('bulan', 'length', 'max'=>2),
			array('created_at, updated_at', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi_penggajian, id_guru, id_program, jumlah_murid_reguler, jumlah_murid_privat, bulan, tahun, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Program'=>array(self::BELONGS_TO,'Program','id_program'),
			'Pengajar'=>array(self::BELONGS_TO,'Pengajar','id_guru'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi_penggajian' => 'Id Transaksi Penggajian',
			'id_guru' => 'Pengajar',
			'id_program' => 'Program',
			'jumlah_murid_reguler' => 'Jumlah Murid Reguler',
			'jumlah_murid_privat' => 'Jumlah Murid Privat',
			'bulan' => 'Bulan',
			'tahun' => 'Tahun',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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

		$criteria->compare('id_transaksi_penggajian',$this->id_transaksi_penggajian);
		$criteria->compare('id_guru',$this->id_guru);
		$criteria->compare('id_program',$this->id_program);
		$criteria->compare('jumlah_murid_reguler',$this->jumlah_murid_reguler);
		$criteria->compare('jumlah_murid_privat',$this->jumlah_murid_privat);
		$criteria->compare('bulan',$this->bulan,true);
		$criteria->compare('tahun',$this->tahun);
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
	 * @return TransaksiPenggajian the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
