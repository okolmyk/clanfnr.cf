<?php

namespace app\controllers;

use Yii;
use app\components\CommonController;
use app\models\ar\Equipment;
use yii\data\ActiveDataProvider;
use app\models\ar\Expirience;
use app\models\ar\AccessoryType;
use app\models\ar\Accessory;
use app\models\ar\Material;

class EquipmentController extends CommonController {
	public function actionIndex() {
		$dataProvider = new ActiveDataProvider ( [ 
				'query' => Equipment::find ()->with ( [ 
						'accessory' => function ($query) {
							$query->from ( [ 
									'accessory' 
							] );
						},
						'type' => function ($query) {
							$query->from ( [ 
									'accessory_type' 
							] );
						},
						'eqiupmentExpiriences',
						'eqiupmentMaterials' 
				] ),
				'sort' => false,
				'pagination' => false 
		] );
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider,
				'expiriences' => Expirience::find ()->all (),
				'accessoryTypes' => AccessoryType::find ()->all (),
				'accessories' => Accessory::find ()->all (),
				'materials' => Material::find ()->all () 
		] );
	}
}
