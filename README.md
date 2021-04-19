# Laravel Easy Chat side project


1. 執行
```
composer install
```

2. 修改.env檔
```
#修改DB連線
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xxxx
DB_USERNAME=xxxx
DB_PASSWORD=xxxx

#修改為pusher
BROADCAST_DRIVER=pusher

#修改為pusher.com的App Key參數
PUSHER_APP_ID=xxxxxxx
PUSHER_APP_KEY=xxxxxxxxxxxxxxxxx
PUSHER_APP_SECRET=xxxxxxxxxxxxxxxxx
PUSHER_APP_CLUSTER=xxx

MIX_PUSHER_APP_KEY="xxxxxx"
MIX_PUSHER_APP_CLUSTER="xxx"
```

3. 執行
```
php artisan key:generate
php artisan migrate
```

4. 執行
```
npm install
npm run dev
```



 