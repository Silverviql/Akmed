<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends ActiveRecord
{



    public static function tableName()
    {
        return 'order';
    }



    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'subject' => 'Обьект',
            'status' => 'Врачебная специализация',
            'text' => 'Текст сообщения',

            /*'verifyCode' => 'Verification Code',*/
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [

            [['status', 'name', 'subject', 'text'], 'required'],
            ['email', 'email'],
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->save()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
