<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class CommitTopupResponse extends ERSWSResponse implements ResultInterface
    {

        private ERSCommitTopupResponse $return;

        public function getReturn(): ERSCommitTopupResponse
        {
            return $this->return;
        }

        public function withReturn(ERSCommitTopupResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

