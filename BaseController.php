<?php
class BaseController
{
    var $params;
    public function __get($name)
    {
        if (isset($this->params[$name])) {
            return $this->params[$name];
        } else {
            return "not found";
        }
    }

    function __construct()
    {
        $this->params = array();
    }

    public function render($view, $params = array())
    {
        include 'views/header.php';
        foreach ($params as $key => $value) {
            $this->params[$key] = $value;
        }
        include 'views/' . $view . '.php';
        include 'views/footer.php';
    }

    public function actionIndex()
    {
        $model = Model::getInstance()->findAll();
        $this->render(
            'index',
            array('records' => $model)
        );
    }

    public function actionView($p)
    {
        $record = Model::getInstance()->findByPk($p);
        $this->render(
            'view',
            array(
                'record' => $record,
                'p' => $p
            )
        );
    }

    public function actionDelete($p)
    {
        Model::getInstance()->removeByPk($p)->save();
        return $this->actionIndex();
    }

    public function actionAdd()
    {
        $result = 0;
        $record = new Record();
        if (isset($_POST['code'])) {
            $record->setAttributes($_POST);
            $result = $record->isValid() + 1;
            if ($result == 2) {
                Model::getInstance()->addNew($record)->save();
                return $this->actionIndex();
            }
        }
        $this->render(
            'add',
            array('result' => $result)
        );
    }

    public function actionEdit($p)
    {
        $record = Model::getInstance()->findByPk($p);
        if (isset($_POST['code'])) {
            $record->setAttributes($_POST);
            $result = $record->isValid() + 1;
            if ($result == 2) {
                Model::getInstance()->save();
                return $this->actionIndex();
            }
        }
        $this->render(
            'edit',
            array(
                'record' => $record,
                'p' => $p
            )
        );
    }

    public function actionSearch()
    {
        if (isset($_POST['criteria'])) {
            $code = $_POST['criteria'];
            $list = Model::getInstance()->findByCode($code);
            $this->render(
                'index',
                array('records' => $list)
            );
        } else {
            $this->render('search');
        }
    }
}?>