<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class LinkSubResellerResponse implements ResultInterface
    {

        private ?ERSWSLinkSubResellerResponse $return;

        public function getReturn(): ?ERSWSLinkSubResellerResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSLinkSubResellerResponse $return
        ): static {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

