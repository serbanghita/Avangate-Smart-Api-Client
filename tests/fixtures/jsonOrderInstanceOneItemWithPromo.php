<?php
$order = '{
  "CartId": 1422113175,
  "Currency": "USD",
  "Language": "",
  "Country": "US",
  "CustomerIP": "192.168.0.1",
  "LocalTime": "2015-01-24 09:00:00",
  "Source": "ghita.org",
  "AffiliateSource": null,
  "Items": [
    {
      "AvangateId": 4586155,
      "Code": "6000",
      "Quantity": "1",
      "PriceOptions": [],
      "Price": {
        "NetPrice": 219,
        "GrossPrice": 219,
        "VAT": 0,
        "Discount": 65.7,
        "UnitPrice": null,
        "UnitVAT": 0,
        "UnitNetPrice": 219,
        "UnitGrossPrice": 219,
        "UnitAffiliateCommission": 0,
        "UnitDiscount": 65.7,
        "UnitNetDiscountedPrice": 153.3,
        "UnitGrossDiscountedPrice": 153.3,
        "NetDiscountedPrice": 153.3,
        "GrossDiscountedPrice": 153.3
      },
      "CrossSell": null,
      "Trial": {
        "Period": 30,
        "Price": 50,
        "VAT": 0,
        "GrossPrice": 50,
        "NetPrice": 50
      },
      "AdditionalFields": null,
      "Promotion": 12345,
      "AdditionalInfo": null
    }
  ],
  "Promotions": [
    12345
  ],
  "ExternalReference": "123456",
  "CustomerReference": "SERBANTHEBAWS",
  "BillingDetails": {
    "FiscalCode": "",
    "Company": "",
    "FirstName": "Serban",
    "LastName": "Test",
    "Address": "str. Londra nr. 7",
    "City": "Bucuresti",
    "PostalCode": "011761",
    "Country": "US",
    "State": "RI",
    "Email": "sg@avangate.com"
  },
  "DeliveryDetails": null,
  "PaymentDetails": {
    "Currency": "USD",
    "Type": "CC",
    "CustomerIP": "192.0.0.3",
    "PaymentMethod": null
  },
  "Origin": null,
  "Shipping": 0,
  "ShippingVAT": null,
  "NetPrice": 50,
  "GrossPrice": 50,
  "VAT": 0,
  "AffiliateCommission": null,
  "AvangateCommission": null,
  "Discount": 0,
  "NetDiscountedPrice": 50,
  "GrossDiscountedPrice": 50,
  "RecurringEnabled": null,
  "RefNo": null,
  "OrderNo": null,
  "ShopperRefNo": null,
  "Status": null,
  "ApproveStatus": null,
  "OrderDate": null,
  "FinishDate": null,
  "HasShipping": null,
  "CustomerDetails": null,
  "Errors": false,
  "FinalPrice": null
}';
return json_decode($order);