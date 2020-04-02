<?php


namespace App\Services\Filters;

/**
 * Class CieloFilter
 * @package App\Services\Filters
 */
class CieloFilter
{
    /**
     * @param array $data
     * @return array|string
     */
    public function dataFilterJson(array $data){

        $format = [
                 [
                     "MerchantOrderId"=>"2222222222",
                     "Customer"=>[
                                     "Name"=>"Comprador Teste",
                          "Identity"=>"11225468954",
                          "IdentityType"=>"CPF",
                          "Email"=>"compradorteste@teste.com",
                          "Birthdate"=>"1991-01-02",
                          "Address"=>[
                                         "Street"=>"Rua Teste",
                             "Number"=>"123",
                             "Complement"=>"AP 123",
                             "ZipCode"=>"12345987",
                             "City"=>"Rio de Janeiro",
                             "State"=>"RJ",
                             "Country"=>"BRA"
                          ],
                          "DeliveryAddress"=>[
                                         "Street"=>"Rua Teste",
                             "Number"=>"123",
                             "Complement"=>"AP 123",
                             "ZipCode"=>"12345987",
                             "City"=>"Rio de Janeiro",
                             "State"=>"RJ",
                             "Country"=>"BRA"
                          ]
                       ],
                     "Payment"=>[
                                     "Type"=>"CreditCard",
                          "Amount"=>157000,
                          "Currency"=>"BRL",
                          "Country"=>"BRA",
                          "Provider"=>"Cielo",
                          "ServiceTaxAmount"=>0,
                          "Installments"=>1,
                          "Interest"=>"ByMerchant",
                          "Capture"=>false,
                          "Authenticate"=>false,
                          "Recurrent"=>false,
                          "SoftDescriptor"=>"123456789ABCD",
                          "CreditCard"=>[
                                         "CardNumber"=>"4024007197692931",
                             "Holder"=>"Teste Holder",
                             "ExpirationDate"=>"12/2021",
                             "SecurityCode"=>"123",
                             "SaveCard"=>"false",
                             "Brand"=>"Visa"
                          ],
                          "PaymentFacilitator"=>[
                                         "EstablishmentCode"=>"1234",
                             "SubEstablishment"=>[
                                             "EstablishmentCode"=>"1234",
                                "Mcc"=>"1234",
                                "Address"=>"Alameda Grajau, 512",
                                "City"=>"Barueri",
                                "State"=>"SP",
                                "PostalCode"=>"06455914",
                                "PhoneNumber"=>"1155855585"
                             ]
                          ]
                       ]
        ]

        ];

        return $format;
    }


}
