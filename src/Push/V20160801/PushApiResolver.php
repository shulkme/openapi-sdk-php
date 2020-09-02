<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BindAlias bindAlias(array $options = [])
 * @method BindPhone bindPhone(array $options = [])
 * @method BindTag bindTag(array $options = [])
 * @method CancelPush cancelPush(array $options = [])
 * @method CheckDevice checkDevice(array $options = [])
 * @method CheckDevices checkDevices(array $options = [])
 * @method CompleteContinuouslyPush completeContinuouslyPush(array $options = [])
 * @method ContinuouslyPush continuouslyPush(array $options = [])
 * @method ListSummaryApps listSummaryApps(array $options = [])
 * @method ListTags listTags(array $options = [])
 * @method MassPush massPush(array $options = [])
 * @method Push push(array $options = [])
 * @method PushMessageToAndroid pushMessageToAndroid(array $options = [])
 * @method PushMessageToiOS pushMessageToiOS(array $options = [])
 * @method PushNoticeToAndroid pushNoticeToAndroid(array $options = [])
 * @method PushNoticeToiOS pushNoticeToiOS(array $options = [])
 * @method QueryAliases queryAliases(array $options = [])
 * @method QueryDeviceCount queryDeviceCount(array $options = [])
 * @method QueryDeviceInfo queryDeviceInfo(array $options = [])
 * @method QueryDevicesByAccount queryDevicesByAccount(array $options = [])
 * @method QueryDevicesByAlias queryDevicesByAlias(array $options = [])
 * @method QueryDeviceStat queryDeviceStat(array $options = [])
 * @method QueryPushRecords queryPushRecords(array $options = [])
 * @method QueryPushStatByApp queryPushStatByApp(array $options = [])
 * @method QueryPushStatByMsg queryPushStatByMsg(array $options = [])
 * @method QueryTags queryTags(array $options = [])
 * @method QueryUniqueDeviceStat queryUniqueDeviceStat(array $options = [])
 * @method RemoveTag removeTag(array $options = [])
 * @method UnbindAlias unbindAlias(array $options = [])
 * @method UnbindPhone unbindPhone(array $options = [])
 * @method UnbindTag unbindTag(array $options = [])
 */
class PushApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Push';

    /** @var string */
    public $version = '2016-08-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindAlias extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindPhone extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class BindTag extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CancelPush extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckDevice extends Rpc
{
}

