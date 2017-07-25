<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id_user
 * @property string $user_first_name
 * @property string $user_last_name
 * @property string $user_username
 * @property string $user_password
 * @property string $user_auth_key
 * @property string $user_access_token
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username'], 'string', 'max' => 255],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'first_name' => 'User First Name',
            'last_name' => 'User Last Name',
            'username' => 'User Username',
            'password' => 'User Password',
            'auth_key' => 'User Auth Key',
            'access_token' => 'User Access Token',
        ];
    }
}
