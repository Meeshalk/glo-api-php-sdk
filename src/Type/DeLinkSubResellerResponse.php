<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class DeLinkSubResellerResponse implements ResultInterface
    {

        private ?ERSWSDeLinkSubResellerResponse $return;

        public function getReturn(): ?ERSWSDeLinkSubResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSDeLinkSubResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

