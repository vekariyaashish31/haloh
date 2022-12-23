<?php
class ModelCatalogUpdatedbthai extends Model {
 
	public function chk_translate() {
		$query = $this->db->query("SELECT name FROM `" . DB_PREFIX . "zone` WHERE `country_id` = '209' and name = 'Bangkok' ");
        return $query->row;
	}

	public function addlanguage() {
        $data['name']=   'Thai'; 
        $data['code'] = 'th'; 
		$data['directory'] = 'thai'; 
        $data['sort_order'] ='0';
        $data['status'] = '1';
        $data['image'] = 'th.png';
        $data['locale'] = 'en_TH.UTF-8,en_TH,en-th,thai'; 
		
         $language_id = $this->db->getLastId();
		 $query = $this->db->query("DELETE  FROM `" . DB_PREFIX . "language` WHERE `directory` = 'thai'  ");
 
		 $this->db->query("INSERT INTO " . DB_PREFIX . "language SET language_id = " . (int)$language_id . "  , name = '" . $this->db->escape($data['name']) . "', code = '" . $this->db->escape($data['code']) . "', locale = '" . $this->db->escape($data['locale']) . "', directory = '" . $this->db->escape($data['directory']) . "', image = '" . $this->db->escape($data['image']) . "', sort_order = '" . $this->db->escape($data['sort_order']) . "', status = '" . (int)$data['status'] . "'");

		 $this->cache->delete('language');
         $language_id = $this->db->getLastId();
		
      
		// Attribute
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_description WHERE language_id = '1' 
                                   and attribute_id not in (select attribute_id FROM " . DB_PREFIX . "attribute_description WHERE language_id =   " . (int)$language_id . "    )
		");
             
		foreach ($query->rows as $attribute) {
						$this->db->query("INSERT INTO " . DB_PREFIX . "attribute_description 
						SET attribute_id = '" . (int)$attribute['attribute_id'] . "', 
						language_id = '" . (int)$language_id . "',
						name = '" . $this->db->escape($attribute['name']) . "'  ");
		}

		// Attribute Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "attribute_group_description WHERE language_id = '1' 
		                           and  attribute_group_id  not in (select attribute_group_id FROM " . DB_PREFIX . "attribute_group_description WHERE language_id =   " . (int)$language_id . "   )
		");

		foreach ($query->rows as $attribute_group) {
 
				     $this->db->query("INSERT INTO " . DB_PREFIX . "attribute_group_description SET attribute_group_id = '" . (int)$attribute_group['attribute_group_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($attribute_group['name']) . "'");
		}

		$this->cache->delete('attribute');
		
		// Banner
		if(version_compare(VERSION, '2.2.1', '>')) {
			
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image WHERE language_id = '1'  
									   and  banner_image_id  not in (select banner_image_id   FROM " . DB_PREFIX . "banner_image  WHERE language_id =  " . (int)$language_id . "    )
			");

			foreach ($query->rows as $banner_image) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image  SET banner_id = '" . (int)$banner_image['banner_id'] . "', language_id = '" . (int)$language_id . "', link = '" . $this->db->escape($banner_image['link']) . "'
				, image= '" . $this->db->escape($banner_image['image']) . "'
				
				");
			}
			
			
		} else { 
		
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "banner_image_description WHERE language_id = '1'  
									   and  banner_image_id  not in (select banner_image_id   FROM " . DB_PREFIX . "banner_image_description WHERE language_id =  " . (int)$language_id . "   )
			");

			foreach ($query->rows as $banner_image) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "banner_image_description SET banner_image_id = '" . (int)$banner_image['banner_image_id'] . "', banner_id = '" . (int)$banner_image['banner_id'] . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($banner_image['title']) . "'");
			}
        }
		
		$this->cache->delete('banner');
       
		// Category
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_description WHERE language_id = '1'");

		foreach ($query->rows as $category) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category['category_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($category['name']) . "', meta_description = '" . $this->db->escape($category['meta_description']) . "', meta_keyword = '" . $this->db->escape($category['meta_keyword']) . "', description = '" . $this->db->escape($category['description']) . "'");
		}

		$this->cache->delete('category');

		// Customer Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_group_description WHERE language_id = '1'");

		foreach ($query->rows as $customer_group) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "customer_group_description SET customer_group_id = '" . (int)$customer_group['customer_group_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($customer_group['name']) . "', description = '" . $this->db->escape($customer_group['description']) . "'");
		}

		// Custom Field
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_description WHERE language_id = '1'");

		foreach ($query->rows as $custom_field) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "custom_field_description SET custom_field_id = '" . (int)$custom_field['custom_field_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($custom_field['name']) . "'");
		}

		// Custom Field Value
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_field_value_description WHERE language_id = '1'");

		foreach ($query->rows as $custom_field_value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "custom_field_value_description SET custom_field_value_id = '" . (int)$custom_field_value['custom_field_value_id'] . "', language_id = '" . (int)$language_id . "', custom_field_id = '" . (int)$custom_field_value['custom_field_id'] . "', name = '" . $this->db->escape($custom_field_value['name']) . "'");
		}

