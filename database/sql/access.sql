-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 01:54 PM
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
-- Table structure for table `accounting_status`
--

CREATE TABLE `accounting_status` (
  `acc_stat_id` int(11) NOT NULL,
  `acc_stat_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_status`
--

INSERT INTO `accounting_status` (`acc_stat_id`, `acc_stat_name`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Denied'),
(4, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `account_balance`
--

CREATE TABLE `account_balance` (
  `acc_bal_id` int(11) NOT NULL,
  `acc_bal_code` varchar(45) NOT NULL,
  `acc_bal_name` varchar(45) NOT NULL,
  `acc_bal_current` int(11) DEFAULT NULL,
  `acc_bal_type_id` int(11) NOT NULL,
  `acc_bal_desc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `account_balance_type`
--

CREATE TABLE `account_balance_type` (
  `ab_type_id` int(11) NOT NULL,
  `ab_type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank_account_types`
--

CREATE TABLE `bank_account_types` (
  `bank_acc_type_id` int(11) NOT NULL,
  `bank_acc_type_name` varchar(45) NOT NULL
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
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `contracts_id` int(11) NOT NULL,
  `contracts_code` varchar(45) NOT NULL,
  `contracts_desc` varchar(45) NOT NULL,
  `contracts_unit` varchar(45) NOT NULL,
  `contracts_unit_cost` varchar(45) NOT NULL,
  `contracts_status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contract_reports`
--

CREATE TABLE `contract_reports` (
  `cr_id` int(11) NOT NULL,
  `cr_date` date NOT NULL,
  `cr_num` int(11) NOT NULL,
  `cr_po_id` int(11) NOT NULL,
  `cr_rec_from` int(11) NOT NULL,
  `cr_prep_user_id` int(11) NOT NULL,
  `cr_app_user_id` int(11) NOT NULL,
  `cr_status_id` int(11) NOT NULL,
  `cr_document` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `inv_item_id` int(11) NOT NULL,
  `inv_item_code` varchar(45) NOT NULL,
  `inv_item_desc` varchar(45) NOT NULL,
  `inv_item_unit` varchar(45) NOT NULL,
  `inv_item_unit_cost` varchar(45) NOT NULL,
  `inv_item_condition` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_transactions`
--

CREATE TABLE `inventory_transactions` (
  `inv_trans_id` int(11) NOT NULL,
  `inv_trans_item_id` int(11) NOT NULL,
  `inv_trans_qty` int(11) NOT NULL,
  `inv_trans_unit` varchar(45) NOT NULL,
  `inv_trans_action` varchar(45) NOT NULL,
  `inv_trans_unit_cost` varchar(45) NOT NULL,
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
  `inv_rr_id` int(11) DEFAULT NULL,
  `inv_contract_id` int(11) DEFAULT NULL,
  `inv_sup_id` int(11) NOT NULL,
  `inv_amount` varchar(45) NOT NULL,
  `inv_status_id` int(11) NOT NULL
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
-- Table structure for table `non_inventory_items`
--

CREATE TABLE `non_inventory_items` (
  `non_inv_item_id` int(11) NOT NULL,
  `non_inv_item_code` varchar(45) NOT NULL,
  `non_inv_item_desc` varchar(45) NOT NULL,
  `non_inv_item_unit` varchar(45) NOT NULL,
  `non_inv_item_unit_cost` varchar(45) NOT NULL,
  `non_inv_item_condition` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pv_status_id` int(11) NOT NULL
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
  `po_type_id` int(11) NOT NULL,
  `po_vat` varchar(45) NOT NULL,
  `po_prep_user_id` int(11) NOT NULL,
  `po_app_user_id` int(11) NOT NULL,
  `po_status_id` int(11) NOT NULL
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
  `po_inv_item_id` int(11) DEFAULT NULL,
  `po_non_inv_item_id` int(11) DEFAULT NULL,
  `po_contract_id` int(11) DEFAULT NULL,
  `po_item_qty` int(11) NOT NULL,
  `po_item_condition` varchar(45) DEFAULT NULL,
  `po_item_unit_cost` int(11) NOT NULL,
  `po_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_types`
--

CREATE TABLE `purchase_order_types` (
  `po_type_id` int(11) NOT NULL,
  `po_type_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order_types`
--

INSERT INTO `purchase_order_types` (`po_type_id`, `po_type_name`) VALUES
(1, 'Inventory'),
(2, 'Non-Inventory'),
(3, 'Contracts');

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
  `rr_status_id` int(11) NOT NULL
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
  `sup_op_bal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_address`
--

CREATE TABLE `suppliers_address` (
  `sup_addr_id` int(11) NOT NULL,
  `sup_post_addr_1` text NOT NULL,
  `sup_post_addr_2` text,
  `sup_post_code` int(11) NOT NULL,
  `sup_phys_addr_1` text NOT NULL,
  `sup_phys_addr_2` text,
  `sup_phys_code` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_additional_contacts`
--

CREATE TABLE `supplier_additional_contacts` (
  `sup_add_cont_id` int(11) NOT NULL,
  `sup_add_cont_name` varchar(45) NOT NULL,
  `sup_add_cont_designation` varchar(45) NOT NULL,
  `sup_add_cont_tel_num` varchar(45) DEFAULT NULL,
  `sup_add_cont_mobile_num` varchar(45) NOT NULL,
  `sup_add_cont_email` varchar(45) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_bank_details`
--

CREATE TABLE `supplier_bank_details` (
  `sup_bank_id` int(11) NOT NULL,
  `sup_bank_acc_holder` varchar(45) NOT NULL,
  `sup_bank_acc_num` varchar(45) NOT NULL,
  `sup_bank_name` varchar(45) NOT NULL,
  `sup_bank_code` varchar(45) NOT NULL,
  `sup_bank_acc_type` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_category`
--

CREATE TABLE `supplier_category` (
  `sup_cat_id` int(11) NOT NULL,
  `sup_cat_name` varchar(45) NOT NULL,
  `sup_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_contact_details`
--

CREATE TABLE `supplier_contact_details` (
  `sup_cont_id` int(11) NOT NULL,
  `sup_cont_name` varchar(45) NOT NULL,
  `sup_cont_email` varchar(45) NOT NULL,
  `sup_cont_tel_num` varchar(45) DEFAULT NULL,
  `sup_cont_mob_num` varchar(45) NOT NULL,
  `sup_cont_fax_num` varchar(45) DEFAULT NULL,
  `sup_cont_website` varchar(45) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL
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
-- Indexes for table `accounting_status`
--
ALTER TABLE `accounting_status`
  ADD PRIMARY KEY (`acc_stat_id`);

--
-- Indexes for table `account_balance`
--
ALTER TABLE `account_balance`
  ADD PRIMARY KEY (`acc_bal_id`),
  ADD KEY `ab_type_id_fk_idx` (`acc_bal_type_id`);

--
-- Indexes for table `account_balance_type`
--
ALTER TABLE `account_balance_type`
  ADD PRIMARY KEY (`ab_type_id`);

--
-- Indexes for table `bank_account_types`
--
ALTER TABLE `bank_account_types`
  ADD PRIMARY KEY (`bank_acc_type_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`contracts_id`);

--
-- Indexes for table `contract_reports`
--
ALTER TABLE `contract_reports`
  ADD PRIMARY KEY (`cr_id`),
  ADD KEY `cr_po_id_fk_idx` (`cr_po_id`),
  ADD KEY `cr_prep_user_id_fk_idx` (`cr_prep_user_id`),
  ADD KEY `cr_app_user_id_fk_idx` (`cr_app_user_id`),
  ADD KEY `cr_status_id_idx` (`cr_status_id`);

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
  ADD KEY `inv_sup_id_fk_idx` (`inv_sup_id`),
  ADD KEY `inv_status_id_fk_idx` (`inv_status_id`),
  ADD KEY `inv_contract_id_fk_idx` (`inv_contract_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `non_inventory_items`
--
ALTER TABLE `non_inventory_items`
  ADD PRIMARY KEY (`non_inv_item_id`);

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
  ADD KEY `pv_app_user_id_fk_idx` (`pv_app_user_id`),
  ADD KEY `pv_status_id_idx` (`pv_status_id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `po_fk1_idx` (`po_sup_id`),
  ADD KEY `po_prep_by_user_fk_idx` (`po_prep_user_id`),
  ADD KEY `po_app_by_user_fk_idx` (`po_app_user_id`),
  ADD KEY `po_type_fk_idx` (`po_type_id`),
  ADD KEY `po_status_fk_idx` (`po_status_id`);

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
  ADD KEY `po_item_code_idx` (`po_inv_item_id`),
  ADD KEY `po_order_item_id_fk_idx` (`po_id`),
  ADD KEY `po_non_inv_item_id_idx` (`po_non_inv_item_id`),
  ADD KEY `po_contract_id_idx` (`po_contract_id`);

--
-- Indexes for table `purchase_order_types`
--
ALTER TABLE `purchase_order_types`
  ADD PRIMARY KEY (`po_type_id`);

--
-- Indexes for table `receiving_reports`
--
ALTER TABLE `receiving_reports`
  ADD PRIMARY KEY (`rr_id`),
  ADD KEY `rr_po_fk_idx` (`rr_po_id`),
  ADD KEY `rr_rec_user_fk_idx` (`rr_rec_by_user_id`),
  ADD KEY `rr_app_user_fk_idx` (`rr_app_by_user_id`),
  ADD KEY `rr_status_id_fk_idx` (`rr_status_id`);

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
-- Indexes for table `suppliers_address`
--
ALTER TABLE `suppliers_address`
  ADD PRIMARY KEY (`sup_addr_id`),
  ADD KEY `supplier_address_fk_idx` (`supplier_id`);

--
-- Indexes for table `supplier_additional_contacts`
--
ALTER TABLE `supplier_additional_contacts`
  ADD PRIMARY KEY (`sup_add_cont_id`),
  ADD KEY `supplier_add_contacts_fk_idx` (`supplier_id`);

--
-- Indexes for table `supplier_bank_details`
--
ALTER TABLE `supplier_bank_details`
  ADD PRIMARY KEY (`sup_bank_id`),
  ADD KEY `sup_bank_fk1_idx` (`sup_bank_acc_type`),
  ADD KEY `sup_bank_fk2_idx` (`supplier_id`);

--
-- Indexes for table `supplier_category`
--
ALTER TABLE `supplier_category`
  ADD PRIMARY KEY (`sup_cat_id`);

--
-- Indexes for table `supplier_contact_details`
--
ALTER TABLE `supplier_contact_details`
  ADD PRIMARY KEY (`sup_cont_id`),
  ADD KEY `supplier_contact_fk_idx` (`supplier_id`);

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
-- AUTO_INCREMENT for table `accounting_status`
--
ALTER TABLE `accounting_status`
  MODIFY `acc_stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `account_balance`
--
ALTER TABLE `account_balance`
  MODIFY `acc_bal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `account_balance_type`
--
ALTER TABLE `account_balance_type`
  MODIFY `ab_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank_account_types`
--
ALTER TABLE `bank_account_types`
  MODIFY `bank_acc_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `contracts_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contract_reports`
--
ALTER TABLE `contract_reports`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `non_inventory_items`
--
ALTER TABLE `non_inventory_items`
  MODIFY `non_inv_item_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_vouchers`
--
ALTER TABLE `payment_vouchers`
  MODIFY `pv_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `purchase_order_types`
--
ALTER TABLE `purchase_order_types`
  MODIFY `po_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
-- AUTO_INCREMENT for table `suppliers_address`
--
ALTER TABLE `suppliers_address`
  MODIFY `sup_addr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_additional_contacts`
--
ALTER TABLE `supplier_additional_contacts`
  MODIFY `sup_add_cont_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_bank_details`
--
ALTER TABLE `supplier_bank_details`
  MODIFY `sup_bank_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_category`
--
ALTER TABLE `supplier_category`
  MODIFY `sup_cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier_contact_details`
--
ALTER TABLE `supplier_contact_details`
  MODIFY `sup_cont_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `account_balance`
--
ALTER TABLE `account_balance`
  ADD CONSTRAINT `ab_type_id_fk` FOREIGN KEY (`acc_bal_type_id`) REFERENCES `account_balance_type` (`ab_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contract_reports`
--
ALTER TABLE `contract_reports`
  ADD CONSTRAINT `cr_app_user_id_fk` FOREIGN KEY (`cr_app_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cr_po_id_fk` FOREIGN KEY (`cr_po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cr_prep_user_id_fk` FOREIGN KEY (`cr_prep_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cr_status_id` FOREIGN KEY (`cr_status_id`) REFERENCES `accounting_status` (`acc_stat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventory_transactions`
--
ALTER TABLE `inventory_transactions`
  ADD CONSTRAINT `inv_trans_item_id_fk` FOREIGN KEY (`inv_trans_item_id`) REFERENCES `inventory_items` (`inv_item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `inv_contract_id_fk` FOREIGN KEY (`inv_contract_id`) REFERENCES `contracts` (`contracts_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_po_id_fk` FOREIGN KEY (`inv_po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_rr_id_fk` FOREIGN KEY (`inv_rr_id`) REFERENCES `receiving_reports` (`rr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_status_id_fk` FOREIGN KEY (`inv_status_id`) REFERENCES `accounting_status` (`acc_stat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `inv_sup_id_fk` FOREIGN KEY (`inv_sup_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_transactions`
--
ALTER TABLE `payment_transactions`
  ADD CONSTRAINT `pt_acc_id_fk` FOREIGN KEY (`pt_acc_id`) REFERENCES `account_balance` (`acc_bal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pt_pv_id_fk` FOREIGN KEY (`pt_pv_id`) REFERENCES `payment_vouchers` (`pv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_vouchers`
--
ALTER TABLE `payment_vouchers`
  ADD CONSTRAINT `pv_app_user_id_fk` FOREIGN KEY (`pv_app_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pv_invoice_id_fk` FOREIGN KEY (`pv_invoice_id`) REFERENCES `invoice` (`inv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pv_prep_user_id_fk` FOREIGN KEY (`pv_prep_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pv_status_id` FOREIGN KEY (`pv_status_id`) REFERENCES `accounting_status` (`acc_stat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD CONSTRAINT `po_app_by_user_fk` FOREIGN KEY (`po_app_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_prep_by_user_fk` FOREIGN KEY (`po_prep_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_status_fk` FOREIGN KEY (`po_status_id`) REFERENCES `accounting_status` (`acc_stat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_supplier_fk` FOREIGN KEY (`po_sup_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_type_fk` FOREIGN KEY (`po_type_id`) REFERENCES `purchase_order_types` (`po_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_attachments`
--
ALTER TABLE `purchase_order_attachments`
  ADD CONSTRAINT `po_attachments_fk` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order_items`
--
ALTER TABLE `purchase_order_items`
  ADD CONSTRAINT `po_contract_id` FOREIGN KEY (`po_contract_id`) REFERENCES `contracts` (`contracts_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_id_fk` FOREIGN KEY (`po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_inv_item_id_fk` FOREIGN KEY (`po_inv_item_id`) REFERENCES `inventory_items` (`inv_item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `po_non_inv_item_id` FOREIGN KEY (`po_non_inv_item_id`) REFERENCES `non_inventory_items` (`non_inv_item_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `receiving_reports`
--
ALTER TABLE `receiving_reports`
  ADD CONSTRAINT `rr_app_user_fk` FOREIGN KEY (`rr_app_by_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rr_po_fk` FOREIGN KEY (`rr_po_id`) REFERENCES `purchase_orders` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rr_rec_user_fk` FOREIGN KEY (`rr_rec_by_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rr_status_id_fk` FOREIGN KEY (`rr_status_id`) REFERENCES `accounting_status` (`acc_stat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `supplier_category_fk` FOREIGN KEY (`sup_cat_id`) REFERENCES `supplier_category` (`sup_cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suppliers_address`
--
ALTER TABLE `suppliers_address`
  ADD CONSTRAINT `supplier_address_fk` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier_additional_contacts`
--
ALTER TABLE `supplier_additional_contacts`
  ADD CONSTRAINT `supplier_add_contacts_fk` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier_bank_details`
--
ALTER TABLE `supplier_bank_details`
  ADD CONSTRAINT `sup_bank_fk1` FOREIGN KEY (`sup_bank_acc_type`) REFERENCES `bank_account_types` (`bank_acc_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sup_bank_fk2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplier_contact_details`
--
ALTER TABLE `supplier_contact_details`
  ADD CONSTRAINT `supplier_contact_details_fk` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`sup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
