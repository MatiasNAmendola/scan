<?php

class DependenceComboController extends Controller
{
	public function actionIndex($key,$name,$id,$label,$selected = NULL)
	{
        //Obtener los datos de los combos
        $file = Yii::getPathOfAlias('application.data.combo').'.php';
        $loaded = include($file);

        if(isset($loaded[$key])){
            $data = $loaded[$key];
        }else{
            $data=array();
        }


		$this->renderPartial('index',array(
            'data'=>$data,
            'name'=>$name,
            'id'=>$id,
            'label'=>$label,
            'selected'=>$selected,
        ));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}