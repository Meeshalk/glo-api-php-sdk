<?php

    namespace Meeshalk\GloERSWebServiceSdk;

    use Meeshalk\GloERSWebServiceSdk\Type\ActivateReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\ActivateResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\BlockReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\BlockResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\CancelPurchase;
    use Meeshalk\GloERSWebServiceSdk\Type\CancelPurchaseResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\CancelTopupResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\ChangePrincipalPassword;
    use Meeshalk\GloERSWebServiceSdk\Type\ChangePrincipalPasswordResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\CommitTopup;
    use Meeshalk\GloERSWebServiceSdk\Type\CommitTopupResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\CustomOperation;
    use Meeshalk\GloERSWebServiceSdk\Type\CustomOperationResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\DeActivateReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\DeActivateResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\DeLinkSubReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\DeLinkSubResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\ExecuteReport;
    use Meeshalk\GloERSWebServiceSdk\Type\ExecuteReportResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\FreezeReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\FreezeResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\GetTransactionStatus;
    use Meeshalk\GloERSWebServiceSdk\Type\GetTransactionStatusResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\GetVouchersDenomination;
    use Meeshalk\GloERSWebServiceSdk\Type\GetVouchersDenominationResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\LinkSubReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\LinkSubResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RedeemVoucher;
    use Meeshalk\GloERSWebServiceSdk\Type\RedeemVoucherResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RegisterSubReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\RegisterSubResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestCancelTopup;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPrincipalInformation;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPrincipalInformationResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPurchase;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestPurchaseResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTopup;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTopupResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTransfer;
    use Meeshalk\GloERSWebServiceSdk\Type\RequestTransferResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\UnBlockReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\UnBlockResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\UnFreezeReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\UnFreezeResellerResponse;
    use Meeshalk\GloERSWebServiceSdk\Type\UpdateReseller;
    use Meeshalk\GloERSWebServiceSdk\Type\UpdateResellerResponse;
    use Phpro\SoapClient\Caller\Caller;
    use Phpro\SoapClient\Exception\SoapException;
    use Phpro\SoapClient\Type\ResultInterface;

    use function Psl\Type\instance_of;

    class GloERSClient
    {

        private Caller $caller;

        public function __construct(Caller $caller)
        {
            $this->caller = $caller;
        }

        /**
         * @throws SoapException
         */
        public function customOperation(
            CustomOperation $parameters
        ): ResultInterface|CustomOperationResponse {
            $response = ($this->caller)('customOperation', $parameters);

            instance_of(CustomOperationResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function registerSubReseller(
            RegisterSubReseller $parameters
        ): RegisterSubResellerResponse|ResultInterface {
            $response = ($this->caller)('registerSubReseller', $parameters);

            instance_of(RegisterSubResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function deLinkSubReseller(
            DeLinkSubReseller $parameters
        ): DeLinkSubResellerResponse|ResultInterface {
            $response = ($this->caller)('deLinkSubReseller', $parameters);

            instance_of(ResultInterface::class)->assert($response);
            instance_of(DeLinkSubResellerResponse::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function commitTopup(
            CommitTopup $parameters
        ): CommitTopupResponse|ResultInterface {
            $response = ($this->caller)('commitTopup', $parameters);

            instance_of(CommitTopupResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function getTransactionStatus(
            GetTransactionStatus $parameters
        ): GetTransactionStatusResponse|ResultInterface {
            $response = ($this->caller)('getTransactionStatus', $parameters);

            instance_of(GetTransactionStatusResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function requestPrincipalInformation(
            RequestPrincipalInformation $parameters
        ): RequestPrincipalInformationResponse|ResultInterface {
            $response = ($this->caller)('requestPrincipalInformation',
                $parameters);
            instance_of(RequestPrincipalInformationResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function requestTopup(RequestTopup $parameters
        ): RequestTopupResponse|ResultInterface {
            $response = ($this->caller)('requestTopup', $parameters);

            instance_of(RequestTopupResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function requestTransfer(
            RequestTransfer $parameters
        ): RequestTransferResponse|ResultInterface {
            $response = ($this->caller)('requestTransfer', $parameters);

            instance_of(RequestTransferResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function cancelPurchase(
            CancelPurchase $parameters
        ): CancelPurchaseResponse|ResultInterface {
            $response = ($this->caller)('cancelPurchase', $parameters);

            instance_of(CancelPurchaseResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function unFreezeReseller(
            UnFreezeReseller $parameters
        ): UnFreezeResellerResponse|ResultInterface {
            $response = ($this->caller)('unFreezeReseller', $parameters);

            instance_of(UnFreezeResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function freezeReseller(
            FreezeReseller $parameters
        ): FreezeResellerResponse|ResultInterface {
            $response = ($this->caller)('freezeReseller', $parameters);

            instance_of(FreezeResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function linkSubReseller(
            LinkSubReseller $parameters
        ): LinkSubResellerResponse|ResultInterface {
            $response = ($this->caller)('linkSubReseller', $parameters);

            instance_of(LinkSubResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function unBlockReseller(
            UnBlockReseller $parameters
        ): UnBlockResellerResponse|ResultInterface {
            $response = ($this->caller)('unBlockReseller', $parameters);

            instance_of(UnBlockResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function getVouchersDenomination(
            GetVouchersDenomination $parameters
        ): GetVouchersDenominationResponse|ResultInterface {
            $response = ($this->caller)('getVouchersDenomination', $parameters);

            instance_of(GetVouchersDenominationResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function requestPurchase(
            RequestPurchase $parameters
        ): RequestPurchaseResponse|ResultInterface {
            $response = ($this->caller)('requestPurchase', $parameters);

            instance_of(RequestPurchaseResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function redeemVoucher(
            RedeemVoucher $parameters
        ): RedeemVoucherResponse|ResultInterface {
            $response = ($this->caller)('redeemVoucher', $parameters);

            instance_of(RedeemVoucherResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function cancelTopup(
            RequestCancelTopup $parameters
        ): CancelTopupResponse|ResultInterface {
            $response = ($this->caller)('cancelTopup', $parameters);

            instance_of(CancelTopupResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function updateReseller(
            UpdateReseller $parameters
        ): UpdateResellerResponse|ResultInterface {
            $response = ($this->caller)('updateReseller', $parameters);

            instance_of(UpdateResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function deActivateReseller(
            DeActivateReseller $parameters
        ): DeActivateResellerResponse|ResultInterface {
            $response = ($this->caller)('deActivateReseller', $parameters);

            instance_of(DeActivateResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function activateReseller(
            ActivateReseller $parameters
        ): ActivateResellerResponse|ResultInterface {
            $response = ($this->caller)('activateReseller', $parameters);

            instance_of(ActivateResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function executeReport(
            ExecuteReport $parameters
        ): ExecuteReportResponse|ResultInterface {
            $response = ($this->caller)('executeReport', $parameters);

            instance_of(ExecuteReportResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function blockReseller(
            BlockReseller $parameters
        ): BlockResellerResponse|ResultInterface {
            $response = ($this->caller)('blockReseller', $parameters);

            instance_of(BlockResellerResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

        /**
         * @throws SoapException
         */
        public function changePrincipalPassword(
            ChangePrincipalPassword $parameters
        ): ChangePrincipalPasswordResponse|ResultInterface {
            $response = ($this->caller)('changePrincipalPassword', $parameters);

            instance_of(ChangePrincipalPasswordResponse::class)->assert($response);
            instance_of(ResultInterface::class)->assert($response);

            return $response;
        }

    }

