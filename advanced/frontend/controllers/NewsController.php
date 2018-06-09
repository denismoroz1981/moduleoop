<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\News;
use yii\web\NotFoundHttpException;

//use common\models\Comments;
//use common\models\Tags;
//use common\models\Ads;
//use common\models\Category;


/**
 * Site controller
 */
class NewsController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function actionIndex()
    {
        $news = News::find()->all();
        //$news = News::find()->andWhere(['isanalytical'=>1])->orderBy('sort')->all();

        //$comments = Comments::find()->all();
        //$ads = Adds::find()->all();
        //$category=Category::find()->all();
        //$tags=Tags::find()->all();
        return $this->render('all',[
            'news'=>$news,
            //'comments'=>$comments,
            //'ads'=>$ads,
            //'tags'=>$tags,
            //'category'=>$category
        ]);
    }

    public function actionOne($url) {
        if ($news=News::find()->andWhere(['id'=>$url])->one()) {
        return $this->render('one',['news'=>$news]);}
        throw new NotFoundHttpException("Нет такой новости!");
    }


}