		// Download
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "download_description WHERE language_id = '1'");

		foreach ($query->rows as $download) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "download_description SET download_id = '" . (int)$download['download_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($download['name']) . "'");
		}

		// Filter
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "filter_description WHERE language_id = '1'");

		foreach ($query->rows as $filter) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "filter_description SET filter_id = '" . (int)$filter['filter_id'] . "', language_id = '" . (int)$language_id . "', filter_group_id = '" . (int)$filter['filter_group_id'] . "', name = '" . $this->db->escape($filter['name']) . "'");
		}

		// Filter Group
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "filter_group_description WHERE language_id = '1'");

		foreach ($query->rows as $filter_group) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "filter_group_description SET filter_group_id = '" . (int)$filter_group['filter_group_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($filter_group['name']) . "'");
		}

		// Information
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "information_description WHERE language_id = '1'");

		foreach ($query->rows as $information) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "information_description SET information_id = '" . (int)$information['information_id'] . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($information['title']) . "', description = '" . $this->db->escape($information['description']) . "'");
		}

		$this->cache->delete('information');

		// Length
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "length_class_description WHERE language_id = '1'");

		foreach ($query->rows as $length) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "length_class_description SET length_class_id = '" . (int)$length['length_class_id'] . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($length['title']) . "', unit = '" . $this->db->escape($length['unit']) . "'");
		}

		$this->cache->delete('length_class');

		// Option
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_description WHERE language_id = '1'");

		foreach ($query->rows as $option) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "option_description SET option_id = '" . (int)$option['option_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($option['name']) . "'");
		}

		// Option Value
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "option_value_description WHERE language_id = '1'");

		foreach ($query->rows as $option_value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "option_value_description SET option_value_id = '" . (int)$option_value['option_value_id'] . "', language_id = '" . (int)$language_id . "', option_id = '" . (int)$option_value['option_id'] . "', name = '" . $this->db->escape($option_value['name']) . "'");
		}
 

		// Product
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_description WHERE language_id = '1'");

		foreach ($query->rows as $product) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_description SET product_id = '" . (int)$product['product_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($product['name']) . "', meta_description = '" . $this->db->escape($product['meta_description']) . "', meta_keyword = '" . $this->db->escape($product['meta_keyword']) . "', description = '" . $this->db->escape($product['description']) . "', tag = '" . $this->db->escape($product['tag']) . "'");
		}

		$this->cache->delete('product');

		// Product Attribute
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_attribute WHERE language_id = '1'");

		foreach ($query->rows as $product_attribute) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "product_attribute SET product_id = '" . (int)$product_attribute['product_id'] . "', attribute_id = '" . (int)$product_attribute['attribute_id'] . "', language_id = '" . (int)$language_id . "', text = '" . $this->db->escape($product_attribute['text']) . "'");
		}

		// Return Action
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_action WHERE language_id = '1'");

		foreach ($query->rows as $return_action) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_action SET return_action_id = '" . (int)$return_action['return_action_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($return_action['name']) . "'");
		}

		// Return Reason
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_reason WHERE language_id = '1'");

		foreach ($query->rows as $return_reason) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_reason SET return_reason_id = '" . (int)$return_reason['return_reason_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($return_reason['name']) . "'");
		}

		// Return Status
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "return_status WHERE language_id = '1'");

		foreach ($query->rows as $return_status) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "return_status SET return_status_id = '" . (int)$return_status['return_status_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($return_status['name']) . "'");
		}

		// Stock Status
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "stock_status WHERE language_id = '1'");

		foreach ($query->rows as $stock_status) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "stock_status SET stock_status_id = '" . (int)$stock_status['stock_status_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($stock_status['name']) . "'");
		}

		$this->cache->delete('stock_status');

		// Voucher Theme
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "voucher_theme_description WHERE language_id = '1'");

		foreach ($query->rows as $voucher_theme) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "voucher_theme_description SET voucher_theme_id = '" . (int)$voucher_theme['voucher_theme_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($voucher_theme['name']) . "'");
		}

		$this->cache->delete('voucher_theme');

		// Weight Class
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "weight_class_description WHERE language_id = '1'");

		foreach ($query->rows as $weight_class) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "weight_class_description SET weight_class_id = '" . (int)$weight_class['weight_class_id'] . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($weight_class['title']) . "', unit = '" . $this->db->escape($weight_class['unit']) . "'");
		}

		$this->cache->delete('weight_class');

		// Profiles
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "recurring_description WHERE language_id = '1'");

		foreach ($query->rows as $recurring) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "recurring_description SET recurring_id = '" . (int)$recurring['recurring_id'] . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($recurring['name']));
		}
	}


	
	public function update() {
 
	 	 $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "language  WHERE  name ='Thai'  ");
		 $language_id =  $query->row['language_id'];
		 
		// Order Status
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "order_status` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "order_status`
		   (`order_status_id`, `language_id`, `name`) VALUES
			(2,   " . (int)$language_id . "  , 'อยู่ระหว่างดำเนินการ'),
			(3,   " . (int)$language_id . "  , 'จัดส่งแล้ว'),
			(7,   " . (int)$language_id . "  , 'ยกเลิกคำสั่งซื้อ'),
			(5,   " . (int)$language_id . "  , 'เสร็จสมบูรณ์'),
			(9,   " . (int)$language_id . "  , 'คืนเงินกลับทางร้าน'),
			(10,  " . (int)$language_id . "  , 'การชำระเงินไม่ผ่าน'),
			(11,   " . (int)$language_id . "   , 'คืนเงินลูกค้า'),
			(12,   " . (int)$language_id . "   , 'การชำระเงินถูกยกเลิก'),
			(13,   " . (int)$language_id . "  , 'ลูกค้าดึงเงินคืน'),
			(16,   " . (int)$language_id . "   , 'ถูกยกเลิก'),
			(14,  " . (int)$language_id . "  , 'เกินกำหนด'),
			(8,    " . (int)$language_id . "  , 'ปฏิเสธการจ่ายเงิน'),
			(15,   " . (int)$language_id . "    , 'ชำระเงินแล้ว'), 
			(1,   " . (int)$language_id . "  , 'ได้รับคำสั่งซื้อ')
		 ");  
		 		 		 
		// Information
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "information_description` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "information_description`
		   (`information_id`, `language_id`, `title`, `description`) VALUES
			(3,   " . (int)$language_id . "  , 'นโยบายความเป็นส่วนตัว' , 'นโยบายความเป็นส่วนตัว'),
			(4,   " . (int)$language_id . "  , 'เกี่ยวกับเรา' , 'เกี่ยวกับเรา'),
			(5,   " . (int)$language_id . "  , 'ข้อตกลงและเงื่อนไข' , 'ข้อตกลงและเงื่อนไข'), 
			(6,   " . (int)$language_id . "  , 'ข้อมูลการจัดส่ง' , 'ข้อมูลการจัดส่ง')
		 "); 			 		 		 
						 
		// Length
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "length_class_description` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "length_class_description`
		   (`length_class_id`, `language_id`, `title`, `unit`) VALUES
			(1,   " . (int)$language_id . "  , 'เซนติเมตร' , 'ซม.'),
			(2,   " . (int)$language_id . "  , 'มิลลิเมตร' , 'มม.'),
			(3,   " . (int)$language_id . "  , 'นิ้ว' , 'น.')
		 ");
			 
		// Return Action
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "return_action` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "return_action`
		   (`return_action_id`, `language_id`, `name`) VALUES
			(1,   " . (int)$language_id . "  , 'คืนเงิน'),
			(2,   " . (int)$language_id . "  , 'ออกเครดิตให้'),
			(3,   " . (int)$language_id . "  , 'เปลี่ยนสินค้า')
		 "); 	
			 
		// Return Reason
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "return_reason` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "return_reason`
		   (`return_reason_id`, `language_id`, `name`) VALUES
			(1,   " . (int)$language_id . "  , 'สินค้าเสียหาย'),
			(2,   " . (int)$language_id . "  , 'ได้รับสินค้าผิด'),
			(3,   " . (int)$language_id . "  , 'สั่งซื้อสินค้าผิดพลาด'),
			(4,   " . (int)$language_id . "  , 'ผิดพลาด, กรุณาระบุรายละเอียด'),
			(5,   " . (int)$language_id . "  , 'เหตุผลอื่นๆ, กรุณาระบุรายละเอียด')
		 "); 
			 
		// Return Status
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "return_status` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "return_status`
		   (`return_status_id`, `language_id`, `name`) VALUES
			(1,   " . (int)$language_id . "  , 'กำลังดำเนินการ'),
			(3,   " . (int)$language_id . "  , 'เสร็จสิ้นแล้ว'),
			(2,   " . (int)$language_id . "  , 'กำลังรอสินค้า')
		 "); 	
			 
		// Stock Status
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "stock_status` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "stock_status`
		   (`stock_status_id`, `language_id`, `name`) VALUES
			(7,   " . (int)$language_id . "  , 'มีสินค้าในสต๊อก'),
			(8,   " . (int)$language_id . "  , 'สั่งล่วงหน้า'),
			(5,   " . (int)$language_id . "  , 'สินค้าหมด'),
			(6,   " . (int)$language_id . "  , 'รอ 2-3 วัน')
		 ");		
		 		 		 
		// Voucher Theme
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "voucher_theme_description` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "voucher_theme_description`
		   (`voucher_theme_id`, `language_id`, `name`) VALUES
			(6,   " . (int)$language_id . "  , 'คริสต์มาส'),
			(7,   " . (int)$language_id . "  , 'วันเกิด'),
			(8,   " . (int)$language_id . "  , 'โอกาสทั่วไป')
		 "); 		 		 
						 
		// Weight Class
	 	 $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "weight_class_description` WHERE `language_id` =  '" . (int)$language_id . "'   ");
         $query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "weight_class_description`
		   (`weight_class_id`, `language_id`, `title`, `unit`) VALUES
			(1,   " . (int)$language_id . "  , 'กิโลกรัม' , 'กก.'),
			(2,   " . (int)$language_id . "  , 'กรัม' , 'ก.'),
			(5,   " . (int)$language_id . "  , 'ปอนด์' , 'lb'),
			(6,   " . (int)$language_id . "  , 'ออนซ์' , 'oz')
		 ");


        $query = $this->db->query("Delete FROM `" . DB_PREFIX . "zone` WHERE `country_id` = '209'  ");  
		$query = $this->db->query("INSERT INTO  `" . DB_PREFIX . "zone`
	    (`zone_id`, `country_id`, `name`, `code`, `status`) VALUES	
		(3189, 209, 'อำนาจเจริญ', 'ACR', 1),
		(3190, 209, 'อ่างทอง', 'ATG', 1),
		(3191, 209, 'พระนครศรีอยุธยา', 'AYA', 1),
		(3192, 209, 'กรุงเทพมหานคร', 'BKK', 1),
		(3193, 209, 'บุรีรัมย์', 'BRM', 1),
		(3194, 209, 'ฉะเชิงเทรา', 'CCO', 1),
		(3195, 209, 'ชัยนาท', 'CNT', 1),
		(3196, 209, 'ชัยภูมิ', 'CPM', 1),
		(3197, 209, 'จันทบุรี', 'CTI', 1),
		(3198, 209, 'เชียงใหม่', 'CMI', 1),
		(3199, 209, 'เชียงราย', 'CRI', 1),
		(3200, 209, 'ชลบุรี', 'CBI', 1),
		(3201, 209, 'ชุมพร', 'CPN', 1),
		(3202, 209, 'กาฬสินธุ์', 'KSN', 1),
		(3203, 209, 'กำแพงเพชร', 'KPT', 1),
		(3204, 209, 'กาญจนบุรี', 'KRI', 1),
		(3205, 209, 'ขอนแก่น', 'KKN', 1),
		(3206, 209, 'กระบี่', 'KBI', 1),
		(3207, 209, 'ลำปาง', 'LPG', 1),
		(3208, 209, 'ลำพูน', 'LPN', 1),
		(3209, 209, 'เลย', 'LEI', 1),
		(3210, 209, 'ลพบุรี', 'LRI', 1),
		(3211, 209, 'แม่ฮ่องสอน', 'MSN', 1),
		(3212, 209, 'มหาสารคาม', 'MKM', 1),
		(3213, 209, 'มุกดาหาร', 'MDH', 1),
		(3214, 209, 'นครนายก', 'NYK', 1),
		(3215, 209, 'นครปฐม', 'NPT', 1),
		(3216, 209, 'นครพนม', 'NPM', 1),
		(3217, 209, 'นครราชสีมา', 'NMA', 1),
		(3218, 209, 'นครสวรรค์', 'NSN', 1),
		(3219, 209, 'นครศรีธรรมราช', 'NST', 1),
		(3220, 209, 'น่าน', 'NAN', 1),
		(3221, 209, 'นราธิวาส', 'NWT', 1),
		(3222, 209, 'หนองบัวลำพู', 'NBP', 1),
		(3223, 209, 'หนองคาย', 'NKI', 1),
		(3224, 209, 'นนทบุรี', 'NBI', 1),
		(3225, 209, 'ปทุมธานี', 'PTE', 1),
		(3226, 209, 'ปัตตานี', 'PTN', 1),
		(3227, 209, 'พังงา', 'PNA', 1),
		(3228, 209, 'พัทลุง', 'PLG', 1),
		(3229, 209, 'พะเยา', 'PYO', 1),
		(3230, 209, 'เพชรบูรณ์', 'PNB', 1),
		(3231, 209, 'เพชรบุรี', 'PBI', 1),
		(3232, 209, 'พิจิตร', 'PCT', 1),
		(3233, 209, 'พิษณุโลก', 'PLK', 1),
		(3234, 209, 'แพร่', 'PRE', 1),
		(3235, 209, 'ภูเก็ต', 'PKT', 1),
		(3236, 209, 'ปราจีนบุรี', 'PRI', 1),
		(3237, 209, 'ประจวบคิริขันธ์', 'PKN', 1),
		(3238, 209, 'ระนอง', 'RNG', 1),
		(3239, 209, 'ราชบุรี', 'RBR', 1),
		(3240, 209, 'ระยอง', 'RYG', 1),
		(3241, 209, 'ร้อยเอ็ด', 'RET', 1),
		(3242, 209, 'สระแก้ว', 'SKW', 1),
		(3243, 209, 'สกลนคร', 'SNK', 1),
		(3244, 209, 'สมุทรปราการ', 'SPK', 1),
		(3245, 209, 'สมุทรสาคร', 'SKN', 1),
		(3246, 209, 'สมุทรสงคราม', 'SKM', 1),
		(3247, 209, 'สระบุรี', 'SRI', 1),
		(3248, 209, 'สตูล', 'STN', 1),
		(3249, 209, 'สิงห์บุรี', 'SBR', 1),
		(3250, 209, 'ศรีสะเกษ', 'SSK', 1),
		(3251, 209, 'สงขลา', 'SKA', 1),
		(3252, 209, 'สุโขทัย', 'STI', 1),
		(3253, 209, 'สุพรรณบุรี', 'SPB', 1),
		(3254, 209, 'สุราษฏร์ธานี', 'SNI', 1),
		(3255, 209, 'สุรินทร์', 'SRN', 1),
		(3256, 209, 'ตาก', 'TAK', 1),
		(3257, 209, 'ตรัง', 'TRG', 1),
		(3258, 209, 'ตราด', 'TRT', 1),
		(3259, 209, 'อุบลราชธานี', 'UBN', 1),
		(3260, 209, 'อุดรธานี', 'UDN', 1),
		(3261, 209, 'อุทัยธานี', 'UTI', 1),
		(3262, 209, 'อุตรดิตถ์', 'UTT', 1),
		(3263, 209, 'ยะลา', 'YLA', 1),
		(3264, 209, 'ยโสธร', 'YST', 1),
		('', 209, 'บึงกาฬ', 'BKN', 1)		
		");


       $query = $this->db->query("UPDATE  `" . DB_PREFIX . "setting`  set value ='th' where  `key` = 'config_admin_language' ");
	   $query = $this->db->query("UPDATE  `" . DB_PREFIX . "setting`  set value ='th' where  `key` = 'config_language' ");
	   $query = $this->db->query("UPDATE  `" . DB_PREFIX . "setting`  set value ='3192' where  `key` = 'config_zone_id' ");
	   $query = $this->db->query("UPDATE  `" . DB_PREFIX . "setting`  set value ='209' where  `key` = 'config_country_id' ");

 

	}	
		 
}