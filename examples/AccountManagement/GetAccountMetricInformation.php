<?php

/**
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\AccountManagement;

require __DIR__ . '/../../vendor/autoload.php';

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\Lib\V14\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V14\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V14\GoogleAdsException;
use Google\Ads\GoogleAds\V14\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V14\Resources\Customer;
use Google\ApiCore\ApiException;

/**
 * This example lists basic information about an advertising account. For instance, the name,
 * currency, time zone, etc.
 */
class GetAccountInformation
{
    private const CUSTOMER_ID = 'INSERT_CUSTOMER_ID_HERE';

    public static function main()
    {
        // Either pass the required parameters for this example on the command line, or insert them
        // into the constants above.
        $options = (new ArgumentParser())->parseCommandArguments([
            ArgumentNames::CUSTOMER_ID => GetOpt::REQUIRED_ARGUMENT
        ]);

        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()->build();

        // Construct a Google Ads client configured from a properties file and the
        // OAuth2 credentials above.
        $googleAdsClient = (new GoogleAdsClientBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        try {
            self::runExample(
                $googleAdsClient,
                $options[ArgumentNames::CUSTOMER_ID] ?: self::CUSTOMER_ID
            );
        } catch (GoogleAdsException $googleAdsException) {
            printf(
                "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
                $googleAdsException->getRequestId(),
                PHP_EOL,
                PHP_EOL
            );
            foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
                /** @var GoogleAdsError $error */
                printf(
                    "\t%s: %s%s",
                    $error->getErrorCode()->getErrorCode(),
                    $error->getMessage(),
                    PHP_EOL
                );
            }
            exit(1);
        } catch (ApiException $apiException) {
            printf(
                "ApiException was thrown with message '%s'.%s",
                $apiException->getMessage(),
                PHP_EOL
            );
            exit(1);
        }
    }

    /**
     * Runs the example.
     *
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the customer ID
     */
    public static function runExample(GoogleAdsClient $googleAdsClient, int $customerId)
    {
        // Creates a query that retrieves the specified customer.
        $query = "SELECT 
                customer.id, 
                customer.descriptive_name,
                campaign.id,
                campaign.name,
                campaign.status,
                metrics.impressions,
                metrics.clicks,
                metrics.ctr,
                metrics.search_impression_share
                FROM campaign 
                WHERE campaign.status = 'ENABLED'
                AND segments.date between '2023-06-01' AND '2023-06-30'
                AND campaign.advertising_channel_type = 'SEARCH'";
                // AND segments.date DURING LAST_7_DAYS";
        // Issues a search request to get the Customer object from the single row of the response
        // $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
        $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
        $response = $googleAdsServiceClient->search($customerId, $query,  ['pageSize' => 1000]);


        // Iterates over all rows in all pages and prints the requested field values for each row.
        // Print the results

        $total_imp = 0;
        $total_clicks = 0;
        $total_imp_share = 0;
        $total_ctr = 0;
        $total_campaigns = 0;
        $total_te = 0;
        $total_imp_bigger_than_0 = 0;

        foreach ($response->getIterator() as $row) {
            $imp_share = round((double)$row->getMetrics()->getSearchImpressionShare() * 100, 2);
            $ctr = round((double)$row->getMetrics()->getCtr() * 100, 2);
            $imp = (int)$row->getMetrics()->getImpressions();
            $te = $imp_share > 0 ? round(($imp / $imp_share) * 100, 2) : 0;

            $total_imp += $imp;
            $total_clicks += (int)$row->getMetrics()->getClicks();
            $total_imp_share += $imp_share;
            $total_ctr += $ctr;
            $total_campaigns += 1;
            $total_te += $te;
            $total_imp_bigger_than_0 += $imp_share > 0 ? $imp : 0;

            printf(
                "Account ID: %s, Account Name: %s, Campaign ID: %s, Campaign Name: %s, Status: %s, I: %s, C: %s, IS: %s, CTR: %s\n",
                $row->getCustomer()->getId(),
                $row->getCustomer()->getDescriptiveName(),
                $row->getCampaign()->getId(),
                $row->getCampaign()->getName(),
                $row->getCampaign()->getStatus(),
                $row->getMetrics()->getImpressions(),
                $row->getMetrics()->getClicks(),
                $imp_share,
                $ctr,
            );
        }

        printf('Total Campaigns: '.$total_campaigns);
        printf("\n");
        printf('Total Impressions: '.$total_imp);
        printf("\n");
        printf('Total Clicks: '.$total_clicks);
        printf("\n");
        printf('CTR: '.$total_ctr);
        printf("\n");
        printf('AVG CTR C/I: '.round(($total_clicks / $total_imp) * 100, 2));
        printf("\n");
        printf('Total Impression exclude anomaly: '.$total_imp_bigger_than_0);
        printf("\n");
        printf('Total Eligible Impression exclude anomaly: '.$total_te);
        printf("\n");
        printf('Impression Share: '.$total_imp_share);
        printf("\n");
        printf('AVG Impression Share: '.round(($total_imp_bigger_than_0 / $total_te * 100), 2));


        // /** @var Customer $customer */
        // $customer = $googleAdsServiceClient->search($customerId, $query)
        //     ->getIterator()
        //     ->current()
        //     ->getCustomer();

        // // Print information about the account.
        // printf(
        //     "Customer with ID %d, descriptive name '%s', currency code '%s', timezone '%s', "
        //     . "tracking URL template '%s' and auto tagging enabled '%s' was retrieved.%s",
        //     $customer->getId(),
        //     $customer->getDescriptiveName(),
        //     $customer->getCurrencyCode(),
        //     $customer->getTimeZone(),
        //     is_null($customer->getTrackingUrlTemplate())
        //         ? 'N/A' : $customer->getTrackingUrlTemplate(),
        //     $customer->getAutoTaggingEnabled() ? 'true' : 'false',
        //     PHP_EOL
        // );
    }
}

GetAccountInformation::main();
