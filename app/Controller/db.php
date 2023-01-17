<?php
namespace App\Controller;

class db
{
    public ?array $data = null;

    public function __construct()
    {
        $this->data = $_SESSION["db"] = [
            ["id" => 1, "firstName" => "Atif", "lastName" => "khan", "email" => "atif@gmail.com"],
            ["id" => 2, "firstName" => "Raza", "lastName" => "jan", "email" => "raza@gmail.com"],
            ["id" => 3, "firstName" => "Raza22", "lastName" => "jan", "email" => "raza@gmail.com"],
            ["id" => 4, "firstName" => "Raza33", "lastName" => "jan", "email" => "raza@gmail.com"],
            ["id" => 5, "firstName" => "Raza44", "lastName" => "jan", "email" => "raza@gmail.com"],

        ];
    }
}