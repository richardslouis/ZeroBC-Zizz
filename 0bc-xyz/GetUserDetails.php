<?PHP

class OS_BR {

    private $agent = "";
    private $info = array();

    function __construct() {
        $this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;
        $this->getBrowser();
        $this->getOS();
    }

    function getBrowser() {
        $browser = array("Navigator" => "/Navigator(.*)/i",
            "Firefox" => "/Firefox(.*)/i",
            "Internet Explorer" => "/MSIE(.*)/i",
            "Google Chrome" => "/chrome(.*)/i",
            "MAXTHON" => "/MAXTHON(.*)/i",
            "Opera" => "/Opera(.*)/i",
        );
        foreach ($browser as $key => $value) {
            if (preg_match($value, $this->agent)) {
                $this->info = array_merge($this->info, array("Browser" => $key));
                $this->info = array_merge($this->info, array(
                    "Version" => $this->getVersion($key, $value, $this->agent)));
                break;
            } else {
                $this->info = array_merge($this->info, array("Browser" => "UnKnown"));
                $this->info = array_merge($this->info, array("Version" => "UnKnown"));
            }
        }
        return $this->info['Browser'];
    }

    function getOS() {
        $OS = array("Windows" => "/Windows/i",
            "Linux" => "/Linux/i",
            "Unix" => "/Unix/i",
            "Mac" => "/Mac/i"
        );

        foreach ($OS as $key => $value) {
            if (preg_match($value, $this->agent)) {
                $this->info = array_merge($this->info, array("Operating System" => $key));
                break;
            }
        }
        return $this->info['Operating System'];
    }

    function getVersion($browser, $search, $string) {
        $browser = $this->info['Browser'];
        $version = "";
        $browser = strtolower($browser);
        preg_match_all($search, $string, $match);
        switch ($browser) {
            case "firefox": $version = str_replace("/", "", $match[1][0]);
                break;

            case "internet explorer": $version = substr($match[1][0], 0, 4);
                break;

            case "opera": $version = str_replace("/", "", substr($match[1][0], 0, 5));
                break;

            case "navigator": $version = substr($match[1][0], 1, 7);
                break;

            case "maxthon": $version = str_replace(")", "", $match[1][0]);
                break;

            case "google chrome": $version = substr($match[1][0], 1, 10);
        }
        return $version;
    }

    function showInfo($switch) {
        $switch = strtolower($switch);
        switch ($switch) {
            case "browser": return $this->info['Browser'];
                break;

            case "os": return $this->info['Operating System'];
                break;

            case "version": return $this->info['Version'];
                break;

            case "all" : return array($this->info["Version"],
                    $this->info['Operating System'], $this->info['Browser']);
                break;

            default: return "Unkonw";
                break;
        }
    }

}

// using
// create an new instant of OS_BR class
$obj = new OS_BR();
// // if you want to show one by one information then try showInfo() function
// get browser
$browserName = $obj->showInfo('browser');

// get browser version
$browserVersion = $obj->showInfo('version');

// get Operating system
$operatingSystem = $obj->showInfo('os');

$ip = $_SERVER['REMOTE_ADDR'];

$isMobile = ismobile();

$referrer;
if (isset($_SERVER['HTTP_REFERER'])) {
    $referrer = $_SERVER['HTTP_REFERER'];
} else {
    $referrer = null;
}

include("getLocation.php");

/* echo "browser:" . $browserName . "<br/>" . "browser version:" . $browserVersion . "<br/>Operating System: " . $operatingSystem . "<br/>Ip:" . $ip . "<br/>isMobile: "
  . $isMobile . "<br/>" . "City:" . $city . "<br/>" . "State:" . $state . "<br/>" . "Country:" . $country . "<br/>"; */

//function to check whether request comes from mobile
function ismobile() {
    $is_mobile = '0';

    if (preg_match('/(android|up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
        $is_mobile = 1;
    }

    if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') > 0) or ( (isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
        $is_mobile = 1;
    }

    $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
    $mobile_agents = array('w3c ', 'acs-', 'alav', 'alca', 'amoi', 'andr', 'audi', 'avan', 'benq', 'bird', 'blac', 'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno', 'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-', 'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-', 'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox', 'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar', 'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-', 'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp', 'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-');

    if (in_array($mobile_ua, $mobile_agents)) {
        $is_mobile = 1;
    }

    if (isset($_SERVER['ALL_HTTP'])) {
        if (strpos(strtolower($_SERVER['ALL_HTTP']), 'OperaMini') > 0) {
            $is_mobile = 1;
        }
    }

    if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') > 0) {
        $is_mobile = 0;
    }

    return $is_mobile;
}

?>