<div class="row">
    <div class="col-12">
        <h2 class="display-2 header-color text-center">Installing Network Devices</h2>
    </div>
    <div class="col-12">
        <h6 class="header-color text-center">Report 3</h6>
    </div>
</div>
<div class="row list-font-size">
    <div class="col-md-6 title-color text-md-right title-bold">
        Network Interface Configuration
    </div>
    <div class="col-md-6 secondary-list ">
        <div class="title-color">
            Logical Name
        </div>
        <div class="common-color">
            enp2s11
        </div>
    </div>
</div>


{{--  Datortīkli
oratoriskais darbs 3: tīkla ierīču uzstādīšana
------------------------------------------------------------------
Datora numurs: 4.3
Studenti:  Alfreds Lapkovskis
Datorvārds: mainframe
Datums: 26.02.2019.
------------------------------------------------------------------
1. Tīkla interfeisa konfigurācija un komandas tā iegūšanai:
   - loģiskais vārds:

   - MAC adrese: 00:50:8d:67:93:67 [lshw]

   - IP adrese: 192.168.0.120 [ifconfig]

   - apakštīkla maska: [255.255.255.0]

   - noklusējuma vārtejas (default gateway) IP adrese: 192.168.0.254 [netstat -rn]

   - DNS serveru IP adreses: df.rtu / 127.0.0.53 [cat /etc/resolv.conf]


2. Tīkla darbspējas pārbaudes konsoles komandas:
   - lokāla tīkla df.rtu pieejamības pārbaude: + [ping df.rtu]

   - ārēja tīkla rtu.lv pieejamības pārbaude: - [ping rtu.lv]

   - globāla tīkla Internet pieejamības pārbaude: + [ping google.com, ping ping.lv, ping yandex.ru]


3. DNS servera darbspējas pārbaudes konsoles komandas: [nslookup / ping 127.0.0.53]


4. Konsoles komandas paketes sarakstu atjaunošanai un
   failu menedžera Midnight Commander uzstādīšanai: [apt-get update / apt-get install mc]


5. Darba secība ar FTP serveri:
   - lejupielādēt atskaites paraugu report3: [ftp df.rtu ... get /StudNet/reports/report3]

   - izveidot katalogu compN: [mkdir comp4.3]

   - augšupielādēt atskaites report2 un report3: [put report3]  --}}
