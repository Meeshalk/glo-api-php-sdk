<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    class ERSWSExecuteReportResponse extends ERSWSResponse
    {

        private Report $report;

        public function getReport(): ?Report
        {
            return $this->report;
        }

        public function withReport(Report $report): static
        {
            $new         = clone $this;
            $new->report = $report;

            return $new;
        }

    }

