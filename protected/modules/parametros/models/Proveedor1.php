<?php

/**
 * This is the model class for table "proveedor".
 *
 * The followings are the available columns in table 'proveedor':
 * @property integer $id
 * @property string $cedularuc
 * @property string $razonsocial
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $ciudad
 * @property string $email
 * @property integer $tipodocumento
 * @property string $contacto
 * @property string $nota1
 * @property string $nota2
 * @property string $saldo
 * @property integer $cuentacontableporpagar
 * @property integer $cuentacontableanticipo
 * @property string $autorizacionfactura
 * @property string $fechacaducidad
 * @property integer $idtipoproveedor
 *
 * The followings are the available model relations:
 * @property Compraingreso[] $compraingresos
 * @property Tipoproveedor $tipoproveedor
 * @property Anticipoproveedor[] $anticipoproveedores
 * @property Detallepagoproveedor[] $detallepagoproveedores
 */
class Proveedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Proveedor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proveedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedularuc, razonsocial, direccion, telefono, fax, ciudad, tipodocumento, cuentacontableporpagar, autorizacionfactura, fechacaducidad, idtipoproveedor', 'required'),
			array('id, ciudad, tipodocumento, cuentacontableporpagar, cuentacontableanticipo, idtipoproveedor', 'numerical', 'integerOnly'=>true),
			array('cedularuc', 'length', 'max'=>13),
			array('razonsocial, direccion', 'length', 'max'=>60),
			array('telefono, saldo', 'length', 'max'=>12),
			array('fax, autorizacionfactura', 'length', 'max'=>10),
			array('email, contacto', 'length', 'max'=>40),
			array('nota1, nota2', 'length', 'max'=>200),
                        array('cedularuc','verificaRuc'),
                        array('saldo','numerical'),
                        array('saldo','numerical','min'=>0),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cedularuc, razonsocial, direccion, telefono, fax, ciudad, email, tipodocumento, contacto, nota1, nota2, saldo, cuentacontableporpagar, cuentacontableanticipo, autorizacionfactura, fechacaducidad, idtipoproveedor', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'compraingresos' => array(self::HAS_MANY, 'Compraingreso', 'idproveedor'),
			'tipoproveedor' => array(self::BELONGS_TO, 'Tipoproveedor', 'id'),
			'anticipoproveedores' => array(self::HAS_MANY, 'Anticipoproveedor', 'idproveedor'),
			'detallepagoproveedores' => array(self::HAS_MANY, 'Detallepagoproveedor', 'idproveedor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => MessageHandler::transformar('id','Parametros','Proveedor'),
			'cedularuc' => MessageHandler::transformar('cedularuc','Parametros','Proveedor'),
			'razonsocial' => MessageHandler::transformar('razonsocial','Parametros','Proveedor'),
			'direccion' => MessageHandler::transformar('direccion','Parametros','Proveedor'),
			'telefono' => MessageHandler::transformar('telefono','Parametros','Proveedor'),
			'fax' => MessageHandler::transformar('fax','Parametros','Proveedor'),
			'ciudad' => MessageHandler::transformar('ciudad','Parametros','Proveedor'),
			'email' => MessageHandler::transformar('email','Parametros','Proveedor'),
			'tipodocumento' => MessageHandler::transformar('tipodocumento','Parametros','Proveedor'),
			'contacto' => MessageHandler::transformar('contacto','Parametros','Proveedor'),
			'nota1' => MessageHandler::transformar('nota1','Parametros','Proveedor'),
			'nota2' => MessageHandler::transformar('nota2','Parametros','Proveedor'),
			'saldo' => MessageHandler::transformar('saldo','Parametros','Proveedor'),
			'cuentacontableporpagar' => MessageHandler::transformar('cuentacontableporpagar','Parametros','Proveedor'),
			'cuentacontableanticipo' => MessageHandler::transformar('cuentacontableanticipo','Parametros','Proveedor'),
			'autorizacionfactura' => MessageHandler::transformar('autorizacionfactura','Parametros','Proveedor'),
			'fechacaducidad' => MessageHandler::transformar('fechacaducidad','Parametros','Proveedor'),
			'idtipoproveedor' => MessageHandler::transformar('idtipoproveedor','Parametros','Proveedor'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('cedularuc',$this->cedularuc,true);
		$criteria->compare('razonsocial',$this->razonsocial,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tipodocumento',$this->tipodocumento);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('nota1',$this->nota1,true);
		$criteria->compare('nota2',$this->nota2,true);
		$criteria->compare('saldo',$this->saldo,true);
		$criteria->compare('cuentacontableporpagar',$this->cuentacontableporpagar);
		$criteria->compare('cuentacontableanticipo',$this->cuentacontableanticipo);
		$criteria->compare('autorizacionfactura',$this->autorizacionfactura,true);
		$criteria->compare('fechacaducidad',$this->fechacaducidad,true);
		$criteria->compare('idtipoproveedor',$this->idtipoproveedor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
       
        
        /*
         * 
         */
        protected function beforeSave(){
            if(empty($this->saldo))
                    $this->saldo=0;
            //$this->id=1;
            return parent::beforeSave();
        }

        /*
         * Validacion ruc
         */
      	public function verificaRuc($attribute, $params) {
		$res = ValidacionCedulaRuc::procesarDocumento($this->cedularuc);
		if (!$res->valido)
			$this->addError('ruc', $res->mensaje);
		if (!$res->ruc)
			$this->addError('ruc', 'Debe ser un RUC');
	}
        /*
         * Devuelve un array de todos los campos que se van a mostrar en
         * el grid
         */

         public function columnasLista(){
            $gridlista=array(
                	//'cedularuc',
                          array('name'=>'cedularuc','type'=>'raw','value'=>'CHtml::link($data->cedularuc,array("update","id"=>$data->id))'),
			'razonsocial',
                        'direccion',
                        'telefono',
                        'saldo',
                         array('name'=>'cuentacontableporpagar','type'=>'raw','value'=>'$data->cuentaContable()'),
			 array('name'=>'cuentacontableanticipo','type'=>'raw','value'=>'$data->cuentaContable("anticipo")'),
                        

            );

            return $gridlista;
        }

        /*
         * Retorna el nombre de la cuenta contable
         * @return <string>
         */
        public function nombreCuenta($tipo='pagar'){
            if($tipo=='pagar')
                $model=PlanCuentasNec::model()->findByPk($this->cuentacontableporpagar);
            else
                $model=PlanCuentasNec::model()->findByPk($this->cuentacontableanticipo);

            if ($model==null)
                return  array('ok'=>false,'message'=>MessageHandler::transformar('unset_cuenta','Parametros','Proveedor',array('{nombre}'=>ucfirst($tipo))));
            else
                return array('ok'=>true,'message'=>$model->nombrecuenta);


        }

         /*
         * Devuelve el nombre de la empresa para mostrar en la lista
         *
         * @return <string>
         */
        public function getNombreEmpresa(){
            $empresa=DatosEmpresa::datosGenerales($this->idempresa);

            if($empresa==null)
                return '';
            else
                return $empresa->razonsocial;

        }

         /*
         * Devuelve el nombre de la cuenta contable relacionada
         * o un mensaje
         * @var <string> $tipo
         * @return <string>
         */
        public function cuentaContable($tipo='pagar'){
            $val=$this->nombreCuenta($tipo);
            if($val['ok']){
                if($tipo=='pagar')
                    return (string)CHtml::link($val['message'],array("plancuentasnec/update","id"=>$this->cuentacontableporpagar));
                else
                    return (string)CHtml::link($val['message'],array("plancuentasnec/update","id"=>$this->cuentacontableanticipo));
            }else{
                return $val['message'];
            }

        }

            /*
         *  Busca la cuenta contable en el plan de cuentas ,dependiendo del parametro que
         *  @var <string> $param Parametro de busqueda
         *  @return <CDbCriteria>
         */

        public function buscaProveedor($param,$limit=20){
            $crit=new CDbCriteria();
            $crit->addCondition("(trim(\"razonsocial\") LIKE :parametro or trim(\"cedularuc\") LIKE :parametro)");
            $crit->params=array(':parametro' =>"%$param%");
            $crit->limit=$limit;
            return  $crit;

        }

}