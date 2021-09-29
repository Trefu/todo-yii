<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "app_users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $password
 *
 * @property Todos[] $todos
 */
class AppUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'app_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[Todos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTodos()
    {
        return $this->hasMany(Todos::className(), ['user_id' => 'id']);
    }
}
