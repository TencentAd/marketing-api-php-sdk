<?php
/**
 * ComponentValue
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model\V3;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * ComponentValue Class Doc Comment
 *
 * @category Class
 * @description 创意组件内容
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComponentValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'component_value';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => '\TencentAds\Model\V3\TitleComponent',
        'description' => '\TencentAds\Model\V3\DescriptionComponent',
        'image' => '\TencentAds\Model\V3\ImageComponent',
        'imageList' => '\TencentAds\Model\V3\ImageListComponent',
        'video' => '\TencentAds\Model\V3\VideoComponent',
        'brand' => '\TencentAds\Model\V3\BrandComponent',
        'consult' => '\TencentAds\Model\V3\ConsultComponent',
        'phone' => '\TencentAds\Model\V3\PhoneComponent',
        'form' => '\TencentAds\Model\V3\FormComponent',
        'actionButton' => '\TencentAds\Model\V3\ActionButtonComponent',
        'chosenButton' => '\TencentAds\Model\V3\ChosenButtonComponent',
        'label' => '\TencentAds\Model\V3\LabelComponent',
        'showData' => '\TencentAds\Model\V3\ShowDataComponent',
        'marketingPendant' => '\TencentAds\Model\V3\MarketingPendantComponent',
        'appGiftPackCode' => '\TencentAds\Model\V3\AppGiftPackCodeComponent',
        'shopImage' => '\TencentAds\Model\V3\ShopImageComponent',
        'countDown' => '\TencentAds\Model\V3\CountDownComponent',
        'barrage' => '\TencentAds\Model\V3\BarrageComponent',
        'floatingZone' => '\TencentAds\Model\V3\FloatingZoneComponent',
        'textLink' => '\TencentAds\Model\V3\TextLinkComponent',
        'jumpInfo' => '\TencentAds\Model\V3\JumpinfoComponent',
        'endPage' => '\TencentAds\Model\V3\EndPageComponent',
        'livingDesc' => '\TencentAds\Model\V3\LivingDescComponent',
        'wechatChannels' => '\TencentAds\Model\V3\WechatChannelsComponent',
        'shortVideo' => '\TencentAds\Model\V3\ShortVideoComponent',
        'elementStory' => '\TencentAds\Model\V3\ElementStoryComponent',
        'wxgamePlayablePage' => '\TencentAds\Model\V3\WxgamePlayablePageComponent',
        'appPromotionVideo' => '\TencentAds\Model\V3\AppPromotionVideoComponent',
        'videoShowcase' => '\TencentAds\Model\V3\VideoShowcaseComponent',
        'imageShowcase' => '\TencentAds\Model\V3\ImageShowcaseComponent',
        'miniCardLink' => '\TencentAds\Model\V3\MiniCardLinkComponent',
        'floatingZoneList' => '\TencentAds\Model\V3\FloatingZoneListComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
        'description' => null,
        'image' => null,
        'imageList' => null,
        'video' => null,
        'brand' => null,
        'consult' => null,
        'phone' => null,
        'form' => null,
        'actionButton' => null,
        'chosenButton' => null,
        'label' => null,
        'showData' => null,
        'marketingPendant' => null,
        'appGiftPackCode' => null,
        'shopImage' => null,
        'countDown' => null,
        'barrage' => null,
        'floatingZone' => null,
        'textLink' => null,
        'jumpInfo' => null,
        'endPage' => null,
        'livingDesc' => null,
        'wechatChannels' => null,
        'shortVideo' => null,
        'elementStory' => null,
        'wxgamePlayablePage' => null,
        'appPromotionVideo' => null,
        'videoShowcase' => null,
        'imageShowcase' => null,
        'miniCardLink' => null,
        'floatingZoneList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'description' => 'description',
        'image' => 'image',
        'imageList' => 'image_list',
        'video' => 'video',
        'brand' => 'brand',
        'consult' => 'consult',
        'phone' => 'phone',
        'form' => 'form',
        'actionButton' => 'action_button',
        'chosenButton' => 'chosen_button',
        'label' => 'label',
        'showData' => 'show_data',
        'marketingPendant' => 'marketing_pendant',
        'appGiftPackCode' => 'app_gift_pack_code',
        'shopImage' => 'shop_image',
        'countDown' => 'count_down',
        'barrage' => 'barrage',
        'floatingZone' => 'floating_zone',
        'textLink' => 'text_link',
        'jumpInfo' => 'jump_info',
        'endPage' => 'end_page',
        'livingDesc' => 'living_desc',
        'wechatChannels' => 'wechat_channels',
        'shortVideo' => 'short_video',
        'elementStory' => 'element_story',
        'wxgamePlayablePage' => 'wxgame_playable_page',
        'appPromotionVideo' => 'app_promotion_video',
        'videoShowcase' => 'video_showcase',
        'imageShowcase' => 'image_showcase',
        'miniCardLink' => 'mini_card_link',
        'floatingZoneList' => 'floating_zone_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'image' => 'setImage',
        'imageList' => 'setImageList',
        'video' => 'setVideo',
        'brand' => 'setBrand',
        'consult' => 'setConsult',
        'phone' => 'setPhone',
        'form' => 'setForm',
        'actionButton' => 'setActionButton',
        'chosenButton' => 'setChosenButton',
        'label' => 'setLabel',
        'showData' => 'setShowData',
        'marketingPendant' => 'setMarketingPendant',
        'appGiftPackCode' => 'setAppGiftPackCode',
        'shopImage' => 'setShopImage',
        'countDown' => 'setCountDown',
        'barrage' => 'setBarrage',
        'floatingZone' => 'setFloatingZone',
        'textLink' => 'setTextLink',
        'jumpInfo' => 'setJumpInfo',
        'endPage' => 'setEndPage',
        'livingDesc' => 'setLivingDesc',
        'wechatChannels' => 'setWechatChannels',
        'shortVideo' => 'setShortVideo',
        'elementStory' => 'setElementStory',
        'wxgamePlayablePage' => 'setWxgamePlayablePage',
        'appPromotionVideo' => 'setAppPromotionVideo',
        'videoShowcase' => 'setVideoShowcase',
        'imageShowcase' => 'setImageShowcase',
        'miniCardLink' => 'setMiniCardLink',
        'floatingZoneList' => 'setFloatingZoneList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'image' => 'getImage',
        'imageList' => 'getImageList',
        'video' => 'getVideo',
        'brand' => 'getBrand',
        'consult' => 'getConsult',
        'phone' => 'getPhone',
        'form' => 'getForm',
        'actionButton' => 'getActionButton',
        'chosenButton' => 'getChosenButton',
        'label' => 'getLabel',
        'showData' => 'getShowData',
        'marketingPendant' => 'getMarketingPendant',
        'appGiftPackCode' => 'getAppGiftPackCode',
        'shopImage' => 'getShopImage',
        'countDown' => 'getCountDown',
        'barrage' => 'getBarrage',
        'floatingZone' => 'getFloatingZone',
        'textLink' => 'getTextLink',
        'jumpInfo' => 'getJumpInfo',
        'endPage' => 'getEndPage',
        'livingDesc' => 'getLivingDesc',
        'wechatChannels' => 'getWechatChannels',
        'shortVideo' => 'getShortVideo',
        'elementStory' => 'getElementStory',
        'wxgamePlayablePage' => 'getWxgamePlayablePage',
        'appPromotionVideo' => 'getAppPromotionVideo',
        'videoShowcase' => 'getVideoShowcase',
        'imageShowcase' => 'getImageShowcase',
        'miniCardLink' => 'getMiniCardLink',
        'floatingZoneList' => 'getFloatingZoneList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageList'] = isset($data['imageList']) ? $data['imageList'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['consult'] = isset($data['consult']) ? $data['consult'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['form'] = isset($data['form']) ? $data['form'] : null;
        $this->container['actionButton'] = isset($data['actionButton']) ? $data['actionButton'] : null;
        $this->container['chosenButton'] = isset($data['chosenButton']) ? $data['chosenButton'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['showData'] = isset($data['showData']) ? $data['showData'] : null;
        $this->container['marketingPendant'] = isset($data['marketingPendant']) ? $data['marketingPendant'] : null;
        $this->container['appGiftPackCode'] = isset($data['appGiftPackCode']) ? $data['appGiftPackCode'] : null;
        $this->container['shopImage'] = isset($data['shopImage']) ? $data['shopImage'] : null;
        $this->container['countDown'] = isset($data['countDown']) ? $data['countDown'] : null;
        $this->container['barrage'] = isset($data['barrage']) ? $data['barrage'] : null;
        $this->container['floatingZone'] = isset($data['floatingZone']) ? $data['floatingZone'] : null;
        $this->container['textLink'] = isset($data['textLink']) ? $data['textLink'] : null;
        $this->container['jumpInfo'] = isset($data['jumpInfo']) ? $data['jumpInfo'] : null;
        $this->container['endPage'] = isset($data['endPage']) ? $data['endPage'] : null;
        $this->container['livingDesc'] = isset($data['livingDesc']) ? $data['livingDesc'] : null;
        $this->container['wechatChannels'] = isset($data['wechatChannels']) ? $data['wechatChannels'] : null;
        $this->container['shortVideo'] = isset($data['shortVideo']) ? $data['shortVideo'] : null;
        $this->container['elementStory'] = isset($data['elementStory']) ? $data['elementStory'] : null;
        $this->container['wxgamePlayablePage'] = isset($data['wxgamePlayablePage']) ? $data['wxgamePlayablePage'] : null;
        $this->container['appPromotionVideo'] = isset($data['appPromotionVideo']) ? $data['appPromotionVideo'] : null;
        $this->container['videoShowcase'] = isset($data['videoShowcase']) ? $data['videoShowcase'] : null;
        $this->container['imageShowcase'] = isset($data['imageShowcase']) ? $data['imageShowcase'] : null;
        $this->container['miniCardLink'] = isset($data['miniCardLink']) ? $data['miniCardLink'] : null;
        $this->container['floatingZoneList'] = isset($data['floatingZoneList']) ? $data['floatingZoneList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets title
     *
     * @return \TencentAds\Model\V3\TitleComponent|mixed
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \TencentAds\Model\V3\TitleComponent|mixed $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \TencentAds\Model\V3\DescriptionComponent|mixed
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \TencentAds\Model\V3\DescriptionComponent|mixed $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \TencentAds\Model\V3\ImageComponent|mixed
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \TencentAds\Model\V3\ImageComponent|mixed $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets imageList
     *
     * @return \TencentAds\Model\V3\ImageListComponent|mixed
     */
    public function getImageList()
    {
        return $this->container['imageList'];
    }

    /**
     * Sets imageList
     *
     * @param \TencentAds\Model\V3\ImageListComponent|mixed $imageList imageList
     *
     * @return $this
     */
    public function setImageList($imageList)
    {
        $this->container['imageList'] = $imageList;

        return $this;
    }

    /**
     * Gets video
     *
     * @return \TencentAds\Model\V3\VideoComponent|mixed
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param \TencentAds\Model\V3\VideoComponent|mixed $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \TencentAds\Model\V3\BrandComponent|mixed
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \TencentAds\Model\V3\BrandComponent|mixed $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets consult
     *
     * @return \TencentAds\Model\V3\ConsultComponent|mixed
     */
    public function getConsult()
    {
        return $this->container['consult'];
    }

    /**
     * Sets consult
     *
     * @param \TencentAds\Model\V3\ConsultComponent|mixed $consult consult
     *
     * @return $this
     */
    public function setConsult($consult)
    {
        $this->container['consult'] = $consult;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \TencentAds\Model\V3\PhoneComponent|mixed
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \TencentAds\Model\V3\PhoneComponent|mixed $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets form
     *
     * @return \TencentAds\Model\V3\FormComponent|mixed
     */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
     * Sets form
     *
     * @param \TencentAds\Model\V3\FormComponent|mixed $form form
     *
     * @return $this
     */
    public function setForm($form)
    {
        $this->container['form'] = $form;

        return $this;
    }

    /**
     * Gets actionButton
     *
     * @return \TencentAds\Model\V3\ActionButtonComponent|mixed
     */
    public function getActionButton()
    {
        return $this->container['actionButton'];
    }

    /**
     * Sets actionButton
     *
     * @param \TencentAds\Model\V3\ActionButtonComponent|mixed $actionButton actionButton
     *
     * @return $this
     */
    public function setActionButton($actionButton)
    {
        $this->container['actionButton'] = $actionButton;

        return $this;
    }

    /**
     * Gets chosenButton
     *
     * @return \TencentAds\Model\V3\ChosenButtonComponent|mixed
     */
    public function getChosenButton()
    {
        return $this->container['chosenButton'];
    }

    /**
     * Sets chosenButton
     *
     * @param \TencentAds\Model\V3\ChosenButtonComponent|mixed $chosenButton chosenButton
     *
     * @return $this
     */
    public function setChosenButton($chosenButton)
    {
        $this->container['chosenButton'] = $chosenButton;

        return $this;
    }

    /**
     * Gets label
     *
     * @return \TencentAds\Model\V3\LabelComponent|mixed
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param \TencentAds\Model\V3\LabelComponent|mixed $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets showData
     *
     * @return \TencentAds\Model\V3\ShowDataComponent|mixed
     */
    public function getShowData()
    {
        return $this->container['showData'];
    }

    /**
     * Sets showData
     *
     * @param \TencentAds\Model\V3\ShowDataComponent|mixed $showData showData
     *
     * @return $this
     */
    public function setShowData($showData)
    {
        $this->container['showData'] = $showData;

        return $this;
    }

    /**
     * Gets marketingPendant
     *
     * @return \TencentAds\Model\V3\MarketingPendantComponent|mixed
     */
    public function getMarketingPendant()
    {
        return $this->container['marketingPendant'];
    }

    /**
     * Sets marketingPendant
     *
     * @param \TencentAds\Model\V3\MarketingPendantComponent|mixed $marketingPendant marketingPendant
     *
     * @return $this
     */
    public function setMarketingPendant($marketingPendant)
    {
        $this->container['marketingPendant'] = $marketingPendant;

        return $this;
    }

    /**
     * Gets appGiftPackCode
     *
     * @return \TencentAds\Model\V3\AppGiftPackCodeComponent|mixed
     */
    public function getAppGiftPackCode()
    {
        return $this->container['appGiftPackCode'];
    }

    /**
     * Sets appGiftPackCode
     *
     * @param \TencentAds\Model\V3\AppGiftPackCodeComponent|mixed $appGiftPackCode appGiftPackCode
     *
     * @return $this
     */
    public function setAppGiftPackCode($appGiftPackCode)
    {
        $this->container['appGiftPackCode'] = $appGiftPackCode;

        return $this;
    }

    /**
     * Gets shopImage
     *
     * @return \TencentAds\Model\V3\ShopImageComponent|mixed
     */
    public function getShopImage()
    {
        return $this->container['shopImage'];
    }

    /**
     * Sets shopImage
     *
     * @param \TencentAds\Model\V3\ShopImageComponent|mixed $shopImage shopImage
     *
     * @return $this
     */
    public function setShopImage($shopImage)
    {
        $this->container['shopImage'] = $shopImage;

        return $this;
    }

    /**
     * Gets countDown
     *
     * @return \TencentAds\Model\V3\CountDownComponent|mixed
     */
    public function getCountDown()
    {
        return $this->container['countDown'];
    }

    /**
     * Sets countDown
     *
     * @param \TencentAds\Model\V3\CountDownComponent|mixed $countDown countDown
     *
     * @return $this
     */
    public function setCountDown($countDown)
    {
        $this->container['countDown'] = $countDown;

        return $this;
    }

    /**
     * Gets barrage
     *
     * @return \TencentAds\Model\V3\BarrageComponent|mixed
     */
    public function getBarrage()
    {
        return $this->container['barrage'];
    }

    /**
     * Sets barrage
     *
     * @param \TencentAds\Model\V3\BarrageComponent|mixed $barrage barrage
     *
     * @return $this
     */
    public function setBarrage($barrage)
    {
        $this->container['barrage'] = $barrage;

        return $this;
    }

    /**
     * Gets floatingZone
     *
     * @return \TencentAds\Model\V3\FloatingZoneComponent|mixed
     */
    public function getFloatingZone()
    {
        return $this->container['floatingZone'];
    }

    /**
     * Sets floatingZone
     *
     * @param \TencentAds\Model\V3\FloatingZoneComponent|mixed $floatingZone floatingZone
     *
     * @return $this
     */
    public function setFloatingZone($floatingZone)
    {
        $this->container['floatingZone'] = $floatingZone;

        return $this;
    }

    /**
     * Gets textLink
     *
     * @return \TencentAds\Model\V3\TextLinkComponent|mixed
     */
    public function getTextLink()
    {
        return $this->container['textLink'];
    }

    /**
     * Sets textLink
     *
     * @param \TencentAds\Model\V3\TextLinkComponent|mixed $textLink textLink
     *
     * @return $this
     */
    public function setTextLink($textLink)
    {
        $this->container['textLink'] = $textLink;

        return $this;
    }

    /**
     * Gets jumpInfo
     *
     * @return \TencentAds\Model\V3\JumpinfoComponent|mixed
     */
    public function getJumpInfo()
    {
        return $this->container['jumpInfo'];
    }

    /**
     * Sets jumpInfo
     *
     * @param \TencentAds\Model\V3\JumpinfoComponent|mixed $jumpInfo jumpInfo
     *
     * @return $this
     */
    public function setJumpInfo($jumpInfo)
    {
        $this->container['jumpInfo'] = $jumpInfo;

        return $this;
    }

    /**
     * Gets endPage
     *
     * @return \TencentAds\Model\V3\EndPageComponent|mixed
     */
    public function getEndPage()
    {
        return $this->container['endPage'];
    }

    /**
     * Sets endPage
     *
     * @param \TencentAds\Model\V3\EndPageComponent|mixed $endPage endPage
     *
     * @return $this
     */
    public function setEndPage($endPage)
    {
        $this->container['endPage'] = $endPage;

        return $this;
    }

    /**
     * Gets livingDesc
     *
     * @return \TencentAds\Model\V3\LivingDescComponent|mixed
     */
    public function getLivingDesc()
    {
        return $this->container['livingDesc'];
    }

    /**
     * Sets livingDesc
     *
     * @param \TencentAds\Model\V3\LivingDescComponent|mixed $livingDesc livingDesc
     *
     * @return $this
     */
    public function setLivingDesc($livingDesc)
    {
        $this->container['livingDesc'] = $livingDesc;

        return $this;
    }

    /**
     * Gets wechatChannels
     *
     * @return \TencentAds\Model\V3\WechatChannelsComponent|mixed
     */
    public function getWechatChannels()
    {
        return $this->container['wechatChannels'];
    }

    /**
     * Sets wechatChannels
     *
     * @param \TencentAds\Model\V3\WechatChannelsComponent|mixed $wechatChannels wechatChannels
     *
     * @return $this
     */
    public function setWechatChannels($wechatChannels)
    {
        $this->container['wechatChannels'] = $wechatChannels;

        return $this;
    }

    /**
     * Gets shortVideo
     *
     * @return \TencentAds\Model\V3\ShortVideoComponent|mixed
     */
    public function getShortVideo()
    {
        return $this->container['shortVideo'];
    }

    /**
     * Sets shortVideo
     *
     * @param \TencentAds\Model\V3\ShortVideoComponent|mixed $shortVideo shortVideo
     *
     * @return $this
     */
    public function setShortVideo($shortVideo)
    {
        $this->container['shortVideo'] = $shortVideo;

        return $this;
    }

    /**
     * Gets elementStory
     *
     * @return \TencentAds\Model\V3\ElementStoryComponent|mixed
     */
    public function getElementStory()
    {
        return $this->container['elementStory'];
    }

    /**
     * Sets elementStory
     *
     * @param \TencentAds\Model\V3\ElementStoryComponent|mixed $elementStory elementStory
     *
     * @return $this
     */
    public function setElementStory($elementStory)
    {
        $this->container['elementStory'] = $elementStory;

        return $this;
    }

    /**
     * Gets wxgamePlayablePage
     *
     * @return \TencentAds\Model\V3\WxgamePlayablePageComponent|mixed
     */
    public function getWxgamePlayablePage()
    {
        return $this->container['wxgamePlayablePage'];
    }

    /**
     * Sets wxgamePlayablePage
     *
     * @param \TencentAds\Model\V3\WxgamePlayablePageComponent|mixed $wxgamePlayablePage wxgamePlayablePage
     *
     * @return $this
     */
    public function setWxgamePlayablePage($wxgamePlayablePage)
    {
        $this->container['wxgamePlayablePage'] = $wxgamePlayablePage;

        return $this;
    }

    /**
     * Gets appPromotionVideo
     *
     * @return \TencentAds\Model\V3\AppPromotionVideoComponent|mixed
     */
    public function getAppPromotionVideo()
    {
        return $this->container['appPromotionVideo'];
    }

    /**
     * Sets appPromotionVideo
     *
     * @param \TencentAds\Model\V3\AppPromotionVideoComponent|mixed $appPromotionVideo appPromotionVideo
     *
     * @return $this
     */
    public function setAppPromotionVideo($appPromotionVideo)
    {
        $this->container['appPromotionVideo'] = $appPromotionVideo;

        return $this;
    }

    /**
     * Gets videoShowcase
     *
     * @return \TencentAds\Model\V3\VideoShowcaseComponent|mixed
     */
    public function getVideoShowcase()
    {
        return $this->container['videoShowcase'];
    }

    /**
     * Sets videoShowcase
     *
     * @param \TencentAds\Model\V3\VideoShowcaseComponent|mixed $videoShowcase videoShowcase
     *
     * @return $this
     */
    public function setVideoShowcase($videoShowcase)
    {
        $this->container['videoShowcase'] = $videoShowcase;

        return $this;
    }

    /**
     * Gets imageShowcase
     *
     * @return \TencentAds\Model\V3\ImageShowcaseComponent|mixed
     */
    public function getImageShowcase()
    {
        return $this->container['imageShowcase'];
    }

    /**
     * Sets imageShowcase
     *
     * @param \TencentAds\Model\V3\ImageShowcaseComponent|mixed $imageShowcase imageShowcase
     *
     * @return $this
     */
    public function setImageShowcase($imageShowcase)
    {
        $this->container['imageShowcase'] = $imageShowcase;

        return $this;
    }

    /**
     * Gets miniCardLink
     *
     * @return \TencentAds\Model\V3\MiniCardLinkComponent|mixed
     */
    public function getMiniCardLink()
    {
        return $this->container['miniCardLink'];
    }

    /**
     * Sets miniCardLink
     *
     * @param \TencentAds\Model\V3\MiniCardLinkComponent|mixed $miniCardLink miniCardLink
     *
     * @return $this
     */
    public function setMiniCardLink($miniCardLink)
    {
        $this->container['miniCardLink'] = $miniCardLink;

        return $this;
    }

    /**
     * Gets floatingZoneList
     *
     * @return \TencentAds\Model\V3\FloatingZoneListComponent|mixed
     */
    public function getFloatingZoneList()
    {
        return $this->container['floatingZoneList'];
    }

    /**
     * Sets floatingZoneList
     *
     * @param \TencentAds\Model\V3\FloatingZoneListComponent|mixed $floatingZoneList floatingZoneList
     *
     * @return $this
     */
    public function setFloatingZoneList($floatingZoneList)
    {
        $this->container['floatingZoneList'] = $floatingZoneList;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


