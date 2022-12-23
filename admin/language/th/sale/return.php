<?php
// Heading
$_['heading_title']        = 'การคืนสินค้า';

// Text
$_['text_success']         = 'สำเร็จ: คุณได้แก้ไขการคืนสินค้าแล้ว!';
$_['text_list']            = 'รายการการคืนสินค้า';
$_['text_add']             = 'วันที่คืนสินค้า';
$_['text_edit']            = 'แก้ไขการคืนสินค้า';
$_['text_opened']          = 'เปิดแล้ว';
$_['text_unopened']        = 'ยังไม่เปิด';
$_['text_order']           = 'ข้อมูลการสั่งซื้อ';
$_['text_product']         = 'ข้อมูลสินค้า  &amp; เหตุผลในการคืนสินค้า';
$_['text_history']         = 'ประวัติ';
$_['text_history_add']     = 'เพิ่มประวัติ';

// Column
$_['column_return_id']     = 'หมายเลขการคืน';
$_['column_order_id']      = 'หมายเลขคำสั่งซื้อ';
$_['column_customer']      = 'ลูกค้า';
$_['column_product']       = 'สินค้า';
$_['column_model']         = 'รุ่น';
$_['column_status']        = 'สถานะ';
$_['column_date_added']    = 'วันที่เพิ่ม';
$_['column_date_modified'] = 'วันที่แก้ไข';
$_['column_comment']       = 'ความคิดเห็น';
$_['column_notify']        = 'Customer Notified';
$_['column_action']        = 'จัดการ';

// Entry
$_['entry_customer']       = 'ลูกค้า';
$_['entry_order_id']       = 'หมายเลขคำสั่งซื้อ';
$_['entry_date_ordered']   = 'วันที่สั่งซื้อ';
$_['entry_firstname']      = 'ชื่อ';
$_['entry_lastname']       = 'นามสกุล';
$_['entry_email']          = 'อีเมล';
$_['entry_telephone']      = 'โทรศัพท์';
$_['entry_product']        = 'สินค้า';
$_['entry_model']          = 'รุ่น';
$_['entry_quantity']       = 'ปริมาณ';
$_['entry_opened']         = 'เปิด';
$_['entry_comment']        = 'ความคิดเห็น';
$_['entry_return_reason']  = 'เหตุผลการคืนสินค้า';
$_['entry_return_action']  = 'การดำเนินการคืนสินค้า';
$_['entry_return_status']  = 'สถานะการคืนสินค้า';
$_['entry_notify']         = 'แจ้งลูกค้า';
$_['entry_return_id']      = 'หมายเลขการคืนสินค้า';
$_['entry_date_added']     = 'วันที่เพิ่ม';
$_['entry_date_modified']  = 'วันที่แก้ไข';

// Help
$_['help_product']         = '(Autocomplete)';

// Error
$_['error_warning']        = 'คำเตือน: โปรดตรวจสอบแบบฟอร์มอย่างละเอียดเพื่อหาข้อผิดพลาด!';
$_['error_permission']     = 'คำเตือน: คุณไม่ได้รับอนุญาตให้แก้ไขการคืนสินค้า!';
$_['error_order_id']       = 'ต้องระบุหมายเลขคำสั่งซื้อ!';
$_['error_firstname']      = 'ชื่อต้องมีความยาวระหว่าง 1 ถึง 32 ตัวอักษร!';
$_['error_lastname']       = 'นามสกุลต้องมีความยาวระหว่าง 1 ถึง 32 ตัวอักษร!';
$_['error_email']          = 'ที่อยู่อีเมลจะไม่ถูกต้อง!';
$_['error_telephone']      = 'หมายเลขโทรศัพท์ต้องมีความยาวระหว่าง 3 ถึง 32 ตัวอักษร!';
$_['error_product']        = 'ชื่อผลิตภัณฑ์ต้องมากกว่า 3 และน้อยกว่า 255 ตัวอักษร!';
$_['error_model']          = 'รุ่นผลิตภัณฑ์ต้องมากกว่า 3 และน้อยกว่า 64 ตัวอักษร!';



/* <?php
// Heading
$_['heading_title']        = 'Product Returns';

// Text
$_['text_success']         = 'Success: You have modified returns!';
$_['text_list']            = 'Product Return List';
$_['text_add']             = 'Add Product Return';
$_['text_edit']            = 'Edit Product Return';
$_['text_opened']          = 'Opened';
$_['text_unopened']        = 'Unopened';
$_['text_order']           = 'Order Information';
$_['text_product']         = 'Product Information &amp; Reason for Return';
$_['text_history']         = 'History';
$_['text_history_add']     = 'Add History';

// Column
$_['column_return_id']     = 'Return ID';
$_['column_order_id']      = 'Order ID';
$_['column_customer']      = 'Customer';
$_['column_product']       = 'Product';
$_['column_model']         = 'Model';
$_['column_status']        = 'Status';
$_['column_date_added']    = 'Date Added';
$_['column_date_modified'] = 'Date Modified';
$_['column_comment']       = 'Comment';
$_['column_notify']        = 'Customer Notified';
$_['column_action']        = 'Action';

// Entry
$_['entry_customer']       = 'Customer';
$_['entry_order_id']       = 'Order ID';
$_['entry_date_ordered']   = 'Order Date';
$_['entry_firstname']      = 'First Name';
$_['entry_lastname']       = 'Last Name';
$_['entry_email']          = 'E-Mail';
$_['entry_telephone']      = 'Telephone';
$_['entry_product']        = 'Product';
$_['entry_model']          = 'Model';
$_['entry_quantity']       = 'Quantity';
$_['entry_opened']         = 'Opened';
$_['entry_comment']        = 'Comment';
$_['entry_return_reason']  = 'Return Reason';
$_['entry_return_action']  = 'Return Action';
$_['entry_return_status']  = 'Return Status';
$_['entry_notify']         = 'Notify Customer';
$_['entry_return_id']      = 'Return ID';
$_['entry_date_added']     = 'Date Added';
$_['entry_date_modified']  = 'Date Modified';

// Help
$_['help_product']         = '(Autocomplete)';

// Error
$_['error_warning']        = 'Warning: Please check the form carefully for errors!';
$_['error_permission']     = 'Warning: You do not have permission to modify returns!';
$_['error_order_id']       = 'Order ID required!';
$_['error_firstname']      = 'First Name must be between 1 and 32 characters!';
$_['error_lastname']       = 'Last Name must be between 1 and 32 characters!';
$_['error_email']          = 'E-Mail Address does not appear to be valid!';
$_['error_telephone']      = 'Telephone must be between 3 and 32 characters!';
$_['error_product']        = 'Product Name must be greater than 3 and less than 255 characters!';
$_['error_model']          = 'Product Model must be greater than 3 and less than 64 characters!';
 */