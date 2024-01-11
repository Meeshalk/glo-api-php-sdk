<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class DeActivateResellerResponse implements ResultInterface
    {

        private ?ERSWSDeActivateResellerResponse $return;

        public function getReturn(): ?ERSWSDeActivateResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSDeActivateResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

