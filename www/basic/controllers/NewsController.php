<?php


namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\News;
use yii\data\ActiveDataProvider;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
       return $this->render('index',[
           'dataProvider'=>$dataProvider,
       ]);
    }
    public function actionSearch(){
     $search = \Yii::$app->request->get('search');
     $query = News::find()->where(['like', 'id', $search] );
     $this->setMeta('поиск');

        $dataProvider = new ActiveDataProvider([
            'query'=>$query,
            'pagination'=>['pageSize'=>3]
        ]);
        return $this->render('index' , compact('dataProvider','search'));
    }

}