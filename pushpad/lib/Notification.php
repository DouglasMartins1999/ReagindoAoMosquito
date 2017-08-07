<?php

namespace Pushpad;

class Notification {
  public $body;
  public $title;
  public $target_url;
  public $icon_url;
  public $ttl;

  function __construct($options = array()) {
    if (isset($options['body'])) $this->body = $options['body'];
    if (isset($options['title'])) $this->title = $options['title'];
    if (isset($options['target_url'])) $this->target_url = $options['target_url'];
    if (isset($options['icon_url'])) $this->icon_url = $options['icon_url'];
    if (isset($options['ttl'])) $this->ttl = $options['ttl'];
  }

  public function broadcast($options = array()) {
    return $this->deliver($this->req_body(null, $options['tags']), $options);
  }

  private function deliver($req_body, $options = array()) {
    $project_id = isset($options['project_id']) ? $options['project_id'] : Pushpad::$project_id;
    $endpoint = "https://pushpad.xyz/projects/$project_id/notifications";
    $req = curl_init($endpoint);
    curl_setopt($req, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($req, CURLOPT_POSTFIELDS, $req_body);
    curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($req, CURLOPT_HTTPHEADER, $this->req_headers());
    $res = curl_exec($req);
    $status_code = curl_getinfo($req, CURLINFO_HTTP_CODE);
    curl_close($req);
	$aryeturn["id"] = intval(substr($res,6,7));
	$aryeturn["scheduled"] = 2;
    return $aryeturn;
  }

  private function req_headers() {
    return array(
      'Authorization: Token token="' . Pushpad::$auth_token . '"',
      'Content-Type: application/json;charset=UTF-8',
      'Accept: application/json'
    );
  }

  private function req_body($uids = null, $tags = null) {
    $body = array(
      'notification' => array(
        'body' => $this->body,
        'title' => $this->title,
        'target_url' => $this->target_url,
        'icon_url' => $this->icon_url,
        'ttl' => $this->ttl
      )
    );
    if (isset($uids)) $body['uids'] = $uids;
    if (isset($tags)) $body['tags'] = $tags;
	$json = '{"notification":{"body":"'.$body["notification"]["body"].'","title":"'.$body["notification"]["title"].'","target_url":"'.$body["notification"]["target_url"].'","icon_url":null,"ttl":null}}';
    return $json;
  }
}
