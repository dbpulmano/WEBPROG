<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $slug
 * @property string $fullName
 * @property string $nickname
 * @property string $email
 * @property string $homeAddress
 * @property string $gender
 * @property string $cellNumber
 * @property string $comments
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slug', 'fullName', 'nickname', 'email', 'homeAddress', 'gender', 'cellNumber', 'comments'], 'required'],
            [['cellNumber'], 'integer'],
            [['slug'], 'string', 'max' => 128],
            [['fullName'], 'string', 'max' => 35],
            [['nickname'], 'string', 'max' => 8],
            [['email'], 'string', 'max' => 20],
            [['homeAddress'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 1],
            [['comments'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'fullName' => 'Full Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'homeAddress' => 'Home Address',
            'gender' => 'Gender',
            'cellNumber' => 'Cell Number',
            'comments' => 'Comments',
        ];
    }
}
