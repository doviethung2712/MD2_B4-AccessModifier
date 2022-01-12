<?php
include_once 'Employee.php';

class Data
{
    private $data;

    public function __construct()
    {
        $this->data = "data.json";
    }

    public function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->data,$dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->data);
        return json_decode($dataJson);
    }

    public function addNewData($employee)
    {
        $list = [
            "name" => $employee->getName(),
            "day" => $employee->getDay(),
            "addrees" => $employee->getAddrees(),
            "position" => $employee->getPosition(),
        ];

        $employee = $this->loadData();
        $employee[] = $list;
        $this->saveData($employee);

    }
    public function delete($id){
        $employee = $this->loadData();
        array_splice($employee,$id,1);
        $employee = $this->saveData($employee);
    }

}
