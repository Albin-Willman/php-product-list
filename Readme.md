## Product listning

run with:

```
cd public
php -S localhost:8000
```

The navigate to `localhost:8000` for list of products or `localhost:8000/unittests.php` to run test.

### Possible improvments

These are some of the next steps I would take in order to improve this application if I had the time.

#### XML parsing

Parseing the XML in runtime is less than optimal. It would be better if this was done via some background job that populated a database.

Right now I skip invalid products (if any) and just ignore them an improvment that could be done is to add a logging function that records faulty products.

#### Validation

The validation of products and categories is at this point very rudimentary.

#### UI

Much could be done to improve the interface which is very basic.
