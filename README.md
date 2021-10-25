# Polling Station API

Polling Station API is an API built using Laravel PHP. The application's data is based on pollings stations as of 2016. The data can be found here [Polling Station Layout for 2016 General Elections](https://www.ec.or.ug/pub/Layout%20of%20the%20Polling%20Station%20for%202016%20General%20Elections.pdf).

The API is built using LAravel PHP 8.0 with a MySQL database.


## API Endpoints

1. `api/districts ` - This route returns all the districts. Each district is return with associated constituencies as a PHP collection.
Sample response data
```
[
    {
        district_code: "01",
        district_name: "Apac",
        constituencies: [
                {
                id: 1,
                constituency_code: "02",
                constituency_name: "KWANIA COUNTY",
                fk_district_code: "01",
                created_at: "2021-10-21T16:28:22.000000Z",
                updated_at: "2021-10-21T16:28:22.000000Z"
                }
            ]
    }
]
```

2. `api/districts/{district_code} ` - Returns a single district with associated constituencies as a PHP collection. Sample response data

``` 
[
    {
        id: 1,
        district_code: "01",
        district_name: "Apac",
        created_at: "2021-10-21T16:28:22.000000Z",
        updated_at: "2021-10-21T16:28:22.000000Z",
        constituencies: [
                {
                id: 1,
                constituency_code: "02",
                constituency_name: "KWANIA COUNTY",
                fk_district_code: "01",
                created_at: "2021-10-21T16:28:22.000000Z",
                updated_at: "2021-10-21T16:28:22.000000Z"
                }
            ]
    }
]
```

3. `api/constituencies` - Returns all the constituencies and related sub counties.
    Sample data
```
[
    {
        id: 1,
        constituency_code: "02",
        constituency_name: "KWANIA COUNTY",
        fk_district_code: "01",
        created_at: "2021-10-21T16:28:22.000000Z",
        updated_at: "2021-10-21T16:28:22.000000Z",
        sub_counties: [
                {
                id: 1,
                sub_county_code: "01",
                sub_county_name: "ADUKU",
                fk_constituency_code: "02",
                created_at: "2021-10-21T16:28:22.000000Z",
                updated_at: "2021-10-21T16:28:22.000000Z"
                },
                {
                id: 2,
                sub_county_code: "02",
                sub_county_name: "CAWENTE",
                fk_constituency_code: "02",
                created_at: "2021-10-21T16:28:22.000000Z",
                updated_at: "2021-10-21T16:28:22.000000Z"
                }
            ]
    }
]
```

## Contributing

Guide on how to contribute to the project will be added soon


## License & Disclaimer

The API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
