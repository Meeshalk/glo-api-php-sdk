<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class UnBlockResellerResponse implements ResultInterface
    {

        private ?ERSWSUnBlockResellerResponse $return;

        public function getReturn(): ?ERSWSUnBlockResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSUnBlockResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

