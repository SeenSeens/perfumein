<?php

namespace backend\controllers;

use Yii;
use backend\models\Perfume;
use backend\models\PerfumeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Category;
use yii\helpers\ArrayHelper;
use backend\models\TypeOfPerfume;
use yii\web\UploadedFile;

/**
 * PerfumeController implements the CRUD actions for Perfume model.
 */
class PerfumeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Perfume models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerfumeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Perfume model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Perfume model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perfume();
        // Lấy ra tên danh mục
        $category = new Category();
        $dataCategory = ArrayHelper::map($category->getNameCategory(), "ID_Category", "Category_name");
        // Lấy ra tên loại danh mục
        $typeofperfume = new TypeOfPerfume();
        $dataTypeofperfume = ArrayHelper::map($typeofperfume->getTypeOfPerfume(), "ID_Type_of_perfume", "Name_of_perfume");
        if ($model->load(Yii::$app->request->post())) {
            $model->Image = UploadedFile::getinstance($model, 'Image');
            if ($model->Image) {
                $model->Image->saveAs('../../uploads/images/' . $model->Image->name);
                $model->Image = $model->Image->name;
            }
            if ($model->save(false)) {
                Yii::$app->session->addFlash('success', 'Thêm mới thành công');
                return $this->redirect(['view', 'id' => $model->ID_Perfume]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                    'dataCategory' => $dataCategory,
                    'dataTypeofperfume' => $dataTypeofperfume
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'dataCategory' => $dataCategory,
                'dataTypeofperfume' => $dataTypeofperfume
            ]);
        }
    }

    /**
     * Updates an existing Perfume model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        // Lấy ra tên danh mục
        $category = new Category();
        $dataCategory = ArrayHelper::map($category->getNameCategory(), "ID_Category", "Category_name");
        // Lấy ra tên loại danh mục
        $typeofperfume = new TypeOfPerfume();
        $dataTypeofperfume = ArrayHelper::map($typeofperfume->getTypeOfPerfume(), "ID_Type_of_perfume", "Name_of_perfume");
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->addFlash('success', 'Cập nhật sách thành công');
                return $this->redirect(['view', 'id' => $model->ID_Perfume]);
            } else {
                Yii::$app->session->addFlash('danger', 'Cập nhật sách thất bại');
                return $this->render('update', [
                    'model' => $model,
                    'dataCategory' => $dataCategory,
                    'dataTypeofperfume' => $dataTypeofperfume
                ]);
            }
        }
        return $this->render('update', [
            'model' => $model,
            'dataCategory' => $dataCategory,
            'dataTypeofperfume' => $dataTypeofperfume
        ]);
    }

    /**
     * Deletes an existing Perfume model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Perfume model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Perfume the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perfume::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
