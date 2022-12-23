<?php
//==============================================
// Cross Selling Bundle
// Author 	: OpenCartBoost
// Email 	: support@opencartboost.com
// Website 	: http://www.opencartboost.com
//==============================================
class ModelExtensionModuleCrossSelling extends Model {
	public function getAlsoBoughtProducts($product_id, $limit) {
        $product_data = $this->cache->get('product.alsobought.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $product_id . '.' . (int)$limit);
		
		if (!$product_data) { 
			$product_data = [];

			//o.order_status_id = '5' is order status complete. 
			//If you want ignore order status, you can delete code o.order_status_id = '5' AND below
			
			$sql = "SELECT DISTINCT op.product_id FROM `" . DB_PREFIX . "order_product` op INNER JOIN (
					SELECT op.order_id FROM `" . DB_PREFIX . "order_product` op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id)
					WHERE o.order_status_id = '5' AND op.product_id = '" . (int)$product_id . "' ORDER BY op.order_id DESC) op1 ON (op1.order_id = op.order_id)
					LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id)
					LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (op.product_id = p2s.product_id)
					WHERE op.product_id != '" . (int)$product_id . "' AND p.status = '1' AND p.quantity > '0' AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' LIMIT " . (int)$limit;
			
			$query = $this->db->query($sql);

			$this->load->model('catalog/product');
			
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] =  $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.alsobought.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$product_id . '.' . (int)$limit, $product_data);
		}

		return $product_data;
    }
	
	public function getAlsoViewedProducts($product_id, $limit) {
        $product_data = $this->cache->get('product.alsoviewed.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $product_id . '.' . (int)$limit);
			
		if (!$product_data) { 
			$product_data = [];

			$sql = "SELECT DISTINCT av.product_id FROM `" . DB_PREFIX . "also_viewed` av INNER JOIN (
					SELECT av.ip_address FROM `" . DB_PREFIX . "also_viewed` av
					WHERE av.product_id = '" . (int)$product_id . "' ORDER BY av.date_added DESC) av1 ON (av1.ip_address = av.ip_address)
					LEFT JOIN `" . DB_PREFIX . "product` p ON (av.product_id = p.product_id)
					LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (av.product_id = p2s.product_id)
					WHERE av.product_id != '" . (int)$product_id . "' AND p.status = '1' AND p.quantity > '0' AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' LIMIT " . (int)$limit;

			$query = $this->db->query($sql);
			
			$this->load->model('catalog/product');
			
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] =  $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.alsoviewed.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$product_id . '.' . (int)$limit, $product_data);
		}

		return $product_data;
    }
		
	public function getRecentlyPurchasedProducts($limit) {
		$product_data = $this->cache->get('product.recentlypurchased.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$limit);
		
		if (!$product_data) { 
			$product_data = [];

			$sql = "SELECT op.product_id FROM " . DB_PREFIX . "order_product op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id) LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id)
					WHERE o.order_status_id > '0' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY o.date_added DESC LIMIT " . (int)$limit;
         
            $query = $this->db->query($sql);

			$this->load->model('catalog/product');
			
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] =  $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.recentlypurchased.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$limit, $product_data);
		}

		return $product_data;
	}
	

	public function getRecentlyViewedProducts($limit) {
        $products = isset($this->request->cookie['recently_viewed']) && $this->request->cookie['recently_viewed'] ? explode(',', $this->request->cookie['recently_viewed']) : [];

        $recents = array_slice($products, 0, $limit);

        $results = [];

		$this->load->model('catalog/product');
		
        foreach ($recents as $prod_id) {
            $result = $this->model_catalog_product->getProduct($prod_id);
            if ($result) {
                $results[] = $result;
            }
        }
        return $results;
    }
	
	/*
	public function getAlsoBoughtProducts($also_filter) {
        $product_data = $this->cache->get('product.alsobought.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $also_filter['product_id'] . '.' . (int)$also_filter['limit']);
		
		if (!$product_data) { 
			$product_data = array();

			//o.order_status_id = '5' is order status complete. 
			//If you want ignore order status, you can delete code o.order_status_id = '5' AND below
			
			$sql = "SELECT DISTINCT op.product_id FROM `" . DB_PREFIX . "order_product` op INNER JOIN (
					SELECT op.order_id FROM `" . DB_PREFIX . "order_product` op LEFT JOIN `" . DB_PREFIX . "order` o ON (op.order_id = o.order_id)
					WHERE o.order_status_id = '5' AND op.product_id = '" . (int)$also_filter['product_id'] . "' ORDER BY op.order_id DESC) op1 ON (op1.order_id = op.order_id)
					LEFT JOIN `" . DB_PREFIX . "product` p ON (op.product_id = p.product_id)
					LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (op.product_id = p2s.product_id)
					WHERE op.product_id != '" . (int)$also_filter['product_id'] . "' AND p.status = '1' AND p.quantity > '0' AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

			if (isset($also_filter['start']) || isset($also_filter['limit'])) {
				if ($also_filter['start'] < 0) {
					$also_filter['start'] = 0;
				}				
		
				if ($also_filter['limit'] < 1) {
					$also_filter['limit'] = 20;
				}	
		
				$sql .= " LIMIT " . (int)$also_filter['start'] . "," . (int)$also_filter['limit'];
			}
		
			$query = $this->db->query($sql);

			$this->load->model('catalog/product');
			
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] =  $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.alsobought.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$also_filter['product_id'] . '.' . (int)$also_filter['limit'], $product_data);
		}

		return $product_data;
    }
	
	public function getAlsoViewedProducts($also_filter) {
        $product_data = $this->cache->get('product.alsoviewed.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . $also_filter['product_id'] . '.' . (int)$also_filter['limit']);
			
		if (!$product_data) { 
			$product_data = array();

			$sql = "SELECT DISTINCT av.product_id FROM `" . DB_PREFIX . "also_viewed` av INNER JOIN (
					SELECT av.ip_address FROM `" . DB_PREFIX . "also_viewed` av
					WHERE av.product_id = '" . (int)$also_filter['product_id'] . "' ORDER BY av.date_added DESC) av1 ON (av1.ip_address = av.ip_address)
					LEFT JOIN `" . DB_PREFIX . "product` p ON (av.product_id = p.product_id)
					LEFT JOIN `" . DB_PREFIX . "product_to_store` p2s ON (av.product_id = p2s.product_id)
					WHERE av.product_id != '" . (int)$also_filter['product_id'] . "' AND p.status = '1' AND p.quantity > '0' AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

					
			if (isset($also_filter['start']) || isset($also_filter['limit'])) {
				if ($also_filter['start'] < 0) {
					$also_filter['start'] = 0;
				}				
		
				if ($also_filter['limit'] < 1) {
					$also_filter['limit'] = 20;
				}	
		
				$sql .= " LIMIT " . (int)$also_filter['start'] . "," . (int)$also_filter['limit'];
			}

			$query = $this->db->query($sql);
			
			$this->load->model('catalog/product');
			
			foreach ($query->rows as $result) {
				$product_data[$result['product_id']] =  $this->model_catalog_product->getProduct($result['product_id']);
			}

			$this->cache->set('product.alsoviewed.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$also_filter['product_id'] . '.' . (int)$also_filter['limit'], $product_data);
		}

		return $product_data;
    }
	*/
}
