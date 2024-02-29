<div style='background-color:#AFF'><h3>Encryption</h3><p><strong>PHP Version</strong></p><pre>8.0.16</pre><hr /><p><strong>Cryptor</strong></p><pre>OpenSSL</pre><hr /><p><strong>Cipher</strong></p><pre>bf-cbc</pre><hr /><p><strong>mb_internal_encoding</strong></p><pre>UTF-8</pre><hr /><div style='background-color:#AAA'><h3>IP Validation</h3><p><strong>$headers from get_ip()</strong></p><pre>Array
(
    [TE] => deflate,gzip;q=0.3
    [Connection] => TE, close
    [Host] => serendipitywellnesstn.com
    [User-Agent] => SiteLock (Module: SmartDB; Source: https://www.sitelock.com/; Version: 1.0)
    [Incap-Proxy-1444] => OK
    [Incap-Client-IP] => 184.154.139.53
    [X-HTTPS] => 1
    [Content-Length] => 0
)
</pre><hr /><p><strong>IP Check started in</strong></p><pre>/home2/visitlou/public_html/serendipitywellnesstn/tmp/ecbaf3fbf04e39328ef5488cdb5e21cc.php</pre><hr /><p><strong>IP Check started at</strong></p><pre>2022-04-12T00:27:12-04:00</pre><hr /><p><strong>The following IPs will be tested</strong></p><pre>Array
(
    [0] => 184.154.139.53
)
</pre><hr /><p><strong>mapi_post URL</strong></p><pre>https://mapi.sitelock.com/v3/connect/</pre><hr /><p><strong>mapi_post_request</strong></p><pre>Array
(
    [pluginVersion] => 100.0.0
    [apiTargetVersion] => 3.0.0
    [token] => 56c08d33f2a68f5b57ce7cb5a4f62e68
    [requests] => Array
        (
            [id] => c3e3c1452e61de22dc32ddbca7b72cbb-16497376320986
            [action] => validate_ip
            [params] => Array
                (
                    [site_id] => 30636104
                    [ip] => 184.154.139.53
                )

        )

)
</pre><hr /><p><strong>mapi_request</strong></p><pre><textarea style="width:99%;height:100px;">eyJwbHVnaW5WZXJzaW9uIjoiMTAwLjAuMCIsImFwaVRhcmdldFZlcnNpb24iOiIzLjAuMCIsInRva2VuIjoiNTZjMDhkMzNmMmE2OGY1YjU3Y2U3Y2I1YTRmNjJlNjgiLCJyZXF1ZXN0cyI6eyJpZCI6ImMzZTNjMTQ1MmU2MWRlMjJkYzMyZGRiY2E3YjcyY2JiLTE2NDk3Mzc2MzIwOTg2IiwiYWN0aW9uIjoidmFsaWRhdGVfaXAiLCJwYXJhbXMiOnsic2l0ZV9pZCI6IjMwNjM2MTA0IiwiaXAiOiIxODQuMTU0LjEzOS41MyJ9fX0=</textarea></pre><hr /><p><strong>curl_getinfo()</strong></p><pre>Array
(
    [url] => https://mapi.sitelock.com/v3/connect/
    [content_type] => text/html; charset=UTF-8
    [http_code] => 200
    [header_size] => 756
    [request_size] => 462
    [filetime] => -1
    [ssl_verify_result] => 19
    [redirect_count] => 0
    [total_time] => 0.279063
    [namelookup_time] => 0.000489
    [connect_time] => 0.020614
    [pretransfer_time] => 0.044926
    [size_upload] => 324
    [size_download] => 512
    [speed_download] => 1834
    [speed_upload] => 1161
    [download_content_length] => -1
    [upload_content_length] => 324
    [starttransfer_time] => 0.278924
    [redirect_time] => 0
    [redirect_url] => 
    [primary_ip] => 45.60.12.54
    [certinfo] => Array
        (
        )

    [primary_port] => 443
    [local_ip] => 70.40.220.70
    [local_port] => 12156
    [http_version] => 2
    [protocol] => 2
    [ssl_verifyresult] => 0
    [scheme] => HTTPS
    [appconnect_time_us] => 44805
    [connect_time_us] => 20614
    [namelookup_time_us] => 489
    [pretransfer_time_us] => 44926
    [redirect_time_us] => 0
    [starttransfer_time_us] => 278924
    [total_time_us] => 279063
)
</pre><hr /><p><strong>mapi_response</strong></p><pre><textarea style="width:99%;height:100px;">{"apiVersion":"3.0.1","status":"ok","globalResponse":null,"banner":null,"forceLogout":false,"newToken":null,"now":1649737632,"responses":[{"id":"c3e3c1452e61de22dc32ddbca7b72cbb-16497376320986","data":{"ip_address":"184.154.139.53","valid":true},"raw_api_url":"https:\/\/api.sitelock.com\/v1\/56c08d33f2a68f5b57ce7cb5a4f62e68\/dbscan\/checkip","raw_response":{"@attributes":{"version":"1.1","encoding":"UTF-8"},"checkIP":{"status":"1"}},"raw_request":{"site_id":"30636104","ip":"184.154.139.53"},"status":"ok"}]}</textarea></pre><hr /><p><strong>Detected memory_limit</strong></p><pre>512M</pre><hr /><p><strong>Chunk Size</strong></p><pre>10485760</pre><hr /><div style='background-color:#AAF'><h3>CheckFeatures</h3><p><strong>Feature Code</strong></p><pre>db_scan</pre><hr /><p><strong>_POST</strong></p><pre>Array
(
)
</pre><hr /><p><strong>_GET (raw)</strong></p><pre></pre><hr /><p><strong>mapi_post URL</strong></p><pre>https://mapi.sitelock.com/v3/connect/</pre><hr /><p><strong>mapi_post_request</strong></p><pre>Array
(
    [pluginVersion] => 100.0.0
    [apiTargetVersion] => 3.0.0
    [token] => 56c08d33f2a68f5b57ce7cb5a4f62e68
    [requests] => Array
        (
            [id] => 9edd8a0f1231476554724717a0855f68-16497376323788
            [action] => s3_init
            [params] => Array
                (
                    [site_id] => 30636104
                    [feature_code] => db_scan
                    [ciphers] => Array
                        (
                            [0] => aes-128-cbc
                            [1] => aes-128-cbc-hmac-sha1
                            [2] => aes-128-cbc-hmac-sha256
                            [3] => aes-128-ccm
                            [4] => aes-128-cfb
                            [5] => aes-128-cfb1
                            [6] => aes-128-cfb8
                            [7] => aes-128-ctr
                            [8] => aes-128-ecb
                            [9] => aes-128-gcm
                            [10] => aes-128-ocb
                            [11] => aes-128-ofb
                            [12] => aes-128-xts
                            [13] => aes-192-cbc
                            [14] => aes-192-ccm
                            [15] => aes-192-cfb
                            [16] => aes-192-cfb1
                            [17] => aes-192-cfb8
                            [18] => aes-192-ctr
                            [19] => aes-192-ecb
                            [20] => aes-192-gcm
                            [21] => aes-192-ocb
                            [22] => aes-192-ofb
                            [23] => aes-256-cbc
                            [24] => aes-256-cbc-hmac-sha1
                            [25] => aes-256-cbc-hmac-sha256
                            [26] => aes-256-ccm
                            [27] => aes-256-cfb
                            [28] => aes-256-cfb1
                            [29] => aes-256-cfb8
                            [30] => aes-256-ctr
                            [31] => aes-256-ecb
                            [32] => aes-256-gcm
                            [33] => aes-256-ocb
                            [34] => aes-256-ofb
                            [35] => aes-256-xts
                            [36] => aes128
                            [37] => aes128-wrap
                            [38] => aes192
                            [39] => aes192-wrap
                            [40] => aes256
                            [41] => aes256-wrap
                            [42] => aria-128-cbc
                            [43] => aria-128-ccm
                            [44] => aria-128-cfb
                            [45] => aria-128-cfb1
                            [46] => aria-128-cfb8
                            [47] => aria-128-ctr
                            [48] => aria-128-ecb
                            [49] => aria-128-gcm
                            [50] => aria-128-ofb
                            [51] => aria-192-cbc
                            [52] => aria-192-ccm
                            [53] => aria-192-cfb
                            [54] => aria-192-cfb1
                            [55] => aria-192-cfb8
                            [56] => aria-192-ctr
                            [57] => aria-192-ecb
                            [58] => aria-192-gcm
                            [59] => aria-192-ofb
                            [60] => aria-256-cbc
                            [61] => aria-256-ccm
                            [62] => aria-256-cfb
                            [63] => aria-256-cfb1
                            [64] => aria-256-cfb8
                            [65] => aria-256-ctr
                            [66] => aria-256-ecb
                            [67] => aria-256-gcm
                            [68] => aria-256-ofb
                            [69] => aria128
                            [70] => aria192
                            [71] => aria256
                            [72] => bf
                            [73] => bf-cbc
                            [74] => bf-cfb
                            [75] => bf-ecb
                            [76] => bf-ofb
                            [77] => blowfish
                            [78] => camellia-128-cbc
                            [79] => camellia-128-cfb
                            [80] => camellia-128-cfb1
                            [81] => camellia-128-cfb8
                            [82] => camellia-128-ctr
                            [83] => camellia-128-ecb
                            [84] => camellia-128-ofb
                            [85] => camellia-192-cbc
                            [86] => camellia-192-cfb
                            [87] => camellia-192-cfb1
                            [88] => camellia-192-cfb8
                            [89] => camellia-192-ctr
                            [90] => camellia-192-ecb
                            [91] => camellia-192-ofb
                            [92] => camellia-256-cbc
                            [93] => camellia-256-cfb
                            [94] => camellia-256-cfb1
                            [95] => camellia-256-cfb8
                            [96] => camellia-256-ctr
                            [97] => camellia-256-ecb
                            [98] => camellia-256-ofb
                            [99] => camellia128
                            [100] => camellia192
                            [101] => camellia256
                            [102] => cast
                            [103] => cast-cbc
                            [104] => cast5-cbc
                            [105] => cast5-cfb
                            [106] => cast5-ecb
                            [107] => cast5-ofb
                            [108] => chacha20
                            [109] => chacha20-poly1305
                            [110] => des
                            [111] => des-cbc
                            [112] => des-cfb
                            [113] => des-cfb1
                            [114] => des-cfb8
                            [115] => des-ecb
                            [116] => des-ede
                            [117] => des-ede-cbc
                            [118] => des-ede-cfb
                            [119] => des-ede-ecb
                            [120] => des-ede-ofb
                            [121] => des-ede3
                            [122] => des-ede3-cbc
                            [123] => des-ede3-cfb
                            [124] => des-ede3-cfb1
                            [125] => des-ede3-cfb8
                            [126] => des-ede3-ecb
                            [127] => des-ede3-ofb
                            [128] => des-ofb
                            [129] => des3
                            [130] => des3-wrap
                            [131] => desx
                            [132] => desx-cbc
                            [133] => id-aes128-CCM
                            [134] => id-aes128-GCM
                            [135] => id-aes128-wrap
                            [136] => id-aes128-wrap-pad
                            [137] => id-aes192-CCM
                            [138] => id-aes192-GCM
                            [139] => id-aes192-wrap
                            [140] => id-aes192-wrap-pad
                            [141] => id-aes256-CCM
                            [142] => id-aes256-GCM
                            [143] => id-aes256-wrap
                            [144] => id-aes256-wrap-pad
                            [145] => id-smime-alg-CMS3DESwrap
                            [146] => idea
                            [147] => idea-cbc
                            [148] => idea-cfb
                            [149] => idea-ecb
                            [150] => idea-ofb
                            [151] => rc2
                            [152] => rc2-128
                            [153] => rc2-40
                            [154] => rc2-40-cbc
                            [155] => rc2-64
                            [156] => rc2-64-cbc
                            [157] => rc2-cbc
                            [158] => rc2-cfb
                            [159] => rc2-ecb
                            [160] => rc2-ofb
                            [161] => rc4
                            [162] => rc4-40
                            [163] => rc4-hmac-md5
                            [164] => seed
                            [165] => seed-cbc
                            [166] => seed-cfb
                            [167] => seed-ecb
                            [168] => seed-ofb
                            [169] => sm4
                            [170] => sm4-cbc
                            [171] => sm4-cfb
                            [172] => sm4-ctr
                            [173] => sm4-ecb
                            [174] => sm4-ofb
                        )

                )

        )

)
</pre><hr /><p><strong>mapi_request</strong></p><pre><textarea style="width:99%;height:100px;">eyJwbHVnaW5WZXJzaW9uIjoiMTAwLjAuMCIsImFwaVRhcmdldFZlcnNpb24iOiIzLjAuMCIsInRva2VuIjoiNTZjMDhkMzNmMmE2OGY1YjU3Y2U3Y2I1YTRmNjJlNjgiLCJyZXF1ZXN0cyI6eyJpZCI6IjllZGQ4YTBmMTIzMTQ3NjU1NDcyNDcxN2EwODU1ZjY4LTE2NDk3Mzc2MzIzNzg4IiwiYWN0aW9uIjoiczNfaW5pdCIsInBhcmFtcyI6eyJzaXRlX2lkIjoiMzA2MzYxMDQiLCJmZWF0dXJlX2NvZGUiOiJkYl9zY2FuIiwiY2lwaGVycyI6WyJhZXMtMTI4LWNiYyIsImFlcy0xMjgtY2JjLWhtYWMtc2hhMSIsImFlcy0xMjgtY2JjLWhtYWMtc2hhMjU2IiwiYWVzLTEyOC1jY20iLCJhZXMtMTI4LWNmYiIsImFlcy0xMjgtY2ZiMSIsImFlcy0xMjgtY2ZiOCIsImFlcy0xMjgtY3RyIiwiYWVzLTEyOC1lY2IiLCJhZXMtMTI4LWdjbSIsImFlcy0xMjgtb2NiIiwiYWVzLTEyOC1vZmIiLCJhZXMtMTI4LXh0cyIsImFlcy0xOTItY2JjIiwiYWVzLTE5Mi1jY20iLCJhZXMtMTkyLWNmYiIsImFlcy0xOTItY2ZiMSIsImFlcy0xOTItY2ZiOCIsImFlcy0xOTItY3RyIiwiYWVzLTE5Mi1lY2IiLCJhZXMtMTkyLWdjbSIsImFlcy0xOTItb2NiIiwiYWVzLTE5Mi1vZmIiLCJhZXMtMjU2LWNiYyIsImFlcy0yNTYtY2JjLWhtYWMtc2hhMSIsImFlcy0yNTYtY2JjLWhtYWMtc2hhMjU2IiwiYWVzLTI1Ni1jY20iLCJhZXMtMjU2LWNmYiIsImFlcy0yNTYtY2ZiMSIsImFlcy0yNTYtY2ZiOCIsImFlcy0yNTYtY3RyIiwiYWVzLTI1Ni1lY2IiLCJhZXMtMjU2LWdjbSIsImFlcy0yNTYtb2NiIiwiYWVzLTI1Ni1vZmIiLCJhZXMtMjU2LXh0cyIsImFlczEyOCIsImFlczEyOC13cmFwIiwiYWVzMTkyIiwiYWVzMTkyLXdyYXAiLCJhZXMyNTYiLCJhZXMyNTYtd3JhcCIsImFyaWEtMTI4LWNiYyIsImFyaWEtMTI4LWNjbSIsImFyaWEtMTI4LWNmYiIsImFyaWEtMTI4LWNmYjEiLCJhcmlhLTEyOC1jZmI4IiwiYXJpYS0xMjgtY3RyIiwiYXJpYS0xMjgtZWNiIiwiYXJpYS0xMjgtZ2NtIiwiYXJpYS0xMjgtb2ZiIiwiYXJpYS0xOTItY2JjIiwiYXJpYS0xOTItY2NtIiwiYXJpYS0xOTItY2ZiIiwiYXJpYS0xOTItY2ZiMSIsImFyaWEtMTkyLWNmYjgiLCJhcmlhLTE5Mi1jdHIiLCJhcmlhLTE5Mi1lY2IiLCJhcmlhLTE5Mi1nY20iLCJhcmlhLTE5Mi1vZmIiLCJhcmlhLTI1Ni1jYmMiLCJhcmlhLTI1Ni1jY20iLCJhcmlhLTI1Ni1jZmIiLCJhcmlhLTI1Ni1jZmIxIiwiYXJpYS0yNTYtY2ZiOCIsImFyaWEtMjU2LWN0ciIsImFyaWEtMjU2LWVjYiIsImFyaWEtMjU2LWdjbSIsImFyaWEtMjU2LW9mYiIsImFyaWExMjgiLCJhcmlhMTkyIiwiYXJpYTI1NiIsImJmIiwiYmYtY2JjIiwiYmYtY2ZiIiwiYmYtZWNiIiwiYmYtb2ZiIiwiYmxvd2Zpc2giLCJjYW1lbGxpYS0xMjgtY2JjIiwiY2FtZWxsaWEtMTI4LWNmYiIsImNhbWVsbGlhLTEyOC1jZmIxIiwiY2FtZWxsaWEtMTI4LWNmYjgiLCJjYW1lbGxpYS0xMjgtY3RyIiwiY2FtZWxsaWEtMTI4LWVjYiIsImNhbWVsbGlhLTEyOC1vZmIiLCJjYW1lbGxpYS0xOTItY2JjIiwiY2FtZWxsaWEtMTkyLWNmYiIsImNhbWVsbGlhLTE5Mi1jZmIxIiwiY2FtZWxsaWEtMTkyLWNmYjgiLCJjYW1lbGxpYS0xOTItY3RyIiwiY2FtZWxsaWEtMTkyLWVjYiIsImNhbWVsbGlhLTE5Mi1vZmIiLCJjYW1lbGxpYS0yNTYtY2JjIiwiY2FtZWxsaWEtMjU2LWNmYiIsImNhbWVsbGlhLTI1Ni1jZmIxIiwiY2FtZWxsaWEtMjU2LWNmYjgiLCJjYW1lbGxpYS0yNTYtY3RyIiwiY2FtZWxsaWEtMjU2LWVjYiIsImNhbWVsbGlhLTI1Ni1vZmIiLCJjYW1lbGxpYTEyOCIsImNhbWVsbGlhMTkyIiwiY2FtZWxsaWEyNTYiLCJjYXN0IiwiY2FzdC1jYmMiLCJjYXN0NS1jYmMiLCJjYXN0NS1jZmIiLCJjYXN0NS1lY2IiLCJjYXN0NS1vZmIiLCJjaGFjaGEyMCIsImNoYWNoYTIwLXBvbHkxMzA1IiwiZGVzIiwiZGVzLWNiYyIsImRlcy1jZmIiLCJkZXMtY2ZiMSIsImRlcy1jZmI4IiwiZGVzLWVjYiIsImRlcy1lZGUiLCJkZXMtZWRlLWNiYyIsImRlcy1lZGUtY2ZiIiwiZGVzLWVkZS1lY2IiLCJkZXMtZWRlLW9mYiIsImRlcy1lZGUzIiwiZGVzLWVkZTMtY2JjIiwiZGVzLWVkZTMtY2ZiIiwiZGVzLWVkZTMtY2ZiMSIsImRlcy1lZGUzLWNmYjgiLCJkZXMtZWRlMy1lY2IiLCJkZXMtZWRlMy1vZmIiLCJkZXMtb2ZiIiwiZGVzMyIsImRlczMtd3JhcCIsImRlc3giLCJkZXN4LWNiYyIsImlkLWFlczEyOC1DQ00iLCJpZC1hZXMxMjgtR0NNIiwiaWQtYWVzMTI4LXdyYXAiLCJpZC1hZXMxMjgtd3JhcC1wYWQiLCJpZC1hZXMxOTItQ0NNIiwiaWQtYWVzMTkyLUdDTSIsImlkLWFlczE5Mi13cmFwIiwiaWQtYWVzMTkyLXdyYXAtcGFkIiwiaWQtYWVzMjU2LUNDTSIsImlkLWFlczI1Ni1HQ00iLCJpZC1hZXMyNTYtd3JhcCIsImlkLWFlczI1Ni13cmFwLXBhZCIsImlkLXNtaW1lLWFsZy1DTVMzREVTd3JhcCIsImlkZWEiLCJpZGVhLWNiYyIsImlkZWEtY2ZiIiwiaWRlYS1lY2IiLCJpZGVhLW9mYiIsInJjMiIsInJjMi0xMjgiLCJyYzItNDAiLCJyYzItNDAtY2JjIiwicmMyLTY0IiwicmMyLTY0LWNiYyIsInJjMi1jYmMiLCJyYzItY2ZiIiwicmMyLWVjYiIsInJjMi1vZmIiLCJyYzQiLCJyYzQtNDAiLCJyYzQtaG1hYy1tZDUiLCJzZWVkIiwic2VlZC1jYmMiLCJzZWVkLWNmYiIsInNlZWQtZWNiIiwic2VlZC1vZmIiLCJzbTQiLCJzbTQtY2JjIiwic200LWNmYiIsInNtNC1jdHIiLCJzbTQtZWNiIiwic200LW9mYiJdfX19</textarea></pre><hr /><p><strong>curl_getinfo()</strong></p><pre>Array
(
    [url] => https://mapi.sitelock.com/v3/connect/
    [content_type] => text/html; charset=UTF-8
    [http_code] => 200
    [header_size] => 757
    [request_size] => 3755
    [filetime] => -1
    [ssl_verify_result] => 19
    [redirect_count] => 0
    [total_time] => 0.297901
    [namelookup_time] => 0.000229
    [connect_time] => 0.020217
    [pretransfer_time] => 0.042458
    [size_upload] => 3616
    [size_download] => 7368
    [speed_download] => 24733
    [speed_upload] => 12138
    [download_content_length] => -1
    [upload_content_length] => 3616
    [starttransfer_time] => 0.297597
    [redirect_time] => 0
    [redirect_url] => 
    [primary_ip] => 45.60.12.54
    [certinfo] => Array
        (
        )

    [primary_port] => 443
    [local_ip] => 70.40.220.70
    [local_port] => 12160
    [http_version] => 2
    [protocol] => 2
    [ssl_verifyresult] => 0
    [scheme] => HTTPS
    [appconnect_time_us] => 42407
    [connect_time_us] => 20217
    [namelookup_time_us] => 229
    [pretransfer_time_us] => 42458
    [redirect_time_us] => 0
    [starttransfer_time_us] => 297597
    [total_time_us] => 297901
)
</pre><hr /><p><strong>mapi_response</strong></p><pre><textarea style="width:99%;height:100px;">{"apiVersion":"3.0.1","status":"ok","globalResponse":null,"banner":null,"forceLogout":false,"newToken":null,"now":1649737632,"responses":[{"id":"9edd8a0f1231476554724717a0855f68-16497376323788","data":{"status":"ok","site_id":"30636104","queue_id":"3051431","cipher":"blowfish","cipher_key":"e86073e1a629fecc38e8757b693f2533d2173d4b7cd9fffb9be6353c","cipher_iv":"%B9%96%EF%FA%FC%C9%BB%A9"},"raw_api_url":"https:\/\/api.sitelock.com\/v1\/56c08d33f2a68f5b57ce7cb5a4f62e68\/dbscan\/init","raw_response":{"@attributes":{"version":"1.1","encoding":"UTF-8"},"dbscan":{"cipher":"blowfish","cipher_iv":"uZbv+vzJu6k=","cipher_key":"e86073e1a629fecc38e8757b693f2533d2173d4b7cd9fffb9be6353c","queue_id":"3051431","status":"ok"}},"raw_request":"<xml>\n  <dbscan site_id=\"30636104\" feature_code=\"db_scan\" client_id=\"\">\n    <ciphers>\n      <cipher>aes-128-cbc<\/cipher>\n      <cipher>aes-128-cbc-hmac-sha1<\/cipher>\n      <cipher>aes-128-cbc-hmac-sha256<\/cipher>\n      <cipher>aes-128-ccm<\/cipher>\n      <cipher>aes-128-cfb<\/cipher>\n      <cipher>aes-128-cfb1<\/cipher>\n      <cipher>aes-128-cfb8<\/cipher>\n      <cipher>aes-128-ctr<\/cipher>\n      <cipher>aes-128-ecb<\/cipher>\n      <cipher>aes-128-gcm<\/cipher>\n      <cipher>aes-128-ocb<\/cipher>\n      <cipher>aes-128-ofb<\/cipher>\n      <cipher>aes-128-xts<\/cipher>\n      <cipher>aes-192-cbc<\/cipher>\n      <cipher>aes-192-ccm<\/cipher>\n      <cipher>aes-192-cfb<\/cipher>\n      <cipher>aes-192-cfb1<\/cipher>\n      <cipher>aes-192-cfb8<\/cipher>\n      <cipher>aes-192-ctr<\/cipher>\n      <cipher>aes-192-ecb<\/cipher>\n      <cipher>aes-192-gcm<\/cipher>\n      <cipher>aes-192-ocb<\/cipher>\n      <cipher>aes-192-ofb<\/cipher>\n      <cipher>aes-256-cbc<\/cipher>\n      <cipher>aes-256-cbc-hmac-sha1<\/cipher>\n      <cipher>aes-256-cbc-hmac-sha256<\/cipher>\n      <cipher>aes-256-ccm<\/cipher>\n      <cipher>aes-256-cfb<\/cipher>\n      <cipher>aes-256-cfb1<\/cipher>\n      <cipher>aes-256-cfb8<\/cipher>\n      <cipher>aes-256-ctr<\/cipher>\n      <cipher>aes-256-ecb<\/cipher>\n      <cipher>aes-256-gcm<\/cipher>\n      <cipher>aes-256-ocb<\/cipher>\n      <cipher>aes-256-ofb<\/cipher>\n      <cipher>aes-256-xts<\/cipher>\n      <cipher>aes128<\/cipher>\n      <cipher>aes128-wrap<\/cipher>\n      <cipher>aes192<\/cipher>\n      <cipher>aes192-wrap<\/cipher>\n      <cipher>aes256<\/cipher>\n      <cipher>aes256-wrap<\/cipher>\n      <cipher>aria-128-cbc<\/cipher>\n      <cipher>aria-128-ccm<\/cipher>\n      <cipher>aria-128-cfb<\/cipher>\n      <cipher>aria-128-cfb1<\/cipher>\n      <cipher>aria-128-cfb8<\/cipher>\n      <cipher>aria-128-ctr<\/cipher>\n      <cipher>aria-128-ecb<\/cipher>\n      <cipher>aria-128-gcm<\/cipher>\n      <cipher>aria-128-ofb<\/cipher>\n      <cipher>aria-192-cbc<\/cipher>\n      <cipher>aria-192-ccm<\/cipher>\n      <cipher>aria-192-cfb<\/cipher>\n      <cipher>aria-192-cfb1<\/cipher>\n      <cipher>aria-192-cfb8<\/cipher>\n      <cipher>aria-192-ctr<\/cipher>\n      <cipher>aria-192-ecb<\/cipher>\n      <cipher>aria-192-gcm<\/cipher>\n      <cipher>aria-192-ofb<\/cipher>\n      <cipher>aria-256-cbc<\/cipher>\n      <cipher>aria-256-ccm<\/cipher>\n      <cipher>aria-256-cfb<\/cipher>\n      <cipher>aria-256-cfb1<\/cipher>\n      <cipher>aria-256-cfb8<\/cipher>\n      <cipher>aria-256-ctr<\/cipher>\n      <cipher>aria-256-ecb<\/cipher>\n      <cipher>aria-256-gcm<\/cipher>\n      <cipher>aria-256-ofb<\/cipher>\n      <cipher>aria128<\/cipher>\n      <cipher>aria192<\/cipher>\n      <cipher>aria256<\/cipher>\n      <cipher>bf<\/cipher>\n      <cipher>bf-cbc<\/cipher>\n      <cipher>bf-cfb<\/cipher>\n      <cipher>bf-ecb<\/cipher>\n      <cipher>bf-ofb<\/cipher>\n      <cipher>blowfish<\/cipher>\n      <cipher>camellia-128-cbc<\/cipher>\n      <cipher>camellia-128-cfb<\/cipher>\n      <cipher>camellia-128-cfb1<\/cipher>\n      <cipher>camellia-128-cfb8<\/cipher>\n      <cipher>camellia-128-ctr<\/cipher>\n      <cipher>camellia-128-ecb<\/cipher>\n      <cipher>camellia-128-ofb<\/cipher>\n      <cipher>camellia-192-cbc<\/cipher>\n      <cipher>camellia-192-cfb<\/cipher>\n      <cipher>camellia-192-cfb1<\/cipher>\n      <cipher>camellia-192-cfb8<\/cipher>\n      <cipher>camellia-192-ctr<\/cipher>\n      <cipher>camellia-192-ecb<\/cipher>\n      <cipher>camellia-192-ofb<\/cipher>\n      <cipher>camellia-256-cbc<\/cipher>\n      <cipher>camellia-256-cfb<\/cipher>\n      <cipher>camellia-256-cfb1<\/cipher>\n      <cipher>camellia-256-cfb8<\/cipher>\n      <cipher>camellia-256-ctr<\/cipher>\n      <cipher>camellia-256-ecb<\/cipher>\n      <cipher>camellia-256-ofb<\/cipher>\n      <cipher>camellia128<\/cipher>\n      <cipher>camellia192<\/cipher>\n      <cipher>camellia256<\/cipher>\n      <cipher>cast<\/cipher>\n      <cipher>cast-cbc<\/cipher>\n      <cipher>cast5-cbc<\/cipher>\n      <cipher>cast5-cfb<\/cipher>\n      <cipher>cast5-ecb<\/cipher>\n      <cipher>cast5-ofb<\/cipher>\n      <cipher>chacha20<\/cipher>\n      <cipher>chacha20-poly1305<\/cipher>\n      <cipher>des<\/cipher>\n      <cipher>des-cbc<\/cipher>\n      <cipher>des-cfb<\/cipher>\n      <cipher>des-cfb1<\/cipher>\n      <cipher>des-cfb8<\/cipher>\n      <cipher>des-ecb<\/cipher>\n      <cipher>des-ede<\/cipher>\n      <cipher>des-ede-cbc<\/cipher>\n      <cipher>des-ede-cfb<\/cipher>\n      <cipher>des-ede-ecb<\/cipher>\n      <cipher>des-ede-ofb<\/cipher>\n      <cipher>des-ede3<\/cipher>\n      <cipher>des-ede3-cbc<\/cipher>\n      <cipher>des-ede3-cfb<\/cipher>\n      <cipher>des-ede3-cfb1<\/cipher>\n      <cipher>des-ede3-cfb8<\/cipher>\n      <cipher>des-ede3-ecb<\/cipher>\n      <cipher>des-ede3-ofb<\/cipher>\n      <cipher>des-ofb<\/cipher>\n      <cipher>des3<\/cipher>\n      <cipher>des3-wrap<\/cipher>\n      <cipher>desx<\/cipher>\n      <cipher>desx-cbc<\/cipher>\n      <cipher>id-aes128-CCM<\/cipher>\n      <cipher>id-aes128-GCM<\/cipher>\n      <cipher>id-aes128-wrap<\/cipher>\n      <cipher>id-aes128-wrap-pad<\/cipher>\n      <cipher>id-aes192-CCM<\/cipher>\n      <cipher>id-aes192-GCM<\/cipher>\n      <cipher>id-aes192-wrap<\/cipher>\n      <cipher>id-aes192-wrap-pad<\/cipher>\n      <cipher>id-aes256-CCM<\/cipher>\n      <cipher>id-aes256-GCM<\/cipher>\n      <cipher>id-aes256-wrap<\/cipher>\n      <cipher>id-aes256-wrap-pad<\/cipher>\n      <cipher>id-smime-alg-CMS3DESwrap<\/cipher>\n      <cipher>idea<\/cipher>\n      <cipher>idea-cbc<\/cipher>\n      <cipher>idea-cfb<\/cipher>\n      <cipher>idea-ecb<\/cipher>\n      <cipher>idea-ofb<\/cipher>\n      <cipher>rc2<\/cipher>\n      <cipher>rc2-128<\/cipher>\n      <cipher>rc2-40<\/cipher>\n      <cipher>rc2-40-cbc<\/cipher>\n      <cipher>rc2-64<\/cipher>\n      <cipher>rc2-64-cbc<\/cipher>\n      <cipher>rc2-cbc<\/cipher>\n      <cipher>rc2-cfb<\/cipher>\n      <cipher>rc2-ecb<\/cipher>\n      <cipher>rc2-ofb<\/cipher>\n      <cipher>rc4<\/cipher>\n      <cipher>rc4-40<\/cipher>\n      <cipher>rc4-hmac-md5<\/cipher>\n      <cipher>seed<\/cipher>\n      <cipher>seed-cbc<\/cipher>\n      <cipher>seed-cfb<\/cipher>\n      <cipher>seed-ecb<\/cipher>\n      <cipher>seed-ofb<\/cipher>\n      <cipher>sm4<\/cipher>\n      <cipher>sm4-cbc<\/cipher>\n      <cipher>sm4-cfb<\/cipher>\n      <cipher>sm4-ctr<\/cipher>\n      <cipher>sm4-ecb<\/cipher>\n      <cipher>sm4-ofb<\/cipher>\n    <\/ciphers>\n  <\/dbscan>\n<\/xml>","status":"ok"}]}</textarea></pre><hr /><p><strong>die_enc_json TERMINATION</strong></p><pre>Array
(
    [response] => smart_single_download_id
    [smart_single_download_id] => 3051431
)
</pre><hr />