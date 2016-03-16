<?php

/**
 * This is the model class for table "itdel_kabupaten_kota".
 *
 * The followings are the available columns in table 'itdel_kabupaten_kota':
 * @property integer $kode_kab_kota
 * @property integer $kode_prov
 * @property string $nama_kab_kota
 * @property string $ibukota_kab_kota
 * @property string $koordinat_kab_kota
 * @property string $polygon_kab_kota
 * @property double $luas_kab_kota
 * @property integer $populasi_kab_kota
 * @property integer $jlh_kecamatan
 * @property integer $jlh_desa
 *
 * The followings are the available model relations:
 * @property ItdelProvinsi $kodeProv
 * @property ItdelKecamatan[] $itdelKecamatans
 * @property ItdelWorkArea[] $itdelWorkAreas
 */
class KabupatenKota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KabupatenKota the static model class
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
		return 'itdel_kabupaten_kota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_kab_kota, kode_prov, nama_kab_kota, ibukota_kab_kota, koordinat_kab_kota, polygon_kab_kota, luas_kab_kota, populasi_kab_kota, jlh_kecamatan, jlh_desa', 'required'),
			array('kode_kab_kota, kode_prov, populasi_kab_kota, jlh_kecamatan, jlh_desa', 'numerical', 'integerOnly'=>true),
			array('luas_kab_kota', 'numerical'),
			array('nama_kab_kota, ibukota_kab_kota', 'length', 'max'=>50),
			array('koordinat_kab_kota', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_kab_kota, kode_prov, nama_kab_kota, ibukota_kab_kota, koordinat_kab_kota, polygon_kab_kota, luas_kab_kota, populasi_kab_kota, jlh_kecamatan, jlh_desa', 'safe', 'on'=>'search'),
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
			'kodeProv' => array(self::BELONGS_TO, 'ItdelProvinsi', 'kode_prov'),
			'itdelKecamatans' => array(self::HAS_MANY, 'ItdelKecamatan', 'kode_kab_kota'),
			'itdelWorkAreas' => array(self::HAS_MANY, 'ItdelWorkArea', 'kode_kab_kota'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_kab_kota' => 'Kode Kab Kota',
			'kode_prov' => 'Kode Prov',
			'nama_kab_kota' => 'Nama Kab Kota',
			'ibukota_kab_kota' => 'Ibukota Kab Kota',
			'koordinat_kab_kota' => 'Koordinat Kab Kota',
			'polygon_kab_kota' => 'Polygon Kab Kota',
			'luas_kab_kota' => 'Luas Kab Kota',
			'populasi_kab_kota' => 'Populasi Kab Kota',
			'jlh_kecamatan' => 'Jlh Kecamatan',
			'jlh_desa' => 'Jlh Desa',
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

		$criteria->compare('kode_kab_kota',$this->kode_kab_kota);
		$criteria->compare('kode_prov',$this->kode_prov);
		$criteria->compare('nama_kab_kota',$this->nama_kab_kota,true);
		$criteria->compare('ibukota_kab_kota',$this->ibukota_kab_kota,true);
		$criteria->compare('koordinat_kab_kota',$this->koordinat_kab_kota,true);
		$criteria->compare('polygon_kab_kota',$this->polygon_kab_kota,true);
		$criteria->compare('luas_kab_kota',$this->luas_kab_kota);
		$criteria->compare('populasi_kab_kota',$this->populasi_kab_kota);
		$criteria->compare('jlh_kecamatan',$this->jlh_kecamatan);
		$criteria->compare('jlh_desa',$this->jlh_desa);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}