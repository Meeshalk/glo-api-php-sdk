<?php

    namespace Meeshalk\GloERSWebServiceSdk;

    use Meeshalk\GloERSWebServiceSdk\Type\ClientContext;
    use Meeshalk\GloERSWebServiceSdk\Type\MapArray;
    use Meeshalk\GloERSWebServiceSdk\Type\PrincipalId;
    use PHPUnit\Framework\TestCase as BaseTestCase;

    use function Psl\Iter\random;

    abstract class TestCase extends BaseTestCase
    {

        protected string $wsdl_path = 'http://localhost:8878/topupservice/service?wsdl';

        protected GloERSClient $client;

        protected PrincipalId $principalInfo;

        protected ClientContext $context;

        private string $msisdn;

        private string $password;

        private string $userId;

        private string $clientType;

        protected string $sellerUserType;

        protected function setUp(): void
        {
            $this->msisdn = getenv("GLO_MSISDN");
            $this->password = getenv("GLO_PASSWORD");
            $this->userId = getenv("GLO_USERID");
            $this->clientType = getenv("GLO_USERTYPE");
            $this->sellerUserType = getenv("GLO_SELLER_ACCOUNT_TYPE");

            $this->client        = GloERSClientFactory::factory($this->wsdl_path);
            $this->principalInfo = (new PrincipalId())->withId("DIST$this->msisdn")
                ->withType($this->clientType)
                ->withUserId($this->userId);

            $this->context = (new ClientContext())->withClientId("ERS")
                ->withChannel("WSClient")
                ->withInitiatorPrincipalId($this->principalInfo)
                // ->withClientReference(rand())
                ->withClientRequestTimeout(500)
                ->withPassword($this->password)
                ->withClientComment("comment of req 5");
                // ->withTransactionProperties((new MapArray())->withEntry(
                //     [
                //         "clientTag"       => "topup,airtime",
                //         // "clientComment"   => "comment of req",
                //         "clientReference" => "ref:8898",
                //     ]
                // ));
        }

        protected function getMSISDN(): string
        {
            return $this->msisdn;
        }

        protected function setMSISDN(string $value): self
        {
            $new          = clone $this;
            $this->msisdn = $value;

            return $new;
        }

        protected function getClientType(): string
        {
            return $this->clientType;
        }

        protected function setClientType(string $value): self
        {
            $new              = clone $this;
            $this->clientType = $value;

            return $new;
        }

        protected function getUserId(): string
        {
            return $this->userId;
        }

        protected function setUserId(string $value): self
        {
            $new          = clone $this;
            $this->userId = $value;

            return $new;
        }

        protected function getPassword(): string
        {
            return $this->password;
        }

        protected function setPassword(string $value): self
        {
            $new            = clone $this;
            $this->password = $value;

            return $new;
        }


    }