# BOXBILLING RUNNING ON DOCKER 

### Author: RAHMAD SETIADI

## Prerequisites

- Docker 
- Docker-Compose


## How to run

```   
    1. First, Clone this repository into your local forder.
    
    2. Open shell terminal (windows: cmd)
    
    3. Type: docker-compose up -d
    
        Environtment Setup and Database Seeding may take a while. 
        In the meantime, you might see 'mysql error: connection refused'. 
        Please wait a couple minutes until the process is completed.
        
    4. View in Browser.

        BoxBilling Admin Page => http://localhost/bb-admin/staff/login
        BoxBilling Client Page => http://localhost/
        FrontEnd Homepage => http://localhost/public/index.php
            
        Login to BoxBilling Admin:
        - user: admin@boxbilling.com 
        - pass: 123456

```

## Database Credential

```   
    MYSQL DB
    DB_HOST = mysql
    DB_NAME = boxbilling
    DB_USER = boxbilling
    DB_PASS = boxbilling   
```
