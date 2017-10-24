<?php
namespace common\helpers;

class Html extends \yii\helpers\Html
{
    public static function tel($text, $phone = null, $options = [])
    {
        $options['href'] = 'tel:' . ($phone === null ? $text : $phone);
        return static::tag('a', $text, $options);
    }
    
    public static function icon($class, $options = ['tag' => 'span'])
    {
        $options['class'] = 'glyphicon glyphicon-' . $class;
        return static::renderIcon($options);
    }
    
    public static function fa($class, $options = ['tag' => 'span'])
    {
        $options['class'] = 'fa fa-' . $class;
        return static::renderIcon($options);
    }
    
    public static function icon_li($class, $options = ['tag' => 'span'])
    {
        $options['class'] = 'li_' . $class;
        return static::renderIcon($options);
    }
    
    private static function renderIcon($options)
    {
        $tag = $options['tag'];
        unset ($options['tag']);
        return static::tag($tag, null, $options);
    }
    
    public static function title($text)
    { 
        return static::encode($text);
    }
    
    public static function page_title($text)
    { 
        return Html::tag('div', 
            Html::tag('h3', static::encode($text)),
        ['class' => 'row bg-title']);
    }
}