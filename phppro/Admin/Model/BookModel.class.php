<?php
namespace Admin\Model;
use Base\BaseModel;

final class BookModel extends BaseModel{

    //要操作的数据表名
    protected $table = "book_info";

    public function fetchAllWithJoin($where = "2>1",$limit = ""){

        $sql  = "SELECT id,name,author,book_number FROM {$this->table} ";
        $sql .= "WHERE {$where} ";
        $sql .= "{$limit}";
        
        $result = $this->Db->query($sql);

        //条数为1时,把一维数组转换成二维数组，避免某些foreach循环出错
        if(count($result) == count($result,1) && !empty($result)){
            $result = array($result);
        }
        
        return $result;
    }

    public function fetchOneWithJoin($where = "2>1"){

        $sql  = "SELECT {$this->table}.*,borrow_list.back_date,user.name AS user_name FROM {$this->table} ";
        $sql .= "LEFT JOIN borrow_list ON {$this->table}.id=borrow_list.book_id ";
        $sql .= "LEFT JOIN user ON user.id=borrow_list.user_id ";
        $sql .= "WHERE {$where} ";
        
        return $this->Db->query($sql);
    }
	 
     //获取图书数量
	   function countbooknum(){
        $sql = "SELECT sum(book_number) FROM book_info";
        return $this->Db->query($sql);
       }
}