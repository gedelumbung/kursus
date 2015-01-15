<?php

/**
 * This is the model class for table "tbl_transaksi_tambahan".
 *
 * The followings are the available columns in table 'tbl_transaksi_tambahan':
 * @property integer $id_transaksi_tambahan
 * @property integer $id_guru
 * @property integer $id_program
 * @property string $bulan
 * @property integer $tahun
 * @property integer $jumlah
 * @property string $created_at
 * @property string $updated_at
 */
class TransaksiTunjangan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_transaksi_tambahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_guru, nama_transaksi, bulan, tahun, jumlah', 'required'),
			array('id_guru, tahun, jumlah', 'numerical', 'integerOnly'=>true),
			array('bulan', 'length', 'max'=>2),
			array('created_at, updated_at', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaksi_tambahan, id_guru, nama_transaksi, bulan, tahun, jumlah, created_at, updated_at', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'Pengajar'=>array(self::BELONGS_TO,'Pengajar','id_guru'),
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaksi_tambahan' => 'Id Transaksi Tambahan',
			'id_guru' => 'Pengajar',
			'nama_transaksi' => 'Jenis Transaksi',
			'bulan' => 'Bulan',
			'tahun' => 'Tahun',
			'jumlah' => 'Jumlah',
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

		$criteria->compare('id_transaksi_tambahan',$this->id_transaksi_tambahan);
		$criteria->compare('id_guru',$this->id_guru);
		$criteria->compare('nama_transaksi',$this->nama_transaksi);
		$criteria->compare('bulan',$this->bulan,true);
		$criteria->compare('tahun',$this->tahun);
		$criteria->compare('jumlah',$this->jumlah);
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
	 * @return TransaksiTunjangan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
