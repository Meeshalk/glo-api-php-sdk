<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class GetTransactionStatusResponse implements ResultInterface
    {

        private ?ERSWSGetTransactionStatusResponse $return;

        public function getReturn(): ?ERSWSGetTransactionStatusResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSGetTransactionStatusResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

