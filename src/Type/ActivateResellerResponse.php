<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class ActivateResellerResponse implements ResultInterface
    {

        private ?ERSWSActivateResellerResponse $return;

        public function getReturn(): ?ERSWSActivateResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSActivateResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

