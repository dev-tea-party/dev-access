-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema access
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `access` ;

-- -----------------------------------------------------
-- Schema access
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `access` DEFAULT CHARACTER SET latin1 ;
USE `access` ;

-- -----------------------------------------------------
-- Table `access`.`modules`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`modules` ;

CREATE TABLE IF NOT EXISTS `access`.`modules` (
  `mod_id` INT(11) NOT NULL AUTO_INCREMENT,
  `mod_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`mod_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`roles` ;

CREATE TABLE IF NOT EXISTS `access`.`roles` (
  `role_id` INT(11) NOT NULL AUTO_INCREMENT,
  `role_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`role_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`users` ;

CREATE TABLE IF NOT EXISTS `access`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` TEXT NOT NULL,
  `role_id` INT(11) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  INDEX `users_role_id_idx` (`role_id` ASC),
  CONSTRAINT `users_role_fk`
    FOREIGN KEY (`role_id`)
    REFERENCES `access`.`roles` (`role_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`access_rights`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`access_rights` ;

CREATE TABLE IF NOT EXISTS `access`.`access_rights` (
  `access_rights_id` INT(11) NOT NULL AUTO_INCREMENT,
  `mod_id` INT(11) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`access_rights_id`),
  INDEX `roles_user_id_fk_idx` (`user_id` ASC),
  INDEX `roles_mod_id_fk_idx` (`mod_id` ASC),
  CONSTRAINT `roles_mod_id_fk`
    FOREIGN KEY (`mod_id`)
    REFERENCES `access`.`modules` (`mod_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `roles_user_id_fk`
    FOREIGN KEY (`user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 36
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`account_balances`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`account_balances` ;

CREATE TABLE IF NOT EXISTS `access`.`account_balances` (
  `acc_bal_id` INT(11) NOT NULL AUTO_INCREMENT,
  `acc_bal_code` VARCHAR(45) NOT NULL,
  `acc_bal_name` VARCHAR(45) NOT NULL,
  `acc_bal_current` INT(11) NULL DEFAULT NULL,
  `acc_bal_type` VARCHAR(45) NOT NULL,
  `acc_bal_desc` VARCHAR(45) NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`acc_bal_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`accounting_status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`accounting_status` ;

CREATE TABLE IF NOT EXISTS `access`.`accounting_status` (
  `acc_stat_id` INT(11) NOT NULL AUTO_INCREMENT,
  `acc_stat_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`acc_stat_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`company_details`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`company_details` ;

CREATE TABLE IF NOT EXISTS `access`.`company_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(45) NOT NULL,
  `contact_name` VARCHAR(45) NOT NULL,
  `billing_address` TEXT NOT NULL,
  `business_type` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `state_province` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NOT NULL,
  `zip_code` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `url` VARCHAR(45) NOT NULL,
  `tel_no` VARCHAR(45) NOT NULL,
  `mob_no` VARCHAR(45) NOT NULL,
  `fax_no` VARCHAR(45) NOT NULL,
  `other_details` TEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`supplier_categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`supplier_categories` ;

CREATE TABLE IF NOT EXISTS `access`.`supplier_categories` (
  `sup_cat_id` INT(11) NOT NULL AUTO_INCREMENT,
  `sup_cat_name` VARCHAR(45) NOT NULL,
  `sup_cat_desc` TEXT NOT NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`sup_cat_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`suppliers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`suppliers` ;

CREATE TABLE IF NOT EXISTS `access`.`suppliers` (
  `sup_id` INT(11) NOT NULL AUTO_INCREMENT,
  `sup_name` VARCHAR(45) NOT NULL,
  `sup_cat_id` INT(11) NOT NULL,
  `sup_vat_num` INT(11) NOT NULL,
  `sup_op_bal` INT(11) NOT NULL,
  `sup_addr_1` TEXT NOT NULL,
  `sup_addr_2` TEXT NULL,
  `sup_contact_name` VARCHAR(45) NOT NULL,
  `sup_contact_email` VARCHAR(45) NOT NULL,
  `sup_tel_num` VARCHAR(45) NULL,
  `sup_mobile_num` VARCHAR(45) NULL,
  `sup_fax_num` VARCHAR(45) NULL,
  `sup_website` VARCHAR(45) NULL,
  `sup_bank_acct_holder` VARCHAR(45) NULL,
  `sup_bank_acct_num` VARCHAR(45) NULL,
  `sup_bank_acct_type` VARCHAR(45) NULL,
  `sup_bank_name` VARCHAR(45) NULL,
  `sup_bank_code` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`sup_id`),
  INDEX `supplier_category_fk_idx` (`sup_cat_id` ASC),
  CONSTRAINT `supplier_category_fk`
    FOREIGN KEY (`sup_cat_id`)
    REFERENCES `access`.`supplier_categories` (`sup_cat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`purchase_order_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`purchase_order_types` ;

CREATE TABLE IF NOT EXISTS `access`.`purchase_order_types` (
  `po_type_id` INT(11) NOT NULL AUTO_INCREMENT,
  `po_type_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`po_type_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`purchase_orders`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`purchase_orders` ;

CREATE TABLE IF NOT EXISTS `access`.`purchase_orders` (
  `po_id` INT(11) NOT NULL AUTO_INCREMENT,
  `po_date` DATE NOT NULL,
  `po_num` INT(11) NOT NULL,
  `po_sup_id` INT(11) NOT NULL,
  `po_in_budget` INT(11) NOT NULL,
  `po_type_id` INT(11) NOT NULL,
  `po_vat` VARCHAR(45) NOT NULL,
  `po_prep_user_id` INT(11) NOT NULL,
  `po_app_user_id` INT(11) NOT NULL,
  `po_status_id` INT(11) NOT NULL,
  PRIMARY KEY (`po_id`),
  INDEX `po_fk1_idx` (`po_sup_id` ASC),
  INDEX `po_prep_by_user_fk_idx` (`po_prep_user_id` ASC),
  INDEX `po_app_by_user_fk_idx` (`po_app_user_id` ASC),
  INDEX `po_type_fk_idx` (`po_type_id` ASC),
  INDEX `po_status_fk_idx` (`po_status_id` ASC),
  CONSTRAINT `po_app_by_user_fk`
    FOREIGN KEY (`po_app_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_prep_by_user_fk`
    FOREIGN KEY (`po_prep_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_status_fk`
    FOREIGN KEY (`po_status_id`)
    REFERENCES `access`.`accounting_status` (`acc_stat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_supplier_fk`
    FOREIGN KEY (`po_sup_id`)
    REFERENCES `access`.`suppliers` (`sup_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_type_fk`
    FOREIGN KEY (`po_type_id`)
    REFERENCES `access`.`purchase_order_types` (`po_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`contract_reports`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`contract_reports` ;

CREATE TABLE IF NOT EXISTS `access`.`contract_reports` (
  `cr_id` INT(11) NOT NULL AUTO_INCREMENT,
  `cr_date` DATE NOT NULL,
  `cr_num` INT(11) NOT NULL,
  `cr_po_id` INT(11) NOT NULL,
  `cr_rec_from` INT(11) NOT NULL,
  `cr_prep_user_id` INT(11) NOT NULL,
  `cr_app_user_id` INT(11) NOT NULL,
  `cr_status_id` INT(11) NOT NULL,
  `cr_document` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cr_id`),
  INDEX `cr_po_id_fk_idx` (`cr_po_id` ASC),
  INDEX `cr_prep_user_id_fk_idx` (`cr_prep_user_id` ASC),
  INDEX `cr_app_user_id_fk_idx` (`cr_app_user_id` ASC),
  INDEX `cr_status_id_idx` (`cr_status_id` ASC),
  CONSTRAINT `cr_app_user_id_fk`
    FOREIGN KEY (`cr_app_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cr_po_id_fk`
    FOREIGN KEY (`cr_po_id`)
    REFERENCES `access`.`purchase_orders` (`po_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cr_prep_user_id_fk`
    FOREIGN KEY (`cr_prep_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cr_status_id`
    FOREIGN KEY (`cr_status_id`)
    REFERENCES `access`.`accounting_status` (`acc_stat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`contracts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`contracts` ;

CREATE TABLE IF NOT EXISTS `access`.`contracts` (
  `contracts_id` INT(11) NOT NULL AUTO_INCREMENT,
  `contracts_code` VARCHAR(45) NOT NULL,
  `contracts_desc` VARCHAR(45) NOT NULL,
  `contracts_unit` VARCHAR(45) NOT NULL,
  `contracts_unit_cost` VARCHAR(45) NOT NULL,
  `contracts_status` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`contracts_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`inventory_items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`inventory_items` ;

CREATE TABLE IF NOT EXISTS `access`.`inventory_items` (
  `inv_item_id` INT(11) NOT NULL AUTO_INCREMENT,
  `inv_item_code` VARCHAR(45) NOT NULL,
  `inv_item_desc` VARCHAR(45) NOT NULL,
  `inv_item_unit` VARCHAR(45) NOT NULL,
  `inv_item_unit_cost` VARCHAR(45) NOT NULL,
  `inv_item_condition` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`inv_item_id`),
  UNIQUE INDEX `item_code_UNIQUE` (`inv_item_code` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`inventory_transactions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`inventory_transactions` ;

CREATE TABLE IF NOT EXISTS `access`.`inventory_transactions` (
  `inv_trans_id` INT(11) NOT NULL,
  `inv_trans_item_id` INT(11) NOT NULL,
  `inv_trans_qty` INT(11) NOT NULL,
  `inv_trans_unit` VARCHAR(45) NOT NULL,
  `inv_trans_action` VARCHAR(45) NOT NULL,
  `inv_trans_unit_cost` VARCHAR(45) NOT NULL,
  `inv_trans_remarks` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`inv_trans_id`),
  INDEX `inv_trans_item_code_fk_idx` (`inv_trans_item_id` ASC),
  CONSTRAINT `inv_trans_item_id_fk`
    FOREIGN KEY (`inv_trans_item_id`)
    REFERENCES `access`.`inventory_items` (`inv_item_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`receiving_reports`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`receiving_reports` ;

CREATE TABLE IF NOT EXISTS `access`.`receiving_reports` (
  `rr_id` INT(11) NOT NULL AUTO_INCREMENT,
  `rr_num` INT(11) NOT NULL,
  `rr_po_id` INT(11) NOT NULL,
  `rr_date` DATE NOT NULL,
  `rr_rec_from` VARCHAR(45) NOT NULL,
  `rr_rec_by_user_id` INT(11) NOT NULL,
  `rr_app_by_user_id` INT(11) NOT NULL,
  `rr_status_id` INT(11) NOT NULL,
  PRIMARY KEY (`rr_id`),
  INDEX `rr_po_fk_idx` (`rr_po_id` ASC),
  INDEX `rr_rec_user_fk_idx` (`rr_rec_by_user_id` ASC),
  INDEX `rr_app_user_fk_idx` (`rr_app_by_user_id` ASC),
  INDEX `rr_status_id_fk_idx` (`rr_status_id` ASC),
  CONSTRAINT `rr_app_user_fk`
    FOREIGN KEY (`rr_app_by_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rr_po_fk`
    FOREIGN KEY (`rr_po_id`)
    REFERENCES `access`.`purchase_orders` (`po_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rr_rec_user_fk`
    FOREIGN KEY (`rr_rec_by_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `rr_status_id_fk`
    FOREIGN KEY (`rr_status_id`)
    REFERENCES `access`.`accounting_status` (`acc_stat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`invoice`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`invoice` ;

CREATE TABLE IF NOT EXISTS `access`.`invoice` (
  `inv_id` INT(11) NOT NULL AUTO_INCREMENT,
  `inv_attachment` VARCHAR(45) NOT NULL,
  `inv_po_id` INT(11) NOT NULL,
  `inv_rr_id` INT(11) NULL DEFAULT NULL,
  `inv_contract_id` INT(11) NULL DEFAULT NULL,
  `inv_sup_id` INT(11) NOT NULL,
  `inv_amount` VARCHAR(45) NOT NULL,
  `inv_status_id` INT(11) NOT NULL,
  PRIMARY KEY (`inv_id`),
  INDEX `inv_po_id_fk_idx` (`inv_po_id` ASC),
  INDEX `inv_rr_id_fk_idx` (`inv_rr_id` ASC),
  INDEX `inv_sup_id_fk_idx` (`inv_sup_id` ASC),
  INDEX `inv_status_id_fk_idx` (`inv_status_id` ASC),
  INDEX `inv_contract_id_fk_idx` (`inv_contract_id` ASC),
  CONSTRAINT `inv_contract_id_fk`
    FOREIGN KEY (`inv_contract_id`)
    REFERENCES `access`.`contracts` (`contracts_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `inv_po_id_fk`
    FOREIGN KEY (`inv_po_id`)
    REFERENCES `access`.`purchase_orders` (`po_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `inv_rr_id_fk`
    FOREIGN KEY (`inv_rr_id`)
    REFERENCES `access`.`receiving_reports` (`rr_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `inv_status_id_fk`
    FOREIGN KEY (`inv_status_id`)
    REFERENCES `access`.`accounting_status` (`acc_stat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `inv_sup_id_fk`
    FOREIGN KEY (`inv_sup_id`)
    REFERENCES `access`.`suppliers` (`sup_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`non_inventory_items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`non_inventory_items` ;

CREATE TABLE IF NOT EXISTS `access`.`non_inventory_items` (
  `non_inv_item_id` INT(11) NOT NULL AUTO_INCREMENT,
  `non_inv_item_code` VARCHAR(45) NOT NULL,
  `non_inv_item_desc` VARCHAR(45) NOT NULL,
  `non_inv_item_unit` VARCHAR(45) NOT NULL,
  `non_inv_item_unit_cost` VARCHAR(45) NOT NULL,
  `non_inv_item_condition` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`non_inv_item_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`payment_vouchers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`payment_vouchers` ;

CREATE TABLE IF NOT EXISTS `access`.`payment_vouchers` (
  `pv_id` INT(11) NOT NULL AUTO_INCREMENT,
  `pv_date` DATE NOT NULL,
  `pv_number` INT(11) NOT NULL,
  `pv_pay_to` VARCHAR(45) NOT NULL,
  `pv_invoice_id` INT(11) NULL DEFAULT NULL,
  `pv_desc` VARCHAR(45) NOT NULL,
  `pv_total_amount` VARCHAR(45) NOT NULL,
  `pv_type` VARCHAR(45) NOT NULL,
  `pv_cheque_num` VARCHAR(45) NULL DEFAULT NULL,
  `pv_prep_user_id` INT(11) NOT NULL,
  `pv_app_user_id` INT(11) NOT NULL,
  `pv_status_id` INT(11) NOT NULL,
  PRIMARY KEY (`pv_id`),
  INDEX `pv_invoice_id_fk_idx` (`pv_invoice_id` ASC),
  INDEX `pv_prep_user_id_fk_idx` (`pv_prep_user_id` ASC),
  INDEX `pv_app_user_id_fk_idx` (`pv_app_user_id` ASC),
  INDEX `pv_status_id_idx` (`pv_status_id` ASC),
  CONSTRAINT `pv_app_user_id_fk`
    FOREIGN KEY (`pv_app_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pv_invoice_id_fk`
    FOREIGN KEY (`pv_invoice_id`)
    REFERENCES `access`.`invoice` (`inv_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pv_prep_user_id_fk`
    FOREIGN KEY (`pv_prep_user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pv_status_id`
    FOREIGN KEY (`pv_status_id`)
    REFERENCES `access`.`accounting_status` (`acc_stat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`payment_transactions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`payment_transactions` ;

CREATE TABLE IF NOT EXISTS `access`.`payment_transactions` (
  `pt_id` INT(11) NOT NULL,
  `pt_acc_id` INT(11) NOT NULL,
  `pt_debit_amount` VARCHAR(45) NULL DEFAULT NULL,
  `pt_credit_ammount` VARCHAR(45) NULL DEFAULT NULL,
  `pt_pv_id` INT(11) NOT NULL,
  PRIMARY KEY (`pt_id`),
  INDEX `pt_acc_id_fk_idx` (`pt_acc_id` ASC),
  INDEX `pt_pv_id_fk_idx` (`pt_pv_id` ASC),
  CONSTRAINT `pt_acc_id_fk`
    FOREIGN KEY (`pt_acc_id`)
    REFERENCES `access`.`account_balances` (`acc_bal_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pt_pv_id_fk`
    FOREIGN KEY (`pt_pv_id`)
    REFERENCES `access`.`payment_vouchers` (`pv_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`purchase_order_attachments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`purchase_order_attachments` ;

CREATE TABLE IF NOT EXISTS `access`.`purchase_order_attachments` (
  `po_att_id` INT(11) NOT NULL AUTO_INCREMENT,
  `po_att_file` VARCHAR(45) NOT NULL,
  `po_att_type` VARCHAR(45) NOT NULL,
  `po_id` INT(11) NOT NULL,
  PRIMARY KEY (`po_att_id`),
  INDEX `po_attachments_fk_idx` (`po_id` ASC),
  CONSTRAINT `po_attachments_fk`
    FOREIGN KEY (`po_id`)
    REFERENCES `access`.`purchase_orders` (`po_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`purchase_order_items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`purchase_order_items` ;

CREATE TABLE IF NOT EXISTS `access`.`purchase_order_items` (
  `po_item_id` INT(11) NOT NULL AUTO_INCREMENT,
  `po_inv_item_id` INT(11) NULL DEFAULT NULL,
  `po_non_inv_item_id` INT(11) NULL DEFAULT NULL,
  `po_contract_id` INT(11) NULL DEFAULT NULL,
  `po_item_qty` INT(11) NOT NULL,
  `po_item_condition` VARCHAR(45) NULL DEFAULT NULL,
  `po_item_unit_cost` INT(11) NOT NULL,
  `po_id` INT(11) NOT NULL,
  PRIMARY KEY (`po_item_id`),
  INDEX `po_item_code_idx` (`po_inv_item_id` ASC),
  INDEX `po_order_item_id_fk_idx` (`po_id` ASC),
  INDEX `po_non_inv_item_id_idx` (`po_non_inv_item_id` ASC),
  INDEX `po_contract_id_idx` (`po_contract_id` ASC),
  CONSTRAINT `po_contract_id`
    FOREIGN KEY (`po_contract_id`)
    REFERENCES `access`.`contracts` (`contracts_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_id_fk`
    FOREIGN KEY (`po_id`)
    REFERENCES `access`.`purchase_orders` (`po_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_inv_item_id_fk`
    FOREIGN KEY (`po_inv_item_id`)
    REFERENCES `access`.`inventory_items` (`inv_item_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `po_non_inv_item_id`
    FOREIGN KEY (`po_non_inv_item_id`)
    REFERENCES `access`.`non_inventory_items` (`non_inv_item_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `access`.`users_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `access`.`users_info` ;

CREATE TABLE IF NOT EXISTS `access`.`users_info` (
  `users_info_id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `middlename` VARCHAR(45) NULL DEFAULT NULL,
  `email` VARCHAR(45) NOT NULL,
  `tel_loc` INT(11) NULL DEFAULT NULL,
  `tel_num` VARCHAR(45) NULL DEFAULT NULL,
  `mobile_loc` INT(11) NOT NULL,
  `mobile_num` VARCHAR(45) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`users_info_id`),
  INDEX `users_info_fk_idx` (`user_id` ASC),
  CONSTRAINT `users_info_fk`
    FOREIGN KEY (`user_id`)
    REFERENCES `access`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `access`.`modules`
-- -----------------------------------------------------
START TRANSACTION;
USE `access`;
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (1, 'Company Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (2, 'Account Balance Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (3, 'Purchasing Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (4, 'Supplier Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (5, 'Warehouse Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (6, 'Inventory Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (7, 'Contracts Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (8, 'Disbursement Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (9, 'Equipments Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (10, 'Assets Management Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (11, 'Liabilities Management Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (12, 'Equity Management Module');
INSERT INTO `access`.`modules` (`mod_id`, `mod_name`) VALUES (13, 'Reports Module');

COMMIT;


-- -----------------------------------------------------
-- Data for table `access`.`roles`
-- -----------------------------------------------------
START TRANSACTION;
USE `access`;
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (1, 'Administrator');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (2, 'Purchasing Manager');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (3, 'Accounting Manager');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (4, 'Warehouse Manager');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (5, 'Contracts Manager');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (6, 'Reports Manager');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (7, 'Custom User');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (8, 'Purchasing Staff');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (9, 'Payable Staff');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (10, 'Receiving Staff');
INSERT INTO `access`.`roles` (`role_id`, `role_name`) VALUES (11, 'Contracts Staff');

COMMIT;


-- -----------------------------------------------------
-- Data for table `access`.`accounting_status`
-- -----------------------------------------------------
START TRANSACTION;
USE `access`;
INSERT INTO `access`.`accounting_status` (`acc_stat_id`, `acc_stat_name`) VALUES (1, 'Pending');
INSERT INTO `access`.`accounting_status` (`acc_stat_id`, `acc_stat_name`) VALUES (2, 'Approved');
INSERT INTO `access`.`accounting_status` (`acc_stat_id`, `acc_stat_name`) VALUES (3, 'Denied');
INSERT INTO `access`.`accounting_status` (`acc_stat_id`, `acc_stat_name`) VALUES (4, 'Received');

COMMIT;


-- -----------------------------------------------------
-- Data for table `access`.`purchase_order_types`
-- -----------------------------------------------------
START TRANSACTION;
USE `access`;
INSERT INTO `access`.`purchase_order_types` (`po_type_id`, `po_type_name`) VALUES (1, 'Inventory');
INSERT INTO `access`.`purchase_order_types` (`po_type_id`, `po_type_name`) VALUES (2, 'Non-Inventory');
INSERT INTO `access`.`purchase_order_types` (`po_type_id`, `po_type_name`) VALUES (3, 'Contracts');

COMMIT;

