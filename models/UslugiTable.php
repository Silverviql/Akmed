<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class UslugiTable extends ActiveRecord
{


    public static function tableName()
    {
        return 'viduslug';

    }



    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [

            'name_us' => 'Вид услуги',

            /*'verifyCode' => 'Verification Code',*/
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            [['name'], 'required'],
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */

}
