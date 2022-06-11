<?php
/**
Template name: 哔哩哔哩追番页面
Author: IceCliffs (Po7mn1)
Repositories: https://github.com/icecliffs/bilibili_anime
*/
$uid = "28645589"; // 填入您的 uid
$arr = array(
    '(￣▽￣)"',
    'o(*￣▽￣*)o',
    'O(∩_∩)O',
    'U•ェ•*U',
    '(oﾟvﾟ)ノ',
    '(*^_^*)',
    '（。＾▽＾）',
    '(/▽＼)'
); // random emoji
$OvO = $arr[array_rand($arr)];
$bili=new getBili($uid);
?>
<?php get_header(); ?>
<meta name="referrer" content="never">
<meta name="referrer" content="same-origin">
<base href='https://www.bilibili.com'>
<style>
.bili_container{flex-direction:column;align-items:center;margin:0 auto 100px}.bgm_bili,.bili_container{display:flex;justify-content:center}.bgm_bili{flex-wrap:wrap;margin-top:50px}.bgm_bili .bgm_card,.bili_cardinfo{list-style:none}.bili_cardinfo{position:relative;cursor:pointer;overflow:hidden;text-overflow:ellipsis;white-space:wrap;display:-webkit-flex;box-shadow: 0 0 30px rgb(0 0 0 / 10%);flex-direction:column;margin:10px}.bili_cardinfo:hover .bili_info{transition:all .6s;opacity:1}.bili_info{opacity:0;color:#fff;padding:10px;position:absolute;line-height:18px}.bili_cardinfo .bili_img{transition:all .6s;margin:0 auto;width:150px}.bili_cardinfo:hover .bili_img{transform:scale(1.1);box-shadow: 0 0 30px rgb(0 0 0 / 10%);filter:brightness(30%)}.bgm_title{font-weight:500;font-size:15px}.bgm_des{font-size:12px}.bgm_t{color:#FFF;font-size: 55px;text-shadow: 0px 1px 4px rgb(0 0 0);}.bgm_td{display:flex;justify-content:center;flex-direction:column;align-items:center;position:relative}.anime-ava{animation:anime1 5s ease-in-out infinite;display:inline-block;margin:0 5px}@keyframes anime1{2%{-webkit-transform:translateY(1.5px) rotate(1.5deg);-moz-transform:translateY(1.5px) rotate(1.5deg);-ms-transform:translateY(1.5px) rotate(1.5deg);-o-transform:translateY(1.5px) rotate(1.5deg);transform:translateY(1.5px) rotate(1.5deg)}4%{-webkit-transform:translateY(-1.5px) rotate(-.5deg);-moz-transform:translateY(-1.5px) rotate(-.5deg);-ms-transform:translateY(-1.5px) rotate(-.5deg);-o-transform:translateY(-1.5px) rotate(-.5deg);transform:translateY(-1.5px) rotate(-.5deg)}6%{-webkit-transform:translateY(1.5px) rotate(-1.5deg);-moz-transform:translateY(1.5px) rotate(-1.5deg);-ms-transform:translateY(1.5px) rotate(-1.5deg);-o-transform:translateY(1.5px) rotate(-1.5deg);transform:translateY(1.5px) rotate(-1.5deg)}8%{-webkit-transform:translateY(-1.5px) rotate(-1.5deg);-moz-transform:translateY(-1.5px) rotate(-1.5deg);-ms-transform:translateY(-1.5px) rotate(-1.5deg);-o-transform:translateY(-1.5px) rotate(-1.5deg);transform:translateY(-1.5px) rotate(-1.5deg)}10%{-webkit-transform:translateY(2.5px) rotate(1.5deg);-moz-transform:translateY(2.5px) rotate(1.5deg);-ms-transform:translateY(2.5px) rotate(1.5deg);-o-transform:translateY(2.5px) rotate(1.5deg);transform:translateY(2.5px) rotate(1.5deg)}12%{-webkit-transform:translateY(-.5px) rotate(1.5deg);-moz-transform:translateY(-.5px) rotate(1.5deg);-ms-transform:translateY(-.5px) rotate(1.5deg);-o-transform:translateY(-.5px) rotate(1.5deg);transform:translateY(-.5px) rotate(1.5deg)}14%{-webkit-transform:translateY(-1.5px) rotate(1.5deg);-moz-transform:translateY(-1.5px) rotate(1.5deg);-ms-transform:translateY(-1.5px) rotate(1.5deg);-o-transform:translateY(-1.5px) rotate(1.5deg);transform:translateY(-1.5px) rotate(1.5deg)}16%{-webkit-transform:translateY(-.5px) rotate(-1.5deg);-moz-transform:translateY(-.5px) rotate(-1.5deg);-ms-transform:translateY(-.5px) rotate(-1.5deg);-o-transform:translateY(-.5px) rotate(-1.5deg);transform:translateY(-.5px) rotate(-1.5deg)}18%{-webkit-transform:translateY(.5px) rotate(-1.5deg);-moz-transform:translateY(.5px) rotate(-1.5deg);-ms-transform:translateY(.5px) rotate(-1.5deg);-o-transform:translateY(.5px) rotate(-1.5deg);transform:translateY(.5px) rotate(-1.5deg)}20%{-webkit-transform:translateY(-1.5px) rotate(2.5deg);-moz-transform:translateY(-1.5px) rotate(2.5deg);-ms-transform:translateY(-1.5px) rotate(2.5deg);-o-transform:translateY(-1.5px) rotate(2.5deg);transform:translateY(-1.5px) rotate(2.5deg)}22%{-webkit-transform:translateY(.5px) rotate(-1.5deg);-moz-transform:translateY(.5px) rotate(-1.5deg);-ms-transform:translateY(.5px) rotate(-1.5deg);-o-transform:translateY(.5px) rotate(-1.5deg);transform:translateY(.5px) rotate(-1.5deg)}24%{-webkit-transform:translateY(1.5px) rotate(1.5deg);-moz-transform:translateY(1.5px) rotate(1.5deg);-ms-transform:translateY(1.5px) rotate(1.5deg);-o-transform:translateY(1.5px) rotate(1.5deg);transform:translateY(1.5px) rotate(1.5deg)}26%{-webkit-transform:translateY(.5px) rotate(.5deg);-moz-transform:translateY(.5px) rotate(.5deg);-ms-transform:translateY(.5px) rotate(.5deg);-o-transform:translateY(.5px) rotate(.5deg);transform:translateY(.5px) rotate(.5deg)}28%{-webkit-transform:translateY(.5px) rotate(1.5deg);-moz-transform:translateY(.5px) rotate(1.5deg);-ms-transform:translateY(.5px) rotate(1.5deg);-o-transform:translateY(.5px) rotate(1.5deg);transform:translateY(.5px) rotate(1.5deg)}30%{-webkit-transform:translateY(-.5px) rotate(2.5deg);-moz-transform:translateY(-.5px) rotate(2.5deg);-ms-transform:translateY(-.5px) rotate(2.5deg);-o-transform:translateY(-.5px) rotate(2.5deg);transform:translateY(-.5px) rotate(2.5deg)}32%{-webkit-transform:translateY(1.5px) rotate(-.5deg);-moz-transform:translateY(1.5px) rotate(-.5deg);-ms-transform:translateY(1.5px) rotate(-.5deg);-o-transform:translateY(1.5px) rotate(-.5deg);transform:translateY(1.5px) rotate(-.5deg)}34%{-webkit-transform:translateY(1.5px) rotate(-.5deg);-moz-transform:translateY(1.5px) rotate(-.5deg);-ms-transform:translateY(1.5px) rotate(-.5deg);-o-transform:translateY(1.5px) rotate(-.5deg);transform:translateY(1.5px) rotate(-.5deg)}36%{-webkit-transform:translateY(-1.5px) rotate(2.5deg);-moz-transform:translateY(-1.5px) rotate(2.5deg);-ms-transform:translateY(-1.5px) rotate(2.5deg);-o-transform:translateY(-1.5px) rotate(2.5deg);transform:translateY(-1.5px) rotate(2.5deg)}38%{-webkit-transform:translateY(1.5px) rotate(-1.5deg);-moz-transform:translateY(1.5px) rotate(-1.5deg);-ms-transform:translateY(1.5px) rotate(-1.5deg);-o-transform:translateY(1.5px) rotate(-1.5deg);transform:translateY(1.5px) rotate(-1.5deg)}40%{-webkit-transform:translateY(-.5px) rotate(2.5deg);-moz-transform:translateY(-.5px) rotate(2.5deg);-ms-transform:translateY(-.5px) rotate(2.5deg);-o-transform:translateY(-.5px) rotate(2.5deg);transform:translateY(-.5px) rotate(2.5deg)}42%{-webkit-transform:translateY(2.5px) rotate(-1.5deg);-moz-transform:translateY(2.5px) rotate(-1.5deg);-ms-transform:translateY(2.5px) rotate(-1.5deg);-o-transform:translateY(2.5px) rotate(-1.5deg);transform:translateY(2.5px) rotate(-1.5deg)}44%{-webkit-transform:translateY(1.5px) rotate(.5deg);-moz-transform:translateY(1.5px) rotate(.5deg);-ms-transform:translateY(1.5px) rotate(.5deg);-o-transform:translateY(1.5px) rotate(.5deg);transform:translateY(1.5px) rotate(.5deg)}46%{-webkit-transform:translateY(-1.5px) rotate(2.5deg);-moz-transform:translateY(-1.5px) rotate(2.5deg);-ms-transform:translateY(-1.5px) rotate(2.5deg);-o-transform:translateY(-1.5px) rotate(2.5deg);transform:translateY(-1.5px) rotate(2.5deg)}48%{-webkit-transform:translateY(-.5px) rotate(.5deg);-moz-transform:translateY(-.5px) rotate(.5deg);-ms-transform:translateY(-.5px) rotate(.5deg);-o-transform:translateY(-.5px) rotate(.5deg);transform:translateY(-.5px) rotate(.5deg)}50%{-webkit-transform:translateY(.5px) rotate(.5deg);-moz-transform:translateY(.5px) rotate(.5deg);-ms-transform:translateY(.5px) rotate(.5deg);-o-transform:translateY(.5px) rotate(.5deg);transform:translateY(.5px) rotate(.5deg)}52%{-webkit-transform:translateY(2.5px) rotate(2.5deg);-moz-transform:translateY(2.5px) rotate(2.5deg);-ms-transform:translateY(2.5px) rotate(2.5deg);-o-transform:translateY(2.5px) rotate(2.5deg);transform:translateY(2.5px) rotate(2.5deg)}54%{-webkit-transform:translateY(-1.5px) rotate(1.5deg);-moz-transform:translateY(-1.5px) rotate(1.5deg);-ms-transform:translateY(-1.5px) rotate(1.5deg);-o-transform:translateY(-1.5px) rotate(1.5deg);transform:translateY(-1.5px) rotate(1.5deg)}56%{-webkit-transform:translateY(2.5px) rotate(2.5deg);-moz-transform:translateY(2.5px) rotate(2.5deg);-ms-transform:translateY(2.5px) rotate(2.5deg);-o-transform:translateY(2.5px) rotate(2.5deg);transform:translateY(2.5px) rotate(2.5deg)}58%{-webkit-transform:translateY(.5px) rotate(2.5deg);-moz-transform:translateY(.5px) rotate(2.5deg);-ms-transform:translateY(.5px) rotate(2.5deg);-o-transform:translateY(.5px) rotate(2.5deg);transform:translateY(.5px) rotate(2.5deg)}60%{-webkit-transform:translateY(2.5px) rotate(2.5deg);-moz-transform:translateY(2.5px) rotate(2.5deg);-ms-transform:translateY(2.5px) rotate(2.5deg);-o-transform:translateY(2.5px) rotate(2.5deg);transform:translateY(2.5px) rotate(2.5deg)}62%{-webkit-transform:translateY(-.5px) rotate(2.5deg);-moz-transform:translateY(-.5px) rotate(2.5deg);-ms-transform:translateY(-.5px) rotate(2.5deg);-o-transform:translateY(-.5px) rotate(2.5deg);transform:translateY(-.5px) rotate(2.5deg)}64%{-webkit-transform:translateY(-.5px) rotate(1.5deg);-moz-transform:translateY(-.5px) rotate(1.5deg);-ms-transform:translateY(-.5px) rotate(1.5deg);-o-transform:translateY(-.5px) rotate(1.5deg);transform:translateY(-.5px) rotate(1.5deg)}66%{-webkit-transform:translateY(1.5px) rotate(-.5deg);-moz-transform:translateY(1.5px) rotate(-.5deg);-ms-transform:translateY(1.5px) rotate(-.5deg);-o-transform:translateY(1.5px) rotate(-.5deg);transform:translateY(1.5px) rotate(-.5deg)}68%{-webkit-transform:translateY(-1.5px) rotate(-.5deg);-moz-transform:translateY(-1.5px) rotate(-.5deg);-ms-transform:translateY(-1.5px) rotate(-.5deg);-o-transform:translateY(-1.5px) rotate(-.5deg);transform:translateY(-1.5px) rotate(-.5deg)}70%{-webkit-transform:translateY(1.5px) rotate(.5deg);-moz-transform:translateY(1.5px) rotate(.5deg);-ms-transform:translateY(1.5px) rotate(.5deg);-o-transform:translateY(1.5px) rotate(.5deg);transform:translateY(1.5px) rotate(.5deg)}72%{-webkit-transform:translateY(2.5px) rotate(1.5deg);-moz-transform:translateY(2.5px) rotate(1.5deg);-ms-transform:translateY(2.5px) rotate(1.5deg);-o-transform:translateY(2.5px) rotate(1.5deg);transform:translateY(2.5px) rotate(1.5deg)}74%{-webkit-transform:translateY(-.5px) rotate(.5deg);-moz-transform:translateY(-.5px) rotate(.5deg);-ms-transform:translateY(-.5px) rotate(.5deg);-o-transform:translateY(-.5px) rotate(.5deg);transform:translateY(-.5px) rotate(.5deg)}76%{-webkit-transform:translateY(-.5px) rotate(2.5deg);-moz-transform:translateY(-.5px) rotate(2.5deg);-ms-transform:translateY(-.5px) rotate(2.5deg);-o-transform:translateY(-.5px) rotate(2.5deg);transform:translateY(-.5px) rotate(2.5deg)}78%{-webkit-transform:translateY(-.5px) rotate(1.5deg);-moz-transform:translateY(-.5px) rotate(1.5deg);-ms-transform:translateY(-.5px) rotate(1.5deg);-o-transform:translateY(-.5px) rotate(1.5deg);transform:translateY(-.5px) rotate(1.5deg)}80%{-webkit-transform:translateY(1.5px) rotate(1.5deg);-moz-transform:translateY(1.5px) rotate(1.5deg);-ms-transform:translateY(1.5px) rotate(1.5deg);-o-transform:translateY(1.5px) rotate(1.5deg);transform:translateY(1.5px) rotate(1.5deg)}82%{-webkit-transform:translateY(-.5px) rotate(.5deg);-moz-transform:translateY(-.5px) rotate(.5deg);-ms-transform:translateY(-.5px) rotate(.5deg);-o-transform:translateY(-.5px) rotate(.5deg);transform:translateY(-.5px) rotate(.5deg)}84%{-webkit-transform:translateY(1.5px) rotate(2.5deg);-moz-transform:translateY(1.5px) rotate(2.5deg);-ms-transform:translateY(1.5px) rotate(2.5deg);-o-transform:translateY(1.5px) rotate(2.5deg);transform:translateY(1.5px) rotate(2.5deg)}86%{-webkit-transform:translateY(-1.5px) rotate(-1.5deg);-moz-transform:translateY(-1.5px) rotate(-1.5deg);-ms-transform:translateY(-1.5px) rotate(-1.5deg);-o-transform:translateY(-1.5px) rotate(-1.5deg);transform:translateY(-1.5px) rotate(-1.5deg)}88%{-webkit-transform:translateY(-.5px) rotate(2.5deg);-moz-transform:translateY(-.5px) rotate(2.5deg);-ms-transform:translateY(-.5px) rotate(2.5deg);-o-transform:translateY(-.5px) rotate(2.5deg);transform:translateY(-.5px) rotate(2.5deg)}90%{-webkit-transform:translateY(2.5px) rotate(-.5deg);-moz-transform:translateY(2.5px) rotate(-.5deg);-ms-transform:translateY(2.5px) rotate(-.5deg);-o-transform:translateY(2.5px) rotate(-.5deg);transform:translateY(2.5px) rotate(-.5deg)}92%{-webkit-transform:translateY(.5px) rotate(-.5deg);-moz-transform:translateY(.5px) rotate(-.5deg);-ms-transform:translateY(.5px) rotate(-.5deg);-o-transform:translateY(.5px) rotate(-.5deg);transform:translateY(.5px) rotate(-.5deg)}94%{-webkit-transform:translateY(2.5px) rotate(.5deg);-moz-transform:translateY(2.5px) rotate(.5deg);-ms-transform:translateY(2.5px) rotate(.5deg);-o-transform:translateY(2.5px) rotate(.5deg);transform:translateY(2.5px) rotate(.5deg)}96%{-webkit-transform:translateY(-.5px) rotate(1.5deg);-moz-transform:translateY(-.5px) rotate(1.5deg);-ms-transform:translateY(-.5px) rotate(1.5deg);-o-transform:translateY(-.5px) rotate(1.5deg);transform:translateY(-.5px) rotate(1.5deg)}98%{-webkit-transform:translateY(-1.5px) rotate(-.5deg);-moz-transform:translateY(-1.5px) rotate(-.5deg);-ms-transform:translateY(-1.5px) rotate(-.5deg);-o-transform:translateY(-1.5px) rotate(-.5deg);transform:translateY(-1.5px) rotate(-.5deg)}0%,to{-webkit-transform:translate(0) rotate(0);-moz-transform:translate(0) rotate(0);-ms-transform:translate(0) rotate(0);-o-transform:translate(0) rotate(0);transform:translate(0) rotate(0)}}.waifu{position:fixed;bottom:0;z-index:20}#live2d-widget.waifu,.waifu{font-size:0;-webkit-transform:translateY(0);transform:translateY(0)}#live2d-widget.waifu{position:relative}.waifu-tips{z-index:21;opacity:0;margin:-20px 20px;padding:5px 10px;border-radius:12px;text-overflow:ellipsis;overflow:hidden;position:absolute;animation-delay:5s;animation-duration:50s;animation-iteration-count:infinite;animation-name:shake;animation-timing-function:ease-in-out}.waifu-tool{z-index:22;display:none;color:#aaa;top:60px;right:10px;position:absolute}.waifu:hover .waifu-tool{display:block}.waifu-tool span{display:block;cursor:pointer;transition:.2s}.waifu #live2d{position:relative}@keyframes shake{2%{transform:translate(.5px,-1.5px) rotate(-.5deg)}4%{transform:translate(.5px,1.5px) rotate(1.5deg)}6%{transform:translate(1.5px,1.5px) rotate(1.5deg)}8%{transform:translate(2.5px,1.5px) rotate(.5deg)}10%{transform:translate(.5px,2.5px) rotate(.5deg)}12%{transform:translate(1.5px,1.5px) rotate(.5deg)}14%{transform:translate(.5px,.5px) rotate(.5deg)}16%{transform:translate(-1.5px,-.5px) rotate(1.5deg)}18%{transform:translate(.5px,.5px) rotate(1.5deg)}20%{transform:translate(2.5px,2.5px) rotate(1.5deg)}22%{transform:translate(.5px,-1.5px) rotate(1.5deg)}24%{transform:translate(-1.5px,1.5px) rotate(-.5deg)}26%{transform:translate(1.5px,.5px) rotate(1.5deg)}28%{transform:translate(-.5px,-.5px) rotate(-.5deg)}30%{transform:translate(1.5px,-.5px) rotate(-.5deg)}32%{transform:translate(2.5px,-1.5px) rotate(1.5deg)}34%{transform:translate(2.5px,2.5px) rotate(-.5deg)}36%{transform:translate(.5px,-1.5px) rotate(.5deg)}38%{transform:translate(2.5px,-.5px) rotate(-.5deg)}40%{transform:translate(-.5px,2.5px) rotate(.5deg)}42%{transform:translate(-1.5px,2.5px) rotate(.5deg)}44%{transform:translate(-1.5px,1.5px) rotate(.5deg)}46%{transform:translate(1.5px,-.5px) rotate(-.5deg)}48%{transform:translate(2.5px,-.5px) rotate(.5deg)}50%{transform:translate(-1.5px,1.5px) rotate(.5deg)}52%{transform:translate(-.5px,1.5px) rotate(.5deg)}54%{transform:translate(-1.5px,1.5px) rotate(.5deg)}56%{transform:translate(.5px,2.5px) rotate(1.5deg)}58%{transform:translate(2.5px,2.5px) rotate(.5deg)}60%{transform:translate(2.5px,-1.5px) rotate(1.5deg)}62%{transform:translate(-1.5px,.5px) rotate(1.5deg)}64%{transform:translate(-1.5px,1.5px) rotate(1.5deg)}66%{transform:translate(.5px,2.5px) rotate(1.5deg)}68%{transform:translate(2.5px,-1.5px) rotate(1.5deg)}70%{transform:translate(2.5px,2.5px) rotate(.5deg)}72%{transform:translate(-.5px,-1.5px) rotate(1.5deg)}74%{transform:translate(-1.5px,2.5px) rotate(1.5deg)}76%{transform:translate(-1.5px,2.5px) rotate(1.5deg)}78%{transform:translate(-1.5px,2.5px) rotate(.5deg)}80%{transform:translate(-1.5px,.5px) rotate(-.5deg)}82%{transform:translate(-1.5px,.5px) rotate(-.5deg)}84%{transform:translate(-.5px,.5px) rotate(1.5deg)}86%{transform:translate(2.5px,1.5px) rotate(.5deg)}88%{transform:translate(-1.5px,.5px) rotate(1.5deg)}90%{transform:translate(-1.5px,-.5px) rotate(-.5deg)}92%{transform:translate(-1.5px,-1.5px) rotate(1.5deg)}94%{transform:translate(.5px,.5px) rotate(-.5deg)}96%{transform:translate(2.5px,-.5px) rotate(-.5deg)}98%{transform:translate(-1.5px,-1.5px) rotate(-.5deg)}0%,to{transform:translate(0) rotate(0)}}@font-face{font-family:flat-ui-icons;src:url(flat-ui-icons-regular.eot);src:url(flat-ui-icons-regular.eot?#iefix) format("embedded-opentype"),url(flat-ui-icons-regular.woff) format("woff"),url(flat-ui-icons-regular.ttf) format("truetype"),url(flat-ui-icons-regular.svg#flat-ui-icons-regular) format("svg")}[class*=fui-],[class^=fui-]{font-family:flat-ui-icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fui-cross:before{content:"\e609"}.fui-info-circle:before{content:"\e60f"}.fui-photo:before{content:"\e62a"}.fui-eye:before{content:"\e62c"}.fui-chat:before{content:"\e62d"}.fui-home:before{content:"\e62e"}.fui-user:before{content:"\e631"}.fui-say:before{content:"\e628"}.bgm_d{color: #FFF;text-shadow: 0px 1px 4px rgb(0 0 0);font-size: 22px;}
</style>
<div class="bili_container" >
     <div class="bgm_td">
          <h1 class="bgm_t">追の番</h1>
         <?php
         echo "<span class=\"bgm_d anime-ava\">当前已追 " . $bili->sum . " 部 " . $OvO . "</span>";
         ?>
     </div>
     <nav class="bgm_bili">
     <?php
        for($i=0;$i<$bili->sum/15;$i++)
        {
            echo "
                <a href=\"https://www.bilibili.com/bangumi/play/ss" . $bili->season_id[$i] . "\" target=\"_blank\">
                      <li class=\"bgm_card\">
                           <div class=\"bili_cardinfo\">
                                <img src=\"" . $bili->image_url[$i] . "\" class=\"bili_img\">
                                <div class=\"bili_info\">
                                     <p class=\"bgm_title\">" . $bili->title[$i] . "</p>
                                     <p class=\"bgm_des\">" . $bili->evaluate[$i] . "</p>
                                </div>
                           </div>
                      </li>
                </a>";
        }
    ?>
    </nav>
</div>
<?php
/**
 * Get bilibili Bangumi
 */
class getBili
{
    public $title = array();
    public $image_url = array();
    public $evaluate = array();
    public $season_id = array();
    public $sum;
    public function __construct($uid)
    {
        $this->sum = $this->getpages($uid);
        for($i = 1; $i <= (int)($this -> sum / 15); $i++)
        {
            $url = "https://api.bilibili.com/x/space/bangumi/follow/list?type=1&follow_status=0&pn=$i&ps=15&vmid=$uid";
            $referer = "Referer: https://www.bilibili.com";
            $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:2.0b13pre) Gecko/20110307 Firefox/4.0b13pre";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array($agent, $referer));
            curl_setopt($ch, CURLOPT_HEADER, false);
            $info=json_decode(curl_exec($ch),true);
            foreach ($info['data']['list'] as $data) {;
                array_push($this->title, $data['title']);
                array_push($this->image_url, str_replace('http', 'https', $data['cover']));
                array_push($this->evaluate, $data['evaluate']);
                array_push($this->season_id, $data['season_id']);
            }

        }
    }
    private function getavator($uid){
        $url = "https://api.bilibili.com/x/space/app/index?mid=$uid";
        $referer = "Referer: https://www.bilibili.com";
        $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:2.0b13pre) Gecko/20110307 Firefox/4.0b13pre";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($agent, $referer));
        $info=json_decode(curl_exec($ch),true);
        return $info['data']['info']['face'];
        curl_close($ch);
    }
    private function getpages($uid){
        $url = "https://api.bilibili.com/x/space/bangumi/follow/list?type=1&follow_status=0&vmid=$uid";
        $referer = "Referer: https://www.bilibili.com";
        $agent = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:2.0b13pre) Gecko/20110307 Firefox/4.0b13pre";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($agent, $referer));
        $info=json_decode(curl_exec($ch),true);
        return $info['data']['total'];
        curl_close($ch);
    }
}
?>
<?php get_footer(); ?>
