[![Codacy Badge](https://api.codacy.com/project/badge/Grade/0189f653f7a04697b92a299df08a5608)](https://www.codacy.com?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=naspersclassifieds-regional/verticals-bonecrusher-hexon&amp;utm_campaign=Badge_Grade)

Hexon SDK
=========
- Exposes all needed features to publish an ad on Hexon integrator.

### Configuration File

Register a new provider in config.php

```
'providers' => [
    Bonecrusher\Hexon\HexonServiceProvider::class,
],
```

and after run artisan command

```
php artisan hexon:publish
```

Check into folder /config the file hexon.php and change whatever config var.
You can also use your .env file to set configs.

### How to use Hexon SDK - Get requests

- Example 1: Get all accounts
```
Hexon::accounts()->get();
```

- Example 2: Get just one account
```
Hexon::accounts('marktplaats:123456')->get();
```

- Example 3: Get just one account with its related sites
```
Hexon::accounts('marktplaats:123456')->site()->get();
```

- Example 4: Get the make '11' with the related makewarrantylabels '535'
```
Hexon::makes(11)->makewarrantylabels(535)->get();
```

- Example 5: Get account resource definition (you can make it for any resource)
```
Hexon::accounts()->definition();
```

- Example 6: Get just one account and select only 'site_code' and 'client_id' fields
```
Hexon::accounts('marktplaats:123456')->select(['site_code', 'client_id'])->get()
```

### How to use Hexon SDK - Post / Put / Delete requests

- Post: Create new contact person
```
// $payload array => request
Hexon::contactpersons()->create($payload);
```

- Put: Update contact person
```
// $id int => the contact person id to update
// $payload array => request
Hexon::contactpersons($id)->update($payload);
```

- Delete: Delete contact person
```
// $id int => the contact person id to delete
Hexon::contactpersons($id)->delete();
```