/**
 * @method string getDeviceIds()
 * @method $this withDeviceIds($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CheckDevices extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class CompleteContinuouslyPush extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class ContinuouslyPush extends Rpc
{
}

class ListSummaryApps extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class ListTags extends Rpc
{
}

/**
 * @method array getPushTask()
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class MassPush extends Rpc
{

    /**
     * @param array $pushTask
     *
     * @return $this
     */
	public function withPushTask(array $pushTask)
	{
	    $this->data['PushTask'] = $pushTask;
		foreach ($pushTask as $depth1 => $depth1Value) {
			if(isset($depth1Value['AndroidNotificationBarType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarType'] = $depth1Value['AndroidNotificationBarType'];
			}
			if(isset($depth1Value['AndroidExtParameters'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidExtParameters'] = $depth1Value['AndroidExtParameters'];
			}
			if(isset($depth1Value['IOSBadge'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSBadge'] = $depth1Value['IOSBadge'];
			}
			if(isset($depth1Value['IOSBadgeAutoIncrement'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSBadgeAutoIncrement'] = $depth1Value['IOSBadgeAutoIncrement'];
			}
			if(isset($depth1Value['AndroidOpenType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidOpenType'] = $depth1Value['AndroidOpenType'];
			}
			if(isset($depth1Value['Title'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Title'] = $depth1Value['Title'];
			}
			if(isset($depth1Value['Body'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Body'] = $depth1Value['Body'];
			}
			if(isset($depth1Value['DeviceType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.DeviceType'] = $depth1Value['DeviceType'];
			}
			if(isset($depth1Value['PushTime'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.PushTime'] = $depth1Value['PushTime'];
			}
			if(isset($depth1Value['SendSpeed'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.SendSpeed'] = $depth1Value['SendSpeed'];
			}
			if(isset($depth1Value['AndroidPopupActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupActivity'] = $depth1Value['AndroidPopupActivity'];
			}
			if(isset($depth1Value['IOSRemindBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSRemindBody'] = $depth1Value['IOSRemindBody'];
			}
			if(isset($depth1Value['IOSExtParameters'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSExtParameters'] = $depth1Value['IOSExtParameters'];
			}
			if(isset($depth1Value['AndroidNotifyType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotifyType'] = $depth1Value['AndroidNotifyType'];
			}
			if(isset($depth1Value['AndroidPopupTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupTitle'] = $depth1Value['AndroidPopupTitle'];
			}
			if(isset($depth1Value['IOSMusic'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSMusic'] = $depth1Value['IOSMusic'];
			}
			if(isset($depth1Value['IOSApnsEnv'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSApnsEnv'] = $depth1Value['IOSApnsEnv'];
			}
			if(isset($depth1Value['IOSMutableContent'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSMutableContent'] = $depth1Value['IOSMutableContent'];
			}
			if(isset($depth1Value['AndroidNotificationBarPriority'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarPriority'] = $depth1Value['AndroidNotificationBarPriority'];
			}
			if(isset($depth1Value['ExpireTime'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.ExpireTime'] = $depth1Value['ExpireTime'];
			}
			if(isset($depth1Value['AndroidNotificationVivoChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationVivoChannel'] = $depth1Value['AndroidNotificationVivoChannel'];
			}
			if(isset($depth1Value['AndroidPopupBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidPopupBody'] = $depth1Value['AndroidPopupBody'];
			}
			if(isset($depth1Value['IOSNotificationCategory'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSNotificationCategory'] = $depth1Value['IOSNotificationCategory'];
			}
			if(isset($depth1Value['AndroidNotificationXiaomiChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationXiaomiChannel'] = $depth1Value['AndroidNotificationXiaomiChannel'];
			}
			if(isset($depth1Value['StoreOffline'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.StoreOffline'] = $depth1Value['StoreOffline'];
			}
			if(isset($depth1Value['IOSSilentNotification'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSSilentNotification'] = $depth1Value['IOSSilentNotification'];
			}
			if(isset($depth1Value['JobKey'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.JobKey'] = $depth1Value['JobKey'];
			}
			if(isset($depth1Value['Target'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.Target'] = $depth1Value['Target'];
			}
			if(isset($depth1Value['AndroidOpenUrl'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidOpenUrl'] = $depth1Value['AndroidOpenUrl'];
			}
			if(isset($depth1Value['AndroidNotificationChannel'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidNotificationChannel'] = $depth1Value['AndroidNotificationChannel'];
			}
			if(isset($depth1Value['AndroidRemind'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidRemind'] = $depth1Value['AndroidRemind'];
			}
			if(isset($depth1Value['AndroidActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidActivity'] = $depth1Value['AndroidActivity'];
			}
			if(isset($depth1Value['AndroidXiaoMiNotifyBody'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyBody'] = $depth1Value['AndroidXiaoMiNotifyBody'];
			}
			if(isset($depth1Value['IOSSubtitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSSubtitle'] = $depth1Value['IOSSubtitle'];
			}
			if(isset($depth1Value['IOSRemind'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.iOSRemind'] = $depth1Value['IOSRemind'];
			}
			if(isset($depth1Value['TargetValue'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.TargetValue'] = $depth1Value['TargetValue'];
			}
			if(isset($depth1Value['AndroidMusic'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidMusic'] = $depth1Value['AndroidMusic'];
			}
			if(isset($depth1Value['AndroidXiaoMiActivity'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiActivity'] = $depth1Value['AndroidXiaoMiActivity'];
			}
			if(isset($depth1Value['AndroidXiaoMiNotifyTitle'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyTitle'] = $depth1Value['AndroidXiaoMiNotifyTitle'];
			}
			if(isset($depth1Value['PushType'])){
				$this->options['form_params']['PushTask.' . ($depth1 + 1) . '.PushType'] = $depth1Value['PushType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAndroidNotificationBarType()
 * @method $this withAndroidNotificationBarType($value)
 * @method string getSmsSendPolicy()
 * @method $this withSmsSendPolicy($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getPushTime()
 * @method $this withPushTime($value)
 * @method string getSendSpeed()
 * @method $this withSendSpeed($value)
 * @method string getAndroidPopupActivity()
 * @method $this withAndroidPopupActivity($value)
 * @method string getIOSRemindBody()
 * @method string getAndroidNotifyType()
 * @method $this withAndroidNotifyType($value)
 * @method string getAndroidPopupTitle()
 * @method $this withAndroidPopupTitle($value)
 * @method string getIOSMusic()
 * @method string getIOSApnsEnv()
 * @method string getIOSMutableContent()
 * @method string getAndroidNotificationBarPriority()
 * @method $this withAndroidNotificationBarPriority($value)
 * @method string getExpireTime()
 * @method $this withExpireTime($value)
 * @method string getAndroidNotificationVivoChannel()
 * @method $this withAndroidNotificationVivoChannel($value)
 * @method string getIOSNotificationCategory()
 * @method string getAndroidNotificationXiaomiChannel()
 * @method $this withAndroidNotificationXiaomiChannel($value)
 * @method string getStoreOffline()
 * @method $this withStoreOffline($value)
 * @method string getSmsParams()
 * @method $this withSmsParams($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getAndroidOpenUrl()
 * @method $this withAndroidOpenUrl($value)
 * @method string getAndroidXiaoMiNotifyBody()
 * @method $this withAndroidXiaoMiNotifyBody($value)
 * @method string getIOSSubtitle()
 * @method string getIOSRemind()
 * @method string getAndroidMusic()
 * @method $this withAndroidMusic($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 * @method string getAndroidExtParameters()
 * @method $this withAndroidExtParameters($value)
 * @method string getIOSBadge()
 * @method string getIOSBadgeAutoIncrement()
 * @method string getAndroidOpenType()
 * @method $this withAndroidOpenType($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getSmsDelaySecs()
 * @method $this withSmsDelaySecs($value)
 * @method string getIOSExtParameters()
 * @method string getSmsTemplateName()
 * @method $this withSmsTemplateName($value)
 * @method string getAndroidPopupBody()
 * @method $this withAndroidPopupBody($value)
 * @method string getIOSSilentNotification()
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAndroidNotificationChannel()
 * @method $this withAndroidNotificationChannel($value)
 * @method string getAndroidRemind()
 * @method $this withAndroidRemind($value)
 * @method string getAndroidActivity()
 * @method $this withAndroidActivity($value)
 * @method string getSmsSignName()
 * @method $this withSmsSignName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 * @method string getAndroidXiaoMiActivity()
 * @method $this withAndroidXiaoMiActivity($value)
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method $this withAndroidXiaoMiNotifyTitle($value)
 */
class Push extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemindBody($value)
    {
        $this->data['IOSRemindBody'] = $value;
        $this->options['query']['iOSRemindBody'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMusic($value)
    {
        $this->data['IOSMusic'] = $value;
        $this->options['query']['iOSMusic'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSApnsEnv($value)
    {
        $this->data['IOSApnsEnv'] = $value;
        $this->options['query']['iOSApnsEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSMutableContent($value)
    {
        $this->data['IOSMutableContent'] = $value;
        $this->options['query']['iOSMutableContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSNotificationCategory($value)
    {
        $this->data['IOSNotificationCategory'] = $value;
        $this->options['query']['iOSNotificationCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSubtitle($value)
    {
        $this->data['IOSSubtitle'] = $value;
        $this->options['query']['iOSSubtitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSRemind($value)
    {
        $this->data['IOSRemind'] = $value;
        $this->options['query']['iOSRemind'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadge($value)
    {
        $this->data['IOSBadge'] = $value;
        $this->options['query']['iOSBadge'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSBadgeAutoIncrement($value)
    {
        $this->data['IOSBadgeAutoIncrement'] = $value;
        $this->options['query']['iOSBadgeAutoIncrement'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSExtParameters($value)
    {
        $this->data['IOSExtParameters'] = $value;
        $this->options['query']['iOSExtParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIOSSilentNotification($value)
    {
        $this->data['IOSSilentNotification'] = $value;
        $this->options['query']['iOSSilentNotification'] = $value;

        return $this;
    }
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushMessageToAndroid extends Rpc
{
}

/**
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushMessageToiOS extends Rpc
{
}

/**
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushNoticeToAndroid extends Rpc
{
}

/**
 * @method string getExtParameters()
 * @method $this withExtParameters($value)
 * @method string getApnsEnv()
 * @method $this withApnsEnv($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getBody()
 * @method $this withBody($value)
 * @method string getJobKey()
 * @method $this withJobKey($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class PushNoticeToiOS extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryAliases extends Rpc
{
}

/**
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getTargetValue()
 * @method $this withTargetValue($value)
 */
class QueryDeviceCount extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryDeviceInfo extends Rpc
{
}

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryDevicesByAccount extends Rpc
{
}

/**
 * @method string getAlias()
 * @method $this withAlias($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryDevicesByAlias extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class QueryDeviceStat extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class QueryPushRecords extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStatByApp extends Rpc
{
}

/**
 * @method string getMessageId()
 * @method $this withMessageId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryPushStatByMsg extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryTags extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class QueryUniqueDeviceStat extends Rpc
{
}

/**
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class RemoveTag extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getUnbindAll()
 * @method $this withUnbindAll($value)
 */
class UnbindAlias extends Rpc
{
}

/**
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class UnbindPhone extends Rpc
{
}

/**
 * @method string getKeyType()
 * @method $this withKeyType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getClientKey()
 * @method $this withClientKey($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 */
class UnbindTag extends Rpc
{
}
