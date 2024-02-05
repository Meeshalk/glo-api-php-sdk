<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class CancelTopupResponse extends ERSWSResponse implements ResultInterface
    {

        private ERSCancelTopupResponse $return;

        public function getReturn(): ERSCancelTopupResponse
        {
            return $this->return;
        }

        public function withReturn(ERSCancelTopupResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

