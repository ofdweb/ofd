<?php
namespace common\behaviors;

use yii\db\BaseActiveRecord;

class SoftDeleteBehavior extends \yii2tech\ar\softdelete\SoftDeleteBehavior
{
    /**
     * @inheritdoc
     */
    public $softDeleteAttributeValues = [
        'is_deleted' => IS_DELETED
    ];
}