<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property string $fullName
 * @property string $nickname
 * @property string $email
 * @property string $homeAddress
 * @property string $gender
 * @property string $cellNumber
 * @property string $comments
 *
 * @property Trivia[] $trivias
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fullName', 'nickname', 'email', 'gender', 'cellNumber'], 'required'],
            [['id', 'cellNumber'], 'integer'],
            [['fullName'], 'string', 'max' => 35],
            [['nickname'], 'string', 'max' => 8],
            [['email'], 'string', 'max' => 20],
            [['homeAddress'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 1],
            [['comments'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'homeAddress' => 'Home Address',
            'gender' => 'Gender',
            'cellNumber' => 'Cell Number',
            'comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrivias()
    {
        return $this->hasMany(Trivia::className(), ['profile_id' => 'id']);
    }
}
