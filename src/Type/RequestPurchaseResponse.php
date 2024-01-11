<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class RequestPurchaseResponse implements ResultInterface
    {

        private ?ERSWSPurchaseResponse $return;

        public function getReturn(): ?ERSWSPurchaseResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSPurchaseResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

