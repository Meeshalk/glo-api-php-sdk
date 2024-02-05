<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class UpdateResellerResponse implements ResultInterface
    {

        private ?ERSWSUpdateResellerResponse $return;

        public function getReturn(): ?ERSWSUpdateResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSUpdateResellerResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

