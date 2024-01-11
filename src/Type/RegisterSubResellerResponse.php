<?php

namespace Meeshalk\GloERSWebServiceSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RegisterSubResellerResponse implements ResultInterface
{

    private ?ERSWSRegisterSubResellerResponse $return;

    public function getReturn() : ?ERSWSRegisterSubResellerResponse
    {
        return $this->return;
    }

    public function withReturn(?ERSWSRegisterSubResellerResponse $return) : static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

