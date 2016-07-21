# ICMP

项目实现了ICMP报文的传输，可以用来分析和学习ICMP报文

##结构说明##
ICMP.php 是用来向指定主机发送ICMP报文
myping.php 用来模拟ping程序
address.php 用来请求子网掩码
setting.php 用来请求ICMP时间戳
##运行##
由于本项目的socket访问了原始的网络协议，因此需要使用root权限来运行php文件
参数在php文件里面修改(比如host等等)
例如：sudo php myping.php
