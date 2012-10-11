NAME:
=====
Numinix Product Fields

CURRENT VERSION:
================
V1.1.0

AUTHOR:
=======
NUMINIX TECHNOLOGY WEBMASTER@NUMINIX.COM HTTP://WWW.NUMINIX.COM $

DESCRIPTION:
============
Adds additional product fields used by Numinix modules.

MODIFIED FILES:
===============
admin/includes/modules/update_product.php
admin/includes/modules/product/collect_info.php
admin/includes/modules/product/preview_info.php


NEW FILES:
==========
admin/includes/languages/english/extra_definitions/npf_defines.php
admin/includes/languages/english/npf_definitions/*.*
admin/includes/npf_includes/*.*
module_version/*.*


WARNING:
========
- CONTAINS CORE MODIFICATIONS;  
- BACK UP YOUR DATABASE AND THE CORE FILES TO BE OVERWRITTEN/MODIFIED;
- IT IS RECOMMENDED THAT YOU RENAME THE FILES ON YOUR SERVER TO FILENAME.PHP.BAK BEFORE UPLOADING THE FILES IN THIS MOD;
- ALL MODIFICATIONS ARE CLEARLY MARKED WITH STATEMENTS;
- TO AVOID OVERWRITING ANY OTHER MODIFICATIONS BY OTHER SCRIPTS, COMPARE THE FILES WITH WINMERGE;
- ALSO CONTAINS UPC/ISBN ATTRIBUTES;
- OVERWRITES EPIER MODIFICATIONS (EXCEPT admin/includes/languages/english/product.php -> delete 'epier modification');

INSTALL:
========
0. INSTALL NUMINIX PRODUCT FIELDS WITH OPTIONAL FIELDS: DIMENSIONS AND UPC/ISBN
1. BACK UP!
2. PATCH DATABASE BY COPYING AND PASTING CONTENTS OF INSTALL.SQL INTO ADMIN->TOOLS->INSTALL SQL PATCHES;
3. UPLOAD/OVERWRITE CORE FILES;
4. INSTALL OPTIONAL FIELDS FROM /optional_fields/

UNINSTALL:
==========
1. RUN UNINSTALL.SQL FILE;
2. RESTORE CORE FILES WITH ZC DEFAULTS;
3. DELETE THE OPTIONAL FIELD FILES IN /admin/includes/npf_includes/

USAGE:
======
ADMIN->CATALOG->CATEGORIES/PRODUCTS->PRODUCT