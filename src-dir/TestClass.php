<?php

/**
 * Class TestClass предназначен только для тетсирования использования PHPDoc.
 *
 * Здесь мы можем детальнее расписать о назначении класа или что-то еще. Ниже укажем списко свойств класса.
 *
 * @property integer $testVariable1;
 * @property string $testVariable2;
 * @property string $testVariable3;
 * @method static string thirthFunction() и комммент к нему
 */

class TestClass
{


    private $testVariable1;
    private $testVariable2;
    public $testVariable3;

    /** @var string $testVariable4 обратить внимание, будет ли указано название переменной. */
    public $testVariable4;


    /**
     * Это просто тестовая функция.
     * В тегах param описываем переменные, котороые принимает текущий метод или функция.
     * Если в параметрах мы будем указывать тип переменных, IDE будет ихучитывать и давать соответсвующие подсказки.
     * При этом, интерпритатор php будет игнорировать эти указания типов, поскольку для него это просто пользовательские комментарии.
     * @link https://docs.phpdoc.org/3.0/guide/references/phpdoc/tags/index.html здесь все теги, которые могут быть использованы.
     * @param int $a просто переменная, кстати самого пояснения может и не быть, это нормально.
     * @param string $b еще одна переменная.
     * @see SecondClass::tratata()
     * @return $this|int|string ну и наконец результат.
     */

    public function testFunction(int $a, string $b)
    {
        $this->testVariable1 = $a;
        $this->testVariable2 = $b;
        $this->testVariable3 = $a . $b;
        if ($a > 5) {
            return $a + 5;
        } elseif (strlen($b) > 7) {
            return $b . 'comment';
        }

        return $this;
    }


    // Посмотрим, учтет ли phpDocumentor хоть как-то не задокумнетированный метод
    public function secondFunction()
    {
        return "some";
    }

    static function thirthFunction()
    {
        return 'some';
    }

}

// Посмотрим, учтет ли phpDocumentor хоть как-то не задокумнетированный класс
class SecondClass
{
    public function tratata()
    {
        return 123;
    }
}