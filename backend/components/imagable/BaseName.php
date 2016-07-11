<?php
namespace backend\components\imagable;
use Yii;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */
abstract class BaseName extends \yii\base\Object
{
    abstract public function generate($baseName);

    public function getName($name)
    {
        return $this->generate($name);
    }

//    abstract public function generate($name);
//
//    public function getName($name)
//    {
//        $fileName = hash('crc32', $name . time());
//        if(file_exists(Yii::getAlias('@frontend/web/images/shop-category/' . $fileName . '-original.jpg'))) {
//            return $this->getName($name);
//        }
//        return $fileName;
//    }
}
