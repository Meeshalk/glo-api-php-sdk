<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\ResultInterface;

    class ExecuteReportResponse implements ResultInterface
    {

        private ?ERSWSExecuteReportResponse $return;

        public function getReturn(): ?ERSWSExecuteReportResponse
        {
            return $this->return;
        }

        public function withReturn(?ERSWSExecuteReportResponse $return): static
        {
            $new         = clone $this;
            $new->return = $return;

            return $new;
        }

    }

