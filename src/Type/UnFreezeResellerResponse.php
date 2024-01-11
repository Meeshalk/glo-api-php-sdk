<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class UnFreezeResellerResponse implements ResultInterface
    {

        private ?ERSWSUnFreezeResellerResponse $return;

        public function getReturn(): ?ERSWSUnFreezeResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSUnFreezeResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

