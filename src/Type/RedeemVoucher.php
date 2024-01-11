<?php

    namespace Meeshalk\GloERSWebServiceSdk\Type;

    use Phpro\SoapClient\Type\RequestInterface;

    class RedeemVoucher implements RequestInterface
    {

        private ?MapArray $transactionProperties;


        private string $voucherSerial;


        private string $voucherVerificationCode;


        private PrincipalId $topupPrincipalId;


        private string $sendSmsNotification;

        public function __construct(
            ?MapArray $transactionProperties, string $voucherSerial,
            string $voucherVerificationCode, PrincipalId $topupPrincipalId,
            string $sendSmsNotification
        ) {
            $this->transactionProperties   = $transactionProperties;
            $this->voucherSerial           = $voucherSerial;
            $this->voucherVerificationCode = $voucherVerificationCode;
            $this->topupPrincipalId        = $topupPrincipalId;
            $this->sendSmsNotification     = $sendSmsNotification;
        }

        public function getTransactionProperties(): ?MapArray
        {
            return $this->transactionProperties;
        }

        public function withTransactionProperties(
            MapArray $transactionProperties
        ): static {
            $new                        = clone $this;
            $new->transactionProperties = $transactionProperties;

            return $new;
        }

        public function getVoucherSerial(): string
        {
            return $this->voucherSerial;
        }

        public function withVoucherSerial(string $voucherSerial): static
        {
            $new                = clone $this;
            $new->voucherSerial = $voucherSerial;

            return $new;
        }

        public function getVoucherVerificationCode(): string
        {
            return $this->voucherVerificationCode;
        }

        public function withVoucherVerificationCode(
            string $voucherVerificationCode
        ): static {
            $new                          = clone $this;
            $new->voucherVerificationCode = $voucherVerificationCode;

            return $new;
        }

        public function getTopupPrincipalId(): PrincipalId
        {
            return $this->topupPrincipalId;
        }

        public function withTopupPrincipalId(PrincipalId $topupPrincipalId
        ): static {
            $new                   = clone $this;
            $new->topupPrincipalId = $topupPrincipalId;

            return $new;
        }

        public function getSendSmsNotification(): string
        {
            return $this->sendSmsNotification;
        }

        public function withSendSmsNotification(string $sendSmsNotification
        ): static {
            $new                      = clone $this;
            $new->sendSmsNotification = $sendSmsNotification;

            return $new;
        }

    }

