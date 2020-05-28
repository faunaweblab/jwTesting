<!DOCTYPE html><html><head>    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">    <meta content="utf-8" http-equiv="encoding">    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    <script src="jw_api.js"></script>    <title>NexPlayer</title>    <style type="text/css">        #player_container {            width: 90%;            margin: auto;            padding-top: 50.625%; /* 16:9 Aspect Ratio 56.25 * 0.9 */            position: relative;        }        @media (min-width: 75rem) {            #player_container {                width: 50%;                padding-top: 28.125%; /* 16:9 Aspect Ratio 56.25 * 0.5 */            }        }        h1 {            text-align: center;        }        #player {            background-color: black;            position: absolute;            top: 0px;            width: 100%;            height: 100%;        }        #warning {            background-color: red;            text-align: center;            display: none;        }    </style></head><body><h1>NexPlayer HTML5</h1><div id="warning">    <h1>Unsupported protocol</h1>    <h3>Loading HTML using the file protocol can't be supported. Please use a <a href="https://nexplayer.github.io/getting_started.html#explanation">server</a> (HTTP/HTTPS protocol).</h3></div><div id="player_container">    <div id="player"></div></div><button onclick="click1()">1</button><button onclick="click2()">2</button><br><button onclick="generateNounce()">nounce</button><button onclick="getTimestamp()">Time</button>    <input type="text" id="text" name="text" placeholder="Enter Name"><button onclick="encodeText()">Encode</button><p id="encodedText"></p><script src="https://code.jquery.com/jquery-3.4.1.min.js"        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script><script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script><script src="https://nexplayer.nexplayersdk.com/latest/nexplayer.js"></script><script type="text/javascript">    nexplayer.Setup({        key: "5ec7a89825fe5b1814a17852",        div: document.getElementById('player'),        src: 'https://cdn3.wowza.com/1/Q05ETmhPZUtON0pu/RGVMWWc0/hls/live/playlist.m3u8'//        type_360: 'equirectangular'    });</script><script>    function click1() {        nexplayer.Setup({            key: "5ec7a89825fe5b1814a17852",            div: document.getElementById('player'),            // src: 'https://faunadigital.tk/mediarepo/card.mp4',            src: 'https://cdn3.wowza.com/1/Q05ETmhPZUtON0pu/RGVMWWc0/hls/live/playlist.m3u8'            //type_360: 'equirectangular'        });    }    function click2() {        nexplayer.Setup({            key: "5ec7a89825fe5b1814a17852",            div: document.getElementById('player'),            src: 'https://faunadigital.tk/mediarepo/card.mp4'                    });    }</script></body></html>