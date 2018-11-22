<?php

namespace Shapecode\FUT\Api;

/**
 * Interface CoreInterface
 *
 * @package Shapecode\FUT\Api
 * @author  Shapecode
 */
interface CoreInterface
{

    /**
     *
     */
    const FUT_HOSTS = [
        'pc'   => 'utas.external.s2.fut.ea.com:443',
        'ps3'  => 'utas.external.s2.fut.ea.com:443',
        'ps4'  => 'utas.external.s2.fut.ea.com:443',
        'xbox' => 'utas.external.s3.fut.ea.com:443'
    ];

    /**
     *
     */
    const REQUEST_HEADERS = [
        'User-Agent'      => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36',
        'Accept'          => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        'Accept-Encoding' => 'gzip,deflate,sdch, br',
        'Accept-Language' => 'en-US,en;q=0.8',
        'Referer'         => 'https://www.easports.com/fifa/ultimate-team/web-app/',
        'DNT'             => '1',
    ];

    /**
     *
     */
    const AUTH_URL = 'utas.mob.v4.fut.ea.com:443';

    /**
     *
     */
    const CLIENT_ID = 'FIFA-19-WEBCLIENT';

    /**
     *
     */
    const FUN_CAPTCHA_PUBLIC_KEY = 'A4EECF77-AC87-8C8D-5754-BF882F72063B';

    /**
     * @param null $code
     *
     * @return array
     */
    public function login($code = null);

    /**
     * @return mixed
     */
    public function logout();

    /**
     * @param     $assetId
     * @param int $start
     * @param int $count
     *
     * @return mixed
     */
    public function searchDefinition($assetId, $start = 0, $count = 20);

    /**
     * @param array $params
     * @param int   $pageSize
     * @param int   $start
     *
     * lev: level
     * cat: category
     * definitionId:
     * micr: min bid price
     * macr: max bid price
     * minb: min bin price
     * maxb: max bin price
     * leag: league
     * team: club
     * pos: position
     * zone:
     * nation:
     * rare: rare type
     * playStyle: player style
     *
     * @return array|mixed|string
     */
    public function search(array $params = [], $pageSize = 20, $start = 0);

    /**
     * @param $tradeId
     * @param $price
     *
     * @return mixed
     */
    public function bid($tradeId, $price);

    /**
     * @return mixed
     */
    public function usermassInfo();

    /**
     * @return mixed
     */
    public function credits();

    /**
     * @param array $params
     *
     * @return mixed
     *
     * level
     * defId
     * start
     * count
     * sort
     */
    public function club(array $params = []);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public function players(array $params = []);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public function stadiums(array $params = []);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public function kits(array $params = []);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public function staffs(array $params = []);

    /**
     * @param array $params
     *
     * @return mixed
     */
    public function badges(array $params = []);

    /**
     * @return mixed
     */
    public function clubStaff();

    /**
     * @return mixed
     */
    public function clubConsumables();

    /**
     * @param int $squadId
     *
     * @return mixed
     */
    public function squad($squadId = 0);

    /**
     * @param $tradeId
     *
     * @return mixed
     */
    public function tradeStatus($tradeId);

    /**
     * @return mixed
     */
    public function tradepile();

    /**
     * @return mixed
     */
    public function watchlist();

    /**
     * @param $tradeId
     *
     * @return mixed
     */
    public function watchlistDelete($tradeId);

    /**
     * @return mixed
     */
    public function unassigned();

    /**
     * @param      $id
     * @param      $bid
     * @param      $bin
     * @param int  $duration
     * @param bool $fast
     *
     * @return mixed
     */
    public function sell($id, $bid, $bin, $duration = 3600);

    /**
     * @param $itemId
     *
     * @return mixed
     */
    public function quickSell($itemId);

    /**
     * @param $tradeId
     *
     * @return mixed
     */
    public function removeSold($tradeId);

    /**
     * @param      $itemId
     * @param bool $safe
     *
     * @return mixed
     */
    public function sendToTradepile($itemId);

    /**
     * @param $itemId
     *
     * @return mixed
     */
    public function sendToClub($itemId);

    /**
     * @param $tradeId
     *
     * @return mixed
     */
    public function sendToWatchList($tradeId);

    /**
     * @param $definitionId
     *
     * @return mixed
     */
    public function priceRange($definitionId);

    /**
     * @return mixed
     */
    public function relist();

    /**
     * @param $itemId
     * @param $resourceId
     *
     * @return mixed
     */
    public function applyConsumable($itemId, $resourceId);

    /**
     * @return mixed
     */
    public function keepalive();

    /**
     * @return mixed
     */
    public function pileSize();

    /**
     * @param        $packId
     * @param string $currency
     *
     * @return mixed
     */
    public function buyPack($packId, $currency = 'COINS');

    /**
     * @param $packId
     *
     * @return mixed
     */
    public function openPack($packId);

    /**
     * @return mixed
     */
    public function squadBuildingSets();

    /**
     * @param $setId
     *
     * @return mixed
     */
    public function squadBuildingChallenges($setId);

    /**
     * @param string $scope
     *
     * @return mixed
     */
    public function objectives($scope = 'all');
}