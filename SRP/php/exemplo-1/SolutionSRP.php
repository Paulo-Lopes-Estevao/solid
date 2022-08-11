<?php


interface Repository
{
    public function create(array $data);
    public function update(string $id, array $data);
    public function find(string $id);
    public function findAll();
}

class BakerRepository implements Repository
{
    public function create(array $data){/***/}
    public function update(string $id, array $data){/***/}
    public function find(string $id){/***/}
    public function findAll(){/***/}
}

class Baker
{
    public function calculateQuantityofProductsMadeinTheDay(){/***/}
}

class AttendantRepository implements Repository{
     public function create(array $data){/***/}
     public function update(string $id, array $data){/***/}
     public function find(string $id){/***/}
     public function findAll(){/***/}
}
class Attendant
{
     public function cashierClosing(){/***/}
     public function DailyattendanceRecord(){/***/}
}

class connect
{
     public function connect(){/***/}
}
