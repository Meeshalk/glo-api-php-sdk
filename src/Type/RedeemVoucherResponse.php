<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class RedeemVoucherResponse implements ResultInterface
    {

        private ?ERSWSTopupResponse $return;

        public function getReturn(): ?ERSWSTopupResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSTopupResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

