<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ms_produk".
 *
 * @property integer $nID_ms_produk
 * @property integer $vNama_produk
 * @property integer $nID_kategori
 * @property integer $nID_subkategori
 * @property integer $nID_brand
 * @property integer $vProduk_seo
 * @property string $vDeskripsi
 * @property string $vHarga
 * @property string $vStok
 * @property string $dTgl_masuk
 * @property integer $qty_min
 * @property string $deBerat
 * @property string $vPromo
 * @property integer $nID_warna
 * @property string $nAktif
 * @property string $nRow_status
 */
class MsProduk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_produk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vNama_produk', 'nID_kategori', 'nID_subkategori', 'nID_brand', 'dTgl_masuk', 'nID_warna'], 'required'],
            [['nID_kategori', 'nID_subkategori', 'nID_brand', 'vProduk_seo', 'qty_min', 'nID_warna'], 'integer'],
            [['vDeskripsi', 'nAktif', 'nRow_status'], 'string'],
            [['dTgl_masuk'], 'safe'],
            [['deBerat'], 'number'],
            [['vHarga'], 'string', 'max' => 50],
			[['vNama_produk'], 'string','max'=>250],
            [['vStok'], 'string', 'max' => 20],
            [['vPromo'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nID_ms_produk' => 'N Id Ms Produk',
            'vNama_produk' => 'V Nama Produk',
            'nID_kategori' => 'N Id Kategori',
            'nID_subkategori' => 'N Id Subkategori',
            'nID_brand' => 'N Id Brand',
            'vProduk_seo' => 'V Produk Seo',
            'vDeskripsi' => 'V Deskripsi',
            'vHarga' => 'V Harga',
            'vStok' => 'V Stok',
            'dTgl_masuk' => 'D Tgl Masuk',
            'qty_min' => 'Qty Min',
            'deBerat' => 'De Berat',
            'vPromo' => 'V Promo',
            'nID_warna' => 'N Id Warna',
            'nAktif' => 'N Aktif',
            'nRow_status' => 'N Row Status',
        ];
    }
}
