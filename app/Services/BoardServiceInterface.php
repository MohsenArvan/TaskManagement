<?php 

namespace App\Services;


interface BoardServiceInterface 
{
    public function GetAllBoards($user_id);

    public function StoreBoard($data);

    public function UpdateBoard(array $data,  $id);

    public function ShowBoard($id);

    public function DeleteBoard($id);
}