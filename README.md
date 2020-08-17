# Build project
```
docker-compose -f local.yml up -d --build
```

**แพคเกจของ php**
* ใช้ php version 7.2
* extention ที่ใช้ต่อ database เป็น PDO ดูได้จากไฟล์ config_database.php เป็นตัว confit database
* create_table_test.php ตัวอย่างสร้าง table test


**Database**
ใช้ mysql
```
database_name=test_db
username=gZ83HQhJioNvJcV
password=Mnp39cFy4X9RKNkNgPJCDF93A
password_root=69UgkZJsvooCUQfPTeDJx9EkiMnp39cFy4X9RKNkNgPJCDF93A
```

**Check url**
* http://ip_docker:8080/ url ของเว็ปไซด์
* http://ip_docker:5678/ url ของ phpmyadmin เอาไว้จัดการดาต้าเบส


# Check error
```
docker-compose -f local.yml logs phpfpm
```