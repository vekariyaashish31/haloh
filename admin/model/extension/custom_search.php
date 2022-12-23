<?php
class ModelExtensionCustomSearch extends Model {

    public function createTables() {
        $this->db->query("ALTER TABLE " . DB_PREFIX . "product_description ADD COLUMN product_url TEXT, ADD COLUMN details TEXT");
        $this->db->query("ALTER TABLE " . DB_PREFIX . "order_product ADD COLUMN product_url TEXT, ADD COLUMN details TEXT");
    }

    
    public function deleteTables() {
        $this->db->query("ALTER TABLE " . DB_PREFIX . "product_description DROP COLUMN product_url, DROP COLUMN details");
        $this->db->query("ALTER TABLE " . DB_PREFIX . "order_product DROP COLUMN product_url, DROP COLUMN details");
    }
}


