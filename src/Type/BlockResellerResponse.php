<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class BlockResellerResponse implements ResultInterface
    {

        private ?ERSWSBlockResellerResponse $return;

        public function getReturn(): ?ERSWSBlockResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSBlockResellerResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

