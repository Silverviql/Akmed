<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class SpecTable extends ActiveRecord
{


    public static function tableName()
    {
        return 'vidspec';

    }



    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [

            'name_sp' => 'Врачебная специализация',

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
