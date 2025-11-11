<?php
require_once __DIR__ .'/../../config/config.php';
require_once __DIR__ .'/model.php';

class ProductModel extends Model{
    
    public function get($id){
        $query = $this->db->prepare('SELECT * FROM products WHERE id = ?');
        $query->execute([$id]);
        $product = $query->fetch(PDO::FETCH_OBJ);

        return $product;
    }

    public function getAll($orderBy = false, $order = "DESC" ,  $filterByCategory = false) {
        $sql = 'SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.id_category = c.id';
        $params = [];
        //ver lo de mayúsculas y minúsculas

        $orderType = "ASC";
        if ($order ===  "DESC") {
            $orderType = "DESC";
        }

        if($orderBy) {
            //name,img,model,price,description,id_category
            //img lo ordenamos ??
            //description lo ordenamos ??
            //faltaría poner el nombre del id. 
            switch($orderBy) { 
                case 'name':
                    $sql .= " ORDER BY p.name {$orderType}" ;
                    break;
                case 'model':
                    $sql .= " ORDER BY p.model {$orderType}" ;
                    break;
                case 'price':
                    $sql .= " ORDER BY p.price {$orderType}";
                    break;
                /*case 'category_name':
                    $sql .= " ORDER BY p.category_name {$orderType}";
                    break;*/
            }
        }

         if ($filterByCategory) {
        $sql .= ' WHERE p.id_category = ?';
        $params[] = $filterByCategory;
        }

        //FALTA HACER PAGINACIÓN

        
        
        $query = $this->db->prepare($sql);
        $query->execute($params);
    
       
        $products = $query->fetchAll(PDO::FETCH_OBJ); 
    
        return $products;
}
    
    /* // función sin paginación, filtrado ni ordenamiento

    public function getAll() {
     
        $query = $this->db->prepare( 'SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.id_category = c.id');
        $query->execute();

        $product = $query->fetchAll(PDO::FETCH_OBJ);

        return $product;
    }*/

    public function getProductsByCategory($id_categoria) {
        
        $query = $this->db->prepare('SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.id_category = c.id
         WHERE p.id_category = ?');
        $query->execute([$id_categoria]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($name, $img, $model, $price, $description, $id_category) {

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $this->db->prepare("INSERT INTO products(name,img, model, price, description,id_category) VALUES(?,?,?,?,?,?)");
        $query->execute([$name, $img, $model, $price,$description, $id_category]);

        return $this->db->lastInsertId();
    }

    public function remove($id) {
        $query = $this->db->prepare('DELETE from products where id = ?');
        $query->execute([$id]);

    }

    public function update($id, $name, $img, $model, $price, $description, $id_category) {
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $this->db->prepare("UPDATE products SET name = ?, img = ?, model = ?, price = ?, description = ?, id_category = ? WHERE id = ?");
        $query->execute([$name, $img, $model, $price, $description, $id_category, $id]);
    }

}