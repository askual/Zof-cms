# Services
    zoffsites 
    gcsuite
    yecampus



# services
    isGSuiteMember




## gcsuite
    telegram_bot
        /start 
        /admin
            ? enterpassword
                client.askual.com/gcsuite/adminauth?password=$pwd
                {'status': 'success', 'name':'Bekele Asegahegn','role': 'Super Admin','university': 'Jimma university' }
                {'status': 'failure'}
            ? request_admin: university, department, section
                client.askual.com/gcsuite/request_admin: POST
            SUPER_ADMIN 
            ? approve_representative blahblah: admin
                client.askual.com/gcsuite/request_admin_list
                client.askual.com/gcsuite/approve_representative?id=123
            ? download
                client.askual.com/gcsuite/download?university=ASTU
            ? report
                client.askual.com/gcsuite/report?university=ASTU
            ADMIN 
            ? list lastwords: unapprove
                client.askual.com/gcsuite/last_words : POST department,section,university
                client.askual.com/gcsuite/unapprove_last_word?id=12


    gsuite_admins       name, role, university
    gsuite_lastwords    

    client.askual.com/gcsuite/tguser?id=$id : GET
        {'name': 'Abebe Kebede','role':'admin'}
    client.askual.com/gcsuite/tglastword : POST
        name, sex, lastword, phonenumber, university, department, id_number , section,
        tg_name. tg_username, date
        {'messge': 'xyz'}
    
    







## zoffsites


## 