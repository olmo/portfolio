<?php
class SearchController extends Controller
{
    /**
     * @var string index dir as alias path from <b>application.</b>  , default to <b>runtime.search</b>
     */
    private $_indexFiles = 'runtime.search';
    private $_indexFiles2 = 'runtime2.search';
    public $titulo = 'Búsqueda';
    /**
     * (non-PHPdoc)
     * @see CController::init()
     */
    public function init(){
        Yii::import('application.vendors.*');
        require_once('Zend/Search/Lucene.php');
        parent::init();
    }

    /**
     * Search index creation
     */
    public function actionCreate()
    {
        $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles), true);
        $index2 = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles2), true);

        $artistas = Artistas::model()->findAll();
        $obras = Obra::model()->findAll();
        foreach($artistas as $artista){
            $doc = new Zend_Search_Lucene_Document();

            $doc->addField(Zend_Search_Lucene_Field::Text('nombre',
                    CHtml::encode($artista->nombre),
                    'utf-8')
            );

            $doc->addField(Zend_Search_Lucene_Field::Text('informacion',
                    CHtml::encode($artista->informacion)
                    , 'utf-8')
            );

            $doc->addField(Zend_Search_Lucene_Field::Text('categoria',
                    CHtml::encode($artista->id_categoria)
                    , 'utf-8')
            );

            $index->addDocument($doc);
        }

        foreach($obras as $obra){
            $doc2 = new Zend_Search_Lucene_Document();

            $doc2->addField(Zend_Search_Lucene_Field::Text('titulo',
                    CHtml::encode($obra->titulo),
                    'utf-8')
            );

            $doc2->addField(Zend_Search_Lucene_Field::Text('descripcion',
                    CHtml::encode($obra->descripcion)
                    , 'utf-8')
            );

            $index2->addDocument($doc2);
        }

        $index->commit();
        $index2->commit();
        echo 'Lucene index created';
    }

    public function actionSearch()
    {
        $this->layout='main';
        if (($term = Yii::app()->getRequest()->getParam('q', null)) !== null) {
            $index = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles));
            $results = $index->find($term);
            $query = Zend_Search_Lucene_Search_QueryParser::parse($term);

            $index2 = new Zend_Search_Lucene(Yii::getPathOfAlias('application.' . $this->_indexFiles2));
            $results2 = $index2->find($term);
            $query2 = Zend_Search_Lucene_Search_QueryParser::parse($term);


            $this->render('search', compact('results', 'results2', 'term', 'query', 'query2'));
        }
    }
}