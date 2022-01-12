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
        file_put_contents($this->data, $dataJson);
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->data);
        return json_decode($dataJson);
    }

    public function addNewData($employee)
    {
        $list = [
            'id' => $employee->getId(),
            "name" => $employee->getName(),
            "day" => $employee->getDay(),
            "addrees" => $employee->getAddrees(),
            "position" => $employee->getPosition(),
        ];


        $employee = $this->loadData();
        $employee[] = $list;
        $this->saveData($employee);

    }

    public function delete($id)
    {
        $employees = $this->loadData();
        array_splice($employees, $id, 1);
        $this->saveData($employees);
    }

    public function getId()
    {
        $employees = $this->loadData();
        if (empty($employees)) {
            return 1;
        } else {
            $last = $employees[count($employees) - 1];
            return (int)$last->id + 1;
        }
    }

    public function getEmployeeById($id)
    {
        $employees = $this->loadData();
        $s = $employees[$id];
        $employee = new Employee($s->name, $s->day, $s->addrees, $s->position);
        return $employee;
    }

    public function updateEmloyee($id, $employee)
    {
        $list = [
            "name" => $employee->getName(),
            "day" => $employee->getDay(),
            "addrees" => $employee->getAddrees(),
            "position" => $employee->getPosition(),
        ];
        $employee = $this->loadData();
        $employee[$id] = $list;
        $this->saveData($employee);
    }

}
