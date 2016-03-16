<?php

/**
 * This is the model class for table "itdel_kecamatan".
 *
 * The followings are the available columns in table 'itdel_kecamatan':
 * @property integer $kode_kec
 * @property integer $kode_kab_kota
 * @property string $nama_kec
 * @property string $ibukota_kec
 * @property string $koordinat_kec
 * @property string $polygon_kec
 * @property double $luas_kec
 * @property integer $jlh_dealer
 *
 * The followings are the available model relations:
 * @property ItdelDealer[] $itdelDealers
 * @property ItdelKabupatenKota $kodeKabKota
 */
class Kecamatan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kecamatan the static model class
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
		return 'itdel_kecamatan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_kec, kode_kab_kota, nama_kec, ibukota_kec, koordinat_kec, polygon_kec, luas_kec, jlh_dealer', 'required'),
			array('kode_kec, kode_kab_kota, jlh_dealer', 'numerical', 'integerOnly'=>true),
			array('luas_kec', 'numerical'),
			array('nama_kec, ibukota_kec', 'length', 'max'=>50),
			array('koordinat_kec', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_kec, kode_kab_kota, nama_kec, ibukota_kec, koordinat_kec, polygon_kec, luas_kec, jlh_dealer', 'safe', 'on'=>'search'),
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
			'itdelDealers' => array(self::HAS_MANY, 'ItdelDealer', 'kode_kec'),
			'kodeKabKota' => array(self::BELONGS_TO, 'ItdelKabupatenKota', 'kode_kab_kota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_kec' => 'Kode Kec',
			'kode_kab_kota' => 'Kode Kab Kota',
			'nama_kec' => 'Nama Kec',
			'ibukota_kec' => 'Ibukota Kec',
			'koordinat_kec' => 'Koordinat Kec',
			'polygon_kec' => 'Polygon Kec',
			'luas_kec' => 'Luas Kec',
			'jlh_dealer' => 'Jlh Dealer',
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

		$criteria->compare('kode_kec',$this->kode_kec);
		$criteria->compare('kode_kab_kota',$this->kode_kab_kota);
		$criteria->compare('nama_kec',$this->nama_kec,true);
		$criteria->compare('ibukota_kec',$this->ibukota_kec,true);
		$criteria->compare('koordinat_kec',$this->koordinat_kec,true);
		$criteria->compare('polygon_kec',$this->polygon_kec,true);
		$criteria->compare('luas_kec',$this->luas_kec);
		$criteria->compare('jlh_dealer',$this->jlh_dealer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}