<?php
class CBreadcrumbs extends CWidget
{
    public $tagName='div';
    public $htmlOptions=array('class'=>'breadcrumbs');
    public $encodeLabel=true;
    public $homeLink;
    public $links=array();
    public $separator='';
    public function run()
    {
        if(empty($this->links))
            return;

        //echo CHtml::openTag($this->tagName,$this->htmlOptions)."\n";
        $links=array();

        if($this->homeLink===null)
            $links[]='<li>'.CHtml::link(Yii::t('zii','Inicio'),Yii::app()->homeUrl).'<span class="divider">/</span></li>';
        else if($this->homeLink!==false)
            $links[]='<li><a>'.$this->homeLink.'</a><span class="divider">/</span></li>';
        foreach($this->links as $label=>$url)
        {
            if(is_string($label) || is_array($url))
                $links[]='<li>'.CHtml::link($this->encodeLabel ? CHtml::encode($label) : $label, $url).'</li></li>';
            else
                $links[]='<li><a>'.($this->encodeLabel ? CHtml::encode($url) : $url).'</a><span class="divider">/</span></li></li>';
        }
        echo implode($this->separator,$links);
        //echo CHtml::closeTag($this->tagName);
    }
}
