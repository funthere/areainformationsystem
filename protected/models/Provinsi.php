<?php

/**
 * This is the model class for table "itdel_provinsi".
 *
 * The followings are the available columns in table 'itdel_provinsi':
 * @property integer $kode_prov
 * @property string $nama_prov
 * @property string $ibu_kota_prov
 * @property string $koordinat_prov
 * @property string $polygon_prov
 * @property double $luas_prov
 * @property integer $kepadatan_prov
 * @property integer $jlh_kabupaten
 * @property integer $jlh_kota
 *
 * The followings are the available model relations:
 * @property ItdelKabupatenKota[] $itdelKabupatenKotas
 */
class Provinsi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Provinsi the static model class
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
		return 'itdel_provinsi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_prov, nama_prov, ibu_kota_prov, koordinat_prov, polygon_prov, luas_prov, kepadatan_prov, jlh_kabupaten, jlh_kota', 'required'),
			array('kode_prov, kepadatan_prov, jlh_kabupaten, jlh_kota', 'numerical', 'integerOnly'=>true),
			array('luas_prov', 'numerical'),
			array('nama_prov, ibu_kota_prov', 'length', 'max'=>50),
			array('koordinat_prov', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_prov, nama_prov, ibu_kota_prov, koordinat_prov, polygon_prov, luas_prov, kepadatan_prov, jlh_kabupaten, jlh_kota', 'safe', 'on'=>'search'),
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
			'itdelKabupatenKotas' => array(self::HAS_MANY, 'ItdelKabupatenKota', 'kode_prov'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_prov' => 'Kode Prov',
			'nama_prov' => 'Nama Prov',
			'ibu_kota_prov' => 'Ibu Kota Prov',
			'koordinat_prov' => 'Koordinat Prov',
			'polygon_prov' => 'Polygon Prov',
			'luas_prov' => 'Luas Prov',
			'kepadatan_prov' => 'Kepadatan Prov',
			'jlh_kabupaten' => 'Jlh Kabupaten',
			'jlh_kota' => 'Jlh Kota',
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

		$criteria->compare('kode_prov',$this->kode_prov);
		$criteria->compare('nama_prov',$this->nama_prov,true);
		$criteria->compare('ibu_kota_prov',$this->ibu_kota_prov,true);
		$criteria->compare('koordinat_prov',$this->koordinat_prov,true);
		$criteria->compare('polygon_prov',$this->polygon_prov,true);
		$criteria->compare('luas_prov',$this->luas_prov);
		$criteria->compare('kepadatan_prov',$this->kepadatan_prov);
		$criteria->compare('jlh_kabupaten',$this->jlh_kabupaten);
		$criteria->compare('jlh_kota',$this->jlh_kota);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}