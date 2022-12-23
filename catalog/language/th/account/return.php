<?php
// Heading
$_['heading_title']      = 'การคืนสินค้า';

// Text
$_['text_account']       = 'บัญชีผู้ใช้';
$_['text_return']        = 'ข้อมูลการคืนสินค้า';
$_['text_return_detail'] = 'รายละเอียดการคืน';
$_['text_description']   = 'กรุณากรอกข้อมูลเพื่อบันทึกรายการคืนสินค้า.';
$_['text_order']         = 'ข้อมูลคำสั่งซื้อ';
$_['text_product']       = 'ข้อมูลเกี่ยวกับสินค้าคืน &amp; เหตุผลการคืน';
$_['text_reason']        = 'เหตุผลในการคืนสินค้า';
$_['text_message']       = '<p>ขอบคุณสำหรับคำร้องในการคืนสินค้า. เราจะส่งเรื่องให้กับผู้เกี่ยวข้องดำเนินการโดยเร่งด่วน.</p><p> เราจะแจ้งความคืบหน้าเกี่ยวกับคำร้องนี้ให้ทราบทางอีเมล์.</p>';
$_['text_return_id']     = 'หมายเลขคำร้อง:';
$_['text_order_id']      = 'หมายเลขคำสั่งซื้อ:';
$_['text_date_ordered']  = 'วันที่สั่งซื้อ:';
$_['text_status']        = 'สถานะ:';
$_['text_date_added']    = 'วันที่ยื่นคำร้อง:';
$_['text_comment']       = 'ความเห็นในการคืนสินค้า';
$_['text_history']       = 'ประวัติการคืนสินค้า';
$_['text_empty']         = 'คุณยังไม่เคยยื่นคำร้องเพื่อคืนสินค้า!';
$_['text_agree']         = 'ฉันได้อ่านและยอมรับ <a href="%s" class="agree"><b>%s</b></a>';

// Column
$_['column_return_id']   = 'หมายเลขคำร้อง';
$_['column_order_id']    = 'หมายเลขคำสั่งซื้อ';
$_['column_status']      = 'สถานะ';
$_['column_date_added']  = 'วันที่ยื่นคำร้อง';
$_['column_customer']    = 'ผู้ซื้อ';
$_['column_product']     = 'สินค้า';
$_['column_model']       = 'รุ่นสินค้า';
$_['column_quantity']    = 'จำนวน';
$_['column_price']       = 'ราคา';
$_['column_opened']      = 'เปิดออกแล้ว';
$_['column_comment']     = 'ความคิดเห็น';
$_['column_reason']      = 'เหตุผล';
$_['column_action']      = 'จัดการ';

// Entry
$_['entry_order_id']     = 'หมายเลขคำสั่งซื้อ';
$_['entry_date_ordered'] = 'วันที่สั่งซื้อ';
$_['entry_firstname']    = 'ชื่อ';
$_['entry_lastname']     = 'นามสกุล';
$_['entry_email']        = 'อีเมล';
$_['entry_telephone']    = 'โทรศัพท์';
$_['entry_product']      = 'สินค้า';
$_['entry_model']        = 'รหัสสินค้า';
$_['entry_quantity']     = 'จำนวน';
$_['entry_reason']       = 'เหตุผลในการคืนสินค้า';
$_['entry_opened']       = 'สินค้าถูกเปิดออกแล้ว';
$_['entry_fault_detail'] = 'ความผิดพลาดหรือรายละเอียดอื่นๆ';

// Error
$_['text_error']         = 'ไม่พบการคืนสินค้าที่คุณร้องขอ!';
$_['error_order_id']     = 'ต้องระบุหมายเลขคำสั่งซื้อ!';
$_['error_firstname']    = 'ชื่อ ต้องมี 1 - 32 ตัวอักษร!';
$_['error_lastname']     = 'นามสกุล ต้องมี 1 - 32 ตัวอักษร!';
$_['error_email']        = 'อีเมล ไม่ถูกต้อง!';
$_['error_telephone']    = 'หมายเลขโทรศัพท์ต้องมี 3 - 32 ตัวอักษร!';
$_['error_product']      = 'ชื่อสินค้าต้องมีมากกว่า 3 ตัวอักษร แต่ไม่เกิน 255 ตัวอักษร!';
$_['error_model']        = 'รุ่นสินค้าต้องมีมากกว่า 3 ตัวอักษร แต่ไม่เกิน 64 ตัวอักษร!';
$_['error_reason']       = 'คุณต้องเลือกเหตุผลในการคืนสินค้า!';
$_['error_agree']        = 'คำเตือน: คุณต้องยอมรับ %s!';



/*
// Heading
$_['heading_title']      = 'Product Returns';

// Text
$_['text_account']       = 'Account';
$_['text_return']        = 'Return Information';
$_['text_return_detail'] = 'Return Details';
$_['text_description']   = 'Please complete the form below to request an RMA number.';
$_['text_order']         = 'Order Information';
$_['text_product']       = 'Product Information';
$_['text_reason']        = 'Reason for Return';
$_['text_message']       = '<p>Thank you for submitting your return request. Your request has been sent to the relevant department for processing.</p><p> You will be notified via e-mail as to the status of your request.</p>';
$_['text_return_id']     = 'Return ID:';
$_['text_order_id']      = 'Order ID:';
$_['text_date_ordered']  = 'Order Date:';
$_['text_status']        = 'Status:';
$_['text_date_added']    = 'Date Added:';
$_['text_comment']       = 'Return Comments';
$_['text_history']       = 'Return History';
$_['text_empty']         = 'You have not made any previous returns!';
$_['text_agree']         = 'I have read and agree to the <a href="%s" class="agree"><b>%s</b></a>';

// Column
$_['column_return_id']   = 'Return ID';
$_['column_order_id']    = 'Order ID';
$_['column_status']      = 'Status';
$_['column_date_added']  = 'Date Added';
$_['column_customer']    = 'Customer';
$_['column_product']     = 'Product Name';
$_['column_model']       = 'Model';
$_['column_quantity']    = 'Quantity';
$_['column_price']       = 'Price';
$_['column_opened']      = 'Opened';
$_['column_comment']     = 'Comment';
$_['column_reason']      = 'Reason';
$_['column_action']      = 'Action';

// Entry
$_['entry_order_id']     = 'Order ID';
$_['entry_date_ordered'] = 'Order Date';
$_['entry_firstname']    = 'First Name';
$_['entry_lastname']     = 'Last Name';
$_['entry_email']        = 'E-Mail';
$_['entry_telephone']    = 'Telephone';
$_['entry_product']      = 'Product Name';
$_['entry_model']        = 'Product Code';
$_['entry_quantity']     = 'Quantity';
$_['entry_reason']       = 'Reason for Return';
$_['entry_opened']       = 'Product is opened';
$_['entry_fault_detail'] = 'Faulty or other details';

// Error
$_['text_error']         = 'The returns you requested could not be found!';
$_['error_order_id']     = 'Order ID required!';
$_['error_firstname']    = 'First Name must be between 1 and 32 characters!';
$_['error_lastname']     = 'Last Name must be between 1 and 32 characters!';
$_['error_email']        = 'E-Mail Address does not appear to be valid!';
$_['error_telephone']    = 'Telephone must be between 3 and 32 characters!';
$_['error_product']      = 'Product Name must be greater than 3 and less than 255 characters!';
$_['error_model']        = 'Product Model must be greater than 3 and less than 64 characters!';
$_['error_reason']       = 'You must select a return product reason!';
$_['error_agree']        = 'Warning: You must agree to the %s!';
*/