<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%event}}".
 *
 * @property integer $type_id
 * @property string $start
 * @property string $end
 * @property string $type
 * @property integer $quantity
 *
 * @property EventType $type0
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%event}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'start'], 'required'],
            [['type_id', 'quantity'], 'integer'],
            [['start', 'end'], 'safe'],
            [['type'], 'string', 'max' => 32],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => EventType::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => Yii::t('app', 'Type ID'),
            'start' => Yii::t('app', 'Start'),
            'end' => Yii::t('app', 'End'),
            'type' => Yii::t('app', 'Type'),
            'quantity' => Yii::t('app', 'Quantity'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(EventType::className(), ['id' => 'type_id']);
    }

    /**
     * @inheritdoc
     * @return EventQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventQuery(get_called_class());
    }
}
