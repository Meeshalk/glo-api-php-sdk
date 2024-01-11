<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class FreezeResellerResponse implements ResultInterface
    {

        private ?ERSWSFreezeResellerResponse $return;

        public function getReturn(): ?ERSWSFreezeResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSFreezeResellerResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

