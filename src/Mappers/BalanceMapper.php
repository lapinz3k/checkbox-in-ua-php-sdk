<?php

namespace Checkbox\Mappers;

use Checkbox\Models\Balance;

class BalanceMapper
{
    public function jsonToObject($json): Balance
    {
        $balance = new Balance(
            $json['initial'],
            $json['balance'],
            $json['cash_sales'],
            $json['card_sales'],
            $json['cash_returns'],
            $json['card_returns'],
            $json['service_in'],
            $json['service_out'],
            $json['updated_at']
        );

        return $balance;
    }

    public function objectToJson(Balance $obj)
    {
        pre('objectToJson', $obj);
    }
}