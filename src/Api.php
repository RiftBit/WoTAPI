<?php
/**
 * Created by PhpStorm.
 * User: ErgoZ
 * Date: 30.01.2015
 * Time: 12:42
 */

namespace RiftBit\WoTAPI;


class Api {

    private $_application_id = 'demo';
    private $_application_region = 'ru';
    private $_application_language = 'ru';
    private $_base_wot_api_url = 'http://api.worldoftanks.%s/';

    public function __construct($application_id, $region, $language)
    {
        $this->_application_id = $application_id;
        $this->_application_region = $region;
        $this->_base_wot_api_url = sprintf($this->_base_wot_api_url, $region);
        $this->_application_language = $language;
    }

    public function accountList($fields, $type, $search, $limit)
    {
        return lib\api\Account::acc_list($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $type, $search, $limit);
    }

    public function accountInfo($fields, $access_token, $account_id)
    {
        return lib\api\Account::acc_info($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id);
    }

    public function accountTanks($fields, $access_token, $account_id, $tank_id)
    {
        return lib\api\Account::acc_tanks($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id, $tank_id);
    }

    public function accountAchievements($fields, $access_token, $account_id)
    {
        return lib\api\Account::acc_achievements($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $account_id);
    }

    public function clanList($fields, $search, $limit, $order_by, $page_no)
    {
        return lib\api\Clan::clan_list($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $search, $limit, $order_by, $page_no);
    }

    public function clanInfo($fields, $access_token, $clan_id)
    {
        return lib\api\Clan::clan_info($this->_application_id, $this->_base_wot_api_url, $this->_application_language, $fields, $access_token, $clan_id);
    }

}