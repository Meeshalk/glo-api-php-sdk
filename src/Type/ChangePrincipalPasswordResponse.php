<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class ChangePrincipalPasswordResponse implements ResultInterface
    {

        private ?ERSWSResponse $return;

        public function getReturn(): ?ERSWSResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

