<div class="row">
    <div class="col-12">
        <h2 class="display-2 header-color text-center">Installing Network Devices</h2>
    </div>
    <div class="col-12">
        <h6 class="header-color text-center">Report 3</h6>
    </div>
</div>
<div class="row list-font-size w-100">
    <div class="col-6">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                Network Interface Configuration
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Logical Name
                </div>
                <div class="common-color">
                    enp2s11
                </div>
                <div class="title-color">
                    MAC address
                </div>
                <div class="common-color">
                    00:50:8d:67:93:67 (cmd: <code>lshw</code>)
                </div>
                <div class="title-color">
                    IP Address
                </div>
                <div class="common-color">
                    192.168.0.120 (cmd: <code>ifconfig</code>)
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
                    192.168.0.254 (cmd: <code>netstat -rn</code>)
                </div>
                <div class="title-color">
                    DNS server IP address
                </div>
                <div class="common-color">
                    df.rtu / 127.0.0.53 (cmd: <code>cat /etc/resolv.conf</code>)
                </div>
            </div>
            <div class="col-md-6 title-color text-md-right title-bold">
                Network Reachability Check
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Local df.rtu network reachability
                </div>
                <div>
                    <code>ping df.rtu</code>
                </div>
                <div class="title-color">
                    External RTU network reachability
                </div>
                <div>
                    <code>ping rtu.lv</code>
                </div>
                <div class="title-color">
                    Global Internet network reachability
                </div>
                <div>
                    <code>ping [google.com, ping.lv, ...]</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-md-6 title-color text-md-right title-bold">
                DNS server workability check
            </div>
            <div class="col-md-6 secondary-list-font-size pt-4">
                <code>nslookup / ping 127.0.0.53</code>
            </div>
            <div class="col-md-6 title-color text-md-right title-bold">
                Console commands for app updating and MC installing
            </div>
            <div class="col-md-6 secondary-list-font-size pt-4">
                <code>
                    apt-get update / apt-get install mc
                </code>
            </div>
            <div class="col-md-6 title-color text-md-right title-bold">
                Work with FTP server
            </div>
            <div class="col-md-6 secondary-list-font-size">
                <div class="title-color">
                    Download report3 template
                </div>
                <div>
                    <code>ftp df.rtu ... get /StudNet/reports/report3</code>
                </div>
                <div class="title-color">
                    Create comp4.3 catalogue
                </div>
                <div>
                    <code>mkdir comp4.3</code>
                </div>
                <div class="title-color">
                    Upload report2 and report3
                </div>
                <div>
                    <code>put report2 && put report3</code>
                </div>
            </div>
        </div>
    </div>
</div>
