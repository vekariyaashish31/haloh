<?php
// Heading
$_['heading_title']       = 'คูปอง';

// Text
$_['text_success']        = 'สำเร็จ: คุณได้แก้ไขคูปองแล้ว!';
$_['text_list']           = 'รายการคูปอง';
$_['text_add']            = 'เพิ่มคูปอง';
$_['text_edit']           = 'แก้ไขคูปอง';
$_['text_percent']        = 'เปอร์เซ็นต์';
$_['text_amount']         = 'จำนวนเงินคงที่';
$_['text_coupon']         = 'ประวัติคูปอง';

// Column
$_['column_name']         = 'ชื่อคูปอง';
$_['column_code']         = 'รหัส';
$_['column_discount']     = 'ส่วนลด';
$_['column_date_start']   = 'วันที่เริ่ม';
$_['column_date_end']     = 'วันที่สิ้นสุด';
$_['column_status']       = 'สถานะ';
$_['column_order_id']     = 'หมายเลขคำสั่งซื้อ';
$_['column_customer']     = 'ลูกค้า';
$_['column_amount']       = 'จำนวน';
$_['column_date_added']   = 'วันที่เพิ่ม';
$_['column_action']       = 'จัดการ';

// Entry
$_['entry_name']          = 'ชื่อคูปอง';
$_['entry_code']          = 'รหัส';
$_['entry_type']          = 'ประเภท';
$_['entry_discount']      = 'ส่วนลด';
$_['entry_logged']        = 'เข้าสู่ระบบของลูกค้า';
$_['entry_shipping']      = 'จัดส่งฟรี';
$_['entry_total']         = 'จำนวนเงินทั้งหมด';
$_['entry_category']      = 'หมวดหมู่';
$_['entry_product']       = 'สินค้า';
$_['entry_date_start']    = 'วันที่เริ่ม';
$_['entry_date_end']      = 'วันที่สิ้นสุด';
$_['entry_uses_total']    = 'ใช้ต่อคูปอง';
$_['entry_uses_customer'] = 'ใช้ต่อลูกค้า';
$_['entry_status']        = 'สถานะ';

// Help
$_['help_code']           = 'รหัสที่ลูกค้าป้อนเพื่อรับส่วนลด';
$_['help_type']           = 'เปอร์เซ็นต์หรือจำนวนเงินคงที่';
$_['help_logged']         = 'ลูกค้าต้องเข้าสู่ระบบเพื่อใช้คูปอง';
$_['help_total']          = 'จำนวนเงินทั้งหมดที่ต้องถึงก่อนใช้คูปองได้';
$_['help_category']       = 'เลือกผลิตภัณฑ์ทั้งหมดภายใต้หมวดหมู่ที่เลือก';
$_['help_product']        = 'Choose specific products the coupon will apply to. Select no products to apply coupon to entire cart.';
$_['help_uses_total']     = 'จำนวนครั้งสูงสุดที่ลูกค้าสามารถใช้คูปองได้ เว้นว่างไว้หากไม่จำกัด';
$_['help_uses_customer']  = 'จำนวนครั้งสูงสุดที่ลูกค้ารายเดียวสามารถใช้คูปองได้ เว้นว่างไว้หากไม่จำกัด';

// Error
$_['error_permission']    = 'คำเตือน: คุณไม่ได้รับอนุญาตให้แก้ไขคูปอง!';
$_['error_exists']        = 'คำเตือน: รหัสคูปองถูกใช้งานแล้ว!';
$_['error_name']          = 'ชื่อคูปองต้องมีความยาวระหว่าง 3 ถึง 128 ตัวอักษร!';
$_['error_code']          = 'คูปองโค้ดต้องอยู่ระหว่าง 3 ถึง 10 ตัวอักษร!';



/* <?php
// Heading
$_['heading_title']       = 'Coupons';

// Text
$_['text_success']        = 'Success: You have modified coupons!';
$_['text_list']           = 'Coupon List';
$_['text_add']            = 'Add Coupon';
$_['text_edit']           = 'Edit Coupon';
$_['text_percent']        = 'Percentage';
$_['text_amount']         = 'Fixed Amount';
$_['text_coupon']         = 'Coupon History';

// Column
$_['column_name']         = 'Coupon Name';
$_['column_code']         = 'Code';
$_['column_discount']     = 'Discount';
$_['column_date_start']   = 'Date Start';
$_['column_date_end']     = 'Date End';
$_['column_status']       = 'Status';
$_['column_order_id']     = 'Order ID';
$_['column_customer']     = 'Customer';
$_['column_amount']       = 'Amount';
$_['column_date_added']   = 'Date Added';
$_['column_action']       = 'Action';

// Entry
$_['entry_name']          = 'Coupon Name';
$_['entry_code']          = 'Code';
$_['entry_type']          = 'Type';
$_['entry_discount']      = 'Discount';
$_['entry_logged']        = 'Customer Login';
$_['entry_shipping']      = 'Free Shipping';
$_['entry_total']         = 'Total Amount';
$_['entry_category']      = 'Category';
$_['entry_product']       = 'Products';
$_['entry_date_start']    = 'Date Start';
$_['entry_date_end']      = 'Date End';
$_['entry_uses_total']    = 'Uses Per Coupon';
$_['entry_uses_customer'] = 'Uses Per Customer';
$_['entry_status']        = 'Status';

// Help
$_['help_code']           = 'The code the customer enters to get the discount.';
$_['help_type']           = 'Percentage or Fixed Amount.';
$_['help_logged']         = 'Customer must be logged in to use the coupon.';
$_['help_total']          = 'The total amount that must be reached before the coupon is valid.';
$_['help_category']       = 'Choose all products under selected category.';
$_['help_product']        = 'Choose specific products the coupon will apply to. Select no products to apply coupon to entire cart.';
$_['help_uses_total']     = 'The maximum number of times the coupon can be used by any customer. Leave blank for unlimited';
$_['help_uses_customer']  = 'The maximum number of times the coupon can be used by a single customer. Leave blank for unlimited';

// Error
$_['error_permission']    = 'Warning: You do not have permission to modify coupons!';
$_['error_exists']        = 'Warning: Coupon code is already in use!';
$_['error_name']          = 'Coupon Name must be between 3 and 128 characters!';
$_['error_code']          = 'Code must be between 3 and 10 characters!';
 */