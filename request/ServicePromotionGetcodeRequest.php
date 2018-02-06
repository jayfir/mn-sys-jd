<?php

namespace jayfir\jd\jd\request;

class ServicePromotionGetcodeRequest
{

    private $unionId;
    private $subUnionId;
    private $materialId;
    private $promotionType;
    private $extendId;
    private $webId;
    private $siteId;
    private $channel;
    private $ext1;
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.service.promotion.getcode";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas);
    }

    public function check()
    {
        
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        $this->apiParas["promotionType"] = $promotionType;
    }

    public function getPromotionType()
    {
        return $this->promotionType;
    }

    public function setMaterialId($materialId)
    {
        $this->materialId = $materialId;
        $this->apiParas["materialId"] = $materialId;
    }

    public function getMaterialId()
    {
        return $this->materialId;
    }

    public function setUnionId($unionId)
    {
        $this->unionId = $unionId;
        $this->apiParas["unionId"] = $unionId;
    }

    public function getUnionId()
    {
        return $this->unionId;
    }

    public function setSubUnionId($subUnionId)
    {
        $this->subUnionId = $subUnionId;
        $this->apiParas["subUnionId"] = $subUnionId;
    }

    public function getSubUnionId()
    {
        return $this->subUnionId;
    }

    private $siteSize;

    public function setSiteSize($siteSize)
    {
        $this->siteSize = $siteSize;
        $this->apiParas["siteSize"] = $siteSize;
    }

    public function getSiteSize()
    {
        return $this->siteSize;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setChannel($channel)
    {
        $this->channel = $channel;
        $this->apiParas["channel"] = $channel;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setWebId($webId)
    {
        $this->webId = $webId;
        $this->apiParas["webId"] = $webId;
    }

    public function getWebId()
    {
        return $this->webId;
    }

    public function setExtendId($extendId)
    {
        $this->extendId = $extendId;
        $this->apiParas["extendId"] = $extendId;
    }

    public function getExtendId()
    {
        return $this->extendId;
    }

    public function setExt1($ext1)
    {
        $this->ext1 = $ext1;
        $this->apiParas["ext1"] = $ext1;
    }

    public function getExt1()
    {
        return $this->ext1;
    }

}
