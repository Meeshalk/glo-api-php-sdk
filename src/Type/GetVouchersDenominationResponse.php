<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class GetVouchersDenominationResponse implements ResultInterface
    {

        private ?ERSWSGetVouchersDenominationResponse $return;

        public function getReturn(): ?ERSWSGetVouchersDenominationResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSGetVouchersDenominationResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

