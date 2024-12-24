<?php
/* 
 * Team:彩笔小队
 * Coding by 杨友恒 2210203
 * 2024/12/20
 * 评论模型
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $id
 * @property string $tech_name
 * @property string $comment
 * @property string $created_at
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tech_name', 'comment'], 'required'],
            [['comment'], 'string'],
            [['created_at'], 'safe'],
            [['tech_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tech_name' => 'Tech Name',
            'comment' => 'Comment',
            'created_at' => 'Created At',
        ];
    }
}