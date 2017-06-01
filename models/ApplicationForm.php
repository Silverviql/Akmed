<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;



class ApplicationForm extends ActiveRecord
{



    public static function tableName()
    {
        return 'application';
    }



    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nomer' => 'Номер полиса',
            'spec' => 'Врачебная специализация',
            'uslugi' => 'Вид услуги',
            'oplata' => 'Вид оплаты',
            'address' => 'Выбор медицинской организации',
            'problem' => 'Текст проблемы',

            /*'verifyCode' => 'Verification Code',*/
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            [['nomer', 'spec', 'uslugi', 'oplata', 'address','problem'], 'required'],
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */

}
