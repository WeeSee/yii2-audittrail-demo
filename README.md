# Demo for Sammaye/yii2-audittrail

## Installation

### Step 1: Config Database

```cp config/db-dist.php config/db.php``` and vi config/db.php
* 
### Step 2: Initialize Database

First make a MySQL database ```yii2test`´`.

Then create the table for the model ```app\models\Person```.

    CREATE TABLE IF NOT EXISTS `audit_trail` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `old_value` text,
      `new_value` text,
      `action` varchar(255) NOT NULL,
      `model` varchar(255) NOT NULL,
      `field` varchar(255) DEFAULT NULL,
      `stamp` datetime NOT NULL,
      `user_id` varchar(255) DEFAULT NULL,
      `model_id` varchar(255) NOT NULL,
      PRIMARY KEY (`id`),
      KEY `idx_audit_trail_user_id` (`user_id`),
      KEY `idx_audit_trail_model_id` (`model_id`),
      KEY `idx_audit_trail_model` (`model`),
      KEY `idx_audit_trail_field` (`field`),
      KEY `idx_audit_trail_action` (`action`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

Please note that the idx_* fiels are created when installing the yii2-audittrail extension.

### Step 3: Start application

http://.../yii2test/index.php

Login with demo/demo

Navigate to "Personen".

Create some persons. Make some changes.

Now you can view the audit trail by clicking on the briefcase button in the row where you made the changes.

## References

Thanks for the superb work:

* https://github.com/Sammaye/yii2-audittrail
* Yii2 



