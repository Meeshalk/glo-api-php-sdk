<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class RequestPrincipalInformationResponse implements ResultInterface
    {

        private ?ERSWSPrincipalInformationResponse $return;

        public function getReturn(): ?ERSWSPrincipalInformationResponse
        {
            return $this->return;
        }

        public function withReturn(
            ?ERSWSPrincipalInformationResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

