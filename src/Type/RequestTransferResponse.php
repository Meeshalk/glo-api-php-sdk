<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class RequestTransferResponse implements ResultInterface
    {

        private ?ERSWSTransferResponse $return;

        public function getReturn(): ?ERSWSTransferResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSTransferResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

