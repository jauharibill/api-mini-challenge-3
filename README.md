# API Mini Challenge 3

## Documentation

Main Url : `http://mc3.tokoandalan.com`

Response json format example : 

`{
    "success": true,
    "message": "Success Login",
    "response": 200,
    "data": []
}`

the `data` key is result data from destination url example :

if you request for list of waste collector, it would contain json data for all record of waste collector in database.

| Request | param | method | response data |
|---|---|---|---|
|`{main url}/login` | email, password | post | `{ "token" : "hash token xxxxx.xxxxx.xxxxx" }` |
|`{main url}/register` | name, email, password, phone, role_id | post | `{ "token" : "hash token xxxxx.xxxxx.xxxxx" }` | 
|`{main url}/household/list` | token | get | `[{ "name": "bill tanthowi jauhari", "address":"malang", "phone":"082xxxxx", "lat":"-7000.3", "long":"+733.4", "duration_time":"30", "photo":"xxx.jpg" }]` |
|`{main url}/household/list/{id}`| token, id | get | `{ "name": "bill tanthowi jauhari", "address":"malang", "phone":"082xxxxx", "lat":"-7000.3", "long":"+733.4", "duration_time":"30","photo":"xxx.jpg" }`|
|`{main url}/household/save`| token, address, lat, long, photo | post | `[]`|
|`{main url}/wastecollector/list` | token | get | `[{ "name": "bill tanthowi jauhari", "address":"malang", "phone":"082xxxxx", "lat":"-7000.3", "long":"+733.4", "photo":"xxx.jpg", "colelection_day": "['senin', 'jumat']", "collection_time":"10:00", "price_tag":50000, "available":1 }]` |
|`{main url}/wastecollector/list/{id}`| token, id | get | `{ "name": "bill tanthowi jauhari", "address":"malang", "phone":"082xxxxx", "lat":"-7000.3", "long":"+733.4", "photo":"xxx.jpg", "collection_day": "['senin', 'jumat']", "collection_time":"10:00", "price_tag":50000, "available":1 }`|
|`{main url}/wastecollector/save`| token, address, lat, long, photo, collection_time, collection_day, price_tag, available | post | `[]`|


to access all url except login and register, you need to pass token in url with query string `token` eg : `mc3.tokoandalan.com/household/list?token=xxx.xxx.xxx`

