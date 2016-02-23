<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $created_by
 * @property string $tittle
 * @property string $body
 * @property integer $status
 * @property integer $comment_status
 * @property integer $comment_conunt
 * @property integer $views
 * @property string $publish_up
 * @property string $publish_down
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'tittle', 'body', 'status', 'comment_status', 'comment_conunt', 'views', 'publish_up', 'publish_down'], 'required'],
            [['id', 'created_by', 'status', 'comment_status', 'comment_conunt', 'views'], 'integer'],
            [['tittle', 'body'], 'string'],
            [['publish_up', 'publish_down'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'tittle' => Yii::t('app', 'Tittle'),
            'body' => Yii::t('app', 'Body'),
            'status' => Yii::t('app', 'Status'),
            'comment_status' => Yii::t('app', 'Comment Status'),
            'comment_conunt' => Yii::t('app', 'Comment Conunt'),
            'views' => Yii::t('app', 'Views'),
            'publish_up' => Yii::t('app', 'Publish Up'),
            'publish_down' => Yii::t('app', 'Publish Down'),
        ];
    }
}
