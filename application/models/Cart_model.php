<?php
class Cart_model extends CI_Model{
    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
     
    }
    //查询数据库，获取产品信息数组
    public function retrieve_products(){
        //获取数据表中的产品
        $query = $this->db->get('products');
        //返回数组
        return $query -> result_array();
    }
    function validate_add_cart_item(){
        $id = $this->input->post('product_id');
        $cty = $this->input->post('quantity');
        echo $id;
        //SQL语句中的查询条件
        $this->db->where('id',$id);
        //抓取一行数据
        $query = $this->db->get('products',1);
        if($query->num_rows > 0){
            foreach($query -> result() as $row){
               $data=array( 'id' => $id,
                            'qty'=>$cty,
                            'price' => $row->price,
                            'name' => $row->name
                            );
               //调用ci的购物车类，将产品信息存入购物车
               $this->cart->insert($data);
               return TRUE;
            }
        }else{
            //没有匹配的数据，返回FALSE
            return FALSE;
        }
    }
function validate_update_cart(){
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        for($i=0;$i < count($qty);$i++)
        {
          $data = array(
                'rowid' => $item[$i],
                'qty'   => $qty[$i]
          );
          $this->cart->update($data);
        }
    }
    
}
?>
