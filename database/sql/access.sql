-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 04:11 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `access`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_rights`
--

CREATE TABLE `access_rights` (
  `access_rights_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_balances`
--

CREATE TABLE `account_balances` (
  `acc_bal_id` int(11) NOT NULL,
  `acc_bal_code` varchar(45) NOT NULL,
  `acc_bal_name` varchar(45) NOT NULL,
  `acc_bal_current` int(11) DEFAULT NULL,
  `acc_bal_type` varchar(45) NOT NULL,
  `acc_bal_desc` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `billing_address` text NOT NULL,
  `business_type` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state_province` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `zip_code` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL,
  `tel_no` varchar(45) NOT NULL,
  `mob_no` varchar(45) NOT NULL,
  `fax_no` varchar(45) NOT NULL,
  `other_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `inv_item_id` int(11) NOT NULL,
  `inv_item_qty` int(11) NOT NULL,
  `inv_item_code` varchar(45) NOT NULL,
  `inv_item_desc` varchar(45) NOT NULL,
  `inv_item_unit` varchar(45) NOT NULL,
  `inv_item_unit_cost` varchar(45) NOT NULL,
  `inv_item_condition` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_transactions`
--

CREATE TABLE `inventory_transactions` (
  `inv_trans_id` int(11) NOT NULL,
  `inv_trans_item_id` int(11) NOT NULL,
  `inv_trans_qty` int(11) NOT NULL,
  `inv_trans_action` varchar(45) NOT NULL,
  `inv_trans_remarks` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_attachment` varchar(45) NOT NULL,
  `inv_po_id` int(11) NOT NULL,
  `inv_rr_id` int(11) NOT NULL,
  `inv_sup_id` int(11) NOT NULL,
  `inv_amount` varchar(45) NOT NULL,
  `inv_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_orders`
--

CREATE TABLE `job_orders` (
  `jo_id` int(11) NOT NULL,
  `jo_code` varchar(45) NOT NULL,
  `jo_desc` text NOT NULL,
  `jo_cost` varchar(45) NOT NULL,
  `prj_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `mat_id` int(11) NOT NULL,
  `mat_item_code` varchar(45) NOT NULL,
  `mat_item_qty` varchar(45) NOT NULL,
  `jo_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `mod_id` int(11) NOT NULL,
  `mod_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mod_id`, `mod_name`) VALUES
(1, 'Company Module'),
(2, 'Account Balance Module'),
(3, 'Purchasing Module'),
(4, 'Supplier Module'),
(5, 'Warehouse Module'),
(6, 'Inventory Module'),
(7, 'Contracts Module'),
(8, 'Disbursement Module'),
(9, 'Equipments Module'),
(10, 'Assets Management Module'),
(11, 'Liabilities Management Module'),
(12, 'Equity Management Module'),
(13, 'Reports Module');

-- --------------------------------------------------------

--
-- Table structure for table `payment_transactions`
--

CREATE TABLE `payment_transactions` (
  `pt_id` int(11) NOT NULL,
  `pt_acc_id` int(11) NOT NULL,
  `pt_debit_amount` varchar(45) DEFAULT NULL,
  `pt_credit_ammount` varchar(45) DEFAULT NULL,
  `pt_pv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_vouchers`
--

CREATE TABLE `payment_vouchers` (
  `pv_id` int(11) NOT NULL,
  `pv_date` date NOT NULL,
  `pv_number` int(11) NOT NULL,
  `pv_pay_to` varchar(45) NOT NULL,
  `pv_invoice_id` int(11) DEFAULT NULL,
  `pv_desc` varchar(45) NOT NULL,
  `pv_total_amount` varchar(45) NOT NULL,
  `pv_type` varchar(45) NOT NULL,
  `pv_cheque_num` varchar(45) DEFAULT NULL,
  `pv_prep_user_id` int(11) NOT NULL,
  `pv_app_user_id` int(11) NOT NULL,
  `pv_status` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `prj_id` int(11) NOT NULL,
  `prj_code` varchar(45) NOT NULL,
  `prj_name` varchar(45) NOT NULL,
  `prj_desc` text NOT NULL,
  `prj_start` datetime NOT NULL,
  `prj_end` datetime NOT NULL,
  `prj_budget` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `po_id` int(11) NOT NULL,
  `po_date` date NOT NULL,
  `po_num` int(11) NOT NULL,
  `po_sup_id` int(11) NOT NULL,
  `po_in_budget` int(11) NOT NULL,
  `po_vat` varchar(45) NOT NULL,
  `po_prep_user_id` int(11) NOT NULL,
  `po_app_user_id` int(11) NOT NULL,
  `po_status` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_attachments`
--

CREATE TABLE `purchase_order_attachments` (
  `po_att_id` int(11) NOT NULL,
  `po_att_file` varchar(45) NOT NULL,
  `po_att_type` varchar(45) NOT NULL,
  `po_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_items`
--

CREATE TABLE `purchase_order_items` (
  `po_item_id` int(11) NOT NULL,
  `po_item_desc` text NOT NULL,
  `po_item_code` varchar(45) DEFAULT NULL,
  `po_item_qty` int(11) NOT NULL,
  `po_item_unit_cost` int(11) NOT NULL,
  `po_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiving_reports`
--

CREATE TABLE `receiving_reports` (
  `rr_id` int(11) NOT NULL,
  `rr_num` int(11) NOT NULL,
  `rr_po_id` int(11) NOT NULL,
  `rr_date` date NOT NULL,
  `rr_rec_from` varchar(45) NOT NULL,
  `rr_rec_by_user_id` int(11) NOT NULL,
  `rr_app_by_user_id` int(11) NOT NULL,
  `rr_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'Purchasing Manager'),
(3, 'Accounting Manager'),
(4, 'Warehouse Manager'),
(5, 'Contracts Manager'),
(6, 'Reports Manager'),
(7, 'Custom User'),
(8, 'Purchasing Staff'),
(9, 'Payable Staff'),
(10, 'Receiving Staff'),
(11, 'Contracts Staff');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(45) NOT NULL,
  `sup_cat_id` int(11) NOT NULL,
  `sup_vat_num` int(11) NOT NULL,
  `sup_op_bal` int(11) NOT NULL,
  `sup_addr_1` text NOT NULL,
  `sup_addr_2` text,
  `sup_contact_name` varchar(45) NOT NULL,
  `sup_contact_email` varchar(45) NOT NULL,
  `sup_tel_num` varchar(45) DEFAULT NULL,
  `sup_mobile_num` varchar(45) DEFAULT NULL,
  `sup_fax_num` varchar(45) DEFAULT NULL,
  `sup_website` varchar(45) DEFAULT NULL,
  `sup_bank_acct_holder` varchar(45) DEFAULT NULL,
  `sup_bank_acct_num` varchar(45) DEFAULT NULL,
  `sup_bank_acct_type` varchar(45) DEFAULT NULL,
  `sup_bank_name` varchar(45) DEFAULT NULL,
  `sup_bank_code` varchar(45) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_categories`
--

CREATE TABLE `supplier_categories` (
  `sup_cat_id` int(11) NOT NULL,
  `sup_cat_name` varchar(45) NOT NULL,
  `sup_cat_desc` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` text NOT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `users_info_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `tel_loc` int(11) DEFAULT NULL,
  `tel_num` varchar(45) DEFAULT NULL,
  `mobile_loc` int(11) NOT NULL,
  `mobile_num` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_rights`
--
ALTER TABLE `access_rights`
  ADD PRIMARY KEY (`access_rights_id`),
  ADD KEY `roles_user_id_fk_idx` (`user_id`),
  ADD KEY `roles_mod_id_fk_idx` (`mod_id`);

--
-- Indexes for table `account_balances`
--
ALTER TABLE `account_balances`
  ADD PRIMARY KEY (`acc_bal_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD PRIMARY KEY (`inv_item_id`),
  ADD UNIQUE KEY `item_code_UNIQUE` (`inv_item_code`);

--
-- Indexes for table `inventory_transactions`
--
ALTER TABLE `inventory_transactions`
  ADD PRIMARY KEY (`inv_trans_id`),
  ADD KEY `inv_trans_item_code_fk_idx` (`inv_trans_item_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`inv_id`),
  ADD KEY `inv_po_id_fk_idx` (`inv_po_id`),
  ADD KEY `inv_rr_id_fk_idx` (`inv_rr_id`),
  ADD KEY `inv_sup_id_fk_idx` (`inv_sup_id`);

--
-- Indexes for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD PRIMARY KEY (`jo_id`),
  ADD KEY `jo_prj_fk1_idx` (`prj_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`mat_id`),
  ADD KEY `mat_jo_fk1_idx` (`jo_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD PRIMARY KEY (`pt_id`),
  ADD KEY `pt_acc_id_fk_idx` (`pt_acc_id`),
  ADD KEY `pt_pv_id_fk_idx` (`pt_pv_id`);

--
-- Indexes for table `payment_vouchers`
--
ALTER TABLE `payment_vouchers`
  ADD PRIMARY KEY (`pv_id`),
  ADD KEY `pv_invoice_id_fk_idx` (`pv_invoice_id`),
  ADD KEY `pv_prep_user_id_fk_idx` (`pv_prep_user_id`),
  ADD KEY `pv_app_user_id_fk_idx` (`pv_app_user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`prj_id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `po_fk1_idx` (`po_sup_id`),
  ADD KEY `po_prep_by_user_fk_idx` (`po_prep_user_id`),
  ADD KEY `po_app_by_user_fk_idx` (`po_app_user_id`);

--
-- Indexes for table `purchase_order_attachments`
--
ALTER TABLE `purchase_order_attachments`
  ADD PRIMARY KEY (`po_att_id`),
  ADD KEY `po_attachments_fk_idx` (`po_id`);

--
-- Indexes for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD PRIMARY KEY (`po_item_id`),
  ADD KEY `po_order_item_id_fk_idx` (`po_id`),
  ADD KEY `po_item_code_fk_idx` (`po_item_code`);

--
-- Indexes for table `receiving_reports`
--
ALTER TABLE `receiving_reports`
  ADD PRIMARY KEY (`rr_id`),
  ADD KEY `rr_po_fk_idx` (`rr_po_id`),
  ADD KEY `rr_rec_user_fk_idx` (`rr_rec_by_user_id`),
  ADD KEY `rr_app_user_fk_idx` (`rr_app_by_user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `supplier_category_fk_idx` (`sup_cat_id`);

--
-- Indexes for table `supplier_categories`
--
ALTER TABLE `supplier_categories`
  ADD PRIMARY KEY (`sup_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `users_role_id_idx` (`role_id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`users_info_id`),
  ADD KEY `users_info_fk_idx` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_rights`
--
ALTER TABLE `access_rights`
  MODIFY `access_rights_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `account_balances`
--
ALTER TABLE `account_balances`
  MODIFY `acc_bal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory_items`
--
ALTER TABLE `inventory_items`
  MODIFY `inv_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `jo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment_vouchers`
--
ALTER TABLE `payment_vouchers`
  MODIFY `pv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `prj_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_order_attachments`
--
ALTER TABLE `purchase_order_attachments`
  MODIFY `po_att_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  MODIFY `po_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receiving_reports`
--
ALTER TABLE `receiving_reports`
  MODIFY `rr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_categories`
--
ALTER TABLE `supplier_categories`
  MODIFY `sup_cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `users_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_rights`
--
ALTER TABLE `access_rights`
  ADD CONSTRAINT `roles_mod_id_fk` FOREIGN KEY (`mod_id`) REFERENCES `modules` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `roles_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventory_transactions`
--
ALTER TABLE `inventory_transactions`
  ADD CONSTRAINT `inv_trans_item_id_fk` FOREIGN KEY (`inv_trans_item_id`) REFERENCES `inventory_items` (`inv_item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `inv_po_id_fk` FOREIGN KEY (`inv_po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_rr_id_fk` FOREIGN KEY (`inv_rr_id`) REFERENCES `receiving_reports` (`rr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_sup_id_fk` FOREIGN KEY (`inv_sup_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD CONSTRAINT `jo_prj_fk1` FOREIGN KEY (`prj_id`) REFERENCES `projects` (`prj_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `mat_jo_fk1` FOREIGN KEY (`jo_id`) REFERENCES `job_orders` (`jo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD CONSTRAINT `pt_acc_id_fk` FOREIGN KEY (`pt_acc_id`) REFERENCES `account_balances` (`acc_bal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pt_pv_id_fk` FOREIGN KEY (`pt_pv_id`) REFERENCES `payment_vouchers` (`pv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_vouchers`
--
ALTER TABLE `payment_vouchers`
  ADD CONSTRAINT `pv_app_user_id_fk` FOREIGN KEY (`pv_app_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pv_invoice_id_fk` FOREIGN KEY (`pv_invoice_id`) REFERENCES `invoice` (`inv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pv_prep_user_id_fk` FOREIGN KEY (`pv_prep_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD CONSTRAINT `po_app_by_user_fk` FOREIGN KEY (`po_app_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_prep_by_user_fk` FOREIGN KEY (`po_prep_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_supplier_fk` FOREIGN KEY (`po_sup_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_attachments`
--
ALTER TABLE `purchase_order_attachments`
  ADD CONSTRAINT `po_attachments_fk` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD CONSTRAINT `po_id_fk` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_item_code_fk` FOREIGN KEY (`po_item_code`) REFERENCES `inventory_items` (`inv_item_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receiving_reports`
--
ALTER TABLE `receiving_reports`
  ADD CONSTRAINT `rr_app_user_fk` FOREIGN KEY (`rr_app_by_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rr_po_fk` FOREIGN KEY (`rr_po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rr_rec_user_fk` FOREIGN KEY (`rr_rec_by_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `supplier_category_fk` FOREIGN KEY (`sup_cat_id`) REFERENCES `supplier_categories` (`sup_cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_info`
--
ALTER TABLE `users_info`
  ADD CONSTRAINT `users_info_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
