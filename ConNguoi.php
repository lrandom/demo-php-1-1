<?php
interface IConNguoi{
    function run();

    function study();

    function abc();
}

interface Animal{
    function dcf();
}

abstract class ConNguoi
{
    protected $hoTen;

    /**
     * @return mixed
     */
    public function getHoTen()
    {
        return $this->hoTen;
    }

    /**
     * @param mixed $hoTen
     */
    public  function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }

    function eat()
    {
        $this->hoTen . " ăn cơm";
    }

    abstract function sleep();
}

class Teacher extends ConNguoi implements IConNguoi,Animal
{
    public function setHoTen($name)
    {

    }

    function teach()
    {
        $this->hoTen . " dạy học";
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function run()
    {
        // TODO: Implement run() method.
    }

    function study()
    {
        // TODO: Implement study() method.
    }

    public function abc()
    {
        // TODO: Implement abc() method.
    }

    function dcf()
    {
        // TODO: Implement dcf() method.
    }


}

$luan = new ConNguoi();
//$luan->hoTen ="Nguyễn Thành Luân";
//echo $luan->hoTen;
$luan->setHoTen("Nguyễn Thành Luân");
echo $luan->getHoTen();
$luan->eat();

$thanh = new ConNguoi();
$thanh->eat();