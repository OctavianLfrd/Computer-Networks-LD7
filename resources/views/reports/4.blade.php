<div class="row">
    <div class="col-12">
        <h1 class="display-1 text-center header-color">Internet Configuration</h1>
    </div>
    <div class="col-12">
        <h6 class="text-center header-color">Report 4</h6>
    </div>
</div>
<div class="row list-font-size">
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 text-md-right title-color title-bold">
                Netwotk Interface Configuration
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    IP address
                </div>
                <div class="common-color">
                    192.168.4.3 (cmd: <code>ifconfig</code>)
                </div>
                <div class="title-color">
                    Subnet mask
                </div>
                <div class="common-color">
                    255.255.255.0 (cmd: <code>ifconfig</code>)
                </div>
                <div class="title-color">
                    Default gateway
                </div>
                <div class="common-color">
                    192.168.0.248 (cmd: <code>netstat -rn</code>)
                </div>
                <div class="title-color">
                    DNS server addresses
                </div>
                <div class="common-color">
                    127.0.0.1 localhost<br>
                    192.168.0.248<br>
                    8.8.8.8<br>
                    (cmd: <code>nano /etc/resolv.conf</code>)
                </div>
            </div>
            <div class="col-md-6 text-md-right title-color title-bold">
                Network Interface Static Configuration Order
            </div>
            <div class="col-md-6 common-color secondary-list-font-size">
                iface <code>enp2s11</code> inet static<br>
                address <code>192.168.4.3</code><br>
                netmask <code>255.255.255.0</code><br>
                gateway <code>192.168.4.254</code><br>
                dns-nameservers <code>213.175.88.196 8.8.8.8</code><br>
                auto <code>enp2s11</code><br>
                (cmd: <code>nano /etc/network/interfaces</code>)
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 text-md-right title-color title-bold">
                Network Performance Testing Commands
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Network interface status and current configuration
                </div>
                <div>
                    <code>ifconfig</code>
                </div>
                <div class="title-color">
                    Own subnet computer reachability check
                </div>
                <div>
                    <code>ping 192.168.1.5</code>
                </div>
                <div class="title-color">
                    Router access to a neighbour subnet
                </div>
                <div>
                    <code>traceroute / ping 192.168.4.2</code>
                </div>
                <div class="title-color">
                    Router access to df.rtu subnet
                </div>
                <div>
                    <code>traceroute / ping df.rtu</code>
                </div>
                <div class="title-color">
                    Router access to the global Internet
                </div>
                <div>
                    <code>traceroute / ping [google.com, yandex.ru, ...]</code>
                </div>
                <div class="title-color">
                    DNS server performance check
                </div>
                <div>
                    <code>nslookup zevs.df.rtu / df.rtu.lv</code>
                </div>
                <div class="title-color">
                    Host file performance check
                </div>
                <div>
                    <code>nslookup / ping (local computer).politeh.lv</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-md-6 text-md-right title-color title-bold">
                Routes to sites and commands to obtain them
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Own subnet computer
                </div>
                <div class="common-color">
                    213.175.88.27<br>
                    (cmd: <code>traceroute mainframe.politeh.lv</code>)
                </div>
                <div class="title-color">
                    Neighbour subnet computer
                </div>
                <div class="common-color">
                    213.175.88.236<br>
                    (cmd: <code>traceroute alderamin.politeh.lv</code>)
                </div>
                <div class="title-color">
                    df.rtu subnet computer ftp.df.rtu
                </div>
                <div class="common-color">
                    192.168.0.247<br>
                    (cmd: <code>traceroute ftp.df.rtu</code>)
                </div>
                <div class="title-color">
                    Global Internet site: ping.lv
                </div>
                <div class="common-color">
                    82.193.66.66<br>
                    (cmd: <code>traceroute ping.lv</code>)
                </div>
            </div>
        </div>
    </div>
</div>
