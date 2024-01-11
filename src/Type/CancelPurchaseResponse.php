<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class CancelPurchaseResponse implements ResultInterface
    {

        private ?ERSWSCancelPurchaseResponse $return;

        public function getReturn(): ?ERSWSCancelPurchaseResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSCancelPurchaseResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

