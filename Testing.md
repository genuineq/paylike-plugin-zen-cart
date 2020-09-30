#Testing

As you can see the plugin is bundled with selenium testing on this repository. You can use the tests, if you have some experience with testing it could be helpful. 
*DO NOT USE IN PRODUCTION, THE TESTS MODIFY SETTINGS AND CREATE ORDERS*

## Requirements

* A ZenCart installation is required on ZenCart
* You also need to have a test client account with previous purchases and an admin account for which you set the credentials in the .env file
* Lastly you need to have the currency selector available on the frontend with all the currencies that are tested enabled
* Make sure that the product at /index.php?main_page=product_info&cPath=1_5&products_id=27 has enough stock and is a simple product

## Getting started

1. Follow 1 and 2 from the [Steward readme page](https://github.com/lmc-eu/steward#getting-started)
2. Create an env file in the root folder and add the following:
`
ENVIRONMENT_URL="https://zencart.url"
ENVIRONMENT_USER="username"
ENVIRONMENT_PASS="yourpassword"
ENVIRONMENT_CLIENT_USER="client_email"
ENVIRONMENT_CLIENT_PASS="client_pass"
ADMIN_PREFIX="admin251j3cm2b"
`

3. Start the testing server. See
[Steward readme page](https://github.com/lmc-eu/steward#4-run-your-tests)
4. Run  ./vendor/bin/steward run staging chrome --group="zencart_test" -vv for the short test
5. Run  ./vendor/bin/steward run staging chrome -vv to go through all the available tests.

## Problems

Since this is a frontend test, its not always consistent, due to delays or some glitches regarding overlapping elements. If you can't get over an issue please open an issue and I'll take a look. 