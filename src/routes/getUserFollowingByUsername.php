<?php

$app->post('/api/Behance/getUserFollowingByUsername', function ($request, $response) {



    $option = array(
        "clientId" => "client_id",
        "username" => "username",
        "sort" => "sort",
        "page" => "page",
        "perPage" => "per_page",
        "sortOrder" => "sort_order"
    );
    $arrayType = array();

    $settings = $this->settings;
    $routeUrl = '/v2/users/';
    $url = $settings['baseUrl'].$routeUrl;


    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['clientId','username']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $postData = $validateRes;
    }



    $queryParam = array();
    //Change alias and formatted array
    foreach($option as $alias => $value)
    {

        if(!empty($postData['args'][$alias]))
        {

            if(isset($arrayType[$alias]))
            {
                $postData['args'][$alias] = implode($arrayType[$alias],$postData['args'][$alias]);
            }

            $queryParam[$value] = $postData['args'][$alias];
        }
    }

    $url = $url.$queryParam['username'].'/following';
    unset($queryParam['username']);
    $client = $this->httpClient;

    if(!empty($queryParam['sort']))
    {
        if($queryParam['sort'] == 'createdDate')
        {
            $queryParam['sort'] = 'created_date';
        }
        if($queryParam['sort'] == 'featuredDate')
        {
            $queryParam['sort'] = 'featured_date';
        }
    }


    try {

        $resp =  $client->request('GET', $url ,['query' => $queryParam] );



        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {

            $dataBody = $resp->getBody()->getContents();

            $result['callback'] = 'success';
            $result['contextWrites']['to'] = array('result' => json_decode($dataBody) );
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = $resp->getBody()->getContents();
        }
    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;
    } catch (GuzzleHttp\Exception\ServerException $exception) {
        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;
    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';
    }
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});


