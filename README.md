# Polling Station API

Polling Station API is an API built using Laravel PHP. The application's data is based on pollings stations as of 2016. The data can be found here [Polling Station Layout for 2016 General Elections](https://www.ec.or.ug/pub/Layout%20of%20the%20Polling%20Station%20for%202016%20General%20Elections.pdf).


## API Endpoints

1. ```api/districts ``` 
2. ```api/districts/{district_code} ```
3. ```api/districts/{district_code}/constituencies ```
4. ```api/districts/{district_code}/constituencies/{constituency_code} ```
5. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties ```
6. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties/{sub_county_code} ```
7. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties/{sub_county_code}/parishes ```
8. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties/parishes/{parish_code} ```
9. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties/parishes/{parish_code}/polling_stations ```
10. ```api/districts/{district_code}/constituencies/{constituency_code}/sub_counties/parishes/{parish_code}/polling_stations/{polling_station_code} ```

## Contributing

Guide on how to contribute to the project will be added soon


## License & Disclaimer

The API is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
