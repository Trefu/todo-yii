<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todos".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $decription
 * @property string|null $created_at
 * @property int|null $checked
 *
 * @property AppUsers $user
 */
class Todos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'checked'], 'integer'],
            [['decription'], 'required'],
            [['decription'], 'string'],
            [['created_at'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => AppUsers::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'decription' => 'Decription',
            'created_at' => 'Created At',
            'checked' => 'Checked',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(AppUsers::className(), ['id' => 'user_id']);
    }
}
