<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alat".
 *
 * @property int $id_alat
 * @property string|null $nama_alat
 * @property int|null $no_seri
 * @property string|null $type_alat
 * @property string|null $spesifikasi_alat
 * @property string|null $model_alat
 * @property string|null $foto
 * @property string|null $created
 * @property int|null $createdBy
 * @property string|null $modified
 * @property int|null $modifiedBy
 */
class Alat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_seri', 'createdBy', 'modifiedBy'], 'integer'],
            [['spesifikasi_alat'], 'string'],
            [['created', 'modified'], 'safe'],
            [['nama_alat'], 'string', 'max' => 100],
            [['type_alat'], 'string', 'max' => 20],
            [['model_alat'], 'string', 'max' => 255],
            [['foto'], 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_alat' => 'Id Alat',
            'nama_alat' => 'Nama Alat',
            'no_seri' => 'No Seri',
            'type_alat' => 'Type Alat',
            'spesifikasi_alat' => 'Spesifikasi Alat',
            'model_alat' => 'Model Alat',
            'foto' => 'Foto',
            'created' => 'Created',
            'createdBy' => 'Created By',
            'modified' => 'Modified',
            'modifiedBy' => 'Modified By',
        ];
    }
}
