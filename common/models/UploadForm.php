<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFile;

    public function rules()
    {
        return [

            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFile as $file) {
                $file->saveAs(Yii::getAlias('@webroot').DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR. md5(time()).'_'.$file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}