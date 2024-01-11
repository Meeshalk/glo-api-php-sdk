<?php

namespace Meeshalk\GloERSWebServiceSdk\Type;

class Accounts
{
    private array $account;

    public function getAccount() : array
    {
        return $this->account;
    }

    public function withAccount(array $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }
}

